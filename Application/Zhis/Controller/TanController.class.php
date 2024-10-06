<?php
namespace Zhis\Controller;
use Think\Controller;
class TanController extends YnController {
    public function index(){
		$mod = M('notice')->order("id ASC")-> select();
		$this -> assign("mod",$mod);
		 	
	$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
       $this->display("index");
    }
	 public function tans() {
		$id = $_GET['id'];
		M('notice')->where("id='{$id}'")->save(['status'=>1]);	
		M('notice')->where("id!='{$id}'")->save(['status'=>0]);	
		$mod = M('notice')->order("id ASC")-> select();
		$this -> assign("mod",$mod);
		 $this->display("index");
	}
	 public function guan() {
		$id = $_GET['id'];
		M('notice')->where("id='{$id}'")->save(['status'=>0]);	
		
		$mod = M('notice')->order("id ASC")-> select();
		$this -> assign("mod",$mod);
		 $this->display("index");
	}
	public function edit(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$id = $_GET['id'];
		$mod =M("notice")->where("id={$id}")->find();
		$this->assign("mod",$mod);
		$this->display("edit");
	}
	
	
	
		public function insert() {
			$_POST['addtime'] = time();        
		parent::insert();
	}
	
	
	 public function add() {
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M('tan')->where("id=1") -> find();
		$this -> assign("mod",$mod);
		$this->display("add");
		
	}
	
}