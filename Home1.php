<!DOCTYPE html>

<html>

	<body>
		
      <h1 style="font-size:70px;">STUDENT MANAGEMENT SYSTEM</h1>   
		<style>

			.button1 {
  border: none;
  color:white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 100px 350px;
  cursor: pointer;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  border-radius: 0%;
  position: relative;
  text-transform: uppercase;

 }

 .button1:hover {
  background-color: rgb(196, 233, 238);
  color: blue;
  opacity: 0.5px;
}
  
 .button2 {
  border: none;
  color:white;
  padding: 15px 32px;
  text-align: center;
  display: inline-block;
  font-size: 20px;
  margin: 50px -100px;
  margin-left: -300px;
  cursor: pointer;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-transform: uppercase;
}
.button2:hover {
  background-color: rgb(196, 233, 238);
  color: blue;
  opacity: 0.5px;
}
body{
  background-size: 100% 110%;
  background-image: url("pic1.jpg");
	background-repeat: no-repeat;
	opacity:1;
}

h1{
	margin-top:350;
	text-align: center;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  color: aliceblue;
  
}
p{
  color:white;
  text-align:left;
  padding: 15px 32px;
  position: relative;
  font-size: 150%;
  margin-top: 150px;
  margin-left: 8px;
  margin-bottom: -10px;
}
.insta{
  background-color:white;
  color :black;
  display:inline-block;
  cursor:pointer;
  text-decoration: none;
  background-image:url("insta pic.png");
  height:24px;
  width:22px;
  position:absolute;

}
.fb{
  background-color:white;
  color :black;
  display:inline-block;
  cursor:pointer;
  text-decoration: none;
  background-image:url("fb pic.jpg");
  height:23px;
  width:21px;
  margin-top: 0px;
  margin-left: 75px;
}
.twitter{
  background-color:white;
  color :black;
  display:inline-block;
  cursor:pointer;
  text-decoration: none;
  background-image:url("twitter pic.png");
  height:23px;
  width:22px;
  margin-top: 0px;
  margin-left: 55px;
  position:absolute;
}

.button1 {background-color:rgb(12, 153, 134);} /* Green */
.button2 {background-color: rgb(12, 153, 134);} /* Blue */
	
		</style>
   
		<button class="button button1  button1-hover-blue" type="button" onclick="window.location.href=
    'studentloginform.php'">Student Login</button>
  
		<button class="button button2" type="button" onclick="window.location.href=
    'adminloginform.php'"> Admin login</button>
    
    <p> Contact Us</p> <br/>
    <a href="https://www.instagram.com/cbithyderabad/" class="insta"> </a>
    <a href="https://www.facebook.com/CBIThyderabad/" class="fb"> </a>  
    <a href="https://twitter.com/CBIThyd" class="twitter"> </a>
    
 
</body>

</html>