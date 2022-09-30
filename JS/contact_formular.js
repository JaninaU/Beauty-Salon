//Validarea datelor prin intermediul facilitatilor oferite de JavaScript
function ContactFormular()
        {
            var nume=document.forms["Formular"]["Nume"];
            var email=document.forms["Formular"]["Email"];
            var tip_mesaj=document.forms["Formular"]["Tip_mesaj"];
            var subiect=document.forms["Formular"]["Subiect"];
            var mesaj=document.forms["Formular"]["Mesaj"];
            var checkbox=document.forms["Formular"]["checkbox"];
                if(nume.value=="")
                    {
                        window.alert("Vă rugăm introduceți numele.");
                        nume.focus();
                        return false;
                    }
                if(email.value=="")
                    {
                        window.alert("Vă rugăm introduceți email-ul.");
                        email.focus();
                        return false;
                    }
                        if(email.value.indexOf("@",0)<0)
                            {
                                window.alert("Vă rugăm introduceți o adresă de email validă.");
                                email.focus();
                                return false;
                            }
                        if(email.value.indexOf(".",0)<0)
                            {
                                window.alert("Vă rugăm introduceți o adresă de email validă.");
                                email.focus();
                                return false;
                            }
                if(tip_mesaj.selectedIndex<1)
                    {
                        alert("Vă rugăm selectați tipul mesajului.");
                        tip_mesaj.focus();
                        return false;
                    } 
                if(checkbox.checked==false)
                    {
                        alert("Citiți Termenii și condițiile și Prelucrarea datelor cu caracter personal apoi selectați checkbox-ul");
                        checkbox.focus();
                        return false;
                     }  
            return true;                 
        }

     const mySetInterval=setInterval(miscare,3000);
        function miscare(){
             var img=document.getElementsByClassName("contactItem")[Math.floor((Math.random()*10)%2)].children[0];
             img.style.transform = "scale(1.2)";
            setTimeout(function(){
             img.style.transform = "scale(1)";
             },1000);
}