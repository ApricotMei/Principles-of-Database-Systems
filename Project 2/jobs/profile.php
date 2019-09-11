<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";  

session_start();
if($_COOKIE["type"] == "Company")
{
	$cemail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");
    $sql = "select * from Company where cemail = '$cemail'";  
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result);
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
	$semail = $_COOKIE["user"];
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

	$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
	$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
	$smarty->assign("arr", $arr);
	$smarty->assign("name", $name);
	$smarty->assign("type", $type);
	$smarty->display('profile.tpl'); 
}
?>