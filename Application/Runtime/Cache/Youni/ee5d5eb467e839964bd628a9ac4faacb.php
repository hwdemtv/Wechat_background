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

    <div class="layui-row layui-col-space1">
      <div class="layui-col-md12">
          <div class="layui-card">
            <div class="layui-card-header">
            公告列表
            </div>
            <div class="layui-card-body">
              <blockquote class="layui-elem-quote layui-elem-nm">注：须保持有一条数据</blockquote>
            </div>
          </div>
      </div>

    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-body">
          <div style="padding-bottom: 10px;" class="layui-btn-group">
          
          <a class="layui-btn layuiadmin-btn-admin" href="/Zhis/Notice/add">添加</a>
        </div>
		  
          <table id="sms-plugin-table" lay-filter="sms-plugin-table"></table>  
           <table class="layui-table">
                <thead>
                    <tr>
                       
                        <th width="80">
                            ID
                        </th>
						 <th width="380">
                            标题
                        </th>

						<th width="100">
                            时间
                        </th>
                        <th width="188">
                            操作
                        </th>
                    </tr>
                </thead>
				 <?php if(is_array($mod)): $i = 0; $__LIST__ = $mod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
                    <tr>
                        
                        <td>
                          <?php echo ($vo["id"]); ?>
                        </td>
						<td >
                           <?php echo ($vo["title"]); ?>
                        </td>
                       
                        <td ><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></td>
                        <td class="td-manage">
                            <!-- <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="recharge" title="弹窗" style="margin-left: 0px;" href="/Zhis/Notice/tans?id=<?php echo ($vo["id"]); ?>"><i class="layui-icon layui-icon-diamond" ></i>弹窗</a> -->
                            <a class="layui-btn layui-btn-xs" lay-event="editPass"href="/Zhis/Notice/edit?id=<?php echo ($vo["id"]); ?>" title="编辑" style="margin-left: 0px;"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                            
                            <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="closeAgent" data-type="0" href="/Zhis/Notice/del?id=<?php echo ($vo["id"]); ?>"title="删除" style="margin-left: 0px;"><i class="layui-icon layui-icon-close"></i>删除</a>
							
                        </td>
                    </tr>
                </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

            <div id="page"></div>
        </div>
      </div>
    </div>
  </div>

<script src="/Public/common/lib/layui/layui.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery.cookie.js"></script>

</body>
</html>