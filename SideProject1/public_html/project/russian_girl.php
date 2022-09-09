<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Привет</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const russian_girl_name = 
`Alina
Nadia
Sasha
Anya
Tiana
Lara
Alena
Natasha
Zoya
Tatiana
Yuliana
Tianna
Tania
Katia
Zena
Zenaida
Yelena
Nadiya
Katya
Yula
Leyna
Olene
Tanya
Nadya
Tyanna
Taniya
Zarya
Taina
Calina
Tarnya
Mischa
Nada
Danya
Tahna
Yulianna
Yeva
Tassa
Zina
Tyana
Tahsha
Tashina
Tasiya
Tiandra
Anastasiya
Sascha
Khrystyn
Yuridiana
Taska
Khristen
Sonje
Tatia
Tonya
Tatianna
Sasheen
Jalena
Ekaterina
Khristine
Tanja
Tatijana
Nadija
Tatiania
Zoia
Oksanna
Jalaine
Tiane
Tanee
Feodora
Nadie
Yulia
Tasya
Inessa
Elizaveta
Faina
Tashia
Tatyanah
Tatjana
Tahnia
Tanazia
Taitianna
Tahnya
Tianne
Khrystyna
Khrystyne
Tassie
Toshiana
Khrystina
Tahni
Tanita
Lyubov
Tasha
Nadja
Tana
Galina
Anoushka
Alyona
Nadezhda
Tatiyana
Alla
Tionna
Jelina
Lada
Khristina
Ludmila
Lenya
Dinara
Czarina
Tashi
Yalena
Tiani
Tiahna
Taisia
Jalayna
Latonya
Sitka
Taisiya
Tiona
Nadege
Yuliya
Tatyanna
Yekaterina
Tiauna
Jalaina
Agrafena
Akulina
Annushka
Anouska
Avdotya
Bisenija
Biserka
Bronya
Darit
Dusa
Duscha
Duschenka
Duschinka
Dusica
Fenya
Fyedora
Jelka
Khristeen
Khristyana
Khristyna
Lenuschka
Lenushka
Lenyushka
Matrena
Matresha
Matrina
Matriona
Matryna
Motreina
Nadejda
Nady
Nadyenka
Nadzia
Natka
Olenya
Olinia
Olinija
Pheodora
Saschenka
Shurka
Sohnia
Sohnnja
Sondja
Sondya
Sonnja
Taitiann
Tanamaree
Taneea
Tasenka
Tashey
Tassiana
Tati
Tatie
Tatihana
Taziana
Tetyana
Tianara
Tiatiana
Yarina
Yaryna
Yelisabeta
Yelisabetta
Yelizabet
Yelizavetha
Yerina
Yevka
Youliya
Yulenka
Yulinka
Yulka
Zinaida
Zinaide
Zoyenka
Zoyya
Agafon
Shura
Simeron
Simarron
Ihar
Doroteya
Innessa
Ksana
Lubov
Luda
Nadenka
Yefim`;

const new_name = russian_girl_name.split(/[\s]/i);

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