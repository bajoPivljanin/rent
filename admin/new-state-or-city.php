<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
require_once "../app/classes/State.php";
require_once "../app/classes/City.php";
$user = new User();

if($user->is_logged() && $user->is_admin()):
   $state = new State();
   $states = $state->fetch_all();
   $city = new City();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['form_type'])) {
            $form_type = $_POST['form_type'];
            $state_name = $_POST['state_name'];
            $city_name = $_POST['city_name'];
            $stateid = $_POST['state_id'];

            switch ($form_type) {
                case 'form1':
                    $state = $state->create_state($state_name);
                    break;
                case'form2':
                    $city = $city->create_city($city_name,$stateid);
                    break;
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
    <h1 class="mt-5 mb-3">Dodaj novu državu ili grad</h1>
    <form action="" method="post">
    <input type="hidden" name="form_type" value="form1">
        <div class="form-group mb-3">
            <label for="state_name">Naziv države</label>
            <input type="text" name="state_name" id="state_name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
    <form action="" method="post">
    <input type="hidden" name="form_type" value="form2">
        <div class="form-group mb-3">
            <label for="city_name">Naziv grada</label>
            <input type="text" name="city_name" id="city_name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <select name="state_id" class="form-control">
                <option value="" disabled selected>Izaberite državu</option>
                <?php foreach($states as $onestate):?>
                    <option value="<?=$onestate['state_id'];?>" ><?=$onestate['name'];?></option>
                <?php endforeach;?>
            </select>
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