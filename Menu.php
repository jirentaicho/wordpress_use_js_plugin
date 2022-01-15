<?php

namespace my_plugin;

class Menu{

    public function __construct() {
        # 管理ページのチャート画面にjsの利用設定を行います
        add_action('admin_menu', array($this, 'wp_admin_menu'));
    }

    /**
     * $hookで管理ページの呼び出し元管理ページのフック名
     * 
     * 
     */
    public function wp_admin_menu() {

        add_menu_page(
            'グラフ',
            'グラフ',
            'manage_options',
            'graph',
            array('my_plugin\GraphView','view')
        );
    }

}

new Menu;