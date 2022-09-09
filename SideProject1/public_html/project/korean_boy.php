<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>안녕하세요</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const korean_boy_name = 
`Moon 
Jun
Sun
Jimin
Chun-hee
Ha-yoon
Ji-ah
Ji-woo
Mi-sun
Yu-jin
Baek-hyeon
Beom-seok
Chin-hwa
Do-hyun
Gun-woo
Ha-joon
Han-gyeol
Hyun-woo
Ji-ho
Jong-woo
Joo-won
Jun-seo
Kwan
Kyung-won
Min-ho
Min-joon
Nam-kyu
Sang-hoon
Seo-joon
Shi-woo
Sung-min
Tae-hyun
Won-shik
Woo-jin
Ye-jun
Yoo-joon
Min-sun
Young-hee
Byung-chul
Doyoon
Jae-young
Ji-hoon
Jung-woo
Jun-young
Ming-yu
Min-jae
Sung-jin
Ye-joon
Sung-ho
Min-soo
Min-seok
Jun-suh
Dae-shim
Jintao
Seung
Yong-sun
Young-ja
Yu-jun
Jiji
Jingyuan
Seo-jeong
Sora`;

const new_name = korean_boy_name.split(/[\s]/i);

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