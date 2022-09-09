<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>שלום</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const hebrew_unisex_name = 
`Jaden
Lia
Rae
Mika
Mariel
Marion
Malak
Misha
Mikko
Jayden
Ava
Jaira
Cale
Ilia
Zuriel
Ora
Isa
Azrael
Jesse
Caleb
Toby
Addy
Rani
Kalin
Elisha
Mischa
Leigh
Abby
Asa
Carmel
Ari
Lea
Addie
Izzy
Ozzie
Adan
Vida
Mira
Aviah
Meera
Uriah
Shiloh
Bibi
Gabby
Shalom
Zariah
Simone
Arie
Carmen
Lynn
Gail
Jordan
Alba
Genesis
Jeth
Tobi
Kaylah
Elisheva
Daffy
Jeriel
Libby
Jenesis
Eli
Amir
Aeryn
Oz
Ray
Jael
Nyree
Abir
Eda
Kerrin
Jeanne
Devery
Shilo
Yannick
Jamie
Maddy
Zeva
Isha
Jocelyn
Kaylene
Marah
Marlyn
Aeron
Keilah
Bethel
Mo
Lisha
Moe
Ninoshka
Noe
Ariel
Ario
Matti
Mindy
Natty
Moriel
Jodi
Jori`;

const new_name = hebrew_unisex_name.split(/[\s]/i);

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