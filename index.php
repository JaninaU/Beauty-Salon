<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Salon înfrumusețare</title>
    <!--Titlul paginii web-->
    <!--Informatii cu privire la autor, denumirea site-ului si continutul proiectului-->
    <meta name="autor" content="Urițescu Janina-Cristina">
    <meta name="denumire proiect" content="Salon înfrumusețare">
    <meta name="continut proiect" content="Datele pe care acest site le prezintă sunt fictive.">
    <!--Legatura dintre html si fisierele externe de stilizare-->
    <link href="CSS/index.css" rel="stylesheet" type="text/css">
    <script src="JS/index.js"></script>
</head>

<body>
    <!--Realizarea partii de antet a paginii. -->
    <div id="header">
        <div id="banner">
            <div class="imagine">
                <img src="Imagini/banner.png" alt="banner">
            </div>
            <div class="contact">
                <div id="telefon" class="contactItem">
                    <img src="Imagini/telefon.png" alt="Telefon">
                    <h2>0766209157/ 0743991623</h2>
                </div>
                <div id="mail" class="contactItem">
                    <img src="Imagini/mail.png" alt="Mail">
                    <h2>office@beautysalon.ro</h2>
                </div>
            </div>
        </div>
        <!--Realizarea meniului-->
        <?php include ("meniu.php"); ?>
    </div>
    <!--Continutul ce se afla in partea principala a paginii-->
    <div id="continut">
        <div class="stanga">
            <!--Continutul din partea stanga a pagini-->
            <h1>Beauty Salon</h1>
            <hr>
            <p> Salonul de înfrumusețare pe care îl reprezentăm, este mai mult
                decât o modalitate de a deveni frumoasă. Colaborând cu Beauty Salon,
                vei avea mereu ocazia de a beneficia de stil, calitate, creativitate, toate
                la prețuri foarte avantajoase și competitive.
            </p>
            <h2>Beauty Salon</h2>
            <p>Optand pentru o colaborare cu salonul nostru de imfrumusetare,
                vei avea ocazia de a va bucura de cele mai moderne si eficiente servicii. Astfel,
                putem aminti de faptul ca vei obtine mereu rezultatele dorite in acest sens,
                deoarece utilizam produse de marca consacrate. Printre aceste produse putem aminti:
                Goldwell, Tigi, Babor, Sothys, Orly, OPI, Jessica, Dermedics, Joico, Vitality's.</p>
            <h2>Servicii Profesionale de Infrumusetare si Ingrijire BOR</h2>
            <p>Salonul nostru nu este doar un centru al frumusetii.<br>
                Este un loc al respectului fata de trupul uman, al relaxarii si al sanatatii.
                Serviciile noastre sunt concepute atat pentru femei, cat si pentru barbati
                din punct de vedere al tehnicii si al produselor diferentiate
                (produse profesionale feminine si produse profesionale masculine).</p>
            <p>Daca sunteti in cautarea unor servicii de intretinere corporala,
                atunci cu siguranta Beauty Salon reprezinta solutia optima.</p>
            <p>De asemenea, ne puteti contacta in cazul in care cautati un coafor
                ce poate oferi mereu calitatea dorita.</p>
            <q class="citat"><b>Una dintre cele mai importante calități ale unei persoane este frumusețea sufletească.
                    Aceasta poate fi dublată de cea fizică, dar, de cele mai multe ori, cele două se accentuează
                    reciproc.
                    Sentimentele calde față de o persoană ne determină să îi atribuim o serie de calități și să o
                    apreciem din ce în ce mai mult.</b>
            </q>
        </div>
        <div class="dreapta">
            <!--Continutul din partea dreapta a pagini-->
            <div class="program">
                <h1>Program</h1>
                <hr>
                <ul >
                    <li>Luni-Vineri: 9<sup><u>00</u></sup> -21<sup><u>00</u></sup></li>
                    
                    <li>Sâmbătă: 9<sup><u>00</u></sup> -18<sup><u>00</u></sup></li>
                    
                    <li>Duminică: 9<sup><u>00</u></sup> -14<sup><u>00</u></sup></li>
                    
                </ul>
            </div>
            <br>
            <br>
            <br>
            <img src="Imagini/img_index.jpg" alt="Birou Receptiie Beauty Salon">
        </div>
    </div>



</body>

</html>