$(function(){
	// 初始化 传入dom id
	var victor = new Victor("container", "output");


	var theme = [
			["#FFFFFF", "#FFFFFF"],
			["#7E3D90", "#9F3D90"],	
			// ["#7E3D90", "#FFFFFF"],	
			["#002c4a", "#005584"]
			// ["#002c4a", "#FFFFFF"]
			
		]
	

	$(".color li").each(function(index, val) {
		var color = theme[index];
		 $(this).mouseover(function(){
			victor(color).set();
		 })
	});

	$("#home-container .row .left .bg").mouseover(function(){
		var color = theme[1];
		victor(color).set();

	})
	$("#home-container .row .left .content").mouseover(function(){
		var color = theme[1];
		victor(color).set();

	})

	$("#home-container .row .left .bg").mouseout(function(){
		var color = theme[0];
		victor(color).set();
	})


	$("#home-container .row .right .bg").mouseover(function(){

		var color = theme[2];
		victor(color).set();
		
	})
	$("#home-container .row .right .content").mouseover(function(){

		var color = theme[2];
		victor(color).set();
		
	})

	$("#home-container .row .right .bg").mouseout(function(){

		var color = theme[0];
		victor(color).set();
		
	})
});