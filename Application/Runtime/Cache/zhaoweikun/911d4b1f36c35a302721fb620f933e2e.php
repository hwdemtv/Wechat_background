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
          <div class="layui-card-header">基本设置</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Config/update" method="POST" enctype="multipart/form-data">
            <div class="layui-form">

			<input type="hidden" name="id" value="1">
              <div class="layui-form-item">
                <label class="layui-form-label">站点名称</label>
                <div class="layui-input-inline">
                  <input type="text" name="webname" autocomplete="off" class="layui-input" value="<?php echo ($mod["webname"]); ?>">
                </div>
              </div>
			  
			  	  <div class="layui-form-item">
                <label class="layui-form-label">Appid</label>
                <div class="layui-input-inline">
                  <input type="text" name="appid" autocomplete="off" class="layui-input" value="<?php echo ($mod["appid"]); ?>">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">Appsecret</label>
                <div class="layui-input-inline">
                  <input type="text" name="appsecret" autocomplete="off" class="layui-input" value="<?php echo ($mod["appsecret"]); ?>">
                </div>
              </div>
			   <div class="layui-form-item">
                <label class="layui-form-label">小程序名称</label>
                <div class="layui-input-inline">
                  <input type="text" name="appname"  autocomplete="off" class="layui-input" value="<?php echo ($mod["appname"]); ?>">
                </div>
				<!-- <div class="layui-form-mid layui-word-aux">注册默认赠送挑战赛门票</div> -->
              </div>
			
			   <div class="layui-form-item">
                <label class="layui-form-label">小程序顶部颜色</label>
				
                <div class="layui-input-inline">
                  <input type="text" name="backgroundColor"  placeholder="请选择颜色" class="layui-input" id="test-form-input" value="<?php echo ($mod["backgroundColor"]); ?>">
                </div>
				<div class="layui-inline" style="left: -11px;">
					<div id="test-form"></div>
				  </div>
              </div>
		
			 <div class="layui-form-item" pane="">
				<label class="layui-form-label">顶部文字颜色</label>
				<div class="layui-input-block">
				  <input type="radio" name="frontColor" value="1" title="白色" <?php if($mod["frontColor"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="frontColor" value="2" title="黑色" <?php if($mod["frontColor"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
					
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">我的VIP显示</label>
				<div class="layui-input-block">
				  <input type="radio" name="vipk" value="1" title="显示" <?php if($mod["vipk"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="vipk" value="2" title="隐藏" <?php if($mod["vipk"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>	
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">首页显示公告</label>
				<div class="layui-input-block">
				  <input type="radio" name="notice" value="1" title="显示" <?php if($mod["notice"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="notice" value="2" title="隐藏" <?php if($mod["notice"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>	
					
				<div class="layui-form-item" pane="">
                <label class="layui-form-label">首页公告</label>
                <div class="layui-input-inline">
                  <input type="text" name="gonggao"  autocomplete="off" class="layui-input" value="<?php echo ($mod["gonggao"]); ?>" placeholder="首页公告">
                </div>
				<!-- <div class="layui-form-mid layui-word-aux">注册默认赠送挑战赛门票</div> -->
              </div>
			<div class="layui-form-item" pane="">
                <label class="layui-form-label">热搜设置</label>
                <div class="layui-input-inline">
                  <input type="text" name="resou"  autocomplete="off" class="layui-input" value="<?php echo ($mod["resou"]); ?>" placeholder="热搜设置">
                </div>
				 <div class="layui-form-mid layui-word-aux">列：测试1,测试2,测试3 间隔符,</div> 
              </div>
			  <div class="layui-form-item" pane="">
                <label class="layui-form-label">标签星球</label>
                <div class="layui-input-inline">
                  <input type="text" name="biaoqian"  autocomplete="off" class="layui-input" value="<?php echo ($mod["biaoqian"]); ?>" placeholder="热搜设置">
                </div>
				 <div class="layui-form-mid layui-word-aux">列：测试1,测试2,测试3 间隔符,</div> 
              </div>
				<div class="layui-form-item" pane="">
                <label class="layui-form-label">30天VIP价格</label>
                <div class="layui-input-inline">
                  <input type="text" name="yiyue"  autocomplete="off" class="layui-input" value="<?php echo ($mod["yiyue"]); ?>" placeholder="一个月VIP价格">
                </div>
				<!-- <div class="layui-form-mid layui-word-aux">注册默认赠送挑战赛门票</div> -->
              </div>

			<div class="layui-form-item" pane="">
                <label class="layui-form-label">180天VIP价格</label>
                <div class="layui-input-inline">
                  <input type="text" name="liuyue"  autocomplete="off" class="layui-input" value="<?php echo ($mod["liuyue"]); ?>" placeholder="六个月VIP价格">
                </div>
				<!-- <div class="layui-form-mid layui-word-aux">注册默认赠送挑战赛门票</div> -->
              </div>
	
			
				<div class="layui-form-item" pane="">
                <label class="layui-form-label">365天VIP价格</label>
                <div class="layui-input-inline">
                  <input type="text" name="shier"  autocomplete="off" class="layui-input" value="<?php echo ($mod["shier"]); ?>" placeholder="十二个月VIP价格">
                </div>
				<!-- <div class="layui-form-mid layui-word-aux">注册默认赠送挑战赛门票</div> -->
              </div>

				
				<div class="layui-form-item">
					<label class="layui-form-label">赞赏码</label>
					<div class="layui-input-block">
					   <?php if($mod["zanshang"] == ''): ?><input type="file" name="zanshang"/><?php else: ?><img src="<?php echo ($mod["zanshang"]); ?>" width="200" height="200"/><a href="javascript:void(0)" class="editpic">更换</a><?php endif; ?><span id="file"></span>
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