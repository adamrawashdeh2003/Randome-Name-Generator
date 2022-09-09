<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var african_girl_name = [
"Abebi",
"Abena",
"Abeni",
"Adeola",
"Afia",
"Akosua",
"Alaba",
"Ama",
"Amadi",
"Amara",
"Ameyo",
"Aminata",
"Amma",
"Anika",
"Asha",
"Ayan",
"Bayo",
"Behati",
"Chioma",
"Desta",
"Ebele",
"Efemena",
"Efia",
"Enu",
"Eshe",
"Farai",
"Fayola",
"Gabisile",
"Gasira",
"Gugu",
"Habiba",
"Ife",
"Imara",
"Imena",
"Izara",
"Juba",
"Kamali",
"Kamaria",
"Kehinde",
"Kessie",
"Kia",
"Kibibi",
"Lelise",
"Lesedi",
"Lindiwe",
"Lissa",
"Lulit",
"Maaza",
"Makena",
"Marjani",
"Masozi",
"Mayeso",
"Mirembe",
"Nairobi",
"Nakato",
"Nala",
"Naliaka",
"Nanjala",
"Ndidi",
"Ndila",
"Neela",
"Nemy",
"Ngozi",
"Nneka",
"Nnenna",
"Nsia",
"Nuru",
"Nyala",
"Olwethu",
"Omolara",
"Palesa",
"Panya",
"Pili",
"Salana",
"Samiya",
"Sassandra",
"Seble",
"Sekai",
"Sethe",
"Shanti",
"Subira",
"Taci",
"Tamala",
"Taraja",
"Thabisa",
"Thandeka",
"Thandie",
"Thema",
"Thulile",
"Tisa",
"Tula",
"Uduak",
"Uzoma",
"Xois",
"Yetunde",
"Zahara",
"Zaire",
"Zella",
"Zendaya",
"Zenzile",
"Zizi",
"Zola",
"Zora",
"Zuri",
"Zuwena"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, african_girl_name.length-1);
    result.innerText = african_girl_name[index];
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