<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>contact us Form</title>
	
	<script  type="text/javaScript">

function validate()
{	
var a=0;
  var user="^[a-zA-Z][a-zA-Z]*";

	if ( document.info.name.value.match(user))
	    {
		document.getElementById('error_user').innerHTML = "";	}
		else{
		
	document.getElementById('error_user').innerHTML = "  **Enter name";	
document.info.name.focus();
a=1;
	}	
	
	
	

var emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(document.info.email.value.match(emailformat))
{
   //document.info.email.focus();

    }
else
{
document.getElementById('error_mail').innerHTML = "  **Invalid email";
document.info.email.focus();
a=1;


}
var ph="03[0-9]{9}";
if ( document.info.phone.value.match(ph)){

document.getElementById('error_phone').innerHTML = "";

} 
else{


document.getElementById('error_phone').innerHTML = "  **Enter phone #";
document.info.phone.focus();

a=1;
} 





	if(a==0){
	
   return true;
   }
   else{
    return false;
   }
}
  


</script>
	
	
	<style type="text/css" media="screen">
	body,html
{
 background-image: url("img3.png");


  height: 100%;
background-position: center;
 background-repeat: no-repeat;
}


.bg {
  
  
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.sign-up 
{

position:absolute;
	color:black;
	box-shadow: 0 0 4px rgba(0,0,0,0.4);
	background: rgba(255,255,255,0.4);
font-weight:bold;
	margin: 0% auto 0;
	font-family: century gothic;
	font-size: 75%;
	border-radius: 20px;
margin-left:30%;
	

}
.sign-up h1
{
	
	margin-top: 2%;
	font-weight: bold;
	
	
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button0 {
  background-color: transparent; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button0:hover {
  background-color: #4CAF50;
  color: white;
}

.input{
	
	border-radius: 4px;

outline: none;
border: 1px solid silver;
width: 140px;
}

.input .cf-medium
{
width: 100%;

}

.input2{
	
	border-radius: 4px;
padding: 0%;
outline: none;
border: 1px solid silver;
width: 70%;
height:80px;
margin-top: 5px;
margin: 10px 50px;

}

.input2 .cf-medium
{
width: 100%;

}
.input2:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px BLACK;
}

.input2:hover {
 border: 2px solid BLACK;
  border-color: BLACK;
}

.box 
{
	display: inline-block;
	width: 100%;
	
	
}

.button1 {
  background-color: white;
  border: none;
  border: 1px solid white;
  color: #3366BB;
  padding: 5px 5px;
  text-align: justify;
  text-decoration: none;
  display: inline-block;
  font-size: 20%;
  margin: 0px 2px;
  cursor: pointer;
  border-radius: 3px;
  width: 20%;
  font-family: arial ;
}



.button1:hover {
	border: 1px solid white;
  background-color: #CACACA;
 color: dark blue;
    border-color: transparent;
}
.button0 {
  background-color: white;
  border: none;
  border: 1px solid white;
  color: #3366BB;
  padding: 1px;
  text-align: justify;
  text-decoration: none;
  
  font-size: 7%;
  margin: -2px 2px;
  cursor: pointer;
  border-radius: 3px;
  width: 50%;
  font-family: arial ;
}

.button0:hover {
	border: silver;
  background-color: #CACACA;
  color: dark blue;
  border: 1px solid white;
}

.button2 {
border: 1px solid black;
  background-color: black;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
font-size:15px;
  margin: 0px 59px;
  cursor: pointer;
  border-radius: 3px;
  width: 22%;
  display: inline-block;
  margin-bottom:1px;
  height:40px;
  font-weight:bold;
  font-family: century gothic;
}
.button2:hover {
  background-color: white;
  color: black;
  font-weight:bold;
    border: 1px solid white;
	  box-shadow: 0 0 10px black;
}
.input:hover {
 border: 2px solid blue;
  border-color: blue;
}
.input:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px #719ECE;
}

.input1
{
     
	padding: 10px;
	margin: 10px 50px;
	border-radius: 4px;
	border: 1px solid silver;
	outline: none;
	width: 315px;
	margin-top:8px;

}
.input1:hover {
 border: 2px solid Black;
  border-color: blak;
}
.input1:focus { 
    outline: none !important;
    border-color: black;
    box-shadow: 0 0 10px black;
}

.button0:focus { 
    outline: none !important;
    border-color: #CACACA;
    box-shadow: 0 0 1px silver;
}

.button1:focus { 
    outline: none !important;
    border-color: white;
    box-shadow: 0 0 1px silver;
}
.button2:focus { 
   
    border-color: white;
    box-shadow: 0 0 2px silver;
}




	</style>
</head>
<body>
	
	
		<div style="height:610px;width: 580px; " class="sign-up">
		<center><h1>CONTACT US</h1></center>
		<center><p>All fields are required * .</p></center>
		<form  onsubmit="return validate()" action=""  method="post" >
			<label style="margin:10px 50px;"  for="name">Name</label><br>
			<input type="text" name="name" class="input1" placeholder="Enter Your Name" >
			<span style="color:red ;font-size: 12px" id="error_user" ></span><br></br>
			<label style="margin:10px 50px;" for="email">Email ID</label>
			<input type="email" name="email" class="input1" placeholder="Enter Your Email" >
			<span style="color:red ;font-size: 12px" id="error_mail" ></span><br></br>
			<label style="margin:10px 50px;" for="phone">Phone</label>
			<input type="tel" name="phone" class="input1" placeholder="Enter Your Phone" >
				<span style="color:red ;font-size: 12px" id="error_phone" ></span><br></br>
			<label style="margin:10px 50px;" for="subject">Subject</label>
			<input type="subject" name="subject" class="input1" placeholder="Enter Subject for your email" required>
			<br></br>
			<label style="margin:10px 50px;" for="message">Message</label>
			<textarea name="msg" class="input2" placeholder="Enter Your Message Here..." required></textarea>
		
				<input type="reset" name="Reset"  class="button2">
			<input type="submit" name="submit" value="Submit" class="button2">
			<?php
			if(isset($_POST["submit"])){
			    $name = $_POST['name'];
			    $email = $_POST['email'];
			    $phone = $_POST['phone'];
			    $subj = $_POST['subject'];
			    $msg = $_POST['msg'];
			    $to = " amnakhan1031@gmail.com";
			    $subject = "$subj";
			      $header  = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= "From: $email \r\n";
    $body= "$msg";
    $retval = mail($to,$subject,$body,$header);
if( $retval == true )
{
 echo "<script>alert('Thank you your form has been submitted successfully and we aim to get back within 48 hours')</script>";

} 
else{
	
	echo "<script>alert('Sorry Message cannot be sent')</script>";
}

			}
			
			?>
			
		</form>
		</div>
	</div>
</body>
</html>