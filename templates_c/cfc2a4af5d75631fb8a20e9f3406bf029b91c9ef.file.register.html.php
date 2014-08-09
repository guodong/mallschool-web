<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 13:32:05
         compiled from "templates/register.html" */ ?>
<?php /*%%SmartyHeaderCode:162698434953e5ad6f625609-67936027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc2a4af5d75631fb8a20e9f3406bf029b91c9ef' => 
    array (
      0 => 'templates/register.html',
      1 => 1407562325,
      2 => 'file',
    ),
    'e6fc741ff98471f0e5998f4a7fc1b038f422201a' => 
    array (
      0 => 'templates/layout.html',
      1 => 1407561046,
      2 => 'file',
    ),
    'c6e75044cd41467cac384b8d3185deb0902ab6db' => 
    array (
      0 => 'templates/base.html',
      1 => 1407561021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162698434953e5ad6f625609-67936027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e5ad6f63ccf5_64215608',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5ad6f63ccf5_64215608')) {function content_53e5ad6f63ccf5_64215608($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>喵校园</title>

<!-- Bootstrap -->
<link
	href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css"
	rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script data-main="js/main"
	src="http://requirejs.org/docs/release/2.1.14/minified/require.js"></script>
</head>
<body>

	<div class="top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<a class="menu-left" href="/"><span
						class="glyphicon glyphicon-home"></span> 首 页</a> <a class="menu-right"
						href="/login"><span class="glyphicon glyphicon-off"></span> 登
						陆</a> <a class="menu-right" href="/register"><span
						class="glyphicon glyphicon-pencil"></span> 注 册</a>
				</div>
			</div>
		</div>
	</div>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">

<div class="row"
	style="margin: 30px;">
	<div class="col-md-4 col-md-offset-2">
		<span class="glyphicon glyphicon-envelope"></span> 邮箱注册
	</div>
	<div class="col-md-4">
		<span style="float: right;">已有账号？<a
			href="login.html" style="color: red">登录》</a></span>
	</div>
	<div class="col-md-10 col-md-offset-1"
		style="height: 1px; margin-top: 10px; background-color: #D5D5D5; overflow: hidden;"></div>
</div>
<div class="row"
	style=" margin-top: 40px; width: 800px; margin-right: auto; margin-left: auto;">
	<div class="form-horizontal regform" id="form" role="form">
		<div class="form-group">
			<label for="inputEmail3" class="col-md-2 control-label">邮箱</label>
			<div class="col-md-4">
				<input type="email" name="email" class="form-control"
					id="inputEmail3" placeholder="Email"> <span
					class="help-block">使用edu邮箱注册，会得到更多权限</span>
			</div>
			<div class="col-md-6">
				<div class="alert alert-info" role="alert">
					<img src="/static/images/alart.jpg" class="alartimg" /> &nbsp用于登录和找回密码，不会公开
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-md-2 control-label">密码</label>
			<div class="col-md-4">
				<input type="password" name='password' class="form-control"
					id="inputPassword3" placeholder="password">
			</div>
			<div class="col-md-6">
				<div class="alert alert-info" role="alert">
					<img src="/static/images/alart.jpg" class="alartimg" />
					&nbsp6-12字符，可使用字母、数字以及符号的任意组合
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword4" class="col-md-2 control-label">确认密码</label>
			<div class="col-md-4">
				<input type="password" class="form-control" id="inputPassword4"
					placeholder="password">
			</div>
			<div class="col-md-6">
				<div class="alert alert-info" role="alert">
					<img src="/static/images/alart.jpg" class="alartimg" /> &nbsp请再次输入确认密码
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="inputcode" class="col-md-2 control-label">验证码</label>
			<div class="col-md-2">
				<input type="text" name="captcha" class="form-control"
					id="inputcode" placeholder="code">
			</div>
			<div class="col-md-1">
				<img src="/static/images/code.jpg" alt="..." class="img-rounded"
					style="height: 30px; float: left" />
			</div>
			<div class="col-md-1" style="font-size: 10px; margin-top: 5px">
				<a href="#">换一张</a>
			</div>
			<div class="col-md-6">
				<div class="alert alert-info" role="alert">
					<img src="/static/images/alart.jpg" class="alartimg" />
					&nbsp请输入图片中的字符，不区分大小写
				</div>
			</div>
		</div>

		<div class="form-group" style="text-align: left">
			<div class="col-md-offset-2 col-md-4">
				<button type="submit" class="btn btn-primary">同意以下协议并注册</button>
				<br />
				<p style="margin-top: 10px">
					<a href="#" alt="">《用户协议》</a>
				</p>
			</div>
		</div>
	</div>
</div>
</div>
	</div>
</div>

</body>
</html><?php }} ?>
