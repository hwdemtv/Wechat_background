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
<body>


    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
          <div class="layui-col-md12">
            <div class="layui-card">
              <div class="layui-card-header">修改</div>
              <div class="layui-card-body" pad15>
 <form action="/Zhis/User/update" method="POST">
                  <div class="layui-form" lay-filter="layuiadmin-form-admin" id="layuiadmin-form-admin" style="padding: 20px 30px 0 0;">

                    <div class="layui-form-item">
                      <label class="layui-form-label">账号</label>
                      <div class="layui-form-mid layui-word-aux"><?php echo ($info['username']); ?></div>
                      <input type="hidden" name="id" class="layui-input" value="<?php echo ($info['id']); ?>">
                    </div>
                
                    <div class="layui-form-item">
                      <label class="layui-form-label">积分</label>
                      <div class="layui-input-inline">
                        <div class="layui-col-md6">
                          <input type="text" name="jifen" autocomplete="off" class="layui-input"  value="<?php echo ($info['jifen']); ?>" lay-verify="required">
                        </div>
                      </div>
                    </div>
					 <div class="layui-inline">
					  <label class="layui-form-label">会员到期时间</label>
					  <div class="layui-input-inline">
						<input type="text" name="viptime" id="date" placeholder="yyyy-MM-dd HH:mm:ss" value="<?php echo (date('Y-m-d H:i:s',$info['viptime'])); ?>" autocomplete="off" class="layui-input">
					  </div>
					</div>
				
                    <div class="layui-form-item" style="margin-top:10px;">
                      <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="editpass-back-submit">确认</button>
                        <button class="layui-btn layui-btn-primary" onclick="javascript:history.back(-1);">取消</button>
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
 <script>
layui.use(['form', 'layedit', 'laydate'], function(){
  var form = layui.form
  ,layer = layui.layer
  ,layedit = layui.layedit
  ,laydate = layui.laydate;
  
  //日期
  laydate.render({
    elem: '#date'
	,type: 'datetime'
  });
  
});
</script>
</body>
</html>