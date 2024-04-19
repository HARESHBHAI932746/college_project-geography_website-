<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/style.css" />
    <style>




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







           body{
            background-image: url('us2.jpg');
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
        width: 315px;

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
        background-color: rgba(58, 58, 100, 0.378);
      }
      .msec {
        margin-top: 3px;
      }




      .title {
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        padding: 4px;
        background-color: #20204ba1;
        border-radius: 10px;
        width: 430px;
        margin: 4px 256px 32px 47px;
      }
      .loc {
        position: absolute;
        margin: -2px 11px 15px 4px;
        border-radius: 40px;
        height: 42px;
        width: 42px;
        box-shadow: 1px 0px 20px 2px rgb(196 196 196 / 54%);
      }
      .plece {
        border: 1px solid white;
        border-radius: 8px;
        height: auto;
        display: flex;
        flex-wrap: wrap;
        padding: 4px;
        background-color: rgb(42, 42, 42);
      }

      .boximg {
        position: absolute;
        height: 244px;
        width: 433px;
        margin: 5px 0px 0px 7px;
        border-radius: 9px;
      }
      .hed {
        margin: 0px 0px 0px 200px;
      }
      .parap {
        margin: 0px -322px -25px 456px;
      }
      .de {
        margin: 0px 0px 0px 200px;
      }

      .boximg2 {
        height: 244px;
        width: 433px;
        margin: 0px 0px 0px 415px;
        border-radius: 9px;
      }
     
      .parap2 {
        margin: -214px 86px 0px 0px;
      }
      .liti {

        background-color: white;
        height: 1px;
        margin: 2px;
        width: 850px;
      }

      .homebtn {
        list-style: none;
        padding: 3px;
        text-decoration: none;
        width: 98px;
        border-radius: 9px;
        border: 1px solid white;
        background-color: blue;
        margin: 7px 2px 2px 2px;
        color: white;
      }
      
      .box1{
        height: 262px;
        width: 500px;
      }
      .box2{
        height: 262px;
        width: 500px;
      }
      .hed{
            font-weight: bolder;
            font-size: 17px;
            margin: 0px -145px 0px 456px;
    
            padding: 2px;
            border: 1px solid rgb(255, 255, 255);
            background-color: rgba(13, 0, 255, 0.375);
            width: fit-content;
        }
        .hed2{
            font-weight: bolder;
            font-size: 17px;
            
        position: absolute;
        margin: -250px 0px 0px 2px;
      
            width: fit-content;
    background-color: rgba(49, 0, 210, 0.304);
    border: 1px solid white;
            padding: 4px;
            position: absolute;
        }
        .f5{
            font-size: 23px;
        }
    </style>
  </head>
  <body>
    <div class="firstsec">
      <img class="fflag" src="us.jpg" alt="" />
      <div class="hr"></div>
      <div class="fsec">
        <b> name : USA, Capital <br> :Washington D.C, <br> continent : North America</b>
      </div>
      <hr />
      <p class="f5">
        The United States of America (U.S.A. or USA), commonly known as the
        United States (U.S. or US) or informally as America, is a country
        primarily located in North America and consisting of 50 states, a
        federal district, five major unincorporated territories, nine Minor
        Outlying Islands,[i] and 326 Indian reservations. It is the world's
        third-largest country by both land and total area.[c] It shares land
        borders with Canada to its north and with Mexico to its south and has
        maritime borders with the Bahamas, Cuba, Russia, and other nations.[j]
        With a population of over 333 million,[k] it is the most populous
        country in the Americas and the third-most populous in the world. The
        national capital of the United States is Washington, D.C., and its most
        populous city and principal financial center is New York City.
      </p>
    </div>

    <div class="sec-sec">
      <div class="msec">
        <img class="turist-logo" src="download.png" alt="" />
        <h3 class="turist-lab">Tourist Spots</h3>
      </div>

    </div>
      </div>
    </div>

    <br>
    <div class="newsecof">
      <div class="plece">
        <div class="box1">
          <img class="boximg" src="us1.jpg" alt="" />
          <div class="hed"><b>Hawaii</b></div>
          <br />
          <p class="parap font2">
            Hawaii is an island state in the Western United States, about 2,000 miles (3,200 km) from the U.S. mainland in the Pacific Ocean. It is the only U.S. state outside North America, the only state that is an archipelago, and the only state in the tropics.
            Hawaii consists of 137 volcanic islands that comprise almost the entire Hawaiian archipelago; spanning 1,500 miles (2,400 km), the state is physiographically and ethnologically part of the Polynesian subregion of Oceania. 

          </p>
        </div>
        <br />
  
        <br /><br />
  
        <div class="liti"></div>
        <br />
  
        <div class="box2">
          <img class="boximg2" src="lake.jpg" alt="" />
          <div class="hed2">Lake Tahoe</div>
          <br />
          <p class="parap2 font2">
           Lake Tahoe  is a freshwater lake in the Sierra Nevada of the Western United States, straddling the border between California and Nevada.  and at 122,160,280 acre⋅ft (150.7 km3) it trails only the five Great Lakes as the largest by volume in the United States. Its depth is 1,645 ft (501 m), making it the second deepest in the United States after Crater Lake in Oregon (1,949 ft or 594 m).[1]

The lake was formed about two million years ago as part of the Lake Tahoe Basin, and its modern extent was shaped during the ice ages.
          </p>
        </div>
        <br />
        <div class="liti"></div>
        <br />
        <div class="box1">
          <img class="boximg" src="us3.jpg" alt="" />
          <div class="hed">Antelope Canyon</div>
          <br />
          <p class="parap font2">
            Navajo Upper Antelope Canyon is a slot canyon in the American Southwest, on Navajo land east of Lechee, Arizona. It includes six separate, scenic slot canyon sections on the Navajo Reservation, referred to as Upper Antelope Canyon (or The Crack), Rattle Snake Canyon, Owl Canyon, Mountain Sheep Canyon, Canyon X[4] and Lower Antelope Canyon (or The Corkscrew).[2] It is the primary attraction of Lake Powell Navajo Tribal Park, along with a hiking trail to Rainbow Bridge National Monument.

 
          </p>
        </div>
  
        <br />
        <div class="liti"></div>
        <br />
  
        <div class="box2">
          <img class="boximg2" src="us4.jpg" alt="" />
          <div class="hed2">Hamilton Pool</div>
          <br />
          <p class="parap2 font1">
            Hamilton Pool Preserve is a recreational destination located in the Texas Hill Country west of Austin. Reservations are required to visit, and it is open for hiking and sight-seeing. Hamilton Pool is a natural pool that was created when the dome of an underground river collapsed due to massive erosion thousands of years ago. The pool is located about 23 miles (37 km) west of Austin, Texas off Highway 71. Since the 1960s, Hamilton Pool has been a popular summer swimming spot for Austin visitors and residents. flows with water temperatures reaching 50 degrees Fahrenheit.
          </p>
        </div>
  
        <br />
      </div>
      <center>
        <a href="index.php" class="none">
          <div class="homebtn">Back TO home</div>
        </a>
      </center>
    </div>



  </body>
</html>
