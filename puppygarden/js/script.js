$(function(){
		$(".serr").on("mouseenter",function(){

			$(this)
				.find(".icon").eq(1).removeClass("active")

		});


		$(".serr").on("mouseleave",function(){

			$(this)
				.find(".icon").eq(1).addClass("active")

		});



		var src , srcc
		var $div = $("<div class='lightbox'>");
		var $img , itemNum = 1
		

		$("body").on("mouseenter",".product-box",function(){

			var index = $(this).index()
			$($img).remove()

			if(index == 0){
				src = "images/items/ball_1.jpg"
				srcc = "images/items/ball_"
			}else if(index == 1){
				src = "images/items/bed_1.jpg"
				srcc = "images/items/bed_"
			}else if(index == 2){
				src = "images/items/bone_1.jpg"
				srcc = "images/items/bone_"
			}else if(index == 3){
				src = "images/items/bowl_1.jpg"
				srcc = "images/items/bowl_"
			}else if(index == 4){
				src = "images/items/food_1.jpg"
				srcc = "images/items/food_"
			}else if(index == 5){
				src = "images/items/rope_1.jpg"
				srcc = "images/items/rope_"
			}

			$img = $("<img src='"+ src +"'>")
			$div.append($img)

		});
			$("body").on("mouseenter",".product-like-box",function(){

			var index = $(this).index()
			$($img).remove()

			if(index == 0){
				src = "images/items/ball_1.jpg"
				srcc = "images/items/ball_"
			}else if(index == 1){
				src = "images/items/bed_1.jpg"
				srcc = "images/items/bed_"
			}else if(index == 2){
				src = "images/items/bone_1.jpg"
				srcc = "images/items/bone_"
			}else if(index == 3){
				src = "images/items/bowl_1.jpg"
				srcc = "images/items/bowl_"
			}else if(index == 4){
				src = "images/items/food_1.jpg"
				srcc = "images/items/food_"
			}else if(index == 5){
				src = "images/items/rope_1.jpg"
				srcc = "images/items/rope_"
			}

			$img = $("<img src='"+ src +"'>")
			$div.append($img)

		});
	


		$div.append("<img src='images/buttoms/leftb.png'>")
		$div.append("<img src='images/buttoms/rightb.png'>")
		$div.append("<img src='images/buttoms/cancel.png'>")




		$(".link-v:nth-of-type(2)").on("click",function(){

			$("body").append($div);

		});

		$("body")
			.on("click",".lightbox img:nth-of-type(1)",function(){
				itemNum--;
				if (itemNum == 0) {
					itemNum = 3
				}else if (itemNum == 4) {
					itemNum = 1
				};

				$(".lightbox img:nth-of-type(4)").attr({src:srcc + itemNum +".jpg"})
			});

		$("body")
			.on("click",".lightbox img:nth-of-type(2)",function(){
				itemNum++;
				if (itemNum == 0) {
					itemNum = 3
				}else if (itemNum == 4) {
					itemNum = 1
				};

				$(".lightbox img:nth-of-type(4)").attr({src:srcc + itemNum +".jpg"})
			});	
			


		$("body")
			.on("click",".lightbox img:nth-of-type(3)",function(){
			$($div).remove();
		});


		// !!!  QUESTION  !!!
		
		// Why does this not work????


		// $(".lightbox img:nth-of-type(4)")
		// 	.on("click",function(){
		// 	$($div).remove();
		// });





		$(".left-image-sm").on("click",function(){
			var ssrc = $(this).attr("src")

			$(".left-image-bg").attr({src:ssrc})
		})


		$("body")
			.on("click",".left-image-bg",function(){
				var $div = $("<div class='lightbox1'>");
				$div.append("<img src='"+ this.src +"'>")
				$("body").append($div);
			}).on("click",".lightbox1",function(){
				$(this).remove();
			})


		$(".cart-product-box").on("mouseenter",function(){

			$(".cart-product-name").css()



		});



		
		

		


});
				

	

	
			
			
			

	


