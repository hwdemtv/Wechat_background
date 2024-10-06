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
  <script src="/Public/js/jquery-1.9.1.min.js"></script>
</head>
<body>
<script charset="utf-8" src="/Public/Ueditor/ueditor.config.js"></script>
		<script charset="utf-8" src="/Public/Ueditor/ueditor.all.min.js"></script>
		<script charset="utf-8" src="/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>
		<script type="text/javascript" charset="utf-8">
		window.UEDITOR_HOME_URL = "/Public/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
		window.onload=function(){
        window.UEDITOR_CONFIG.initialFrameHeight=400;//编辑器的高度

        window.UEDITOR_CONFIG.imageUrl="<?php echo U(MODULE_NAME.'/Index/save_info');?>";          //图片上传提交地址
       <!--  window.UEDITOR_CONFIG.imagePath=' /Uploads/thumb/'; -->//编辑器调用图片的地址
        //UE.getEditor('contents');//里面的contents是我的textarea的id值
				UE.getEditor('content', {
					autoHeightEnabled: false
				});
			
			
        }
	</script>
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
          <div class="layui-card-header">修改</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Reso/update" method="POST" enctype="multipart/form-data">
            <div class="layui-form">
			<input type="hidden" name="id" value="<?php echo ($mod["id"]); ?>">
              <div class="layui-form-item">
                <label class="layui-form-label">标题</label>
                <div class="layui-input-block">
                  <input type="text" name="title" autocomplete="off" class="layui-input" value="<?php echo ($mod["title"]); ?>">
                </div>
              </div>
			  
			 <div class="layui-form-item" pane="">
				<label class="layui-form-label">所属类型</label>
				<div class="layui-input-block">
				
				  <input type="radio" name="type" value="1" title="广告解锁获取" <?php if($mod["type"] == 1): ?>checked<?php endif; ?>>
				  <input type="radio" name="type" value="2" title="广告解锁看全文" <?php if($mod["type"] == 2): ?>checked<?php endif; ?>>
				  <input type="radio" name="type" value="3" title="VIP专享" <?php if($mod["type"] == 3): ?>checked<?php endif; ?>>
				  <input type="radio" name="type" value="4" title="积分购买" <?php if($mod["type"] == 4): ?>checked<?php endif; ?>>
				  <input type="radio" name="type" value="5" title="免费获取" <?php if($mod["type"] == 5): ?>checked<?php endif; ?>>
				</div>
			</div>
             
				<div class="layui-form-item">
                <label class="layui-form-label">图片</label>
                <div class="layui-input-block">
                   <?php if($mod["picname"] == ''): ?><input type="file" name="picname"/><?php else: ?><img src="<?php echo ($mod["picname"]); ?>" width="350" height="150"/><a href="javascript:void(0)" class="editpic">更换</a><?php endif; ?><span id="file"></span>
                </div>
              </div>
             <div class="layui-form-item">
                <label class="layui-form-label">内容：</label>
                <div class="layui-input-block">
                    <div class="layui-col-md6">
                        <textarea  id="content"  name="content" rows="15" placeholder="请输入描述" class="layui-textarea" ><?php echo ($mod["content"]); ?></textarea>
                    </div>
                </div>
              </div>
			 <div class="layui-form-item">
                <label class="layui-form-label">资源地址</label>
                <div class="layui-input-block">
                  <input type="text" name="dizhi"  value="<?php echo ($mod["dizhi"]); ?>"  autocomplete="off" class="layui-input">
                </div>
              </div>
			  <div class="layui-form-item">
                <label class="layui-form-label">价格</label>
                <div class="layui-input-inline">
                  <input type="text" name="price" value="<?php echo ($mod["price"]); ?>"   autocomplete="off" class="layui-input">
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