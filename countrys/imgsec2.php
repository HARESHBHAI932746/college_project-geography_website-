<?php

session_start();

$username = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
            background-color: black;
            margin: 10px 10px 10px 10px;
            background-repeat: no-repeat;
            background-size: cover;
            background: url('bodyB.jpg');
        }


        .comment-section{
          box-shadow: box-shadow: 0px 1px 20px 4px white;
          padding: 20px;
          height: 44vw;
          width: 700px;
          border-radius: 9px;
          background-color: #a3a3de1f;
          margin-top:12px;
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

        .locationimg{
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

        .name{
          font-size: 19px;
          position: absolute;
          margin-left: 24px;
          margin-top: 2px;
        }
        
        .locname{
          margin-top: 1px;
          font-size: 19px;
          position: absolute;
          margin-left: 280px;
        }
        
        .date{
          font-size: 19px;
          /* position: absolute; */
          margin-left: 30px;
          float: right;
        }

        .img{
          border-radius: 12px;
          border: 1px solid white;
          height: 350px;
          width: 590px;
          margin-top: 20px;
        }

        .comm{
          margin-top: 20px;
        }




        .container {
   

   max-width: 500px;
   margin: 50px auto;
   padding: 20px;
   background-color: #fff;
   border-radius: 5px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
   color: black;
   text-align: center;
   margin-bottom: 20px;
}

.form-group {
   margin-bottom: 20px;
}

label {
   color: black;

   font-weight: bold;
}

input[type="text"],
input[type="file"],
textarea {
   color: black;

   width: 100%;
   padding: 10px;
   border: 1px solid #ccc;
   border-radius: 5px;
   box-sizing: border-box;
}

textarea {
   color: black;

   resize: vertical;
}

button {
   background-color: #4caf50;
   color: #fff;
   padding: 10px 20px;
   border: none;
   border-radius: 5px;
   cursor: pointer;
   font-size: 16px;
}

button:hover {
   background-color: #45a049;
}

/* The Modal (background) */
.modal {
   

 display: none; /* Hidden by default */
 position: fixed; /* Stay in place */
 z-index: 1; /* Sit on top */
 left: 0;
 top: 0;
 width: 100%; /* Full width */
 height: 100%; /* Full height */
 overflow: auto; /* Enable scroll if needed */
 background-color: rgb(0,0,0); /* Fallback color */
 background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
 background-color: black;
   color: white;

}

/* Modal Content/Box */
.modal-content {
 background-color: #fefefe;
 margin: 15% auto; /* 15% from the top and centered */
 padding: 20px;
 border: 1px solid #888;
 width: 80%; /* Could be more or less, depending on screen size */


}

/* The Close Button */
.close {
 color: #aaa;
 float: right;
 font-size: 28px;
 font-weight: bold;
}

.close:hover,
.close:focus {
 color: black;
 text-decoration: none;
 cursor: pointer;
}

.btn{
  background-color: blue;
}

b{
  display: none;
}

    </style>
</head>
<body>

<?php
if(isset($_POST['locname'])){
    $locname = $_POST['locname'];
  }
  
  if(isset($_POST['img'])){
    $img = $_POST['img'];
  }
  
  if(isset($_POST['comment'])){
    $comment = $_POST['comment'];
  }



  if(isset($_POST['img'])){
    $img = $_FILES['img'];
    $img = $_POST['img'];
  
    $tmp_img_name = $_FILES['img'] ['tmp_name'];
    move_uploaded_file($tmp_img_name,$img);
   }
  
  if(isset($_FILES['img'])){
   
   $file_name = $_FILES['img']['name'];
   $file_size = $_FILES['img']['size'];
   $file_tmp = $_FILES['img']['tmp_name'];
   $file_type = $_FILES['img']['type'];
  
   move_uploaded_file($file_tmp,"imgup/".$file_name);


  }
  
  $sn = "localhost";
  $un = "root";
  $ps = "";
  $dbname = "geo202";
  
   $conn = mysqli_connect($sn,$un,$ps,$dbname);
  
  
    if(!$conn){
     die("something want wrong".mysqli_connect_error());
     }
     else{
      $sql = "INSERT INTO `img` (`locname`,`img`,`comment`) VALUES ('$locname','$file_name','$comment')";
      $result = mysqli_query($conn,$sql);
    }
    


?>
<center>
<br>
  
  <button id="openModalBtn" class="btn">Post Your Information</button>
  <br>
</center>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
        <h2>Post Your Information</h2>
        <form id="postForm" action="imgsec2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Location Name</label>
                <input type="text" id="name" name="locname" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="img" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
            </div>
            <button type="submit">Post</button>
        </form>
    </div>
  </div>






  
</div>

<br><br>
<center>
<?php



        $sn = "localhost";
        $un = "root";
        $ps = "";
        $dbname = "geo202";
        
         $conn = mysqli_connect($sn,$un,$ps,$dbname);

    $sql = "SELECT * FROM `img`";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0){


    

    while($row = mysqli_fetch_assoc($result)){ 
      $locname = $row['locname'];
      $img = $row['img'];
      $comment = $row['comment'];
      $time = $row['time'];
 
    

        
?>


    <div class="comment-section">
      <div class="comment">
        <div class="dp">H</div> 
        <div class="name"> <?php echo $username; ?> </div>
        <img class="locationimg" src="location.png" alt="">
        <div class="locname"><?php echo $locname;  ?></div>
        <div class="date"><?php echo $time;  ?></div>
        <br><br>
        <div class="comm"><?php echo $comment;  ?></div>
        <img src="imgup/<?=$img ?>" alt="" class="img">
      </div>
    </div>
    <?php } }?>
  </center>



  <script>






document.addEventListener('DOMContentLoaded', function() {
    const postForm = document.getElementById('postForm');

    postForm.addEventListener('submit', function(event) {
        const name = document.getElementById('name').value.trim();
        const image = document.getElementById('image').value.trim();
        const comment = document.getElementById('comment').value.trim();

        if (name === '' || image === '' || comment === '') {
            alert('Please fill in all fields');
            event.preventDefault();
        }
    });
});



    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  </script>
</body>
</html>