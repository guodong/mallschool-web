<?php /* Smarty version Smarty-3.1.19, created on 2014-08-22 16:13:29
         compiled from "templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:160004472753e5de3eb9e054-83899166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8762fbc3747299f5c8079998d421f1d4cc479f' => 
    array (
      0 => 'templates/login.html',
      1 => 1408441500,
      2 => 'file',
    ),
    'e6fc741ff98471f0e5998f4a7fc1b038f422201a' => 
    array (
      0 => 'templates/layout.html',
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
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			
<div class="row">
	<div class="hidden-xs" style="height:100px;">
	</div>
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<img src="/static/images/banner/banner2.png"  style="width:100%;height:100%;"/>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 loginformbox" >
				<div>
					<span style="float: left;">帐号登录</span> <span
						style="float: right; font-size: 12px;">还没有帐号？ <a
						href="register" style="color: red; font-size: 12px;">立刻注册</a>
					</span>
				</div>
				<form role="form" id="logform" isAjax="true" method="post"   class="loginformtitle"
					action="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
/user/accesstoken">
					<input type="email" class="form-control" id="logemail" name="email" 	placeholder="邮箱" style="margin-top: 20px"
							regex="^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$" > 
					<input type="password" class="form-control" id="logpasswd" name="password" 	placeholder="密码" style="margin-top: 20px;">
					<div class="checkbox" style="margin-top: 20px;">
						<label style="float: left"> <input type="checkbox">记住帐号</label>
						<label style="float: left; margin-left: 10px"> <input type="checkbox">下次自动登录</label> 
						<a style="font-size: 12px; color: blue; float: right" href="#">忘记密码？</a>
					</div>
					<button type="submit" class="btn btn-primary" style="width: 100px">登   录</button>
				</form>
			</div>
			<div class="col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-0 col-sm-2 col-sm-offset-0 col-xs-6 col-xs-offset-3">
				<img src="/static/images/banner/banner3.png"  style="width:100%;height:100%;"/>
			</div>
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
			submitCallback : function(d) {alert(JSON.stringify(d))
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

<script>
$(function(){
	
})
</script>
</body>
</html><?php }} ?>
