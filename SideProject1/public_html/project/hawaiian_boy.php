<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Aloha</h1>

<button>Generate the Name!</button> 

<h2>Name</h2>

<script>
var hawaiian_boy_name = [
"Kalani",
"Keanu",
"Kalea",
"Noelani",
"Keoni",
"Kaleo",
"Nakoa",
"Makaio",
"Kekoa",
"Kalei",
"Alaka'i",
"Nani",
"Kanoa",
"Makani",
"Iokepa",
"Keli'i",
"Launi",
"Mano",
"Iakona",
"Kauai",
"Kawika",
"Kimo",
"Keoki",
"Nohea",
"Aloha",
"Kawai",
"Aukai",
"Alohilani",
"Kaimi",
"Analu",
"Alekanekelo",
"Alekona",
"Aliimalu",
"Aloiki",
"Anekelea",
"Anuenue",
"Aukelenuiaiku",
"Luano",
"Manollo",
"Nohokai",
"Pekelo",
"Pekelo",
"Pali",
"Palila",
"Nanaue",
"Ali'imalu"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, hawaiian_boy_name.length-1);
    result.innerText = hawaiian_boy_name[index];
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