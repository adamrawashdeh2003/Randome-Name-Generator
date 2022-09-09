<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Szia</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var hungarian_girl_name = [
"Beatrix",
"Klara",
"Vica",
"Karol",
"Cobi",
"Reza",
"Aniko",
"Csilla",
"Gisella",
"Illona",
"Rozalia",
"ZsaZsa",
"Bora",
"Lona",
"Robi",
"Zizi",
"Eszter",
"Anelia",
"Karole",
"Aliz",
"Elona",
"Mariska",
"Jolan",
"Iren",
"Elonna",
"Eniko",
"Zsofia",
"Cintia",
"Sarika",
"Angyalka",
"Borbala",
"Boriska",
"Borka",
"Borsala",
"Borsca",
"Ellona",
"Gyula",
"Ilone",
"Ilonka",
"Ilonna",
"Juliska",
"Klari",
"Klarika",
"Klothild",
"Klothilda",
"Klothilde",
"Klotid",
"Klotilda",
"Klotilde",
"Orsolya",
"Orszebet",
"Tsigana",
"Tsigane",
"Tzigana",
"Tzigane",
"Yionna",
"Yllona",
"Zigana",
"Ziganna",
"Zsuzsanna",
"ZsiZsi",
"Zsuzsa",
"Boglarka",
"Csenge",
"Eszti",
"Eufrozina",
"Evike",
"Gizi",
"Gyorgyi",
"Ildiko",
"Katelya",
"Kinga",
"Kitarni",
"Martuska",
"Reka",
"Sass",
"Szandra",
"Szilvia",
"Szofika",
"Szofika",
"Teca",
"Zsofika" 
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, hungarian_girl_name.length-1);
    result.innerText = hungarian_girl_name[index];
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