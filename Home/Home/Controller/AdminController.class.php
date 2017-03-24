<?php
namespace Home\Controller;

use Think\Controller;

class AdminController extends Controller
{
    //构造函数 检测是否登录
    function _initialize()
    {
        if (session('name') == null) {
            $this->error('请先登录!', U('login/index'));
        }
    }

    // banner查看
    public function banner_view()
    {
        $banner = D('config');
        $arr = $banner->getBanner();
        $this->assign('banner1', $arr['banner1']);
        $this->assign('banner2', $arr['banner2']);
        $this->assign('banner3', $arr['banner3']);
        $this->assign('banner4', $arr['banner4']);
        $arr = $this->get_banner();
        $this->assign('banners', $arr);
        $this->show();
    }

    //banner上传
    public function banner_upload()
    {
        $this->show();
    }

    //banner选择
    public function banner_choose()
    {
        $banner = D('config');
        $arr = $banner->getBanner();
        $this->assign('banner1', $arr['banner1']);
        $this->assign('banner2', $arr['banner2']);
        $this->assign('banner3', $arr['banner3']);
        $this->assign('banner4', $arr['banner4']);
        $arr = $this->get_banner();
        $this->assign('banners', $arr);
        $this->show();
    }

    //推文查看
    public function article_view()
    {
        $page = I('get.page') ? I('get.page') : 1;
        $this->assign('page', $page);
        $article = D('config');
        $articlesTitle = $article->getArticleTitle();
        $this->assign('articles_title', json_decode($articlesTitle['article_title']));
        $this->show();
    }

    // 推文选择
    public function article_choose()
    {
        $article = D('config');
        $articlesTitle = $article->getArticle();
        $this->assign('titles', json_decode($articlesTitle['article_title']));
        $this->assign('imgs', json_decode($articlesTitle['article_img']));
        $this->assign('urls', json_decode($articlesTitle['article_url']));
        $this->assign('authors', json_decode($articlesTitle['article_author']));
        $page = I('get.page') ? I('get.page') : 1;
        $this->assign('page', $page);
        $this->show();
    }


    public function banner_change()
    {
        $banner1 = I('post.banner1');
        $banner2 = I('post.banner2');
        $banner3 = I('post.banner3');
        $banner4 = I('post.banner4');
        $banner = D('config');
        $banner->changeBanner($banner1, $banner2, $banner3, $banner4);
        $this->success('变换成功!', 'banner_view');
    }

    //更改文章
    public function article_change()
    {
        $title = array(
            I("post.title1"),
            I("post.title2"),
            I("post.title3"),
            I("post.title4"),
            I("post.title5"),
            I("post.title6")
        );
        $url = array(
            I("post.url1"),
            I("post.url2"),
            I("post.url3"),
            I("post.url4"),
            I("post.url5"),
            I("post.url6")
        );
        $img = array(
            I("post.img1"),
            I("post.img2"),
            I("post.img3"),
            I("post.img4"),
            I("post.img5"),
            I("post.img6")
        );
        $author = array(
            I("post.author1"),
            I("post.author2"),
            I("post.author3"),
            I("post.author4"),
            I("post.author5"),
            I("post.author6")
        );
        $title=json_encode($title);
        $url=json_encode($url);
        $img=json_encode($img);
        $author=json_encode($author);
        $article = D('config');
//        echo "<pre>";
//        var_dump($title);
//        var_dump($url);
//        var_dump($author);
//        var_dump($img);
        $article->changeArticle($title,$url,$author,$img);
        $this->success('变换成功!', 'article_view');
    }


    //获取image/baner目录下的图片baner 返回文件名数组
    public function get_banner()
    {
        $handle = opendir('./Public/image/banner'); //当前目录
        while (false !== ($file = readdir($handle))) { //遍历该php文件所在目录
            list($filesname, $kzm) = explode(".", $file);//获取扩展名
            if ($kzm == "gif" or $kzm == "jpg" or $kzm == "JPG" or $kzm == "PNG" or $kzm == "png") { //文件过滤
                if (!is_dir('./' . $file)) { //文件夹过滤
                    $array[] = $file;//把符合条件的文件名存入数组
                    $i++;//记录图片总张数
                }
            }
        }
        return $array;
    }


    //banner文件上传方法
    // 文件上传
    public function upload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/image/banner/'; // 设置附件上传根目录
        $upload->saveName = '';
        $upload->autoSub = false;
        //  $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            $this->success('上传成功！');
        }
    }
}