<?php

require_once('../libs/smarty/Smarty.class.php');
require_once('../model/User.php');

$smarty = new Smarty();

$smarty->template_dir = '../view/templates/';
$smarty->compile_dir  = '../view/templates_c/';
$smarty->config_dir   = '../view/config/';
$smarty->cache_dir    = '../view/cache/';

if(!(isset($_GET['id']) && $_GET['id'] === 'vongocthaonguyen')) {
    echo "User not found";
} else {
    $smarty->assign('id',$username_A);

    function my_encrypt($data, $key) {
        // Remove the base64 encoding from our key
        $encryption_key = base64_decode($key);
        // Generate an initialization vector
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
        // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
        return base64_encode($encrypted . '::' . $iv);
    }

    $record[0] = my_encrypt($record[0], $sym1);
    $record[1] = my_encrypt($record[1], $sym2);
    $record[2] = my_encrypt($record[2], $sym3);
    $record[3] = my_encrypt($record[3], $sym4);

    $smarty->assign('record0',$record[0]);
    $smarty->assign('record1',$record[1]);
    $smarty->assign('record2',$record[2]);
    $smarty->assign('record3',$record[3]);

    $smarty->display('patient.tpl');
}