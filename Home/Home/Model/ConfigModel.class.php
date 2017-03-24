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
    public function changeArticle($title,$url,$author,$img){
        $data['article_title']=$title;
        $data['article_url']=$url;
        $data['article_author']=$author;
        $data['article_img']=$img;
        $article=$this->where('id=1')->save($data);
    }
}