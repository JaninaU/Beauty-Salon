<!DOCTYPE html>
<html lang="ro">
<head>
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
                <img src="Imagini/sprancene.png" alt="sprancene">
                <h3>Sprâncene</h3>
            </div>
            <div class="text">
                <p>Prin infrumusetarea sprancenelor, orice persoana va avea ocazia de a se bucura de o fizionomie placuta a chipului. 
                    In cazul in care nu vei opta pentru aceasta metoda de infrumusetare, atunci cu siguranta aceasta fizionomie nu va fi una completa.</p>
            </div>
        </div>
        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/gene.jfif" alt="gene">
                <h3>Gene</h3>
            </div>
            <div class="text">
                <p>Genele au reprezentat de-a lungul timpului principalul atu al femeilor, mai ales cele din industria cinematografica. 
                    In prezent prin colaborarea cu Beauty Salon vei avea ocazia de obtine gene negre, puternic curbate, lungi si dese, 
                    ce vor oferi mereu un aspect impresionant.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/enzime.jpg" alt="enzime">
                <h3>Terapie prin enzime</h3>
            </div>
            <div class="text">
                <p>Aceasta terapie se refera la demachiere, tonifiere, curatare profunda, detoxifiere si hidratare. 
                    De asemenea prin utilizarea ultrasunetelor vor fi introduse enzime in cele mai profunde straturi ale pielii. 
                    Beneficiile oferite de aceasta terapie sunt impresionate, iar pentru a vedea acest lucru nu trebuie decat sa optezi pentru 
                    serviciile oferite de acest salon de cosmetica.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/microdermabraziune.jpg" alt="microdermabraziune">
                <h3>Curățare profundă prin microdermabraziune</h3>
            </div>
            <div class="text">
                <p>Utilizand aceasta terapie, orice persoana va avea ocazia de a se bucura de un ten mult mai luminos, 
                    fara pete si fara imperfectiuni, utilizand o modalitate profunda de curatare. Aceasta modalitate poarta denumirea de microdermabraziune 
                    cu pulbere de diamant. Reprezinta un tratament inovator, ce presupune curatarea in profunzime a pielii. 
                    Curatarea se realizeaza prin exfolierea straturilor de piele, utilizand anumite discuri speciale, pe care se va aplica o pudra de diamant.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/masca.jpg" alt="masca">
                <h3>Curățare și detoxifiere prin peeling și măști</h3>
            </div>
            <div class="text">
                <p>Mastile pe care le utilizam sunt pentru gomaj, masti plastice sau pe baza de alge.
                     Acestea sunt ideale pentru detoxifiere, iar efectele tratamentelor vor fi mereu de durata, 
                     asigurand o curatare profunda asupra tenului. Actiunea acestor masti, te va ajuta sa te bucuri de un ten curat si placut.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol">
            <div class="foto">
                <img src="Imagini/ceara-traditionala.jpg" alt="ceara-traditionala">
                <h3>Epilarea cu ceară tradițională</h3>
            </div>
            <div class="text">
                <p>Tehnica de epilare cu ceara traditionala este potrivita pentru persoanele cu o piele normala, 
                    fara a suferi de unele afectiuni sau tendinte de infectare a firului de par. Beauty Salon pune la dispozitia clientilor 
                    servicii de calitate in acest domeniu.</p>
            </div>
        </div>

        <div onmouseenter="mouseenter(this)" onmouseleave="mouseleave(this)" class="articol" style="margin-bottom: 350px;">
            <div class="foto">
                <img src="Imagini/ceara-banda.jpg" alt="ceara-banda">
                <h3>Epilarea cu ceară de unică folosință</h3>
            </div>
            <div class="text">
                <p>Acest tip de epilare este recomandat persoanelor cu o piele sensibila, capilarele sparte sau o sensibilitate sporita 
                    in ceea ce priveste infectarea firului de par. Tehnica de epilare, presupune aplicarea de ceara de unica folosinta si 
                    indepartarea ei cu ajutorul unei benzi speciale. O sesiune de epilare de acest tip, va dura mai mult si poate avea un pret mai mare.</p>
            </div>
        </div>

    </div>

</body>

</html>