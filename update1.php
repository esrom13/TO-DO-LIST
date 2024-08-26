<?php

include "config.php"
$list =$_POST['list'];
$ID =$_POST['id'];
mysqli_query($con,"UPDATE 'tbtodo' SET 'list' ='$list'  WHERE Id=$ID");
header("location:index.php")
?>