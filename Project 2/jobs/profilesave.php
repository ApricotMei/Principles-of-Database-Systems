<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 

session_start();
if($_COOKIE["type"] == "Student")
{
    if(isset($_POST["submit"]) && $_POST["submit"] == "Save")  
    { 
    	$semail = $_COOKIE["user"];  
        $sname = $_POST["sname"]; 
        $sGPA = $_POST["sGPA"];
        $slevel = $_POST["slevel"];
        $suniversity = $_POST["suniversity"];
        $smajor = $_POST["smajor"];
        $sdescription = $_POST["sdescription"];

        $con = mysqli_connect("localhost","root"); 
        if (!$con) 
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
        mysqli_select_db($con, "jobs");      
        $sql = "update student set sname = '$sname', sGPA = '$sGPA', slevel = '$slevel', suniversity = '$suniversity', smajor = '$smajor', sdescription = '$sdescription' where semail = '$semail'";  
        mysqli_query($con, $sql); 
        mysqli_close($con);
        header("location:profile.php");
    }
}
else
{
    if(isset($_POST["submit"]) && $_POST["submit"] == "Save")  
    { 
    	$cemail = $_COOKIE["user"];  
        $cname = $_POST["cname"]; 
        $cindustry = $_POST["cindustry"];
        $caddress = $_POST["caddress"];
        $cdescription = $_POST["cdescription"];

        $con = mysqli_connect("localhost","root"); 
        if (!$con) 
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
        mysqli_select_db($con, "jobs");      
        $sql = "update company set cname = '$cname', cindustry = '$cindustry', caddress = '$caddress', cdescription = '$cdescription' where cemail = '$cemail'";  
        mysqli_query($con, $sql); 
        mysqli_close($con);
        header("location:profile.php");
    }
}

?>