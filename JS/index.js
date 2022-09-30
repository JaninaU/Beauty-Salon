//Dupa un o secunda se va apela functia hello care creaza si afisaza in pagina de acasa mesajul : "Bine ati venit!"
const myTimeout = setTimeout(Hello,1000); 
    function Hello(){
        var hello= document.createElement("div");
        hello.innerHTML="Bine ati venit!";
        hello.id="intro";
        var body = document.getElementById("continut").parentElement;
        var continut = document.getElementById("continut");
        body.insertBefore(hello,continut);
    }

//La fiecare 3 secunde se apeleaza functia miscare care face ca un contactItem ales la intamplare sa execute o animatie
const mySetInterval=setInterval(miscare,3000);
    function miscare(){
        var img=document.getElementsByClassName("contactItem")[Math.floor((Math.random()*10)%2)].children[0];
        img.style.transform = "scale(1.2)";
        img.style.transform = "rotate(360deg)";
        setTimeout(function(){
            img.style.transform = "scale(1)";
            img.style.transform = "rotate(0deg)";
        },1000);
    }