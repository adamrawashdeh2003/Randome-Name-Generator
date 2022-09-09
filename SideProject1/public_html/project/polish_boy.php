<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Witam</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const polish_boy_name = 
`Kasper
Konrad
Marek
Mieczyslaw
Boleslaw
Ludwik
Ocia
Wladyslaw
Casimir
Zarek
Marik
Zbigniew
Jerzy
Melchior
Kord
Jedrek
Janek
Jedrick
Jacek
Aleksy
Iskra
Apolinary
Apoloniusz
Benedykt
Bogumierz
Bogumil
Boguchwal
Boryslaw
Bratumil
Budzislaw
Chwalibog
Czcibor
Demetrjusz
Dionizy
Dobieslaw
Dobromierz
Dobroslaw
Dobry
Egidiusz
Knoz
Lubomir
Ludoslaw
Malchior
Malkior
Melker
Melkior
Raclaw
Broda
Jaskier
Vesemir`;

const new_name = polish_boy_name.split(/[\s]/i);

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