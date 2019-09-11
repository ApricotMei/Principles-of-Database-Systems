<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 
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
?>