<?php
//include 'academy_config.php';
if (isset($_POST['full_name']) && !empty($_POST['country']) && !empty($_POST['social_media']))
{
    //own config data
    
    
    $full_name = $_POST["full_name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $country = $_POST["country"];
    $social_media=$_POST["social_media"];
    $password = 'home';
    //var4 is the name and full qualifying path for the uploaded fle
    $var1="<a href=localhost/employer_ids/";
    $var2=$var1.basename($_FILES["file"]["name"]);
    $var3=">Download</a>";
    $var4=$var2.$var3;
    //end file logic

$statement="INSERT INTO account_owner_registration (full_name,phone_number,country,skype,national_id,email_address,password) VALUES ('$full_name','$phone','$country','$social_media','$var4','$email','$password')";
    $result=mysqli_query($con,$statement);
	//$row = mysqli_fetch_assoc($result);

	
	if ($statement==true and $full_name==$_POST["full_name"])
	{
 
   //redirect home with success status dialogue
   header("Location: my_account.html");
   print("<script language = 'javascript'>alert('wrong ID or wrong password.Ensure you have registered first.')</script>");
   die();
 
  }
  
  }
  
  else{
  echo"Writer registration failed. Please try again later";
  //print("<script language = 'javascript'>alert('wrong ID or wrong password.Ensure you have registered first.')</script>");
  }
  
 ?>





