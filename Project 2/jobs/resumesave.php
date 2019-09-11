<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c"; 

session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "Save")  
    { 
    	$semail = $_COOKIE["user"];  
        $sname = $_POST["sname"]; 
        $sGPA = $_POST["sGPA"];
        $slevel = $_POST["slevel"];
        $suniversity = $_POST["suniversity"];
        $smajor = $_POST["smajor"];
        $sdescription = $_POST["sdescription"];
        $rposition = $_POST["rposition"];
        $rpractice = $_POST["rpractice"];
        $rproject = $_POST["rproject"];

        $con = mysqli_connect("localhost","root"); 
        if (!$con) 
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
        mysqli_select_db($con, "jobs"); 

        mysqli_query($con,"BEGIN");     
        $sql1 = "update student set sname = '$sname', sGPA = '$sGPA', slevel = '$slevel', suniversity = '$suniversity', smajor = '$smajor', sdescription = '$sdescription' where semail = '$semail'";  
        $result1 = mysqli_query($con, $sql1); 
        $sql2 = "update resume set rposition = '$rposition', rpractice = '$rpractice', rproject='$rproject' where semail = '$semail'";
        $result2 = mysqli_query($con, $sql2);
        if($result1 && $result2)
        {
        	mysqli_query($con,"COMMIT");
        }
        else
        {
        	mysql_query("ROLLBACK");
        }
        mysqli_close($con);
        header("location:resume.php");
    }

?>
