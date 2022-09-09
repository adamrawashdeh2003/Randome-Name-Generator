<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hola</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var spanish_girl_name = [
"Sofía",
"Martina",
"Lucía",
"Luciana",
"Elena",
"Julieta",
"Valeria",
"Amelia",
"Regina",
"Renata",
"Sara",
"Antonella",
"Lia",
"Aitana",
"Ximena",
"Samantha",
"Alma",
"Daniela",
"Paula",
"Zoe",
"Mariana",
"Natalia",
"Romina",
"Julia",
"Alana",
"Abigail",
"Josefina",
"Roma",
"Chloe",
"Lara",
"Clara",
"Delfina",
"Miranda",
"Fernanda",
"Celeste",
"Guadalupe",
"Paulina",
"Alba",
"Elisa",
"Gabriela",
"Maria",
"Noa",
"Vega",
"Claudia",
"Jimena",
"Abril",
"Ana",
"Laia",
"Triana",
"Candela",
"Alejandra",
"Vera",
"Adriana",
"Ines",
"Marta",
"Carlota",
"Irene",
"Blanca",
"Alicia",
"Gala",
"Isabella",
"Juanita",
"Carmen",
"Angel",
"Lula",
"Guadalupe",
"Liliana",
"Yesenia",
"Kassandra",
"Lizbeth",
"Maritza",
"Susana",
"Noemi",
"Perla",
"Esperanza",
"Nayeli",
"Lupe",
"Araceli",
"Dulce",
"Lilliana",
"Itzel",
"Lesly",
"Estrella",
"Josefina",
"Rocio",
"America",
"Maricela",
"Lizette",
"Angelita",
"Mariela"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, spanish_girl_name.length-1);
    result.innerText = spanish_girl_name[index];
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