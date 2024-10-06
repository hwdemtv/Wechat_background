<?php
namespace Zhis\Controller;
use Think\Controller;
class UserController extends YnController {
    public function index(){		
	$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$user = M('user')->where("status=1");
	    $page = new \Think\Page($user->count(),15);
	    $this->assign("user",$user->where("status=1")->order("addtime DESC")->limit($page->firstRow,$page->listRows)->select());
		$this->assign("pageinfo",$page->show());
        $this->display("index");
    }
	public function daili(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$user = M('user')->where("status=2");
	    $page = new \Think\Page($user->count(),15);
	    $this->assign("user",$user->where("status=2")->order("addtime DESC")->limit($page->firstRow,$page->listRows)->select());
		$this->assign("pageinfo",$page->show());
        $this->display("daili");
	}
	public function jilu(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$user = M('jifen');
	    $page = new \Think\Page($user->count(),15);
	    $this->assign("user",$user->order("addtime DESC")->limit($page->firstRow,$page->listRows)->select());
		$this->assign("pageinfo",$page->show());
        $this->display("jilu");
	}
	public function insert(){
		$config = M('config')->where("id=1")->find();
		
		$pass = md5(sha1($_POST['pass']));
		$_POST['mim'] = $_POST['pass'];
		$_POST['password'] =   $pass;

		$_POST['addtime'] = time();
		$_POST['logintime'] = time();
		$_POST['share'] = substr(base_convert(md5(uniqid(md5(microtime(true)),true)), 16, 10), 0, 6);
		parent::insert();
	}
	
	public function update(){
			
		$_POST['viptime'] =  strtotime($_POST['viptime']);
		
		parent::update();
	}
	public function info(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$user =M("user")->where("id = {$id}")->find();
		$this->assign("info",$user);
		$this->display("info");
	}
	public function money(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$uname = $_GET['uname'];
		$user =M("user")->where("id = {$id}")->find();
		$this->assign("info",$user);
		$this->display("money");
	}
	public function share(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$user =M("user")->where("id = {$id}")->find();
		$this->assign("info",$user);
		$this->display("share");
	}
	public function editPass(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$user =M("user")->where("id = {$id}")->find();
		$this->assign("info",$user);
		$this->display("editPass");
	}
	public function edit(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$user =M("user")->where("id = {$id}")->find();
		$this->assign("mod",$user);
		$this->display("edit");
	}
	
	
	public function ctime(){
		
		$last = $_GET['pass']*60*60*24;

        $id = $_GET['id'];
		$where = array();
		$where['id'] = array('in',$id);
		$mod =  M('user')->where($where)->setInc('viptime',$last);		
		if($mod>0){
           die("y");
        }else{
            die("n");
        }
		
	}
	
	public function moneys(){
		$last = $_POST['jifen'];
        $id = $_POST['id'];
		
		$where = array();
		$where['id'] = array('in',$id);
		$mod =  M('user')->where($where)->setInc('jifen',$last);		
		$this -> success("修改成功！","{$_SERVER['HTTP_REFERER']}",'0');
		
	}
	
	public function yao(){
		$share = $_POST['share'];
        $id = $_POST['id'];
		$mod =M("user")->where("share={$share}")->find();
		if($mod){
			$this->error("邀请码重复！");
		}else{
			 $user = M('user');
			 $datas['share'] = $share;
			 $user->create($datas);
			 $user->where("id={$id}")->save();
			 $this->success("修改成功！");
		}
	}
	public function del1(){
		
		$id = $_GET['id'];
		$mod = M("user")->delete($id);
      
		if($mod>0){
           die("y");
        }else{
            die("n");
        }
	}
	
	public function sea(){
		$uname =$_POST['uname'];
		$user = M("user")->where("username like '%$uname%'")->select();
		$this->assign("user",$user);
		$this->display("index");
		
	}
	public function sou(){
		$uname =$_POST['share'];
		$user = M("user")->where("share like '%$uname%'")->select();
		$this->assign("user",$user);
		$this->display("index");
		
	}
	public function shengji(){
        $id = $_GET['id'];
		$data['status'] = '2';
		$mod =  M('user')->where("id={$id}")->save($data);		
		if($mod>0){
           die("y");
        }else{
            die("n");
        }
		
	}
	
}