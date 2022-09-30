<!DOCTYPE html>
<html lang="ro">
<head >
    <title>Salon înfrumusețare</title>
    <meta name="autor" content="Urițescu Janina-Cristina">
    <meta name="denumire proiect" content="Salon înfrumusețare">
    <meta name="continut proiect" content="Datele pe care acest site le prezintă sunt fictive.">
    <link href="CSS/cosmetica.css" rel="stylesheet" type="text/css">
<!--modificarea dinamica a elementelor-->
    <script>
        function mouseenter(obj) {
            obj.style.transform = "scale(1.1)";
            obj.style.zIndex="5";
        }

        function mouseleave(obj) {
            obj.style.transform = "scale(1)";
            obj.style.zIndex="0";
        }

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
                <img src="Imagini/banner.png" alt="banner">
            </div>
            <div class="contact">
                <div id="telefon" class="contactItem">
                    <img src="Imagini/telefon.png" alt="telefon">
                    <h2>0766209157/ 0743991623</h2>
                </div>
                <div id="mail" class="contactItem">
                    <img src="Imagini/mail.png" alt="mail">
                    <h2>office@beautysalon.ro</h2>
                </div>
            </div>
        </div>
        <?php include ("meniu.php"); ?>
    </div>

    <div id="continut">
        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/tuns_girl.jpg" alt="tuns_girl">
                <h3>Tunsori moderne pentru fiecare</h3>
            </div>
            <div class="text">
                <p>Daca veti opta pentru o colaborare cu Beauty Salon, atunci cu siguranta parul tau va arata mereu senzational. 
                    Acest beauty salon te poate asigura de faptul ca tunsoarea va iesi mereu cum iti doresti tu, 
                    chiar daca vorbim despre intretinerea coafurii sau despre o schimbare de look. 
                    Acest coafor poate oferi oricand beneficii multiple</p>
            </div>
        </div>
        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/vopsit-girl.jpg" alt="vopsit-girl">
                <h3>Culori unice cu vopselele de păr de la Goldwell, Tigi, Joico și Vitality's</h3>
            </div>
            <div class="text">
                <p>In cazul in care iti doresti o culoare unica, poti opta pentru combinatii de vopsele unice, adaptate nuantei tenului. 
                    Astfel, ai posibilitatea de a opta pentru stiluri precum ombre hair, stilul edgy, suvite color blocks si nu in ultimul rand suvite colorate. 
                    Toate aceste servicii si combinatii fac parte din portofoliul de tehnici de vopsire detinut de hair stilistii nostri, 
                    specializati in ceea ce inseamna vopsirea parului si obtinerea unor nuante impresionante.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/coafuri.jpg" alt="coafuri">
                <h3>Coafuri speciale pentru cliente speciale</h3>
            </div>
            <div class="text">
                <p>Trebuie sa ne contactezi in cazul in care iti doresti coafuri de zi, coafuri simple sau complexe pentru evenimente speciale. 
                    Putem realiza cele mai deosebite coafuri pentru nunti, botezuri, petreceri sau baluri. 
                    Iti oferi cele mai potrivite solutii pentru o coafura impresionanta si in momentul in care te pregatesti sa devii mireasa.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/styling-masculin.jpg" alt="styling-masculin">
                <h3>Styling și îngrijire 100% masculine</h3>
            </div>
            <div class="text">
                <p>Infrumusetarea si ingrijirea masculina este oarecum diferita fata de cea feminina, iar produsele utilizate sunt special destinate barbatilor. 
                    De asemenea putem aminti si de tehnicile specifice ce tin de aceste servicii, iar datorita faptului ca iti punem mereu la
                     dispozitie stilisti specializati vei obtine rezultatele dorite. Opteaza acum pentru colaborarea cu un hair salon.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/machiaj.jpg" alt="machiaj">
                <h3>Machiaj</h3>
            </div>
            <div class="text">
                <p>Oferim solutii pentru toate cerintele, indiferent de evenimentul la care vei participa. 
                    Iti propunem mereu un machiaj profesionist pentru a evidentia calitatile pe care le ai si pentru a ascunde eventualele imperfectiuni.
                    Produsele pe care le folosim sunt de calitate, iar printre acestea putem aminti Kryolan, Parisax sau Mac. 
                    Iti punem la dispozitie posibilitatea de a te bucura de un machiaj profesional pentru mirese, nunti, botezuri, 
                    baluri si alte evenimente deosebite de acest tip.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/manichiura-pedichiura.jpeg" alt="manichiura-pedichiura">
                <h3>Modele unice</h3>
            </div>
            <div class="text">
                <p>In cadrul salonului pe care il reprezentam vei descoperi mereu grija fata de unghii, ceea ce inseamna ca personalul angajat este unul calificat 
                    in acest domeniu. De asemenea personalul salonului are cunostinele necesare in ceea ce priveste manichiura-pedichiura, ceea ce inseamna ca vei 
                    avea ocazia sa te bucuri mereu de servicii de calitate.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/unghii-false.jpg" alt="unghii-false">
                <h3>Unghii false</h3>
            </div>
            <div class="text">
                <p>Realizam si unghii false, in functie de cerintele pe care le ai. Detinem cele mai bune tehnici si produse pentru aplicarea unui gel natural 
                    peste unghia naturala, proteza sau tips. Serviciile oferite de Beauty Salon iti ofera posibilitatea de a te bucura mereu de o manichiura-pedichiura exceptionala.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol" style="margin-bottom: 350px;">
            <div class="foto">
                <img src="Imagini/tratament-unghie.jpg" alt="tratament-unghie">
                <h3>Tratamentul Unghiei</h3>
            </div>
            <div class="text">
                <p>Beauty Salon ofera solutii ideale si pentru tratamentul unghiilor moi, sensibile sau cu tendinta de exfoliere. 
                    Astfel, putem oferi o ingrijire speciala si tratamente de intarire, regenerare sau stralucire de la OPI si Orly. 
                    Cu siguranta te vei bucura mereu de unghiile dorite colaborand cu salonul nostru. Aceste tramente constau in masca, 
                    tratament si crema pentru unghii, iar in interiorul salonului nostru vei primi mereu atentia de care ai nevoie.</p>
            </div>
        </div>

    </div>

</body>
</html>