var num_productbox = -1;


function onload_productbox(){

	num_productbox++;

	






 



console.log(num_productbox)






	if(num_productbox >= 0){
	$(".product-box:nth-of-type("+ num_productbox + ")").removeClass("active-onload")
	}

	if(num_productbox == 6){
		return;
	}

	t=setTimeout("onload_productbox()",300)

}

$(function(){

	$("body").each(function(){
		new onload_productbox(this);
		});

});





