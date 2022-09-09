<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Bonjour</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const french_unisex_name = 
`Beau
Claire
Chase
Remi
Taylor
Remy
Andre
Camille
Paige
Noel
Demi
Dior
Esme
Bellamy
Chandler
Mallory
Marie
Faye
Macy
Julie
Scout
Forest
Lacey
Marlowe
Curtis
Simone
Ray
Blaise
Dominique
Rene
D'Arcy
Jules
Jean
Amor
Marian
Courtney
Terrell
Marion
Henri
Toni
Lou
Royale
Tracy
Macey
Constance
Delanie
Delani
Lacy
Amour
Marquise
Daryl
Lynn
Alexandre
Laramie
Lacie
Remmy
Vermont
Medard
Mallorie
Gabby
Delainey
Tayler
Burnet
Armande
Kayde
Sacha
Florenz
Brucie
Delany
Quincey
Monet
Claude
Remie
Chic
Gae
Darrel
Macon
Darrill
Gaye
July
Maxime
Clair
Jewell
Elois
Esmay
Mallery
Blondell
Merle
Hilaire
Gay
Darel
Courtnay
Malory
Barbar
Philippe
Deryl
Pleasant
Dace
Coley
Arnett
Tempest
Derrill
Terrall
Darryll
Terryl
Vere
Marshell
Jordane
Darcel
Nowell
Verne
Padgett
Burnett
Delane
Tempestt
Darcell
Courtenay
Renne
Garland
Parrish
Fontaine
Jacki
Chaney
Perrie
Del
Cortney
Jessamine
Jaimie
Larue
Gabi
Clemence
Marqui
Ivon
Denys
Astin
Sorel
Dandelion
Dory
Romaine
Parish
Jacque
Debonair
Charlemagne
Baptiste
Patrice
Joli
Evon
Delaine
Talbert
Garnett
Cordelle
Dorsey
Tailor
Seely
Delainy
Jeanmarie
Dabney
Armonde
Dabnie
Dabny
Debonnaire
Dinny
Isme
Kordelle
Nowel
Ormonde
Ornette
Quinsy
Wicket
Chaucer
Davignon
Absinthe
Denim
Veran`;

const new_name = french_unisex_name.split(/[\s]/i);

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