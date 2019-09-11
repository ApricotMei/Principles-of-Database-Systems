<?php
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 
session_start();
if(isset($_POST["submit"]) && $_POST["submit"] == "Accept") 
{
	$announceid = $_POST["announceid"];
	$semail = $_POST["stuemail"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");            
    $sql = "UPDATE Application SET applystatus = 'Accepted' where semail = '$semail' and aid = '$announceid'";  
    mysqli_query($con, $sql); 
    mysqli_close($con);
    header("location:jobview_company.php");
}
elseif(isset($_POST["submit"]) && $_POST["submit"] == "Decline") 
{
	$announceid = $_POST["announceid"];
	$semail = $_POST["stuemail"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");            
    $sql = "UPDATE Application SET applystatus = 'Declined' where semail = '$semail' and aid = '$announceid'";  
    mysqli_query($con, $sql); 
    mysqli_close($con);
    header("location:jobview_company.php");
}
elseif (isset($_POST["submit"]) && substr($_POST["submit"], 0, 4) == "More") 
{
	$semail = $_POST["stuemail"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");
    $sql = "select * from Student where semail = '$semail'";  
    $result = mysqli_query($con, $sql); 
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
    	$row = mysqli_fetch_array($result);
    	$arr = $row;
    } 
    $sql = "select * from Resume where semail = '$semail'";  
    $result = mysqli_query($con, $sql); 
    $num = mysqli_num_rows($result);
    if($num > 0)
    {
    	$row = mysqli_fetch_array($result);
    	$arr1 = $row;
    } 

	$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
	$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
	$smarty->assign("arr", $arr);
	$smarty->assign("arr1", $arr1);
	$smarty->assign("name", $name);
	$smarty->assign("type", $type);
	$smarty->display('resume.tpl'); 
}
else
{
	echo "<script>alert('Submission Failure! Please try again.'); history.go(-1);</script>";
}
?>