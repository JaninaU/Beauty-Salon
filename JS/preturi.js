const mySetInterval = setInterval(miscare, 3000);

        function miscare() {
            var img = document.getElementsByClassName("contactItem")[Math.floor((Math.random() * 10) % 2)].children[0];
            img.style.transform = "scale(1.2)";
            setTimeout(function () {
                img.style.transform = "scale(1)";
            }, 1000);
        }
