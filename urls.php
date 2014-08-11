<?php
$urls = array(
        '#^/$#' => 'index',
		'#^/sb$#'=>'sb/index',
		'#^/bb$#'=>'bb/index',
        '#^/user/inform$#' => 'user/inform',
		'#^/user/firstlogin$#' => 'user/firstlogin',
		'#^/user/collection$#' => 'user/collection',
		'#^/user/mybooks$#' => 'user/mybooks',
        '#^/register$#' => 'register',
		'#^/login$#' => 'login',
		'#^/m?.*$#' => 'm/index'
);