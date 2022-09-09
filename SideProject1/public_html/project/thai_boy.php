<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>สวัสดี</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const thai_boy_name = [
"Rune",
"Prem",
"Niran",
"Dang",
"Thanom",
"Thapthim",
"Vidura",
"Thong Kon",
"Yod Rak",
"Yuthakon",
"Sud",
"Som Chai",
"Som Phon",
"Sanun",
"Santichai",
"San'ya",
"Runrot",
"Ruang Rit",
"Phassakorn",
"Ritthirong",
"Sunti",
"Phet",
"Phanumas",
"Preecha",
"Pravat",
"Panit",
"Mee Noi",
"Kraisee",
"Kriang Sak",
"Kusa",
"Mongkut",
"Lamon",
"Kla",
"Kob Sook",
"Paitoon",
"Sap",
"Kiet",
"Khaen",
"Pricha",
"Chatri",
"Chongrak",
"Kamon",
"Kasem",
"Chaow",
"Charoen",
"Decha",
"Chaloem",
"Chao Fah",
"Anada",
"Asnee",
"Boon Mee",
"Chatchom",
"Chati",
"Chaisai",
"Chai Son",
"Aat",
"Aawut",
"Chaiya"
];


var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, thai_boy_name.length-1);
    result.innerText = thai_boy_name[index];
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