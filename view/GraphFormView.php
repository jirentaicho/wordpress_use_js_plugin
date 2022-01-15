<?php

namespace my_plugin;

# フォームの処理を行います。
if (!current_user_can('manage_options'))  {
    wp_die( __('不正なアクセスです')    );
}

if (isset($_POST['change_graph']) && check_admin_referer('graph_form_csrf')) {
    getGraph();
}

function getGraph()
{
    # データを取得する
    $data = DataStore::getData();
    wp_localize_script('my_plugin_chart', 'chart_data', $data);
}


echo '<form method="post">';
    wp_nonce_field('graph_form_csrf');
    echo '<input type="hidden" value="true" name="change_graph" />';
    submit_button('別のデータを表示する');
echo '</form>';

?>