<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
      "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
   
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<LINK href="web_project.css" rel="stylesheet" type="text/css" />
<META http-equiv="Content-Style-Type" content="text/css">
<style type="text/css">
#body{
	background-image:url('bback2.jpg');
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
function validForm() {
	 var valid =true
	
	 if(add.name.value.length == 0){
	    add.name.style.background="#FFCDD2";
		document.getElementById("na").innerHTML = "product name must be filled out";
        valid= false;
	}
	else if(add.cat.selectedIndex == 0){
	   add.cat.style.background="#FFCDD2";
		document.getElementById("option").innerHTML = "Category must be selected";
        valid= false;
	}
	else if(add.price.value.length == 0){
	    add.price.style.background="#FFCDD2";
		document.getElementById("pricc").innerHTML = "price must be filled out";
        valid= false;
	}
	else if(add.age.value.length == 0){
	    add.age.style.background="#FFCDD2";
		document.getElementById("agee").innerHTML = " Target age must be filled out";
        valid= false;
	}
	else if(add.date.value.length == 0){
	    add.date.style.background="#FFCDD2";
		document.getElementById("datee").innerHTML = "Arriaval date must be filled out";
        valid= false;
	}
	else if(add.qen.value.length == 0){
	    add.qen.style.background="#FFCDD2";
		document.getElementById("qenn").innerHTML = "price must be filled out";
        valid= false;
	}
	
	return valid;
}
function validateForm(){
	var valid =true
	 if(search.cirr.selectedIndex == 0){
	    search.cir.style.background="#FFCDD2";
		document.getElementById("ccirr").innerHTML = "Category must be selected";
        valid= false;
	}
	else if(search.cir.value == 'target age'){
		if(search.ageNuum.value.length == 0)
	   search.cir.style.background="#FFCDD2";
		document.getElementById("tage").innerHTML = "target must be filled out";
        valid= false;
	}
	else if(search.numee.value.length == 0){
	    search.numee.style.background="#FFCDD2";
		document.getElementById("nmb").innerHTML = "Category must be selected";
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
				return "<div class=\"for\"><p>Select the search cirtera:</p><p><ul class=\"ul\">".
              "<li><a class=\"anc\" href=\"product.php?form=3\">"."Product Category"."</a></li>".
              "<li><a class=\"anc\" href=\"product.php?form=4\">"."Price Range"."</a></li>".
              "</ul></p> ";
				break;
				case 2:
				$_GET["form"]=0;
				if(isset ($_SESSION["username"])){
					if($_SESSION["username"]== "cust1130764"){
				return "<div class=\"for\"><form method=\"post\"  enctype=\"multipart/form-data\" name=\"add\" onsubmit=\"return validForm()\"><table><tr>".
              "<td><label for=\"name\">Product Name: </label></td>".
              "<td><input type=\"text\" name=\"name\" id=\"name\" /></td><td class=\"error\" id=\"na\"></td></tr><tr>".
              "<td><label for=\"desc\">Brief Description: </label></td>".
              "<td><textarea name=\"desc\" rows=\"3\" cols=\"20\" ></textarea></td></tr><tr>".
			  "<td><label for=\"cat\">Category: </label></td>".
              "<td><select name=\"cat\" id=\"cat\" >".
			  "<option></option>".
              "<option value=\"board game\">board game 10-1010</option>".
              "<option value=\" educational game\"> educational game 10-1020</option>".
              "<option value=\"electronic game\">electronic game 10-1030</option>".
              "</select></td><td class=\"error\" id=\"option\"></td></tr><tr>".
			  "<td><label for=\"price\">Price: </label></td>".
              "<td><input type=\"number\" name=\"price\" id=\"price\"/></td><td class=\"error\" id=\"pricc\"></td></tr><tr>".
			  "<td><label for=\"size\">Size: </label>".
              "<td><input type=\"number\" name=\"size\" id=\"size\"/></td></tr><tr >".
			  "<td><label for=\"age\">Target Age: </label></td>".
              "<td><input type=\"number\" name=\"age\" id=\"age\" /></td><td class=\"error\" id=\"agee\"></td></tr><tr>".
			   "<td><label for=\"date\">Arriaval Date: </label></td>".
              "<td><input type=\"date\" name=\"date\" id=\"date\" /></td><td class=\"error\" id=\"datee\"></td></tr><tr>".
			   "<td><label for=\"qen\">Quentity: </label></td>".
              "<td><input type=\"number\" name=\"qen\" id=\"qen\" /></td><td class=\"error\" id=\"qenn\"></td></tr><tr>".
			   "<td colspan=\"2\">Upload 3 Images: </td></tr><tr>".
			   "<td> <input type=\"file\" name=\"img1\" ></td><td class=\"error\" id=\"img1\"></td>".
              "<td><input type=\"file\" name=\"img2\" ></td><td class=\"error\" id=\"img2\"></td></tr><tr>".
              "<td><input type=\"file\" name=\"img3\"></td><td class=\"error\" id=\"img3\"></td></tr><tr>".
              "<td><input type=\"submit\" name=\"add\" value=\"Add Product\"/></td></tr><tr></table>".
              "</form>";
				}
				else
					return "<div class=\"for\"> only admin can add Products</div>";
				}
				else
				return  "<div class=\"for\">pleas make sure to login first</div>";
				break;
				case 3:
				$_GET["form"]=0;
				return "<div class=\"for\"><form method=\"post\" name=\"search\" action=\"product.php\" onsubmit=\"return validateForm(this)\"><p>Select the Category: </p><p><select name=\"cir\" id=\"cirr\" >".
				  "<option></option>".
              "<option value=\"most wanted\">Most wanted</option>".
              "<option value=\"new arriavals\">New Arriavals</option>".
              "<option value=\"target age\">Target Age</option>".
              "</select></p><span class=\"error\" id=\"ccirr\"></span><p>Set the Number of Record/page:</p>".
			  "<p><label for=\"num\">Number of record: </label>".
			   "<input type=\"number\" name=\"numee\" id=\"num\" /><span class=\"error\" id=\"nmb\"></span></p>".
			  "</p><p>Set the target age:</p>".
			  "<p><label for=\"ageNum\">target age: </label>".
              "<input type=\"number\" name=\"ageNuum\" id=\"ageNumm\" /><span class=\"error\" id=\"tage\"></span></p>".
			  "<p><input type=\"submit\" name=\"search\" value=\"Search Product\"/></p></form>";
				break;
				case 4:
				$_GET["form"]=0;
				return "<div class=\"for\"><form method=\"post\" action=\"product.php\" name=\"search1\" onsubmit=\"return validate(this)\"><p>Select the Price Range: </p>".
				"<p><label for=\"pric\">from: </label>".
              "<input type=\"number\" name=\"pric\" id=\"pric\" /><span class=\"error\" id=\"from\"></span></p>".
			  "<p><label for=\"pri\">to: </label>".
              "<input type=\"number\" name=\"pri\" id=\"pri\" /><span class=\"error\" id=\"to\"></span></p>".
			  "<p>Set the Number of Record/page:</p>".
			  "<p><label for=\"num\">Number of record: </label>".
              "<input type=\"number\" name=\"num\" id=\"num\"/></p>".
			  "<p><input type=\"submit\" name=\"searchh\" value=\"Search Product\"/></p></form>";
				break;
				case 5:
				
		  }
		 
			
	
	  }
}
function checkPost(){
	 include_once('database1.php'); 
	if(isset($_POST["add"])){
		$name=$_POST["name"];
		$desc=$_POST["desc"];
		$cat=$_POST["cat"];
		$price=$_POST["price"];
		$size=$_POST["size"];
		$age=$_POST["age"];
		$date=$_POST["date"];
		$quen=$_POST["qen"];
		$target_dir = "itemsImages/";
$target_file1 = $target_dir.basename($_FILES["img1"]["name"]);
$target_file2 = $target_dir.basename($_FILES["img2"]["name"]);
$target_file3 = $target_dir.basename($_FILES["img3"]["name"]);
 if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1)) {
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	if (move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2)) {
      
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	if (move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
		
		
		$conn = database_connection();
	$sql= "insert into products values(null,'$name','$desc','$cat','$price','$size','$age','0','$date','$quen','$target_file1','$target_file2','$target_file3')";	
	if($conn->query($sql)){
		return "product is added sucessfully";
	}
	$conn->close();
	}
	
	}

echo "<div id=\"lin\"><ul class=\"ul\">".
    "<li><a class=\"anc\" href=\"product.php?form=1\">"."<img src=\"searchh.png\">"."</a></li>".
    "<li><a class=\"anc\" href=\"product.php?form=2\">"."<img src=\"add.png\">"."</a></li></ul></div>". checkForm() . checkPost() ."</div>";
	$flag ;
	function search($page=1,$flag =false){
		global $flag;
	 $num_rec_per_page=$_COOKIE["rec_num"];
     $start_from = ($page-1) * $num_rec_per_page; 
if($flag)
	$sql="select * from products where price >=".$_COOKIE["from"]." and price <=".$_COOKIE["to"]." limit $start_from, $num_rec_per_page";
else
switch($_COOKIE["cat"]){
	case "most wanted":
	$sql="select * from products order by wanted limit $start_from, $num_rec_per_page";
	break;
	case "new arriavals":
	$sql="select * from products order by date limit $start_from, $num_rec_per_page";
	break;
	case "target age":
	$sql="select * from products where age=".$_COOKIE["ageNum"]." limit $start_from, $num_rec_per_page";
	break;
} 
$conn = database_connection();
$result = $conn->query($sql); //run the query


echo "<div class=\"for\"><table border='1'>".
"<tr><th><a href=\"product.php?form=5\">ID</a></th><th><a href=\"product.php?form=6\">Price</a></th><th>Category</th><th>Availability</th></tr>";
$id;
while ($row = $result->fetch_assoc()) { 
$id=$row["id"];
echo "<tr><td><a href=\"productList.php?id=$id\">$id</a></td><td>".$row["price"]."</td><td>".$row["category"]."</td><td>";
if($row["quentity"]>0)
	echo "available </td></tr>";
else
	echo " not available </td></tr>";
}
echo "</table>";
 $result = $conn->query("select * from products"); 
 $total_records = $result->num_rows;
  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='product.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='product.php?page=".$i."'>".$i."</a> "; 
}
echo "<a href='product.php?page=$total_pages'>".'>|'."</a></div> "; // Goto last page	
	}
	
	if(isset($_POST["search"])){
		if(isset($_POST["numee"])){
		setcookie("rec_num", $_POST["numee"], time() + (86400 * 30), "/");
		setcookie("cat", $_POST["cir"], time() + (86400 * 30), "/");
		setcookie("ageNum", $_POST["ageNuum"], time() + (86400 * 30), "/");
		search();
		}
		else
			search();
	}
	if(isset($_POST["searchh"])){
		global $flag;
		if(isset($_POST["num"])){
		setcookie("rec_num", $_POST["num"], time() + (86400 * 30), "/");
		setcookie("from", $_POST["pric"], time() + (86400 * 30), "/");
		setcookie("to", $_POST["pri"], time() + (86400 * 30), "/");
		$flag = true ;
		search($flag);
		}
		else{
			$flag = true ;
		search($flag);
		}
			
	}
	if(isset($_GET["page"])){
		global $flag;
		$page  = $_GET["page"];
		search($page,$flag);
	}

?>
</body>
</html>