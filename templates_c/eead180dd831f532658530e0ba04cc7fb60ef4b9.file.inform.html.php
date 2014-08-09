<?php /* Smarty version Smarty-3.1.19, created on 2014-08-09 11:32:33
         compiled from "templates/user/inform.html" */ ?>
<?php /*%%SmartyHeaderCode:45612096153e596188f8031-89061882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eead180dd831f532658530e0ba04cc7fb60ef4b9' => 
    array (
      0 => 'templates/user/inform.html',
      1 => 1407555152,
      2 => 'file',
    ),
    'e6fc741ff98471f0e5998f4a7fc1b038f422201a' => 
    array (
      0 => 'templates/layout.html',
      1 => 1407132197,
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

</head>
<body>
	<div class="container-fluid">
		<div class="row" style="background-color: #6699ff">
			<img src="/static/images/nav1.jpg" alt="..." class="img-rounded"
				style="height: 40px; margin-left: 40px; float: left" /> <a
				href="register.html" target="_top"><img src="/static/images/nav3.jpg"
				alt="..." class="img-rounded"
				style="height: 40px; margin-right: 40px; float: right" /></a> <a
				href="index-2.html" target="_top"><img src="/static/images/nav2.jpg"
				alt="..." class="img-rounded"
				style="height: 40px; margin-right: 10px; float: right" /></a>
		</div>
		
<script type="text/javascript">
$(function(){
	var fm = $("#form");
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



<div id="userinfo">
	<a href="user/index.php">
	<img alt="头像" src="/static/images/head.jpg" width="100px">
	</a>
	往事深处少年兰
</div>

<form role="form" id="form">
	<div class="form-group">
      	<label for="inputPassword" class="col-sm-2 control-label">昵称</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="name">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">帐号</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="id" 
         placeholder="往事">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">院校</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">qq</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">威信</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		 
   		<label for="inputPassword" class="col-sm-2 control-label">手机号</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		 
   		<label for="inputPassword" class="col-sm-2 control-label">邮箱</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">交易地</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="inputPassword" 
         placeholder="往事">
   		</div>
   		
   		<label for="inputPassword" class="col-sm-2 control-label">联系方式</label>
    	<div class="col-sm-10">
      		<input type="text" class="form-control" id="lastlable" 
         placeholder="往事">
   		</div>
   		
   		<div id="button">
			<button type="button" class="btn btn-primary btn-lg">取消</button>
			<button type="submit" class="btn btn-primary btn-lg">保存</button>
		</div>
	</div>
</form>.





	</div>
</body>
</html><?php }} ?>
