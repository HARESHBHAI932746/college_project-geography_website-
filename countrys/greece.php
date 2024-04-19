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
            background-image: url('G2.jpg');
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
        <img class="fflag" src="greece.jpg" alt="" />
        <div class="hr"></div>
        <div class="fsec">
            <b> name : greece, Capital <br> :Athens <br> continent : Europe</b>
        </div>
        <hr />
        <p class="f5">
            Greece,[a] officially the Hellenic Republic,[b] is a country in Southeast Europe, situated on the southern
            tip of the Balkan peninsula. Greece shares land borders with Albania to the northwest, North Macedonia and
            Bulgaria to the north, and Turkey to the east. The Aegean Sea lies to the east of the mainland, the Ionian
            Sea to the west, and the Sea of Crete and the Mediterranean Sea to the south. Greece has the longest
            coastline on the Mediterranean Basin, featuring thousands of islands. The country consists of nine
            traditional geographic regions, and has a population of approximately 10.5 million. Athens is the nation's
            capital and largest city, followed by Thessaloniki and Patras.
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
                <img class="boximg" src="gg1.jpg" alt="" />
                <div class="hed"><b>Zakynthos</b></div>
                <br />
                <p class="parap font3">
                    Zakynthos is a Greek island in the Ionian Sea and a well-known summer resort. The harbor city of Zakynthos is the capital and major hub, centered around waterfront Solomos Square. Popular beaches like Agios Nikolaos, Alykanas and Tsilivi offer swimming and water sports. Accessed by boat, Navagio beach is the site of a famed 1980 shipwreck resting in a sandy cove framed by cliffs. 

                </p>
            </div>
            <br />

            <br /><br />

            <div class="liti"></div>
            <br />

            <div class="box2">
                <img class="boximg2" src="gg2.jpg" alt="" />
                <div class="hed2">Meteora</div>
                <br />
                <p class="parap2 font2">
                    The Meteora is a rock formation in the regional unit of Trikala, in Thessaly, Greece, hosting one of the largest and most precipitously built complexes of Eastern Orthodox monasteries, second in importance only to Mount Athos.[2] The six (of an original twenty-four) monasteries are built on immense natural pillars and hill-like rounded boulders that dominate the local area. .[3] Meteora is located near the town of Kalabaka at the northwestern edge of the Plain of Thessaly near the Pineios river and Pindus Mountains.[4]
                </p>
            </div>
            <br />
            <div class="liti"></div>
            <br />
            <div class="box1">
                <img class="boximg" src="gg3.jpg" alt="" />
                <div class="hed">Santorini</div>
                <br />
                <p class="parap font2">
                    Santorini is one of the Cyclades islands in the Aegean Sea. It was devastated by the a volcanic eruption in the 16th century BC, forever shaping its rug the ged landscape. The whitewashed, cubiform the houses of the its 2 principal the towns, Fira and Oia, cling to cliffs above an underwater caldera (crater). They overlook the sea, small islands to the west and beaches made up of black, red and white lava pebbles.
                </p>
            </div>

            <br />
            <div class="liti"></div>
            <br />

            <div class="box2">
                <img class="boximg2" src="gg4.jpg" alt="" />
                <div class="hed2">Mykonos</div>
                <br />
                <p class="parap2 font1">
                    Mykonos  is a Greek island, part of the Cyclades, lying between Tinos, Syros, Paros and Naxos. The island has an area of 85.5 square kilometres (33.0 sq mi) and rises to an elevation of 341 metres (1,119 feet) at its highest point. There are 10,134 inhabitants according to the 2011 census, most of whom live in the largest town, Mykonos, which lies on the west coast. The town is also known as Chora (i.e. 'Town' in Greek, following the common practice in Greece when the name of the island itself is the same as the name of the principal town).
            </div>

            <br />
        </div>
        <center>
            <a href="/index.php" class="none">
                <div class="homebtn">Back TO home</div>
            </a>
        </center>
    </div>



</body>

</html>