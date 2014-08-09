<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 07:19:02
         compiled from "templates\user\inform.html" */ ?>
<?php /*%%SmartyHeaderCode:1505553e5bd9940a309-29018970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd156ea7bd8806b76a94024bf1cf2dbed23d0c741' => 
    array (
      0 => 'templates\\user\\inform.html',
      1 => 1407568741,
      2 => 'file',
    ),
    '523f9d784f5c4917bffb5d11052bfdc1350458b1' => 
    array (
      0 => 'templates\\layout.html',
      1 => 1407562559,
      2 => 'file',
    ),
    'f32963005522f381d0cff2e8048688c05b6c53fd' => 
    array (
      0 => 'templates\\base.html',
      1 => 1407562559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505553e5bd9940a309-29018970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e5bd99474d90_87526738',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e5bd99474d90_87526738')) {function content_53e5bd99474d90_87526738($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript">
$(function(){
	var fm = $("#userinfoform");
	fm.find("[type=button]").click(function(){
		alert("hello");
		data = {"name" : "深蓝",
				"id" : "帐号是多少"
				}
		var name = $("#name");
		name.val(data.name);
		var id = $("#id");
		id.val(data.id);
	})
})

</script>

<div class="row">
	<div class="col-md-8 col-md-offset-2 userinfobox">
		<div id="userinfo">
			<img alt="头像" src="/static/images/head.jpg" width="100px">
			<span style="font-family:Microsoft YaHei ;margin-left:20px;">往事深处少年蓝</span>	
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<form role="form" id="userinfoform" >
				<div class="form-group userinfobox" style="padding-top: 10px">

			   		
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">昵称</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">昵称</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">帐号</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">帐号</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">院校</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">院校</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">QQ</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">QQ</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">微信</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">微信</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">手机号</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">手机号</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">邮箱</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">邮箱</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
					<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">交易地</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">交易地</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-md-2">
				   			<label for="inputPassword" class="control-label title">联系方式</label>
				   		</div>
				    	<div class="col-md-8">
				      		<label for="inputPassword" class="control-label"  id="name">联系方式</label>
				   		</div>
				   		<div class="col-md-2 userinfoedit">
				   			<a><span class="glyphicon glyphicon-edit"></span>編輯</a>
				   		</div>
				   		<div class="col-md-10 col-md-offset-1" 
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
				</div>
			</form>
		</div>
	</div>
</div>






</div>
	</div>
</div>

</body>
</html><?php }} ?>
