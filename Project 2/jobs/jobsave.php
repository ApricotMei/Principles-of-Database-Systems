<?php   

    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "Save")  
    { 
    	$cemail = $_COOKIE["user"];  
        $title = $_POST["title"]; 
        $location = $_POST["location"];
        $salary = $_POST["salary"];
        $major = $_POST["major"];
        $level = $_POST["level"];
        $description = $_POST["description"];
        if($title == "" || $location == "" || $salary == "" || $level == "" || $description == "")
        {
        	echo "<script>alert('Please complete all the information.'); history.go(-1);</script>";
        }
        else{
        $con = mysqli_connect("localhost","root"); 
        if (!$con) 
        {
            die('Could not connect: ' . mysqli_connect_error());
        }
        mysqli_select_db($con, "jobs");  
        while($aid = mt_rand(10000, 99999))
        {
        	$sql0 = "select * from Announcement where aid = '$aid'";
        	$result0 = mysqli_query($con, $sql0);
        	$num0 = mysqli_num_rows($result0);
        	if($num0 <= 0)
        	{
        		break;
        	}
        } 
        $announcedate = date("Y-m-d", time());     
        $sql = "insert into Announcement values ('$cemail', '$aid', '$title', '$location', '$salary', '$major', '$level', '$description', '$announcedate')";  
        mysqli_query($con, $sql); 
        mysqli_close($con);
        header("location:index.php");
    	}
    }    
?>