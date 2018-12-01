<?php

require_once('../libs/smarty/Smarty.class.php');
require_once('../model/User.php');

session_start();

$smarty = new Smarty();

$smarty->template_dir = '../view/templates/';
$smarty->compile_dir  = '../view/templates_c/';
$smarty->config_dir   = '../view/config/';
$smarty->cache_dir    = '../view/cache/';

//global $_SESSION;

if(isset($_SESSION["username"])){
    //echo $_SESSION["username"];
} else {
    header('Location: index.php');
}

$smarty->assign('id',$username_B);

$smarty->assign('record0',$recordA[0]);
$smarty->assign('record1',$recordA[1]);
$smarty->assign('record2',$recordA[2]);

$smarty->assign('private_key',$private_keyB);
$smarty->assign('public_key',$public_keyB);

$smarty->display('doctor.tpl');