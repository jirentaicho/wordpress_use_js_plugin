<?php

namespace my_plugin;

class GraphView{

    public function __construct()
    {
        
    }

    public static function view()
    {
        # 外部定義ファイルの読み込み
        include MY_CHART_DIR . 'view/GraphFormView.php';

        ?>
            <h1>街のまんまる屋さん</h1>
            <div style="height:500px;">
                <canvas id="myChart"></canvas>
            </div>
        <?php
    }
    
}

new GraphView;