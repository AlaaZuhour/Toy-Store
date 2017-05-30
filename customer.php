<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
   
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

<style type="text/css">
#body{
background-image:url('back3.jpg');	
}
ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    padding: 8px 16px;
   
}
img{
	width: 400px;
}
img:hover{
	 opacity: 0.7;
}
.for{
	width:500px;
	margin-left: 50px;
	margin-top: 30px;
	color:#004D40;
	font-weight: bold;
	float:left;
}
#lin{
	float:left;
	width:400px;
}
input:focus{
	background-color:#B2DFDB;
}
.error{
	color: #E53935;
	font-size:11pt;
	font-weight: none;
	
}
</style>

</head>
<body id="body">
<script type="text/javascript" language="JavaScript" >
function validateForm(reg) {

	 var valid =true
	
  if(reg.Username.value.length == 0){
	    reg.Username.style.background="#FFCDD2";
		document.getElementById("namee").innerHTML = "Username must be filled out";
        valid= false;
	}
	 else if (reg.Username.value.length < 6 || reg.Username.value.length > 13) {
       document.getElementById("namee").innerHTML = "Username should be between 6-13 character";
        valid= false;
    }
	
	else if(reg.add.value=="" ){
		document.getElementById("adde").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.date.value=="" ){
		document.getElementById("datee").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.email.value=="" ){
		document.getElementById("emaile").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if (reg.email.value.indexOf("@") == -1){
		document.getElementById("emaile").innerHTML = "this is invalide email address";
        valid= false;
	}
	else if(reg.tel.value=="" ){
		document.getElementById("tele").innerHTML = "you must fill out this field";
        valid= false;
	}
	else if(reg.fax.value=="" ){
		document.getElementById("faxe").innerHTML = "you must fill out this field";
        valid= false;
	}
	
	
	return valid;
}
function validForm(){
	
	 var valid =true
	 if(loginn.Username.value.length == 0){
	    loginn.Username.style.background="#FFCDD2";
		document.getElementById("unamee").innerHTML = "Username must be filled out";
        valid= false;
	}
	else if(loginn.Password.value.length == 0){
	    loginn.Password.style.background="#FFCDD2";
		document.getElementById("upasse").innerHTML = "password must be filled out";
        valid= false;
	}
	return valid;
}
function validate(){
	 var valid =true
	 if(login.strUsername.value.length == 0){
	    login.strUsername.style.background="#FFCDD2";
		document.getElementById("uname").innerHTML = "Username must be filled out";
        valid= false;
	}
	else if(login.strPassword.value.length == 0){
	    login.strPassword.style.background="#FFCDD2";
		document.getElementById("password").innerHTML = "Password must be filled out";
        valid= false;
	}
	else if(login.strPassword.value.length < 8){
	    login.strPassword.style.background="#FFCDD2";
		document.getElementById("password").innerHTML = "password must be between 8-12 character";
        valid= false;
	}
	else if(login.conPassword.value.length == 0){
	    login.conPassword.style.background="#FFCDD2";
		document.getElementById("cpassword").innerHTML = "Password must be confirmed";
        valid= false;
	}
	 return valid;
}
</script>
<?php 
 
session_start();

include_once('layout.php');
function checkForm(){
	  if(isset($_GET["form"])){
		  switch ($_GET["form"]){
			  case 1:
			 	$_GET["form"]=0;
			  return "hiii ";
			 
			  break;
			  case 2:
			 $_GET["form"]=0;
			
			 return"<div class=\"for\"><form method=\"post\" name=\"loginn\" onsubmit=\"return validForm(this)\" ><p>".
              "<label for=\"Username\">Username: </label>".
              "<input type=\"text\" name=\"Username\" id=\"Username\" /><span class=\"error\" id=\"unamee\"></span></p>".
              "<p><label for=\"Password\">Password: </label>".
              "<input type=\"password\" name=\"Password\" id=\"Password\"/><span class=\"error\" id=\"upasse\"></span></p>".
              "<p><input type=\"submit\" name=\"login\" value=\"Login\"/></p>".
              "</form>";
			  break;
			  case 3:
			 $_GET["form"]=0;
			 
			  return "<div class=\"for\"><form method=\"post\" name=\"reg\" onsubmit=\"return validateForm(this)\"><table><tr>".
              "<td><label for=\"Username\">Username: </label></td>".
              "<td><input type=\"text\" name=\"Username\" id=\"Username\" value=\"\"/></td><td class=\"error\" id=\"namee\"></td></tr><tr>".
              "<td><label for=\"add\">Address: </label></td>".
              "<td><input type=\"text\" name=\"add\" id=\"add\" /></td><td class=\"error\" id=\"adde\"></td></tr><tr>".
			  "<td><label for=\"date\">BirthDay: </label></td>".
              "<td><input type=\"date\" name=\"date\" id=\"date\" /></td><td class=\"error\" id=\"datee\"></td></tr><tr>".
			  "<td><label for=\"email\">E-mail: </label></td>".
              "<td><input type=\"email\" name=\"email\" id=\"email\" /></td><td class=\"error\" id=\"emaile\"></td></tr><tr>".
			  "<td><label for=\"num\">Tel: </label></td>".
              "<td><input type=\"number\" name=\"tel\" id=\"num\" /></td><td class=\"error\" id=\"tele\"></td></tr><tr>".
			  "<td><label for=\"fax\">Fax: </label>".
              "<td><input type=\"number\" name=\"fax\" id=\"fax\" /></td><td class=\"error\" id=\"faxe\"></td></tr><tr >".
			  "<td colspan=\"2\">Credit card Details</td></tr><tr>".
			  "<td><label for=\"cname\">Name: </label></td>".
              "<td><input type=\"text\" name=\"cname\" id=\"cname\" /></td><td class=\"error\" id=\"cnamee\"></td></tr><tr>".
			  "<td><label for=\"cnum\">Number: </label></td>".
              "<td><input type=\"number\" name=\"cnum\" id=\"cnum\" /></td><td class=\"error\" id=\"cnume\"></td></tr><tr>".
			   "<td><label for=\"cdate\">Expire Date: </label></td>".
              "<td><input type=\"date\" name=\"cdate\" id=\"cdate\"/></td><td class=\"error\" id=\"cdatee\"></td></tr><tr>".
			  "<td><label for=\"cbank\">Bank: </label></td>".
              "<td><input type=\"text\" name=\"cbank\" id=\"cbank\" /></td><td class=\"error\" id=\"cbanke\"></td></tr><tr>".
              "<td><input type=\"submit\" name=\"reg\" value=\"Regester\"/></td></tr><tr></table>".
              "</form>";
			
			  break;
			  case 4:
			  $_GET["form"]=0;
			  return "<div class=\"for\"><form method=\"post\" name=\"login\" onsubmit=\"return validate(this)\"><p>".
              "<label for=\"strUsername\">Username: </label>".
              "<input type=\"text\" name=\"strUsername\" id=\"strUsername\" /></p><span id=\"uname\"><span>".
              "<p><label for=\"strPassword\">Password: </label>".
              "<input type=\"password\" name=\"strPassword\" id=\"strPassword\" /></p><span id=\"password\"></span>".
			  "<p><label for=\"conPassword\">Confirm Password: </label>".
              "<input type=\"password\" name=\"conPassword\" id=\"conPassword\"/></p><span id=\"cpassword\"><span>".
              "<p><input type=\"submit\" name=\"save\" value=\"save\"/></p>".
              "</form>";
			  break;
			  case 5:
			  return ;
			  break;
		  }
	  }
  }
  function checkPost(){
	  include_once('database1.php'); 
	 $valid =true;
	   if(isset($_POST["reg"])){
		 
	 $name = $_POST["Username"];
	 $add = $_POST["add"];
	 $date = $_POST["date"];
	 $email = $_POST["email"];
	 $tel = $_POST["tel"];
	 $fax = $_POST["fax"];
	 $cname = $_POST["cname"];
	 $cnum = $_POST["cnum"];
	 $cdate = $_POST["cdate"];
	 $cbank = $_POST["cbank"];
	
	
	if($valid){
	$conn = database_connection();
	$sql= "insert into customers values(null,'$name','$add','$date','$email','$tel','$fax','$cname','$cnum','$cdate','$cbank')";
	
	
	if($conn->query($sql)){
		return "customer added with id:".$conn->insert_id."create an <a href=\"customer.php?form=4&id=$conn->insert_id\">E-Account</a>";
	}
	$conn->close();
		   }
	   }
 
 if(isset($_POST["save"])){
	$name = $_POST["strUsername"];
    $pass = $_POST["strPassword"]	;
	$passCon =$_POST["conPassword"];
	
	if($pass == $passCon){
		$conn = database_connection();
	$sql= "insert into regesters values('".$_GET["id"]."','$name','$pass')";
	if($conn->query($sql)){
		return "you have successfuly created an account";
	}
	$conn->close();
	}
	 else 
	 return "the two passwords don't matches reenter it again ";
 }
if(isset($_POST["login"])){
	$name = $_POST["Username"];
    $pass = $_POST["Password"];
	$conn = database_connection();
	$sql = "select * from regesters where username= '$name'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
		$realname = $row['username'];
		$realpass = $row['password'];
		if($realpass == $pass){
			$_SESSION["username"]=$realname;
			$_SESSION["password"]=$realpass;
			$_SESSION["total"]=0;
			return "you have successfuly loged in";
		}
		else
		return "wrong password try again";
			
	}
	else 
		return "the username $name dose not exist please create an account first";
	$conn->close();
}
  }
echo "<div id=\"lin\"><ul class=\"ul\">".
"<li><a class=\"anc\" href=\"customer.php?form=3\">"."<img src=\"regester.png\">"."</a></li>".
"<li><a class=\"anc\" href=\"customer.php?form=2\">"."<img src=\"loginn.png\">"."</a></li>".	
    "<li><a class=\"anc\" href=\"customer.php?form=1\">"."<img src=\"forget.png\">"."</a></li></ul></div>";
	?>
	
	<?php
	echo checkForm() ."</form>". checkPost() ."</div>";
 ?>

  

</body>
</html>