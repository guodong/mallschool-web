<?php /* Smarty version Smarty-3.1.19, created on 2014-08-19 18:41:59
         compiled from "templates/user/inform.html" */ ?>
<?php /*%%SmartyHeaderCode:45612096153e596188f8031-89061882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eead180dd831f532658530e0ba04cc7fb60ef4b9' => 
    array (
      0 => 'templates/user/inform.html',
      1 => 1408444917,
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
      1 => 1408441500,
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
	<script type="text/javascript">
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
			
<script type="text/javascript">
$(function(){
	var fm = $("#userinfoform");
	fm.find("[type=button]").click(function(){
		$.ajax({ url: "http://api.jige.olege.com/user", 
			type : "put",
			context: document.body, 
			data: {id :"53ca2535badeb81003d63af2"},
			success: function(){
				alert("success");
			},
			error:function(){
				alert("error");
			}
		});
	});
})




$.ajax({ url: "http://api.jige.olege.com/user", 
	type : "get",
	context: document.body, 
	data: {id :"53ca2535badeb81003d63af2"},
	success: function(d){
   		alert(d);
   		data = d;
   		var realname = $("#realname");
   		realname.val(data.data.realname);
   		var id = $("#id");
   		id.val(data.data.id);
   		var school = $("#school");
   		school.val(data.data.school);
   		var qq = $("#qq");
   		qq.val(data.data.qq);
   		var wechat = $("#wechat");
   		wechat.html(data.data.wechat);
   		var email = $("#email");
   		email.val(data.data.email);
	}}
);

</script>

<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 userinfobox">
		<div id="userinfo">
			<img alt="头像" src="/static/images/head.jpg" width="100px">
			<span style="font-family:Microsoft YaHei ;margin-left:20px;">往事深处少年蓝</span>	
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 ">
		<div class="row">
			<form role="form" id="userinfoform" >
				<div class="form-group userinfobox" style="padding-top: 10px">
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">昵称</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		
				      		<input type="text" class="control-label" id="realname"/>
				   		</div>
				   		
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label class="control-label title">帐号</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<input type="text" class="control-label" id="id"/>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">院校</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="school">院校</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">QQ</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="qq">QQ</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">微信</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="wechat">微信</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">手机号</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="tel">手机号</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">邮箱</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="email">邮箱</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
					<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">交易地</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="location">交易地</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;"></div>
			   		</div>
			   		
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				   			<label  class="control-label title">联系方式</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
				      		<label  class="control-label"  id="lianxi">联系方式</label>
				   		</div>
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"  
							style="height: 1px; margin-top: 3px; background-color: #D5D5D5; overflow: hidden;">
							</div>
			   		</div>
				</div>
				<div id = "ibutton">
				   <button type="button" class="btn btn-primary" style = " min-width : 120px;">
     				 保存
   					</button>
   					   <button type="button" class="btn btn-primary" style = " min-width : 120px;">
     				 取消
  					 </button>
  				</div>
			</form>
		</div>
	</div>
</div>







		</div>
	</div>
</div>

<script>
$(function(){
	
})
</script>
</body>
</html><?php }} ?>
