<?php

/*
   ------------------------------------------------------------------------
   Barcode
   Copyright (C) 2009-2024 by the Barcode plugin Development Team.
   https://forge.indepnet.net/projects/barcode
   ------------------------------------------------------------------------
   LICENSE: AGPL License 3.0 or (at your option) any later version
   ------------------------------------------------------------------------
 */

/*
 * Entrega de archivos PDF — compatible GLPI 10 y GLPI 11 (Symfony).
 *
 * GLPI 11 usa LegacyFileLoadController:
 *   1. ob_start()
 *   2. require( este archivo )        ← aquí estamos
 *   3. $content = ob_get_clean()
 *   4. new Response($content)  con headers copiados desde headers_list()
 *
 * Por tanto:
 *  - NO llamar ob_end_clean() → destruiría el buffer de Symfony.
 *  - NO llamar exit/die       → impediría que Symfony construya el Response.
 *  - readfile() escribe en el buffer activo; Symfony lo captura.
 *  - header() es capturado por Symfony vía headers_list().
 *
 * Para que el navegador guarde el archivo como .pdf (no como .html):
 *  - Usar Content-Disposition: attachment (fuerza descarga con nombre correcto).
 *  - El token URL no termina en .pdf, pero el filename sí — los navegadores
 *    modernos usan el filename del Content-Disposition para "Guardar como".
 */

Session::checkLoginUser();

// ── Resolver token ────────────────────────────────────────────────────────────
if (empty($_GET['token'])) {
   Http::notFound();
   return;
}

$token   = (string)$_GET['token'];
$absPath = PluginBarcodeBarcode::resolveTmpPdf($token);

if ($absPath === null) {
   Html::displayErrorAndDie(
      __('The requested file no longer exists or has already been downloaded.', 'barcode'),
      true
   );
   return;
}

// ── Seguridad: el path debe estar dentro de GLPI_TMP_DIR ─────────────────────
$realPath = realpath($absPath);
$realTmp  = realpath(GLPI_TMP_DIR);

if ($realPath === false || $realTmp === false
      || strpos($realPath, $realTmp . DIRECTORY_SEPARATOR) !== 0) {
   Html::displayErrorAndDie(__('Unauthorized access to this file', 'barcode'), true);
   return;
}

// ── Nombre de descarga con extensión .pdf ────────────────────────────────────
// El tmp file tiene formato: barcode_<uid>_<type>_<rand>.pdf
$tmpBasename  = basename($realPath);
$downloadName = 'barcodes.pdf';
if (preg_match('/barcode_\d+_([a-zA-Z0-9]+)_\d+\.pdf$/', $tmpBasename, $m)) {
   $downloadName = 'barcodes_' . $m[1] . '.pdf';
}

// ── Programar borrado tras la respuesta ───────────────────────────────────────
// register_shutdown_function se ejecuta al final del script, incluyendo
// después de que Symfony haya hecho ob_get_clean() y enviado la Response.
register_shutdown_function(static function () use ($realPath): void {
   if (file_exists($realPath)) {
      @unlink($realPath);
   }
});

$filesize = filesize($realPath);

// ── Headers ───────────────────────────────────────────────────────────────────
// Mismo patrón que document.send.php (que funciona correctamente en GLPI 11).
// 'attachment' garantiza que el navegador guarde el archivo con el nombre
// correcto (.pdf) en lugar de inferirlo de la URL (send.php → .php/.html).
// El enlace tiene target='_blank', así el navegador abre la descarga en
// nueva pestaña y la mayoría de los visores PDF la abren automáticamente.
header('Content-Type: application/pdf');
header('Content-Length: ' . $filesize);
header('Content-Disposition: attachment; filename="' . $downloadName . '"');
header('Cache-Control: private, must-revalidate');
header('Pragma: private');
header('Expires: Mon, 26 Nov 1962 00:00:00 GMT');

// ── Volcar el archivo en el buffer activo ────────────────────────────────────
// En GLPI 11: cae en el ob_start() de Symfony → construye Response con
//             Content-Type: application/pdf y los bytes del PDF como body.
// En GLPI 10: va directamente a stdout.
readfile($realPath);
