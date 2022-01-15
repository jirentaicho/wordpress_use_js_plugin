<?php

namespace my_plugin;

class DataStore{

    public static function getData()
    {
        return array(            
            'label' => '商品売上数',
            'labels' => array('煎餅','クッキー','日本茶'),
            'data' => array(80,120,100),
            'backgroundColor' => array(
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
            ),
            'borderColor' => array(
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
            ),
        );
    }

}

new DataStore;