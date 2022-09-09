<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>مرحبا</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var arabic_girl_name = [
"Amina",
"Asma",
"Rana",
"Jamilah", 
"Zuma",
"Aaliyah",
"Aisha",
"Laila",
"Fatima", 
"Maryam",
"Zara",
"Amal",
"Amani",
"Amira",
"Arwa",
"Aya",
"Basma",
"Bayan",
"Bushra",
"Dalal",
"Dalia",
"Dalila",
"Dana",
"Dania",
"Dareen",
"Dina",
"Duaa",
"Farida",
"Fairouz",
"Farah",
"Habiba",
"Hala",
"Halima",
"Hanifa",
"Hawa",
"Heba",
"Ibtisam",
"Iman",
"Jude",
"Jumanah",
"Karima",
"Khadija",
"Khalida",
"Khawla",
"Lana",
"Lara",
"Latifa",
"Leen",
"Lina",
"Loulia",
"Maha",
"Malak",
"Malika",
"Marwa",
"Marya",
"Maya",
"Maysoon",
"Mona",
"Munira",
"Munya",
"Nabila",
"Nadia",
"Nadine",
"Nada",
"Nahla",
"Naila",
"Naima",
"Najat",
"Nasira",
"Nesrine",
"Nawal",
"Neziha",
"Nihal",
"Nour",
"Nuha",
"Nura",
"Oma",
"Qamar",
"Qadira",
"Qistina",
"Rabia",
"Rahima",
"Rania",
"Rashida",
"Reem",
"Ruqayya",
"Sabah",
"Safiyah",
"Sahar",
"Saida",
"Salma",
"Sajida",
"Sakina",
"Samar",
"Samira",
"Sarah",
"Shahd",
"Shakira",
"Shams",
"Sherine",
"Sumayya",
"Tahira",
"Taj",
"Tala",
"Tamara",
"Tara",
"Tamanna",
"Tasnim",
"Umm Kulthoum",
"Wafaa",
"Yara",
"Yasmin",
"Yumna",
"Yusra",
"Zayn",
"Zaynab",
"Zeina"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, arabic_girl_name.length-1);
    result.innerText = arabic_girl_name[index];
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