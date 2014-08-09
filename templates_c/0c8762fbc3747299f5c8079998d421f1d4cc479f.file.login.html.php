<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 16:47:33
         compiled from "templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:160004472753e5de3eb9e054-83899166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8762fbc3747299f5c8079998d421f1d4cc479f' => 
    array (
      0 => 'templates/login.html',
      1 => 1407574052,
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
      1 => 1407572136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160004472753e5de3eb9e054-83899166',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e5de3ebce3d8_96737139',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5de3ebce3d8_96737139')) {function content_53e5de3ebce3d8_96737139($_smarty_tpl) {?><!DOCTYPE html>
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

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script data-main="/static/js/main"
	src="/static/js/require.js"></script>
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
	style="margin-top: 100px; margin-right: auto; margin-left: auto;">
	<div class="col-lg-5 col-md-5">
		<img src="/static/images/banner/banner2.jpg" />
	</div>
	<div class="col-lg-5 col-md-5 loginform">
		<div
			style="margin-left: auto; margin-right: auto; padding-left: 50px;">
			<div style="padding: 10px">
				<span style="float: left;">帐号登录</span> <span
					style="float: right; font-size: 12px;">还没有帐号？ <a
					href="register" style="color: red; font-size: 12px;">立刻注册</a>
				</span>
			</div>
			<form role="form" id="logform" isAjax="true" method="post"
				action="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
/user/accesstoken">
				<input type="email" class="form-control" id="logemail" name="email"
					placeholder="邮箱" style="margin-top: 20px"
					regex="^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$"> <input
					type="password" class="form-control" id="logpasswd" name="password"
					placeholder="密码" style="margin-top: 20px;">
				<div class="checkbox" style="margin-top: 20px;">
					<label style="float: left"> <input type="checkbox">记住帐号
					</label> <label style="float: left; margin-left: 10px"> <input
						type="checkbox">下次自动登录
					</label> <a style="font-size: 12px; color: blue; float: right" href="#">忘记密码？</a>
				</div>
				<button type="submit" class="btn btn-primary" style="width: 100px">登
					录</button>
			</form>
		</div>
	</div>
	<div class="col-lg-2 col-md-2">
		<img src="/static/images/banner/banner3.jpg" />
	</div>
</div>
<script>
	require([ 'god/Form' ], function(Form) {
		var fm = new Form({
			id : 'logform',
			invalidElementCallback : function(elem) {
				alert("邮箱格式不正确")
			},
			validElementCallback : function(elem) {
				elem.dom.parents(".form-group").removeClass("has-error");
			},
			submitCallback : function(d) {
				var data = d;//jQuery.parseJSON(d);
				if (d.result == 0) {
					$.ajax({
						url : '/session.php',
						type : 'post',
						data : {
							email : $("#logemail").val(),
							password : $("#logpasswd").val(),
						},
						success : function() {
							location.href = '/';
						}
					});
				}
			},
		})
	})
</script>
</div>
	</div>
</div>

</body>
</html><?php }} ?>
