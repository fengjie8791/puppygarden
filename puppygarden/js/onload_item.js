var num = -1;
function onload(){

	num++;

	// console.log(num)
	if(num == 3){
		num = 4
	}
	
	$(".loading:nth-of-type("+ num + ")").removeClass("active-onload")
	
	if(num == 4){
		return;
	}

	t=setTimeout("onload()",600)

}

$(function(){

	$("body").each(function(){
		new onload(this);
		});

});



