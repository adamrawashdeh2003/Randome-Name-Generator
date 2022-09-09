<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Ahoj</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var czech_girl_name = [
"Zdenka",
"Bronislava",
"Krista",
"Bula",
"Krissa",
"Ondrea",
"Andela",
"Vondra",
"Markeda",
"Marqueta",
"Markeeta",
"Kryssa",
"Krysti",
"Marketa",
"Olexa",
"Fiala",
"Ondra",
"Khris",
"Markee",
"Milada",
"Markia",
"Dalibora",
"Bohumila",
"Drahomira",
"Pepa",
"Vahnda",
"Vahnda",
"Vonni",
"Jagr"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, czech_girl_name.length-1);
    result.innerText = czech_girl_name[index];
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