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
<style type="text/css">
   .wrapper {position: relative;}
   #input {position: absolute;top: 0;left: 0;opacity: 0;z-index: -10;}
</style>
<body>

  <div class="layui-fluid">

    <div class="layui-row layui-col-space1">
      <div class="layui-col-md12">
          <div class="layui-card">
            <div class="layui-card-header">
           列表
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
          
          <a class="layui-btn layuiadmin-btn-admin" href="/Zhis/Reso/add">添加</a>
        </div>
		  
          <table id="sms-plugin-table" lay-filter="sms-plugin-table"></table>  
           <table class="layui-table">
                <thead>
                    <tr>
                       
                        <th width="10">
                            ID
                        </th>
                        <th  width="130">
                           标题
                        </th>
						<th width="40px">
                          解锁类型
                        </th>
                        <th width="120px">图片</th>
						
						<th width="120px">前端连接</th>
						<th width="10px">发现推荐</th>
						<th width="10px">是否显示</th>
						<th width="20px">添加时间</th>
                      
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
                           <?php if($vo["type"] == 1 ): ?>广告解锁获取<?php endif; ?>
						   <?php if($vo["type"] == 2 ): ?>广告解锁看全文<?php endif; ?>
						   <?php if($vo["type"] == 3 ): ?>VIP专享<?php endif; ?>
						   <?php if($vo["type"] == 4 ): ?>积分购买<?php endif; ?>
						   <?php if($vo["type"] == 5 ): ?>免费获取<?php endif; ?>
                        </td>
						<td> 
						<img  
						src="<?php echo ($vo["picname"]); ?>"> </div>
						</td>
						
						<td>
                        <a id="text"> /pages/details/details?tid=<?php echo ($vo["id"]); ?> </a>
						 <textarea id="input">这是幕后黑手</textarea>
						<button class="layui-btn layui-btn-normal layui-btn-radius" onclick="copyText()">复制</button> 
                        </td>
						 <?php if($vo["hot"] == 1 ): ?><td class=""><a href="/Zhis/Reso/guan1?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">显示</button> </a>
						
						</td>
						<?php else: ?>
						<td class=""><a href="/Zhis/Reso/tans1?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">隐藏</button> </a>
						
						</td><?php endif; ?>
						 <?php if($vo["status"] == 1 ): ?><td class=""><a href="/Zhis/Reso/guan?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">显示</button> </a>
						
						</td>
						<?php else: ?>
						<td class=""><a href="/Zhis/Reso/tans?id=<?php echo ($vo["id"]); ?>">
						<button class="layui-btn">隐藏</button> </a>
						
						</td><?php endif; ?>
						<td ><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></td>
                      
                        <td class="td-manage">
                            
                            <a title="编辑" href="/Zhis/Reso/edit?id=<?php echo ($vo["id"]); ?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>编辑
                            </a>
                            
                            <a title="删除" href="/Zhis/Reso/del?id=<?php echo ($vo["id"]); ?>" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>删除
                            </a>
                        </td>
                    </tr>
                </tbody><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

            <div id="page"><?php echo ($pageinfo); ?></div>
			
        </div>
      </div>
    </div>
  </div>


<script src="/Public/common/lib/layui/layui.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="/Public/common/lib/jquery/jquery.cookie.js"></script>
 <script src="/Public/js/jquery-1.9.1.min.js"></script>
<script>
layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
  
  //不显示首页尾页
  laypage.render({
    elem: 'demo4'
    ,count: 100
    ,first: false
    ,last: false
  });
 });
function copyText() {
      var text = document.getElementById("text").innerText;
      var input = document.getElementById("input");
      input.value = text; // 修改文本框的内容
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("复制成功");
    }

</script>
</body>
</html>