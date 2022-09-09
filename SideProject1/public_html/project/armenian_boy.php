<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Բարեւ Ձեզ</h1>

<button>Generate the Name!</button> 

<h2>Name</h2>

<script>
const armenian_boy_name = 
`Levon
Ara
Aren
Narek
Armen
Atom
Daron
Nyree
Emin
Arsen
Areg
Davit
Hayk
Lorik
Arno
Tigran
Sarkis
Vardan
Samvel
Jalal
Arda
Gor
Nishan
Jivan
Andranik
Gevorg
Avetis
Arpiar
Yervant
Abaven
Barkev
Boghos
Carnig
Farukh
Garabed
Hovan
Izmirlian
Kachig
Kaloosh
Manough
Mihr
Nayiri
Oshin
Panos
Razmik
Takvor
Vahe
Ararat
Armenak
Arnak
Azat
Byurak
Byuregh
Hakob
Hmayak
Hovnan
Hunan
Husik
Kajik
Lernik
Manuk
Sasun
Shirak`;

const new_name = armenian_boy_name.split(/[\s]/i);

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, new_name.length-1);
    result.innerText = new_name[index];
});

</script>

<style>
h1 {
    text-align: center;
    font-size: 30px;
}

button {
  background-color: #CD853F;
  color: black;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
h2 {
    text-align: center;
}

body {
    background-color: #DEB887;
}

</style>