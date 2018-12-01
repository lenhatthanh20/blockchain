<?php
require_once('../model/User.php');
session_start();
global $_SESSION;

if(isset($_SESSION["username"])){
    //echo $_SESSION["username"];
} else {
    header('Location: index.php');
}

if(isset($_POST["notify"]) && $_POST["notify"] === 'ok'){
    $myfile = fopen("../libs/notify.txt", "r") or die("Unable to open file!");
    $notify =  fread($myfile,filesize("../libs/notify.txt"));
    fclose($myfile);
    if($notify !== ''){
        echo $notify;
        $myfile = fopen("../libs/notify.txt", "w") or die("Unable to open file!");
        fwrite($myfile, 'thanh');
        fclose($myfile);
    }
}
