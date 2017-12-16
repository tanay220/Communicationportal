<html>
<body bgcolor="lightblue">
<div style="margin-left:400px;margin-top:250;background-color:white;width:400px;height:270px;padding:20px;border-radius:4px;border:2px solid black;text-shadow:1px 1px blue;box-shadow: 0 10px 20px rgba(50,50,50,.95);">
<?php
$s_name=$_POST['namr'];
$ge=$_POST['gend'];
$im=$_FILES["myfile"];
$br=$_POST['branch'];
$ye=$_POST['year'];
$ro=$_POST['roll_no'];
$sh=$_POST['shift'];
$nu=$_POST['num'];
$em=$_POST['email'];
$pas=$_POST['password'];
$na="student/".$im['name'];
$con=mysqli_connect('localhost','root','tanay1234');
mysqli_select_db($con,'communication');
move_uploaded_file($im['tmp_name'],"student/".$im['name']);

$q="insert into student (name,gender,image,branch,year,roll_no,shift,mobile_no,email,password) values('$s_name','$ge','$na','$br','$ye',$ro,'$sh',$nu,'$em','$pas')";	
$i=mysqli_query($con,$q);
mysqli_close($con);
if($i==1)
{
$subject="Registrationconfirmation on RKGITPORTAL";
$txt="Hello".$s_name."\n\n Your Username and Password are"\r.$s_name."\r&"\r.$pas."\n\nThankyou for register!";
$headers="From:RkgitPortal.gq"."\n\n";
$j=mail($em,$subject,$txt,$headers);
echo $j;?>
	<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;display:inline;font-size:25px;padding:10px;width:120px;color:white;text-shadow: 1px 1px blue;">Username:&nbsp;&nbsp;<?php echo $s_name;?></label><br />
	<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;font-size:25px;display: inline-block;padding: 10px;width:120px;color:white;text-shadow: 1px 1px blue;">Password:&nbsp;&nbsp;<?php echo $pas;?></label><br />
	<a href="index.php" target="_parent"><button style="margin-top:20px;margin-left:60px;padding:3px;border-radius:2px;color:white;text-shadow:1px 1px orange;">LOGIN PAGE</button></a><label>Use this credential on login page</label>
<?php }
if($i!=1){ ?>
		<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;display:inline;font-size:25px;padding:10px;width:120px;color:white;text-shadow: 1px 1px blue;">try again later</label><br />
		<a href="index.php" target="_parent" ><button style="margin-top:20px;margin-left:60px;padding:3px;border-radius:2px 2px;color:white;text-shadow:1px 1px orange;">click here</button></a><label style="display: inline-block;padding-bottom: 10px;width:120px;color:white;text-shadow: 1px 1px blue;">Click here for try again</label>
		<?php
}
?>
</div></body></html>