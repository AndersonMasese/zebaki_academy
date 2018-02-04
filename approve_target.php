<?php

$title = $_GET['title'];
$user = $_GET['session_variable'];
$query  = "SELECT deadline,title,user_name,session_variable,pay,format,file1 FROM writer_waitingapproval WHERE user_name='$user' AND title='$title'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$owner = $row['session_variable'];//employer name
$deadline = $row['deadline'];
$title1 = $row['title'];
$pay_terms = $row['pay'];
$format = $row['format'];
$thisfile = $row['file1'];
$session_variable = $row['user_name'];
//writer ongoing orders should also insert some constant string varible to act as link
//when the writer wants to submit finished works.




//$submitted = "<a href='writer_submission.php?session_variable=".$session_variable."&title=".$title."'>submit</a>";
//insert the same data into another different table which then gives an update for use in confirmed orders column

$query2 = "INSERT INTO approved_orders(user_name,deadline,title,session_variable,terms,format,file1) VALUES
('$session_variable','$deadline','$title1','$owner','$pay_terms','$format','$thisfile')";
$result2 =mysqli_query($con,$query2);
$query3 = "DELETE FROM writer_ongoing_orders WHERE user_name='$session_variable' AND title='$title'";
$result3 = mysqli_query($con,$query3);
//create a third query that inserts data into the employer ongoing orders
$query4 = "DELETE FROM employer_ongoing_orders WHERE session_variable='$owner' AND title='$title'";
$result4 = mysqli_query($con,$query4);

$query5 = "DELETE FROM writer_waitingapproval WHERE user_name='$session_variable' AND title='$title'";
$result5 = mysqli_query($con,$query5);
/*$query4 = "INSERT INTO employer_ongoing_orders(deadline,title,session_variable,pay_terms,format,file1,var_log,order_detail) VALUES
('$deadline','$title1','$owner','$pay_terms','$format','$thisfile','$var_log','$order_details')";
$result4 = mysqli_query($con,$query4);*/

header('Location:approve_writers.php');
//insert these values into the user's ongoing tasks.
//insert values into owner's ongoing orders...this will be read from same table above to present an abstracted row/columns
//delete values from available orders.
// header("Location: writer_ongoing_orders.php");
?>