<!DOCTYPE html>
<html lang="ro">
<head>
   <title>Salon înfrumusețare</title>
   <meta name="autor" content="Urițescu Janina-Cristina">
   <meta name="denumire proiect" content="Salon înfrumusețare">
   <meta name="continut proiect" content="Datele pe care acest site le prezintă sunt fictive.">
   <link href="CSS/galerie.css" rel="stylesheet" type="text/css">
   <script src="JS/galerie.js"></script>
</head>
<body onload="showSlides()">
    <div id="header">
        <div id="banner">
            <div class="imagine">
                <img src="Imagini/banner.png" alt="banner">
            </div>
            <div class="contact">
                <div id="telefon" class="contactItem">
                    <img src="Imagini/telefon.png" alt="telefon">
                    <h2>0766209157/ 0743991623</h2>
                </div>
                <div id="mail" class="contactItem">
                    <img src="Imagini/mail.png" alt="mail" >
                    <h2>office@beautysalon.ro</h2>
                </div>
            </div>
        </div>
        <?php include ("meniu.php"); ?>
    </div>
<!--Definirea container-ului unde vor fi puse imaginile-->
    <div id="continut">
        <div class="poza efect">
            <div class="numar-poza">1 / 11</div>
            <img src="Imagini/img_1.jpg" style="width:100%" alt="img_1">
        </div>
        <div class="poza efect">
            <div class="numar-poza">2 / 11</div>
            <img src="Imagini/img_2.jpg" style="width:100%" alt="img_2">
        </div>
        <div class="poza efect">
            <div class="numar-poza">3 / 11</div>
            <img src="Imagini/img_3.jpg" style="width:100%" alt="img_3">
        </div>
        <div class="poza efect">
            <div class="numar-poza">4 / 11</div>
            <img src="Imagini/img_4.jpg" style="width:100%" alt="img_4">
        </div>
        <div class="poza efect">
            <div class="numar-poza">5 / 11</div>
            <img src="Imagini/img_5.jpg" style="width:100%" alt="img_5">
        </div>
        <div class="poza efect">
            <div class="numar-poza">6 / 11</div>
            <img src="Imagini/img_6.png" style="width:100%" alt="img_6">
        </div>
        <div class="poza efect">
            <div class="numar-poza">7 / 11</div>
            <img src="Imagini/img_7.jpg" style="width:100%" alt="img_7">
        </div>
        <div class="poza efect">
            <div class="numar-poza">8 / 11</div>
            <img src="Imagini/img_8.jpg" style="width:100%" alt="img_8">
        </div>
        <div class="poza efect">
            <div class="numar-poza">9 / 11</div>
            <img src="Imagini/img_9.jpg" style="width:100%" alt="img_9">
        </div>
        <div class="poza efect">
            <div class="numar-poza">10 / 11</div>
            <img src="Imagini/img_10.jpg" style="width:100%" alt="img_10">
        </div>
        <div class="poza efect">
            <div class="numar-poza">11 / 11</div>
            <img src="Imagini/img_11.png" style="width:100%" alt="img_11">
        </div>
<!--Butoanele de îNAINTE și ÎNAPOI-->
        <a class="inapoi" onclick="plusSlides(-1)">&#10094;</a>
        <a class="inainte" onclick="plusSlides(1)">&#10095;</a>
    </div>
<!--Punctele/Cercurile-->
    <div style="text-align:center">
        <span class="punct" onclick="currentSlide(1)"></span>
        <span class="punct" onclick="currentSlide(2)"></span>
        <span class="punct" onclick="currentSlide(3)"></span>
        <span class="punct" onclick="currentSlide(4)"></span>
        <span class="punct" onclick="currentSlide(5)"></span>
        <span class="punct" onclick="currentSlide(6)"></span>
        <span class="punct" onclick="currentSlide(7)"></span>
        <span class="punct" onclick="currentSlide(8)"></span>
        <span class="punct" onclick="currentSlide(9)"></span>
        <span class="punct" onclick="currentSlide(10)"></span>
        <span class="punct" onclick="currentSlide(11)"></span>
    </div>
</body>
</html>