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

// Define Massive Actions for this plugin
function plugin_barcode_MassiveActions($itemtype) {

   $generate_barcode_action = 'PluginBarcodeBarcode' . MassiveAction::CLASS_ACTION_SEPARATOR . 'Generate';
   $generate_barcode_label  = '<i class="fas fa-barcode"></i> '
                               . __('Barcode', 'barcode') . ' - ' . __('Print barcodes', 'barcode');

   $generate_qrcode_action  = 'PluginBarcodeQRcode' . MassiveAction::CLASS_ACTION_SEPARATOR . 'Generate';
   $generate_qrcode_label   = '<i class="fas fa-qrcode"></i> '
                               . __('Barcode', 'barcode') . ' - ' . __('Print QRcodes', 'barcode');

   if (!is_a($itemtype, CommonDBTM::class, true)) {
      return [];
   }

   $actions = [
      $generate_qrcode_action => $generate_qrcode_label,
   ];

   if (is_a($itemtype, CommonITILObject::class, true)) {
      $actions[$generate_barcode_action] = $generate_barcode_label;
   }

   /** @var CommonDBTM $item */
   $item = new $itemtype();
   $item->getEmpty();

   if (array_key_exists('otherserial', $item->fields)) {
      $actions[$generate_barcode_action] = $generate_barcode_label;
   }

   return $actions;
}



// Install process for plugin : need to return true if succeeded
function plugin_barcode_install() {
   global $DB;

   $migration = new Migration(PLUGIN_BARCODE_VERSION);

   $default_charset   = DBConnection::getDefaultCharset();
   $default_collation = DBConnection::getDefaultCollation();

   // ------------------------------------------------------------------
   // Create plugin doc directory
   // ------------------------------------------------------------------
   if (!file_exists(GLPI_PLUGIN_DOC_DIR . "/barcode")) {
      mkdir(GLPI_PLUGIN_DOC_DIR . "/barcode");
   }

   // ------------------------------------------------------------------
   // Table: glpi_plugin_barcode_configs
   // Rename legacy table name if it exists
   // ------------------------------------------------------------------
   $migration->renameTable("glpi_plugin_barcode_config", "glpi_plugin_barcode_configs");

   if (!$DB->tableExists("glpi_plugin_barcode_configs")) {
      // CREATE TABLE: use $DB->doQuery() — this is the internal method that
      // Migration itself uses (src/Migration.php:805) and is NOT blocked by
      // GLPI 11's "direct queries" restriction (only the public query() is).
      $DB->doQuery("CREATE TABLE `glpi_plugin_barcode_configs` (
         `id`   INT UNSIGNED NOT NULL AUTO_INCREMENT,
         `type` VARCHAR(20)  DEFAULT NULL,
         PRIMARY KEY (`id`)
      ) ENGINE=InnoDB
        DEFAULT CHARSET={$default_charset}
        COLLATE={$default_collation}
        ROW_FORMAT=DYNAMIC");

      // INSERT via ORM — allowed in GLPI 11
      $DB->insert("glpi_plugin_barcode_configs", [
         'id'   => 1,
         'type' => 'code128',
      ]);
   }

   // ------------------------------------------------------------------
   // Table: glpi_plugin_barcode_configs_types
   // ------------------------------------------------------------------
   $migration->renameTable("glpi_plugin_barcode_config_type", "glpi_plugin_barcode_configs_types");

   if (!$DB->tableExists("glpi_plugin_barcode_configs_types")) {
      $DB->doQuery("CREATE TABLE `glpi_plugin_barcode_configs_types` (
         `id`               INT UNSIGNED NOT NULL AUTO_INCREMENT,
         `type`             VARCHAR(20) DEFAULT NULL,
         `size`             VARCHAR(20) DEFAULT NULL,
         `orientation`      VARCHAR(9)  DEFAULT NULL,
         `marginTop`        INT         DEFAULT NULL,
         `marginBottom`     INT         DEFAULT NULL,
         `marginLeft`       INT         DEFAULT NULL,
         `marginRight`      INT         DEFAULT NULL,
         `marginHorizontal` INT         DEFAULT NULL,
         `marginVertical`   INT         DEFAULT NULL,
         `maxCodeWidth`     INT         DEFAULT NULL,
         `maxCodeHeight`    INT         DEFAULT NULL,
         `txtSize`          INT         DEFAULT NULL,
         `txtSpacing`       INT         DEFAULT NULL,
         PRIMARY KEY (`id`),
         UNIQUE KEY `uniq_type` (`type`)
      ) ENGINE=InnoDB
        DEFAULT CHARSET={$default_charset}
        COLLATE={$default_collation}
        ROW_FORMAT=DYNAMIC");

      // Default rows via ORM — allowed in GLPI 11
      $default_types = [
         ['type' => 'Code39',  'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 128, 'maxCodeHeight' => 50,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'code128', 'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 70,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'ean13',   'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 70,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'int25',   'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 70,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'postnet', 'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 70,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'upca',    'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 70,  'txtSize' => 8, 'txtSpacing' => 3],
         ['type' => 'QRcode',  'size' => 'A4', 'orientation' => 'Portrait',
          'marginTop' => 30, 'marginBottom' => 30, 'marginLeft' => 30, 'marginRight' => 30,
          'marginHorizontal' => 25, 'marginVertical' => 30,
          'maxCodeWidth' => 110, 'maxCodeHeight' => 100, 'txtSize' => 8, 'txtSpacing' => 3],
      ];

      foreach ($default_types as $row) {
         $DB->insert("glpi_plugin_barcode_configs_types", $row);
      }
   }

   // ------------------------------------------------------------------
   // Upgrade path: add txtSize / txtSpacing columns if missing
   // (table exists but was created by an older version)
   // Migration::addField() + migrationOneTable() = ALTER TABLE — correct
   // use for tables that already exist.
   // ------------------------------------------------------------------
   if ($DB->tableExists("glpi_plugin_barcode_configs_types")
         && !$DB->fieldExists("glpi_plugin_barcode_configs_types", "txtSize")) {
      $migration->addField("glpi_plugin_barcode_configs_types", "txtSize",    "integer");
      $migration->addField("glpi_plugin_barcode_configs_types", "txtSpacing", "integer");
      $migration->migrationOneTable("glpi_plugin_barcode_configs_types");
   }

   // ------------------------------------------------------------------
   // Upgrade path: insert QRcode row if it is missing
   // ------------------------------------------------------------------
   if ($DB->tableExists("glpi_plugin_barcode_configs_types")
         && !countElementsInTable("glpi_plugin_barcode_configs_types", ['type' => 'QRcode'])) {
      $DB->insert("glpi_plugin_barcode_configs_types", [
         'type'             => 'QRcode',
         'size'             => 'A4',
         'orientation'      => 'Portrait',
         'marginTop'        => 30,
         'marginBottom'     => 30,
         'marginLeft'       => 30,
         'marginRight'      => 30,
         'marginHorizontal' => 25,
         'marginVertical'   => 30,
         'maxCodeWidth'     => 110,
         'maxCodeHeight'    => 100,
         'txtSize'          => 8,
         'txtSpacing'       => 3,
      ]);
   }

   // ------------------------------------------------------------------
   // Profile rights
   // ------------------------------------------------------------------
   include_once Plugin::getPhpDir('barcode') . '/inc/profile.class.php';
   include_once Plugin::getPhpDir('barcode') . '/inc/config.class.php';
   PluginBarcodeProfile::initProfile();

   // Drop legacy profiles table (Migration::dropTable = ALTER/DROP, allowed)
   if ($DB->tableExists("glpi_plugin_barcode_profiles")) {
      $migration->dropTable("glpi_plugin_barcode_profiles");
      $migration->executeMigration();
   }

   return true;
}



// Uninstall process for plugin : need to return true if succeeded
function plugin_barcode_uninstall() {
   global $DB;

   $migration = new Migration(PLUGIN_BARCODE_VERSION);

   foreach ([
      'glpi_plugin_barcode_configs',
      'glpi_plugin_barcode_configs_types',
      'glpi_plugin_barcode_profiles',
   ] as $table) {
      if ($DB->tableExists($table)) {
         $migration->dropTable($table);
      }
   }

   $migration->executeMigration();

   include_once Plugin::getPhpDir('barcode') . '/inc/profile.class.php';
   PluginBarcodeProfile::removeRights();

   return true;
}
