<?php
/**
 * Plugin Name: MyChart
 */


# ワードプレスのセットアップができていない場合に中止
defined('ABSPATH') || exit;

# プラグインパスを定数定義しておく
define('MY_CHART_DIR', plugin_dir_path(__FILE__));

final class MyChart {

    function __construct() {
        # セットアップを行います
        add_action('plugins_loaded', array($this, 'plugin_setup'), 10);
    }

    public function plugin_setup()
    {
        if (is_admin()) {
            #　ファイルの読み込みを行う
            require_once MY_CHART_DIR . 'Menu.php';
            require_once MY_CHART_DIR . 'view/GraphView.php';
            require_once MY_CHART_DIR . 'AdminAssets.php';
            require_once MY_CHART_DIR . 'DataStore.php';
        }
        
    }

    function activation() {

    }

    function deactivation() {

    }


}

new MyChart();