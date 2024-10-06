<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <title><?php echo ($config); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/Public/layui4/css/layui.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/admin.min.css" media="all">
    <script src="/Public/js/jquery-1.9.1.min.js"></script>
</head>
<style>

.layui-form-item .layui-input-inline {
    float: left;
    width: 315px;
    margin-right: 10px;
}
.layui-form-label{
width:100px;
}
</style>
<script>
$(function(){
$('.editpic').click(function(){
	$('#file').after('<br/><input type="file" name="zanshang"/><br/');
})
})
</script>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">弹窗设置</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Tan/update" method="POST" enctype="multipart/form-data">
            <div class="layui-form">

			<input type="hidden" name="id" value="1">
              <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-inline">
                  <input type="text" name="title" autocomplete="off" class="layui-input" value="<?php echo ($mod["title"]); ?>">
                </div>
              </div>
			  
			  	  <div class="layui-form-item">
                <label class="layui-form-label">内容</label>
                <div class="layui-input-inline">
                  <input type="text" name="nei" autocomplete="off" class="layui-input" value="<?php echo ($mod["nei"]); ?>">
                </div>
              </div>
			<div class="layui-form-item" pane="">
				<label class="layui-form-label">是否显示</label>
				<div class="layui-input-block">
				  <input type="radio" name="status" value="1" title="显示" <?php if($mod["status"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="status" value="2" title="隐藏" <?php if($mod["status"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>



				</div>
			</div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="card-point-set">保存</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 <script src="/Public/layui4/layui.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery.cookie.js"></script>
    <script type="text/javascript">

layui.use(['form', 'layedit', 'laydate','colorpicker'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  var $ = layui.$
  ,colorpicker = layui.colorpicker;
  
  //常规使用

  //表单赋值
  colorpicker.render({
    elem: '#test-form'
    ,color: '#1c97f5'
    ,predefine: true // 开启预定义颜色
    ,done: function(color){
      $('#test-form-input').val(color);
    }
  });
  
 
});
</script>
</body>
</html>