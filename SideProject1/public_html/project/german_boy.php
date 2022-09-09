<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hallo</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const german_boy_name = 
`William
Henry
Charles
Brooks
Robert
Charlie
Leonardo
Aubrey
Brooklyn
Emerson
Milo
Ryker
Max
Karter
Barrett
Alan
Richard
Walter
Derek
Jocelyn
Gunner
Raymond
Wilder
Otto
Royce
Archie
Garrett
Jeffrey
Hank
Frank
Alison
Charleigh
Frederick
Lewis
Maddison
Roberto
Charley
Conrad
Robin
Emmitt
Albert
Derrick
Otis
Leonard
Ozzy
Allyson
Bruno
Roland
Louie
Roger
Alberto
Harry
Ricky
Alisson
Rudy
Bear
Adler
Kellen
Alaric
Henrik
Carl
Rodney
Mattie
Isa
Beck
Aldo
Bobby
Billy
Robyn
Rogelio
Gerald
Shmuel
Will
Ernest
Linden
Kolt
Jeffery
Zeppelin
Kolby
Kilian
Pepper
Addie
Lamar
Willie
Gilbert
Wolfgang
Warner
Hans
Lyam
Luther
Freddy
Dereck
Fredrick
Alder
Gerard
Osvaldo
Humberto
Guy
Karl
Arnold
Derick
Wilmer
Charly
Wolf
Leopold
Archibald
Keller
Robbie
Fred
Mayer
Willkie
Roderick
Fitzgerald
Adolfo
Berlin
Wendell
Hoffman
Riker
Hendrick
Othmar
Klaus
Bruin
Markell
Johann
Markel
Emmit
Freddie
Kurt
Arvin
Ludvik
Rickey
Hermie
Raymundo
Chaz
Alfy
Aage
Ignatz
Richie
Sigismund
Howe
Manfried
Erhardt
Gottlieb
Erhard
Oswell
Adelmo
Thell
Lindburg
Stearns
Heriberto
Belarmino
Ailean
Ota
Willmar
Adalbert
Aubert
Rodolphe
Arvy
Rainer
Herbert
Almarine
Brook
Ferdynand
Philibert
Eberhard
Ludvig
Anselmi
Alleyne
Adair
Ado
Harm
Gottfried
Selig
Saxon
Oswaldo
Hardy
Fritz
Rolph
Alphonse
Sigfred
Sigvard
Theobald
Alvert
Rudelle
Walfred
Wilmore
Aloisius
Sigfrid
Hendrik
Erwin
Abelardo
Lock
Enno
Gunder
Dusty
Mayne
Meinrad
Merriman
Williams
Locke
Linder
Abert
Erhart
Herman
Brant
Claiborn
Caryll
Huey
Alen
Humphery
Medgar
Walt
Maynor
Karsten
Rollins
Adelard
Hulbert
Dietrich
Alix
Aloys
Hubie
Rudolphus
Allayne
Karlos
Geoffrey
Rowe
Wolfe
Harbert
Berle
Humbert
Raimund
Bertil
Helmuth
Pinkney
Lindberg
Adi
Jeffries
Addy
Oberon
Ellard
Berne
Roley
Derik
Burnard
Horst
Arny
Bille
Rodnee
Thilo
Veryl
Lothario
Berthold
Gildo
Algis
Dyrk
Eldredge
Hamlin
Waldron
Wister
Rich
Dietmar
Waller
Bernarr
Chick
Hedrick
Henryk
Adolphe
Ormand
Norm
Sander
Gervase
Guenther
Volker
Luigi
Harmon
Lutz
Robbins
Harrie
Rudolph
Rodrick
Othman
Karlo
Claybourne
Ferdie
Heller
Eldrige
Ferd
Normen
Randey
Robt
Fritzie
Bern
Gervaise
Gerrold
Charlot
Kepler
Burlin
Carolus
Dirck
Guenter
Willy
Hubert
Hal
Lothar
Rogie
Ailin
Warrick
Ritchie
Kale
Obert
Friedrich
Dedrick
Adalberto
Charls
Rodriguez
Rickard
Cortland
Lennie
Rodolph
Sigmond
Bernal
Ricki
Renauld
Wilber
Rupert
Gerrie
Huberto
Arnoldo
Mena
Aubry
Wilhelm
Wilbur
Joss
Albertus
Jefery
Rowland
Rollin
Reymundo
Kohl
Buel
Raimondo
Fremont
Orman
Berlyn
Bernis
Dolphus
Lemarr
Rolfe
Jarrell
Matty
Buell
Erman
Bernd
Roddie
Rolland
Rudi
Thurmon
Gerrick
Dusten
Trapper
Robby
Durk
Earnest
Deric
Barret
Rodrique
Carrey
Wilkie
Filberto
Fritzi
Sapir
Berman
Talbott
Wilde
Randal
Josceline
Gunther
Fredrik
Aloysius
Gerold
Adal
Sten
Uwe
Rein
Odilon
Randolf
Bernt
Joffrey
Claus
Dicky
Loring
Ubaldo
Jeffree
Rendall
Roderich
Anslem
Rodgers
Wileen
Karle
Cramer
Jeffry
Dirk
Berl
Kerbie
Heike
Furman
Sylvestre
Godofredo
Rhoderick
Richerd
Duston
Geoff
Hermann
Lehman
Raemond
Hartman
Ala
Rennard
Gerik
Bertell
Frederich
Volney
Tallon
Reiner
Randolph
Kieffer
Ruperto
Schaeffer
Dustan
Dierick
Henrique
Ernie
Darek
Bernie
Ferdinando
Herbie
Bogart
Gerrell
Jagur
Rendell
Reynard
Stein
Wilberto
Geraud
Lindbergh
Wilburt
Sorrell
Engelbert
Mandel
Mandell
Raymund
Caryl
Bubba
Rodd
Dolph
Geofrey
Theodric
Herb
Ranell
Rodrigue
Roth
Gerri
Barnard
Berg
Ulrick
Stark
Redmond
Hughes
Gervais
Ritchard
Rodrigues
Eldin
Rik
Normand
Audric
Arwin
Guillaume
Rodrik
Rogerio
Waldemar
Charle
Filbert
Alin
Bing
Wilburn
Willi
Clayborn
Derryck
Kirbie
Philbert
Tab
Williamson
Ermin
Gerrald
Ossie
Herrick
Jerrie
Arn
Heman
Rollan`;

const new_name = german_boy_name.split(/[\s]/i);

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