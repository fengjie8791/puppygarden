

var show_num = [-250,0,250,500,750,1000],
 	tt = 25,
	show_timer;


function show(){
	// console.log(show_num)

	// num1++;
	// num2++;
	// num3++;
	// num4++;
	// num5++;
	// num6++;
	// if (num1 == 1250){
	// 	num1 = -250;
	// };
	// if (num2 == 1250){
	// 	num2 = -250;
	// }
	// if (num3 == 1250){
	// 	num3 = -250;
	// }
	// if (num4 == 1250){
	// 	num4 = -250;
	// }
	// if (num5 == 1250){
	// 	num5 = -250;
	// }
	// if (num6 == 1250){
	// 	num6 = -250;
	// }

	// $(".product-like-box:nth-of-type(1)").css("left",num1/10+"%")
	// $(".product-like-box:nth-of-type(2)").css("left",num2/10+"%")
	// $(".product-like-box:nth-of-type(3)").css("left",num3/10+"%")
	// $(".product-like-box:nth-of-type(4)").css("left",num4/10+"%")
	// $(".product-like-box:nth-of-type(5)").css("left",num5/10+"%")
	// $(".product-like-box:nth-of-type(6)").css("left",num6/10+"%")

	for(var i=0; i<6; i++) {
		show_num[i]++;
		if (show_num[i] >= 1250){
			show_num[i] = -250;
		};
		$(".product-like-box").eq(i).css("left",show_num[i]/10+"%")

	}


	// I CAN NOT MAKE IT STOP AND START AGAIN!!!!



	show_timer=setTimeout("show()",tt)

}

$(function(){

	$(".product-list-box").on("mouseenter",function(){
		// console.log(123)
		// tt = 10000
		clearTimeout(show_timer);
		show_timer = false;

	})

	$(".product-list-box").on("mouseleave",function(){

		show();
	})

	show();
});





