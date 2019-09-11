<?php    
    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "Signin")  
    {  
        $user = $_POST["email"];  
        $passwd = $_POST["password"]; 
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
            	mysqli_close($con);
            	if($num > 0)  
            	{  
                	$row = mysqli_fetch_array($result);
                	mysqli_free_result($result);  
                	if($row[1] == $passwd)
                	{
                    	setcookie("user", $row[0], time()+12*60*60, "/");
                		setcookie("passwd", $row[1], time()+12*60*60, "/");
                		setcookie("name", $row[2], time()+12*60*60, "/");
                		setcookie("type", "Student", time()+12*60*60, "/"); 
                		header("location:index.php");           		
                	}
                	else
                	{
                		echo "<script>alert('Your email or password is wrong!');history.go(-1);</script>";
                	}

            	}  
            	else  
            	{  
                	echo "<script>alert('Your email or password is wrong!');history.go(-1);</script>";  
            	} 
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
            	mysqli_close($con);
            	if($num > 0)  
            	{  
                	$row = mysqli_fetch_array($result);
                	mysqli_free_result($result);
                	if($row[1] == $passwd)
                	{
                    	setcookie("user", $row[0], time()+12*60*60, "/");
                		setcookie("passwd", $row[1], time()+12*60*60, "/");
                		setcookie("name", $row[2], time()+12*60*60, "/");
                		setcookie("type", "Company", time()+12*60*60, "/"); 
                		header("location:index.php");           		
                	} 
                	else{
                		echo "<script>alert('Your email or password is wrong!');history.go(-1);</script>"; 
                	} 

            	}  
            	else  
            	{  
                	echo "<script>alert('Your email or password is wrong!');history.go(-1);</script>";  
            	} 
        	}
        }  
    }    
?>