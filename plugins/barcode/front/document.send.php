<?php

/*
   ------------------------------------------------------------------------
   Barcode
   Copyright (C) 2009-2024 by the Barcode plugin Development Team.
   https://forge.indepnet.net/projects/barscode
   ------------------------------------------------------------------------
   LICENSE: AGPL v3+
   ------------------------------------------------------------------------
 */

/*
 * GLPI 11 / Symfony — cómo funciona LegacyFileLoadController:
 *
 *   1. Hace ob_start()
 *   2. require( este archivo )
 *   3. $output = ob_get_clean()
 *   4. Crea Response($output) y copia los header() capturados con headers_list()
 *
 * Por tanto:
 *  - header() SÍ funciona — Symfony los lee con headers_list() ANTES del exit
 *  - readfile() SÍ funciona — escribe en el buffer ob_start() de Symfony
 *  - NO se debe llamar ob_end_clean()  → destruiría el buffer de Symfony
 *  - NO se debe llamar exit/die         → impediría que Symfony construya la Response
 */

// Siempre requerir usuario autenticado
Session::checkLoginUser();

if (!isset($_GET['file'])) {
   Html::displayErrorAndDie(__('Invalid Filename', 'barcode'), true);
}

$requested = $_GET['file'];

// Seguridad: rechazar path traversal
if (strpos($requested, '..') !== false) {
   Html::displayErrorAndDie(__('Unauthorized access to this file', 'barcode'), true);
}

$splitter = explode('/', $requested);

// Solo permitir rutas del tipo "barcode/<archivo>"
if (count($splitter) !== 2 || $splitter[0] !== 'barcode') {
   Html::displayErrorAndDie(__('Unauthorized access to this file', 'barcode'), true);
}

$filepath = GLPI_PLUGIN_DOC_DIR . '/' . $requested;

if (!file_exists($filepath) || !is_file($filepath)) {
   Html::displayErrorAndDie(__('Unauthorized access to this file', 'barcode'), true);
}

// Determinar MIME type
$finfo    = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $finfo->file($filepath) ?: 'application/octet-stream';
$filename = basename($filepath);
$filesize = filesize($filepath);

// Enviar headers — Symfony los captura vía headers_list() al construir la Response
header('Content-Type: '        . $mimetype);
header('Content-Length: '      . $filesize);
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Cache-Control: private, must-revalidate');
header('Pragma: private');
header('Expires: Mon, 26 Nov 1962 00:00:00 GMT');

// Volcar el archivo en el buffer activo (ob_start de Symfony lo captura)
// NO llamar ob_end_clean() — destruiría el buffer de Symfony → respuesta vacía
// NO llamar exit/die       — impediría que Symfony construya el Response
readfile($filepath);
