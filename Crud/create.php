<?php

require "dbConnection.php";

function clearInput($input)
{

    trim($input);
    stripcslashes($input);
    htmlspecialchars($input);

    return $input;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit New Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <form action="<? echo stripcslashes($_SERVER["PHP_SELF"]); ?>" class="container p-5 bg-success mt-5" method="post" enctype="multipart/form-data">

        <h1 class="text-center text-dark  ">Submit New Data</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Enter Title" name="title">
            <label for="floatingInput">Enter Title</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Enter Content" name="content">
            <label for="floatingInput">Enter The Content...</label>
        </div>

        <div class="form-control">
            <input type="file" class="form-control" name="password">

        </div>


        <input type="submit" class="form-control mt-3 btn btn-warning">
    </form>
</body>

</html>