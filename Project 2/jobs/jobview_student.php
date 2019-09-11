<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 

session_start();
if(isset($_POST["submit"]) || isset($_COOKIE["asid"]))  
{
	if(isset($_POST["submit"]))
	{
		$announceid = substr($_POST["submit"], 19);
		setcookie("asid", $announceid, time()+24*60*60, "/");
	}
	else
	{
		$announceid = $_COOKIE["asid"];
		setcookie("asid", '', time()-360000, "/");
	}
	$semail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");  
              
    $sql = "select * from Announcement where aid = '$announceid'";  
    $result = mysqli_query($con, $sql); 
    $num = mysqli_num_rows($result);
    if($num > 0)  
    {  
    	$row = mysqli_fetch_array($result);
    	$sql1 = "select * from Company where cemail = '$row[0]'";
    	$result1 = mysqli_query($con, $sql1);
    	$row1 = mysqli_fetch_array($result1);
    	$row["company"] = $row1[2];
    	$sql2 = "select * from Application where semail = '$semail' and aid = '$announceid'";
    	$result2 = mysqli_query($con, $sql2);
    	$num2 = mysqli_num_rows($result2);
    	if($num2 > 0)
    	{
    		$row2 = mysqli_fetch_array($result2);
    		$row["status"] = $row2["applystatus"];
    	}
    	else
    	{
    		$row["status"] = "Noapply";
    	}

    	$arr = $row;
    }  
    $smarty->assign("arr", $arr);
    $smarty->assign("announceid", $announceid);
}

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('jobview_student.tpl'); 
?>