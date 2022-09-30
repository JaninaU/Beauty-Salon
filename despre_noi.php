<!DOCTYPE html>
<html lang="ro">
<head>
   <title>Salon înfrumusețare</title>
   <meta name="autor" content="Urițescu Janina-Cristina">
   <meta name="denumire proiect" content="Salon înfrumusețare">
   <meta name="continut proiect" content="Datele pe care acest site le prezintă sunt fictive.">
   <link href="CSS/despre_noi.css" rel="stylesheet" type="text/css">
        <script>
            const mySetInterval=setInterval(miscare,3000);
                function miscare(){
                     var img=document.getElementsByClassName("contactItem")[Math.floor((Math.random()*10)%2)].children[0];
                     img.style.transform = "scale(1.2)";
                    setTimeout(function(){
                     img.style.transform = "scale(1)";
                     },1000);
    }
        </script>
</head>
<body>
    <div id="header">
        <div id="banner">
            <div class="imagine">
                <img src="Imagini/banner.png" alt="banner" >
            </div>
            <div class="contact">
                <div id="telefon" class="contactItem">
                    <img src="Imagini/telefon.png" alt="telefon" >
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
    <div id="continut">

<!--Primul articol din partea de continut-->
        <div class="articol"> 
            <h2>Frumusețe</h2>  <!--Titlul articolului-->
            <h3>Îndraznește la frumusețe cu Beauty Salon</h3>       <!--Subtitlul articolului-->
            <div class="continut_articol">
                <div class="text">
                    Acum, pentru prima data frumusetea este mai accesibila ca oricand.
                    Beauty Salon isi rasplateste clientii prin oferte lunare atractive,
                     preturi speciale pentru pensionari, concursuri cu premii de exceptie si
                     mai ales atentie maxima catre cele mai variate dorinte. Tot ceea ce trebuie
                     sa faci este sa ne devii client/clienta si sa fii mereu in dialog cu noi.
                     Specialistii nostri se informeaza despre tendintele in frumusete din fiecare
                      sezon si despre cele mai inovatoare tehnici si tratamente pentru ca tu sa fii
                       mereu infloritoare.
                </div>
                <div class="imagine">
                    <img src="Imagini/make-up.jpg" alt="make-up">
                </div>
            </div>
        </div>
       
<!--Al doilea articol din partea de continut-->
        <div class="articol"> 
            <h2>Concept</h2>
            <h3>Concept</h3>
            <div class="continut_articol">
                <div class="imagine">
                    <img src="Imagini/vopsire.jpg" alt="vopsire">
                </div>
                <div class="text">
                    Conceptul serviciilor oferite de Beauty Salon este reprezentat de
                    perfectiunea prin inovatie, creativitate si nu in ultimul rand cunoastere.
                    Aceste elemente sunt mereu prezente in ceea ce priveste frumusetea.
                    Despre inovatie, putem spune ca este oferita de cele mai noi tehnici 
                    si produse de infrumusetare pe care le oferim. Pe de alta parte, 
                    creativitatea reprezinta marca salonului nostru, iar cunoasteresea se refera la 
                    tendintele actuale, pe care specialistii nostri le pun mereu in aplicare. 
                    Toate aceste elemente sunt transpuse de catre stilistii nostri, iar dupa o vizita 
                    cadrul salonului, veti avea ocazia de a va bucura de inovatie, vei 
                    inspira creativitate si vei impresiona mereu prin modernitate. Cu siguranta 
                    Beauty Salon va fi alegerea ideala si in cazul tau.
                </div>
            </div>

        </div>

<!--Al treilea articol din partea de continut-->
        <div class="articol"> 
            <h2>Misiune</h2>
            <h3>Misiune</h3>
            <div class="continut_articol">
                <div class="text">
                    Misiunea salonului nostru este ca fiecare client să beneficieze de servicii personalizate, 
                    conforme cu preferintele si nevoile sale. Politica salonului nostru vizeaza respectul pentru 
                    client si respectul pentru frumusete. In tandem cu sloganul 
                    nostru-We can make you Beauty- dorinta noastra este sa avem clienti care "infloresc" de fericire, 
                    sanatate si frumusete.
                </div>
                <div class="imagine">
                    <img src="Imagini/hair-style.jpg" alt="hair-style">
                </div>
            </div>

        </div>



    </div>
</body>
</html>