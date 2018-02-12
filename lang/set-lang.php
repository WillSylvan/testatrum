<?php
    if(!isset($_SESSION)) {
        session_start();
   }

    $SiteUrl = 'http://localhost/www/atrum/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='lv' || $_GET['lang']=='ru') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'lv';
    }
?>