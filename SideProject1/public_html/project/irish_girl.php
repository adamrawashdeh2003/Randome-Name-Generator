<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Dia dhuit</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const irish_girl_name = 
`Aednat
Aibhlinn
Aibreann
Aideen
Ailbe
Aileen
Ailis
Aine
Alannah
Alby
Anna
Anya
Aoibheann
Aoife
Ashling
Ava
Barbara
Beibhinn
Bevan
Bevin
Blathnaid
Branna
Briana
Brigid
Brigit
Brona
Bronagh
Caireann
Caitlin
Caoilainn
Caoimhe
Cara
Cassidy
Catherine
Catriona
Chevonne
Ciara
Claire
Cliona
Cloda
Clodagh
Colleen
Daimhin
Daireann
Darcy
Darina
Davin
Davina
Dearbhail
Dechtire
Deirdre
Dervla
Eachna
Ealga
Eavan
Eibhleann
Eileen
Eimear
Einin
Eithne
Elaine
Elizabeth
Ena
Enat
Enda
Enya
Etain
Eva
Eveleen
Eveline
Evelyn
Fianna
Fidelma
Finola
Fiona
Fionnoula
Gael
Gormlaith
Grainne
Granuaile
Hannah
Ide
Iona
Ita
Jane
Janet
Janette
Kaitlin
Kalin
Karan
Karen
Kathleen
Keela
Keelin
Keera
Keeva
Keira
Kerry
Keva
Kira
Kyna
Maebh
Maeve
Maire
Mairead
Maolisa
Margaret
Mary
Meara
Melissa
Meryl
Miren
Moirin
Mona
Morna
Muireann
Muirgheal
Muirne
Muriel
Myrna
Neala
Neave
Nessa
Niamh
Niav
Noelle
Nola
Nollaig
Nora
Nuala
Oonagh
Orla
Orlaith
Radha
Regan
Riona
Rionach
Roisin
Rori
Rosaleen
Ruari
Ryanne
Saoirse
Shauna
Shavon
Sheela
Sheena
Sheenagh
Sheila
Shevaun
Sibeal
Sile
Sinead
Siobhan
Sorcha
Sybil
Teagan
Ultana
Yseult`;

const new_name = irish_girl_name.split(/[\s]/i);

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