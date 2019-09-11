<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Search Page</title>
<style type="text/css">
    .footer{
        position: fixed;
        bottom: 10px;
        width: 100%;
        margin-left: : auto;
        margin-right: auto;
    }
    .content{
        background-color: #DCDCDC;
        width: 100%;
        height: 100%;
        position: fixed;
        margin-top: 3.5%;
        margin-left: -1px;
    }
</style>
</head>
<body>
    <div class="header" style="background-color: #FFFFF; width: 100%; height: 4%; position: fixed; margin-top: -1px; margin-left: -1px;">
        <p align="center" style="font-family: Times; font-size: larger; font-weight: bold;">Books Management System</p>
    </div>
    <div class="content" align="center">
        <!--中部-->
        <div class="middle">
            <p style="position: fixed; margin-top: 4%; margin-left: 35.5%; font-family: Times; font-size: 20; font-weight: bold;">You had checked out books as follows:</p></div>
    </div>
            <div align="left" style="background-color: #FFFFFF; width: 680px; height: 500%; position: fixed; margin-top: 11%; margin-left: 35%;"></div>
            	<?php
            	    $con = mysqli_connect("localhost","root"); 
            		if (!$con) 
            		{
                		die('Could not connect: ' . mysqli_connect_error());
            		}
            		mysqli_select_db($con, "library");  
              		$sql1 = "select dueDate, status from CheckedOut";
              		$result1 = mysqli_query($con, $sql1);
              		$num1 = mysqli_num_rows($result1);
              		if($num1 > 0)
              		{
              			while($row1 = mysqli_fetch_assoc($result1))
              			{
              				if(time() > $row1["dueDate"] && $row1["status"] == "Holding")
              				{
              					$sql2 = "update CheckedOut set status = 'Overdue'";
              					mysqli_query($con, $sql2);
              				}
              			}
              		}
              		$userid = $_COOKIE["userid"];
            		$sql3 = "select * from CheckedOut where mid = '$userid'";  
            		$result3 = mysqli_query($con, $sql3); 
            		$num3 = mysqli_num_rows($result3);
            		
            		if($num3 > 0){
            			$inc = 27;
            			while($row3 = mysqli_fetch_assoc($result3)){
            				$copyid = $row3["copyid"];
            				$checkoutDate = $row3["checkoutDate"];
            				$dueDate = $row3["dueDate"];
            				$status = $row3["status"];
            				echo "
            				<div style=\"position:absolute; left:37%; top:$inc%\";>
            				<form id= \"$copyid\">
            					<table border=\"0\">
            					<tr><td style=\"font-family: Times; font-size: 27px; font-weight: bold;\">Copy ID: $copyid</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Check Out Date: $checkoutDate</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Due Date: $dueDate</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Status: $status</td></tr>
            					</table>
            				</form>
            				</div>
            				";
            				$inc = $inc + 30;
            			}
            		}
            		mysqli_close($con);
            	?>
        <!--    </div>
        </div>-->
        <!--脚部-->

    <!--</div>-->
    <div class="footer">
    <small>Copyright &copy; All Right Reserved.
    </div>
</body>
</html>