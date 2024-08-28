<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
$user = new User();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $created = $user->login($username,$password);

    if($created){
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "Successfully registred.";
        header('location:index.php');
        exit;
    }
    else{
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Error.";
        header('location:register.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin page</title>
</head>
<body class="bg-dark text-light">
    <div class="container">
    <h1 class="mt-5 mb-3">Login</h1>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>


</body>
</html>