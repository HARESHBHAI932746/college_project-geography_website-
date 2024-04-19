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


      .kufimg {
        margin: 13px 1px 1px 1px;
        height: 250px;
        width: 500px;
        border-radius: 10px;
      }
      .kupara{
        margin-top: 8px;
        border-radius: 10px;
        padding: 9px;
        background-color: #333333a1;
      }
      .fm{
        margin-left: 10px;
      }

      .kugalary{
        margin-top: 8px;
        padding: 8px;
        /* display: flex; */
        background-color: #333333a1;
      }
      .kugalimg{
        margin: 4px;
        height: 200px;
        width: 200px;
        border-radius: 10px;
      }

      .turist-logo{
      margin: 2px 2px 2px 2px;
      border-radius: 40px;
      height: 40px;
      width: 40px;
      /* border: 1px solid white; */

    box-shadow: 1px 0px 20px 2px rgb(196 196 196 / 54%);
    
  }
  .turist-lab{
      /* border-left: 2px solid; */
      /* border-right: 2px solid; */
      padding: 3px;
    border-radius: 10px;
    width: 129px;
    margin: -37px 0px 0px 38px;
    background-color: rgba(58, 58, 100, 0.378);
    /* box-shadow: 1px 0px 20px 2px rgb(255 255 255 / 54%); */
  }
  .msec{
margin-top: 3px;
    }
    .f5{
      font-size: 24px;
    }
    </style>
  </head>
  <body>
    

    <div class="kufsec">
      <center>
        <img class="kufimg" src="cc4.jpg" alt="" />
      </center>
      <hr>
      <img class="turist-logo" src="location.png" alt="">
      <h3 class="turist-lab"> Taj Mahal</h3>
      <div class="kupara">
            <p class="fm f5">
              
                            The Taj Mahal is an ivory-white marble mausoleum on the right bank of
                  the river Yamuna in Agra, Uttar Pradesh, India. It was commissioned in
                  1631 by the fifth Mughal emperor, Shah Jahan (r. 1628–1658) to house
                  the tomb of his beloved wife, Mumtaz Mahal; it also houses the tomb of
                  Shah Jahan himself. The tomb is the centrepiece of a 17-hectare
                  (42-acre) complex, which includes a mosque and a guest house, and is
                  set in formal gardens bounded on three sides by a crenellated wall
             
             </p>
      </div>
    </div>
    
 </body>
</html>
