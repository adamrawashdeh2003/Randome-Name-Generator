<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hello</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var american_boy_name = [
"Liam",
"Noah",
"Oliver",	
"William",	
"Elijah",
"James",
"Benjamin",	
"Lucas",
"Mason",
"Ethan",	
"Alexander",	
"Henry",
"Jacob",
"Michael",	
"Daniel",
"Logan",
"Jackson",	
"Sebastian",	
"Jack",
"Aiden",	
"Owen",
"Samuel",	
"Matthew",	
"Joseph",
"Levi",
"Mateo",
"David",
"John",
"Wyatt",	
"Carter",	
"Julian",
"Luke",
"Grayson",	
"Isaac",
"Jayden",	
"Theodore",	
"Gabriel",	
"Anthony",
"Dylan",
"Leo",
"Lincoln",	
"Jaxon",
"Asher",
"Christopher",	
"Josiah",
"Andrew",
"Thomas",
"Joshua",
"Ezra",
"Hudson",	
"Charles",	
"Caleb",
"Isaiah",	
"Ryan",
"Nathan",	
"Adrian",
"Christian",	
"Maverick",
"Colton",
"Elias",
"Aaron",
"Eli",
"Landon",	
"Jonathan",	
"Nolan",
"Hunter",	
"Cameron",	
"Connor",
"Santiago",
"Jeremiah",	
"Ezekiel",
"Angel",
"Roman",
"Easton",
"Miles",
"Robert",	
"Jameson",	
"Nicholas",	
"Greyson",
"Cooper",
"Ian",
"Carson",	
"Axel",
"Jaxson",	
"Dominic",	
"Leonardo",	
"Luca",
"Austin",	
"Jordan",
"Adam",
"Xavier",	
"Jose",
"Jace",	
"Everett",	
"Declan",
"Evan",
"Kayden",	
"Parker",
"Wesley",
"Kai",
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, american_boy_name.length-1);
    result.innerText = american_boy_name[index];
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