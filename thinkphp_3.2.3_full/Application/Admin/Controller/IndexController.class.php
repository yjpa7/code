<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo session('aid');
    }

    public function login(){

    	$do=I("get.do");
    	if($do=='chk'){
    		$auser = I("post.auser");
    		$apass = I("post.apass");	
    		//var_dump($auser, $apass);
    		$admin = D('blog_user');

    		$where = array(
    			'auser'=>$auser,
    			'apass'=>$apass,
    		);
    		$user = $admin-> where($where)-> find();
    		//var_dump($user);
    		if (!$user) {
    			# code...
    			return $this->error("帐号或密码错误", "/Admin/Index/login");
    		}
    		session("aid",$user['aid']);
    		return $this->success("登陆成功", "/Admin/Index/index");
    	}

    	$this->display();
    }
}