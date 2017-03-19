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
    .jumbotron{
        height: 200px;
        margin: 0;
        padding: 0;
    }
    .nav .dropdown{
        margin-left: 50px;
    }
        #wel{
        margin-top: 10px;
        padding-right: 50px;
    }
    .breadcrumb{
        padding-left: 70px;
    }
    .name{
        margin: 10px;
    }
    button{
        margin-top: 20px;
    }
        .navbar{
        margin-bottom: 0px;
    }
    h2{
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
            <li>
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
            <li class="active">
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
                推文查看
            </a>
        </li>
    </ol>
    <!-- 主区域 -->
    <div class="container">
        <!-- 栅格化 -->
        <div class="row">
            <div class="col-md-12 text-center"><h2>查看推文</h2></div>
        </div>

    </div>
</body>