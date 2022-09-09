<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Merhaba</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const turkish_girl_name = 
`Aiyla
Alara
Aylin
Aysun
Beste
Burcu
Defne
Ece
Elif
Fatma
Hiranur
Miray
Yildiz
Zehra
Zeynep
Aergul
Afet
Asli
Banou
Ceren
Dilara
Dilay
Doga
Esin
Eylül
Feriha
Fusun
Gulya
Handan
Irmak
Kelebek
Kiraz
Makbule
Mehtap
Nermin
Nuray
Aysel
Azra
Canan
Ceylan
Damla
Emel
Esen
Ilay
Isra
Lale
Naz
Nehir
Pembe
Pinar
Sanem
Seda
Yara
Yaz
Belgin
Berna
Berra
Derya
Dile
Ebrar
Ecrin
Ekin
Elmas
Elvan
Emine
Feray
Funda
Hande
Hazan
Meltem
Narin
Nurten
Sevda
Sevil
Sidika
Sumeyye`;

const new_name = turkish_girl_name.split(/[\s]/i);

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