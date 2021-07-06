<?php

function clearInput($input)
{

    trim($input);
    stripcslashes($input);
    htmlspecialchars($input);

    return $input;
}
//Form method checking  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //get inputes values
    $name = clearInput($_POST["name"]);
    $email = clearInput($_POST["email"]);
    $password = clearInput($_POST["password"]);
    $age = clearInput($_POST["age"]);
    $linkedin = clearInput($_POST["linkedin"]);

    //Name validation
    if (empty($name)) {
        echo "<h2 class='text-center'>Please Entar Your Name!</h2> <br>";
    } else {
        if (strlen($name) < 4) {
            echo "<h2 class='text-center'>Name length should be +4. </h2> <br>";
        } else {
            echo "<h2 class='text-center'>Welcome " . ucwords(strtolower($name)) . " ^_^</h2> <br>";
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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <form action="<? echo stripcslashes($_SERVER["PHP_SELF"]); ?>" class="container p-5 bg-dark mt-5" method="post" enctype="multipart/form-data">
        <h1 class="text-center text-danger  ">PHP Form Validation Task</h1>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" name="name">
            <label for="floatingInput">Enter Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control mt-3" id="floatingPassword" placeholder="Age" name="age">
            <label for="floatingPassword">Age</label>
        </div>
        <div class="form-floating">
            <input type="url" class="form-control mt-3" id="floatingPassword" placeholder="Linkedin" name="linkedin">
            <label for="floatingPassword">Linkedin URL</label>
        </div>
        <input type="submit" class="form-control mt-3 btn btn-success">
    </form>
</body>

</html>