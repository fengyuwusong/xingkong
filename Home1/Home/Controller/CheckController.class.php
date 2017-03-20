<?php
namespace Home\Controller;
use Think\Controller;
class CheckController extends Controller {
	//构造函数 检测是否登录
	function __initialize(){
		if(session('name')==null){
			$this->error('请先登录!');
		}
	}
}