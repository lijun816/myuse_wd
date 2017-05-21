<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>创建游戏</title>
</head>
<body>
<form action="add.php" method="get">
游戏人数:<input value="6" name="m"/>
<br>
<hr>
<br/>
词语类型:<br/>
<?php 
$dir = './km/';
$file=scandir($dir);
for ($x = 0;$x<count($file);$x++){
	if(strstr($file[$x],'.php')){
		if($x==2){
			$check=' checked = "checked" ';
		}else{
			$check = '';
		}
		$name = mb_convert_encoding(str_replace('.php','',$file[$x]), "UTF-8", "GBK");
		echo '<input type="radio" name="s" value="'.$name.'" id="id'.$x.'" '.$check.' ><label for="id'.$x.'">'.$name.'</label><br/>';
	}
} 
?> 
<input type="submit" value="创建">
</form>
</body>
</html>