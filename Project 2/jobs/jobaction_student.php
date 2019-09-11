<?php
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 
session_start();
if(isset($_POST["submit"]) && substr($_POST["submit"], 0, 5) == "Apply") 
{
	$announceid = substr($_POST["submit"], 6);
	$semail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");  
    $applydate = date("Y-m-d", time());          
    $sql = "insert into Application values ('$semail', '$announceid', 'Unanswered', '$applydate')";  
    mysqli_query($con, $sql); 
    mysqli_close($con);
    header("location:jobview_student.php");
}
elseif ((isset($_POST["submit"]) && substr($_POST["submit"], 0, 3) == "See") || isset($_COOKIE["scemail"])) 
{
	if(isset($_COOKIE["scemail"]))
	{
		$cemail = $_COOKIE["scemail"];
		setcookie("scemail", '', time()-360000, "/");
	}
	else
	{
		$cemail = substr($_POST["submit"], 27);
		setcookie("scemail", $cemail, time()+24*60*60, "/");
	}
	$semail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");
    $sql = "select * from Company where cemail = '$cemail'";  
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result);
    $result2 = mysqli_query($con, "select * from Following where semail = '$semail' and cemail = '$cemail'");
    $num2 = mysqli_num_rows($result2);
    if($num2 > 0)
    {
    	$row["status"] = "Followed";
    }
    else
    {
    	$row["status"] = "Unfollow";
    }
    $arr1 = $row;

	$sql = "select * from Announcement where cemail = '$cemail'"; 
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
	$arr2 = array();
	if($num > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
    		$result2 = mysqli_query($con, "SELECT * FROM Company where cemail = '$cemail'");
    		$num2 = mysqli_num_rows($result2);
    		if($num2 > 0)
    		{
    			$row2 = mysqli_fetch_array($result2);
    			$row["company"] = $row2[2];
    		}
			$arr2[] = $row;
		}
	}  
	$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
	$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
	$smarty->assign("arr1", $arr1);
	$smarty->assign("arr2", $arr2);
	$smarty->assign("name", $name);
	$smarty->assign("type", $type);
	$smarty->display('profile_company.tpl'); 
}
else
{
	echo "<script>alert('Submission Failure! Please try again.'); history.go(-1);</script>";
}
?>