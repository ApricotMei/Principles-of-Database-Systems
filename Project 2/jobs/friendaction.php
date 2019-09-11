<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";

$arr = array();
if(isset($_POST["submit"]) && $_POST["submit"] == "Accept")
{
	$semail2 = $_POST["stuemail"];
	$semail1 = $_COOKIE["user"];   
	$con = mysqli_connect("localhost","root"); 
	if (!$con) 
	{
    	die('Could not connect: ' . mysqli_connect_error());
	}
	mysqli_select_db($con, "jobs");  
              
	$sql = "select * from Friendrequest where fsender = '$semail2' and freceiver = '$semail1'";  
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
    if($num > 0)  
    {  
    	$sql1 = "update Friendrequest set requeststatus = 'Accepted' where fsender = '$semail2' and freceiver = '$semail1'";
    	$result1 = mysqli_query($con, $sql1);
    	$frienddate = date("Y-m-d", time());
    	$sql2 = "insert into friends (semail1, semail2, frienddate) values ('$semail1', '$semail2', '$frienddate')";
    	$sql3 = "insert into friends (semail1, semail2, frienddate) values ('$semail2', '$semail1', '$frienddate')";
    	$result2 = mysqli_query($con, $sql2);
    	$result3 = mysqli_query($con, $sql3);
    }  
    mysqli_close($con);
    Header("Location: myfriends.php"); 
}
elseif(isset($_POST["submit"]) && $_POST["submit"] == "Decline")
{
	$semail2 = $_POST["stuemail"];
	$semail1 = $_COOKIE["user"];   
	$con = mysqli_connect("localhost","root"); 
	if (!$con) 
	{
    	die('Could not connect: ' . mysqli_connect_error());
	}
	mysqli_select_db($con, "jobs");  
              
	$sql = "select * from Friendrequest where fsender = '$semail2' and freceiver = '$semail1'";  
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
    if($num > 0)  
    {  
    	$sql1 = "update Friendrequest set requeststatus = 'Declined' where fsender = '$semail2' and freceiver = '$semail1'";
    	$result1 = mysqli_query($con, $sql1);
    }  
    mysqli_close($con);
    Header("Location: myfriends.php"); 
}
?>