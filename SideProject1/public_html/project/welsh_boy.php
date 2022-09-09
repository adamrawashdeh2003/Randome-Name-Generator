<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Helo</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const welsh_boy_name = 
`Owen
Dylan
Kai
Evan
Bryson
Maddox
Reese
Gavin
Morgan
Griffin
Ellis
Cayden
Drew
Bowen
Brynn
Rhys
Kendrick
Trevor
Reece
Pierce
Meredith
Marvin
Winnie
Brycen
Arian
Kye
Jones
Merrick
Tegan
Vaughn
Emrys
Bryn
Teigan
Brysen
Ewan
Dru
Cecil
Lloyd
Kendrix
Don
Marlin
Merlin
Floyd
Broderick
Conway
Dillan
Welch
Evans
Breeze
Glin
Kendric
Drue
Newlin
Merlen
Dewie
Evyn
Mervin
Merv
Gavyn
Gareth
Guinn
Gawaine
Evaan
Arwyn
Ina
Dyllan
Dewey
Merlynn
Wynne
Gwin
Marve
Parrie
Lewellyn
Gwinn
Dewy
Gavino
Loyde
Murvin
Garret
Gaynor
Evin
Cary
Merwyn
Rice
Dover
Taliesin
Griffith
Cerdic
Dewi
Trahern
Jeffie
Garreth
Cadel
Elwyn
Llewellyn
Morgaine
Deren
Meredyth
Emlyn
Lew
Bivian
Cadell
Cecilio
Parry
Dylon
Mostyn
Kendricks
Mervyn
Tarrant
Glynn
Wyn
Cassedy
Gawain
Jesstin
Trevar
Ceri
Bevon
Merlyn
Eleisha
Morgun
Glyn
Wallie
Yago
Ieuan
Merwin
Jestin
Rees
Evann
Gaven
Daryn
Keri
Kaye
Vaughan
Morgen
Trever
Madox
Gwynn
Llewelyn
Kendrik
Kaj
Ivor
Even
Davyn
Wallis
Wally
Madoc
Kenrick
Howell
Hopper
Bryse
Carwyn
Taren
Rhysand
Marven
Loyd
Gavan
Carnell
Brysin
Jeston
Aeron
Dyllon
Yale
Sayre
Sayer
Kendryck
Maddock
Lugh
Dee
Anwyll
Merideth
Meridith
Dai
Tudor
Trevis
Marwin
Jonis
Romney
Iago
Marvyn
Kenn
Colwyn
Gavynn
Bowin
Nye
Bevan
Gwyn
Aled
Alun
Aneirin
Aneurin
Anwel
Anwell
Anwil
Anwill
Anwyl
Arfon
Beavan
Beaven
Beven
Bevvan
Bevvin
Bevvon
Brynmor
Caddell
Caddock
Cadfael
Cadman
Cadoc
Cadog
Cadogan
Caerwyn
Ceredig
Caradoc
Caradog
Caragod
Cecilius
Cledwyn
Colwin
Colwynn
Conwy
Craddock
Cradock
Dodds
Dylonn
Einion
Elwynn
Emlen
Euen
Ev
Ewy
Fletch
Garith
Garnock
Garyth
Gawayn
Gawayne
Gethin
Glendower
Glyndwer
Glyndwr
Gower
Gwalchmai
Gwayn
Gwayne
Heddwyn
Hedwin
Hedwyn
Hedwynn
Hopkin
Hopkins
Hopkinson
Hopkyns
Hoppner
Howel
Howells
Iefan
Ifan
Mabon
Keh
Kenricks
Kenrik
Lewellen
Lleu
Llewellen
Llwewellin
Lugus
Maddocks
Madock
Madocks
Madog
Marwynn
Meilyr
Merlinn
Merven
Mervynn
Merwinn
Morrgan
Murvyn
Murvynn
Parrey
Renfrew
Rhydderch
Sayers
Sayres
Talfrin
Talfryn
Talfrynn
Tallfryn
Tarrent
Teilo
Trahearn
Trahearne
Traherne
Trefor
Uther
Velcho
Wallach
Wallas
Walwin
Walwinn
Walwynn
Walwynne
Welsh
Welwyn
Wilse
Ynyr
Yorath
Cecyl
Gwynedd
Emhyr
Barriss`;

const new_name = welsh_boy_name.split(/[\s]/i);

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