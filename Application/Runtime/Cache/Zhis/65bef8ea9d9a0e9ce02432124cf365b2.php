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
            卡密列表
            </div>
            
          </div>
      </div>

    <div class="layui-col-md12">
      <div class="layui-card">
	  <div class="layui-form layui-card-header layuiadmin-card-header-auto" wid100="">
        <div class="layui-form-item">
         
          <div class="layui-inline">
		   <form action="/Zhis/Kami/sou" method="POST">
            <label class="layui-form-label">卡密</label>
            <div class="layui-input-block">
              <input type="text" name="kami" autocomplete="off" class="layui-input">
            </div>
          </div>
		  <div class="layui-inline">
            <button class="layui-btn layuiadmin-btn-admin" lay-submit="" lay-filter="card-table-list-search">
              <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>
            </button>
          </div>
		</form>
          <div class="layui-inline">
		    <form action="/Zhis/Kami/daotxt" method="POST">
            <label class="layui-form-label">导出</label>
            <div class="layui-input-inline">
              <select name="type" class="layui-input" style="display:block;">
                <option value="">请选择卡类型</option>
				<option value="月卡">月卡</option>
				<option value="季卡">季卡</option>
				<option value="年卡">年卡</option>
				<option value="永久卡">永久卡</option>
				</select>
            </div>
          </div>
          
			<input type="submit"  class="layui-btn layui-btn-danger" value="导出">
          </form>
         
          
        </div>
      </div>
        <div class="layui-card-body">
          <div style="padding-bottom: 10px;" class="layui-btn-group">
          
          <a class="layui-btn layuiadmin-btn-admin" href="/Zhis/Kami/add">添加</a>
		  <a class="layui-btn layui-btn-warm" href="/Zhis/Kami/txt">导出</a>
        </div>
		  
          <table id="sms-plugin-table" lay-filter="sms-plugin-table"></table>  
           <table class="layui-table">
                <thead>
                    <tr>
				<th width="10px"><input id="checkall" name="checkall" value="全选" type="checkbox" class="ace"><span class="lbl"></span></th>
				<th width="15px">ID</th>
				<th width="100px">卡号</th>
				<th width="50px">类型</th>
				<th width="50px">持有者</th>
				<th width="140px">生成时间</th>
				<th width="70px">使用状态</th>                
			 <th width="50px">操作</th> 
			</tr>
                </thead>
				 <?php if(is_array($kami)): $i = 0; $__LIST__ = $kami;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tbody>
                    <tr>
                       <td><input type="checkbox" class="ace" name="id[]" value="<?php echo ($vo["id"]); ?>"><span class="lbl"></span></td>
					   <td><?php echo ($vo["id"]); ?></td>
					   <td><?php echo ($vo["dianka"]); ?></td>
					    <td><?php echo ($vo["name"]); ?></td>
						<?php if($vo["sbh"] == null ): ?><td>管理员</td>
					   <?php else: ?>
					   <td><?php echo ($vo["sbh"]); ?></td><?php endif; ?>
						 <td><?php echo (date("Y-m-d H:i:s",$vo["ctime"])); ?></td>
						<td class="td-status">
	   
	    <?php if($vo["y"] == '1' ): ?><span class="label label-success radius">已经使用</span>
	   
	   <?php else: ?>
	   <span class="label label-success radius">未使用</span><?php endif; ?>
	   </td>
						
                       <td class="td-manage">
                            
                         
                        <a title="删除" href="/Zhis/Kami/del?id=<?php echo ($vo["id"]); ?>"
                           style="text-decoration:none">
                             <i class="layui-icon"></i> 删除
                           </a>
							
							
							
                        <!-- </td> -->
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
						url:"/Zhis/Kami/del",	//请求地址
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
						url:"/Zhis/Kami/del1",	//请求地址
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