<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>登录 - <?php echo ($config); ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/Public/common/lib/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/admin.min.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/login.css" media="all">
</head>
<body>

  <div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;background:url(/Public/bbb.jpg) no-repeat;background-size:100% 100%;">

    <div class="layadmin-user-login-main">
      <div class="layadmin-user-login-box layadmin-user-login-header">
        <h2 style="color:#fff;">登录</h2>
        <p><?php echo ($config); ?></p>
      </div>
	  <form class="am-form" action="/Zhis/Public/checkLogin/" method="POST">
      <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="admin-login-loginname"></label>
          <input type="text" name="name" id="admin-login-loginname" lay-verify="required" placeholder="帐号" class="layui-input">
        </div>
        <div class="layui-form-item">
          <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="admin-login-password"></label>
          <input type="password" name="pass" id="admin-login-password" lay-verify="required" placeholder="密码" class="layui-input">
        </div>
        <div class="layui-form-item">
          <div class="layui-row">
            <div class="layui-col-xs7">
              <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="admin-login-vercode"></label>
              <input type="text" name="vercode" id="admin-login-vercode" lay-verify="required" placeholder="图形验证码" class="layui-input">
            </div>
            <div class="layui-col-xs5">
              <div style="margin-left: 10px;">
                <img src="/Zhis/Public/verifyImg" class="layadmin-user-login-codeimg" id="admin-login-get-vercode"  onclick="this.src='/Zhis/Public/verifyImg/'+Math.random()">
              </div>
            </div>
          </div>
        </div>
<p style="color:red;text-align:content;"><?php echo ($errorinfo); ?></p>
        <div class="layui-form-item">
          <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="admin-login-submit">登 入</button>
        </div>
      </div>
    </div>
</form>
  </div>

  <script src="__STATIC__/common/lib/layui/layui.js"></script>
  <script type="text/javascript">
    if(window.top.location.href!=location.href)
    {
        window.top.location.href=location.href;
    } 
  </script>
  <script>
 /* layui.use(['form'], function(){
    var $ = layui.$
    ,form = layui.form;

    form.render();
    
    //提交
    form.on('submit(admin-login-submit)', function(obj){
      $.ajax({
      
        type: "POST",
        data: obj.field,
        dataType: "json",
        success: function(data) {
          if (data.code == 0) {
            layer.msg(data.msg, {
              offset: '15px'
              ,icon: 1
            }, function() {
                window.location.href = "";
            });
          } else {
            layer.msg(data.msg, {icon: 5});
          }
        },
        error: function(status) {
          layer.msg('服务器繁忙，请稍后重试！');
        }
      });
    });
    
  });*/
  </script>
</body>
</html>