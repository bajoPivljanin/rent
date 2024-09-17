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
    <?php require_once "./inc/header.php"?>

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

    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>

    
    <div class="kratakabout-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-kratak">
                        <h1>Iznajmi vozilo</h1>
                        <p><span>balkanrent.com</span> je vaša pouzdana platforma za pronalaženje proverenih kompanija za iznajmljivanje vozila <span>širom Balkana.</span> Na našem sajtu možete jednostavno pronaći i kontaktirati pouzdane agencije koje nude iznajmljivanje <span>različitih vrsta vozila</span>.</p>
                        <p id="leftdrugi">Naš cilj je da vam olakšamo proces pronalaženja odgovarajuće kompanije za iznajmljivanje na lokaciji na kojoj se nalazite ili na koju putujete, tako da možete biti sigurni u kvalitet i pouzdanost usluge koju dobijate.</p>
                        <a href="#">Pretraga</a>
                        <a href="#" id="leftinfolink">Informacije</a>
                        <div class="razdelnakita"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-kratak">
                        <h1>Postavi oglas</h1>
                        <p>Na našoj platformi možete oglašavati svoje usluge iznajmljivanja vozila i uživati u dva meseca besplatnog oglašavanja.</p>
                        <p id="rightdrugi">Izaberite jedan od naših paketa, koje možete pregledati na stranici posvećenoj oglašavanju usluga iznajmljivanja vozila, i iskoristite ovu posebnu ponudu da povećate svoju vidljivost i privučete nove klijente.</p>
                        <a href="#" >Oglašavanje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shortinfo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-info">
                    <h3>Pronadjite savršen <br><span class="auto-type"></span> <br>za vašu sledeću <br> avanturu.</h3>
                      <a href="#">Pogledajte ponudu</i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-info">
                      <img src="./public/site_img/shortinfo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "./inc/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="public/js/script.js"></script>
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        const swiper = new Swiper(...)

    </script>
    <script>
        var typed = new Typed(".auto-type",{
        strings: ["automobil","motocikl", "kombi", "kvad"],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true,
    })
    </script>
</body>
</html>