<?php
namespace Zhis\Controller;
use Think\Controller;
class AdminController extends YnController {
    public function index(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
       $this->display("index");
    }
	
	
	public function add(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M("admin")->where("id=1")->find();
		$this->assign("mod",$mod);
		$this->display("add");
	}
	
	
	public function update() {
	$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$_POST["pass"]=md5(sha1($_POST["pass"]));
		parent::update();
	}
	
	   public function admin(){
     header("Content-type: text/html; charset=utf-8");
     //清文件缓存
     $dirs = array('Application/Runtime/');
     @mkdir('Runtime',0777,true);
     //清理缓存
     foreach($dirs as $value) {
      $this->rmdirr($value);
     }
     echo '<div >系统缓存清除成功！</div>';  
  }
 
 
 
 
 
 
 
	  //处理方法
	   public function rmdirr($dirname) {
		if (!file_exists($dirname)) {
		 return false;
		}
		if (is_file($dirname) || is_link($dirname)) {
		 return unlink($dirname);
		}
		$dir = dir($dirname);
		if($dir){
		 while (false !== $entry = $dir->read()) {
	   if ($entry == '.' || $entry == '..') {
		continue;
	   }
	   //递归
	   $this->rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
		 }
		}
		$dir->close();
		return rmdir($dirname);
	   }
	 

}