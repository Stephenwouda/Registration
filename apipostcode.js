let postc = document.getElementById("postcode_inp");
let huisnr = document.getElementById("huisnummer_inp");
let adres = document.getElementById("adres");

window.onload = function(){
    postc.addeventListener('change',zoekGegevens);
    huisnr.addeventListener('change',zoekGegevens);
}

function zoekGegevens(){
    if(postc.value!=="" && huisnr.value!=="") {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                adres.innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","apirequest.php?p=" + postc.value + "&h=" + huisnr.value, true);
        xmlhttp.send();
    }
}