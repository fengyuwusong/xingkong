<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	// 登录
    public function index(){
        $this->show();
    }
    // 登录验证
    public function checkin(){
    	$name=I('post.name');
    	$password=I('post.password');
    	if($name=='xingkong'&&$password=="xingkong~~~best"){
            session('name',$name);
    		$this->success('登录成功!',U('admin/banner_view'));
    	}else{
            $this->error('登录失败!');
        }
    }

    public function checkout(){
        session('name',null);
        $this->success('登出成功!',U('index'));
    }
}