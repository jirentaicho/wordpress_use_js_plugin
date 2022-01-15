<?php

namespace my_plugin;

class AdminAssets{

    public function __construct()
    {
        # 管理ページのチャート画面にjsの利用設定を行います
        add_action('admin_enqueue_scripts', array($this, 'admin_scripts'));
    }

    /**
     * $hookで管理ページの呼び出し元管理ページのフック名
     * 
     * 
     */
    public function admin_scripts($hook)
    {

        if($hook != 'toplevel_page_graph'){
            return;
        }
        # $in_footerをtrueにするとjsがfooterにて読み込まれます。
        wp_enqueue_script('my_plugin_chart', plugin_dir_url(__FILE__) . 'dist/bundle.js', false, false, true);
        wp_localize_script('my_plugin_chart', 'chart_data', self::getChartData());   
    }


    /**
     * JSに渡す初期データ
     * 
     */
    public static function getChartData()
    {
        return array(            
            'label' => '当社店舗の販売数',
            'labels' => array('渋谷店','原宿店','新宿店','町田店','川崎店'),
            'data' => array(80,120,100,70,90),
            'backgroundColor' => array(
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
            ),
            'borderColor' => array(
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ),
        );
    }

}

new AdminAssets;