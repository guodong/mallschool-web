<?php /* Smarty version Smarty-3.1.19, created on 2014-08-23 08:45:25
         compiled from "templates/sb/index.html" */ ?>
<?php /*%%SmartyHeaderCode:78351328653e59a8a3d9049-21036637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c2b65b1a9faa24c5185a072693838a534e3f6d' => 
    array (
      0 => 'templates/sb/index.html',
      1 => 1408754723,
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
      1 => 1408754175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78351328653e59a8a3d9049-21036637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e59a8a4174c1_36012143',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e59a8a4174c1_36012143')) {function content_53e59a8a4174c1_36012143($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn" ng-app>
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
<link href="/static/css/lib.css" rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script data-main="/static/js/main" src="/static/js/require.js"></script>
<script>
	var API_URL = 'http://api.jige.olege.com';
	//var API_URL = 'http://api.jige.la.me';
	var UID = "53ca235ebadeb80e03d63af1";
require(['view/Top'], function(vTop){
	var vt = new vTop();
/* 	var user = new mUser();
	user.getFromSession();
	window.user = user;
	window.UID = user.get("id");
	if(user.get("id")){
		
	} */
})
</script>
</head>
<body>

	<div class="top">
		
	</div>
	
<div class="container-fluid">

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			
<script type="text/javascript">
$(function(){
	document.getElementById('bookinfo').style.display = "none";
	document.getElementById('addbook').style.display = "none";
	document.getElementById('bookdetali').style.display = "none";
});

function show_bookdetail(){
	if ($("#bookdetali").css("display") == "none") {
        $("#bookdetali").css("display", "inline");
        $("#detail-status").html('<span  class="glyphicon glyphicon-chevron-up"></span>收缩详细页面');
    } else {
        $("#bookdetali").css("display", "none");
        $("#detail-status").html('<span  class="glyphicon glyphicon-chevron-down"></span>展开详细页面');
    }

}
function search_book(){
	var reg=/^\d{13}|\d{10}$/;
	if(reg.test($("#book-ISBN").val())){
		
		$.ajax({ url: "http://api.jige.olege.com/book", 
		    type : "get", 
		    data: {q:$("#book-ISBN").val(),type:"ISBN"},
		    dataType : "json",
		    success: function(d){
		    	if(d.result == 0){
		    		document.getElementById('bookinfo').style.display = "";
		    		document.getElementById('addbook').style.display = "none";
			    	$("#book-name").text("书名："+d.data.name); 
			    	$("#book-author").text("作者："+d.data.author);
			    	$("#book-press").text("出版社："+d.data.press);
			    	$("#book-p").text("定价："+d.data.fixedPrice);
			    	$("#book-isbn2").text("ISBN："+d.data.isbn);
		    	}
		    },
			error:function(){
				document.getElementById('bookinfo').style.display = "none";
				document.getElementById('addbook').style.display = "";
			}
		}); 
	}
	else{
		alert("isbn号不正确");
	}
}

</script>
<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1 col-xs-12  userinfobox">
		<div id="userinfo">
			<img alt="头像" src="/static/images/head.jpg" width="100px">
			<span style="font-family:Microsoft YaHei ;margin-left:20px;">往事深处少年蓝</span>	
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2  col-sm-10 col-sm-offset-1 col-xs-12 ">
		<div class="row">
			<form id="userinfoform" >
				<div class="form-group userinfobox" style="padding-top: 10px">
					<div class="row">
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 stepbox" >
							<a class="steptext">STEP1:选择图书信息</a>
						</div>
					</div>
			   		<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
				   			<label class="control-label title">ISBN</label>
				   		</div>
				    	<div class="col-lg-8 col-md-8 col-sm-7 col-xs-7">
				      		<input type="text" class="form-control" placeholder="填写ISBN，搜索图书完整信息"  id="book-ISBN">
				   		</div>
				   		<div class="col-lg-1col-md-1 col-sm-1 col-xs-1">
				   			<button type="button" class="btn btn-info btn-block"  style="min-width:60px;margin-top:15px;margin-left:-20px" onclick="javascript:search_book();">搜</button>
				   		</div>
			   		</div>
			   		
			   		<div class="row" id="bookinfo">
			   			<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
			   				<img style="height:300px"/>
			   			</div>
			   			<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
				   			<label class="control-label" id="book-name">书名</label>
				   		</div>
				   		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
				   			<label class="control-label" id="book-author">作者</label>
				   		</div>
				   		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
				   			<label class="control-label" id="book-press">出版社</label>
				   		</div>
				   		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
				   			<label class="control-label" id="book-p">定价</label>
				   		</div>
				   		<div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-6 col-sm-offet-0 col-xs-10 col-xs-offset-1">
				   			<label class="control-label" id="book-isbn2">ISBN</label>
				   		</div>
			   		</div>
			   		
			   		<div class="row" id="addbook">
				   		<div class="row">
				   			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				   				<label class="bookdetalitext">您要出售的图书太特别了，我们还没有这本书的信息，请帮我们补全吧</label>
				   			</div>
				   		</div>
			   			<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					   			<label for="inputPassword" class="control-label title">书名</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					      		<input type="text" class="form-control" placeholder="书名">
					   		</div>
				   		</div>
				   		<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					   			<label for="inputPassword" class="control-label title">作者</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					      		<input type="text" class="form-control" placeholder="作者">
					   		</div>
					   	</div>
					   	<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					   			<label for="inputPassword" class="control-label title">出版社</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					      		<input type="text" class="form-control" placeholder="出版社">
					   		</div>
					   	</div>
					   	<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					   			<label for="inputPassword" class="control-label title">定价</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					      		<input type="text" class="form-control" placeholder="定价">
					   		</div>
					   	</div>
					   	<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					   			<label for="inputPassword" class="control-label title">ISBN</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					      		<input type="text" class="form-control" placeholder="ISBN">
					   		</div>
					   	</div>
					    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
				   			<button type="button" class="btn btn-info btn-block"  style="min-width:160px;max-width:200px;margin-bottom:10px;">确定添加</button>
				   		</div>
			   		</div>

			   		<div class="row">
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 stepbox" >
							<a class="steptext">STEP2:填写交易信息</a>
						</div>
					</div>
					<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				   			<label for="inputPassword" class="control-label title">价格</label>
				   		</div>
				    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
				      		<input type="text" class="form-control" placeholder="出售价格">
				   		</div>
				   	</div>
				   	<div class="row">
					   	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="margin-bottom:10px;">
					   		<label class="bookdetalitext">信息填写得越完整越利于出售，我们将信息完整程度作为排名规则之一 <a href="javascript:show_bookdetail();" id="detail-status"><span  class="glyphicon glyphicon-chevron-down"></span>展开详细页面</a></label>
					   	</div>
				   	</div>
				   	<div id="bookdetali">
					   	
					   	<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					   			<label for="inputPassword" class="control-label title">自定义描述</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
					      		<input type="text" class="form-control" placeholder="自定义描述">
					   		</div>
					   	</div>
					   	<div class="row">
					   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					   			<label for="inputPassword" class="control-label title">适用学校</label>
					   		</div>
					    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
					      		<input type="text" class="form-control" placeholder="适用学校">
					   		</div>
					   	</div>
						<!-- <div class="sb-container">
							<a id="addpic"><img src="/static/images/pic.jpg"></a>
						</div> -->
				   	</div>

					<div class="row">
				   		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 stepbox" >
							<a class="steptext">STEP3:确认联系信息</a>
						</div>
					</div>
					
					<div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				   			<label for="inputPassword" class="control-label title">交易地点</label>
				   		</div>
				    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
				      		<input type="text" class="form-control" placeholder="交易地点">
				   		</div>
				   	</div>
				    <div class="row">
				   		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
				   			<label for="inputPassword" class="control-label title">联系方式</label>
				   		</div>
				    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
				      		<input type="text" class="form-control" placeholder="联系方式">
				   		</div>
				   	</div>
				   	<div class="row">
				   		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
				   			<button type="button" class="btn btn-info btn-block"  style="min-width:160px;max-width:200px;margin-bottom:10px;">发布</button>
				   		</div>
			   		</div>
				</div>
			</form>
		</div>
	</div>
</div>
<form id="upform" class="dpn" enctype="multipart/form-data" method="post" action="http://api.jige.olege.com/pic" target="upf">
<input type="file" id="fileselect" name="pic">
</form>
<iframe name="upf" class="dpn"></iframe>
<script>
$(function(){
	$("#fileselect").change(function(){
		if($(this).val()){
			$("#upform").submit();
		}
		$(this).val("");
	});
	$("#addpic").click(function(){
		$("#fileselect").click();
	})
})
function loadfile(f){
	$("#addpic img").src = '/static/uploads/'+f;
}
</script>

		</div>
	</div>
</div>


</body>
</html><?php }} ?>
