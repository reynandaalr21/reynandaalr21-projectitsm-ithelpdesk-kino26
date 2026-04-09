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

// GLPI 11: bootstrap is handled by the Symfony router (LegacyFileLoadController).

if (!isset($_POST["length"]))      { $_POST["length"]      = ""; }
if (!isset($_POST["prefixe"]))     { $_POST["prefixe"]     = ""; }
if (!isset($_POST["size"]))        { $_POST["size"]        = ""; }
if (!isset($_POST["format"]))      { $_POST["format"]      = ""; }

$barcode  = new PluginBarcodeBarcode();
$pdfPath  = $barcode->printPDF($_POST);

// Register the tmp file and build a token URL — send.php will serve+delete it.
$token = PluginBarcodeBarcode::registerTmpPdf($pdfPath);
$msg   = "<a href='" . Plugin::getWebDir('barcode') . '/front/send.php?token=' . urlencode($token)
       . "' target='_blank' rel='noopener noreferrer'>" . __('Generated file', 'barcode') . "</a>";
Session::addMessageAfterRedirect($msg);

Html::back();
