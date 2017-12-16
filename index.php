<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat</title>
     <link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="chat.js"></script>
     <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "Guest");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});

var imgNumber = 0;
var path = ["images/vig.jpg",
  "images/1.jpg",
  "images/rkgit2.jpg",
  "images/poster.jpg"
];
var numberOfImg = path.length;
var timer = null;

function slide() {
  imgNumber = (imgNumber + 1) % path.length;
  document.getElementById("imgSlideshow").src = path[imgNumber];
}

function setTimer() {
  if (timer) {
    clearInterval(timer);
    timer = null;
  } else {
    timer = setInterval(slide, 2000);
  }
  return false;
}



function previousImage() {
  --imgNumber;
  if (imgNumber < 0) {
    imgNumber = numberOfImg - 1;
  }
  document.getElementById("imgSlideshow").src = path[imgNumber];
  
  return false;
}

function nextImage() {
  ++imgNumber;
  if (imgNumber > (numberOfImg - 1)) {
    imgNumber = 0;
  }
  document.getElementById("imgSlideshow").src = path[imgNumber];
  return false;
}
    </script>

</head>

<body onload="setInterval('chat.update()',1000)">
	<div class="container">
<header>
<img src="images/image.jpg" style="border-radius:4px;border-color: gray; display:inline-block;vertical-align: top;"/>
<img src="images/banner1.jpg" style="border-radius:4px;border-color:gray; display:inline-block;vertical-align: top; width:835px;height:220px;"/>
 <div class="wrapper">
 
          <nav>
            <a href="#">Home</a>
            <a href="Aboutcollege.php">About College</a>
            <a href="gallery.php">Gallery</a>
            <a href="Aboutportal.php">About Portal</a>
            <a href="#contact">Contact</a>
          </nav>

    </div>
   </header>
   <button id="new">new user</button><label id="text" style="color:white;
	text-shadow: 1px 1px blue;" for="new">Click here for signup</label>
  <section id="sign_up" style="display:none;">
<center><label><h2>SignUp form</h2></label></center>
<div id="designation">
<label>choose your designation:</label>
<input type="radio" id="design1" name="designation"><label>Student</label>
<input type="radio" id="design2" name="designation"><label>Faculty</label><br>
</div>
<div id="student" style="display:none;">
<label style="display:block;margin-left:200px;border:2px solid blue;border-radius:4px;">
<marquee behavior="alternate" direction="left" onmousedown="this.stop();" onmouseup="this.start();">
You are  filling form as <strong>student</strong> of rkgit..</marquee></label>
<form action="signup.php" method="POST" enctype="multipart/form-data">
<label>Student Name:-</label>
<input type="text" name="namr" placeholder="enter your name" required/><br>
<label>Sex:</label>
<input type="radio" name="gend" value="Male"/><label>Male</label>
<input type="radio" name="gend" value="Female"/><label>Female</label><br>
<label>Image:</label><input type="file" name="myfile" /><br/>
<label>Branch:</label>
<select name="branch">
<option value="Computer Science">Computer Science</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="Electrical & Electronics eng.">Electrical & Electronics eng.</option>
</select><br>
<label>Year:</label>
<select name="year">
<option value="First Year">First Year</option>
<option value="Second Year">Second Year</option>
<option value="Third Year">Third Year</option>
<option value="Fourth Year">Fourth Year</option>
</select><br>
<label>Roll No.:</label>
<input type="number" name="roll_no" required/><br>
<label>Shift:</label>
<input type="radio" name="shift" value="Evening"/><label>Evening</label>
<input type="radio" name="shift" value="Morning"/><label>Morning</label><br>
<label>Mobile No.:</label>
<input type="tel" name="num" placeholder="enter a valid number" required/><br>
<label>Email_Id:</label>
<input type="email" name="email" placeholder="enter a valid email" required /><br>
<label>Password:</label>
<input type="password" name="password" placeholder="choose a password" required/><br><br>
<input type="submit" value="submit" name="sub"/>
<input type="reset" value="reset" />
</form>
</div>
<div id="faculty" style="display:none;">
<label style="display:block;margin-left:200px;border:2px solid blue;border-radius:4px;">
<marquee behavior="alternate" direction="left" onmousedown="this.stop();" onmouseup="this.start();">
You are  filling form as <strong>faculty</strong> of rkgit..</marquee></label>
<form action="signup1.php" method="POST" enctype="multipart/form-data">
<label>Faculty Name:-</label>
<input type="text" id="name" name="nam" placeholder="enter your name" required/><br>
<label style="margin-right:50px;">Sex:</label>
<input type="radio" name="gend1" value="Male"/><label>Male</label>
<input type="radio" name="gend1" value="Female"/><label>Female</label><br />
<label>Image:</label><input type="file" name="her" /><br/>
<label>Department:</label>
<select name="dep">
<option value="cs">Computer Science</option>
<option value="me">Mechanical Engineering</option>
<option value="ce">Civil Engineering</option>
<option value="it">Information Technology</option>
<option value="en">Electrical & Electronics eng.</option>
</select><br />
<label>Current_Subjects:</label>
<input type="text" name="subjects" placeholder="enter your current teaching subject"/><br />
<label>Area of Intrest:</label>
<input type="text" name="aoi"/><br />
<label>Faculty_Id:</label>
<input type="number" name="id_no" required/><br />
<label>Experience:</label>
<input type="number" name="year" /><br />
<label>Shift:</label>
<input type="radio" name="shif" value="Evening"/><label>Evening</label><input type="radio" name="shif" value="Morning"/>
<label>Morning</label><br />
<label>Mobile No.:</label>
<input type="tel" name="num" placeholder="enter a valid number" required/><br>
<label>Email_Id:</label>
<input type="email" name="email1" placeholder="enter a valid email" required /><br>
<label>Password:</label>
<input type="password" name="passw" placeholder="choose a password" required/><br><br>
<input type="submit" value="submit" name="sub"/>
<input type="reset" value="reset" />
</form>
</div>
</section>
<div id="chatterbox" style="display:none;">
    <div id="page-wrap">
    
        <h2><center>Global Chat</center></h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p><strong>Your message: </strong></p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
    
    </div></div>
	<div id="global">
<button id="chet">Global Chat</button>
</div>

    <div id="clear">
    <section id="free" style="background-image: url(images/giphy.gif)";>
   <center>
    <div id="slideshow">
  <div>
    <img name="slide" id="imgSlideshow" src="images/convocation.jpg">
  </div>
</div>
<div class="bus">
  <button onclick="return previousImage()" style="background-color:blue;color:white ;text-shadow:2px 2px blue;border:1px solid white;border-radius:3px;"><<</button>
 <button  onclick="return setTimer()" style="background-color:blue;color:white;text-shadow:2px 2px blue;border:1px solid white;border-radius:3px;">start</button>
 <button onclick="return nextImage()" style="background-color:blue;color:white;text-shadow:2px 2px blue;border:1px solid white;border-radius:3px;">>></button>
 </div>
</center>
</section>
<section id="log" style="background-image: url(images/giphy.gif)";>

<div class="login-form bordered" style="margin-left:30px;">
<center><label><strong><u>Registered user</u></strong></label></center><br /><br/>
<form action="database.php" method="post">
<label for="user">Username :</label>
<input type="text" name="username" id="user" /><br />
<label for="pass">Password :</label>
<input type="password" name="password" id="pass" /><br />
<input type="radio" name="data" value="faculty"><label>Faculty</label>
<input type="radio" name="data" value="student"><label>Student</label><br />
<input type="checkbox" name="remember" id="rem">
<label for="rem">Remember Me</label><br />
<input type="submit" name="loginbutton" value="sign in" />
<input type="reset" name="cancelbutton" value="reset"/>
</form>
</div>
<div id="news">
<center><label><strong><u>News Feed</u></strong></label></center>
<marquee behavior="alternate" direction="left" onmousedown="this.stop()"; onmouseup="this.start()"; >
<ul>
<li id="new1">A workshop on cloud computing is going to be held on August,25 2017</li><br>
<li id="new2">College announced date of vigyanam 2017</li><br>
<li id ="new3">Last date of registartion for umang 2017 is August,27 2017</li>
</ul>
</marquee></div>
</section>

<button id="toggleButton">MORE</button>
<div class="results"style="display:none;">
<section id="logi">
<div id="about1">
<center>
<img src="images/chair.jpg"  style="border-radius: 4px;border-color:yellow";/>
<h3>Shri Dinesh Kumar Goel</h3></center>
<ul><li>
In the year 2000, our Founder Chairman Late Sri Raj Kumar Goelji laid the foundation of this premier institute with a vision to provide value based technical education and to create a congenial environment for the overall development of the students, faculty and staff members.</li></ul>
</div>
<div id="about2">
<center>
<img src="images/ad.jpg"  style="border-radius: 4px;border-color:yellow; width:200px; height:175px;"/>
<h3>Prof(Dr.) B.K. Gupta</h3></center>
<ul><li>
Dr. B.K. Gupta, is B.E. (Mech.) Roorkee, First Rank Holder 1955; M.S.(1960) and Ph.D. (1962) from Cornell University, USA. Formerly he was Principal, Moti Lal Nehru Regional Engineering College, Allahabad, Founder Principal, Ajay Kumar Garg Engineering College, Ghaziabad, Raj Kumar Goel Institute of Technology Ghaziabad, and Founder Vice President of J.K. Technosoft Ltd.</li>
</ul>
</div>
<div id="about3">
<center>
<img src="images/director.jpg"  style="border-radius: 4px;border-color:blue; width:200px; height:175px;"/>
<h3>Dr. Laxman Prasad</h3></center>
<ul><li>Dr. Laxman Prasad, Director, R & D and Professor, an eminent Scientist obtained his B.Sc. in Electrical Engineering in 1970 and Ph.D. in Electronics Engineering in 1976 from Institute of Technology, Banaras Hindu University, Varanasi. He also obtained LL.B. with specialization in International Law and Intellectual Property Rights from Delhi University in 1988.
</li></ul></div>
<div id="about4">
<center>
<img src="images/director2.jpg"  style="border-radius: 4px;border-color:blue; width:200px; height:175px;"/>
<h3>Dr.R.P. Maheswari</h3></center>
<ul><li>Prof. R.P.Maheswari obtained his B.E.(Elect.)1982 and MSc(Engg) instrumentation and control 1985 from AMU;PhD(Roorkee)1996.He is having thirty years of acadmic and administrative experience thirteen years at AMU,Aligarh and seventeen years at Roorkee University/IIt Roorkee.</li></ul></div>

</section>
</div>
</section>
<footer id="contact"><br /><br />

<center>&copy communicationportal/rkgit.gq<br />

Developed By:-CCT Members of RKGIT</center>
</footer>
</div>
</div>

</body>
</html>