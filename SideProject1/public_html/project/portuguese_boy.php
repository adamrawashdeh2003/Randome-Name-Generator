<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Olá</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const portuguese_boy_name = 
`Thiago
Cruz
Josue
Luciano
Marcos
Rodrigo
Mauricio
Vicente
Tiago
Bernardo
Davi
Lucio
Rosario
Paulo
Joao
Patricio
Mateus
Rui
Teodoro
Gaspar
Heitor
Brazil
Zacarias
Vidal
Lindo
Mar
Valente
Dimas
Leopoldo
Artur
Rida
Arsenio
Marques
Ulisses
Costantino
Anacleto
Celso
Angelino
Videl
Tavares
Tavaris
Duarte
Lidio
Duante
Bento
Silverio
Justino
Guilherme
Celio
Josefa
Bonifacio
Jaco
Severino
Cosme
Adao
Agosto
Aloisio
Balduino
Jordao
Licio
Lydio
Maureo
Valentinus
Afonso
Martim
Lourenco
Dinis
Agostinho
Alexo
Benedito
Caetano
Carlinhos
Cristovao
Dado
Estevao
Felipinho
Fernao
Gualter
Joaozinho
Jonatas
Jorginho
Luisinho
Manoel
Olavo
Salomao
Simao
Tristao
Anxo
Atilio
Teotonio
Abilio
Goncalo
Carmo
Mota
Nelio
Pascoal
Pires
Quim
Umoja
Dudu
Tael`;

const new_name = portuguese_boy_name.split(/[\s]/i);

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