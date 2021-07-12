<?php
require 'dbConnection.php';


$sql = "select * from posts";
$op = mysqli_query($connection, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud System Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center">Selection of Data from DataBase</h1>
    <?php
    if (isset($_SESSION['msg'])) {

        echo '<h2 class="text-center text-danger"> *' . $_SESSION['msg'] . '</h2>';

        unset($_SESSION['msg']);
    }

    ?>

    <table class="table table-dark table-striped">

        <thead class="text-center">
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Actions</th>
        </thead>

        <?php

        while ($data = mysqli_fetch_assoc($op)) {
        ?>
            <tr>
                <td class="text-center"><?php echo $data['id']; ?></td>
                <td class="text-center"><?php echo $data['title']; ?></td>
                <td class="text-center"><?php echo $data['content']; ?></td>
                <td class="text-center"><?php echo $data['imageName']; ?></td>
                <td class="text-center">
                    <a href="" class="btn btn-danger mx-2">Delete</a>
                    <a href="" class="btn btn-warning mx-2">Edit</a>

                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>