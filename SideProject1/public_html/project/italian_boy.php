<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Ciao</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const italian_boy_name = 
`Luca
Aria
Luka
Giovanni
Enzo
Matteo
Antonio
Armani
Nico
Gianni
Romeo
Marco
Santino
Lucca
Rocco
Valentino
Alessandro
Dario
Carmelo
Alfredo
Vincenzo
Elio
Salvatore
Gian
Aurelio
Gaia
Massimo
Gianluca
Rolando
Giancarlo
Gino
Draco
Giovani
Monte
Rodolfo
Gio
Alessio
Francesco
Karmelo
Renzo
Geovanni
Donte
Giuseppe
Lazaro
Ezio
Secondo
Vito
Giovanny
Amore
Amilcare
Giovonni
Genaro
Federico
Amadeo
Rochus
Geno
Adriano
Quinto
Nuncio
Fulvio
Tullio
Jeronimo
Carmello
Concetto
Nazzareno
Amerigo
Ercole
Niccolo
Otello
Nino
Pierino
Michelangelo
Libero
Graziano
Guerrino
Renato
Sicily
Pietro
Karmello
Geronimo
Dino
Geovanny
Gaeton
Galileo
Fabrizio
Arnald
Ursel
Montrell
Rossano
Aldis
Geovany
Ciro
Giuliano
Aldus
DiAngelo
Fausto
Onofrio
Alberico
Giacomo
Brando
Vittorio
Gaetano
Yovanni
Gennaro
Cono
Pepi
Gianny
Geovani
Calogero
Gioacchino
Tino
Gabriele
Cola
Alfio
Luong
Girolamo
Sigfrido
Mattia
Graciano
Lorah
Dontey
Giulio
Erminio
Aldon
Bravo
Kajetan
Arnolfo
Emidio
Gracian
Rocko
Gaetan
Onofre
Damiano
Roche
Patrizio
Ciriaco
Jacopo
Ugo
Inocencio
Geremia
Tommaso
Agostino
Saverio
Napoleon
Giovan
Ennio
Arnaldo
Filippo
Americo
Riccardo
Americus
Montae
Yovanny
Sebastiano
Neri
Innocent
Cosimo
Baldwin
Italo
Ettore
Roch
Primo
Jino
Edoardo
Cesare
Prime
Nunzio
Enzio
Ardian
Sonnet
Narciso
Ottavio
Emanuele
Angelos
Vitali
Umberto
Orazio
Jeno
Bernardino
Guido
Dontaye
Amerika
Aad
Agnolo
Alldo
Amerikus
Ambrogiotto
Ameriko
Antioch
Antiochos
Antiochus
Antioco
Arduino
Arnauld
Arnault
Arrigo
Avellino
Bellarmine
Bellarmino
Bellveder
Bellvedere
Bellvidere
Belveder
Belvedere
Belvider
Belvidere
Beniamino
Benvenuto
Bertoldo
Bono
Brahvo
Bravvo
Brizio
Cajetan
Cajetano
Calogeros
Cesco
Clelio
Dionigi
Eigidio
Ercolo
Fico
Fiorello
Gelindo
Gennarius
Gennaros
Geovanney
Gianney
Giannino
Giovanno
Giovel
Giovell
Giustinian
Giustiniano
Giustino
Guglielmo
Herinomos
Heronimo
Hieronimo
Hieronymus
Innocenty
Innocenzio
Januario
Jeronimus
Jovanney
Jovanno
Kajetano
Kalogerus
Kosmo
Lapo
Nardo
Onofrius
Onophrio
Orsino
Preemo
Premo
Raniero
Ruggero
Tasso
Tempo
Uberto
Ursino
Ursins
Ursinus
Urso
Ursus
Venetziano
Veneziano
Venezio
Vesuvio
Yovanney
Attilia
Cirocco
Scirocco
Sicilly
Sirocco
Bellini
Benvolio
Fio
Ferrari
Piccolo
Capo
Ciccio
Alvize
Terzo
Timeo
Inizio`;

const new_name = italian_boy_name.split(/[\s]/i);

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