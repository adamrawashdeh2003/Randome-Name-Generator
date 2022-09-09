<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hallo</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const german_unisex_name = 
`Brooks
Charlie
Aubrey
Brooklyn
Emerson
Ryker
Max
Karter
Barrett
Jocelyn
Royce
Alison
Charleigh
Maddison
Charley
Robin
Allyson
Alisson
Kellen
Mattie
Isa
Beck
Bobby
Billy
Robyn
Linden
Pepper
Addie
Aubri
Freddy
Alder
Charly
Keller
Robbie
Fred
Berlin
Wendell
Freddie
Alfy
Almarine
Brook
Alleyne
Adair
Ado
Fritz
Rudelle
Dusty
Caryll
Karsten
Alix
Allayne
Adi
Addy
Wister
Norm
Harrie
Fritzie
Charlot
Willy
Hal
Cortland
Ricki
Gerrie
Mena
Aubry
Joss
Matty
Roddie
Rudi
Robby
Carrey
Fritzi
Sapir
Talbott
Josceline
Adal
Wileen
Heike
Ala
Dustan
Bernie
Sorrell
Caryl
Gerri
Charle
Ermin
Jerrie
Carel
Shone
Brookie
Wilmot
Carolan
Carrol
Kelle
Caroll
Joslin
Oli
Terell
Ade
Fredi
Carroll
Ro
Allyn
Matti
Germaine
Raynell
Rudie
Lannie
Marlea
Robbyn
Berny
Gilly
Wendall
Lanny
Karlin
Karel
Sorrel
Sylver
Ricci
Adaire
Aubery
Adare
Adayre
Alfre
Allcen
Allisoun
Aubary
Aubury
Berty
Gert
Wilmott
Wistar
Kahlo
Brenner
Rost`;

const new_name = german_unisex_name.split(/[\s]/i);

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