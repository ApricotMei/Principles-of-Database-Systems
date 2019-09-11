<?php  
    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == " search")  
    {  
        $user = $_POST["username"];  
        $key = $_POST["keyword"];  
        if($user == "" || $user == " your id here. ")  
        {  
            echo "<script>alert('Please input your id!'); history.go(-1);</script>";
        }  
        elseif ($key == "") {
            echo "<script>alert('Please input a keyword.'); history.go(-1);</script>";
        }
        else  
        {  
            $con = mysqli_connect("localhost","root"); 
            if (!$con) 
            {
                die('Could not connect: ' . mysqli_connect_error());
            }
            mysqli_select_db($con, "library");  
              
            $sql = "select * from Member where mid = '$user'";  
            $result = mysqli_query($con, $sql); 
            $num = mysqli_num_rows($result);
            mysqli_close($con);
            if($result)  
            {  
                $row = mysqli_fetch_array($result);
                mysqli_free_result($result);  
                $_SESSION['userid'] = $row[0];
                $_SESSION['username'] = $row[1];
                $_SESSION['keyword'] = $key;
                $_SESSION['islogin'] = 1;
                setcookie("userid", $row[0], time()+12*60*60);
                setcookie("username", $row[1], time()+12*60*60);
                setcookie("keyword", $key, time()+12*60*60);
                header("location:search.php");
            }  
            else  
            {  
                echo "<script>alert('Please input a correct id!');history.go(-1);</script>";  
            } 
        }  
    }  
    else  
    {  
        echo "<script>alert('Submission Failure! Please try again.'); history.go(-1);</script>";  
    }  
  
?>  