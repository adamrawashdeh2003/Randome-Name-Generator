<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Halò</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const scottish_girl_name = 
`Aberdeen
Adair
Aifric
Aili
Ailsa
Aimil
Ainsley
Alison
Allison
Alwyne
Amilia
Annabel
Artis
Aurla
Blair
Bonnie
Brice
Bryce
Caitriona
Cam
Camden
Cameron
Campbell
Caoimhe
Carson
Collins
Doon
Doone
Douglas
Eileen
Eilidh
Elaine
Elsie
Elspeth
Ferelith
Fianna
Fife
Fifer
Finley
Fiona
Firth
Flora
Geneen
Glasgow
Glenn
Greer
Grier
Guthrie
Idonea
Ilisa
Iona
Iseabail
Iseabal
Ishbel
Isla
Islay
Isobel
Jamie
Janneth
Jessie
Kenzie
Kerr
Kyle
Kyleigh
Kylie
Leith
Lennox
Leslie
Lileas
Lilias
Logan
Lyle
Mackenzie
Mairi
Maisie
Maisy
Malvina
Marjorie
Mckenzie
Mckinley
Mina
Mirin
Mirren
Moibeal
Moireach
Mór
Mórag
Muireall
Murray
Nairne
Neilina
Nessa
Norlene
Paisley
Reynold
Rhona
Roan
Roleen
Rona
Ronalda
Rory
Rowan
Roy
Ruthven
Scotland
Senga
Shona
Sìleas
Skye
Tamlane
Tammy
Teasagh
Vevina
Willamina
Wilma
Wylie
Yvaine`;

const new_name = scottish_girl_name.split(/[\s]/i);

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