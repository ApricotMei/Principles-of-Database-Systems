<?php
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 
session_start();
if(isset($_POST["submit"]) && $_POST["submit"] == "Follow") 
{
	$cemail = $_POST["cemail"];
	$semail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs"); 
    $date = date("Y-m-d", time());           
    $sql = "insert into Following (semail, cemail, followdate) values ('$semail', '$cemail', '$date')";  
    mysqli_query($con, $sql); 
    mysqli_close($con);
    header("location:jobaction_student.php");
}
else
{
	echo "<script>alert('Submission Failure! Please try again.'); history.go(-1);</script>";
}
?>