<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>こんにちは</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const japanese_boy_name = 
`Raiden
Raiden
Ronin
Kannon
Kenji
Ren
Akira
Koi
Minoru
Hisashi
Goro
Kiyoto
Shigeki
Nikki
Tomio
Masaichi
Takao
Tatsuo
Mai
Susumu
Yoshiaki
Hideo
Hitoshi
Masaji
Yoshito
Mamoru
Tsutomu
Shinichi
Yukio
Mitsuo
Tadao
Yoshiro
Noboru
Tetsuo
Nobuyuki
Yoshiyuki
Yoshinobu
Yoshihiko
Yoshikazu
Kiichi
Shuichi
Haru
Yuki
Kiko
Akio
Rai
Atsushi
Kannan
Kano
Hiroaki
Junichi
Shinji
Naoto
Koji
Hideki
Kazuo
Haruki
Morio
Shuji
Miki
Akihiro
Joben
Ryo
Keitaro
Michi
Michio
Toru
Mikio
Mareo
Kei
Jiro
Kana
Takeo
Taji
Tadashi
Kento
Hiroshi
Sho
Howl
Haruto
Calcifer
Kannen
Torrie
Riki
Takashi
Seiji
Taro
Tama
Daichi
Toshiro
Maro
Kaemon
Ringo
Ichiro
Akeno
Tanjiro
Makoto
Kenjiro
Keiji
Masao
Kentaro
Benjiro
Jomei
Akito
Muska
Chiyo
Akihito
Akinori
Chiharu
Chiko
Danno
Ebisu
Eikichi
Haruhiro
Manzo
Montaro
Reizo
Renjiro
Rinji
Sachio
Sanjiro
Shoda
Tako
Teiji
Teijo
Tomeo
Torio
Torrio
Yasahiro
Ataru
Hito
Kamaji
Haku
Boh
Aogaeru
Markl
Kakashi
Kokuo
Fujimoto
Koichi
Natoru
Natori
Motro
Totoro
Ashitaka
Moro
Okkoto
Yakul
Nago
Jigo
Tombo
Fukuo
Ryuji
Takuji
Kokichi
Sawao
Takeshi
Eizo
Shigeru
Miwako
Mikako
Gi
Hashimoto
Dooku
Ruto
Shinra
Waluigi
Wario
Nayru
Nabooru
Tatl
Riku
Kairi
Eraqus
Tidus
Moogle
Kimahri
Rikku`;

const new_name = japanese_boy_name.split(/[\s]/i);

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