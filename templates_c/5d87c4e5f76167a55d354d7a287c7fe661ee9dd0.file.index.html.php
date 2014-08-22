<?php /* Smarty version Smarty-3.1.19, created on 2014-08-22 16:13:39
         compiled from "templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:72383480353e595b1ce08e7-62371894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d87c4e5f76167a55d354d7a287c7fe661ee9dd0' => 
    array (
      0 => 'templates/index.html',
      1 => 1408441500,
      2 => 'file',
    ),
    'c6e75044cd41467cac384b8d3185deb0902ab6db' => 
    array (
      0 => 'templates/base.html',
      1 => 1408694939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72383480353e595b1ce08e7-62371894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e595b1d0ffc3_67876664',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e595b1d0ffc3_67876664')) {function content_53e595b1d0ffc3_67876664($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link rel="SHORTCUT ICON" href="/static/images/ico/favicon.ico"> 
<title>喵校园</title>

<!-- Bootstrap -->
<link
	href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css"
	rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script data-main="/static/js/main"
	src="/static/js/require.js"></script>
	<script>
var API_URL = 'http://api.jige.olege.com';
$(function(){
	document.getElementById('dropmenu').style.display = "none";
});

function show_dropmenu(){
	document.getElementById('dropmenu').style.display = "";
}
</script>
</head>
<body>

	<div class="top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
					<a class="menu-left" href="/"><span
						class="glyphicon glyphicon-home"></span> 首 页</a> 
						<span class="noauth">
						<a class="menu-right" href="/login"><span class="glyphicon glyphicon-off"></span> 登陆</a>
						<a class="menu-right" href="/register"><span class="glyphicon glyphicon-pencil"></span> 注 册</a>
						</span>
						<span class="auth pull-right" style="position: relative;">
							<a href="javascript:show_dropmenu();">昵称 <span class="caret"></span></a>
							<div id="dropmenu" class="dpd" >
								<a href="/user/inform">个人信息</a>
								<a href="/user/mybooks">我的书籍</a>
								<a href="/user/collection">我的收藏</a>
								<a>退出</a>
							</div>
						</span>
				</div>
			</div>
		</div>
	</div>
	
<div class="container-fluid">
	<div class="row">
		<div class="header" style="background-image: url(/static/images/bg.png);width:100%">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img src="/static/images/ico/logo.png" alt=""  /> 
			</div>
		</div>
	</div>
	<div class="row" style="text-align: center">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<a href="/sb"><img src="/static/images/menu/menu1.png" alt="..." class="img-rounded"	style="height: 100px; margin: 30px" /> </a>
			<a href="/bb"><img src="/static/images/menu/menu2.png" alt="..." class="img-rounded" 	style="height: 100px; margin: 30px" /> </a>
			<img src="/static/images/menu/menu3.png" alt="..." class="img-rounded" 	style="height: 100px; margin: 30px" /> 
			<img src="/static/images/menu/menu4.png" alt="..." class="img-rounded" 	style="height: 100px; margin: 30px" />
		</div>
	</div>
</div>

<script>
$(function(){
	
})
</script>
</body>
</html><?php }} ?>
