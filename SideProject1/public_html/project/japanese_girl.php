<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>こんにちは</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const japanese_girl_name = 
`Raiden
Aya
Kaiya
Tori
Ren
Akira
Miya
Emi
Kiyomi
Rumi
Mari
Taya
Kaori
Mitsue
Yaeko
Yoneko
Matsuko
Shizuko
Aiko
Nikki
Nomi
Hideko
Maiya
Etsuko
Mitsuye
Sakura
Yoshie
Mai
Nobuko
Kami
Emiko
Chiyeko
Suzuko
Kuniko
Hisako
Toshie
Kazuko
Setsuko
Chiye
Asayo
Atsuko
Michiyo
Haru
Yuki
Kiko
Tomi
Makiko
Kimi
Kimiko
Akemi
Keiko
Yuriko
Yasuko
Suki
Taree
Noriko
Miki
Eriko
Ryo
Tamiko
Michi
Kumiko
Sumiko
Torrye
Toru
Asako
Chieko
Torree
Aki
Marise
Torri
Tomiko
Kei
Reiko
Kioko
Maemi
Airi
Taji
Akiko
Tora
Sachi
Yori
Maiyah
Howl
Midori
Ai
Shuri
Ayame
Torrie
Riki
Mariko
Kammie
Sosuke
Tama
Mikki
Suzu
Yumiko
Kyoko
Kamlyn
Makoto
Yoko
Toriana
Rie
Sachiko
Michiko
Koemi
Kammi
Hanako
Akyra
Chiyo
Ayako
Asuka
Akiye
Akiyo
Asemina
Chiharu
Kishi
Machiko
Maeko
Michee
Nariko
Osaka
Sasa
Sato
Tsuki
Ataru
Zeniba
Yubaba
Chihiro
Sen
Yuuko
Chichi
Sadako
Ponyo
Toki
Sheeta
Satsuki
Totoro
Eboshi
Okkoto
Osono
Kokiri
Kenta
Gi
Kazuma
Asajj
Kuchisake-Onna
Aerith
Shinra
Nayru
Nabooru
Kairi
Tidus
Selphie
Wakka
Yuna
Kimahri
Rikku`;

const new_name = japanese_girl_name.split(/[\s]/i);

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