<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";

$arr = array();
if(isset($_POST["submit"]) && $_POST["submit"] == "Send a friend request")
{
	$semail2 = $_POST["stuemail"];
	$semail1 = $_COOKIE["user"];   
	$con = mysqli_connect("localhost","root"); 
	if (!$con) 
	{
    	die('Could not connect: ' . mysqli_connect_error());
	}
	mysqli_select_db($con, "jobs");  
              
	$sql = "select * from Friendrequest where fsender = '$semail1' and freceiver = '$semail2'";  
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
    if($num > 0)  
    {  
    	$requestdate = date("Y-m-d", time());
    	$sql1 = "update Friendrequest set requeststatus = 'Unanswered', requestdate = '$requestdate' where fsender = '$semail1' and freceiver = '$semail2'";
    	$result1 = mysqli_query($con, $sql1);
    }  
    else
    {
    	$requestdate = date("Y-m-d", time());
    	$sql1 = "insert into Friendrequest (fsender, freceiver, requeststatus, requestdate) values ('$semail1','$semail2', 'Unanswered', '$requestdate')";
    	$result1 = mysqli_query($con, $sql1);
    }
    mysqli_close($con);
    Header("Location: friend.php"); 
}
?>