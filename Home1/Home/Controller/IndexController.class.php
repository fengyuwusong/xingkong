<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 首页
    public function index(){
    	$banner=D('config');
    	$arr=$banner->getBanner();
    	$this->assign('banner1',$arr['banner1']);
    	$this->assign('banner2',$arr['banner2']);
    	$this->assign('banner3',$arr['banner3']);
    	$this->assign('banner4',$arr['banner4']);
        $this->show();
    }
    // 关于我们
    public function about(){
    	$this->show();
    }
    // ajax接口 返回推文信息
    public function getArticle(){
        $article=D('config');
        $a=$article->getArticle();
        $this->ajaxReturn($a);
    }
}