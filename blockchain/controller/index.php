<?php
require_once('../libs/smarty/Smarty.class.php');
require_once('../model/User.php');

session_start();

$smarty = new Smarty();

$smarty->template_dir = '../view/templates/';
$smarty->compile_dir  = '../view/templates_c/';
$smarty->config_dir   = '../view/config/';
$smarty->cache_dir    = '../view/cache/';

//$smarty->assign('name','Ned');

//$smarty->debugging = true;

if(isset($_POST['password']) && isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username === $username_A && $password === $password_A){
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        //var_dump($_SESSION["username"]);
    } elseif ($username === $username_B && $password === $password_B) {
        $_SESSION["username"] = $username_B;
        header("Location: doctor.php");
    }
}

$smarty->display('login.tpl');