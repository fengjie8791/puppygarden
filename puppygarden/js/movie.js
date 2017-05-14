


var index

function showPicture(){
	$("body").on("mouseenter",".movie-image",function(){
			index = $(this).index()
			console.log(index)

		})

		$("body").on("click",".movie-image",function(){
		var $div = $("<div class='lightbox1' onmousemove='getCoordinates(event)'>");
		$div.append("<img class='big-movie-image' src='"+ this.src +"'>")
		$("body").append($div);
	})

		.on("click",".lightbox1",function(){
			$(this).remove();	

	});	

}



function getCoordinates(e) {
	x=e.clientX;

	var a = Math.floor((x - 150)/3)


	if(a > -1 && a < 340 && index == 0 || index == 3){
	$(".big-movie-image").attr({src:"images/movie/dinner/dinner" + a + ".jpg"})
	}else if(a > -1 && a < 340 && index == 1 || index == 4 ){
	$(".big-movie-image").attr({src:"images/movie/corgia/corgia" + a + ".jpg"})
	}else if(a > -1 && a < 340 && index == 2 || index == 5){
	$(".big-movie-image").attr({src:"images/movie/corgib/corgib" + a + ".jpg"})
	}


}



		
		 

$(function(){ 

	$("body").each(function(){
		new showPicture(this);
	});

})