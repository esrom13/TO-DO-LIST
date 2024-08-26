<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="device-width, initial-scale=1.0">
<title>update</title>
<link href="https://cdn.jsdelive.net/npm/bootstraps@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">




<head>

<?php

$id = $_GET['ID']
include "config.php";
$Rdata = mysqli_query($con,"select * from tbtodo where Id = $id");
$data = mysqli_fetch_array($rawData);


?>

<body class="bg-info">


<form action="insert.php" method="POST">

<div class="container">

    <div class="row justify-content-center fon m-auto shadow bg-white mt-3-py-3 col-md-6"  >
        <h3 text-center text-primary font-monospace>Update</h3>
        <div class="col-10">
            <input style="text" value="<?php echo $data['list']?>" name="" class="form-control">
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary">Update</button>
            <input type="hidden"name="id" value="<?php echo $data['Id']?>">
        </div>


    </div>

</div>

</form>

</body>

</html>