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
            用户列表
            </div>
            
          </div>
      </div>

    <div class="layui-col-md12">
      <div class="layui-card">
	  <div class="layui-form layui-card-header layuiadmin-card-header-auto" wid100="">
        <div class="layui-form-item">
         
          <div class="layui-inline">
		   <form action="/Zhis/User/sea" method="POST">
            <label class="layui-form-label">用户名搜索</label>
            <div class="layui-input-block">
              <input type="text" name="uname" autocomplete="off" class="layui-input">
            </div>
          </div>
		  <div class="layui-inline">
            <button class="layui-btn layuiadmin-btn-admin" lay-submit="" lay-filter="card-table-list-search">
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
          </div>
		</form>
				<div class="layui-inline">
		   <form action="/Zhis/User/sou" method="POST">
            <label class="layui-form-label">邀请码搜索</label>
            <div class="layui-input-block">
              <input type="text" name="share" autocomplete="off" class="layui-input">
            </div>
          </div>
		  <div class="layui-inline">
            <button class="layui-btn layuiadmin-btn-admin" lay-submit="" lay-filter="card-table-list-search">
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
          </div>
		</form>
        </div>
		 
      </div>
        <div class="layui-card-body">
          <div style="padding-bottom: 10px;" class="layui-btn-group">
          
          <a class="layui-btn layuiadmin-btn-admin" href="/Zhis/User/add">添加</a>
		<button href="javascript:ovid()" onclick="del()" class="layui-btn layui-btn-warm">批量删除</button>
        </div>
		  
          <table id="sms-plugin-table" lay-filter="sms-plugin-table"></table>  
           <table class="layui-table">
                <thead>
                    <tr>
				<th width="10px"><input id="checkall" name="checkall" value="全选" type="checkbox" class="ace"><span class="lbl"></span></th>
				<th width="5px">ID</th>
				<th width="100px">用户名</th>
				 <th width="50px">头像</th> 
				<th width="50px">积分</th>
				<th width="140px">会员到期时间</th>
				 <th width="140px">最后登录时间</th>  
				 <th width="140px">注册时间</th>             
				<th width="70px">操作</th>
			</tr>
                </thead>
				 <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
                    <tr>
                       <td><input type="checkbox" class="ace" name="id[]" value="<?php echo ($vo["id"]); ?>"><span class="lbl"></span></td>
					  <td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["username"]); ?></td>
						<td> 
						<img  
						src="<?php echo ($vo["userimg"]); ?>"> </div>
						</td>
					   <td><?php echo ($vo["jifen"]); ?></td>
						<!-- <td><?php echo ($vo["jifen"]); ?></td> -->
						<?php
 $time = time(); $vip = $vo['viptime']; if($vip < $time){ echo '<td class="am-hide-sm-only" style="color:red;">'.date('Y-m-d H:i:s',$vo['viptime']).'</td>'; }else{ echo '<td class="am-hide-sm-only">'.date('Y-m-d H:i:s',$vo['viptime']).'</td>'; } ?>
						<td class="am-hide-sm-only"><?php echo (date("Y-m-d H:i:s",$vo["logintime"])); ?></td>
						
						<td class="am-hide-sm-only"><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
						
                        <td class="td-manage">
                           
                           
							<a class="layui-btn layui-btn-xs" lay-event="editPass"href="/Zhis/User/editPass?id=<?php echo ($vo["id"]); ?>" title="编辑" style="margin-left: 0px;"><i class="layui-icon layui-icon-edit"></i>编辑</a>
                            
							<a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="closeAgent" data-type="0" href="/Zhis/User/del?id=<?php echo ($vo["id"]); ?>"title="删除" style="margin-left: 0px;"><i class="layui-icon layui-icon-close"></i>删除</a>
							
							<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="recharge" title="充值" style="margin-left: 0px;" href="/Zhis/User/money?id=<?php echo ($vo["id"]); ?>"><i class="layui-icon layui-icon-diamond" ></i>充值</a>
							
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
<script type="text/javascript">

$("#checkall").click(function(){ 
		  $("input[name='id[]']").each(function(){
			  if (this.checked) {
				  this.checked = false;
			  }
			  else {
				  this.checked = true;
			  }
		  });
		})

/*广告图片-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',{icon:0,},function(index){
		$(obj).parents("tr").remove();
		$.ajax({
						url:"/Zhis/User/del",	//请求地址
						type:"get",		//请求方式
						data:{id:id},//发送数据
						async:true,			//异步情趣
						dataType:"text",	//响应数据格式
						 success:function(res){
						 
						 if(res=="y"){
							alert('删除成功');location="./index";	
							}else{
							$("#code").html("");	
							}
						},
					});
		layer.msg('已删除!',{icon:1,time:1000});
	});
}


function del(){

        var Checkbox=false;
		var ids = '';
			 $("input[name='id[]']").each(function(){
			  if (this.checked==true) {		
				Checkbox=true;	
				ids += ',' + $(this).val(); //逐个获取id
			  }
			});

			  ids = ids.substring(1); // 对id进行处理，去除第一个逗号
			
			
			if (Checkbox){
			
				var t=confirm("您确认要删除选中的内容吗？");
				if (t==false) return false;		
				$("#listform").submit();
					$.ajax({
						url:"/Zhis/User/del1",	//请求地址
						type:"get",		//请求方式
						data:{id:ids},//发送数据
						async:true,			//异步情趣
						dataType:"text",	//响应数据格式
						 success:function(res){
						 
						 if(res=="y"){
							alert('删除成功');location="./index";	
							}else{
							$("#code").html("");	
							}
						},
					});				
			}
			else{
				alert("请选择您要删除的内容!");
				return false;
			}

    }



//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.Order_form ,.ads_link').on('click', function(){
	var cname = $(this).attr("title");
	var cnames = parent.$('.Current_page').html();
	var herf = parent.$("#iframe").attr("src");
    parent.$('#parentIframe span').html(cname);
	parent.$('#parentIframe').css("display","inline-block");
    parent.$('.Current_page').attr("name",herf).css({"color":"#4c8fbd","cursor":"pointer"});
	//parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+">" + cnames + "</a>");
    parent.layer.close(index);
	
});
function AdlistOrders(id){
	window.location.href = "Ads_list.html?="+id;
};
</script>
</body>
</html>