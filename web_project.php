<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
   
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<LINK href="web_project.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title> </title>
</head>
<body>

<?php 
session_start();
include_once('layout.php');
session_unset();
echo "<div id=\"new\"><h3>New Arraivals</h3>"."<div  class=\"promo\"><img class=\"img\"src=\"squres.png\">".
         "<div class=\"trans\"><p>"."Sequres toy<br> tech kids the<br> alphabet "."</p></div></div>".
		 "<div class=\"promo\"><img class=\"img\"src=\"lego.png\">".
         "<div class=\"trans\"><p>"."Lego toy<br> allows kids to build<br> an amazing things "."</p></div></div>".
		 "<div class=\"promo\"><img class=\"img\"src=\"space.png\">".
         "<div class=\"trans\"><p>"."Astronaut toy<br>fly to the space <br>with Astronaut "."</p></div></div>".
		  "<div class=\"promo\"><img class=\"img\"src=\"mario.png\">".
         "<div class=\"trans\"><p>"."Mario toy<br> it can jump<br> everywhere "."</p></div></div>".
		 "<div class=\"promo\"><img class=\"img\"src=\"horse.png\">".
         "<div class=\"trans\"><p>"."Horse toy<br> try it, its<br> like a seso"."</p></div></div>".
		 "<div class=\"promo\"><img class=\"img\"src=\"ball.png\">".
         "<div class=\"trans\"><p>"."bascktball<br> kids can play<br> bascketball "."</p></div></div>"."</div>".
		 " <div id=\"offer\"><h4>Special Offer</h4><p>"."Buy any of these toys and get the second for free ".
		 "</p><div><img id=\"off\" src=\"toys2.png\">".
         "<img id=\"off\" src=\"toys1.png\"><div></div></div></div></disp>"

?>
</body>
</html>