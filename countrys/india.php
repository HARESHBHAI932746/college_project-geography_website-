
<?php
session_start();

$username = $_SESSION['uname'];
?>


<?php

$conn = mysqli_connect("localhost","root","","geo202");




if(isset($_POST["submit"])){
  $comment = $_POST['comment'];
  
  $sql = "INSERT INTO `comments` (`comment`) VALUES ('$comment')";
  $result = mysqli_query($conn,$sql);

  if($result){
header("Location: india.php");
  }
  else{
      echo "nooooooo".mysqli_error($conn);
  }
}


?>











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      body{
            background-image: url('india2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            
          }
    
      .firstsec {
        padding: 9px;
        background-color: #333333ae;
        height: 80vh;
        margin-top: 7px;
        color: whitesmoke;
      }

      .fflag {
        margin: 8px 2px 2px 35px;
        border-radius: 10px;
        height: 74px;
        width: 103px;
      }

      .fsec {
        margin: -82px 1px 1px 176px;
        color: white;
        position: absolute;
        display: flex;
        flex-direction: column;
        height: 58px;
        width: 156px;

        font-size: 19px;
      }
      .hr {
        margin: -82px 2px 2px 155px;
        width: 3px;
        position: absolute;
        height: 76px;
        color: red;
        background-color: red;
      }

      .conttt {
        margin-top: 9px;
        height: 247px;
        /* width:645px; */
        overflow: hidden;
        /* margin: 3px; */
        /* padding: 5px; */
        display: grid;
        /* place-items: center; */
        /* background: linear-gradient(rgba(5, 166, 5, 0.577),rgba(255, 255, 0, 0.551),rgba(255, 0, 0, 0.667)); */
        background-color: #333333ae;
      }

      .imgsi {
        height: 217px;
        border-radius: 10px;
        width: 230px;
        transition: transform 1s;
      }
      .imgsi:hover {
        cursor: pointer;
        border: 2px solid white;
        border-radius: 10px;
        transform: translateZ(-10px);
      }

      .slide-conttt {
        /* transition: 0.1s; */
        display: flex;
        width: calc(240px * 17);
        animation: scroll 8s linear infinite;
      }
      .slide-conttt:hover {
        animation-play-state: paused;
      }
      @keyframes scroll {
        0% {
          transform: translateX(-10px);
        }
        /* 20%{
          transform: translateX(0);
        }
        0%{
          transform: translateX(0);
        } */
        100% {
          /* transform: translateX(calc(-250px *9)); */
          transform: translateX(-250px);
        }
      }

      .slideimggg {
        height: 250px;
        width: 227px;
        display: flex;
        align-items: center;
        padding: 9px;
        perspective: 100px;
      }

      .turist-logo {
        margin: 2px 2px 2px 2px;
        border-radius: 30px;
        height: 39px;
        width: 39px;
        border: 1px solid white;
      }
      .turist-lab {
        padding: 3px;
        border-radius: 10px;
        /* border: 2px solid white; */
        width: 108px;
        margin: -43px 0px 0px 44px;
        background-color: #3a3a64;
      }
      .msec {
        margin-top: 3px;
      }
      .font25{
        font-size: 25px;
      }





/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} */
body{
    color: white;
    background-color: black;
    margin: 0px 85px 0px 85px;
   
}
nav{
  padding: 5px;
  background-color: #07003f;
  margin: 13px 2px 2px 2px;
  height: 30px;
  border: 1px solid white;
  border-radius: 8px;
  }
.navel{
  /* margin-left: 6px; */
  color: white;
  text-decoration: none;
}

.sbtn{
  cursor: pointer;
  transition: 0.4s;
  height: 27px;
  border-radius: 8px;
  padding: 2px;
  background-color: #860000c2;
  color: white;
  margin: 1px -302px 1px 412px;
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
margin: 7px 0px 0px 424px;
position: absolute;
}


#slides{
	position: relative;
	height: 378px;
	padding: 0px;
	margin: 0px;
	list-style-type: none;
}

.slide{
  border-radius: 10px;
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: 1;

	-webkit-transition: opacity 1s;
	-moz-transition: opacity 1s;
	-o-transition: opacity 1s;
	transition: opacity 1s;
}

.showing{
	opacity: 1;
	z-index: 2;
}


.controls{
	display: none;
}


/*
non-essential styles:
just for appearance; change whatever you want
*/

.slide{
	font-size: 40px;
	/* padding: 40px; */
	box-sizing: border-box;
	background: #333;
	color: #fff;
  
  background-size: cover;
}

.slide:nth-of-type(1){
	background-color: red;
  background-image: url('topworld.jpg');
}

.slide:nth-of-type(2){
	background-color: orange;
  background-image: url('topindia.jpg');
}

.slide:nth-of-type(3){
  background-color: green;
  background-image: url('top3.jpg');
}

.controls{
  /* background: #333;
  color: #fff;
  border: none;
  /* padding: 20px 0px; */
  /* font-size: 20px;
  cursor: pointer;
  border: 2px solid #fff;
  margin: 10px 0px 0px 10px;
  width: 70px;
  height: 20px;
  border-radius: 10px;  */


  background: #333;
  color: #fff;
  border: none;
  /* padding: 20px 0px; */
  /* font-size: 20px; */
  cursor: pointer;
  border: 2px solid #fff;
  margin: 96px 0px 0px 10px;
  width: 26px;
  height: 25px;
  border-radius: 10px;
}

.controls:hover,
.controls:focus{
  background: #eee;
  color: #333;
}

.container{
  height: fit-content;
  /* height: auto; */

  border-radius: 10px;
  margin: 17px 80px 0px 86px;

  border-radius: 10px;
  /* border: 1px solid white; */
}



.buttons{
margin: 303px 0px 0px 453px;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 10;
  font-size: 0px;
}




 .country-box{
  background-color: #333;
}

.country-arry{
   display: flex;
 }


 .flag{
  height: 94px;
    width: 138px;
  
  /* height: 83px;
  width: 93px; */
  border-radius: 10px;
 }
 .cuntry-card{
  border-radius: 10px;
  /* margin: 14px; */
  margin-left:29px ;
  margin-top: 4px;
  margin: 13px;
 }

 .cuntry-name{
    color: rgb(255, 255, 255);
    position: absolute;
    margin: -101px 2px 2px 0px;
    font-size: 26px;
    /* opacity: 1; */
    border-radius: 10px;
    background-color: #333;
    opacity: 0;
    align-items: center;
    justify-content: center;
   
    padding-top: 27px;
    padding-left: 42px;
    height: 69px;
    width: 94px;
}
a{
  color: white;
  text-decoration: none;
}
.cuntry-name:hover{
  border: 2px solid white;
  opacity: 1;
  background-color: #33333382;
  cursor: pointer;
  box-shadow: 1px 0px 20px 2px rgb(255 255 255 / 54%);
}
.flag:hover{
  background-color: #333;
 }


 .country-arry{
  display: flex;
  flex-wrap: wrap;
  margin-top: 10px;
  margin-left: 85px;
 }

 .firstsec{
  border-radius: 10px;
  border: 1px solid white;
 }

 .comment-section{
  border-radius: 10px;
  border: 1px solid white;
  background-color: #00042eba;
  color: white;
  margin-top: 30px;
  height: auto;
  font-family: Verdana, sans-serif;
  padding: 30px;
 }
 .comment-input{
    color: white;
    background-color: black;
    height: 30px;
    width: 470px;
    border: 2px solid white;
    border-radius: 7px;
    font-size: 19px;
    margin-top: 30px;
    margin-right: 5px;
    margin-left: 10px;
  }
  .comment-post-btn{
    margin-left: 5px;
    margin-top: 30px;
    color: white;
    background-color:#0041ff69 ;
    border: 2px solid white;
    border-radius: 9px;
    padding: 2px;
    height: 38px;
    font-size: 18px;
    width: 80px;
  }
.comment-post-btn:hover{
    background-color:#001964ce ;
cursor: pointer;
}

.user-comment{

   margin-top: 30px;
  }
.dp{
  background-color: #ff6a00;
  align-items: center;
  justify-content: center;
  text-align: center;
  border: 1px solid white;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  padding: 1px;
  position: absolute;
}
.username{
  margin-top: 14px;
  margin-left: 26px;
  font-size: 19px;
}
.date{
  position: absolute;
  margin: -19px 2px 25px 609px;
}
.ucomment{
  margin-top: 21px;
  margin-left: 24px;
}
.c-grop{

  margin-top: 29px;
}

.comment-btn,.img-btn,.video-btn{
  margin-left: 5px;
    margin-top: 30px;
    color: white;
    background-color:red ;
    border: 2px solid white;
    border-radius: 9px;
    padding: 4px;
    height: auto;
    font-size: 18px;
    width: auto;

}

.comment-btn,.img-btn,.video-btn:hover{
  cursor: pointer;
}

.comment-btn,.img-btn,.video-btn{
  margin-left: 96px;
}

.btns{
  border: 1px solid white;
  display: flex;
  align-items: center;
  /* justify-content: center; */
  background-color: #2f0000c7;
  /* justify-items: center; */
  border-radius: 10px;
  margin: 10px 10px 10px 10px;
  padding: 10px 10px 30px 10px;
}

.img-post-btn{
  margin-left: 5px;
    margin-top: 30px;
    color: white;
    background-color:#0041ff69 ;
    border: 2px solid white;
    border-radius: 9px;
    padding: 3px;
    height: 38px;
    font-size: 18px;
    width: auto;
}

    </style>
  </head>
  <body>
    <div class="mainsec">

    
    <div class="firstsec">
      <img class="fflag" src="indiaa.jpg" alt="" />
      <div class="hr"></div>
      <div class="fsec">
        <b> name : India Capital : new delhi continent : Asia </b>
      </div>
      <hr />
      <p class="font25">
        India, officially the Republic of India (ISO: Bhārat Gaṇarājya),[25] is
        a country in South Asia. It is the seventh-largest country by area; the
        most populous country as of June 2023;[26][27] and from the time of its
        independence in 1947, the world's most populous democracy.[28][29][30]
        Bounded by the Indian Ocean on the south, the Arabian Sea on the
        southwest, and the Bay of Bengal on the southeast, it shares land
        borders with Pakistan to the west;[j] China, Nepal, and Bhutan to the
        north; and Bangladesh and Myanmar to the east. In the Indian Ocean,
        India is in the vicinity of Sri Lanka and the Maldives; its Andaman and
        Nicobar Islands share a maritime border with Thailand, Myanmar, and
        Indonesia.
      </p>
    </div>

    <div class="sec-sec">
      <div class="msec">
        <img class="turist-logo" src="download.png" alt="" />
        <h3 class="turist-lab">Tourist Spots</h3>
      </div>

      <div class="conttt">
        <div class="slide-conttt">
          <div class="slideimggg">
            <a class="imgsi" href="kutch.php">
              <img class="imgsi" src="kutch.jpg" alt=""
            /></a>
          </div>
          <div class="slideimggg">
           <!-- <a href="/places/india/taj.php"> -->
           <a class="imgsi" href="taj.php">
             <img class="imgsi" src="cc4.jpg" alt="" />
           </a>
          </div>
          <div class="slideimggg">
            <a class="imgsi" href="hava.php">
              <img class="imgsi" src="hava.jpg" alt="" />
            </a>
            </div>
          <div class="slideimggg">
            <a class="imgsi" href="girnar.php">
              <img class="imgsi" src="girnar.jpg" alt="" />
            </a>
          </div>
          
        </div>
      </div>
    </div>


    
</div>

<div class="btns">
<button type="submit" class="comment-btn" name="submit">Comment Section</button>
<a href="imgsec2.php" class="img-btn">Image Section</a>
<a href="videosec.php" class="img-btn">Video Section</a>
</div>

<div class="comment-section">


      <form action="" method="post">
        <!-- <input class="comment-input" type="text" name="name" id="comment" placeholder="enter your name"> -->
        <input class="comment-input" type="text" name="comment" id="comment" placeholder="leave your comment here">
        <button type="submit" class="comment-post-btn" name="submit">Post</button>
      </form>
 
      <div class="user-comment">
        <div class="c-grop">
        <?php

// $db_host = 'localhost';
// $db_username = 'root';
// $db_password = '';
// $db_name = 'geo202';

// $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Fetch user data using session
// $username = $_SESSION['uname'];
// $sql = "SELECT * FROM users WHERE username='$username'";
// $result = $conn->query($sql);

// if ($result->num_rows == 1) {
//     $row = $result->fetch_assoc();
//     echo "Welcome, " . $row['username'];
// } 


 


?>

<?php
$conn = mysqli_connect("localhost","root","","geo202");

$sql = "SELECT * FROM `comments`";

$result = mysqli_query($conn,$sql);




 while($row = mysqli_fetch_assoc($result)){
?>
          
          <!-- <div class="dp">A</div> -->
          <!-- <div class="dp">A</div>   <div class="username"> <?php echo $row['name'] ?></div> -->
          <div class="dp">H</div>   <div class="username"> <?php echo $username ?></div>
          <div class="date"><?php echo $row['time'] ?></div>
          <div class="ucomment"> <?php echo $row['comment'] ?></div>
        </div>
        <?php } ?>     


      </div>


    </div>
  </body>
</html>
