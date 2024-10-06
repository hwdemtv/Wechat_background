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
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">广告设置</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Config/update" method="POST">
            <div class="layui-form">

			<input type="hidden" name="id" value="1">
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">首页列表广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="indexb" value="1" title="开启" <?php if($mod["indexb"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="indexb" value="2" title="关闭" <?php if($mod["indexb"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">发现格子广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="indexg" value="1" title="开启" <?php if($mod["indexg"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="indexg" value="2" title="关闭" <?php if($mod["indexg"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
				 <div class="layui-form-item" pane=""> 
				 <label class="layui-form-label">发现视频广告</label> 
				 <div class="layui-input-block"> 
				   <input type="radio" name="indexs" value="1" title="开启" <?php if($mod["indexs"] == 1): ?>checked<?php endif; ?> > 
				  <input type="radio" name="indexs" value="2" title="关闭" <?php if($mod["indexs"] == 2): ?>checked<?php endif; ?>> 
				 </div>
			  </div> 
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">列表页面广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="lists" value="1" title="开启" <?php if($mod["lists"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="lists" value="2" title="关闭" <?php if($mod["lists"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			   <div class="layui-form-item" pane="">
				<label class="layui-form-label">全局插屏广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="chag" value="1" title="开启" <?php if($mod["chag"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="chag" value="2" title="关闭" <?php if($mod["chag"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">分类头部广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="typeb" value="1" title="开启" <?php if($mod["typeb"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="typeb" value="2" title="关闭" <?php if($mod["typeb"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">分类底部广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="types" value="1" title="开启" <?php if($mod["types"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="types" value="2" title="关闭" <?php if($mod["types"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
				<div class="layui-form-item" pane="">
				<label class="layui-form-label">更多页面广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="faxians" value="1" title="开启" <?php if($mod["faxians"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="faxians" value="2" title="关闭" <?php if($mod["faxians"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">我的视频广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="users" value="1" title="开启" <?php if($mod["users"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="users" value="2" title="关闭" <?php if($mod["users"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			   <div class="layui-form-item" pane="">
				<label class="layui-form-label">详情头部广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="detab" value="1" title="开启" <?php if($mod["detab"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="detab" value="2" title="关闭" <?php if($mod["detab"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">详情底部广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="detas" value="1" title="开启" <?php if($mod["detas"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="detas" value="2" title="关闭" <?php if($mod["detas"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">购买记录广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="buyg" value="1" title="开启" <?php if($mod["buyg"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="buyg" value="2" title="关闭" <?php if($mod["buyg"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">收藏记录广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="cong" value="1" title="开启" <?php if($mod["cong"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="cong" value="2" title="关闭" <?php if($mod["cong"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			   <div class="layui-form-item" pane="">
				<label class="layui-form-label">使用说明广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="faqg" value="1" title="开启" <?php if($mod["faqg"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="faqg" value="2" title="关闭" <?php if($mod["faqg"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  <div class="layui-form-item" pane="">
				<label class="layui-form-label">关于我们广告</label>
				<div class="layui-input-block">
				  <input type="radio" name="aboutg" value="1" title="开启" <?php if($mod["aboutg"] == 1): ?>checked<?php endif; ?> >
				  <input type="radio" name="aboutg" value="2" title="关闭" <?php if($mod["aboutg"] == 2): ?>checked<?php endif; ?>>
				</div>
			  </div>
			  
			  
			  
			  
			   <div class="layui-form-item">
                <label class="layui-form-label">Banner广告</label>
                <div class="layui-input-inline">
                  <input type="text" name="banner" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["banner"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">小程序位ID</div>
              </div>
			
			  <div class="layui-form-item">
                <label class="layui-form-label">激励广告</label>
                <div class="layui-input-inline">
                  <input type="text" name="jili" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["jili"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">小程序位ID</div>
              </div>
			 
			<div class="layui-form-item">
                <label class="layui-form-label">插屏广告</label>
                <div class="layui-input-inline">
                  <input type="text" name="cha" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["cha"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">小程序位ID</div>
              </div>
		
		<div class="layui-form-item">
                <label class="layui-form-label">视频广告</label>
                <div class="layui-input-inline">
                  <input type="text" name="shipin" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["shipin"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">小程序位ID</div>
              </div>
		
				<div class="layui-form-item">
                <label class="layui-form-label">格子广告</label>
                <div class="layui-input-inline">
                  <input type="text" name="gezi" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["gezi"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">小程序位ID</div>
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