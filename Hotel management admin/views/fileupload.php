<?php 


	$des = "../image/upload/".$_FILES["myfile"]["name"];

	
	$src = $_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($src, $des)){
		echo "Done";
	}else{
		echo "Error";
	}
?>
