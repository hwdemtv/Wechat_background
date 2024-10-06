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
.layui-form-label{
width:100px;
}
</style>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">签到设置</div>
          <div class="layui-card-body" pad15>
            <form action="/Zhis/Config/update" method="POST">
            <div class="layui-form">

			<input type="hidden" name="id" value="1">

			  <div class="layui-form-item">
                <label class="layui-form-label">第一天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="yi" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["yi"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
				<div class="layui-form-item">
                <label class="layui-form-label">第二天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="er" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["er"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
			  <div class="layui-form-item">
                <label class="layui-form-label">第三天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="san" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["san"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
			  <div class="layui-form-item">
                <label class="layui-form-label">第四天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="si" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["si"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
			  <div class="layui-form-item">
                <label class="layui-form-label">第五天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="wu" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["wu"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
			  <div class="layui-form-item">
                <label class="layui-form-label">第六天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="liu" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["liu"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
              </div>
             <div class="layui-form-item">
                <label class="layui-form-label">第七天签到奖励</label>
                <div class="layui-input-inline">
                  <input type="text" name="qi" lay-verify="require|number" autocomplete="off" class="layui-input" value="<?php echo ($mod["qi"]); ?>">
                </div>
				<div class="layui-form-mid layui-word-aux">签到奖励门票</div>
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