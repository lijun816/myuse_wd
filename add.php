<?php

//游戏参与人数
$m = $_GET['m'];
$sname=''; 

if(isset($_GET['s'])){
	$sname = $_GET['s'];
}

$json = json_decode(file_get_contents('http://zhuoyouwx.weapp.me/game/ajax_words'));
//卧底个数
//$wnum = $_GET['w'];

//每局文件
$cachFile = './temp.php';

if($sname==''){
	$sname = 'source';
}
$sname = mb_convert_encoding($sname,"GBK","UTF-8");
//源文件
$sourceFile = './km/'.$sname.'.php'; 
/*

if(!file_exists($sourceFile))
	file_put_contents($sourceFile, '这是一个默认的词语,这个一个很棒的词语');
$str = file_get_contents($sourceFile);
$sour = explode(',',$str); 
$p = rand(0, count($sour)-1);
$w = rand(0, count($sour)-1);

while ($p==$w){
	$w = rand(0, count($sour));	
}
$pw = $sour[$p];
$ww = $sour[$w];
*/
/////调用接口
$pw = $json->pingmin;
$ww = $json->wodi;
///调用接口

$arr = array();
for ($n =0;$n<$m;$n++){
	$arr[$n]=$pw.',';
}
$ran = rand(0, $m-1);
$arr[$ran] = '^'.$ww.',';
$arr[$m]=$m;

file_put_contents($cachFile, $arr); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>创建成功,<a href="index.php">请开始游戏</a></h1>
</body>
</html>


 




























 


