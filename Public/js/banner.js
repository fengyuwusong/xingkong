$(document).ready(function(){
	var banner = $('#banner');
	//小圆点的容器
	var buttons = $('#buttons');
	//小圆点的个数
	var buttonsNum = 4;
	//获取图片
	var img = $('#picList .img');
	// 轮播速度
	var playtime = 3500;
	var index = 0;
	//加载小圆点
	for(var i = 0;i<buttonsNum;i++){
		buttons.append("<span></span>")
	}
	//获取小圆点
	var span = $("#buttons span");
	span.eq(0).addClass('span-on');
	img.eq(index).fadeIn().siblings().fadeOut();
	//小圆点点击事件,
	//on(event,childSelector,function)
	//childSelsct:添加到指定的子元素上
	buttons.on("click","span",function(){
		index = $(this).index();
		img.eq(index).fadeIn().siblings().fadeOut();
		$(this).addClass('span-on').siblings().removeClass('span-on');
	});
	// 自动播放函数
	play = function(){
		img.eq(index).fadeIn().siblings().fadeOut();
		span.eq(index).addClass('span-on').siblings().removeClass('span-on');
		index = (index + 1)%buttonsNum;
		mytime = setTimeout(play,playtime);
	}
	mytime = setTimeout(play,playtime);
	// 图片获得焦点暂停
	banner.hover(function(){
		clearTimeout(mytime);
	},function(){
		mytime = setTimeout(play,playtime);
	});
});