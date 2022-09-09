<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var african_boy_name = [
"Abanu",
"Adebayo",
"Ajani",
"Akachi",
"Akello",
"Amadi",
"Amadou",
"Amari",
"Anan",
"Ayan",
"Ayo",
"Ayu",
"Azizi",
"Barack",
"Bayo",
"Bekele",
"Chi",
"Chibuike",
"Chidi",
"Chima",
"Congo",
"Dakari",
"Djimon",
"Dumi",
"Ebo",
"Ejiro",
"Enitan",
"Eskender",
"Farai",
"Gahiji",
"Garian",
"Haji",
"Ibo",
"Idi",
"Idir",
"Ikenna",
"Iniko",
"Itoro",
"Itri",
"Izem",
"Jatau",
"Jengo",
"Kabelo",
"Kamau",
"Kato",
"Kayin",
"Kehinde",
"Khamisi",
"Khari",
"Kofi",
"Kojo",
"Kwaku",
"Kwame",
"Lekan",
"Lencho",
"Limbani",
"Lishan",
"Mandela",
"Masozi",
"Massai",
"Mosi",
"Nairobi",
"Neo",
"Nnamdi",
"Obi",
"Odion",
"Okello",
"Okoro",
"Omari",
"Oyibo",
"Rudo",
"Rutendo",
"Sefu",
"Sekani",
"Selam",
"Seydou",
"Shango",
"Tadesse",
"Tafari",
"Tariku",
"Tatenda",
"Tau",
"Taye",
"Teboho",
"Tendai",
"Tendaji",
"Thabo",
"Thando",
"Themba",
"Udo",
"Uduak",
"Unathi",
"Uzochi",
"Yao",
"Yaw",
"Zaire",
"Zenebe",
"Zesiro",
"Zuberi",
"Zuri"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, african_boy_name.length-1);
    result.innerText = african_boy_name[index];
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