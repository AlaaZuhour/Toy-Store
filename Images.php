<?php
$target_dir = "itemsImages/";
$target_file1 = $target_dir.basename($_FILES["img1"]["name"]);
$target_file2 = $target_dir.basename($_FILES["img2"]["name"]);
$target_file3 = $target_dir.basename($_FILES["img3"]["name"]);
 if (move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["img1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	if (move_uploaded_file($_FILES["img2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["img2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	if (move_uploaded_file($_FILES["img3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["img3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>