<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hello</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var american_girl_name = [
"Olivia",
"Emma",
"Ava", 
"Sophia",	 
"Isabella",	 
"Charlotte",	 
"Amelia",
"Mia",
"Harper",	 
"Evelyn",
"Abigail",	 
"Emily",
"Ella",
"Elizabeth",	 
"Camila",
"Luna",
"Sofia",	 
"Avery", 
"Mila",
"Aria",	 
"Scarlett",	 
"Penelope",	 
"Layla",
"Chloe", 
"Victoria",	 
"Madison", 
"Eleanor",	 
"Grace",
"Nora",
"Riley",	 
"Zoey",
"Hannah",	 
"Hazel",
"Lily",
"Ellie",	 
"Violet",	 
"Lillian",	 
"Zoe",
"Stella",	 
"Aurora",
"Natalie",	 
"Emilia",
"Everly",
"Leah",
"Aubrey",	 
"Willow",
"Addison",	 
"Lucy",
"Audrey",	 
"Bella",
"Nova", 
"Brooklyn",	 
"Paisley", 
"Savannah",	 
"Claire",
"Skylar",
"Isla",
"Genesis",	 
"Naomi",
"Elena", 
"Caroline",	 
"Eliana",
"Anna",
"Maya",	 
"Valentina",	 
"Ruby",
"Kennedy",	 
"Ivy",
"Ariana",	 
"Aaliyah",	 
"Cora",
"Madelyn",	 
"Alice",
"Kinsley",	 
"Hailey",
"Gabriella",	 
"Allison",
"Gianna",
"Serenity",
"Samantha",	 
"Sarah",
"Autumn",	 
"Quinn",
"Eva",
"Piper",	 
"Sophie",	 
"Sadie",
"Delilah",	 
"Josephine",	 
"Nevaeh",
"Adeline",	 
"Arya",
"Emery",	 
"Lydia", 
"Clara", 
"Vivian",	 
"Madeline",	 
"Peyton",
"Julia",
"Kai"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, american_girl_name.length-1);
    result.innerText = american_girl_name[index];
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