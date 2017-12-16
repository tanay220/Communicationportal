<html>
<body bgcolor="lightblue">
<div style="margin-left:400px;margin-top:250;background-color:white;width:400px;height:270px;padding:20px;border-radius:4px;border:2px solid black;text-shadow:1px 1px blue;box-shadow: 0 10px 20px rgba(50,50,50,.95);">
<?php
    $f_name=$_POST['nam'];
	$gen=$_POST['gend1'];
	$d=$_FILES["her"];
	$depa=$_POST['dep'];
    $sub=$_POST['subjects'];
    $are=$_POST['aoi'];
    $id=$_POST['id_no'];
    $yea=$_POST['year']; 
    $shi=$_POST['shif'];
    $numb=$_POST['num'];
    $ema=$_POST['email1'];
    $pass=$_POST['passw'];
	$na="faculty/".$d['name'];
	$con=mysqli_connect('localhost','root','tanay1234');
   $s= mysqli_select_db($con,'communication');
	if(file_exists("faculty/". $d['name'])){?>
		<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;display:inline;font-size:25px;padding:10px;width:120px;color:white;text-shadow: 1px 1px blue;"><?php echo $d['name']."already exists"; ?></label><br />
		<a href="index.php" target="_parent" ><button style="margin-top:20px;margin-left:60px;padding:3px;border-radius:2px 2px;color:white;text-shadow:1px 1px orange;">click here</button></a><label style="display: inline-block;padding-bottom: 10px;width:120px;color:white;text-shadow: 1px 1px blue;">Click here for try again</label>
		<?php
	}
	if($d['type']=="image/jpeg"){
	move_uploaded_file($d['tmp_name'],"faculty/".$d['name']);
	$q="insert into faculty (faculty_name,gender,image,department,teaching_subjects,area_of_intrest,id_no,experience,shift,mobile,email,password) values('$f_name','$gen','$na','$depa','$sub','$are',$id,$yea,'$shi',$numb,'$ema','$pass')";
	mysqli_query($con,$q);?>
	<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;display:inline;font-size:25px;padding:10px;width:120px;color:white;text-shadow: 1px 1px blue;">Username:&nbsp;&nbsp;<?php echo $f_name;?></label><br />
	<label style="margin-left:40px;margin-top:20px;margin-bottom:20px;font-size:25px;display: inline-block;padding: 10px;width:120px;color:white;text-shadow: 1px 1px blue;">Password:&nbsp;&nbsp;<?php echo $pass;?></label><br />
	<a href="index.php" target="_parent"><button style="margin-top:20px;margin-left:60px;padding:3px;border-radius:2px;color:white;text-shadow:1px 1px orange;">LOGIN PAGE</button></a><label>Use this credential on login page</label>
	<?php mysqli_close($con); 
           }
	?>
	</div>
   </body></html>