<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Χαίρετε</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const greek_unisex_name = 
`Maeve
Hallie
Artemis
Lia
Dion
Iliana
Percy
Yuri
Cade
Galen
Quinn
Nico
Kade
Kaye
Kari
Nikita
Ari
Adria
Lea
Allison
Izzy
Andie
Darion
Dorian
Cailey
Alika
Kassandra
Roe
Cyra
Kasen
Cori
Cato
Rene
Attie
Cosme
Flip
Genesis
Stevie
Taryn
Zephyr
Fenix
Mona
Daffy
Sandy
Jenesis
Alastair
Leandre
Corin
Cyprien
Terrie
Ange
Sherill
Teddie
Cris
Alexius
Alexandre
Ali
Carrie
Cole
Lindy
Ida
Marji
Phil
Odell
Nikola
Adonia
Alexis
Beryl
Darien
Paris
Nic
Alley
Allie
Karina
Ira
Iasius
Drew
Dru
Sandie
Dore
Daryn
Diandre
Anis
Basilia
Orphie
Mel
Nell
Olinda
Dennet
Stacey
Kallita
Karla
Nikki
Rell
Tigris
Damyan
Cass
Angie
Baucis
Alexi`;

const new_name = greek_unisex_name.split(/[\s]/i);

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