

var num1;
function time()
{
	
	var num = Math.floor(Math.random()*6);


	if(num == num1 && num != 5){
		num = num + 1
	}else if(num == num1 && num != 0){
		num = num - 1
	}

	num1 = num


	$(".hero-image")
	.eq(num).removeClass("active")
	.siblings(num).addClass("active")

	t=setTimeout("time()",5000)

}

$(function(){

	$("body").each(function(){
		new time(this);
		});

});





