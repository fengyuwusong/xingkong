// 下拉二级菜单jq
$(document).ready(function(){
	$('#nav-pro').hover(function(){
		animated(this,"70px",1);
	},function(){
		animated(this,"10px",0);
	});
	$('#nav-app').hover(function(){
		animated(this,"70px",1);

	},function(){
		animated(this,"10px",0);
	});
});

function animated(who,topValue,opa){
	$(who).children('.sec-nav').animate({
			top:topValue,
			opacity:opa,
		},200,"linear");
}