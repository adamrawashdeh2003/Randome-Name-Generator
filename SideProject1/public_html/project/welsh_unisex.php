<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Helo</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const welsh_unisex_name = 
`Dylan
Kai
Evan
Reese
Morgan
Ellis
Drew
Brynn
Reece
Meredith
Winnie
Merrick
Tegan
Bryn
Teigan
Dru
Cecil
Marlin
Dillan
Breeze
Drue
Evyn
Guinn
Arwyn
Ina
Dyllan
Wynne
Gwin
Marve
Gwinn
Gaynor
Cary
Taliesin
Jeffie
Morgaine
Deren
Meredyth
Emlyn
Glynn
Wyn
Ceri
Merlyn
Glyn
Wallie
Daryn
Keri
Kaye
Morgen
Gwynn
Wallis
Wally
Taren
Rhysand
Aeron
Dee
Merideth
Meridith
Dai
Trevis
Jonis
Romney
Bevan
Gwyn
Cecyl
Gwynedd
Barriss`;

const new_name = welsh_unisex_name.split(/[\s]/i);

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