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
<link href="/xingkong/Public/css/bootstrap/3.3.6/bootstrap.css" rel="stylesheet" type="text/css"/>
<script src="/xingkong/Public/js/bootstrap/3.3.6/bootstrap.js" type="text/javascript">
</script>
<style type="text/css">
    .jumbotron{
        height: 200px;
        margin: 0;
        padding: 0;
	}
		#wel{
		margin-top: 15px;
		padding-right: 50px;
	}
	.breadcrumb{
		padding-left: 70px;
	}
	img{
		width: 100%;
	}
    .dropdown-menu li{
        padding-right: -50px;
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
            <a href="<?php echo U('home/admin/banner_view');?>">
                banner
            </a>
        </li>
        <li>
            <a href="<?php echo U('home/admin/banner_view');?>">
                查看banner
            </a>
        </li>
    </ol>
    <!-- 主区域 -->
    <div class="container">
        <!-- 栅格化 -->
        <div class="row">
            <div class="col-md-12 text-center"><h2>查看banner</h2></div>
        </div>
 <?php $__FOR_START_32765__=0;$__FOR_END_32765__=count($banners);for($i=$__FOR_START_32765__;$i < $__FOR_END_32765__;$i+=1){ if((($i)%3 == 0) AND ($i == 0) ): ?><div class="row">
<?php if(($banners[$i] == $banner1) or ($banners[$i] == $banner2) or ($banners[$i] == $banner3) or($banners[$i] == $banner4)): ?><div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?>(已选)</h4>
                    </div>
<?php else: ?>
<div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?></h4>
                    </div><?php endif; ?>
<?php elseif((($i)%3 == 0) AND ($i != 0) ): ?>
</div>
<div class="row">
                    <?php if(($banners[$i] == $banner1) or ($banners[$i] == $banner2) or ($banners[$i] == $banner3) or($banners[$i] == $banner4)): ?><div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?>(已选)</h4>
                    </div>
<?php else: ?>
<div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?></h4>
                    </div><?php endif; ?>
<?php else: ?>
<?php if(($banners[$i] == $banner1) or ($banners[$i] == $banner2) or ($banners[$i] == $banner3) or($banners[$i] == $banner4)): ?><div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?>(已选)</h4>
                    </div>
<?php else: ?>
<div class="col-md-4">
                        <img src="http://www.xingkong.us/home/Public/image/banner/<?php echo ($banners[$i]); ?>">
                        <h4 class="text-muted text-primary text-center"><?php echo ($banners[$i]); ?></h4>
                    </div><?php endif; endif; } ?>

    </div>
</body>