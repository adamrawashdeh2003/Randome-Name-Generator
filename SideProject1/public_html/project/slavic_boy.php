<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Zdravstvuyte</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const slavic_boy_name = 
`Ivan
Nikolai
Mylo
Niklaus
Anton
Nikola
Vladimir
Karli
Vlasta
Filip
Jaroslav
Ladislav
Sagan
Ladislaus
Florien
Miroslaw
Wenceslaus
Bronislaw
Michal
Bohumil
Floryan
Wenzel
Vaclav
Bane
Miran
Boris
Kaz
Bogdan
Borys
Sable
Florian
Novak
Tesla
Laszlo
Predrag
Juri
Vlad
Tomislav
Radoslav
Boban
Mile
Milenko
Jaroslaw
Lech
Vuk
Ivano
Jaromir
Kazimir
Stana
Tibor
Stanislaus
Vyacheslav
Wladimir
Ton
Jasha
Jascha
Verdell
Zann
Ivanhoe
Lazlo
Andrick
Andrik
Andon
Jarek
Casmir
Zan
Miroslav
Mirko
Kasimir
Caz
Casimiro
Andric
Jaris
Janos
Aleksa
Kazimierz
Borja
Mirek
Radek
Dusan
Branko
Darko
Damyan
Stanislaw
Kazmer
Wojciech
Kass
Iwan
Radovan
Bialas
Boriss
Borris
Branimir
Branislav
Casimeer
Casmire
Florrian
Jano
Kasimiro
Svatoslav
Lacko
Ladislas
Laslo
Mircea
Miroslawy
Radim
Radimir
Radoje
Radoman
Radomir
Rastko
Stanek
Stanicek
Stanislas
Stannes
Stanousek
Stasio
Svatomir
Teun
Toon
Venceslao
Vlacheslav
Vladamir
Vladimeer
Vladja
Vyachaslav
Wenceslas
Wenczeslaw
Wiencyslaw
Wladimyr
Wojtek
Woyzeck
Wozzeck
Zandro
Zandros
Leszek
Dracula
Radovid`;

const new_name = slavic_boy_name.split(/[\s]/i);

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