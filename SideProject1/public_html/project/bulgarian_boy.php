<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Здравейте</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const bulgarian_boy_name = 
`Andrei Angel Aleksandar Aleksi Anastas Anton Asen Asparuh Atanas Blagun Bogdan Bogomil Bojidar Boris Borislav Boyan Boiko Branimir Dafo Daniel Danuil Delyan Desislav Dimo Dobromir Dragan Dragomir Elian Genadi Georgi Grozdan Hristo Hristofor Ilian Iordan Ivan Ivo Ivailo Kalin Kaloyan Kiril Kostadin Krasimir Krum Lyuben Lyubomir Mihail Milan Milen Miroslav Mladen Momchil Nayden Nedelcho Nedyalko Nikola Nikolay Ognian Ognyan Pencho Petar Plamen Radko Radomir Radoslav Rayko Rumen Sabin Samuil Simeon Spas Stefan Stanimir Stanislav Stanko Stilyan Stoyan Theodosii Tihomir Todor Tsvetan Valko Valentin Vasil Ventsislav Veselin Vladimir Vladislav Yasen Yavor Zdravko Zhelyazko Zhivko Zlatan Zlatko`;

const new_name = bulgarian_boy_name.split(/[\s]/i);

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