<?php $num = 32;?>
<html>
<head>
<script src="lib/prototype.js"></script>
<script src="src/scriptaculous.js"></script>
<script type='text/javascript'>
function whatever(){
	var i;
	/*new Effect.Move($('object'),{x:000,y:400,queue:'end'});
	new Effect.Move($('object'),{x:400,queue:'end'});
	new Effect.Move($('object'),{x:-400,y:-400,queue:'end'});
	new Effect.Move($('otherobject'),{x:000,y:400,queue:{scope:'other',position:'end'}});
	new Effect.Move($('otherobject'),{x:-400,y:0,queue:{scope:'other',position:'end'}});
	new Effect.Move($('otherobject'),{x:400,y:-400,queue:{scope:'other',position:'end'}});*/
	var x, y;
	for(i = 0;i < <?php echo $num;?>;i++){
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = Math.random() * 1500;
		y = Math.random() * 900;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
		x = (i%40) * 30 + 100;
		y = Math.floor((i / 40))*30+100;
	new Effect.Move($('otherobject'+i),{x:x,y:y,mode:'absolute',queue:{scope:'other'+i,position:'end'}});
	}
}
</script>
<style type="text/css">
#object {position:absolute;
	top:400px;
	left:400px;
	width:30px;
	height:30px;
	background-color:blue;
}
#otherobject {position:absolute;
	top:100px;
	left:130px;
	width:30px;
	height:30px;
	background-color:red;
}
<?php
	$color = array(
"#ccc","red","green","blue","cyan","purple","yellow","magenta","black","gray",
"#ccc","red","green","blue","cyan","purple","yellow","magenta","black","gray",
"#ccc","red","green","blue","cyan","purple","yellow","magenta","black","gray",
"#ccc","red","green","blue","cyan","purple","yellow","magenta","black","gray"
);
	for($i = 0; $i < $num;$i++){
		echo "#otherobject$i {";
		$left = ($i%40) * 30 + 100;
		$top = (int)($i / 40)*30+100;
?>
	position:absolute;
	top:<?php echo $top;?>px;
	left:<?php echo $left;?>px;
	width:30px;
	height:30px;
	background-color:<?php echo $color[$i%10]?>;
}
	<?php } ?>
</style>
</head>
<body onload="whatever();" onclick="whatever();">
<?php
for($i = 0;$i < $num;$i++){
echo "<div id=\"otherobject$i\"></div>";
}
?>
</body>
</html>
