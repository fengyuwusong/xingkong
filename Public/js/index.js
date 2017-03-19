$(document).ready(function(){
	var flag =true;
	var img2value = true;
	var img1value = true;
	var img3value = true;
	var t = $(window).scrollTop();
	// 点击展开收缩
	$("#img1").click(function(){ 
		if(img1value ==true ){
			if (flag ==true) {
				$("#action").slideDown("slow"); 
				$("#img1").removeClass("J_first_active1");
				$("#img1").addClass("J_first_active");
				$(".J_second").css("opacity","0.3");
				$(".J_third").css("opacity","0.3");
				// $("body").animate({"padding-top":"200px"},200)
				// $(".J_center_two").css("display","block");
				$("body").scrollTop(1600);
				flag = false;
				img2value = false;
				img3value  = false;
			}
			else if(flag==false){
				$("#action").slideUp("slow");
				$("#img1").removeClass("J_first_active");
				$("#img1").addClass("J_first_active1");
				$(".J_second").css("opacity","1");
				$(".J_third").css("opacity","1");
				flag=true;
				img2value = true;
				img3value  = true;
			}
			//修正背景图片位置
			showBg();
			//修正eachBoss的padding值
			showPadding();
		}
	}); 
	$("#img2").click(function(){ 
		if (img2value == true) {
			if (flag ==true) {
				$("#action1").slideDown("slow"); 
				$("#img2").removeClass("J_first_active1");
				$("#img2").addClass("J_first_active");
				$(".J_first").css("opacity","0.3");
				$(".J_third").css("opacity","0.3");
				$("body").scrollTop(1600);
				// $(".J_center_two").css("display","block");
				flag = false;
				img1value  = false;
				img3value  = false;
			}
			else if(flag==false){
				$("#action1").slideUp("slow");
				$("#img2").removeClass("J_first_active");
				$("#img2").addClass("J_first_active1");
				$(".J_third").css("opacity","1");
				$(".J_first").css("opacity","1");
				flag=true;
				img1value  = true;
				img3value  = true;
			}
			//修正背景图片位置
			showBg();
			//修正eachBoss的padding值
			showPadding();
		}
	});
	$("#img3").click(function(){ 
		if (img3value ==true) {
			if (flag ==true) {
				$("#action2").slideDown("slow"); 
				$("#img3").removeClass("J_first_active1");
				$("#img3").addClass("J_first_active");
				$(".J_first").css("opacity","0.3");
				$(".J_second").css("opacity","0.3");
				$("body").scrollTop(1600);
				// $(".J_center_two").css("display","block");
				flag = false;
				img1value  = false;
				img2value  = false;
			}
			else if(flag==false){
				$("#action2").slideUp("slow");
				$("#img3").removeClass("J_first_active");
				$("#img3").addClass("J_first_active1");
				$(".J_first").css("opacity","1");
				$(".J_second").css("opacity","1");
				flag=true;
				img1value  = true;
				img2value  = true;
			}
			//修正背景图片位置
			showBg();
			//修正eachBoss的padding值
			showPadding();
		}
	});
	//动态展示背景图片的方法，迁自myjq.js
	function showBg(){
		function showBg(){
			$('#footer-bg').css('margin-top','-465px');
		}
	}

	function showPadding(){
		if(!flag){
			$('#eachBoss').css('padding-top','120px');
		}
		else{
			$('#eachBoss').css('padding-top','220px');
		}
	}
});