<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>नमस्त</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var indian_girl_name = [
"Aadhavi",
"Aanya",
"Aarya",
"Aashvi",
"Alani",
"Amara",
"Amulya",
"Aniya",
"Anushka",
"Aria",
"Ayla",
"Devina",
"Divya",
"Eesha",
"Farida",
"Imara",
"Jasmine",
"Jaya",
"Jhansi",
"Jivika",
"Jiyana",
"Kareena",
"Kavya",
"Khushi",
"Kimaya",
"Kiyana",
"Lakshmi",
"Lavanya",
"Liya",
"Mahi",
"Maya",
"Meera",
"Mila",
"Mirza",
"Misha",
"Myra",
"Navi",
"Navya",
"Nevaeh",
"Nidhi",
"Nihira",
"Nila",
"Nirvi",
"Nisha",
"Nyra",
"Prisha",
"Pritha",
"Priya",
"Rahi",
"Ranchi",
"Ria",
"Roja",
"Ruhi",
"Saanvi",
"Sahara",
"Saiya",
"Sajani",
"Samara",
"Sana",
"Sarika",
"Satya",
"Saumya",
"Shaniya",
"Shaurya",
"Shivani",
"Shivaya",
"Shyla",
"Sita",
"Siya",
"Sonia",
"Suhasini",
"Suri",
"Surya",
"Tashi",
"Uma",
"Veena",
"Vera",
"Zara",
"Ziya",
"Zoha",
"Zoya",
"Zunaira"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, indian_girl_name.length-1);
    result.innerText = indian_girl_name[index];
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