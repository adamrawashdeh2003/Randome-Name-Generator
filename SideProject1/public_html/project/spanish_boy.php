<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

    
<h1>Hola</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<body>

<script>
var spanish_boy_name = [
"Santiago",
"Matías",
"Sebastián",
"Mateo",
"Nicolás",
"Alejandro",
"Samuel",
"Diego",
"Daniel",
"Benjamín",
"Leonardo",
"Tomás",
"Joaquín",
"Gabriel",
"Emiliano",
"Martín",
"Lucas",
"Agustín",
"David",
"Iker",
"Juan José",
"Maximiliano",
"Adrián",
"Emmanuel",
"Felipe",
"Juan Pablo",
"Andrés",
"Jerónimo",
"Ángel",
"Rodrigo",
"Bruno",
"Alexander",
"Thiago",
"Pablo",
"Ian",
"Isaac",
"Miguel Ángel",
"Fernando",
"Javier",
"Emilio",
"Juan Sebastián",
"Alonso",
"Aarón",
"Rafael",
"Esteban",
"Juan Diego",
"Axel",
"Francisco",
"Bautista",
"Carlos",
"Dylan",
"Juan",
"Julián",
"Manuel",
"Facundo",
"Gael",
"Valentino",
"Damián",
"Santino",
"Vicente",
"Máximo",
"Christopher",
"Jorge",
"Luciano",
"Dante",
"Alan",
"Cristóbal",
"Jesús",
"Lorenzo",
"Alex",
"Juan Esteban",
"Patricio",
"Pedro",
"Juan Manuel",
"Matthew",
"Antonio",
"Iván",
"José",
"Hugo",
"Josué",
"Lautaro",
"Diego Alejandro",
"Miguel",
"Franco",
"Kevin",
"Luis",
"Simón",
"Elías",
"Caleb",
"Eduardo",
"Ricardo",
"Juan David",
"Marcos",
"Salvador",
"Jacobo",
"Juan Ignacio",
"Camilo",
"Mauricio",
"Juan Felipe",
"Gonzalo"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, spanish_boy_name.length-1);
    result.innerText = spanish_boy_name[index];
});


</script>

</body>

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