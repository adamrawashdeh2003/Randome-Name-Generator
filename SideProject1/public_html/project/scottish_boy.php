<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Halò</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const scottish_boy_name = 
`Alasdair
Alec
Angus
Archibald
Archie
Arran
Auley
Baird
Barclay
Blaine
Blake
Brodie
Cairn
Callen
Callum
Campbell
Christie
Colin
Cormac
Dougal
Douglas
Duncan
Dunn
Euan
Evander
Fergus
Finlay
Finn
Fraser
Gordon
Graeme
Grant
Hamish
Harris
Hector
Innes
Ivor
Jamie
Keir
Kelso
Kenzie
Kerr
Kester
Knox
Lachlan
Laith
Laurie
Leith
Lennox
Lewis
Lockie
Lyle
Mac
Macaulay
Magnus
Malcolm
Maxwell
Mingus
Mungo
Munro
Murdo
Murray
Nairn
Ninian
Niven
Rab
Ramsay
Ritchie
Roban
Ross
Ruairi
Ruskin
Sandy
Seumas
Sholto
Stewart
Struan
Tate
Tavish
Thorfinn
Torquil
Wiley`;

const new_name = scottish_boy_name.split(/[\s]/i);

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