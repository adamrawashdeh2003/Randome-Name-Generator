<?php 
require_once(__DIR__ . "/../../partials/nav.php");
?>

<h1>Hello</h1>

<button>Generate the Name!</button> 

<h2>Name</h2>

<script>
const british_girl_name =
`Evelyn
Mason
Avery
Harper
Wyatt
Carter
Grayson
Riley
Parker
Hazel
Madison
River
Willow
Cooper
Easton
Landon
Sawyer
Addison
Hunter
Ivy
Everly
Kinsley
Audrey
Ryder
Blake
Hayden
Emery
Hailey
Walker
Jade
Piper
Everleigh
Ashton
Bentley
Tyler
Hadley
Remington
Oakley
Daisy
Beckett
Kaylee
Tatum
Summer
Bailey
Blakely
Ember
Sutton
Ashley
Faith
Aspen
Hayes
Marley
Presley
Jett
Paxton
Lane
Wren
Harlow
Kimberly
Hope
Myla
Harley
Journey
Spencer
Haven
Rylan
Kendall
Vanessa
Palmer
Brooke
Reid
Tate
Bradley
Leighton
Winter
Hallie
Evelynn
Cade
Briar
Emory
Wynter
Skyler
Stetson
Ainsley
Danna
Raven
Justice
Brinley
Reed
Layne
Oaklee
Leland
Bristol
Holly
Banks
Heaven
Averie
Edith
Miller
Mae
Sunny
Katie
Ivory
Henley
Haley
Cecelia
Layton
Jenna
Jemma
Oakleigh
Dayana
Kelsey
Liberty
Harlan
Skyla
Landyn
Chelsea
Kendra
Grey
Dustin
Colter
Kimber
Treasure
Jada
Ellison
Marleigh
Marilyn
Hayley
Loyal
Lee
Arden
Ty
Waverly
Mercy
Indigo
Baylee
Averi
Keaton
Whitley
Harlee
Devon
Tommy
Hollis
Casen
Madisyn
Jerry
Trace
Bailee
Avah
Jagger
Eddie
Clover
Addyson
Emerald
Goldie
Gentry
Princess
Hadleigh
Sidney
Luella
Billie
Stormi
Etta
India
Haylee
Dane
Van
Love
Whitney
Blessing
Ramsey
Dana
Ansley
Randy
Perry
Kody
Ripley
Marigold
Storm
Scottie
Ashtyn
Maison
Patience
Foster
Heath
Everley
Bentlee
Rhodes
Harleigh
Ellery
Queen
Jayde
Terry
Rain
Cartier
Alannah
Marlow
Arrow
Laine
Libby
Hailee
Raleigh
Wendy
Cherish
Diamond
Ridley
Tenley
Beverly
Darla
Marlo
Colbie
Heather
Jet
Kyndall
Bayleigh
Marlie
Wynn
Emeri
Maizie
Lavender
Lindsay
Roselynn
Lenny
Haiden
Jackie
Ivey
Aston
Jenny
Lake
Audra
Huntley
Lula
Fern
Malvie
Dale
Harlyn
Briley
Maple
Hartley
Darien
Star
Honey
Audrina
Rue
Cecily
Edie
Steele
Temperance
Aven
Sunnie
Empress
Eddy
Darby
Emmet
Britney
Laiken
Bryar
Audriana
Stormy
Britton
Lynlee
Ashly
Arlen
Blythe
Starr
Shirley
Leyton
Madyson
Kelsie
Deanna
Darlene
Darryl
Mildred
Ryley
Darnell
Katelynn
Blakelee
Lanie
Jaida
Atlee
Gracen
Daelyn
Dawn
Stormie
Kinsey
Donnie
Harlie
Wisdom
Hailie
Arley
Primrose
Janet
Kendal
Ivie
Rogue
Justyce
Winslow
Audree
West
Linley
Peace
Brea
Maryann
Dolly
Carol
Golden
Chesney
Maelee
Ellamae
Kyndal
Audrianna
Audie
Bliss
Lovely
Cross
Jadyn
Herta
Brystol
Brinleigh
Madisson
Dove
Sheldon
Hollie
Ravyn
Leanne
Haylie
Audene
Sunshine
Goldy
Blossom
Beda
Harlen
Sunni
Crimson
Hayleigh
Silver
Tylee
Rayven
Kourtney
Minnie
Lark
Kendyl
Baileigh
Weslee
Rosanna
Golda
Bird
Brandi
Darlyn
Edithe
Rawnie
Praise
Twyla
Maidie
Jennie
Marillyn
Indya
Blakeley
Mildrid
Merci
Marlen
Wealthy
Snow
Bevie
Carlysle
Harlo
Arlie
Truly
Kelsi
Kelsea
Erda
Weslie
Edwarda
Haleigh
Carlisle
Jeweldene
Wilfreda
Bradlee
Jackeline
Connie
Dorrit
Edma
Etheldreda
Hedley
Fernley
Uda
Jaide
Harleen
Silvestra
Audrie
Ansleigh
Mercer
Ordell
Teddi
Posey
Leiah
Welcome
Ainslee
Bradyn
Carrington
Tyla
Corless
Ralphine
Ferna
Alvine
Avelyn
Reeve
Mable
Quella
Dix
Verly
Earldene
Kim
Udella
Holley
Elvine
Somers
Kimberlyn
Ginger
Dayla
Chelsey
Earletta
Rook
Robinson
Edytha
Maysen
Maybelle
Leeann
Evelynne
Breelyn
Jory
Tory
Meryll
Sherlee
Kymber
Marylea
Earla
Rubie
Maida
Leann
Deysi
Edmee
Nellene
Ashten
Spring
Schelley
Ivee
Brenley
Beverle
Pansie
Bryden
Perrin
Darrylin
Irvina
Viana
Perri
Marilynn
Darleane
Randene
Arleen
Rayanna
Lynley
Nellwyn
Elvenia
Melvie
Verlee
Jaydee
Fleta
Beverlie
Meryle
Starla
Edwyna
Wendey
Becky
Audrene
Bently
Kendell
Teal
Malin
Beverlye
Ginny
Brookelynn
Goldia
Rexine
Sunnee
Vinni
Cloud
Myrla
Unity
Bev
Britta
Ashlee
Arliene
Dreda
Edwardine
Rosel
Burma
Patsey
Joyetta
Kimblyn`;

const new_name = british_girl_name.split(/[\s]/i);

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