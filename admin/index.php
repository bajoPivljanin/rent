<?php 
require_once "../app/config/config.php";
require_once "../app/classes/User.php";
require_once "../app/classes/Rent.php";
$user = new User();
if(!$user->is_logged() && !$user->is_admin()){
    header('location:login.php');
}
$rent_houses = new Rent();
$rent_houses = $rent_houses->fetch_all();


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
    <a href="logout.php" class="btn btn-primary">logout</a>
    <br>
    <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-light">RentHouseID</th>
                <th scope="col" class="text-center text-light">Rent House Name</th>
                <th scope="col" class="text-center text-light">Rent type</th>
                <th scope="col" class="text-center text-light">Location City</th>
                <th scope="col" class="text-center text-light">Location State</th>
                <th scope="col" class="text-center text-light">Joined at</th>
                <th scope="col" class="text-center text-light">Active to</th>
                <th scope="col" class="text-center text-light">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($rent_houses as $houses):?>
            <tr>
                <td class="text-center text-light"><?=$houses['house_id']?></td>
                <td class="text-center text-light"><?=$houses['name']?></td>
                <td class="text-center text-light"><?=$houses['type']?></td>
                <td class="text-center text-light"><?=$houses['city']?></td>
                <td class="text-center text-light"><?=$houses['state']?></td>
                <td class="text-center text-light"><?=$houses['joined_at']?></td>
                <td class="text-center text-light"><?=$houses['subscribed_to']?></td>
                <td class="text-center text-light">
                    <a href="show_house.php?house_id=<?= $reservation['house_id']; ?>" class="btn btn-success">Show</a>
                    <a href="delete_house.php?house_id=<?= $reservation['house_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>