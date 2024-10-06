<?php
namespace Zhis\Controller;
use Think\Controller;
class ConfigController extends YnController {
    public function index(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
       $this->display("index");
    }
	public function qiandao(){
		$config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M('config') ->where("id=1")-> find();
		 $this -> assign("mod",$mod);
       $this->display("qiandao");
    }

	 public function add() {
		 $config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M('config')->where("id=1") -> find();
		 $this -> assign("mod",$mod);
		$this->display("add");
	}
	
	public function wenti() {
		 $config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M('config')->where("id=1") -> find();
		 $this -> assign("mod",$mod);
		$this->display("wenti");
	}
	public function weixin() {
		 $config =M("config")->where("id=1")->find()['webname'];
		$this->assign("config",$config);
		$mod = M('config')->where("id=1") -> find();
		 $this -> assign("mod",$mod);
		$this->display("weixin");
	}
	
	public function update() {

		//$_POST["faq"]=$_POST["faq"];
		//$_POST["about"]=$_POST["about"];
		if(!empty($_FILES) && $_FILES["uploadpic"]["error"]==0){
			//如果有文件上传 上传附件
			 $this->_upload();
			//$this->forward();
			//删除原图
			$model = D("Config");
		    $id = $_REQUEST ["id"];
			$ob = $model->find($id);
			if(!empty($ob)){
				@unlink('./Public/uploads/'.$ob['zanshang']);
				//@unlink('./Public/uploads/links/s_'.$ob['logo']);
			}
		}
		parent::update();
	}
	
	// 文件上传
    protected function _upload()
    {	
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize = 2120000 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif','png','jpeg','pjpeg');// 设置附件上传类型 
        $upload->rootPath = './Public/uploads/'; // 设置附件上传目录    
        $upload->autoSub = false; // 设置不创建子目录
		
		$info = $upload->upload();
		if(!$info) {
			$this->error($upload->getError());
        }else {
            //取得成功上传的文件信息
            $uploadList = array_values($info);
			$picname = $uploadList[0]['savename'];
			
			// $image = new \Think\Image();
			// $image->open('./Public/uploads/gl/'.$picname);
			// //按照原图的比例生成一个最大为150*150的缩略图并保存
			// //$image->thumb(150, 150)->save('./Public/uploads/links/s_'.$picname);
			// //$image->thumb(500, 500)->save('./Public/uploads/links/'.$picname);
			// //$image->thumb(220, 220)->save('./Public/uploads/links/m_'.$picname);
			// $image->thumb(1200, 130)->save('./Public/uploads/gl/'.$picname);
			$url = 'http://'.$_SERVER['SERVER_NAME'].'/'.'Public/uploads/'; 
			$_POST['zanshang']  = $url.$picname;
		}
	}
	
}