<?php

require "dbConnection.php";

function clearInput($input)
{

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}

$errorMsgs = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = clearInput($_POST['title']);
    $content = clearInput($_POST['content']);

    //title validation
    if (!empty($title)) {

        if (strlen($title) < 5) {
            $errorMsgs['title'] = "title should be greater than 5";
        }
    } else {
        $errorMsgs['title'] = "Pls Enter Title";
    }


    //content validation
    if (!empty($content)) {

        if (strlen($content) < 20) {
            $errorMsgs['content'] = "content should be greater than 50";
        }
    } else {
        $errorMsgs['content'] = "Pls Enter content";
    }


    //image Validation 
    if (!empty($_FILES['image']['name']) && isset($_FILES['image']['name'])) {

        $tmp_path = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];

        //get the extension
        $separateExt = explode(".", $name);
        $imageExt = strtolower($separateExt[1]);


        //rename file
        $imageNewName = rand() . time() . '.' .  $imageExt;

        //allowed extension
        $allowed = ['jpg', 'png'];

        if (in_array($imageExt, $allowed)) {

            $disFolder = './uploads/';

            $disPath = $disFolder . $imageNewName;

            move_uploaded_file($tmp_path, $disPath);
        } else {
            $errorMsgs['file'] = "pls upload image as jbg or png";
        }
    } else {
        $errorMsgs['file'] = "pls upload select the image";
    }

    if (count($errorMsgs) == 0) {

        $sql = "insert into posts (title,imageName,content) values ('$title','$imageNewName','$content')";

        $operation = mysqli_query($connection, $sql);

        if ($operation) {

            $_SESSION['msg'] = "Data inserted";
            echo "<h3 class='text-center text-success'> Data Inserted</h3>";
            header('Location: index.php');
        } else {
            echo     mysqli_error($connection);

            echo "<h3 class='text-center text-danger'> Please Try again!</h3>";
        }
    } else {

        foreach ($errorMsgs as $key => $value) {
            # code...
            echo  '<h3 class = "text-center text-danger">' . $value . '</h3>' . '<br>';
        }
    }
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
            <label for="floatingInput">Enter The Content</label>
        </div>

        <div class="form-control">
            <input type="file" class="form-control" name="image">
        </div>


        <input type="submit" class="form-control mt-3 btn btn-warning">
    </form>

    <a href="index.php" class="btn btn-danger m-auto w-25 mt-3 d-block">Show Data</a>

</body>

</html>