<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>สวัสดี</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const thai_girl_name = [
"Kwang",
"Thong",
"Sup",
"Waan",
"Wila",
"Ubol",
"Yindee",
"Suchada",
"Solada",
"Ratana",
"Phueng",
"Phitsamai",
"Sanouk",
"Piti",
"Saengdao",
"Prija",
"Pensri",
"Nin",
"Muan Nang",
"Lamai",
"Mekhala",
"Kulap",
"Madee",
"Kwanjai",
"Kohsoom",
"Khajee",
"Chimlin",
"Songsuda",
"Duanphen",
"Kamon",
"Kannika",
"Dao",
"Chatchada",
"Chantana",
"Chatmanee",
"Bun Ma",
"Busaba",
"Chaem Choi",
"Achara",
"Ambhom"
];


var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, thai_girl_name.length-1);
    result.innerText = thai_girl_name[index];
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