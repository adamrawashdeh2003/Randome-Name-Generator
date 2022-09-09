<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Dia dhuit</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const irish_boy_name = 
`Aengus
Ailbe
Ailill
Alroy
Ardan
Art
Bartley
Bradan
Breandan
Brian
Cabhan
Canice
Carney
Carrick
Cathal
Cearul
Cian
Ciaran
Cillian
Clearie
Clooney
Coilin
Colm
Colman
Conall
Conan
Conchobhar
Conlaoch
Cormac
Cronan
Daire
Daithi
Dalaigh
Darcy
Davin
Deaglan
Derry
Desmond
Diarmuid
Dillon
Donal
Donncha
Dubhlainn
Eamon
Eirnin
Emmet
Enda
Ennis
Eoghan
Faolan
Feidhelm
Ferdia
Fergal
Fergus
Finbar
Fintan
Fionn
Gearoid
Glendon
Hugh
Iollan
Jarlath
Kevin
Lee
Liam
Lochlan
Lorcan
Malachi
Murtagh
Niall
Nollaig
Odhran
Oisin
Owen
Padraig
Peadar
Pearse
Proinsias
Quinlan
Quinn
Redmond
Reilly
Riordan
Ronan
Ruari
Seamus
Sean
Tadhg
Tierney
Tomas
Turlough
Ultan`;

const new_name = irish_boy_name.split(/[\s]/i);

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