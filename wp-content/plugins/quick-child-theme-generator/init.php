<?php
if (!defined('ABSPATH')) { exit; }  // Exit if accessed directly

/* Constants */
define('QCTHG_PATH', dirname(__FILE__));
define('QCTHG_SLUG_PATH', dirname(__FILE__).'/quick-child-theme-generator.php');
define('QCTHG_URL', plugin_dir_url(__FILE__));
define('QCTHG_ADMIN_URL', admin_url());

add_filter('plugin_action_links', 'qcthgActionLinks', 10, 2);

function qcthgActionLinks($linksAr, $pluginFileName)
{
	$pluginAdminUrl = QCTHG_ADMIN_URL.'admin.php?page=quick-child-theme-generator';
	$link = '<a href='.$pluginAdminUrl.' title="Create New Child Theme">Create New</a>';

	if(strpos($pluginFileName, 'quick-child-theme-generator.php')) {
		array_unshift($linksAr, $link);
	}
	return $linksAr;
}

$loadDependencies = glob(QCTHG_PATH . '/includes/qcthg_*');
foreach($loadDependencies as $dependency) {
    require_once($dependency);
}

QCTHG_Main::qcthgInitialization();
