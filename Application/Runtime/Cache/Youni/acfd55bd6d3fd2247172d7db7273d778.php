<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title><?php echo ($config); ?>总后台</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/Public/common/lib/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/admin.min.css" media="all">
  <script src="/Public/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<script>
$(function(){
$('.editpic').click(function(){
	$('#file').after('<br/><input type="file" name="logo"/><br/');
})
})
</script>
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">广告添加</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Adver/update" method="POST" enctype="multipart/form-data">
            <div class="layui-form">
			<input type="hidden" name="id" value="<?php echo ($mod["id"]); ?>">
              <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-block">
                  <input type="text" name="title" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["title"]); ?>">
                </div>
              </div>
			
              <div class="layui-form-item">
				<label class="layui-form-label">广告连接</label>
				<div class="layui-input-block">
					<input type="text" name="link" autocomplete="off" class="layui-input" value="<?php echo ($mod["link"]); ?>">
				</div>
				
			  </div>
				<div class="layui-form-item">
                <label class="layui-form-label">广告图片</label>
                <div class="layui-input-block">
                   <?php if($mod["picname"] == ''): ?><input type="file" name="picname"/><?php else: ?><img src="<?php echo ($mod["picname"]); ?>" width="250" height="150"/><a href="javascript:void(0)" class="editpic">更换</a><?php endif; ?><span id="file"></span>
                </div>
                
              </div>
             
              <div class="layui-form-item">
                <label class="layui-form-label">排序</label>
                <div class="layui-input-inline">
                  <input type="text" name="sort" lay-verify="require|number" autocomplete="off" class="layui-input"value="<?php echo ($mod["sort"]); ?>">
                </div>
				
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
  
</body>
</html>