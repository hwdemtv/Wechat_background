<?php
namespace App\Controller;
use Think\Controller;
class ZmController extends Controller {
	
		public function lunbo(){
	  
			$arr['slun'] = M('adver')->where("status = 1")->order("sort DESC")->select();
			if ($arr) 
			{
				echo json_encode($arr, JSON_UNESCAPED_UNICODE);
			}
			else 
			{
				echo  json_encode($arr, JSON_UNESCAPED_UNICODE);
			}
			
		}
		public function uuid(){
			$uid=$_POST['uid'];
			$mod = M("user")->where("id={$uid}")->find();
			if(!$mod){
				echo json_encode(['code' => '1'], JSON_UNESCAPED_UNICODE);
			}
		}
		
	   public function type(){
		   $mod  = M("type")->where("status=1")->order("sort DESC")->select();
		   if($mod){
			echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
		   }else{
			echo json_encode(['code' => '0','msg'=>'用户名或密码错误~'], JSON_UNESCAPED_UNICODE);
			exit;
			}
	   }
	   
	   public function indexshou(){
			$m=M('type')->where("status=1");  
			$m1=M('reso')->where("hot=1");  
			$parent=$m->order('sort DESC')->select();  
			 foreach($parent as $n=> $val){  
				 $id = $val['id'];
				 $parent[$n]['list']=$m1->where("tid='{$id}' and hot = 1  and status = 1")->order("addtime DESC")->limit(6)->select();  
			 }  
			if ($parent) 
			{
				echo json_encode(['code' => '1','msg'=>$parent], JSON_UNESCAPED_UNICODE);
			}
			else 
			{
				echo  json_encode(['code' => '0','msg'=>$parent], JSON_UNESCAPED_UNICODE);
			}	
		}
		  public function getlist(){
			  $tid=$_POST['tid'];
			  $uid=$_POST['uid'];
			  $buy = M("buy")->where("uid = {$uid} and tid = {$tid}")->find()['id'];
			  M("reso")->where("id = {$tid}")->setInc('count',1);
			  $mod = M("reso")->where("id = {$tid}")->find();
			  $mod['content'] = htmlspecialchars_decode($mod['content']);
			  $mod['buygoods'] = $buy;
			  if($mod){
				   
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
				
			  }else{
				   
				echo json_encode(['code' => '0','msg'=>'还没有信息~'], JSON_UNESCAPED_UNICODE);
				exit;
				
			  }
		  }	
	  
		  public function zuixin(){
			  $mod = M("reso")->where("status=1 and hot=1")->order("addtime DESC")->limit(10)->select();
			  if($mod){
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			  }else{ 
			   echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			   exit;
			  }
		  }
	  
		  public function hot(){
			  $mod = M("reso")->where("status=1")->order("count DESC")->limit(20)->select();
			  if($mod){
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			  }else{ 
			   echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			   exit;
			  }
		  }
			public function vip(){
			  $mod = M("reso")->where("status=1")->where("type=3")->order("addtime DESC")->limit(30)->select();
			  if($mod){
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			  }else{ 
			   echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			   exit;
			  }
		  }
		  public function all(){
			$pagestart=$_POST['nextrow'];
			$arr = M("reso")->where("status=1")->order("addtime DESC")->limit($pagestart,10)->select();
			if ($arr) 
			{
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				
			}
			else 
			{
				echo json_encode(['code' => '0','msg'=>'已经没有了！'], JSON_UNESCAPED_UNICODE);
			}		 
		  }
		
		public function leibiao(){
			$tid = $_POST['tid'];
		    $pagestart=$_POST['nextrow'];
			$arr = M("reso")->where("tid={$tid} and status =1")->order("addtime DESC")->limit($pagestart,10)->select();
			if ($arr) 
			{
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				
			}
			else 
			{
				echo json_encode(['code' => '0','msg'=>'已经没有了！'], JSON_UNESCAPED_UNICODE);
			}
		}
		
		public function notice(){
			 $mod = M("notice")->order("addtime DESC")->limit(6)->select();
			 // $mod['content'] = htmlspecialchars_decode($mod['content']);
			  if($mod){
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			  }else{ 
			   echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			   exit;
			  }
		}
		public function noticex(){
			$tid = $_POST['tid'];
			$mod = M("notice")->where("id = {$tid}")->find();
			$mod['content'] = htmlspecialchars_decode($mod['content']);
			if($mod){
			echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			}else{ 
			echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			exit;
			}
		}
		
		public function config(){
				$con = M("config")->where("id=1")->find();
				M("config")->where("id=1")->setInc('num',1);
				$tan = M("tan")->where("id=1 and status=1")->find();
				$con['title'] = $tan['title'];
				$con['nei'] = $tan['nei'];
				$con['tanstatus'] = $tan['status'];
			$con['wenti'] = htmlspecialchars_decode($con['faq']);
			$con['about'] = htmlspecialchars_decode($con['about']);   			
			if($con){
				echo json_encode(['code' => '1','msg'=>$con], JSON_UNESCAPED_UNICODE);
			}else{
				echo json_encode(['code' => '0','msg'=>$con], JSON_UNESCAPED_UNICODE);
			}
		}
		
		public function search(){
		$keyword =$_POST['keyword'];
		$pagestart=$_POST['nextrow'];
		$arr = M("reso")->where("title like '%$keyword%'")->limit($pagestart,10)->order("addtime DESC")->select();
		if ($arr) 
		{
			echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
			
		}
		else 
		{
			echo json_encode(['code' => '0','msg'=>'没有搜索到内容哦！'], JSON_UNESCAPED_UNICODE);
		}
		
		}
		
		public function link(){
			$mod = M("link")->order("sort DESC")->select();
			  if($mod){
				echo json_encode(['code' => '1','msg'=>$mod], JSON_UNESCAPED_UNICODE);
			  }else{ 
			   echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			   exit;
			  }
		}
		
		public function oneRegister(){
			$code = $_POST['uuid'];//小程序传来的code值
			$con = M("config")->where("id=1")->find();
			 $appid = $con['appid'];//小程序的appid
			 $appSecret = $con['appsecret'];// 小程序的$appSecret
			 $wxUrl = 'https://api.weixin.qq.com/sns/jscode2session?appid=%s&secret=%s&js_code=%s&grant_type=authorization_code';
			 $getUrl = sprintf($wxUrl, $appid, $appSecret, $code);//把appid，appsecret，code拼接到url里
		$result = $this->curl_get($getUrl);//请求拼接好的url
			 $wxResult = json_decode($result, true);
			 $content = $wxResult['openid'];
			$data = M('user')->where("uuid='{$content}'")->find();
			$uid = $data['id'];
			$buy = M("buy")->where("uid = {$uid}")->count();
			$collect = M("collect")->where("uid = {$uid}")->count();
			$arr['username'] = $data['username'];     
			$arr['id'] = $data['id'];  
			$arr['jifen'] = $data['jifen'];  
			$arr['userimg'] = $data['userimg']; 
			$arr['viptime'] = $data['viptime'];
			$arr['buy'] = $buy; 
			$arr['collect'] = $collect;    		
			if($data){
				$a=M('user')->where("uuid='{$content}'")->setInc('count',1);
				$b=M('user')->where("uuid='{$content}'")->save(['logintime'=>time()]);
				
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
			}else{
				$mod = M('user');
				if(!empty($content)){
				$insert['username'] = $_POST['nickName'];
				$insert['uuid'] = $content;
				$insert['addtime'] = time();
				$insert['logintime'] = time();
				$insert['viptime'] = time();
				$insert['userimg'] = $_POST['avatarUrl'];
				$mod -> create($insert);
				$result = $mod -> add();
				if($result){
					$data = M('user')->where("uuid='{$content}'")->find();
					$uid = $data['id'];
					$buy = M("buy")->where("uid = {$uid}")->count();
					$collect = M("collect")->where("uid = {$uid}")->count();
					$arr['username'] = $data['username'];     
					$arr['id'] = $data['id'];  
					$arr['jifen'] = $data['jifen']; 
					$arr['userimg'] = $data['userimg']; 
					$arr['viptime'] = $data['viptime'];
					$arr['buy'] = $buy; 
					$arr['collect'] = $collect; 
					$a=M('user')->where("uuid='{$content}'")->setInc('count',1);
					$b=M('user')->where("uuid='{$content}'")->save(['logintime'=>time()]);
					echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				}
				
				}else{
					echo json_encode(['code' => '0','msg'=>'失败'], JSON_UNESCAPED_UNICODE);
				}			
			}
			
		}
		
		
		
		function curl_get($url, &$httpCode = 0) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			//不做证书校验,部署在linux环境下请改为true
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
			$file_contents = curl_exec($ch);
			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			return $file_contents;
		}
		
		public function huoqu(){
			$uid = $_POST['uid'];
			$tid = $_POST['tid'];
			$a = M("buy")->where("uid = {$uid} and tid = {$tid}")->find();
			if($a){
				echo json_encode(['code' => '0','msg'=>'已经获取过了！'], JSON_UNESCAPED_UNICODE);
			   exit;
			}else{
				$mod = M('buy');
				$r = M("reso")->where("id = {$tid}")->find()['dizhi'];
				$insert['title'] = $_POST['title'];
				$insert['uid'] = $_POST['uid'];
				$insert['addtime'] = time();
				$insert['tid'] = $_POST['tid'];
				$insert['picname'] = $_POST['picname'];
				$insert['dizhi'] = $r;
				$mod -> create($insert);
				$result = $mod -> add();
				$arr = M("buy")->where("uid = {$uid}")->count();
				if($result){
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				}else{ 
				echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
				exit;
				}
			}
			
		}
		
		public function goods(){
			$uid = $_POST['uid'];
			$tid = $_POST['tid'];
			$price = M("reso")->where("id = {$tid}")->find()['price'];
			$jifen = M("user")->where("id = {$uid}")->find()['jifen'];
			if($price > $jifen){
				echo json_encode(['code' => '0','msg'=>'您的积分不够！'], JSON_UNESCAPED_UNICODE);
			    exit;
			}else{
				$a = M("buy")->where("uid = {$uid} and tid = {$tid}")->find();
			if($a){
				echo json_encode(['code' => '0','msg'=>'已经获取过了！'], JSON_UNESCAPED_UNICODE);
			    exit;
			}else{
				M("user")->where("id = {$uid}")->setDec('jifen',$price);
				$r = M("reso")->where("id = {$tid}")->find()['dizhi'];
				$mod = M('buy');
				$insert['title'] = $_POST['title'];
				$insert['uid'] = $_POST['uid'];
				$insert['addtime'] = time();
				$insert['tid'] = $_POST['tid'];
				$insert['picname'] = $_POST['picname'];
				$insert['dizhi'] = $r;
				$mod -> create($insert);
				$result = $mod -> add();
				$arr['buy'] = M("buy")->where("uid = {$uid}")->count();
				$arr['jifen']=M("user")->where("id = {$uid}")->find()['jifen'];
				if($result){
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				}else{ 
				echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
				exit;
				}
			}
				
			}
			
			
		}
		
		
		public function collect(){
			$uid = $_POST['uid'];
			$tid = $_POST['tid'];
			$a = M("collect")->where("uid = {$uid} and tid = {$tid}")->find();
			if($a){
			echo json_encode(['code' => '0','msg'=>'已经收藏过了！'], JSON_UNESCAPED_UNICODE);
			exit;
			}else{
			$mod = M('collect');
			$insert['title'] = $_POST['title'];
			$insert['uid'] = $_POST['uid'];
			$insert['addtime'] = time();
			$insert['tid'] = $_POST['tid'];
			$insert['picname'] = $_POST['picname'];
			$mod -> create($insert);
			$result = $mod -> add();
			$arr = M("collect")->where("uid = {$uid}")->count();
			if($result){
			echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
			}else{ 
			echo json_encode(['code' => '0','msg'=>'无~'], JSON_UNESCAPED_UNICODE);
			exit;
			}
			}
			
		}
		
		public function collectlist(){
			$uid = $_POST['uid'];
		    $pagestart=$_POST['nextrow'];
			$arr = M("collect")->where("uid={$uid}")->order("addtime DESC")->limit($pagestart,10)->select();
			if ($arr) 
			{
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				
			}
			else 
			{
				echo json_encode(['code' => '0','msg'=>'已经没有了！'], JSON_UNESCAPED_UNICODE);
			}
		}
		
		public function buylist(){
			$uid = $_POST['uid'];
		    $pagestart=$_POST['nextrow'];
			$arr = M("buy")->where("uid={$uid}")->order("addtime DESC")->limit($pagestart,10)->select();
			if ($arr) 
			{
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				
			}
			else 
			{
				echo json_encode(['code' => '0','msg'=>'已经没有了！'], JSON_UNESCAPED_UNICODE);
			}
		}
		
		public function buyvip(){
			$uid = $_POST['uid'];
			$price = $_POST['price'];
			$user = M("user")->where("id={$uid}")->find();
			if($price>$user['jifen']){
					echo json_encode(['code'=>0,'msg'=>'您的积分不够！']);
			}else{
				$con = M("config")->where("id=1")->find();
				if($price==$con['yiyue']) 
				{
					$ctime = 1;
				}
				if($price==$con['liuyue']) 
				{
					$ctime = 6;
				}
				if($price==$con['shier']) 
				{
					$ctime = 12;
				}
				switch ($ctime){
					case 1;
					$time = 30*60*60*24;
					//$time = date("Y-m-d H:i:s",strtotime("+1months",time()));
					$name = '一个月';
					break;
					case 6;
					$time = 180*60*60*24;
					//$time = date("Y-m-d H:i:s",strtotime("+1months",time()));
					$name = '六个月';
					break;
					case 12;
					$time = 365*60*60*24;
					//$time = date("Y-m-d H:i:s",strtotime("+1months",time()));
					$name = '十二个月';
					break;					
				}
				
				$data = M('user')->where("id={$uid}")->find()['viptime'];
				if($data<time()) 
				{
					M('user')->where("id={$uid}")->save(['viptime'=>time()+$time]);
				}
				else 
				{
					M('user')->where("id={$uid}")->save(['viptime'=>$data+$time]);
				}
				M('user')->where("id={$uid}")->setDec('jifen',$price);
				$arr = M("user")->where("id={$uid}")->find()['viptime'];
				$brr = M("user")->where("id={$uid}")->find()['jifen'];
				echo json_encode(['code'=>1,'msg'=>$arr,'brr'=>$brr], JSON_UNESCAPED_UNICODE);
			}			
		}
		
		
		public function qiandao(){
			$today = date('Ymd');
			$uid=$_POST['uid'];
			$signInfo = M("user")->field('id,num,times')->where("id={$uid}")->find();
			$con = M("config")->where("id=1")->find();
			if($signInfo['times'] == $today){//今天已签到过了
				echo json_encode(['code' => '0','msg'=>'今天已经签过了！'], JSON_UNESCAPED_UNICODE);
				exit;
			}else if($signInfo['times'] == date('Ymd', strtotime('-1 day'))){
					
				if ($signInfo['num'] == 6) {
					 $num = 0;//连续签到次数
					 $tz = $con['qi'];//额外奖励积分数
					 $result  = M("user")->where("id={$uid}")->save(['times'=>$today,'num'=>$num]);
					M("user")->where("id={$uid}")->setInc('jifen',$tz);
					echo json_encode(['code' => '1','msg'=>'签到成功,已经连续签到7天了'], JSON_UNESCAPED_UNICODE);
					exit;
				}elseif($signInfo['num'] == 5){
					$num = $signInfo['num'] + 1;
					$tz = $con['liu'];
				}elseif($signInfo['num'] == 4){
					$num = $signInfo['num'] + 1;
					$tz = $con['wu'];
				}elseif($signInfo['num'] == 3){
					$num = $signInfo['num'] + 1;
					$tz = $con['si'];
				}elseif($signInfo['num'] == 2){
					$num = $signInfo['num'] + 1;
					$tz = $con['san'];
				}elseif($signInfo['num'] == 1){
					$num = $signInfo['num'] + 1;
					$tz = $con['er'];
				}elseif($signInfo['num'] == 0){
					$num = $signInfo['num'] + 1;
					$tz = $con['yi'];
				}
				$result  = M("user")->where("id={$uid}")->save(['times'=>$today,'num'=>$num]);
				M("user")->where("id={$uid}")->setInc('jifen',$tz);
				$arr = M("user")->where("id={$uid}")->find()['jifen'];
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				exit;
			}else{
				$result  = M("user")->where("id={$uid}")->save(['times'=>$today,'num'=>1]);
				M("user")->where("id={$uid}")->setInc('jifen',$con['yi']);
				$arr = M("user")->where("id={$uid}")->find()['jifen'];
				echo json_encode(['code' => '1','msg'=>$arr], JSON_UNESCAPED_UNICODE);
				exit;
			}
		}
		
		public function dianka(){
		
		$uid = $_GET['uid'];
		$dianka = $_GET['dianka'];
		
		if(!empty($uid) && !empty($dianka)){
			
			$num = M('user')->where("id={$uid}")->count();
			if($num=='0') 
			{
				echo  json_encode(['code'=>0,'msg'=>'用户不存在'], JSON_UNESCAPED_UNICODE);
				exit();
			}
			$dianka1 = M('kami')->where("dianka='{$dianka}'")->find();
			if(!$dianka1) 
			{
				echo  json_encode(['code'=>0,'msg'=>'卡号错误'], JSON_UNESCAPED_UNICODE);
				exit();
			}
			
			if($dianka1['y']=='1') 
			{
				
				echo  json_encode(['code'=>0,'msg'=>'点卡已使用'], JSON_UNESCAPED_UNICODE);
				exit();
			}
			
				
			$user = M('user')->where("id={$uid}")->find();
			
			if($user['viptime']>time()) 
			{
					M('user')->where("id={$uid}")->save(['viptime'=>$user['viptime']+$dianka1['time']]);
				
			}else{
					M('user')->where("id={$uid}")->save(['viptime'=>time()+$dianka1['time']]);
	
			}
			
			
		
			$a=M('kami')->where("dianka='{$dianka}'")->save(['y'=>'1','yid'=>$uid,'stime'=>time()]);
		
				
				$lasttime = M('user')->where("id={$uid}")->find()['viptime'];
			
			
			
			echo  json_encode(['code'=>1,'msg'=>'充值成功','lasttime'=>$lasttime], JSON_UNESCAPED_UNICODE);	
		}else {
			
			echo  json_encode(['code'=>0,'msg'=>'参数缺失'], JSON_UNESCAPED_UNICODE);
		}
		
	}
		
		
		
		
}