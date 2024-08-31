<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src="https://kit.fontawesome.com/9310e1148a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Iznajmi vozilo</title>
</head>
<body>
    
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-nav">
                        <a href="index.php"><img src="./public/site_img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="right-nav">
                        <ul>
                            <li><a href="index.php">Početna</a></li>
                            <li><a href="index.php">Iznajmi</a></li>
                            <li><a href="index.php">Oglašavanje</a></li>
                            <li><a href="index.php">O nama</a></li>
                            <li><a href="index.php">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <h1>Iznajmi brzo vozi slobodno.</h1>
        <p>Iznajmljivanje vozila na teritoriji država Balkana</p>
        <form>
            <input type="text" placeholder="Unesite drzavu, mesto, grad..."><button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <img src="./public/site_img/hero.jpg" alt="">
    </div>

    <div class="recommend-section">
        <h1 id="naslovrec">Naša preporuka</h1>
        <p>Preporučujemo vam najbolje rent kuće koje nude pouzdana vozila i vrhunsku uslugu. Birajte sa sigurnošću i <b>vozite bezbrižno</b> uz naše odabrane partnere.</p>
 
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
               <img src="./public/site_img/recommend.jpg" alt="">
               <div class="single-naslov">
                   <h1>Panic Rent</h1>
                   <h4>Auto - Kombi - Motor</h4>
                   <h5>Od <span>100€</span>/dan</h5>
               </div>
               <div class="lokacija">
                   <p id="drzavasingle">Srbija</p>
                   <p id="gradsingle">Beograd</p>
               </div>
               <div class="linkdetaljnije">
                   <a href="#">Detaljnije</a>
               </div>
        </div>

        <div class="swiper-slide">
             <img src="./public/site_img/rectest1.jpg" alt="">
            <div class="single-naslov">
                <h1>Tvoj Rent</h1>
                <h4>Auto - Kombi</h4>
                <h5>Od <span>90€</span>/dan</h5>
            </div>
            <div class="lokacija">
                <p id="drzavasingle">Crna Gora</p>
                <p id="gradsingle">Podgorica</p>
            </div>
            <div class="linkdetaljnije">
                <a href="#">Detaljnije</a>
            </div>
        </div>

        <div class="swiper-slide">
        <img src="./public/site_img/rectest2.jpg" alt="">
            <div class="single-naslov">
                <h1>Moj Rent</h1>
                <h4>Auto</h4>
                <h5>Od <span>110€</span>/dan</h5>
            </div>
            <div class="lokacija">
                <p id="drzavasingle">Makedonija</p>
                <p id="gradsingle">Skoplje</p>
            </div>
            <div class="linkdetaljnije">
                <a href="#">Detaljnije</a>
            </div>
        </div>

        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="public/js/script.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper(...)

</script>
</body>
</html>