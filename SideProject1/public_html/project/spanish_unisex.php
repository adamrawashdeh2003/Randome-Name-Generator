<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hola</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const spanish_unisex_name = 
`Rai
Lia
Rae
Jade
Iliana
Ceri
Jayde
Ora
Quinn
Xavier
Serena
Jacinth
Alfonso
Izzy
Vida
Esme
Lea
Mira
Aldo
Laurence
Kassandra
Flip
Lynn
Carmen
Aba
Mona
Eli
Cyprien
Devan
Mila
Roselyn
Gabriel
Javier
Andrea
Amor
Rocio
Ario
Noe
Jayme
Marvel
Rosario
Elia
Eva
Benny
Belen
Bennie
Mani
Jacy
Lin
Devi
Manny
Lucila
Claudio
Consuelo
Lyn
Lindy
Quin
Calvino
Dani
Cris
Alta
Jamee
James
Rio
Nevada
Karmen
Jaimey
Jaymie
Jose
Adonia
Dacio
Concha
Guadalupe
Connie
Patricia
Olinda
Marlin
Jaide
Verda
Dominica
Linden
Damian
Modestus
Lavinia
Lani
Rosiyn
Nataly
Alfredo
Lalla
Rubi
Jaime
Letitia
Pip
Natale
Rosey
Santana
Roberto
Nicanor
Katia
Lynne`;

const new_name = spanish_unisex_name.split(/[\s]/i);

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