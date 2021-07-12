<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {

        if (!empty($_POST["names"] && !empty(trim($_POST["details"])))) {
            $name = $_POST["names"];
            $detail = $_POST["details"];
            $id = $_GET["id"];

            $sql = "INSERT INTO  `crud`(`name`,`detail`) VALUES ('$name','$detail');";
            $query = mysqli_query($conn, $sql);
        } else {
            header("location:homepage.php?emptyfield");
        }
    } else {
        echo "NOT submitted";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="text-align: center; justify-content:center; ">
    <h1>--crud App--</h1>

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


                    <button type="submit" class="btn btn-primary" name="submit">submit</button>
                </form>
            </div>



        </div>
    </div>

    </div>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Name</th>
            <th>Details</th>
        </tr>

        <?php

        $sql = "SELECT `id`, `name`,`detail` FROM `crud`;";
        $query = mysqli_query($conn, $sql);


        while ($result =  mysqli_fetch_array($query)) {

        ?>


            <tr>


                <td><?php echo $result['name']; ?> </td>
                <td><?php echo $result['detail']; ?></td>

                <td><a style="background-color: green; text-decoration:none;  color:beige; border-radius:5px; padding:5px;" href="update.php?id=<?php echo $result['id']; ?>">UPDATE </a> </td>
                <td><a style="background-color: red; text-decoration:none;  color:beige; border-radius:5px; padding:5px;" href="delete.php?id=<?php echo $result['id']; ?>">DELETE</a></td>

            </tr>





        <?php
        }

        ?>
    </table>



</body>

</html>