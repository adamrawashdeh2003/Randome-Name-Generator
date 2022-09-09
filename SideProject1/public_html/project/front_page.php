<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
  text-align: center;
}

body {
  margin: 0;
  background-color: #F8F8FF;
}

.navbar {
  overflow: hidden;
  background-color: #3CB371;
  font-family: Chalkduster, fantasy;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  overflow: hidden;
  float: left;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 18px 204.4px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}


.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #F5F5F5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
  text-align: center;
}

.column {
  float: left;
  width: 25%;
  padding: 10px;
  background-color: #F5F5F5;
  height: 675px;
}

.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.column a:hover {
  background-color: #ddd;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

h1 {
    font-size: 30px;
    color: black;
}

</style>

</head>

<body>

<div class="navbar">
  <h1>Welcome to the Random Name Generator</h1>
  <div class="dropdown">
    <button class="dropbtn">Male
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>A-C</h3>
          <a href="african_boy.php">African</a>
          <a href="american_boy.php">American</a>
          <a href="arabic_boy.php">Arabic</a>
          <a href="armenian_boy.php">Armenian</a>
          <a href="australian_boy.php">Australian</a> 
          <a href="basque_boy.php">Basque</a>
          <a href="british_boy.php">British</a>
          <a href="bulgarian_boy.php">Bulgarian</a>
          <a href="cambodian_boy.php">Cambodian</a>
          <a href="chinese_boy.php">Chinese</a>
          <a href="czech_boy.php">Czech</a>
        </div>
        <div class="column">
          <h3>D-I</h3>
          <a href="danish_boy.php">Danish</a>
          <a href="dutch_boy.php">Dutch</a>
          <a href="finnish_boy.php">Finnish</a>
          <a href="french_boy.php">French</a>
          <a href="german_boy.php">German</a>
          <a href="greek_boy.php">Greek</a>
          <a href="hawaiian_boy.php">Hawaiian</a>
          <a href="hebrew_boy.php">Hebrew</a>
          <a href="hungarian_boy.php">Hungarian</a>
          <a href="icelandic_boy.php">Icelandic</a>
          <a href="indian_boy.php">Indian</a>
        </div>
        <div class="column">
          <h3>I-S</h3>
          <a href="irish_boy.php">Irish</a>
          <a href="italian_boy.php">Italian</a>
          <a href="japanese_boy.php">Japanese</a>
          <a href="korean_boy.php">Korean</a>
          <a href="native_american_boy.php">Native American</a>
          <a href="norwegian_boy.php">Norwegian</a>
          <a href="persian_boy.php">Persian</a>
          <a href="polish_boy.php">Polish</a>
          <a href="portuguese_boy.php">Portuguese</a>
          <a href="russian_boy.php">Russian</a>
          <a href="scottish_boy.php">Scottish</a>
        </div> 
        <div class="column">
          <h3>S-Z</h3>
          <a href="slavic_boy.php">Slavic</a>
          <a href="spanish_boy.php">Spanish</a>
          <a href="swahili_boy.php">Swahili</a>
          <a href="swedish_boy.php">Swedish</a>
          <a href="thai_boy.php">Thai</a>
          <a href="turkish_boy.php">Turkish</a>
          <a href="ukrainian_boy.php">Ukrainian</a>
          <a href="vietnamese_boy.php">Vietnamese</a>
          <a href="welsh_boy.php">Welsh</a>
          <a href="yiddish_boy.php">Yiddish</a>
        </div> 
    </div>
  </div> 
</div>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Female 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>A-C</h3>
          <a href="african_girl.php">African</a>
          <a href="american_girl.php">American</a>
          <a href="arabic_girl.php">Arabic</a>
          <a href="armenian_girl.php">Armenian</a>
          <a href="australian_girl.php">Australian</a> 
          <a href="basque_girl.php">Basque</a>
          <a href="british_girl.php">British</a>
          <a href="bulgarian_girl.php">Bulgarian</a>
          <a href="cambodian_girl.php">Cambodian</a>
          <a href="chinese_girl.php">Chinese</a>
          <a href="czech_girl.php">Czech</a>
        </div>
        <div class="column">
          <h3>D-I</h3>
          <a href="danish_girl.php">Danish</a>
          <a href="dutch_girl.php">Dutch</a>
          <a href="finnish_girl.php">Finnish</a>
          <a href="french_girl.php">French</a>
          <a href="german_girl.php">German</a>
          <a href="greek_girl.php">Greek</a>
          <a href="hawaiian_girl.php">Hawaiian</a>
          <a href="hebrew_girl.php">Hebrew</a>
          <a href="hungarian_girl.php">Hungarian</a>
          <a href="icelandic_girl.php">Icelandic</a>
          <a href="indian_girl.php">Indian</a>
        </div>
        <div class="column">
          <h3>I-S</h3>
          <a href="irish_girl.php">Irish</a>
          <a href="italian_girl.php">Italian</a>
          <a href="japanese_girl.php">Japanese</a>
          <a href="korean_girl.php">Korean</a>
          <a href="native_american_girl.php">Native American</a>
          <a href="norwegian_girl.php">Norwegian</a>
          <a href="persian_girl.php">Persian</a>
          <a href="polish_girl.php">Polish</a>
          <a href="portuguese_girl.php">Portuguese</a>
          <a href="russian_girl.php">Russian</a>
          <a href="scottish_girl.php">Scottish</a>
        </div> 
        <div class="column">
          <h3>S-Z</h3>
          <a href="slavic_girl.php">Slavic</a>
          <a href="spanish_girl.php">Spanish</a>
          <a href="swahili_girl.php">Swahili</a>
          <a href="swedish_girl.php">Swedish</a>
          <a href="thai_girl.php">Thai</a>
          <a href="turkish_girl.php">Turkish</a>
          <a href="ukrainian_girl.php">Ukrainian</a>
          <a href="vietnamese_girl.php">Vietnamese</a>
          <a href="welsh_girl.php">Welsh</a>
          <a href="yiddish_girl.php">Yiddish</a>
        </div> 
    </div>
  </div> 
</div>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Unisex 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="row">
        <div class="column">
          <h3>A-D</h3>
          <a href="african_unisex.php">African</a>
          <a href="american_unisex.php">American</a>
          <a href="arabic_unisex.php">Arabic</a>
          <a href="armenian_unisex.php">Armenian</a>
          <a href="austrailian_unisex.php">Australian</a> 
          <a href="british_unisex.php">British</a>
          <a href="cambodian_unisex.php">Cambodian</a>
          <a href="chinese_unisex.php">Chinese</a>
          <a href="czech_unisex.php">Czech</a>
          <a href="danish_unisex.php">Danish</a>
        </div>
        <div class="column">
          <h3>D-I</h3>
          <a href="dutch_unisex.php">Dutch</a>
          <a href="finnish_unisex.php">Finnish</a>
          <a href="french_unisex.php">French</a>
          <a href="german_unisex.php">German</a>
          <a href="greek_unisex.php">Greek</a>
          <a href="hawaiian_unisex.php">Hawaiian</a>
          <a href="hebrew_unisex.php">Hebrew</a>
          <a href="hungarian_unisex.php">Hungarian</a>
          <a href="icelandic_unisex.php">Icelandic</a>
          <a href="indian_unisex.php">Indian</a>
        </div>
        <div class="column">
          <h3>I-R</h3>
          <a href="irish_unisex.php">Irish</a>
          <a href="italian_unisex.php">Italian</a>
          <a href="japanese_unisex.php">Japanese</a>
          <a href="korean_unisex.php">Korean</a>
          <a href="native_american_unisex.php">Native American</a>
          <a href="persian_unisex.php">Persian</a>
          <a href="portuguese_unisex.php">Portuguese</a>
          <a href="russian_unisex.php">Russian</a>
          <a href="scottish_unisex.php">Scottish</a>
          <a href="slavic_unisex.php">Slavic</a>
        </div>
        <div class="column">
          <h3>S-Z</h3>
          <a href="spanish_unisex.php">Spanish</a>
          <a href="swahili_unisex.php">Swahili</a>
          <a href="swedish_unisex.php">Swedish</a>
          <a href="turkish_unisex.php">Turkish</a>
          <a href="vietnamese_unisex.php">Vietnamese</a>
          <a href="welsh_unisex.php">Welsh</a>
        </div>
  </div> 
</div>

</body>

</html>