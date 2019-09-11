<?php
    setcookie("user", '', time()-360000, "/");
    setcookie("passwd", '', time()-360000, "/");
    setcookie("name", '', time()-360000, "/");
    setcookie("type", '', time()-360000, "/");

header("location:index.php");
?>