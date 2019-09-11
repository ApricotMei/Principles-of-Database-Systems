<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";

$arr1 = array();
$arr2 = array();

	$semail1 = $_COOKIE["user"];   
	$con = mysqli_connect("localhost","root"); 
	if (!$con) 
	{
    	die('Could not connect: ' . mysqli_connect_error());
	}
	mysqli_select_db($con, "jobs");  
              
	$sql = "select * from Friends where semail1 = '$semail1'";  
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
    if($num > 0)  
    {  
        while($row = mysqli_fetch_assoc($result))
        {
        	$semail2 = $row["semail2"];
        	$sql1 = "select * from Student where semail = '$semail2'";
        	$result1 = mysqli_query($con, $sql1);
        	$num1 = mysqli_num_rows($result1);
        	$row1 = mysqli_fetch_array($result1);
            $arr1[] = $row1;
        }
    } 

    $sql = "select * from Friendrequest where freceiver = '$semail1'";
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
    if($num > 0)  
    {  
        while($row = mysqli_fetch_assoc($result))
        {
        	$semail2 = $row["fsender"];
        	$sql1 = "select * from Student where semail = '$semail2'";
        	$result1 = mysqli_query($con, $sql1);
        	$num1 = mysqli_num_rows($result1);
        	$row1 = mysqli_fetch_array($result1);
        	if($row["requeststatus"] == "Unanswered")
        	{
        		$arr2[] = $row1;
        	}
        }
    } 
    mysqli_close($con); 


$smarty->assign("arr1", $arr1);
$smarty->assign("arr2", $arr2);

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('myfriends.tpl'); 
?>