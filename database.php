<?php
session_start();
$u=$_POST['username'];
$v=$_POST['password'];
 $w=$_POST['data'];
echo "hello";
echo $u;
 $con=mysqli_connect('localhost','root','tanay1234');
  $e=mysqli_select_db($con,'communication');
echo $e;
if($w=="faculty"){
	$q="select * from faculty where faculty_name='$u' && password='$v'";
	}
	else if($w=="student"){
		$q="select * from student where name='$u' && password='$v'";
	}
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	$_SESSION['username']=$u;
	$_SESSION['data']=$w;
	if($num==1){
	header('Window-target:_parent');
	header('location:http://34.207.151.150/home.php');
	}
	else
echo "enter correct detail";
	
	?>
