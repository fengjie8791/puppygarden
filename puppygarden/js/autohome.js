var num_time = 6;
function autohome(){

	num_time--;

	console.log(num_time)
	$(".autohome").html(num_time)
	
	
	
	if(num_time == 0){
		window.location.href="index.php"
	}

	t=setTimeout("autohome()",1000)

};

$(function(){

	$("body").each(function(){
		new autohome(this);
		});

});





