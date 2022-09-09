<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Olá</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const portuguese_girl_name = 
`Camila
Mariana
Inez
Izabel
Estela
Beatriz
Mafalda
Rosario
Ofelia
Cloe
Leonor
Mar
Iolanda
Filomena
Bibiana
Rida
Deolinda
Judite
Candelaria
Iuma
Creola
Gilma
Palmira
Lecia
Madalena
Margarida
Nuria
Brigida
Telma
Bia
Evora
Tereza
Catrina
Catia
Luzia
Josefa
Seda
Rosana
Cosme
Iria
Agueda
Branca
Brites
Creole
Creolla
Criolla
Veedonia
Vidonia
Vidonya
Benedita
Andreia
Belinha
Edite
Elisabete
Gertrudes
Graca
Julinha
Mariazinha
Nelinha
Neves
Teresinha
Belmira
Cesaria
Doroteia
Dylla
Enia
Ermenjart
Felisberta
Glaucia
Gylda
Carmo
Joaninha
Kiania
Miciela
Mota
Rute
Uiara
Umoja
Dudu`;

const new_name = portuguese_girl_name.split(/[\s]/i);

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