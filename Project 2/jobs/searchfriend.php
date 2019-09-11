<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";

$arr = array();
if(isset($_POST["submit"]) && $_POST["submit"] == "Search")
{
	$keyword = $_POST["keyword"];   
    if($keyword == "")  
    { 
        echo "<script>alert('Please input a keyword.'); history.go(-1);</script>";
    } 
	$con = mysqli_connect("localhost","root"); 
	if (!$con) 
	{
    	die('Could not connect: ' . mysqli_connect_error());
	}
	mysqli_select_db($con, "jobs");  
              
	$sql = "select * from Student where semail LIKE '%$keyword%' OR sname LIKE '%$keyword%' OR slevel LIKE '%$keyword%' or suniversity LIKE '%$keyword%' or smajor LIKE '%$keyword%' or sdescription LIKE '%$keyword%'";  
	$result = mysqli_query($con, $sql); 
	$num = mysqli_num_rows($result);
	
    if($num > 0)  
    {  
        while($row = mysqli_fetch_assoc($result))
        {
        	$semail1 = $_COOKIE["user"];
        	$semail2 = $row["semail"];
        	$sql1 = "select * from Friends where semail1 = '$semail1' and semail2 = '$semail2'";
        	$sql2 = "select * from Friends where semail1 = '$semail2' and semail2 = '$semail1'";
        	$result1 = mysqli_query($con, $sql1);
        	$result2 = mysqli_query($con, $sql2);
        	$num1 = mysqli_num_rows($result1);
        	$num2 = mysqli_num_rows($result2);
        	if($num1 > 0 || $num2 > 0 || $semail1 == $semail2)
        	{
        		$row["friend"] = "yes";
        	}
        	else
        	{
        		$row["friend"] = "no";
        	}
            $arr[] = $row;
        }
    } 
    mysqli_close($con); 
}
$smarty->assign("arr", $arr);

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('friend.tpl'); 
?>