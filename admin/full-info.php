<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
require_once "../app/classes/Rent.php";
$user = new User();
if($user->is_logged() && $user->is_admin()){
    $rent_houses = new Rent();
    $house = $rent_houses->show_house($_GET['house_id']);
}
else{
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Admin page</title>
</head>
<body style="background-color: rgba(0,0,0,0.95);color:white;">
<?php require_once "../admin/inc/header.php";?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <?php foreach(json_decode($house['pictures']) as $picture): ?>
                    <img src="../public/rent_img/<?=$picture;?>" width="250px" height="150px" alt="">
                <?php endforeach; ?>
            </div>
            <div class="col-md-7 text-left">
                    <h3>House ID:<?=$house['house_id'];?></h3>
                    <h3>House Name:<?=$house['house_name'];?></h3>
                    <h3>House Type:<?=$house['house_type'];?></h3>
                    <h3>City:<?=$house['city'];?></h3>
                    <h3>State:<?=$house['state'];?></h3>
                    <h3>Phone:<?=$house['phone'];?></h3>
                    <h3>Starting price:<?=$house['price'];?></h3>                
                    <h3>Email:<?=$house['email'];?></h3>                
                    <h3>Instagram:<?=$house['instagram'];?></h3>                
                    <h3>Site url:<?=$house['site_url'];?></h3>                
                    <h3>Site Name:<?=$house['site_name'];?></h3>                
                    <h3>Description:<?=$house['description'];?></h3>                
                    <h3>Joined at:<?=$house['joined_at'];?></h3>                
                    <h3>Subscribed To:<?=$house['subscribed_to'];?></h3>                
                    <h3>Ad Type:<?=$house['ad_name'];?></h3>                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>