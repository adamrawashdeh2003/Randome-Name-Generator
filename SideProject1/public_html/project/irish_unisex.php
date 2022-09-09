<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Dia dhuit</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const irish_unisex_name = 
`Maeve
Hallie
Kylie
Caelan
Erin
Braelyn
Shaun
Farren
Gael
Payton
Regan
Cale
Quinn
Bevin
Lacey
Ayden
Ciaran
Blaine
Kalin
Fallon
Faye
Tierney
Leigh
Darcy
Myrna
Adan
Ashlyn
Innis
Sheridan
Cailey
Keely
Daron
Delancy
Kelsey
Kody
Cori
Hayley
Cailin
Cory
Gail
Kane
Rye
Morgan
Aiden
Kaylah
Glynn
Rian
Mona
Peyton
Ryley
Torey
Gillian
Teagan
Duane
Blayne
Carly
Corin
Kerrin
Lee
Innes
Ashlynn
Haleigh
Kasey
Hailey
Dillon
Corrie
Shayne
Barry
Shayan
Quincy
Kiley
Kodie
Troy
Tegan
Kelsi
Keilah
Kristian
Caley
Mo
Renny
Shan
Breen
Brady
Carling
Riley
Tiernan
Trace
Sloan
Glenn
Farron
Carey
Darragh
Merrill
Rowan
Shawn
Farran
Devyn
Shae
Darby
Finn`;

const new_name = irish_unisex_name.split(/[\s]/i);

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