<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hei</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const finnish_girl_name = 
`Niko
Sami
Lael
Veera
Mikko
Ireene
Noora
Aili
Jari
Ilona
Hanni
Kalle
Kaisa
Kauri
Eeva
Maija
Rebekka
Jaana
Saija
Ulla
Kirsi
Ilda
Martta
Riina
Satu
Tiia
Sisu
Aino
Aliisa
Ansa
Eerika
Elvi
Esteri
Fiia
Helka
Helmi
Heta
Iida
Inkeri
Kaarina
Lahja
Milja
Noomi
Orvakki
Santeri
Sohvi
Taimi
Tuuli
Yrsa
Fidan
Liekki
Runo
Touko
Maku`;

const new_name = finnish_girl_name.split(/[\s]/i);

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