<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";


$con = mysqli_connect("localhost","root"); 
if (!$con) 
{
    die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($con, "jobs");  
//not sign in              
$sql1 = "select * from Announcement";  
$result1 = mysqli_query($con, $sql1); 
$num1 = mysqli_num_rows($result1);
$arr1 = array();
if($num1 > 0)  
{  
     
    while($row1 = mysqli_fetch_assoc($result1))
    {
    	$email = $row1["cemail"];
    	$result2 = mysqli_query($con, "SELECT * FROM Company where cemail = '$email'");
    	$num2 = mysqli_num_rows($result2);
    	if($num2 > 0)
    	{
    		$row2 = mysqli_fetch_array($result2);
    		$row1["company"] = $row2[2];
    	}
    	$arr1[] = $row1;
    }
    
}  
$smarty->assign("arr1", $arr1);

//student sign in
$semail = isset($_COOKIE["user"])?$_COOKIE["user"]:"NONE";
$sql = "select * from Student where semail = '$semail'"; 
$result = mysqli_query($con, $sql); 
$num = mysqli_num_rows($result);
$arr2 = array();
if($num > 0)
{
	$row = mysqli_fetch_array($result);
	if($row[6] != "")
	{
		$sql = "select * from Announcement where jobmajor LIKE '%$row[6]%'";
		$result = mysqli_query($con, $sql);
		$num = mysqli_num_rows($result);
		if($num > 0)
		{
    		while($row = mysqli_fetch_assoc($result))
    		{
    			$email = $row["cemail"];
    			$result2 = mysqli_query($con, "SELECT * FROM Company where cemail = '$email'");
    			$num2 = mysqli_num_rows($result2);
    			if($num2 > 0)
    			{
    				$row2 = mysqli_fetch_array($result2);
    				$row["company"] = $row2[2];
    			}
    			$result3 = mysqli_query($con, "SELECT * FROM Following where cemail = '$email' and semail = '$semail'");
    			$num3 = mysqli_num_rows($result3);
    			if($num3 <= 0)
    			{
    				$arr2[] = $row;
    			}
    		}
		}
	}
}  
$smarty->assign("arr2", $arr2);

$semail = isset($_COOKIE["user"])?$_COOKIE["user"]:"NONE";
$sql = "select * from Following where semail = '$semail'"; 
$result = mysqli_query($con, $sql); 
$num = mysqli_num_rows($result);
$arr3 = array();
if($num > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$cemail = $row["cemail"];
		$sql2 = "select * from Announcement where cemail = '$cemail'";
		$result2 = mysqli_query($con, $sql2);
		$num2 = mysqli_num_rows($result2);
		if($num2 > 0)
		{
    		while($row2 = mysqli_fetch_assoc($result2))
    		{
    			$result3 = mysqli_query($con, "SELECT * FROM Company where cemail = '$cemail'");
    			$num3 = mysqli_num_rows($result3);
    			if($num3 > 0)
    			{
    				$row3 = mysqli_fetch_array($result3);
    				$row2["company"] = $row3[2];
    			}
    			$arr3[] = $row2;
    		}
		}
	}
}  
$smarty->assign("arr3", $arr3);

//company sign in
$cemail = isset($_COOKIE["user"])?$_COOKIE["user"]:"NONE";
$sql = "select * from Announcement where cemail = '$cemail'"; 
$result = mysqli_query($con, $sql); 
$num = mysqli_num_rows($result);
$arr4 = array();
if($num > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
    	$result3 = mysqli_query($con, "SELECT * FROM Company where cemail = '$cemail'");
    	$num3 = mysqli_num_rows($result3);
    	if($num3 > 0)
    	{
    		$row3 = mysqli_fetch_array($result3);
    		$row["company"] = $row3[2];
    	}
		$arr4[] = $row;
	}
}  
$smarty->assign("arr4", $arr4);

mysqli_close($con);

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('index.tpl'); 
?>