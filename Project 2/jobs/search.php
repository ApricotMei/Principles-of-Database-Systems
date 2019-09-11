<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";  

    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "Search")  
    {  
        $keyword = $_POST["keyword"];   
        if($keyword == "")  
        { 
            echo "<script>alert('Please input a keyword.'); history.go(-1);</script>";
        }  
        else  
        {
        	if(isset($_COOKIE["type"]) && $_COOKIE["type"] == "Company")
        	{
            	$con = mysqli_connect("localhost","root"); 
            	if (!$con) 
            	{
                	die('Could not connect: ' . mysqli_connect_error());
            	}
            	mysqli_select_db($con, "jobs");  
              
            	$sql = "select * from Student where semail LIKE '%$keyword%' OR sname LIKE '%$keyword%' OR slevel LIKE '%$keyword%' or suniversity LIKE '%$keyword%' or smajor LIKE '%$keyword%' or sdescription LIKE '%$keyword%'";  
            	$result = mysqli_query($con, $sql); 
            	$num = mysqli_num_rows($result);
            	mysqli_close($con);
            	$arr = array();
            	if($num > 0)  
            	{  
            		while($row = mysqli_fetch_assoc($result))
            		{
            			$arr[] = $row;
            		}
            	}  
            	$smarty->assign("arr", $arr);
        	}
        	else
        	{
            	$con = mysqli_connect("localhost","root"); 
            	if (!$con) 
            	{
                	die('Could not connect: ' . mysqli_connect_error());
            	}
            	mysqli_select_db($con, "jobs");
            	$semail = isset($_COOKIE["user"])?$_COOKIE["user"]:"NONE";
					$sql = "select * from Announcement where jobmajor LIKE '%$keyword%' or jobtitle LIKE '%$keyword%' or joblocation LIKE '%$keyword%' or joblevel LIKE '%$keyword%' or jobdescription LIKE '%$keyword%'";
					$result = mysqli_query($con, $sql);
					$num = mysqli_num_rows($result);
					$arr2 = array();
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
    						$result3 = mysqli_query($con, "select * from Company where cname LIKE '%$keyword%'");
    						$num3 = mysqli_num_rows($result3);
    						if($num3 <= 0)
    						{
    							$arr2[] = $row;
    						}
    					}
					}
					$smarty->assign("arr2", $arr2);
					$semail = isset($_COOKIE["user"])?$_COOKIE["user"]:"NONE";
					$sql = "select * from Company where cname LIKE '%$keyword%'";
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
        	}
        }  
    }  



$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('search.tpl'); 
?>