$(document).ready(function(){
	//定义一个数组用于存放culture中图片的网址
	var culAddress = new Array("http://www.xingkong.us/home/index.php/Home/index/about.html","http://www.xingkong.us/show","http://gf.xingkong.us/")
	// 先定义组织文化中图片的张数
	//先默认3张
	var culturePic = 3;
	//定义存放文字的数组
	var culWord = new Array("组织介绍","员工介绍","作品后工坊");
	//定义小圆点的个数
	//暂时不用 先注释掉
	// var culsmaBut = Math.ceil(culturePic/3);
	//获取小圆点容器
	var culButton = $('#culbutton');
	//获取图片内容面板容器
	var culContent = $('#culture-content');
	//定义当前小圆点
	var culindex = 0;
	culContent.css('width',culturePic*300+'px');
	// 加载组织文化的图片
	for(var i = 0;i<culturePic;i++){
		culContent.append('<a><div class="cultureImg"><div class="cultextup"><img src="./public/image/caselogo.png" /></div><div class="cultextdown"><p></p></div></div></a>');
		$('.cultureImg').each(function(i){
			$(this).css('background','url("public/image/culpic/cul-'+ (culturePic-i) +'.png")');
			//加载文字
			$('.cultextdown p').eq(i).text(culWord[i]);
			$(this).hover(function(){
				$(this).children('.cultextup').slideDown(200);
				$(this).children('.cultextdown').slideDown(200);
			},function(){
				$(this).children('.cultextup').slideUp(200);
				$(this).children('.cultextdown').slideUp(200);
			});

		});
	}


	//加载小圆点
	//暂时不需要
	// for(var m=0;m<culsmaBut;m++){
	// 	culButton.append('<span></span');
	// }

	var culSpan = $('#culbutton span');
	culSpan.eq(0).addClass('case-on');

	//小圆点点击事件
	// 暂时不需要，需要时吧注释去掉
	// culButton.on("click","span",function(){
	// 	//假如点击点为当前点，函数不执行。
	// 	if(culindex == $(this).index()){
	// 		return;
	// 	}
	// 	culindex = $(this).index();
	// 	$(this).addClass('case-on').siblings().removeClass('case-on');
	// 	culContent.animate({
	// 		left:-(culindex*900)+'px',
	// 	});
	// });

	//设置图片链接
	for(var n = 0;n<culAddress.length;n++){
		$("#culture-content a").eq(n).attr("href",culAddress[n]);
	}

});