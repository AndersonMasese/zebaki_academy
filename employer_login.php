<?php
session_start();
//configuration information here
 if($_SERVER["REQUEST_METHOD"] == "POST") {
$tbl_name="account_owner_registration";  


// Connect to server and select databse.
$link=mysqli_connect("$servername","$username", "$password")or die("cannot connect"); 
mysqli_select_db($link,"$dbname")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['userid']; 
$mypassword=$_POST['password'];   
/////////////////////////////////////////////////////////////////////////

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($link,$myusername);
$mypassword = mysqli_real_escape_string($link,$mypassword);

$sql="SELECT * FROM $tbl_name WHERE email_address='$myusername' and password='$mypassword'";
//$result=mysql_query($sql,$link);
$result = mysqli_query($link,"SELECT * FROM $tbl_name WHERE email_address='$myusername' and password='$mypassword'")or die(mysqli_error($link));
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
 
$_SESSION['session_variable']=$myusername;
header("Location: employer_action.php");
//echo "home";
}
else {
    
 echo "login failed";  
//print("<script language = 'javascript'>alert('wrong ID or wrong password.Ensure you have registered first.')</script>");

}

}

?>