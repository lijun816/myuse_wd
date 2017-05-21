<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php 
//session_destroy();
if(isset($_SESSION['you'])){
	$len=2;
	echo  $_SESSION['you'];
}else{
	$sourceFile = './temp.php';
	$str = file_get_contents($sourceFile);
	$arrBack = explode(',',$str);
	$arrBack[0]='';
	file_put_contents($sourceFile,  substr(implode(',', $arrBack),1));
	$arr = explode(',',$str);
	$len = count($arr);
	if($len<=1){
		$x = 0;
		echo '人数已经分配完毕,请期待下个回合';
	}else{
		$all = $arr[$len-1];
		$word = str_replace('^', '', $arr[0],$x);
		$str ='你是'.($all-$len+2).'号,你的词语是   :   '.$word;
		$_SESSION['you'] = $str;
		$_SESSION['youn'] = $x;
		echo $str;
	}
}
?> 
<br/>
<br/>
<br/>
<input type="button" onclick="del()" value="结束游戏"/>  
<script type="text/javascript">	 
	function del() {
		var x = <?php echo isset($_SESSION['youn'])?$_SESSION['youn']:$x;?>;
		if(x>0){
			alert("你是卧底");
		}else{
			alert("你是平民");
		}
		window.location.href='des.php'; 
	}
	
</script>
</body>
</html>





































