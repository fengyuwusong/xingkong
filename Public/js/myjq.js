$(document).ready(function(){
	//先获取可点击年份里的a标签
	var years = $('#years a');
	//年份右箭头
	var goRight = $('.next');
	//年份左箭头
	var goLeft = $('.prev');
	//定义需要显示的内容数组
	var text=new Array();
	text[0]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：许宏斌</p><p>COO：詹景文</p><p>技术总顾问：何伟章</p><p>CEO顾问：罗华思</p><p>常务助理：林丽丽</p></div><div id='d-admin'><div class='photo-title'><p>行政服务中心</p></div><div class='name-content'><p>蒋国威</p></div></div></div></div><div id='d-product'><div class='photo-title'><p>信息管理中心</p></div><div class='name-content'><p>张仁龙</p><p>蔡晓菲(助理)</p></div></div><div id='d-design2015'><div class='photo-title'><p>信息管理中心资讯主任</p></div><div class='name-content'><p>岑文宇</p><p>邹雪银</p></div></div><div id='d-organize2015'><div class='photo-title'><p>市场拓展中心</p></div><div class='name-content'><p>徐宫彬</p><p>刘燕姗(助理)</p><p>邓国柱</p></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>张 涛</p><p>张伟庭</p><p>麦健祺</p><p>陈梓健</p></div></div><div class='empty'></div>";
	text[1]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：张涛</p><p>COO：徐宫彬</p></div><div id='d-admin'><div class='photo-title'><p>行政服务中心</p></div><div class='name-content'><p>曾 敏</p><p>黎燕姗</p><p>李晓明</p></div></div></div><div id='d-organize2015'><div class='photo-title'><p>市场拓展中心</p></div><div class='name-content'><p>詹游越</p><p>刘燕姗</p><p>林丽丽</p></div></div><div id='d-product'><div class='photo-title'><p>信息管理中心</p></div><div class='name-content'><p>张仁龙</p><p>黄 彪</p><p>刘 伟</p></div></div><div id='d-tech2015'><div class='photo-title'><p>设计研发中心</p></div><div class='name-content'><p>陈梓健</p><p>麦健祺</p></div></div><div class='empty'></div>";
	text[2]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：陈梓健</p><p>COO：刘燕姗</p></div><div id='d-admin'><div class='photo-title'><p>行政服务中心</p></div><div class='name-content'><p>张素雯</p><p>李永强</p></div></div></div><div id='d-organize2015'><div class='photo-title'><p>市场拓展中心</p></div><div class='name-content'><p>吴 泛</p><p>吕宇骏</p><p>陈蕊甜</p></div></div><div id='d-product'><div class='photo-title'><p>资讯运营中心</p></div><div class='name-content'><p>刘伟振</p><p>何永兴</p><p>吴振峰</p></div></div><div id='d-tech2015'><div class='photo-title'><p>设计研发中心</p></div><div class='name-content'><p>文梓锋</p><p>蔡 舜</p><p>罗永杰</p></div></div><div class='empty'></div>";
	text[3]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>主任：蔡舜</p><p>副主任：陈陆凡</p><p>副主任：罗永杰</p></div><div id='d-admin'><div class='photo-title'><p>行政服务中心</p></div><div class='name-content'><p>陈炜锋</p><p>李伟乐</p><p>范少满</p></div></div></div><div id='d-organize2015'><div class='photo-title'><p>市场拓展中心</p></div><div class='name-content'><p>马 炜</p><p>廖海龙</p><p>徐展宏</p></div></div><div id='d-product'><div class='photo-title'><p>资讯运营中心</p></div><div class='name-content'><p>吴振峰</p><p>陈振宇</p><p>苏豪博</p></div></div><div id='d-design2015'><div class='photo-title'><p>创意设计中心</p></div><div class='name-content'><p>梁伯豪</p><p>陈宁斌</p></div></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>梁贤超</p><p>郑宏远</p></div></div><div class='empty'></div>";
	text[4]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：郑宏远</p><p>COO：马炜</p><p>CMO：姚志明</p><p>CBO：黄朝阳</p><p>常务助理：张舒媛</p></div><div id='d-admin'><div class='photo-title'><p>行政服务中心</p></div><div class='name-content'><p>周维甜</p><p>伍博文</p><p>余 浪</p></div></div></div><div id='d-organize2015'><div class='photo-title'><p>市场拓展中心</p></div><div class='name-content'><p>陈泽楠</p><p>李嘉雯</p><p>蓝壮坤</p></div></div><div id='d-product'><div class='photo-title'><p>产品运营中心</p></div><div class='name-content'><p>陈梓涛</p><p>李智立</p><p>刘凤珊</p></div></div><div id='d-design2015'><div class='photo-title'><p>文化传媒中心</p></div><div class='name-content'><p>黄紫欣</p><p>唐 羚</p><p>纪殷煜</p><p>邓春香</p></div></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>陈楷辉</p><p>陈 轩</p></div></div><div class='empty'></div>";
	text[5]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：陈楷辉</p><p>CIO：吴雨蓓</p><p>COO：张舒媛</p><p>CDO：纪殷煜</p><p>CTO：陈 轩</p></div></div><div id='d-organize2015'><div class='photo-title'><p>组织策划中心</p></div><div class='name-content'><p>梁文雅</p><p>李旨晴</p></div></div><div id='d-product'><div class='photo-title'><p>产品运营中心</p></div><div class='name-content'><p>欧阳志明</p><p>汤 婕</p><p>余泽珊</p></div></div><div id='d-design2015'><div class='photo-title'><p>文化传媒中心</p></div><div class='name-content'><p>黄晓铿</p><p>廖天娇</p><p>许立樾</p><p>庄智财</p><p>何晶晶</p></div></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>明永华</p><p>杨文威</p></div></div><div class='empty'></div>";
	text[6]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：邹启峰</p><p>CIO：张小凤</p><p>COO：袁心宇</p><p>CDO：庄智财</p><p>CTO：杨文威</p></div></div><div id='d-organize2015'><div class='photo-title'><p>组织策划中心</p></div><div class='name-content'><p>傅桂贤</p><p>高嘉浩</p></div></div><div id='d-product'><div class='photo-title'><p>产品运营中心</p></div><div class='name-content'><p>黄丽媛</p><p>杨舒婷</p><p>杨子帆</p></div></div><div id='d-design2015'><div class='photo-title'><p>文化传媒中心</p></div><div class='name-content'><p>李树佳</p><p>赖庆炫</p><p>谭思韵</p><p>陈佳墁</p><p>何晶晶</p></div></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>李华浩</p><p>李振业</p><p>梁权伟</p></div></div><div class='empty'></div>";
	text[7]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='name-content'><p>CEO：赖庆炫</p><p>COO：肖泽望</p><p>CDO：何嘉葳</p><p>CTO：许晓特</p></div></div><div id='d-organize2015'><div class='photo-title'><p>运营策划中心</p></div><div class='name-content'><p>廖嘉贝</p><p>吴惠敏</p><p>郑宏迪</p><p>张燕帧</p></div></div><div id='d-design2015'><div class='photo-title'><p>文化传媒中心</p></div><div class='name-content'><p>汪雨晨</p><p>汪文文</p><p>郭晓文</p><p>曹婷君</p></div></div><div id='d-tech2015'><div class='photo-title'><p>技术研发中心</p></div><div class='name-content'><p>周竻盛</p><p>黄堃棠</p><p>方银城</p><p>黄韬</p></div></div><div class='empty'></div>";
	text[8]="<div id='d-bigboss'><div class='photo-title'><p>常委</p></div><div class='photo-content'><div class='photo-1 photoMessage'></div><div class='photo-2 photoMessage'></div><div class='photo-3 photoMessage'></div><div class='photo-4 photoMessage'></div></div></div><div id='d-organize'><div class='photo-title'><p>运营策划中心</p></div><div class='photo-content'><div class='photo-1 photoMessage'></div><div class='photo-2 photoMessage'></div><div class='photo-3 photoMessage'></div><div class='photo-4 photoMessage'></div><div class='photo-5 photoMessage'></div><div class='photo-6 photoMessage'></div></div></div><div id='d-design'><div class='photo-title'><p>文化传媒中心</p></div><div class='photo-content'><div class='photo-1 photoMessage'></div><div class='photo-2 photoMessage'></div><div class='photo-3 photoMessage'></div><div class='photo-4 photoMessage'></div><div class='photo-5 photoMessage'></div><div class='photo-6 photoMessage'></div><div class='photo-7 photoMessage'></div><div class='photo-8 photoMessage'></div></div></div><div id='d-tech'><div class='photo-title'><p>技术研发中心</p></div><div class='photo-content'><div class='photo-1 photoMessage'></div><div class='photo-2 photoMessage'></div><div class='photo-3 photoMessage'></div><div class='photo-4 photoMessage'></div><div class='photo-5 photoMessage'></div></div></div><div id='newBlood'><img src='http://www.xingkong.us/home/public/image/go.png'><a href='http://www.xingkong.us/show'>五届一任新员工名单</a></div>"
	//数组长度
	var leng = text.length;
	//index是年份移动标记
	var index = leng-1;
	//展示管理层内容面板函数
	function showContent(idx){
		$('#d-photo').html(text[idx]);
	}
	//默认展示最后一年
	showContent(leng-1);
	//定义第二个数组
	//2016年
	//名字数组
	var nameMessage = new Array("许晓特","吴惠敏","何嘉葳","周竻盛","丁银瑶","陈乐诗","黄丽纯","林宇婷","李彤舒","邵泳珊","黄韬","曾攸攸","董懿萱","吴栢宇","巫欣","梁忠智","麦耀生","梁名捷","吴永达","林睿","黄培","张富远","倪日强");
	//职位数组
	var positionMessage = new Array("CEO","COO","CDO","CTO","总监","副总监","副总监","副总监","副总监","副总监","总监","副总监","副总监","副总监","副总监","副总监","副总监","副总监","总监","副总监","副总监","副总监","副总监");
	//动态设置顶部背景图片的高度
	function showTopbg(){
		//获取背景图片高-60得出margin-top的高度
		var topbgHeight = (-(document.getElementById('header-bg').offsetHeight-60)) + 'px';
		$('.J_container').css('margin-top',topbgHeight);
	}
	showTopbg();
	//设置底部背景图片的位置
	//先获取的高度
	function showBg(){
		$('#footer-bg').css('margin-top','-465px');
	}
	showBg();
	//2016加载图片函数
	function showPhoto(){
		//2015年及以前不执行此方法
		if(index < 8){
			return;
		}
		var photoArr = document.getElementsByClassName('photoMessage');
		for (var i = 0; i < photoArr.length; i++) {
			photoArr[i].style.background = 'url("http://www.xingkong.us/home/public/image/person/photo-'+ i +'.png")';
			$(photoArr[i]).append("<div class='text'><p>" +nameMessage[i] +  "</p><p> " + positionMessage[i] + "</p></div>");
			$(photoArr[i]).hover(function(){
				$('.text',this).stop().animate({
					height:'170px'
				},200);
				$('.text',this).children('p').css('display','block');
			},function(){
				$('.text',this).stop().animate({
					height:'0'
				});
				$('.text',this).children('p').css('display','none');
			});
		}
	}
	showPhoto();
	//各个年份点击事件
	for(var i = 0;i<years.length;i++){
		years[i].onclick = function(){
			if(this.className == 'year-on'){
				return;
			}
			//自定义的定量要通过getAttribute来获取。
			var myIndex = parseInt(this.getAttribute('index'));
			//计算被点击的圆点与当前圆点的偏移量。
			index = myIndex;
			//年份条移动
			moveYear();
			//高亮当前年份
			showYear();
			//展示2016照片
			showArrow(index);
			//先展示内容面板
			showContent(index);
			//再展示照片
			showPhoto();
			//重新加载底部背景图片的位置
			showBg();
		}
	}
	//年份左箭头点击事件
	goLeft.click(function(){
		if (index == 0) {
			return;
		}
		index--;
		//展示内容面板
		showContent(index);
		//显示年份
		showYear();
		//显示箭头
		showArrow(index);
		//年份层移动
		moveYear();
		//重新加载底部背景图片的位置
		showBg();
	});
	//年份右箭头点击事件
	goRight.click(function(){
		if (index == leng-1) {
			return;
		}
		index++;
		//展示内容面板
		showContent(index);
		//展示2016的照片
		showPhoto();
		//展示箭头
		showArrow(index);
		//显示年份
		showYear();
		//年份层移动
		moveYear();
		//重新加载底部背景图片的位置
		showBg();
	});
	// 写一个展示变大年份的函数
	function showYear(){
		for(var i = 0;i<years.length;i++){
			if(years[i].className == 'year-on'){
				years[i].className = '';
				break;
			}
		}
		years[index].className = 'year-on';
	}
	//写一个年份移动函数
	function moveYear(){
		//年份个数大于4时进行移动
		if(leng>4){
			if(index<leng-2){
				// debugger;
				$('#yearsBag').stop().animate({

					"left":(-(114*(index-2<0?0:(index-2))))
				},1000);
			}else if(index>=leng-2){
				$('#yearsBag').stop().animate({
					"left":(-(114*(leng-4)))
				},1000);
			}
		}
	}
	//写一个展示箭头的函数
	function showArrow(arrowIndex){
		if(arrowIndex == 0){
			goLeft.css('background','url(../image/left-after.png)');
		}else{
			goLeft.css('background','url(../image/left.png)');
		}
		if(arrowIndex!=8){
			goRight.css('background','url(../image/right.png)');
		}
		else{
			goRight.css('background','url(../image/right-after.png)');
		}
	}
	//实现下拉footer事件
	//获取下拉箭头图标
	$('#d-footdown').click(function(){
		// 内容面板下拉290px
		footerMe('285px','0');
	});
	$('#downLoad').click(function(){
		footerMe('0','1');
	});
	//封装信息条下拉和上升函数
	function footerMe(range,state){
		$('#footer-content').css('top',range);
		$('#footer-down').css('opacity',state);
	}
});