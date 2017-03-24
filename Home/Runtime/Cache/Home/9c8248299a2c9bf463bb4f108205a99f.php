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
<div class="container" align="center">

    <!-- 栅格化 -->
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>
                选择推文
            </h2>
        </div>
        <div class="progress" style="width: 40%">
            <p class="bg-info">正在加载,请稍等......如果页面不停的闪请自己按F5进行刷新</p>
        </div>
        <div class="progress" style="width: 40%">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45"
                 aria-valuemin="0"
                 aria-valuemax="100" style="width: 100%">
                <span class="sr-only">45% Complete</span>
            </div>
        </div>
    </div>
    <div class="row form-select" text-align="center">
        <div class="col-md-2" style="float: none;">
            <input type="number" id="now" class="form-control" min="1" placeholder="请选择文章所在页数">
        </div>
        <div class="col-md-2" style="float: none;">
            <button type="button" id="choose_page" class="btn btn-success">跳转</button>
        </div>
    </div>
    <form action="<?php echo U('home/admin/article_change');?>" method="post">
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文1：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article1" id="select1">
                </select>
                <input type="hidden" id="title1" name="title1" value="<?php echo ($titles[0]); ?>"/>
                <input type="hidden" id="url1" name="url1" value="<?php echo ($urls[0]); ?>"/>
                <input type="hidden" id="img1" name="img1" value="<?php echo ($imgs[0]); ?>"/>
                <input type="hidden" id="author1" name="author1" value="<?php echo ($authors[0]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文2：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article2" id="select2">
                </select>
                <input type="hidden" id="title2" name="title2" value="<?php echo ($titles[1]); ?>"/>
                <input type="hidden" id="url2" name="url2" value="<?php echo ($urls[1]); ?>"/>
                <input type="hidden" id="img2" name="img2" value="<?php echo ($imgs[1]); ?>"/>
                <input type="hidden" id="author2" name="author2" value="<?php echo ($authors[1]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文3：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article3" id="select3">
                </select>
                <input type="hidden" id="title3" name="title3" value="<?php echo ($titles[2]); ?>"/>
                <input type="hidden" id="url3" name="url3" value="<?php echo ($urls[2]); ?>"/>
                <input type="hidden" id="img3" name="img3" value="<?php echo ($imgs[2]); ?>"/>
                <input type="hidden" id="author3" name="author3" value="<?php echo ($authors[2]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文4：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                <select class="form-control" name="article4" id="select4">
                </select>
                <input type="hidden" id="title4" name="title4" value="<?php echo ($titles[3]); ?>"/>
                <input type="hidden" id="url4" name="url4" value="<?php echo ($urls[3]); ?>"/>
                <input type="hidden" id="img4" name="img4" value="<?php echo ($imgs[3]); ?>"/>
                <input type="hidden" id="author4" name="author4" value="<?php echo ($authors[3]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文5：</h4>
                </p>
            </div>
            <div class="col-md-8" align="center">
                <select class="form-control" name="article5" id="select5">
                </select>
                <input type="hidden" id="title5" name="title5" value="<?php echo ($titles[4]); ?>"/>
                <input type="hidden" id="url5" name="url5" value="<?php echo ($urls[4]); ?>"/>
                <input type="hidden" id="img5" name="img5" value="<?php echo ($imgs[4]); ?>"/>
                <input type="hidden" id="author5" name="author5" value="<?php echo ($authors[4]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-md-3 text-center">
                <p>
                <h4>请选择推文6：</h4>
                </p>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="article6" id="select6">
                </select>
                <input type="hidden" id="title6" name="title6" value="<?php echo ($titles[5]); ?>"/>
                <input type="hidden" id="url6" name="url6" value="<?php echo ($urls[5]); ?>"/>
                <input type="hidden" id="img6" name="img6" value="<?php echo ($imgs[5]); ?>"/>
                <input type="hidden" id="author6" name="author6" value="<?php echo ($authors[5]); ?>"/>
            </div>
        </div>
        <div class="row form-select">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                <input class="btn btn-success" type="submit" value="提交">
            </div>
        </div>
    </form>
</div>
</body>
<script>
    //获取6个标题
    var title = new Array("<?php echo ($titles[0]); ?>", "<?php echo ($titles[1]); ?>", "<?php echo ($titles[2]); ?>", "<?php echo ($titles[3]); ?>", "<?php echo ($titles[4]); ?>", "<?php echo ($titles[5]); ?>");
    var page = (<?php echo ($page); ?> - 1) * 13;
    var now = -1;
    var article;
    var p=-1;
    $(document).ready(function () {
        $(".form-select").css('display', 'none');
        if (page != 0) {
            getActicle(page, 12);
        } else
            getActicle(page, 11);
        //监听更换页码
        $("#choose_page").on("click", function (e) {
            if ($("#now").val()&&$("#now").val()!=p) {
                $(".progress").css('display', 'block');
                $(".form-select").css('display', 'none');
                now=$("#now").val() * 13;
                p=$("#now").val();
                for (var i = 1; i <= 6; i++) {
                    $('#select' + i).html("");
                }
                getActicle(now, 12);
            }
            if(!$("#now").val()){
                alert("页码不能为空");
            }
        });

        //监听更换文章 保存hidden值
        var title;
        for (var i = 1; i <= 6; i++) {
            saveChange(i);
        }

    });
    //给hidden的input赋值
    function saveChange(i) {
        $('#select' + i).on("change", function (e) {
            for (var j = 1; j <= Object.keys(article).length; j++) {
                if ((article[j]['title']) == e.target.value) {
                    if(article[j]['author']==""||article[j]['author']==" "){
                        article[j]['author']="暂无作者";
                    }
                    $("#title" + i).val(article[j]['title']);
                    $("#author" + i).val(userDate(article[j]['update_time'])+"  "+article[j]['author']);
                    $("#url" + i).val(article[j]['url']);
                    $("#img" + i).val("http://read.html5.qq.com/image?src=forum&q=5&r=0&imgflag=7&imageUrl="+article[j]['thumb_url']);
                    break;
                }
            }
        })
    }
    //    排版
    function edit(data) {
        var html = "";
        for (var i = 1; i <= 6; i++) {
            $('#select' + i).append("<option selected='selected'>" + title[i - 1] + "</option>");
            for (var j = 1; j <= Object.keys(data).length; j++) {
                if (title[i - 1] != data[j]['title']) {
                    $('#select' + i).append("<option>" + data[j]['title'] + "</option>");
                }
            }
        }
    }
    //时间戳转换Y-M-D
    function getLocalTime(nS) {
        return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
    }
    //时间戳转换成八位日期2014-5-5
    function userDate(uData){
        var myDate = new Date(uData*1000);
        var year = myDate.getFullYear();
        var month = myDate.getMonth() + 1;
        var day = myDate.getDate();
        return month + '-' + day + '-' + year;
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
                article = data;
                $(".form-select").css('display', 'block');
                $(".progress").css('display', 'none');
            },
            error: function () {
                console.log("失败了");
                var container = $('.container');
                container.append('<p class="bg-info">正在加载,请稍等......</p>');
                location.reload();
            }
        });
    }
</script>
</html>