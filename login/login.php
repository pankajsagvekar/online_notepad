<?php
require "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-black">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container bg-dark w-50 p-3 rounded-3 border border-3">
            <h1 class="text-white text-center mt-0 mb-3 display-3">Login</h1>
            <div class="container p-0">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">@</span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" required name="username">
                            <label for="floatingInputGroup1">Username</label>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="container text-center mt-3">
                        <input type="submit" value="submit" class="btn btn-success text-capitalize" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
}
?>