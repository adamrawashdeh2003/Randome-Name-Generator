<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>你好</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
var chinese_boy_name = [
"Tai",
"Jin",
"An",
"Xia",
"Kaili",
"Wei",
"Pei",
"Un",
"Feng",
"Le",
"Du",
"Chu",
"Tao",
"Hong",
"Cong",
"Ling",
"Kuan",
"Xiao",
"Xu",
"Jing",
"Fu",
"Chang",
"Dong",
"Chung",
"Bai",
"Ping",
"Chong",
"Hui",
"Lin",
"Cheng",
"Yuan",
"Yi",
"Yu",
"Ming",
"Yang",
"Chen",
"Fen",
"Min",
"Li",
"Liang",
"Lei",
"Zhen",
"Wen",
"Confucius",
"Piao",
"Typhoon",
"De-",
"Qin",
"Bingwen",
"Bo-wen",
"Chaoxiang",
"Fai",
"Gang",
"Hao-yu",
"He",
"Hu",
"Jianyu",
"Jilpa",
"Qiu",
"Rong",
"Shi",
"Shu-hui",
"Ushi",
"Xiaobo",
"Zixin",
"Zixuan",
"Kun",
"Ning",
"Shoi-ming",
"Cao",
"Fang",
"Hai-rong",
"Ming-yue",
"Qiao",
"Shuang",
"Susu",
"Ya-wen",
"Guan",
"Gong",
"Qui-Gon",
"Huyang",
"Xinyi",
"Jingyi",
"Yuze",
"Huan",
"Jiahao",
"Yijun",
"Yijun",
"Tseng",
"Tsun"
];

var btnRandom = document.querySelector('button');
var result = document.querySelector('h2')

function random_name(min, max) {
    let result = Math.floor(Math.random() * (max - min) ) + min;
    return result;
}

btnRandom.addEventListener('click', () => {
    let index = random_name(0, chinese_boy_name.length-1);
    result.innerText = chinese_boy_name[index];
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