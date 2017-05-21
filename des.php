<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1>游戏结束</h1>
<?php 
session_destroy(); 
?>
<br/>
<h4><a href='index.php'>开始游戏</a></h4>
<h4><a href='create.php'>创建游戏</a></h4>
<input type="button" onclick='javascript:top.window.location = "index.php";' value="开始游戏"/>
<br/>
<br/> 
<input type="button" onclick='javascript:top.window.location = "create.php";' value="创建游戏"/>    
</body>
</html>





































