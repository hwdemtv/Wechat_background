<?php
//学生信息控制类
namespace Zhis\Controller;
use Think\Controller;
class PublicController extends Controller {	
	public function login(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$this->display("login");
	}
	//获取登录信息
	public function checkLogin(){
	
	$code = $_POST['vercode'];
	$flag=$this->check_verify($code);
	//验证码正确
	//var_dump($flag);
	if($flag==0)
	{
		$this->assign("errorinfo","验证码错误，请重新填写");
		//$this->assign("errorinfo","登录密码错误！");
        $this->display("login");
		exit;
	}
		
	$admin = M("Admin")->where("name='{$_POST['name']}'")->find();
	if(empty($admin)){
		$this->assign("errorinfo","登录账号不存在，或已被禁用！");
		$this->display("login");
		exit();
		}
		//判断密码md5(sha1($data['passwd']))
		if($admin['pass']==md5(sha1($_POST['pass']))){
            //此处表示登录成功
            $_SESSION['adminuser']=$admin; //将登录成功的信息放入到session中
            $this->redirect("Index/index");
        }else{
            $this->assign("errorinfo","登录密码错误！");
            $this->display("login");
            exit();
        }
    }
	//验证码
	public function verifyImg(){
		  $config=array(
			'imageW'  => 150,
			'imageH'  => 40,
			'fontSize' => 20,
			'length'  => 4,
			'useNoise'    =>    false, // 关闭验证码杂点
			);
			$obj = new \Think\Verify($config);
			$obj->entry();
		}
	//验证
	function check_verify($code, $id = ''){     
       $verify = new \Think\Verify();     
       return $verify->check($code, $id); 
    }

	//执行退出
	public function loginOut(){
		unset($_SESSION['adminuser']);
		unset($_SESSION['auth_temp']);
		
		$this->redirect("Public/login");
	}

}