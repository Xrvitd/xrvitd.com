<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp); 
      if(move_uploaded_file($_FILES["file"]["tmp_name"], "/root/" . "1.jpg"))
	  {
		 header("Location: http://www.xrvitd.com/t1.html"); 
	  }
     

?>