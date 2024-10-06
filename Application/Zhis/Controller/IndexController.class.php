<?php
namespace Zhis\Controller;
use Think\Controller;
class IndexController extends YnController {
	
    public function index(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		
        $this->display("index");
    }
	 public function home(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$jin  = M('user')->where('logintime >'. strtotime(date('Y-m-d')))->count();
		$hui  = M("user")->count();
		$zi  = M("reso")->count();
		$con  = M("config")->where("id=1")->find()['num'];
		$yk=M("kami")->where("name='月卡'")->count();
		$jk=M("kami")->where("name='季卡'")->count();
		$nk=M("kami")->where("name='年卡'")->count();
		$yjk=M("kami")->where("name='永久卡'")->count();
		$yks=M("kami")->where("name='月卡' and y = 1")->count();
		$jks=M("kami")->where("name='季卡' and y = 1")->count();
		$nks=M("kami")->where("name='年卡' and y = 1")->count();
		$yjks=M("kami")->where("name='永久卡' and y = 1")->count();
		$reso = M("reso")->order("addtime DESC")->limit(5)->select();
		$this->assign("reso",$reso);
		$this->assign("yk",$yk);
		$this->assign("jk",$jk);
		$this->assign("nk",$nk);
		$this->assign("yjk",$yjk);
		$this->assign("yks",$yks);
		$this->assign("jks",$jks);
		$this->assign("nks",$nks);
		$this->assign("yjks",$yjks);
		$this->assign("mian",$mian);
		$this->assign("hui",$hui);
		$this->assign("jin",$jin);
		$this->assign("zi",$zi);
		$this->assign("con",$con);
        $this->display("home");
    }
}