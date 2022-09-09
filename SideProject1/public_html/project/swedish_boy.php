<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hallå</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const swedish_boy_name = 
`Abraham 
Adam 
Adel 
Adolf
Adrian
Åke
Albert 
Alexander
Alf 
Alfred 
Algot 
Anders
Andreas
Ante 
Anthon
Anthoni
Anton 
Antonius
Antons
Antony
Arne 
Arthur
Arvid
August 
Axel 
Baldur 
Bengt
Benkt
Bernhard
Bertil
Birger
Bjorn
Bo 
Börje
Bosse 
Botvid
Bror
Calle 
Carl 
Charle 
Christer
Christian 
Claes
Claes-Göran
Clas 
Dag 
Daniel
David 
Ebbe
Edvard
Edvin
Egon
Einar
Ejnar
Eldar
Elias
Emil 
Enar
Eric
Erik
Erland
Erling
Esbjörn
Evald
Evert
Felix 
Folke 
Fredrik
Fridolf
Fritiof
Gert
Göran
Gösta
Greger 
Gunnar
Gustav 
Gustavus 
Håkan
Hampus
Hannes
Hans 
Harald
Helge
Herbert 
Herman 
Hilding
Hjalmar
Holger 
Inge
Ingemar
Ingmar
Ingvar 
Irnes
Ivar
Jacob 
Jakob 
Jan 
Janne
Jarl
Jesper
Joakim
Joel 
Johan 
Johannes
John 
Jonas 
Jonatan
Jöns
Jörgen 
Josef 
Kalle
Karel 
Karl 
Karli 
Karol 
Kjell
Klaus
Knut
Krister
Kristian
Kristofer
Kurt
Lars
Lasse
Lauritz
Leif
Lennart
Linus
Lotar 
Lothar
Love 
Ludvig
Lukas
Magnus
Malte
Måns
Marcus
Mårten
Martin
Matias
Mats
Matthias
Mattias
Mauritz
Melker
Milan 
Nanne 
Niklas 
Nils
Norbert
Odin 
Ola 
Olaf
Oliver 
Olov
Örjan
Orvar
Oscar 
Ossian 
Osvald 
Otto
Ove 
Owe
Pär
Paul
Pehr
Pelle 
Per
Peter 
Petter 
Philip
Pontus 
Ragnar
Ralph
Rasmus 
Robert
Roine 
Rolf
Ronald
Rudolph
Rune 
Rutger
Samuel 
Sigurd 
Simon 
Sixten
Staffan
Stefan 
Stellan
Sten 
Stig 
Svante
Sven
Sven-Åke
Tage
Teodor
Thaddeus
Thage
Theodor
Theodore
Thomas 
Thony 
Thor 
Tobias
Tomas 
Tonie
Torbjörn
Tore
Torgny
Ulf
Ulrik
Uno 
Vagn
Vilhelm
Vincent
Walter
Werner
Yngve`;

const new_name = swedish_boy_name.split(/[\s]/i);

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