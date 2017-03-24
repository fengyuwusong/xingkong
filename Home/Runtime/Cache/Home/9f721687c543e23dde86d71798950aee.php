<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
</html>
<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="utf-8"/>
    <title>
        后台页面
    </title>
</head>
<script src="/xingkong/Public/js/jquery/2.0.0/jquery.min.js" type="text/javascript">
</script>
<link href="/xingkong/Public/css/bootstrap/3.3.6/bootstrap.css" rel="stylesheet" type="text/css">
<script src="/xingkong/Public/js/bootstrap/3.3.6/bootstrap.js" type="text/javascript">
</script>
<style type="text/css">
    .jumbotron {
        height: 200px;
        margin: 0;
        padding: 0;
    }

    .nav .dropdown {
        margin-left: 50px;
    }

    #wel {
        margin-top: 10px;
        padding-right: 50px;
    }

    .breadcrumb {
        padding-left: 70px;
    }

    .name {
        margin: 10px;
    }

    button {
        margin-top: 20px;
    }

    .navbar {
        margin-bottom: 0px;
    }

    h2 {
        margin: 0;
        line-height: 100px;
    }

    img {
        width: 100%;
        height: 63%;
    }

    .col-md-2 {
        height: 250px;
    }
</style>
<body>
<!-- 巨幕 -->
<div class="jumbotron">
    <!-- 导航 -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    后台
                </a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            banner管理
                            <b class="caret">
                            </b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo U('home/admin/banner_view');?>">
                                    banner查看
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/banner_upload');?>">
                                    banner上传
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/banner_choose');?>">
                                    banner选择
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            推文管理
                            <b class="caret">
                            </b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo U('home/admin/article_view');?>">
                                    推文查看
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo U('home/admin/article_choose');?>">
                                    推文选择
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            其他
                            <b class="caret">
                            </b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    jmeter
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    EJB
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Jasper Report
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">
                                    分离的链接
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="www.baidu.com">
                                    另一个分离的链接
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="pull-right" id="wel">
                        <span class="text-muted">
                            欢迎你，<?php echo (session('name')); ?>
                            <a class="btn btn-info btn-xs active" href="<?php echo U('home/login/checkout');?>" role="button">
                                退出
                            </a>
                        </span>
            </div>
        </div>
    </nav>
    <h2 class="text-center text-muted">
        后台管理
    </h2>
</div>
<!-- 面包屑导航 -->
<ol class="breadcrumb">
    <li>
        <a href="#">
            推文管理
        </a>
    </li>
    <li>
        <a href="#">
            推文查看
        </a>
    </li>
</ol>
<!-- 主区域 -->
<div class="container" align="center">
    <div class="progress" style="width: 40%">
        <p class="bg-info">正在加载,请稍等......如果页面不停的闪请自己按F5进行刷新</p>
    </div>
    <div class="progress" style="width: 40%">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0"
             aria-valuemax="100" style="width: 100%">
            <span class="sr-only">45% Complete</span>
        </div>
    </div>

    <!-- 栅格化 -->
</div>
</body>
<script type="text/javascript">
    console.log("<?php echo ($articles_title[0]); ?>");
    var page = (<?php echo ($page); ?> - 1) * 13;
    $(document).ready(function () {
            getActicle(page, 12);
    });
    //排版
    function edit(data) {
        var html = '';
        var container = $('.container');
        container.append('<div class="row"><div class="col-md-12 text-center"><h2>查看推文</h2></div></div>');
        for (var i = 1; i <= Object.keys(data).length; i++) {
            if (data[i]['author'] == '') {
                data[i]['author'] = "暂无作者";
            }
            //为已选择的6篇文章加上判断
            if ("<?php echo ($articles_title[0]); ?>" == data[i]['title'] || "<?php echo ($articles_title[1]); ?>" == data[i]['title'] || "<?php echo ($articles_title[2]); ?>" == data[i]['title'] || "<?php echo ($articles_title[3]); ?>" == data[i]['title'] || "<?php echo ($articles_title[4]); ?>" == data[i]['title'] || "<?php echo ($articles_title[5]); ?>" == data[i]['title']) {
                container.append("<div class='col-md-2 text-center well'><a href='" + data[i]['url'] + "'><img src=http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=" + data[i]['thumb_url'] + "><h4 class='text-muted text-danger text-center'>" + data[i]['title'] + "(已选择)</h4><h6>" + data[i]['author'] + "</h6><h6>" + getLocalTime(data[i]['update_time']) + "</h6></a></div>");
            } else {
                container.append("<div class='col-md-2 text-center well'><a href='" + data[i]['url'] + "'><img src=http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl=" + data[i]['thumb_url'] + "><h5 class='text-muted text-primary text-center'>" + data[i]['title'] + "</h5><h6>" + data[i]['author'] + "</h6><h6>" + getLocalTime(data[i]['update_time']) + "</h6></a></div>");
            }

            if (i == 6) {
                container.append('</div><div class="row">');
            }
        }
        container.append('</div><div class="row"><div class="col-md-12 text-center"><nav><ul class="pager"><li><a href="<?php echo U("home/admin/article_view");?>?page=' + (<?php echo ($page); ?> - 1) + '">上一页</a></li><li><a href="<?php echo U("home/admin/article_view");?>?page=' + (<?php echo ($page); ?> + 1) + '">下一页</a></li></ul></nav></div></div>');
    }
    //时间戳转换Y-M-D
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
    }
    function getActicle(offest, count) {
        $.ajax({
            url: 'http://125.216.144.55/weixin/index.php/home/index/getNews', // 跳转到 action    
            type: 'get',
            timeout: 1000, //超时时间设置，单位毫秒
            data: {
                'offset': offest,//偏移量
                'count': count  //数量
            },
            crossDomain: true,
            dataType: 'jsonp',
            jsonpCallback: "jsonpHandler",//为jsonp请求指定一个回调函数名。这个值将用来取代jQuery自动生成的随机函数名。这主要用来让jQuery生成度独特的函数名，这样管理请求更容易，也能方便地提供回调函数和错误处理。你也可以在想让浏览器缓存GET请求的时候，指定这个回调函数名。
            success: function (data) {
                console.log(data);
                $(".progress").css('display','none');
                edit(data);
            },
            error: function () {
                console.log("失败了");
             location.reload();   
            }
        });
    }
</script>