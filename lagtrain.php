<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#start").click(function(){

		var div = $("div");
		let str = '';
		for (let i = 0; i < 9; i++) {
			div.animate({left: '250px', opacity: '1'}, "slow");
			div.animate({left: '+=250px', opacity: '0.8'}, "slow");
			div.animate({left: '+=250px', opacity: '0.4'}, "slow");
			div.animate({left: '+=250px', opacity: '0.2'}, "slow");
			div.animate({left: '-=1000px', opacity: '+=1' }, "slow");
		}
	});
});

</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JQUERY TEST</title>
</head>
<body style="background-color: gray;">

<button id="start">lagtrain</button>

<div style="height:100px;width:100px;position:absolute;" >
<img  id="lagtrain" src="lagtrain.png">
</div>
</body>
</html>

