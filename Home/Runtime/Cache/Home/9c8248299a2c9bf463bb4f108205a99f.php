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
<link rel="stylesheet" type="text/css" href="/xingkong/Public/css/bootstrap/3.3.6/bootstrap.css">
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

    .form-control {
        margin-bottom: 13px;
    }

    h2 {
        margin: 0;
        line-height: 100px;
    }
</style>
<body>
<!-- 巨幕 -->
<div class="jumbotron">
    <!-- 导航 -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">后台</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            banner管理
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo U('home/admin/banner_view');?>">banner查看</a></li>
                            <li><a href="<?php echo U('home/admin/banner_upload');?>">banner上传</a></li>
                            <li><a href="<?php echo U('home/admin/banner_choose');?>">banner选择</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            推文管理
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo U('home/admin/article_view');?>">推文查看</a></li>
                            <li><a href="<?php echo U('home/admin/article_choose');?>">推文选择</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            其他
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">jmeter</a></li>
                            <li><a href="#">EJB</a></li>
                            <li><a href="#">Jasper Report</a></li>
                            <li class="divider"></li>
                            <li><a href="#">分离的链接</a></li>
                            <li class="divider"></li>
                            <li><a href="www.baidu.com">另一个分离的链接</a></li>
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
            选择推文
        </a>
    </li>
</ol>
<!-- 主区域 -->
<div class="container">
    <!-- 栅格化 -->
    <div class="row">
        <div class="col-md-11 text-center">
            <h2>
                选择推文
            </h2>
        </div>
    </div>
    <form action="<?php echo U('home/admin/banner_change');?>" method="post">
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文1：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article1" id="select1">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文2：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article2" id="select2">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文3：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article3" id="select3">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文4：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                <select class="form-control" name="article4" id="select4">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文5：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                <select class="form-control" name="article5" id="select5">

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文6：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                <select class="form-control" name="article6" id="select6">

                <input class="btn btn-success" type="submit" value="提交">
            </div>
        </div>
    </form>
</div>
</body>
<script>
    //获取6个标题
    var title=new Array("<?php echo ($titles[0]); ?>","<?php echo ($titles[1]); ?>","<?php echo ($titles[2]); ?>","<?php echo ($titles[3]); ?>","<?php echo ($titles[4]); ?>","<?php echo ($titles[5]); ?>");
    var page = (<?php echo ($page); ?> - 1) * 13;
    $(document).ready(function () {
        if (page != 0) {
            getActicle(page, 12);
        } else
            getActicle(page, 11);
    });

//    排版
    function edit(data){
        var html="";
        for(var i=1;i<=6;i++){
            for(var j=1;j<=Object.keys(data).length;j++){
                if(title[i-1]==data[j]['title']){
                    $('#select'+i).append("<option selected='selected'>"+data[j]['title']+"</option>");

                }else{
                    $('#select'+i).append("<option>"+data[j]['title']+"</option>");
                }

            }
        }
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
                edit(data);
            },
            error: function () {

            }
        });
    }
</script>
</html>