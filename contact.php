<!DOCTYPE html>
<head>
   <title>Salon înfrumusețare</title>
   <meta name="autor" content="Urițescu Janina-Cristina">
   <meta name="denumire proiect" content="Salon înfrumusețare">
   <meta name="continut proiect" content="Datele pe care acest site le prezintă sunt fictive.">
   <link href="CSS/contact.css" rel="stylesheet" type="text/css">
   <script src="JS/contact_formular.js"></script>
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
            <div class="stanga">            <!--Partea din stanga continutului unde se afla formularul.-->
                   <h2>Trimite-ne un mesaj</h2>
                   <p>Dacă aveți nelămuriri, întrebări de orice natură, noi vă stăm la dispoziție. Vă rog să specificațiti tipul mesajului
                       conform mesajului tău. Vă mulțumim!</p>
                   <form name="Formular" action="/submit.php" onsubmit="return ContactFormular()" method="post">
                           <p>Numele dvs*:<input type="text" size="60" name="Nume"></p>
                           <p>Email-ul dvs*:<input type="text" size="60" name="Email"></p>
                           <p>Alegeți tipul mesajului*: 
                               <select type="text" value="" name="Tip_mesaj">
                                   <option> </option>
                                   <option>Întrebări</option>
                                   <option>Sugestii</option>
                                   <option>Programări</option>
                                   <option>Altele</option>
                               </select>
                           </p>
                           <p>Subiect:<textarea cols="55" name="Subiect"></textarea></p>
                           <p>Mesaj:<textarea cols="55" name="Mesaj"></textarea></p>
                           <p><input type="checkbox" name="checkbox"></input> Am citit și sunt de acord cu <a href="https://policies.google.com/terms?hl=ro" target="_blank">Termenii și Condițiile</a> și <a href="prelucrarea_datelor_caracter_personal.php" target="_blank">Prelucrare a datelor cu caracter personal</a></p>
                           <p><input type="submit" value="Trimite" name="Trimite"></p>
                           <p><input type="reset" value="Resetează" name="Reset">
                               <br>
                               <br>
                               <b><i>Câmpurile marcate cu * sunt obligatorii</i></b>
                           </p>
                   </form>
            </div>
            
            <div class="dreapta">           <!--Partea din dreapta unde se afla informatii desprea adresa salonului.-->
                   <h2>Unde suntem situați</h2>
                   <p>Salonul nostru este foarte accesibil, 
                       astfel încât idiferent de zona în care locuiți, 
                       nu aveți nevoie de prea mult timp pentru a ne găsi. </p>
                   <p>Ne puteți găsi pe <u>Oraștie, strada Avram Iancu, nr. 4</u>începând cu ora <b><u>9:00</u></b> în fiecare zi.<br>
                       Ne puteți contact deasemenea pe adresa de email <i><b>office@beautysalon.ro</b></i> 
                       sau la numerele de telefon <b>0766209157</b> sau <b>0743991623</b></p>
                           <br>
                           <br>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.620477360213!2d23.189576315533326!3d45.83887997910721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474e9ac99a2976d9%3A0xc096b2d18793d1a5!2sStrada%20Avram%20Iancu%204%2C%20Or%C4%83%C8%99tie%20335700!5e0!3m2!1sro!2sro!4v1641681242542!5m2!1sro!2sro"  width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
    </div>
</body>
</html>