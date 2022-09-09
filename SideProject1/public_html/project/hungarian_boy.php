<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Szia</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var hungarian_boy_name = [
"Kobe",
"Koby",
"Ervin",
"Karol",
"Ignac",
"Cobi",
"Cobe",
"Zsolt",
"Kobie",
"Cobie",
"Bela",
"So",
"Lona",
"Istvan",
"Taber",
"Robi",
"Atilano",
"Imrie",
"Taybor",
"Ferenc",
"Tayber",
"Imri",
"Bence",
"Zoltan",
"Sandor",
"Imre",
"Drago",
"Cobey",
"Attilio",
"Attila",
"Gedeon",
"Aurel",
"Kobey",
"Izsak",
"Atila",
"Atilo",
"Bethlem",
"Gyula",
"Imray",
"Ince",
"Sandros",
"Taibor",
"Tavor",
"Vidor",
"Vilmos",
"Xandros",
"Endre",
"Miklos",
"Adojan",
"Akos",
"Csepel",
"Denes",
"Dezso",
"Elod",
"Farkas",
"Ferko",
"Frigyes",
"Gellert",
"Gyala",
"Jaxith",
"Kolos",
"Levente",
"Neci",
"Ors",
"Pentele",
"Rendor",
"Titusz",
"Uros",
"Zoltin"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, hungarian_boy_name.length-1);
    result.innerText = hungarian_boy_name[index];
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