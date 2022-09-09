<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Aloha</h1>

<button>Generate the Name!</button> 

<h2>Name</h2>

<script>
var hawaiian_girl_name = [
"Leilani",
"Alani",
"Malia",
"Kailani",
"Kalani",
"Ailani",
"Alanna",
"Nalani",
"Keilani",
"Maleah",
"Leylani",
"Kaleah",
"Kalia",
"Kalea",
"Noelani",
"Alanis",
"Luana",
"Melia",
"Lani",
"Ulani",
"Kahlia",
"Maleia",
"Halia",
"Moana",
"Oleen",
"Alonna",
"Ohana",
"Kaloni",
"Oline",
"Anela",
"Malea",
"Luane",
"Aluna",
"Kalei",
"Lilo",
"Lelani",
"Kamea",
"Nani",
"Kanoa",
"Allana",
"Mahina",
"Luanda",
"Aolani",
"Kini",
"Kani",
"Miliani",
"Mana",
"Keona",
"Malana",
"Luanna",
"Luwana",
"Malu",
"Lanah",
"Lalani",
"Keilana",
"Alawna",
"Lanna",
"Olina",
"Lanai",
"Alleen",
"Alohi",
"Allinah",
"Lenai",
"Nalanee",
"Anuhea",
"Luann",
"Kina",
"Luanne",
"Kalana",
"Kanani",
"Keala",
"Alie",
"Nohea",
"Iolani",
"Aloha",
"Allina",
"Alene",
"Louanna",
"Louanne",
"Kameo",
"Lannah",
"Louann",
"Iolana",
"Allene",
"Alane",
"Aonani",
"Alamea",
"Ele",
"Ahulani",
"Ainakea",
"Ainanani",
"Akeakamai",
"Akahele",
"Akaula",
"Alohalani",
"Alohanani",
"Alohinani",
"Anakela",
"Apelila",
"Apona",
"Auina",
"Ehehene",
"Elikapeka",
"Henoheno",
"Kalaine",
"Kaneeta",
"Keiba",
"Keiki",
"Lou-Ann",
"Luannah",
"Luannie",
"Mohala",
"Pali",
"Palila"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, hawaiian_girl_name.length-1);
    result.innerText = hawaiian_girl_name[index];
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