<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Start Page</title>
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
            <form id="loginform" action="loginaction.php" method="post">
                <table border="0" style="position: fixed; margin-top: 15%; margin-left: 35%;">
                    <tr>
                        <td>
                            <input type="text" id="name" name="username" required="required" style="width: 200px; height: 25px;"
                            value="<?php echo isset($_COOKIE["userid"])?$_COOKIE["userid"]:" your id here. ";?>">
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><input type="text" id="keyword" name="keyword" style="width: 600px; height: 30px;" /></td>
                        <td><input type="submit" name="submit" value=" search" style="height: 35px; width: 70px;" /></td>
                    </tr>
                </table>
            </form>
        </div>
        <!--脚部-->
        <div class="footer">
        <small>Copyright &copy; All Right Reserved.
        </div>
    </div>
</body>
</html>

