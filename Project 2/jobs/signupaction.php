<?php   

    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "Signup")  
    {  
        $user = $_POST["email"];  
        $passwd = $_POST["password"]; 
        $username = $_POST["username"];
        if($user == "")  
        { 
            echo "<script>alert('Please input your email address.'); history.go(-1);</script>";
        }  
        elseif ($passwd == "") {
            echo "<script>alert('Please input your password.'); history.go(-1);</script>";
        }
        else  
        {
        	if(isset($_POST["type"]) && $_POST["type"] == "stu")
        	{
            	$con = mysqli_connect("localhost","root"); 
            	if (!$con) 
            	{
                	die('Could not connect: ' . mysqli_connect_error());
            	}
            	mysqli_select_db($con, "jobs");  
              
            	$sql = "select * from Student where semail = '$user'";  
            	$result = mysqli_query($con, $sql); 
            	$num = mysqli_num_rows($result);
            	
            	if($num > 0)  
            	{  
            		echo "<script>alert('Your email has been registered.');history.go(-1);</script>";
            	}  
            	else  
            	{  
                	mysqli_free_result($result); 
                	mysqli_query($con, "INSERT INTO Student (semail, spassword, sname) VALUES ('$user', '$passwd', '$username')");
                	mysqli_query($con, "INSERT INTO Resume (semail) VALUES ('$user')");
                	setcookie("user", $user, time()+12*60*60, "/");
                	setcookie("passwd", $passwd, time()+12*60*60, "/");
                	setcookie("name", $username, time()+12*60*60, "/");
                	setcookie("type", "Student", time()+12*60*60, "/"); 
                	header("location:index.php");         	  
            	} 
            	mysqli_close($con);
        	}
        	else
        	{
            	$con = mysqli_connect("localhost","root"); 
            	if (!$con) 
            	{
                	die('Could not connect: ' . mysqli_connect_error());
            	}
            	mysqli_select_db($con, "jobs");  
              
            	$sql = "select * from Company where cemail = '$user'";  
            	$result = mysqli_query($con, $sql); 
            	$num = mysqli_num_rows($result);
            	
            	if($num > 0)  
            	{  
            		echo "<script>alert('Your email has been registered.');history.go(-1);</script>";
            	}  
            	else  
            	{  
                	mysqli_free_result($result); 
                	mysqli_query($con, "INSERT INTO Company (cemail, cpassword, cname) VALUES ('$user', '$passwd', '$username')");
                	setcookie("user", $user, time()+12*60*60, "/");
                	setcookie("passwd", $passwd, time()+12*60*60, "/");
                	setcookie("name", $username, time()+12*60*60, "/");
                	setcookie("type", "Company", time()+12*60*60, "/"); 
                	header("location:index.php");         	  
            	} 
            	mysqli_close($con);
        	}
        }  
    }   
 
?>
