<?php
if(isset($_POST["submit"]))
{
	$bookid = substr($_POST["submit"], 11);
	$mid = $_COOKIE["userid"];
	$con = mysqli_connect("localhost","root");
	if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "library");  
              
    $sql = "select * from BookCopy where bookid = '$bookid'";  
    $result = mysqli_query($con, $sql); 
    $num = mysqli_num_rows($result);
    

    if($num > 0)
    {
    	$row = mysqli_fetch_assoc($result);
    	$copyid = $row["copyid"];
    	$_SESSION['copyid'] = $copyid;
    	setcookie("copyid", $copyid, time()+12*60*60);
    	mysqli_query($con, "DELETE FROM BookCopy WHERE copyid = '$copyid'");
    	$outtime = date("Y-m-d", time());
        $duetime = date("Y-m-d", time() + 30*24*60*60);
    	mysqli_query($con, "INSERT INTO CheckedOut (copyid, mid, checkoutDate, dueDate, status) VALUES ('$copyid', '$mid', '$outtime', '$duetime', 'Holding')");
    	mysqli_close($con);
        header("location:checkedbook.php");
    }
    else
    {
    	mysqli_close($con);
    	echo "<script>alert('This book has no copies in our library.'); history.go(-1);</script>";
    }
}
else
{
	echo "<script>alert('Submission Failure! Please try again.'); history.go(-1);</script>"; 
}
?>