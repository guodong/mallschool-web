<?php
session_start();
require_once ('Smarty-3.1.19/libs/Smarty.class.php');

$uri = $_SERVER['REQUEST_URI'];

require_once 'urls.php';

foreach ($urls as $reg => $tpl) {
    if (preg_match($reg, $uri, $matched)) {
        $smarty = new Smarty();
        $smarty->setTemplateDir('templates/');
        $smarty->setCompileDir('templates_c/');
        $smarty->setConfigDir('configs/');
        $smarty->setCacheDir('cache/');
        $smarty->left_delimiter = '{!';
        $smarty->right_delimiter = '!}';
        foreach ($matched as $k=>$v){
            $smarty->assign($k, $v);
        }
        $smarty->display($tpl.'.html');
        break;
    }
}