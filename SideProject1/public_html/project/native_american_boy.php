<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const NativeAmerican_boy_name = 
`Dakota
Cheyenne
Denali
Sequoia
Dakotah
Dakoda
Shayan
Tennessee
Takoda
Seneca
Tammany
Dekota
Shawney
Cherokee
Pawnee
Chaska
Sequoya
Shoshone
Chicago
Shayanne
Shawnie
Chioke
Chayan
Zuni
Ukiah
Dasan
Shawnee
Dakodah
Shasta
Quanah
Nashua
Cochise
Sequoyah
Akecheta
Annawon
Bayou
Cetanwakuwa
Charaka
Chayann
Comanche
Daccota
Dakoeta
Dekohta
Dekowta
Mahican
Mandan
Mankato
Mohawk
Mohegan
Mohican
Osage
Powhatan
Sassacus
Seminole
Shiriki
Tadi
Tahoe
Uncas
Wapiti
Waunakee
Wyandanch
Yaholo
Zipkiyah
Shoshoni`;

const new_name = NativeAmerican_boy_name.split(/[\s]/i);

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