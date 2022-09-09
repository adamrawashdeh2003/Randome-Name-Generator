<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>안녕하세요</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const korean_girl_name = 
`Moon
Jun
Myung
Soon
Yumi
Nari
Sook
Myong
Sun
Soo
Nabi
Aera
Jimin
Sarang
Shin
Cho
Ae-cha
A-yeong
Bong-cha
Chun-hee
Chung-ha
Eun-ae
Eun-kyung
Eun-seo
Gyeong
Ha-eun
Han-na
Ha-yoon
Ji-woo
Ji-yoon
Min-ji
Mi-sun
Min-seo
Seo-yun
Soo-ah
Yu-jin
Yun-seo
Ji-ho
Joo-won
Chae-won
Eun-ji
Min-jung
Min-sun
Sun-young
Yoon-ah
Young-hee
Young-mi
Jung-woo
Jun-young
Kyung-mi
Chon
Heewon
Jeong
Joo-mi
Jiji
Mi-Jin
Sora`;

const new_name = korean_girl_name.split(/[\s]/i);

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, new_name.length-1);
    result.innerText = new_name[index];
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