<?php

$LIST = $_POST['list'];

include "config.php";

mysql_query($con, "INSERT INTO 'tbtodo'("$list") VALUES (''$LIST)");

header("location:index.php");



?>