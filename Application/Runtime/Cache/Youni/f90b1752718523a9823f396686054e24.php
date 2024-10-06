<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>控制台主页一</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/Public/layui4/css/layui.css" media="all">
  <link rel="stylesheet" href="/Public/admin/css/admin.css" media="all">
</head>
<body>
 <div class="layui-body" id="LAY_app_body" style="left: 0px;">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md6">
          <div class="layui-card">
            <div class="layui-card-header">快捷方式</div>
            <div class="layui-card-body">
              
              <div class="layui-carousel layadmin-carousel layadmin-shortcut" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 280px;">
                <div carousel-item="">
                  <ul class="layui-row layui-col-space10">
                      <li class="layui-col-xs3">
                        <a href="javascript:;" lay-href="/Zhis/Config/add">
                          <i class="layui-icon layui-icon-set"></i>
                          <cite>设置</cite>
                        </a>
                      </li>
                       <li class="layui-col-xs3">
                        <a lay-href="/Zhis/Notice/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>公告</cite>
                        </a>
                      </li>
					<li class="layui-col-xs3">
                        <a lay-href="/Zhis/Kami/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>卡密</cite>
                        </a>
                      </li>
						<li class="layui-col-xs3">
                        <a lay-href="/Zhis/Reso/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>资源</cite>
                        </a>
                      </li>
					  <li class="layui-col-xs3">
                        <a lay-href="/Zhis/Adver/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>轮播</cite>
                        </a>
                      </li>
					   <li class="layui-col-xs3">
                        <a lay-href="/Zhis/Type/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>分类</cite>
                        </a>
                      </li>
					   <li class="layui-col-xs3">
                        <a lay-href="/Zhis/Link/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>更多</cite>
                        </a>
                      </li>
                      <li class="layui-col-xs3">
                        <a lay-href="/Zhis/User/index">
                          <i class="layui-icon layui-icon-user"></i>
                          <cite>用户</cite>
                        </a>
                      </li>
                      
                    </ul>
                    
                  
                </div>
              <div class="layui-carousel-ind"></div><button class="layui-icon layui-carousel-arrow" lay-type="sub"></button><button class="layui-icon layui-carousel-arrow" lay-type="add"></button></div>
              
            </div>
          </div>
		  
		  
        </div>
		
		
		
        <div class="layui-col-md6">
          <div class="layui-card">
            <div class="layui-card-header">信息统计</div>
            <div class="layui-card-body">

              <div class="layui-carousel layadmin-carousel layadmin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 280px;">
                <div carousel-item="">
                  <ul class="layui-row layui-col-space10 layui-this">
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>总用户数</h3>
                        <p><cite><?php echo ($hui); ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>今日新增</h3>
                        <p><cite><?php echo ($jin); ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>资源数</h3>
                        <p><cite><?php echo ($zi); ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a href="javascript:;" onclick="layer.tips('不跳转', this, {tips: 3});" class="layadmin-backlog-body">
                        <h3>访问次数</h3>
                        <p><cite><?php echo ($con); ?></cite></p>
                      </a>
                    </li>
                  </ul>
                  <ul class="layui-row layui-col-space10">
                    <li class="layui-col-xs6">
                      <a href="javascript:;" class="layadmin-backlog-body">
                        <h3>已提月卡总数</h3>
                        <p><cite><?php echo ($yk); ?></cite></p>
                      </a>
                    </li>
					 <li class="layui-col-xs6">
                      <a href="javascript:;" class="layadmin-backlog-body">
                        <h3>已提季卡总数</h3>
                        <p><cite><?php echo ($jk); ?></cite></p>
                      </a>
                    </li>
					 <li class="layui-col-xs6">
                      <a href="javascript:;" class="layadmin-backlog-body">
                        <h3>已提年卡总数</h3>
                        <p><cite><?php echo ($nk); ?></cite></p>
                      </a>
                    </li>
					 <li class="layui-col-xs6">
                      <a href="javascript:;" class="layadmin-backlog-body">
                        <h3>已提终身卡总数</h3>
                        <p><cite><?php echo ($yjk); ?></cite></p>
                      </a>
                    </li>
                  </ul>
                </div>
              <div class="layui-carousel-ind"><ul><li class="layui-this"></li><li></li></ul></div><button class="layui-icon layui-carousel-arrow" lay-type="sub"></button><button class="layui-icon layui-carousel-arrow" lay-type="add"></button></div>
            </div>
          </div>
        </div>
		
		<!-- 余下 -->
        <div class="layui-col-md8" style="width:100%;">
          <div class="layui-card">
				<div class="layui-card">
        <div class="layui-card-header">最新发布</div>
        <div class="layui-card-body">
          <dl class="layuiadmin-card-status">
		   <?php if(is_array($reso)): $i = 0; $__LIST__ = $reso;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd style="padding: 15px 0;border-bottom: 1px solid #EEE;display: flex;">
              <div class="layui-status-img" style="width: 150px;height: 70px;margin-right: 15px;"><a href="javascript:;"><img src="<?php echo ($vo["picname"]); ?>" style="width: 100%;height: 100%;"></a></div>
              <div>
                <p><?php echo ($vo["title"]); ?></p>
                <span><?php echo (date("Y-m-d H:i",$vo["addtime"])); ?></span>
              </div>
            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
           
          </dl>  
        </div>
      </div>
			
		  </div>
		</div>
      </div>
    </div>
    
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header">版本信息</div>
        <div class="layui-card-body layui-text">
          <table class="layui-table">
            <colgroup>
              <col width="100">
              <col>
            </colgroup>
            <tbody>
              <tr>
                <td>程序版本</td>
                <td>
                  <script type="text/html" template="">
                    v1.0
                  </script> 
                  <a href="javascript:;" layadmin-event="update" style="padding-left: 5px;">检查更新</a>
                </td>
              </tr>
              <tr>
                <td>基于框架</td>
                <td>
                  <script type="text/html" template="">
                   ThinkPHP3.2+layui
                  </script> 
               </td>
              </tr>
			   <tr>
                <td>PHP版本</td>
                <td><?php echo PHP_VERSION;?></td>
              </tr>
			  <tr>
                <td>操作系统</td>
                <td><?PHP echo PHP_OS; ?></td>
              </tr>
			   <tr>
                <td>服务器端</td>
                <td><?PHP echo $_SERVER ['SERVER_SOFTWARE']; ?></td>
              </tr>
              <tr>
                <td>主要特色</td>
                <td>知识付费资源变现小程序</td>
              </tr>
              <tr>
                <td>获取渠道</td>
                <td style="padding-bottom: 0;">
                  <div class="layui-btn-container">
                    <a href="http://www.layui.com/admin/" target="_blank" class="layui-btn layui-btn-danger">获取授权</a>
                   
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      
      
      
      
      <div class="layui-card">
        <div class="layui-card-header">产品动态</div>
        <div class="layui-card-body">
          <div class="layui-carousel layadmin-carousel layadmin-news" data-autoplay="true" data-anim="fade" lay-filter="news" lay-anim="fade" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 280px;">
            <div carousel-item="">
              <div class="layui-this"><a href="http://fly.layui.com/docs/2/" target="_blank" class="layui-bg-red">筑梦知识付费资源变现小程序</a></div>
              
            </div>
         <button class="layui-icon layui-carousel-arrow" lay-type="sub"></button><button class="layui-icon layui-carousel-arrow" lay-type="add"></button></div>
        </div>
      </div>

      <div class="layui-card">
        <div class="layui-card-header">
          免责声明
          <i class="layui-icon layui-icon-tips" lay-tips="要支持的噢" lay-offset="5"></i>
        </div>
        <div class="layui-card-body layui-text layadmin-text">
          <p>购买本产品的客户请勿涉黄或其他违反国家法律的用途上，如有客户不遵守国家法律 产生相关法律问题与本店无关，我们不接触一切违反国家法律的技术支持工作，使用本产品后请正确正规经营程序!</p>
          <p>—— 红桃K（<a href="http://www.layui.com/" target="_blank">layui.com</a>）</p>
        </div>
      </div>
    </div>
    
  </div>
</div><script>
//加载 controller 目录下的对应模块
/*

  小贴士：
    这里 console 模块对应 的 console.js 并不会重复加载，
    然而该页面的视图则是重新插入到容器，那如何保证能重新来控制视图？有两种方式：
      1): 借助 layui.factory 方法获取 console 模块的工厂（回调函数）给 layui.use
      2): 直接在 layui.use 方法的回调中书写业务代码，即:
          layui.use('console', function(){ 
            //同 console.js 中的 layui.define 回调中的代码 
          });
          
  这里我们采用的是方式1。其它很多视图中采用的其实都是方式2，因为更简单些，也减少了一个请求数。
  
*/
layui.use('console', layui.factory('console'));
</script></div>
  </div>
  <script src="/Public/common/lib/layui/layui.js"></script>
  <script>
    layui.config({
      base: '/Public/admin/js/' //静态资源所在路径
    }).extend({
      index: 'lib/index' //主入口模块
    }).use(['index', 'home']);
  </script>
</body>
</html>