<?php

include "config.php";

if (isset($_POST["update"])) {
    $id = $_GET['id'];

    $name = $_POST["names"];
    $detail = $_POST["details"];

    if (!empty(trim($_POST['names'])) && !empty(trim($_POST['details']))) {

        $sql = "UPDATE `crud` SET `id` = '$id',`name`= '$name' ,`detail`='$detail' WHERE `id`='$id' ;";
        mysqli_query($conn, $sql);
        header("location:homepage.php");
    }
} else {
    echo "not connected";
}
?>




<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="text-align: center; justify-content:center;">
    <h1>---UPDATE---</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="card" style="text-align: center; align-items:center;">
        <div class="card" style="width: 18rem; ">

            <div class="card-body">
                <form method="POST">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="names" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descreption</label>
                        <input type="text" name="details" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary" name="update">update</button>
                </form>
            </div>



        </div>
    </div>


</body>

</html>