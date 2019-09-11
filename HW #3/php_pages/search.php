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
        <div class="middle" style="background-color: #DCDCDC; width: 100%; height: 4%; position: fixed; margin-top: -1px; margin-left: -1px;"></div>
            <form id="loginform" action="loginaction.php" method="post">
                <table border="0" style="position: fixed; margin-top: 5.5%; margin-left: 35%;">
                    <tr>
                        <td>
                            <input type="text" id="name" name="username" required="required" style="width: 200px; height: 25px;"
                            value="<?php echo isset($_COOKIE["userid"])?$_COOKIE["userid"]:" your id here. ";?>">
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><input type="text" id="keyword" name="keyword" style="width: 600px; height: 30px;" value="<?php echo isset($_COOKIE["keyword"])?$_COOKIE["keyword"]:"";?>" /></td>
                        <td><input type="submit" name="submit" value=" search" style="height: 35px; width: 70px;" /></td>
                    </tr>
                </table>
            </form>
            <p style="position: fixed; margin-top: 11%; margin-left: 35.5%; font-family: Times; font-size: 20; font-weight: bold;">The search results are as follows:</p>
        </div>
            <div align="left" style="background-color: #FFFFFF; width: 680px; height: 500%; position: fixed; margin-top: 17%; margin-left: 35%;"></div>
            	<?php
            		$keyvalue = $_COOKIE["keyword"];
            	    $con = mysqli_connect("localhost","root"); 
            		if (!$con) 
            		{
                		die('Could not connect: ' . mysqli_connect_error());
            		}
            		mysqli_select_db($con, "library");  
              
            		$sql = "select * from Book where booktitle LIKE '%$keyvalue%' OR category LIKE '%$keyvalue%'";  
            		$result = mysqli_query($con, $sql); 
            		$num = mysqli_num_rows($result);
            		
            		if($num > 0){
                        $inc = 39;
            			while($row = mysqli_fetch_assoc($result)){
            				$bookid = $row["bookid"];
            				$booktitle = $row["booktitle"];
            				$category = $row["category"];
            				$author = $row["author"];
            				$publishdate = $row["publishdate"];
            				echo "
                            <div style=\"position:absolute; left:37%; top:$inc%\";>
            				<form id=\"$bookid\" action=\"checkout.php\" method=\"post\">
            					<table border=\"0\">
            					<tr><td style=\"font-family: Times; font-size: 27px; font-weight: bold;\">$booktitle</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Book ID: $bookid</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Category: $category</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Author: $author</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Publish Date: $publishdate</td></tr>
            					<tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\"><input type=\"submit\" name=\"submit\" value=\"Check Out: $bookid\" style=\"height: 25px; width: 200px;\" /></td></tr>
            					</table>
            				</form>
                            </div>
            				";
                            $inc = $inc + 30;
            			}
            		}
                    else
                    {
                        $sql = "select * from Book";
                        $result = mysqli_query($con, $sql);
                        $num = mysqli_num_rows($result);
                        $inc = 39;
                        while($row = mysqli_fetch_assoc($result)){
                            $bookid = $row["bookid"];
                            $booktitle = $row["booktitle"];
                            $category = $row["category"];
                            $author = $row["author"];
                            $publishdate = $row["publishdate"];
                            echo "
                            <div style=\"position:absolute; left:37%; top:$inc%\";>
                            <form id=\"$bookid\" action=\"checkout.php\" method=\"post\">
                                <table border=\"0\">
                                <tr><td style=\"font-family: Times; font-size: 27px; font-weight: bold;\">$booktitle</td></tr>
                                <tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Book ID: $bookid</td></tr>
                                <tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Category: $category</td></tr>
                                <tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Author: $author</td></tr>
                                <tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\">Publish Date: $publishdate</td></tr>
                                <tr><td style=\"font-family: Times; font-size: 20px; font-weight: normal;\"><input type=\"submit\" name=\"submit\" value=\"Check Out: $bookid\" style=\"height: 25px; width: 200px;\" /></td></tr>
                                </table>
                            </form>
                            </div>
                            ";
                            $inc = $inc + 30;
                        }
                    }
                    mysqli_close($con);
            	?>
            <!--</div>-->
        <!--</div>-->
        <!--脚部-->

    <!--</div>-->
    <div class="footer">
    <small>Copyright &copy; All Right Reserved.
    </div>
</body>
</html>