<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link href="https://cdn.jsdelive.net/npm/bootstraps@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pN1yT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6d230aa9b6.js" crossorigin="anonymous"> </script>
</head>

<body class="bg-primary">

<form action="insert.php" method="POST">

<div class="container">

    <div class="row justify-content-center fon m-auto shadow bg-white mt-3-py-3 col-md-6"  >
        <h3 text-center text-primary font-monospace>TODO LIST</h3>
        <div class="col-8">
            <input style="text" name="" class="form-control">
        </div>
        <div class="col-2">
            <button class="btn btn-outline-primary">ADD</button>
        </div>


    </div>

</div>

</form>

<!-- get data -->

<?php

include "config.php";
$rawData= mysqli_query($con "select * tbtodo");



?>


<div class="container">
    <div class="col-8 bg-white m-auto mt-3">

<table class="table">

    <tbody>

        <?php
        
        while( $row = mysqli_fetch_array($rawData)){
            
        }

        ?>

        <tr>
        <td><?php echo $row['Id']?>td>
        <td><?php echo $row['list']?>td>
        <td  style=width:10%;><a href="delete.php? ID= <?php echo $row['Id']?>" class="btn btn-outline-danger">delete</a></td>
        <td  style=width:10%;><a href="update.php? ID=" class="btn btn-outline-success"></a>update</td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>

</div>
</div>

    
</body>
</html>
