<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title><?php echo ($config); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/Public/common/lib/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/admin.min.css" media="all">
</head>
<style>

.layui-form-item .layui-input-inline {
    float: left;
    width: 315px;
    margin-right: 10px;
}
</style>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">添加</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Link/insert" method="POST" enctype="multipart/form-data">
            <div class="layui-form">

              <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-inline">
                  <input type="text" name="title" autocomplete="off" class="layui-input">
                </div>
              </div>
			   <div class="layui-form-item">
                <label class="layui-form-label">appid</label>
                <div class="layui-input-inline">
                  <input type="text" name="appid" autocomplete="off" class="layui-input">
                </div>
              </div>
			<div class="layui-form-item">
                <label class="layui-form-label">介绍</label>
                <div class="layui-input-block">
                  <input type="text" name="content" autocomplete="off" class="layui-input">
                </div>
              </div>
			<div class="layui-form-item">
                <label class="layui-form-label">图片</label>
                <div class="layui-input-block">
                  <input type="file" id="website-title" name="picname" placeholder="图片" class="col-xs-10 ">
                </div>
                
              </div>
			  
              <div class="layui-form-item">
				<label class="layui-form-label">连接</label>
				<div class="layui-input-inline">
					<input type="text" name="link" autocomplete="off" class="layui-input" >
				</div>
				<div class="layui-form-mid layui-word-aux">请写 /pages/index/index</div>
			  </div>
				<div class="layui-form-item">
				<label class="layui-form-label">是否显示</label>
				<div class="layui-input-block">
				  <input type="radio" name="status" value="1" title="显示" checked >
				  <input type="radio" name="status" value="2" title="隐藏" >
				</div>
			  </div>
             
              <div class="layui-form-item">
                <label class="layui-form-label">排序</label>
                <div class="layui-input-inline">
                  <input type="text" name="sort" lay-verify="require|number" autocomplete="off" class="layui-input">
                </div>
				<div class="layui-form-mid layui-word-aux">数字越大越排前面</div>
              </div>
			
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="card-point-set">添加</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 <script src="/Public/common/lib/layui/layui.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery.cookie.js"></script>
   <script type="text/javascript">

layui.use(['form', 'layedit', 'laydate','colorpicker'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
 
  
  //常规使用

});
</script>
</body>
</html>