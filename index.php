<?php
// Start session
session_start();

// Check if user is logged in
// if (!isset($_SESSION['uname'])) {
//     header("Location: login2.php");
//     exit();
// }

// Database connection
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'geo202';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data using session
$username = $_SESSION['uname'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo "Welcome, " . $row['username'];
} else {
    // User not found
    echo "User not found";
}

// You can display user-specific content here
?>

<!-- HTML content for home page or dashboard -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
  body{
    background-image: url('bodyb4.jpg');
    background-size: cover;
    background-repeat:no-repeat ;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

  }
  .pop-lab{
    border-right: 2px solid;
    border-bottom: 1px solid;
    border-top: 1px solid;
    /* padding: 3px; */
    border-radius: 10px;
    width: 200px;
    margin: -41px -67px 0px 4px;
    background-color: rgba(58, 58, 100, 0.378);
    padding: 1px 1px 1px 43px;
    box-shadow: 1px 0px 11px 0px rgb(255 255 255 / 54%)
  }
  .poplap-img{
    height: 36px;
    width: 36px;
    /* background-color: black; */
      border-radius: 100%;
      border: 2px solid white;
      /* background: none; */
      margin: 2px 2px 2px 2px;
    }
    


.cat1{
  display: flex;
  /* overflow: wrap; */
  /* flex-wrap: wrap; */
}
.cat2{
  display: flex;
  /* flex-wrap: wrap; */
}
.categories{
  margin-left: 45px;
}
.box{
  justify-content: center;
  text-align: center;
  align-items: center;
  margin: 9px;
  height: 150px;
    width: 175px;
  border-radius: 10px;
  transition: transform 0.5s;
}
.box:hover{
  height: 147px;
  width: 172px;
  cursor: pointer;
  border: 3px solid rgb(255, 255, 255);
}


.cat-tit{
  margin-top: 53px;
  font-size: 24px;
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
}
#redius{
  margin: 2px;
}
.b1{
  background-image: url('bb1.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b2{
  background-image: url('bb2.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b3{
  background-image: url('bb3.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b4{
  background-image: url('bb4.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b5{
  background-image: url('bb5.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b6{
  background-image: url('bb8.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b7{
  background-image: url('bb7.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}
.b8{
  background-image: url('mm0_edited.jpg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  
}

.toptitle{
  border-radius: 8px;
  margin: 168px 2px 2px 117px;
  padding: 3px;
  height: fit-content;
  width: fit-content;
background-color: #00000066;
border: 1px solid white;
}
.toptitle2{
  border: 1px solid white;
  border-radius: 8px;
  margin: 168px 2px 2px 267px;
  padding: 3px;
  height: fit-content;
  width: fit-content;
background-color:#00000066;
}

.toptitle:hover{
color: red;
}
.toptitle2:hover{
color: red;
}

.navel:hover{
color: rgb(255, 0, 0);
}

.nb{
  margin-left: 4px;
  padding: 0;
  font-size: 20px;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.b-name{
  font-size: 20px;
  font-weight: bold;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  margin-left: 6px;
}

.sbtn{
  cursor: pointer;
  transition: 0.4s;
  height: 27px;
  border-radius: 8px;
  padding: 2px;
  background-color: #860000c2;
  color: white;
  margin: 0px -302px 0px 339px;
  font-size: 18px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

  
    border: 1px solid white;
    border-radius: 10px;
    padding: 4px;
    height: 30px;
    padding-left: 25px;
    width: 100px;
    font-size: 19px;
}

.sbtn:hover{
  background-color: #ff0000f3;
}

.search-icon{
  border-radius: 40px;
height: 18px;
width: 18px;
margin: 7px 0px 0px 348px;
position: absolute;
}

.b-name{
  font-style: ;
}

</style>
</head>
<body>
  <nav>
    <!-- <img class="b-logo" src="/places/india/download.png" alt=""> -->
    <a class="navel b-name" href="#"> <span style="color: red;">G</span>eo<span style="color: red;">V</span>ista</a>
<span class="nb">

  <a class="nb navel home" href="index.php">Home</a>
  <a class="nb navel about" href="about.php">About</a>
  <a class="nb navel contact" href="register.php">Register</a>
  <a class="nb navel contact" href="login2.php">login</a>
</span>

    <img class="search-icon" src="search-icon.png" alt="">
<button class="sbtn" type="submit"><a href="spage.php">Search </a></button>

</nav>



  <div class="container">
    <ul id="slides" style="margin: 2px;">
  

       <li class="slide showing"> <a href="top1.php"><h6 class="toptitle">Places On Earth That Don't Feel Real</h6></a> </li>
     
      <li class="slide"><a href="top2.php"><h6 class="toptitle">Places On India That Don't Feel Real</h6></a></li>
      <li class="slide"><a href="top3.php"><h6 class="toptitle2">world Maps</h6></a></li>
    </ul>
    <div class="buttons">
      <button class="controls" id="previous">&lt;</button>
  
      <button class="controls" id="pause">&#10074;&#10074;</button>
  
      <button class="controls" id="next">&gt;</button>
    </div>
  </div>
  <br>
 <hr>
 <br>
 <div class="categories">
  <div class="cat1">

    <a href="historic.php" class="box b1"><div class="cat-tit">Historic</div></a>
    <a href="natural.php" class="box b2"><div class="cat-tit">Natural</div></a>
    <a href="beaches.php" class="box b3"><div class="cat-tit">beaches</div></a>
    <a href="cultural.php" class="box b4"><div class="cat-tit">cultural</div></a>
  </div>
<div class="cat2">

  <a href="wildlife.php" class="box b5"><div class="cat-tit">wildlife</div></a>
  <a href="greenary.php" class="box b6"><div class="cat-tit">greenary</div></a>
  <a href="Adventures.php" class="box b7"><div class="cat-tit">Adventures</div></a>
  <a href="Ancient.php" class="box b8"><div class="cat-tit">Mountains</div></a>
</div>
</div>
 <br>
<div class="country-container">
  <img class="poplap-img" src="fire.jpeg" alt="">
  <h2 class="pop-lab">popular countrys</h2>
  <br>
  <div class="country-arry">
    <div class="cuntry-card">
      <img class="flag" src="indiaa.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/india.php">India</a></b></div>
    </div>

   


    <div class="cuntry-card">
     <img class="flag" src="us.jpg" alt="">
      <div class="cuntry-name"><b> <a href="countrys/us.php">USA</a></b></div>
    </div>


    <div class="cuntry-card">
      <img class="flag" src="greece.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/greece.php">Greece</a></b></div>
    </div>


    <div class="cuntry-card">
      <img class="flag" src="russia.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/russia.php">russia</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="swiss.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/swiss.php">switzer..</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="brazil.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/brazil.php">brazil</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="moro.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/moro.php">moro...</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="indo.jpg" alt="">
      <div class="cuntry-name"><b><a href="countrys/indo.php">indon..</a></b></div>
    </div>

    </div>
</div>


  </body>
<script src="script.js"></script>
</html>