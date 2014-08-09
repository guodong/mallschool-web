<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 16:33:11
         compiled from "templates/user/inform.html" */ ?>
<?php /*%%SmartyHeaderCode:45612096153e596188f8031-89061882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eead180dd831f532658530e0ba04cc7fb60ef4b9' => 
    array (
      0 => 'templates/user/inform.html',
      1 => 1407569198,
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
  'nocache_hash' => '45612096153e596188f8031-89061882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e59618924ff4_73865246',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e59618924ff4_73865246')) {function content_53e59618924ff4_73865246($_smarty_tpl) {?><!DOCTYPE html>
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
