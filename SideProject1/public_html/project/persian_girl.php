<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>سلام</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const persian_girl_name = 
`Esther
Jasmine
Lena
Jazmin
Jazmine
Yasmin
Roxanne
Jasmin
Yasmine
Ester
Aryana
Yazmin
Jazmyn
Jaslyn
Yasmeen
Roxana
Daria
Jaslynn
Kamaria
Roxy
Yasmina
Roxanna
Zarina
Darianna
Neema
Roxie
Essie
Darya
Cyra
Jasmyn
Parvin
Roxey
Etty
Cass
Dari
Roxene
Roshan
Roxianne
Lilac
Nima
Yasminda
Ismenia
Jazmyne
Jasminda
Roxine
Yazmine
Shahrazad
Jazmon
Bibi
Parveen
Tawnya
Yasmene
Etti
Chazmin
Jazzmynn
Jazminn
Darina
Jessamy
Hetty
Shahnaz
Darienne
Dariane
Darice
Jazzmon
Darielle
Vashti
Jasmyne
Padme
Jasmina
Ettie
Zareena
Zareen
Roxi
Roxann
Jazzmyn
Jazzmine
Derya
Cyrene
Bebe
Jessamyn
Jas
Darrelle
Yasamin
Xamira
Laleh
Padma
Doriane
Sadira
Roxane
Nazneen
Yasmeena
Jazzmin
Jasmeen
Estera
Cyrina
Cyrena
Cyrah
Anoush
Arezoo
Bahaar
Bano
Beebee
Behnaz
Dariele
Dhariana
Essy
Hesther
Jassamayn
Jazan
Jessimine
Roksanne
Roxandra
Roxeena
Roxiane
Roxyanna
Ruksana
Ruksane
Ruksanna
Scheherezade
Sharazad
Sharizad
Sheherezade
Soreeyah
Vashtee
Yasiman
Yasmena
Yasminia
Zohreh
Chaman
Erum`;

const new_name = persian_girl_name.split(/[\s]/i);

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