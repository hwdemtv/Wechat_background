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
            广告列表
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
          
          <a class="layui-btn layuiadmin-btn-admin" href="/Zhis/Adver/add">添加</a>
        </div>
		  
          <table id="sms-plugin-table" lay-filter="sms-plugin-table"></table>  
           <table class="layui-table">
                <thead>
                    <tr>
                       
                        <th width="80">
                            ID
                        </th>
                        <th  width="130">
                           标题
                        </th>
                        <th width="120px">图片</th>
						
						<th width="120px">连接</th>
						<th width="10px">是否显示</th>
						<th width="20px">排序</th>
                      
                        <th width="88">
                            操作
                        </th>
                    </tr>
                </thead>
				 <?php if(is_array($mod)): $i = 0; $__LIST__ = $mod;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
                    <tr>
                        
                        <td>
                          <?php echo ($vo["id"]); ?>
                        </td>
                        <td>
                           <?php echo ($vo["title"]); ?>
                        </td>
						<td> 
						<img  
						src="<?php echo ($vo["picname"]); ?>"> </div>
						</td>
						
						<td>
                           <?php echo ($vo["link"]); ?>
                        </td>
						 <?php if($vo["status"] == 1 ): ?><td class=""><a href="/Zhis/Adver/guan?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">显示</button> </a>
						
						</td>
						<?php else: ?>
						<td class=""><a href="/Zhis/Adver/tans?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">隐藏</button> </a>
						
						</td><?php endif; ?>
						<td>
                           <?php echo ($vo["sort"]); ?>
                        </td>
                      
                        <td class="td-manage">
                            
                            <a title="编辑" href="/Zhis/Adver/edit?id=<?php echo ($vo["id"]); ?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>编辑
                            </a>
                            
                            <a title="删除" href="/Zhis/Adver/del?id=<?php echo ($vo["id"]); ?>" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>删除
                            </a>
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