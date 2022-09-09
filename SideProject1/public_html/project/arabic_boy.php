<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>مرحبا</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var arabic_boy_name = [
"Abbas",
"Abdul",
"Abid",
"Adil",
"Adam",
"Adib",
"Adnan",
"Afif",
"Ahmad",
"Ahsan",
"Ajmal",
"Aladdin",
"Alim",
"Amer",
"Amin",
"Anwar",
"Aqeel",
"Asad",
"Ashraf",
"Ayman",
"Aziz",
"Azmi",
"Badr",
"Bakri",
"Bahjat",
"Bashir",
"Bilal",
"Burhan",
"Dawoud",
"Deen",
"Ehsan",
"Ehab",
"Fadel",
"Fadir",
"Faheem",
"Faisal",
"Faiz",
"Farid",
"Fayez",
"Fazli",
"Fikri",
"Ghassan",
"Ghiath",
"Habib",
"Hadi",
"Hakim",
"Halim",
"Hamza",
"Hani",
"Harun",
"Hashem",
"Hatem",
"Haydar",
"Hazem",
"Hisham",
"Hussein",
"Ibrahim",
"Idrees",
"Iqbal",
"Iyad",
"Jafar",
"Jalal",
"Jaleel",
"Jawad",
"Jubair",
"Kamal",
"Kazem",
"Khaled",
"Louay",
"Mahdi",
"Mahmud",
"Malik",
"Mansour",
"Marwan",
"Muhannad",
"Mounir",
"Mustaga",
"Nadeem",
"Nabeel",
"Naji",
"Najib",
"Naeem",
"Naseem",
"Nasser",
"Odai",
"Othman",
"Qasim",
"Qadir",
"Rabi",
"Raed",
"Rahim",
"Rami",
"Rasheed",
"Rayan",
"Sa'id",
"Saad",
"Salah",
"Salim",
"Sami",
"Sayf",
"Shadi",
"Shafiq",
"Suheil",
"Suleiman",
"Taher",
"Tahsin",
"Talal",
"Tareq",
"Tawfiq",
"Wafi",
"Waheed",
"Waleed",
"Yahya",
"Yaseen",
"Yasser",
"Yunus",
"Yusef",
"Zaid",
"Zayn",
"Zakariah",
"Zaki"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, arabic_boy_name.length-1);
    result.innerText = arabic_boy_name[index];
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