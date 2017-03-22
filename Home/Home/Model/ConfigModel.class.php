<?php
namespace Home\Model;
use Think\Model;
class ConfigModel extends Model{
	//改变banner
	public function changeBanner($banner1,$banner2,$banner3,$banner4){
		$data['banner1']=$banner1;
		$data['banner2']=$banner2;
		$data['banner3']=$banner3;
		$data['banner4']=$banner4;
		$this->where('id=1')->save($data);
	}
	//获取banner
	public function getBanner(){
		$banner=$this->where('id=1')->field('banner1,banner2,banner3,banner4')->find();
		return $banner;
	}
	// 获取推文信息
	public function getArticle(){
		$article=$this->where('id=1')->field('article_url,article_author,article_title,article_img')->find();
		return $article;
	}
	// 只获取文章url
	public function getArticleTitle(){
		$article=$this->where('id=1')->field('article_title')->find();
		return $article;
	}

//	保存新的展示文章
//    data数组 {'article_title'=>[],'url'=>'','article_author'=>'','article_url'=>
    public function changeArticle($data){
//        $tit
    }
}