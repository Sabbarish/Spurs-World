<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("spurs");
$x = $_POST["Name"];
$y = $_POST["Password"];
$sql ="select * from spurs where name='$x' and password='$y'";
echo $sql;
$result= mysql_num_rows(mysql_query($sql));
echo $result;
if($result>0)
{
	$_SESSION['asdf'] = $x;
	header("location:home.php");
}
else
{
	header("location:index.php?q=err");
}


?>