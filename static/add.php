<?php
$get_json_file = 'word.json';
$write_list = array();
if($_POST){
    $json_string = file_get_contents($get_json_file);
    $list = json_decode($json_string, true);
    $list = is_array($list)?$list:array();
    $write_list['word'] = $_POST['word'];
    $write_list['chineseword'] = $_POST['chineseword'];
    $write_list['example'] = $_POST['example'];
    $write_list['desc'] = $_POST['desc'];
    $write_list['type'] = $_POST['type'];
    $write_list['audio'] = $_POST['audio'];
    $list['data'][] = $write_list;
    file_put_contents($get_json_file, json_encode($list,JSON_UNESCAPED_UNICODE));
}
