<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const NativeAmerican_girl_name = 
`Dakota
Cheyenne
Aiyana
Tallulah
Winona
Denali
Shania
Sequoia
Alaska
Dakotah
Dakoda
Cheyanne
Shayan
Winonah
Shyanne
Wyomia
Shizue
Onida
Wynona
Seneca
Wynonna
Senecca
Shawney
Cherokee
Mahala
Chayanne
Seneka
Senneca
Talulla
Shyann
Sequoya
Cholena
Talula
Bijoux
Oneida
Saquoia
Vilma
Neka
Shoshone
Chumani
Chelan
Nebraska
Shayanne
Chiana
Shanea
Shawnie
Sacoya
Chianna
Secoya
Shastina
Siu
Wenonah
Sioux
Sequoyia
Canada
Chayan
Nokomis
Saquoya
Sayeh
Zuni
Tallula
Shyanna
Alabama
Chyanne
Talley
Shawnee
Tallie
Talise
Shasta
Mansi
Chenoa
Quanah
Cheyanna
Aponi
Ayasha
Wynnona
Winnona
Wenona
Pocahontas
Shianna
Taima
Adsila
Alaqua
Amitola
Angpetu
Aponee
Byhalia
Coahoma
Dowanhowee
Mendota
Nituna
Olathe
Onyda
Sau
Shahsta
Shastah
Siouxsie
Taimah
Taoimah
Winoena
Winonna
Wyanet
Wyanetta
Wyome
Wyomie
Wyonet
Wyonetta
Shoshoni`;

const new_name = NativeAmerican_girl_name.split(/[\s]/i);

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