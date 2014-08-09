<?php /* Smarty version Smarty-3.1.19, created on 2014-08-07 08:15:13
         compiled from "templates\sb\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1006153df368a5f5e18-02711379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8a179c43426efce02a1cd0480cf0db5d9ed696' => 
    array (
      0 => 'templates\\sb\\index.html',
      1 => 1407399311,
      2 => 'file',
    ),
    'ea9b8ef91d113f1ca7659b2fc705b19b390d0d00' => 
    array (
      0 => 'templates\\layout.html',
      1 => 1407134252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1006153df368a5f5e18-02711379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53df368a66ff32_25361350',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53df368a66ff32_25361350')) {function content_53df368a66ff32_25361350($_smarty_tpl) {?><!DOCTYPE html>
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
		
<div class="">
<form  method="post">
	<div class="sb-container">
	<dl class="sb-book-info"> 
	<dt>书名: </dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd>
	<dt>作者: </dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	<dt>出版社: </dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	<dt>ISBN:</dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	</dl>
	</div>
	<div class="sb-container">
	<dl class="sb-book-info"> 
	<dt>联系方式: </dt> 
	<dd><span>认证用户可见</span></dd>
	<dt>地址: </dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	<dt>手机号: </dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	<dt>价格:</dt> 
	<dd><input class="r3" type="text" name="unick" style="border-style: none;"></dd> 
	</dl>
	</div>
	<div class="sb-container">
	<dl class="sb-book-info2"> 
	<dt style="color:#ff6aa2; width:100%;">信息填写得越完整越利于出售，我们将信息完整程度作为排名规则之一 </dt> 

	<dt>用户自定义描述: </dt> 
	<dd><textarea rows="3" cols="87" style="border-style: none;"></textarea></dd> 
	<dt>适用于学校选项: </dt> 
	<dd><select name="" id="">   
        <option value="1">同济大学</option>   
        <option value="2">复旦大学</option>   
        <option value="3">上海大学</option>   
        <option value="4">上海交通大学</option>              
      </select>  </dd> 
	</dl>
	</div>
	<div class="sb-container">
	<img src="/static/images/pic.jpg">
	</div>
	<div class="sb-container" style="height:62px;">
	<span style="float:right;color:#77CEFF;font-weight: bold;">二手书</span><input type="checkbox" name="book" value="" checked style="float:right; margin-right:10px;">
	<input type="submit" name="Submit" value="发布" style="background-color:#77CEFF; float:right;color:#FFFFFF;width:100px;margin-right:20px;">
	</div>
	
</form>
</div>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
             请先登陆（登陆是一种态度）
            </h4>
         </div>
         <div class="modal-body" style="text-align: center">
            <div><span>账号：</span><input type="text" name="" style="margin-bottom:5px;"></div>
            <div><span>密码：</span><input type="password" name="" ></div>
         </div>
         <div class="modal-footer">
            <input type="submit" name="" >
            <a> 忘记密码</a>
            <a> 新用户注册</a>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
   $(function () { $('#myModal').modal({
	   keyboard: true
   })});
</script>

	</div>
</body>
</html><?php }} ?>
