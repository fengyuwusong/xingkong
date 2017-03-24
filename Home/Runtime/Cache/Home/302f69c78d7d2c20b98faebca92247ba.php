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
    .form-control{
        margin-bottom: 13px;
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
                banner管理
            </a>
        </li>
        <li>
            <a href="#">
                选择banner
            </a>
        </li>
    </ol>
    <!-- 主区域 -->
    <div class="container">
        <!-- 栅格化 -->
        <div class="row">
            <div class="col-md-11 text-center">
                <h2>
                    选择banner
                </h2>
            </div>
        </div>
        <form action="<?php echo U('home/admin/banner_change');?>" method="post">
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                    <h4>请选择banner1的图片名字：</h4>
                </p>
            </div>
            <div class="col-md-8">
                    <select class="form-control" name="banner1">
                    <?php $__FOR_START_7446__=0;$__FOR_END_7446__=count($banners);for($i=$__FOR_START_7446__;$i < $__FOR_END_7446__;$i+=1){ if($banner1 == $banners[$i]): ?><option selected="selected"><?php echo ($banner1); ?></option>
                        <?php else: ?>
                        <option><?php echo ($banners[$i]); ?></option><?php endif; } ?>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                    <h4>请选择banner2的图片名字：</h4>
                </p>
            </div>
            <div class="col-md-8">
                    <select class="form-control" name="banner2">
                    <?php $__FOR_START_27993__=0;$__FOR_END_27993__=count($banners);for($i=$__FOR_START_27993__;$i < $__FOR_END_27993__;$i+=1){ if($banner2 == $banners[$i]): ?><option selected="selected"><?php echo ($banner2); ?></option>
                        <?php else: ?>
                        <option><?php echo ($banners[$i]); ?></option><?php endif; } ?>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                    <h4>请选择banner3的图片名字：</h4>
                </p>
            </div>
            <div class="col-md-8">
                    <select class="form-control" name="banner3">
                    <?php $__FOR_START_28892__=0;$__FOR_END_28892__=count($banners);for($i=$__FOR_START_28892__;$i < $__FOR_END_28892__;$i+=1){ if($banner3 == $banners[$i]): ?><option selected="selected"><?php echo ($banner3); ?></option>
                        <?php else: ?>
                        <option><?php echo ($banners[$i]); ?></option><?php endif; } ?>
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <p>
                    <h4>请选择banner4的图片名字：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                    <select class="form-control" name="banner4">
                    <?php $__FOR_START_5343__=0;$__FOR_END_5343__=count($banners);for($i=$__FOR_START_5343__;$i < $__FOR_END_5343__;$i+=1){ if($banner4 == $banners[$i]): ?><option selected="selected"><?php echo ($banner4); ?></option>
                        <?php else: ?>
                        <option><?php echo ($banners[$i]); ?></option><?php endif; } ?>
                    </select>
                    <input class="btn btn-success" type="submit" value="提交">
            </div>
        </div>
        </form>
    </div>
</body>