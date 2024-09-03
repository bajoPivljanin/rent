<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
require_once "../app/classes/State.php";
require_once "../app/classes/City.php";
require_once "../app/classes/AdType.php";
require_once "../app/classes/HouseType.php";
require_once "../app/classes/Rent.php";

$user = new User();

if($user->is_logged() && $user->is_admin()):
   $state = new State();
   $states = $state->fetch_all();

   $city = new City();
   $cities = $city->fetch_all();

   $adtype = new AdType();
   $adtypes = $adtype->fetch_all();

   $house_type = new HouseType();
   $house_types = $house_type->fetch_all();

   $rent = new Rent();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $type_id = $_POST['type_id'];
            $city_id = $_POST['city_id'];
            $state_id = $_POST['state_id'];
            $phone = $_POST['phone'];
            $price = $_POST['price'];
            $email = $_POST['email'];
            $instagram = $_POST['instagram'];
            $site_url = $_POST['site_url'];
            $site_name = $_POST['site_name'];
            $description = $_POST['description'];
            $subscribed_to = $_POST['subscribed_to'];
            $ad_type_id = $_POST['ad_type_id'];

            $totalFiles = count ($_FILES['fileImg']['name']);
            $filesArray = array();

            for($i = 0;$i < $totalFiles; $i++){
                $imgName = $_FILES['fileImg']['name'][$i];
                $tmpName = $_FILES['fileImg']['name'][$i];

                $imageExtension = explode('.',$imgName);
                $imageExtension = strtolower(end($imageExtension));

                $newImageName  = uniqid(). '.' . $imageExtension;

                move_uploaded_file($tmpName,'../public/rent_img/' . $newImageName);
                $filesArray[] = $newImageName;
            }
            $filesArray = json_encode($filesArray);

           // $new_rent = $rent->create($name,$type_id,$city_id,$state_id,$phone,$price,$email,$instagram,$site_url,$site_name,$filesArray,$description,$subscribed_to,$ad_type_id);
            //var_dump($name,$type_id,$city_id,$state_id,$phone,$price,$email,$instagram,$site_url,$site_name,$filesArray,$description,$subscribed_to,$ad_type_id);

        //}
    
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
<?php require_once "../admin/inc/header.php";?>
    <div class="container">
    <h1 class="mt-5 mb-3">Dodaj novi oglas</h1>
    <form enctype="multipart/form-data" action="" method="post">
        <div class="form-group mb-3">
            <label for="name">Naziv rent kuće</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="type_id">Tip kuće</label>
            <select name="type_id" class="form-control">
                <option value="" disabled selected>Izaberi tip</option>
                <?php foreach($house_types as $housetype):?>
                    <option value="<?=$housetype['house_type_id'];?>" ><?=$housetype['name'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="city_id">Grad</label>
            <select name="city_id" class="form-control">
                <option value="" disabled selected>Izaberi grad</option>
                <?php foreach($cities as $onecity):?>
                    <option value="<?=$onecity['city_id'];?>" ><?=$onecity['name'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
        <label for="state_id">Država</label>
            <select name="state_id" class="form-control">
                <option value="" disabled selected>Izaberite državu</option>
                <?php foreach($states as $onestate):?>
                    <option value="<?=$onestate['state_id'];?>" ><?=$onestate['name'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="phone">Telefon</label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="price">Cena</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Napisati početnu cenu...">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="site_url">Link sajta</label>
            <input type="text" name="site_url" id="site_url" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="site_name">Naziv sajta</label>
            <input type="text" name="site_name" id="site_name" class="form-control">
        </div>
         <div class="form-group mb-3">
            <label for="description">Opis</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="subscribed_to">Pretplata važi do...</label>
            <input type="date" name="subscribed_to" id="subscribed_to" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="ad_type_id">Tip oglasa</label>
            <select name="ad_type_id" class="form-control">
                <option value="" disabled selected>Izaberite tip oglasa</option>
                <?php foreach($adtypes as $type):?>
                    <option value="<?=$type['ad_type_id'];?>" ><?=$type['ad_name'];?></option>
                <?php endforeach;?>
            </select>
        </div>
        <!-- <div class="form-group mb-3">
            <label for="pictures">Slike</label>
            <input type="file" name="fileImg[]" accept=".jpg, .jpeg, .png" required multiple>
        </div> -->
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