<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pretraga/pretragacss/pretraga.css">
    <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Balkan Rent | Pretraga</title>
</head>
<body>

<nav>
<nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-nav">
                        <a href="index.php"><img src="../public/site_img/logo.png" alt=""></a>
                        <i class="fa-solid fa-bars" id="menuopen"></i>
                        <i class="fa-solid fa-xmark" id="menuclose"></i>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="right-nav">
                        <ul>
                            <li><a href="../index.php">Početna</a></li>
                            <li><a href="pretraga.php">Pretraga</a></li>
                            <li><a href="index.php">Oglašavanje</a></li>
                            <li><a href="index.php">Info</a></li>
                            <li><a href="index.php">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</nav>



    <div class="oglasi">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="left-pretraga">
                        <h1>Pretraga<i class="fa-solid fa-chevron-down"></i></h1>
                        <select name="" id="">
                            <option value="" disabled selected>Odaberi drzavu</option>
                            <option value="">Srbija</option>
                            <option value="">Rvatcka</option>
                            <option value="">Boss</option>
                        </select>
                        <select name="" id="">
                            <option value="" disabled selected>Odaberi mesto, grad...</option>
                            <option value="">Srbija</option>
                            <option value="">Rvatcka</option>
                            <option value="">Boss</option>
                        </select>
                        <h1 id="pretraga-tip">Tip vozila<i class="fa-solid fa-chevron-down"></i></h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="pretraga-oglasi">
                        <form action="">
                            <input type="text" placeholder="Pretrazite mesto, drzavu, vozilo..."><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <p>Rezultati pretrage<i class="fa-solid fa-chevron-down"></i></p>
                    </div>

                    

                    <div class="single-oglas">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../public/site_img/recommend.jpg" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="oglas-tekst">

                                <h1>Rent test</h1>
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Auto - Motor</li>
                                    <li><i class="fa-solid fa-globe"></i>Srbija</li>
                                    <li><i class="fa-solid fa-city" id="zadnjigr"></i>Subotica</li>
                                </ul>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium iure fuga repellat accusantium dolor excepturi eos quis repudiandae quos tenetur</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="detalj-oglas">
                                <h1>Od <br> <span>60€</span> <br>dan</h1>
                                <a href="#">Detaljnije</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    </div>

                    <div class="single-oglas">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../public/site_img/recommend.jpg" alt="">
                            </div>
                            <div class="col-md-5">
                                <div class="oglas-tekst">

                                <h1>Rent test</h1>
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Auto - Motor</li>
                                    <li><i class="fa-solid fa-globe"></i>Srbija</li>
                                    <li><i class="fa-solid fa-city" id="zadnjigr"></i>Subotica</li>
                                </ul>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium iure fuga repellat accusantium dolor excepturi eos quis repudiandae quos tenetur</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="detalj-oglas">
                                <h1>Od <br> <span>60€</span> <br>dan</h1>
                                <a href="#">Detaljnije</a>
                                </div>
                            </div>
                        </div>
                    </div> 

                    

                </div>
            </div>
        </div>
    </div>
</div>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-footer">
                        <a href="index.php"><img src="../public/site_img/logowhite.png" alt=""></a>
                        <p>Brzo i jednostavno pronađi idealno vozilo za svoje putovanje, poslovnu upotrebu ili specijalnu priliku</p>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mid-footer">
                        <h4>Stranice</h4>
                        <ul>
                            <li><a href="#">Početna</a></li>
                            <li><a href="#">Iznajmi</a></li>
                            <li><a href="#">Oglašavanje</a></li>
                            <li><a href="#">Info</a></li>
                            <li><a href="#">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-footer">
                        <h4>Kontakt</h4>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-phone"></i>079-234-123</a></li>
                            <li><a href="#"><i class="fa-regular fa-envelope"></i>bravina@gmail.com</a></li>
                            <li><a href="#"><i class="fa-regular fa-clock"></i>24/7</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p id="footerp">© Copyright 2024. All rights reserved.</p>
    </footer>
</body>
</html>