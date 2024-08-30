<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
require_once "../app/classes/AdType.php";
$user = new User();

if($user->is_logged() && $user->is_admin()):
    $adtype = new AdType();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $ad_name = $_POST['ad_name'];
        $ad_price = $_POST['ad_price'];
        $ad_description = $_POST['ad_description'];
    
        $create = $adtype->create_ad_type($ad_name,$ad_price,$ad_description);
    
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
<body style="background-color: rgba(0,0,0,0.95);color:white;">
<div class="container mt-5">
        <a href="logout.php" class="btn btn-warning">Logout</a>
        <a href="new-ad.php" class=" btn btn-danger ">Dodaj novi oglas</a>
        <a href="new-state-or-city.php" class=" btn btn-primary ">Dodaj novu državu i grad</a>
        <a href="new-ad-type.php" class=" btn btn-primary ">Dodaj novi tip oglasa</a>
        <a href="" class=" btn btn-primary ">Dodaj novog usera</a>
    </div>
    <div class="container">
    <h1 class="mt-5 mb-3">Novi tip oglasa</h1>
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="ad_name">Naziv novog tipa</label>
            <input type="text" name="ad_name" id="ad_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="ad_price">Cena</label>
            <input type="text" name="ad_price" id="ad_price" class="form-control">
        </div> 
        <div class="form-group mb-3">
            <label for="ad_description">Opis tipa oglasa</label>
            <input type="text" name="ad_description" id="ad_description" class="form-control" placeholder="Ukoliko ima više stavki razdvojiti ih karakterom->'|' ">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
    </div>


</body>
</html>
<?php else:
    header('location:../index.php');
?>
<?php 
endif;
?>