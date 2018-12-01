<?php

require_once('../libs/smarty/Smarty.class.php');
require_once('../model/User.php');

session_start();

$smarty = new Smarty();

$smarty->template_dir = '../view/templates/';
$smarty->compile_dir  = '../view/templates_c/';
$smarty->config_dir   = '../view/config/';
$smarty->cache_dir    = '../view/cache/';

global $_SESSION;

if(isset($_SESSION["username"])){
    //echo $_SESSION["username"];
} else {
    header('Location: index.php');
}

function my_decrypt($data, $key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

if(isset($_POST["field"]) && isset($_POST["record"])){
    $action = $_POST["field"];
    $recordEnscrypt = $_POST["record"];
    $myfile = fopen("../libs/notify.txt", "w") or die("Unable to open file!");

    if($action === 'information') {
        echo my_decrypt($recordEnscrypt, $sym1);
        fwrite($myfile, $action);
    }
    if($action === 'health') {
        echo my_decrypt($recordEnscrypt, $sym2);
        fwrite($myfile, $action);
    }
    if($action === 'action') {
        echo my_decrypt($recordEnscrypt, $sym3);
        fwrite($myfile, $action);
    }
    if($action === 'latest') {
        echo my_decrypt($recordEnscrypt, $sym4);
        fwrite($myfile, $action);
    }
} else {
    $smarty->assign('id',$username_A);

    $smarty->assign('record0',$record[0]);
    $smarty->assign('record1',$record[1]);
    $smarty->assign('record2',$record[2]);
    $smarty->assign('record3',$record[3]);

    $smarty->assign('private_key',$private_key);
    $smarty->assign('public_key',$public_key);

    $smarty->display('dashboard.tpl');
}