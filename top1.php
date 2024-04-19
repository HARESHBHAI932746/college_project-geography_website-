<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        color: white;
        background-color: black;
        margin: 0px 85px 0px 85px;
        background-image: url('topworld.jpg');
background-size: cover;
background-repeat: no-repeat;
background-size: 445vh;
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
        background-color: #2a2a2acc;
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
      .font2 {
        font-size: 20px;
      }
      .font1 {
        font-size: 18px;
      }
      .font3 {
        font-size: 23px;
      }
      .font4 {
        font-size: 19px;
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
    </style>
  </head>
  <body>
    <img src="location.png" alt="" class="loc" />
    <h2 class="title">Places On Earth That Don't Feel Real</h2>
    <!-- <br /><br />
    <hr /> -->
    <div class="plece">
      <div class="box1">
        <img class="boximg" src="top1_1.jpg" alt="" />
        <div class="hed"><b>Salar de Uyuni</b></div>
        <br />
        <p class="parap">
            Frozen in the depths of winter, the world’s largest salt flat is transformed in to a giant sky-reflecting mirror during rainy season (September-May). The pools left over from this monumental prehistoric lake create a shimmering, illusory horizon, making it one of the best places to visit in the world if you like a good trick shot or selfie.
        </p>
      </div>
  
  <br>
      <div class="liti"></div>
  <br>
      <div class="box2">
        <img class="boximg2" src="top1_2.jpg" alt="" />
        <div class="hed2"> Kuang Si Falls</div>
        <br />
        <p class="parap2 font10">
            Already a top holiday destination for backpackers, the Laotian city of Luang Prabang is temptingly close to Kuang Si Falls, a three tier splash spectacular with waters so clear and blue it’ll be hard to resist jumping straight in. Hike the trails around the area to escape the tour groups and find your own secret slice of paradise.
        </p>
      </div>
      <br />
      <div class="liti"></div>
      <br />
      <div class="box1">
        <img class="boximg" src="top1_3.jpg" alt="" />
        <div class="hed"> Grand Prismatic Spring</div>
        <br />
        <p class="parap font11">
            More wet stuff to blow your socks off, this time in North America. This natural pool, with its rainbow coloured waters, is found in Yellowstone National Park and is the third largest hot spring in the world.
        </p>
      </div>

      <br />
      <div class="liti"></div>
      <br />

      <div class="box2">
        <img class="boximg2" src="top1_4.jpg" alt="" />
        <div class="hed2">Mount Rinjani</div>
        <br />
        <p class="parap2 font10">
            A couple of days of tough climbing is well-rewarded at the summit of Mount Rinjani, the second highest active volcano in Indonesia, with this spectacular view. A crater lake, affectionately known as ‘Child of the Sea’ by locals, sits pretty at the top of this epic climb.
        </p>
      </div>

      <br />
    </div>
    <center>
      <a href="index.php" class="none">
        <div class="homebtn">Back TO home</div>
      </a>
    </center>
  </body>
</html>
