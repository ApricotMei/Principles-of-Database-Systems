<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 

session_start();
if(isset($_POST["submit"]) || isset($_COOKIE["acid"]))  
{
	if(isset($_POST["submit"]))
	{
		$announceid = substr($_POST["submit"], 19);
		setcookie("acid", $announceid, time()+24*60*60, "/");
	}
	else
	{
		$announceid = $_COOKIE["acid"];
		setcookie("acid", '', time()-360000, "/");
	}
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
    	$arr = $row;
    }  
    $smarty->assign("arr", $arr);
    $smarty->assign("announceid", $announceid);


    $sql = "select * from Application where aid = '$announceid'";
    $result = mysqli_query($con, $sql); 
    $num = mysqli_num_rows($result);
    $arr1 = array();
    if($num > 0)
    {
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$email = $row["semail"];
    		$sql1 = "select * from Student where semail = '$email'";
    		$result1 = mysqli_query($con, $sql1);
    		$num1 = mysqli_num_rows($result1);
    		$row1 = mysqli_fetch_array($result1);
    		$row1["applystatus"] = $row["applystatus"];
    		$arr1[] = $row1;
    	}
    }
    $smarty->assign("arr1", $arr1);
    mysqli_close($con);
}

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('jobview_company.tpl'); 
?>