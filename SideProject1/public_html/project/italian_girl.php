<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Ciao</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const italian_girl_name = 
`Isabella
Gianna
Luca
Aria
Cecilia
Lucia
Arianna
Armani
Nico
Gia
Lia
Camilla
Serena
Luciana
Francesca
Viviana
Alessia
Adelina
Bianca
Renata
Capri
Siena
Noemi
Giana
Kara
Milana
Giuliana
Dulce
Giovanna
Loretta
Giavanna
Paola
Stazie
Chiara
Gaia
Giada
Giulia
Serafina
Carina
Alessa
Violetta
Donna
Mona
Cianna
Roma
Amore
Fiorella
Ciana
Carlota
Rosabella
Calogera
Musetta
Bianka
Issabella
Eleonora
Guida
Bambina
Annunziata
Leonida
Annunciata
Romalda
Blancha
Sicily
Palmina
Caterina
Allegra
Vittoria
Silvana
Brandy
Marisa
Gianella
Stacci
Venette
Lorenzia
Aldis
Gionna
Bamby
Mirella
Lelia
Giorgia
Carlotta
Giannina
Gelsomina
Rigina
Rossetta
Vedette
Belladonna
Lecretia
Ladonne
Deangelis
Fabrienne
Gianina
Belenda
Amelda
Madona
Ginetta
Giuseppa
Jovanne
Ortensia
Vincenza
Ravenna
Bambie
Izola
Donisha
Tea
Dahnya
Capricia
Ciandra
Donnalee
Silvina
Ginnette
Ymelda
Nilda
Donya
Delfina
Donnalyn
Donnetta
Donnelle
Donnella
Bionca
Donielle
Lorah
Primavera
Janina
Gioia
Laretta
Verona
Fiamma
Beyonca
Carabelle
Donni
Donica
Beonca
Biancha
Gioconda
Caprise
Ciprianna
Enrica
Bionda
Enriqueta
Giustina
Tosca
Epifania
Gaetana
Vonda
Bona
Geovanna
Rubina
Lorenza
Ginevra
Raffaella
Elda
Coretta
Bambi
Romelia
Geonna
Contessa
Margherita
Geovana
Capree
Loreto
Ludovica
Drusilla
Concetta
Roch
Giuseppina
Nerissa
Fiammetta
Capriana
Donelle
Sonnet
Nera
Giovana
Benedetta
Avellina
Narissa
Madonna
Ghita
Avena
Dahna
Byanca
Ginette
Cipriana
Donella
Bianey
Romana
Zoela
Loreta
Nicci
Giordana
Franca
Cameo
Aloe
Azzurra
Addolorata
Agnola
Agnolla
Agnolle
Allcine
Allcinia
Allegretta
Alvara
Amadora
Amalfey
Amalfi
Amedea
Ameriga
Annunziate
Anonciada
Anunciacion
Anunciata
Anunziata
Bambalina
Bellanca
Donna-Marie
Bertrona
Bonfilia
Cadenza
Cammeo
Jelsomina
Capreece
Carabel
Carabell
Carrabelle
Chipriana
Chiprianna
Cinetta
Cipriane
Concilia
Condoleeza
Cypriana
Cyprienne
Donalie
Donnisse
Enricka
Enricketta
Enriquette
Ermenegilda
Eroica
Eroiqua
Eroique
Fabricia
Fabriqua
Fabritzia
Fabrizia
Gaetane
Geoconda
Giacinta
Giannine
Ginara
Guglielma
Gulielma
Heroica
Himalda
Imalda
Jeeanima
Jeoconda
Jiacintha
Larretta
Laudonia
Leggra
Legra
Leretta
Lowretta
Mandelin
Marsalla
Nunciata
Maurizia
Naryssa
Nericcia
Nerola
Nerolia
Nerolie
Neroly
Neryssa
Nillda
Nunzia
Ortensa
Ortensija
Ortensya
Pamina
Principessa
Romma
Santuzza
Sigismonda
Sigismunda
Sigmonda
Sigmunda
Sipriana
Sipriane
Siprianne
Speranca
Speranza
Sypriana
Syprianne
Terza
Traviata
Uberrta
Uberta
Ubertha
Vallombrosa
Valombrosa
Vannda
Vedetta
Vicenza
Vohnda
Yacinta
Yacintha
Yuberta
Zolia
Attilia
Cirocco
Scirocco
Sicilly
Sirocco
Bellini
Aiuto
Piccolo
Mabilia
Miuccia
Amidala`;

const new_name = italian_girl_name.split(/[\s]/i);

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