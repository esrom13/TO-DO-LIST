<?php

include "config.php";
echo $id = $_GET ['ID'];
mysqli_query($con, "DELETE FROM 'tbtodo' WHERE Id =$id");
header("location:index.php");


?>