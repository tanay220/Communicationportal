<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://34.207.151.150/index.php');
	
	
?>
<html>
<head>
<meta charset="ISO-8859-1">
<style>
.mySlides {display:none;}
</style>

<link rel="stylesheet" href="css/menu.css">

<title>Communication Portal</title>
</head>
<body>
<div id="base">
 <div id="slideshow">
<img class="mySlides"  src="images/banner1.jpg" width="100%" height="300" style="border-radius:10px 10px 0 0;">
<img class="mySlides" src="images/banner3.jpg" width="100%" height="300" style="border-radius:10px 10px 0 0;">
<img class="mySlides" src="images/banner4.jpg" width="100%" height="300" style="border-radius:10px 10px 0 0;">
    
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
     </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);
}
</script>
   <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

 <section id="mid">
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
     
<div id="menu" align="left">
    
    <table width="220px" border="1" cellpadding="0" cellspacing="0" bordercolor="#325985"
    style="background-color: #FFFFFF;">
    <tr>
        <td>
            
<table width="224" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="210" align="center" valign="top">
    <table width="220" border="0" cellpadding="0" cellspacing="0" bordercolor="#325985" >
      <tr>
        <td align="center" valign="top"><table width="220" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="7px" colspan="3" align="right" valign="middle"></td>
          </tr>
          <tr>
            <td width="100" align="right" valign="middle">
                <img src="<?php $con=mysqli_connect('localhost','root','tanay1234');
                            mysqli_select_db($con,'communication');
                            $user=$_SESSION['username'];
	                        if($_SESSION['data']=='faculty'){
		                    $q="select * from faculty where faculty_name='$user'";}
							if($_SESSION['data']=='student'){
		                    $q="select * from student where name='$user'";}
		                   $result=mysqli_query($con,$q);
		                   $row=mysqli_fetch_array($result);
							echo $row['image'];?>" alt="images/banner.png" style="border-radius:90px 90px;width:120px;height:90px;border:2px solid blue;">
            </td>
            <td width="9">&nbsp;</td>
            <td width="100" align="left" valign="bottom" class="student">
							<label style="font-size:20px;text-shadow:1px 1px blue;"><?php echo $_SESSION['username'];
	?></label><BR/><label style="font-size:10px;text-shadow:1px 1px blue;"><script type="text/javascript">
document.write ('<p><span id="date-time">', new Date().toLocaleString(), '</span>.</p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 1000)
}</script></label>
           </td>
          </tr>
          <tr>
            <td height="7px" colspan="3" align="right" valign="middle"></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
        </td>
    </tr>
</table>

    <button  class="button">Home</button><br/>
    <div class="dropdown">
     <button  class="button">Search Faculty</button><br/>
       <div class="dropdown-content">
         <a href="#">By Subject</a>
         <a href="#">By Area of Intrest</a>
         <a href="#">By Branch</a>
       </div>
      </div>
        <button class="button">Communicate</button><br/>
        <button class="button">Notes</button><br/>
        <button class="button">About College</button><br/>
      <button class="button">My Profile</button><br/>
      <a href="logout.php"><button class="button">Logout</button></a><br/>
      
</div>
     <div id="newsfeed">

         <div id="welcome">
             <img src="images/welcome1.png" width=200px; height=100px;>
             <p >Hello <strong><?php echo $_SESSION['username'];?></strong>, you are welcome to Communication Portal.This portal is under construction.As soon as poosible this portal will ready for you. </p>
         </div>
                 
         <div id="notice">
                <u><center><label for="news"><b>Notice</b></label></center></u>
             <marquee direction=up scrolldelay=200 height=150>
         <li>4yr classes had started from 24 July,Kindly all the students plz attend their classes. </li>
         <li>A meeting related to Co-Cube held in CRC hall & necessary to attend by all student.  </li>
         <li>An intraction between director and 4yr students has planned on date 3 July at 2 pm.   </li>
         <li>Infogain will visit to RKGIT on 1 September for Recruitment and eligibilty criteria for 
             sitting on that is  65% in Btech.</li>
             </marquee>
                 </div>
        <br/>
       </div>
    </section>
    <footer class="footer">
        <div class="footer-left">
              <h3>Portal<span>logo</span></h3>

                  <img src="images/logo2.png" width="200px" height="150px">
				<p class="portalname">Comunication Portal &copy; 2017</p>
			</div>

     <div class="footer-center">
               <div id="map">
					
					<p><span>RKGIT ,5Km Mile Stone,Delhi-Merut Road</span>Ghaziabad UttarPradesh,India</p>
				</div>
                <div id="contact">
					<p>9910648703</p>
				</div>
                <div id="mail">
					<p><a href="mailto:tanaysenaws@rkgit.edu.in">tanaysenaws@rkgit.edu.in</a></p><br/>
                    <p><a href="mailto:saurabhabic@gmail.com">saurabhabic@gmail.com</a></p>
				</div>
        </div>
             
        
        <div class="footer-right">

				<p class="aboutportal">
					<span>About the portal</span>
					Portal is for you to know more about your college and faculty. 
				</p>

				<div class="footer-icons">

					<a href="#"><img src="images/face.png" width="50" height="50"></a>
					<a href="#"><img src="images/twitter.png" width="50" height="50"></a>
					<a href="#"><img src="images/linkedin.png" width="50" height="50"></a>
					<a href="#"><img src="images/git.png" width="50" height="50"></a>

				</div>
             </div>
       </footer>
    </div>
</body>

</html>