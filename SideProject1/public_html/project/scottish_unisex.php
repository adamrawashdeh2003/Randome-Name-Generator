<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Halò</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const scottish_unisex_name = 
`Karson
Rae
Akira
Payton
Carson
Quinn
Blaine
Kade
Ardis
Innis
Avery
Laurence
Blayne
Cailin
Cory
Roslyn
Peyton
Torey
Evan
Campbell
Kameron
Sandy
Ray
Laine
Alastair
Innes
Lee
Logan
Jamie
Ross
Earie
Caley
Ainsley
Cam
Kai
Edan
Lundy
Bryce
Sloan
Mindy
Finn
Manny
Blake
Greer
Forba
Jamison
Cason
Kay
Dee
Jacky
Jamee
Tory
Mackenzie
Lorne
Jaymie
Kyle
Drew
Brodie
Dallis
Edin
Linsey
Laren
Ros
Torrey
Torrie
McKay
Davy
Donnell
Christy
Boniface
Cameron
Reid
Mai
Corey
Jackie
Jean
Camron
Brann
Dallas
Gilly
Blane
Royall
Jaime
Gara
Lindsay
Cristy
Dal
Blair
Alex
Amhuinn
Alasdair
Adair
Lethe
Kason
Kamron
McKenna
Reade
Ramsey
Rose
Rosselin`;

const new_name = scottish_unisex_name.split(/[\s]/i);

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