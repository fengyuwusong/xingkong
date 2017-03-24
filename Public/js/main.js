$(document).ready(function() {
    //三个小圆图标函数
    icon();
    //获取并排版推文
    var data=getActicle();
    //推文相关jq
    // weixinus(data);
    //回到顶部函数
    backTop();
});

function icon() {
    // 技术图标
    $('#allcontent .tecimg').hover(function() {
        $(this).children('.full').css('backgroundColor', '#02afe8');
        // console.log($(this));
        // $(this).css('backgroundImage',' ');
        $(this).children('.tecicon').animate({
            top: '0px',
            opacity: 1,
        }, 400);
    }, function() {
        $(this).children('.full').css('backgroundColor', '');
        $(this).children('.tecicon').animate({
            top: '-130px',
            opacity: 0,
        }, 400);
    });
    //传媒图标
    $('#allcontent .desimg').hover(function() {
        $(this).children('.full').css('backgroundColor', '#02afe8');
        // console.log($(this));
        // $(this).css('backgroundImage',' ');
        $(this).children('.desicon').animate({
            top: '0px',
            opacity: 1,
        }, 400);
    }, function() {
        $(this).children('.full').css('backgroundColor', '');
        $(this).children('.desicon').animate({
            top: '-130px',
            opacity: 0,
        }, 400);
    });
    // 运营策划图标
    $('#allcontent .videoimg').hover(function() {
        $(this).children('.full').css('backgroundColor', '#02afe8');
        // console.log($(this));
        // $(this).css('backgroundImage',' ');
        $(this).children('.videoicon').animate({
            top: '0px',
            opacity: 1,
        }, 400);
    }, function() {
        $(this).children('.full').css('backgroundColor', '');
        $(this).children('.videoicon').animate({
            top: '-130px',
            opacity: 0,
        }, 400);
    });
}
function getActicle(){
	    $.ajax({
        url: article_url, // 跳转到 action    
        data: {},
        type: 'get',
        cache: false,
        dataType: 'json',
        success: function(data) {
            console.log(data);
            weixinus(data);
        },
        error: function() {
        }
    });
}

function weixinus(data) {
	// console.log(eval(data));
	//定义数组存放推文链接
	var arcLink=eval(data['article_url']);
	//定义数组存放推文标题
	var arcTitle=eval(data['article_title']);
	 //定义数组存放日期和作者
	var dateAndaut=eval(data['article_author']);
	var arcImg=eval(data['article_img']);
    //定义推文的数量
    var arcNum = 6;
    // 动态加载推文的内容
    //定义一个定时器
    var weiTimer = null;
    for (var i = 0; i < arcNum; i++) {
        $('#usword-content').append('<a><div class="arctical"></div></a>');
        $('#usword-content a').eq(i).attr('href', arcLink[i]);
        $('.arctical').eq(i).append('<div class="arcpic"></div><div class="arctitle"><h4></h4></div><div class="date"><p></p></div>');
        //设置图片背景
        $('.arcpic').eq(i).css('background', 'url('+arcImg[i]+') no-repeat ');
        $('.arcpic').eq(i).css('background-size', '100% 100%');
        //设置标题
        $('.arctitle h4').eq(i).text(arcTitle[i]);
        //设置日期和作者
        $('.date p').eq(i).text(dateAndaut[i]);
    }
    $('#down').toggle(function() {
        $('#usword').slideUp(1000);
        $('#down').removeClass('romate');
    }, function() {
        $('#usword').slideDown();
        $('#down').addClass('romate');
        $(document).scrollTop($('#usword').offset().top);
        //进来前获取一次高度
        var beginTop = document.documentElement.scrollTop || document.body.scrollTop;
        var weiTimer = setInterval(function() {
            var bodyTop = document.documentElement.scrollTop || document.body.scrollTop;
            var weiSpeed = Math.ceil(bodyTop / 300);
            // $(document).scrollTop(bodyTop + weiSpeed);
            document.documentElement.scrollTop = document.body.scrollTop = bodyTop + weiSpeed;
            if (bodyTop - beginTop >= 300) {
                clearInterval(weiTimer);
            }
            // console.log($('#usword').offset().top);
        }, 35)
    });
}
// 侧边栏部件
function backTop() {
    var obtn = document.getElementById('btn');
    var tool = document.getElementById('tool');
    var clientHeight = document.documentElement.clientHeight;
    var nav_ifo = document.getElementById('nav_ifo');
    var sch_nav = document.getElementById('sch_nav');
    var timer = null;
    var isTop = true;
    window.onscroll = function() {
        var osTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (!isTop) {
            clearInterval(timer);
        }
        isTop = false;
        if (osTop > 0.2 * clientHeight) {
            tool.style.display = "block";
        } else {
            tool.style.display = "none";
        }
    }
    obtn.onclick = function() {
        var timer = setInterval(function() {
            var osTop = document.documentElement.scrollTop || document.body.scrollTop;
            var scrollSpeed = Math.ceil(osTop / 4);
            isTop = true;
            document.documentElement.scrollTop = document.body.scrollTop = osTop - scrollSpeed;
            if (osTop == 0) {
                clearInterval(timer);
            }
        }, 35);
    };
    sch_nav.onmousemove = function() {
        nav_ifo.style.display = "block";
    };
    nav_ifo.onmousemove = function() {
        this.style.display = "block";
    }
    nav_ifo.onmouseout = function() {
        this.style.display = "none";
    }
}