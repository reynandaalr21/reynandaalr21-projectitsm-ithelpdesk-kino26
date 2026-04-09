<?php

/*
   ------------------------------------------------------------------------
   Barcode
   Copyright (C) 2009-2024 by the Barcode plugin Development Team.
   https://forge.indepnet.net/projects/barscode
   ------------------------------------------------------------------------

   LICENSE

   This file is part of barcode plugin project.

   Plugin Barcode is free software: you can redistribute it and/or modify
   it under the terms of the GNU Affero General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   Plugin Barcode is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
   GNU Affero General Public License for more details.

   You should have received a copy of the GNU Affero General Public License
   along with Plugin Barcode. If not, see <http://www.gnu.org/licenses/>.

   ------------------------------------------------------------------------

   @package   Plugin Barcode
   @author    David Durieux
   @co-author
   @copyright Copyright (c) 2009-2024 Barcode plugin Development team
   @license   AGPL License 3.0 or (at your option) any later version
   @link      https://forge.indepnet.net/projects/barscode
   @since     2009

   ------------------------------------------------------------------------
 */

define("PLUGIN_BARCODE_VERSION", "2.8.0");

// Minimal GLPI version, inclusive
define('PLUGIN_BARCODE_MIN_GLPI', '10.0.0');
// Maximum GLPI version, exclusive
define('PLUGIN_BARCODE_MAX_GLPI', '11.0.99');

// Init the hooks of the plugins - Needed
function plugin_init_barcode() {
   global $PLUGIN_HOOKS;

   $PLUGIN_HOOKS['csrf_compliant']['barcode'] = true;

   // GLPI 11 compatibility: Plugin::registerClass() was removed in GLPI 11.
   // Classes in inc/ are autoloaded by GLPI built-in classloader (naming convention).
   if (method_exists('Plugin', 'registerClass')) {
      // GLPI 10.x
      Plugin::registerClass('PluginBarcodeProfile', ['addtabon' => ['Profile']]);
      Plugin::registerClass('PluginBarcodeBarcode');
      Plugin::registerClass('PluginBarcodeConfig');
   } else {
      // GLPI 11+ - ensure class files are loaded for tab discovery
      include_once(Plugin::getPhpDir('barcode') . '/inc/profile.class.php');
      include_once(Plugin::getPhpDir('barcode') . '/inc/barcode.class.php');
      include_once(Plugin::getPhpDir('barcode') . '/inc/config.class.php');
      include_once(Plugin::getPhpDir('barcode') . '/inc/config_type.class.php');
      include_once(Plugin::getPhpDir('barcode') . '/inc/qrcode.class.php');
   }

   // Display a menu entry?
   if (Session::haveRight('plugin_barcode_barcode', CREATE)
           || Session::haveRight('plugin_barcode_config', UPDATE)) {

      $PLUGIN_HOOKS['pre_item_purge']['barcode']
         = ['Profile' => ['PluginBarcodeProfile', 'cleanProfiles']];

      // Massive Action definition
      $PLUGIN_HOOKS['use_massive_action']['barcode'] = 1;

      // Menu registration - compatible with GLPI 10 and 11
      if (version_compare(GLPI_VERSION, '11.0', '>=')) {
         // GLPI 11+ menu registration via menu_toadd hook
         $PLUGIN_HOOKS['menu_toadd']['barcode'] = ['tools' => 'PluginBarcodeBarcode'];
      } else {
         // GLPI 10.x menu registration
         $web_dir = '/' . Plugin::getWebDir('barcode', false);
         $PLUGIN_HOOKS['submenu_entry']['barcode']['options']['barcode']['title'] = __('Barcode', 'barcode');
         $PLUGIN_HOOKS['submenu_entry']['barcode']['options']['barcode']['page']  = $web_dir . '/front/barcode.form.php';
         $PLUGIN_HOOKS['submenu_entry']['barcode']['options']['barcode']['links']['add']    = $web_dir . '/front/barcode.form.php';
         $PLUGIN_HOOKS['submenu_entry']['barcode']['options']['barcode']['links']['config'] = $web_dir . '/front/config.php';
         $PLUGIN_HOOKS['helpdesk_menu_entry']['barcode'] = true;
      }
   }

   // Config page
   if (Session::haveRight('config', UPDATE)) {
      $PLUGIN_HOOKS['config_page']['barcode'] = 'front/config.php';
   }

   // Redirect code: /glpi/index.php?redirect=plugin_barcode_2 goes to form ID 2
   $PLUGIN_HOOKS['redirect_page']['barcode'] = 'barcode.form.php';
}

function plugin_version_barcode() {

   return [
      'name'           => 'Barcode',
      'shortname'      => 'barcode',
      'version'        => PLUGIN_BARCODE_VERSION,
      'license'        => 'AGPLv3+',
      'author'         => 'David DURIEUX, Jean Marc GRISARD, Vincent MAZZONI',
      'homepage'       => 'https://github.com/pluginsGLPI/barcode',
      'requirements'   => [
         'glpi' => [
            'min' => PLUGIN_BARCODE_MIN_GLPI,
            'max' => PLUGIN_BARCODE_MAX_GLPI,
         ]
      ]
   ];
}
