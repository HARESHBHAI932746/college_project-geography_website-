<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
  body{
    background-image: url('spage.jpg');
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
    width: 181px;
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
background-color: #0000008c;
}
.toptitle2{
  border-radius: 8px;
  margin: 168px 2px 2px 267px;
  padding: 3px;
  height: fit-content;
  width: fit-content;
background-color: #000000;
}
.inputf{
    color: white;
    background-color: black;
    height: 38px;
    width: 255px;
    border: 2px solid white;
    border-radius: 9px;
    font-size: 19px;
    /* margin: 20px 0px 0px 198px; */
    margin-top: 30px;
    margin-right: 5px;
  }
  .subbtn{
    margin-left: 5px;
    margin-top: 30px;
    color: white;
    background-color:#0041ff69 ;
    border: 2px solid white;
    border-radius: 9px;
    padding: 2px;
    height: 38px;
    font-size: 19px;
    width: 76px;
    /* transition: 0.5s; */
  }
.subbtn:hover{
    background-color:#001964ce ;
cursor: pointer;
}
li{
  list-style: none;
  display: flex;
  flex-direction: column;
  
}
/* ul{
  margin: 20px;
  display: flex;
  flex-direction: column;
  list-style: none;

}
.lis{
  margin: 17px;
  font-size: 19px;
} */
.fdev{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  
}
.secdiv{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  list-style: none;
  font-size: 19px;
}
.contcss{
  font-size: 45px;
  margin: 30px;

}

a:hover{
  color: red;
}

.cat-tit:hover{
  color: red;
}



</style>
</head>
<body>
  <center>
  <input class="inputf" type="search" name="s" id="inputtag" placeholder="Search..Country,Category">
  <button type="submit" class="subbtn">search</button>
</center>

<br><br>
<br><br>

<center>

  <div class="ul" id="ul">
    
    
    
    <div class="secdiv">
      
     <li class="lis contcss">
       <a href="countrys/india.php">India</a>
      </li>
      <li class="lis contcss">
    <a href="countrys/us.php">USA</a>
   </li>
   <li class="lis contcss">
    <a href="countrys/greece.php">Greece</a>
   </li>
   <li class="lis contcss">
    <a href="countrys/russia.php">russia</a>
   </li>
   
   <li class="lis contcss">
    <a href="countrys/swiss.php">switzer..</a>
   </li>
   <li class="lis contcss">
    <a href="countrys/brazil.php">brazil</a>
  </li>
  <li class="lis contcss">
    <a href="countrys/moro.php">morocco</a>
  </li>
  <li class="lis contcss">
    <a href="countrys/indo.php">indon..</a>
  </li>
</div>
  
<br><br>

<div class="fdev">

  <li class="lis">
    <a href="historic.php" class="box b1 lis"><div class="cat-tit">Historic</div></a>
   </li>
   <li class="lis">
    <a href="natural.php" class="box b2 lis"><div class="cat-tit">Natural</div></a>

   </li>
   <li class="lis">
    <a href="beaches.php" class="box b3 lis"><div class="cat-tit">beaches</div></a>

   </li>
   <li class="lis">
    <a href="cultural.php" class="box b4 lis"><div class="cat-tit">cultural</div></a>

   </li>


   <li class="lis">
     <a href="wildlife.php" class="box b5 lis"><div class="cat-tit">wildlife</div></a>
     
   </li>
   <li class="lis">
     <a href="greenary.php" class="box b6 lis"><div class="cat-tit">greenary</div></a>

   </li>
   <li class="lis">
  <a href="Adventures.php" class="box b7 lis"><div class="cat-tit">Adventures</div></a>

   </li>
   <li class="lis">
    <a href="Ancient.php" class="box b8 lis"><div class="cat-tit">Mountains</div></a>    
   </li>
  </div>


 
</div>

</center>

  </body>
  <script>
    let intag = document.getElementById('inputtag');
intag.addEventListener('keyup',filternames);

function filternames(){
  let inttagvalue = intag.value;
  let intagvaluinupper = inttagvalue.toUpperCase();

  let ul = document.getElementById('ul');
  let li = ul.querySelectorAll('li.lis');

  for (let i = 0; i < li.length; i++) {

    let a = li[i].getElementsByTagName('a')[0];

    if(a.innerHTML.toUpperCase().indexOf(intagvaluinupper) > -1){
      li[i].style.display = 'block';
      console.log(i);
    }
    
    else{        
      li[i].style.display = 'none';        
    }
  }
}



  </script>
<script src="script.js"></script>
</html>