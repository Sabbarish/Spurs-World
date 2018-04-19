<?php
session_start();
$n = $_POST["name"];
$p = $_POST["password"];
$e = $_POST["email"];
$a = $_POST["age"];
$c = $_POST["country"];
mysql_connect("localhost","root","");
mysql_select_db("spurs");
$sql = "insert into spurs(name,password,email,age,country) values('$n','$p','$e',$a,'$c')";
mysql_query($sql);
$sql ="select * from spurs";
$result=mysql_query($sql);
$_SESSION['asdf'] = $n;
header("location:home.php");
?>