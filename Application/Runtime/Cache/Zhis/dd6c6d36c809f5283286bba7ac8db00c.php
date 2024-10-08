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
<script charset="utf-8" src="/Public/Ueditor/ueditor.config.js"></script>
		<script charset="utf-8" src="/Public/Ueditor/ueditor.all.min.js"></script>
		<script charset="utf-8" src="/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>
		<script type="text/javascript" charset="utf-8">
		window.UEDITOR_HOME_URL = "/Public/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
		window.onload=function(){
        window.UEDITOR_CONFIG.initialFrameHeight=500;//编辑器的高度

        window.UEDITOR_CONFIG.imageUrl="<?php echo U(MODULE_NAME.'/Index/save_info');?>";          //图片上传提交地址
       <!--  window.UEDITOR_CONFIG.imagePath=' /Uploads/thumb/'; -->//编辑器调用图片的地址
        //UE.getEditor('contents');//里面的contents是我的textarea的id值
				UE.getEditor('faq', {
					autoHeightEnabled: false
				});
			UE.getEditor('about', {
					autoHeightEnabled: false
				});
			
        }
	</script>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">规则说明</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Config/update" method="POST">
            <div class="layui-form">

			<input type="hidden" name="id" value="1">
              
			  <div class="layui-form-item">
                <label class="layui-form-label">使用说明：</label>
                <div class="layui-input-block">
                    <div class="layui-col-md6">
                        <textarea  id="faq"  name="faq" rows="15" placeholder="请输入描述" class="layui-textarea" ><?php echo ($mod["faq"]); ?></textarea>
                    </div>
                </div>
              </div>
			   
              	<div class="layui-form-item">
                <label class="layui-form-label">关于我们：</label>
                <div class="layui-input-block">
                    <div class="layui-col-md6">
                        <textarea  id="about"  name="about" rows="15" placeholder="请输入描述" class="layui-textarea" ><?php echo ($mod["about"]); ?></textarea>
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
 <script src="/Public/common/lib/layui/layui.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery.cookie.js"></script>
    <script type="text/javascript">
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;

});
</script>
</body>
</html>