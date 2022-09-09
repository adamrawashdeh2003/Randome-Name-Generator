<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>नमस्त</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var indian_boy_name = [
"Muhammad",
"Sai",
"Advik",
"Rudra",
"Aayansh",
"Adinew",
"Dhruv",
"Veer",
"Ahmed",
"Viyaan",
"Shivnew",
"Atharv",
"Ivaan",
"Yuvaan",
"Ishaan",
"Kabir",
"Arjun",
"Shivay",
"Vihaan",
"Aarav",
"Agastya",
"Rian",
"Shivansh",
"Avyaan",
"Vedanshnew",
"Ayaan",
"Nathan",
"Riyaannew",
"Emmanuel",
"Aidan",
"Aditya",
"George",
"Tejasnew",
"Advait",
"Vivaan",
"Krishna",
"Raghav",
"Reyansh",
"Ibrahim",
"Aaryan",
"Zayannew",
"Zaynenew",
"Advitnew",
"Anandnew",
"Omnew",
"Parthnew",
"Rudranshnew",
"Vikramadityanew",
"Kiaan",
"Saatviknew",
"Kanhanew",
"Mokshnew",
"Krishnew",
"Madhavnew",
"Aarush",
"Nihitnew",
"Shlok",
"Adamnew",
"Pranav",
"Priyanshnew",
"Viraj",
"Rishaan",
"Ritviknew",
"Ethan",
"Kartikeya",
"Shaurya",
"Josephnew",
"Shreshthnew",
"Revaannew",
"Aviraj",
"Jayden",
"Viranshnew",
"Zionnew",
"Pranitnew",
"Jaynew",
"Syed",
"Elvinnew",
"Chrisnew",
"Ravinew",
"Dakshnew",
"Saiyamnew",
"Aymannew",
"Benjaminnew",
"Siddhantnew",
"Dhakshannew",
"Farhannew",
"Kavin",
"Lakshannew",
"Manasnew",
"Aaronnew",
"Shravannew",
"Anvitnew",
"Srihannew",
"Tanishnew",
"Yuvinew",
"Zohaannew",
"Viratnew",
"Yohannew",
"Kriyansh"
]

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, indian_boy_name.length-1);
    result.innerText = indian_boy_name[index];
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