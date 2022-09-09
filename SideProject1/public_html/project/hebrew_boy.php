<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>שלום</h1>

<button>Generate the Name!</button>

<h2>Name</h2>

<script>
const hebrew_boy_name = 
`Noah
Elijah
James
Benjamin
Levi
Mateo
Daniel
Michael
Ethan
Samuel
Jacob
Asher
John
Joseph
David
Ezra
Matthew
Gabriel
Jayden
Isaac
Elias
Josiah
Caleb
Ezekiel
Isaiah
Joshua
Nathan
Eli
Aaron
Jordan
Jonathan
Jeremiah
Micah
Jace
Adam
Genesis
Zion
Jason
Eva
Elliott
Nathaniel
Elliot
Jonah
Zachary
Adriel
Eliza
Malachi
Jesus
Judah
Emmanuel
Jesse
Abel
Abraham
Ariel
Joel
Matias
Israel
Jordyn
Zane
Kaleb
Simon
Shiloh
Tobias
Gideon
Joaquin
Salem
Ezequiel
Jake
Ismael
Zayne
Jamie
Selah
Jared
Azariah
Nehemiah
Jaiden
Solomon
Johnny
Mathias
Johnathan
Asa
Matthias
Adan
Adley
Moshe
Seth
Isaias
Jase
Uriel
Jamison
Emanuel
Moses
Moises
Jonas
Makai
Zachariah
Danny
Abby
Saul
Izaiah
Amiri
Jessie
Hezekiah
Abram
Samson
Ira
Amos
Johan
Abdiel
Joey
Issac
Dani
Uriah
Yosef
Sol
Lea
Chaim
Joziah
Yael
Eliam
Elisha
Elia
Jimmy
Jesiah
Ben
Nathanael
Noe
Mathew
Azrael
Joe
Enoch
Jedidiah
Shai
Yehuda
Ameer
Eliseo
Axl
Jakob
Toby
Azriel
Azaria
Judson
Cal
Reuben
Jacoby
Yousef
Rae
Zechariah
Canaan
Maddie
Elon
Jair
Jeremias
Jordy
Cain
Yaakov
Ephraim
Benny
Zev
Mordechai
Decker
Boaz
Abner
Eliezer
Jubilee
Armoni
Ash
Ezrah
Zackary
Shia
Menachem
Shlomo
Shimon
Adiel
Arie
Kobi
Jovani
Tzvi
Mattias
Meir
Moriah
Simeon
Javon
Josias
Azaiah
Micheal
Malakhi
Eleazar
Eliot
Benaiah
Malaki
Dara
Immanuel
Avraham
Uziel
Oren
Zakari
Jethro
Levy
Zephaniah
Zack
Asaiah
Ishmael
Dov
Kain
Shalom
Yoel
Jadon
Coby
Natanael
Sammy
Isiah
Kenan
Ilan
Aryeh
Mikhail
Phineas
Elyas
Jeriah
Johnnie
Misha
Amariah
Eliyahu
Baron
Jonathon
Jacobi
Izzy
Axell
Mikel
Meyer
Noam
Eitan
Akiva
Avrohom
Aviel
Mickey
Nate
Obadiah
Josh
Abbie
Yeshua
Elam
Savion
Davin
Tobin
Aharon
Judd
Yehoshua
Johnathon
Eder
Hiram
Jaydon
Joni
Avia
Zuriel
Mykel
Tamir
Obed
Jed
Benji
Simcha
Vanya
Uzziah
Urijah
Gerson
Dan
Eliott
Ezri
Armon
Zach
Gavriel
Zaine
Mordecai
Jayvon
Ely
Josef
Jacobo
Janna
Adin
Jorden
Miko
Jody
Jan
Rei
Jaron
Isaak
Abir
Lior
Aaryn
Esdras
Dave
Aarin
Jedediah
Abe
Malachai
Jianni
Sammie
Bethel
Namir
Lavon
Hyrum
Jimmie
Salomon
Lemuel
Jaysen
Ad
Yisrael
Natan
Naftali
Jaeden
Izaak
Esaias
Mayhew
Davey
Job
Ike
Eian
Davy
Hanan
Nahum
Asiel
Zachery
Zac
Jakub
Abbas
Sima
Jayven
Isreal
Esra
Edyn
Hymen
Orphie
Jacen
Izaac
Hymie
Omri
Jairus
Aviv
Jordin
Ham
Jodi
Zackery
Zacharias
Eb
Levin
Benne
Adel
Davie
Ronen
Oshea
Hosea
Eben
Binyamin
Amasa
Yannis
Mycah
Jori
Salmon
Yonatan
Mahlon
Ebenezer
Baruch
Ahron
Pace
Uriyah
Asael
Uri
Jessy
Jodie
Mathieu
Gabe
Adem
Shilo
Jethroe
Jemmie
Shyloh
Leigh
Yitzchak
Sampson
Kayleb
Ammon
Elizah
Jeth
Abbey
Reuven
Othniel
Joab
Bram
Avrum
Oron
Hillel
Auron
Abimael
Cassiel
Elie
Pinchas
Lazer
Jordon
Ameir
Shamir
Neftali
Peppi
Zak
Mick
Abiel
Tobi
Zakary
Zacchaeus
Sholom
Oz
Matt
Jim
Sollie
Kerem
Jerimiah
Zackie
Mosiah
Johannes
Esau
Abriel
Mort
Elis
Gaby
Mikey
Arpad
Jaren
Izak
Gamaliel
Ase
Alva
Maddy
Yonah
Yaqub
Jeriel
Isac
Ioannis
Elimelech
Cale
Yona
Zedekiah
Sion
Ikie
Nathanial
Joaquim
Akim
Michel
Dannie
Shaul
Joesiah
Sammey
Jediah
Jamin
Iziah
Jakeb
Mo
Mykell
Joell
Javan
Gershon
Amiel
Able
Jess
Hazael
Michele
Shelly
Lazar
Jakeem
Elija
Zebulon
Zackariah
Idan
Heber
Benzion
Jaymes
Jacky
Jamey
Jona
Jaymie
Urias
Nachman
Jaison
Enos
Ebrahim
Adon
Micha
Ehud
Jorie
Zalman
Jeshua
Japheth
Haniel
Adonias
Nathen
Michaelangelo
Haroun
Haroun
Dekker
Daven
Avram
Asaph
Harrel`;

const new_name = hebrew_boy_name.split(/[\s]/i);

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