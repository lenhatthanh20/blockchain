<?php
if(isset($_POST["confirm"]) && $_POST["confirm"] === 'ok'){
    $myfile = fopen("../libs/confirm.txt", "w");
    fwrite($myfile, 'ok');
    fclose($myfile);
}

if(isset($_POST["confirm"]) && $_POST["confirm"] === 'isOk'){
    //$confirm = [];
    $myfile = fopen("../libs/confirm.txt", "r");
    $confirm =  fread($myfile,filesize("../libs/confirm.txt"));
    fclose($myfile);
    //if($confirm !== ''){
    echo $confirm;
    $myfile = fopen("../libs/confirm.txt", "w") or die("Unable to open file!");
    fwrite($myfile, 'notOk');
    fclose($myfile);
    //}
}
