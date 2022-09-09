<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Zdravstvuyte</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const slavic_girl_name = 
`Vera
Lana
Ivanna
Milena
Zora
Raina
Zaria
Aniya
Danica
Leena
Ivana
Karlie
Nikola
Mileena
Iva
Natalya
Danika
Karolina
Karoline
Karli
Ivanka
Ani
Ania
Jarmila
Kalena
Bronislawa
Michal
Wladyslawa
Slavko
Miran
Laima
Zorah
Wendeline
Myrene
Verene
Kum
Sable
Kaleena
Verla
Jelena
Tesla
Verdie
Ona
Verlie
Verline
Panya
Biljana
Wonda
Slavica
Zorana
Wava
Zoraya
Svetlana
Valeska
Zlata
Nedda
Velika
Verlene
Elga
Wenda
Tosha
Kasmira
Mirka
Chessie
Saskia
Donika
Donnica
Oksana
Ilka
Ivanya
Karlena
Stana
Ludmilla
Vladislava
Karalyn
Alenka
Bogdana
Wandy
Karalynne
Verdell
Tatyana
Danaca
Lyna
Vanda
Karolyn
Karaline
Ivania
Chesna
Neda
Brinn
Miroslava
Milka
Magda
Bryna
Lyda
Karolynn
Veira
Leida
Lida
Aleksa
Zorina
Mirra
Mirelle
Karlina
Karlene
Dannika
Damyan
Zorya
Mirana
Kisha
Karolyna
Lavera
Brina
Kass
Verina
Miriana
Kalene
Karolyne
Chessa
Kaleen
Dannica
Alatinka
Bogdanka
Bogna
Bohdana
Bojana
Branislava
Branka
Chessy
Elgiva
Ellga
Ilke
Karalynna
Karlinka
Karolinka
Karolynne
Lepa
Lidah
Lubomira
Miladena
Milanka
Mirilla
Mlada
Mladena
Myrilla
Nedi
Radilla
Radinka
Radmila
Radmilla
Redmilla
Slavenka
Staska
Svetlanna
Svjetlana
Swetlana
Toshka
Tosia
Tosiya
Toskia
Veradis
Verasha
Verica
Verine
Verinka
Verka
Verochka
Veroshka
Veruschka
Verushka
Wahnda
Wandah
Wandie
Wandis
Wannda
Wendaline
Wohnda
Wonnda
Yarmilla
Zitomira
Zivanka
Zivka
Zlatina
Zlatka
Zoreen
Zorine
Zorrah
Sviatlana
Nenneke`;

const new_name = slavic_girl_name.split(/[\s]/i);

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