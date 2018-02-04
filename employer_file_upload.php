<?php
session_start();
//include 'academy_config.php';
function uploader(){
if (isset($_POST['description']) && !empty($_POST['format']) && !empty($_POST['terms']))
if( 1 == 1 )
{
    //configuration information here
    
    
    $description = $_POST["description"];
    $format=$_POST["format"];
    $deadline = $_POST["deadline"];
    $title = $_POST["title"];
    $terms=$_POST["terms"];
    $pages = $_POST["pages"];
    $file = $_POST["file"];
    //$session_variable = $_SESSION['id'];
    $session_variable = $_SESSION['session_variable'];
    $var1="<a href=http://www.zebaki.co.ke/academy_files/";
    $var2=$var1.basename($_FILES["file"]["name"]);
    $var3=">Download</a>";
    $var4=$var2.$var3;
    $logger_var1 = "<a href=var_log.php?carrier=";
    $logger_var2 = $logger_var1.$session_variable;
    $logger_var3 = "&title_description=";
    $logger_var4 = $logger_var2.$logger_var3.$title;
    $logger_var5 = ">Order</a>";
    $logger_varz = $logger_var4.$logger_var5;

    //end file logic
    //use the same session variable to build a link to insert into var_log column
    

$statement="INSERT INTO employer_file_uploads (session_variable,title,order_details1,format1,pages1,file1,pay_terms,deadline,var_log) VALUES 
('$session_variable','$title','$description','$format','$pages','$var4','$terms','$deadline','$logger_varz')";
    $result=mysqli_query($con,$statement);
	//$row = mysqli_fetch_assoc($result);

	
	if ($statement == true and $description == $_POST['description'])
	{
 
   //redirect home with success status dialogue
   header("Location: employer_action.php");
   print("<script language = 'javascript'>alert('wrong ID or wrong password.Ensure you have registered first.')</script>");
   die();
 
  }
  
  }
  
  else{
  echo"File upload operation failed";
  //print("<script language = 'javascript'>alert('wrong ID or wrong password.Ensure you have registered first.')</script>");
  }
}



/////////////

$target_dir = "academy_files/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "docx") {
    echo "Sorry, only pdf and docx files are allowed. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
   
    $mylink=$target_file;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $mylink)) {
        //call uploader function within this statement
        
     //  uploader();
       
    } else {
        echo "Sorry, unknown errors have occured. Zebaki Academy will consult server error logs for a fix";
    }
}
  
 ?>





