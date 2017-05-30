<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<META http-equiv="Content-Style-Type" content="text/css">
<style>
.imgg{
	width: 300px;
	padding:10px;
	border: 2px solid #E8EAF6;
	border-radius:30px;
}
.imgg:hover{
	 opacity: 0.7;
}
.for{
	width:400px;
	margin-left: 50px;
	margin-top: 30px;
	color:#00695C;
	font-weight: bold;
	float:left;
}
#lin{
	float:left;
	width:400px;
	color:#00695C;
	margin-top: 30px;
	font-weight: bold;
}
</style>
</head>
<body>
<?php 
session_start();
include_once('layout.php');
include_once('database1.php');	
$img1; $img2; $img3 ; $desc; $price; $quent; $want;
function getImage(){
	
$conn= database_connection();
$sql="select * from products where id= ".$_COOKIE["id"];
$result = $conn->query($sql);


if($result->num_rows > 0){
	global $img1,$img2,$img3,$desc,$price,$quent,$want;
		$row = $result->fetch_assoc();
		$img1 = $row['img1'];
		$img2 = $row['img2'];
		$img3 = $row['img3'];
		$desc = $row['description'];
		$price = $row['price'];
		$quent = $row['quentity'];
	}
	$conn->close();
}
function viewImage($cont,$img1){
	global $desc;
	if($cont < 3){
	echo "<div class=\"for\"><a href=\"productList.php?contt=". ++$cont ."\"><img class=\"imgg\" src=\"$img1\"></a></div><div id=\"lin\"><p>$desc</p>".
"<br><br><form method=\"post\"><p><input type=\"submit\" name=\"chart\" value=\"Add to Chart\"/></p>";
	}
else if($cont == 3){
	echo "<div class=\"for\"><a href=\"productList.php?contt=1\"><img class=\"imgg\" src=\"$img1\"></a></div><div id=\"lin\"><p>$desc</p>".
"<br><br><form method=\"post\"><p><input type=\"submit\" name=\"chart\" value=\"Add to Chart\"/></p>";
}
}
if(isset($_GET["id"])){
	setcookie("id", "\"".$_GET["id"]."\"", time() + (86400 * 30), "/");
	getImage();
	global $img1;
	viewImage(1,$img1);
}


if(isset($_GET["contt"])){
	getImage();
	global $img1,$img2,$img3;
	switch($_GET["contt"]){
		case 1:
		$img1=$img1;
		viewImage(1,$img1);
		break;
		case 2:
		$img1=$img2;
		viewImage(2,$img1);
		break;
		case 3:
		$img1 = $img3;
		viewImage(3,$img1);
		break;
	}
}

if(isset($_POST["chart"])){
	global $price;
	$_SESSION["total"]+=$price;
	if($quent > 0)
	echo "Your total price is: ".$_SESSION["total"]."<br><p><input type=\"submit\" name=\"buy\" value=\"Buy\"/></p></form></div>";
    else 
    echo "this product is not Available";	
}
if(isset($_POST["buy"])){
$conn= database_connection();
$sql="update products set quentity=$quent-1 where products.id= ".$_COOKIE["id"];
$sql1="update products set wanted=$want+1 where products.id= ".$_COOKIE["id"];
if($conn->query($sql) && $conn->query($sql1)){
	echo "products updated";
}
$_SESSION["total"]=0;	
}


?>
</body>
</html>