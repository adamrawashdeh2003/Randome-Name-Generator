<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>你好</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var chinese_girl_name = [
"Lian",
"Jia",
"Mei",
"Luan",
"Jin",
"Mulan",
"An",
"Xia",
"Kaili",
"Yan",
"Song",
"Le",
"Hong",
"Ling",
"Ju",
"Xiao",
"Jing",
"Bai",
"Chin",
"Ping",
"Chia",
"Chun",
"Hui",
"Yi",
"Bao",
"Chen",
"Min",
"Yoyo",
"Chynna",
"Lan",
"Liang",
"Lei",
"China",
"Shu",
"Qi",
"Aung",
"Fa",
"De-",
"Xi'an",
"Caihong",
"He",
"Rong",
"Shi",
"Chao-xing",
"Chu-hua",
"Chun-hua",
"Daiyu",
"Ehuang",
"Hua",
"Kun",
"Li-ming",
"Li-ling",
"Mei-hui",
"Mei-lin",
"Mei-ling",
"Ning",
"Nuwa",
"Shoi-ming",
"Suyin",
"Xiu-ying",
"Xue",
"Ya-ting",
"Zhan",
"Niu",
"Cao",
"Fang",
"Hai-rong",
"Ming-yue",
"Qiao",
"Shuang",
"Susu",
"Ya-wen",
"Xinyi",
"Jingyi",
"Ah-lam",
"Huan",
"Huan",
"Nuo",
"Yijun",
"Tsun",
"Namine"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, chinese_girl_name.length-1);
    result.innerText = chinese_girl_name[index];
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