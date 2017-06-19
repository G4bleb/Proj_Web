// <script
//   src="https://code.jquery.com/jquery-3.2.1.js"
//   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
//   crossorigin="anonymous"></script>
var i;
var fadeTime = 300;
var timer;
$(document).ready(function() {
	for (i = 2; i <= 4; i++){
		$("#slider"+i).hide();
		//console.log("#slider"+i);
	}
	i=1;
	timer = setInterval(function(){diapo()}, 2000);

	$("#sliderbtnleft").click(function(){
		// clearInterval(timer);
		$("#slider"+i).fadeOut(fadeTime);
		i -=1;
		if (i == 0) i = 4;
		// $("#slider"+i).fadeIn(fadeTime);
		// setTimeout(function(){
		// 	timer = setInterval(function(){diapo()}, 2500);
		// }, 1000);
	});

	$("#sliderbtnright").click(function(){
		// clearInterval(timer);
		$("#slider"+i).fadeOut(fadeTime);
		i +=1;
		if (i == 5) i = 1;
		$("#slider"+i).fadeIn(fadeTime);
		// setTimeout(function(){
		// 	timer = setInterval(function(){diapo()}, 2500);
		// }, 1000);
	});
});

function diapo(){
			$("#slider"+i).fadeOut(400);
			//$("#slider"+i).hide();
			i +=1;
			if (i == 5) i = 1;
			$("#slider"+i).fadeIn(400);
			//$("#slider"+i).show();
			console.log("#slider"+i);
}
