<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hello</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const british_unisex_name = 
`Addison
Adrian
Ainsley
Alex
Andy
Ari
Ash
Aspen
Aubrey
Bailey
Bay
Blaine
Bobbie
Brett
Brook
Caelan
Campbell
Carroll
Charlie
Chris
Clay
Corey
Dana
Dakota
Dale
Daryl
Devin
Dorian
Drew
Eddie
Eli
Elliott
Frances
Frankie
Gabriel
Glenn
Gray
Harper
Hayden
Jamie
Jean
Jesse
Jordan
Jules
Julian
Kaden
Kelly
Kennedy
Lake
Logan
Max
Morgan
Pat
Peyton
Ray
Reed
Riley
River
Roan
Rudy
Ryan
Sage
Sam
Shawn
Sean
Stevie
Tanner
Taylor
Toby
Tyler
Val
West
Winter`;

const new_name = british_unisex_name.split(/[\s]/i);

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