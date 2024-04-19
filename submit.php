<!-- INSERT INTO `imgsec2` (`id`, `name`, `img`, `comment`, `time`) VALUES ('1', 'rapar', 'ytfyjtfrytrytrytr', 'ghfghfgh', 'current_timestamp(6).000000'); -->















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Form</title>
    <style>
      b{
        display: none;
      }
        body {
    font-family: Arial, sans-serif;
    background-color: black;
    color: white;

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

.comment-section{
  height: 100vh;
}

    </style>
</head>
<body>




<h1>hjdhjofdlhj</h1>


<div class="comment-section">
  <div class="comment">
    <div class="dp">A</div> 
    <div class="name">haresh</div>
    <img class="location" src="loc" alt="">
    <div class="locname">rapar</div>
    <div class="date">12 3 23</div>
    <div class="comm"></div>
    <img src="mmm.jpg" alt="">
  </div>
</div>







<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
  }
  
//   if(isset($_POST['img'])){
//     $img = $_POST['img'];
//   }
  
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
  $dbname = "giovista";
  
   $conn = mysqli_connect($sn,$un,$ps,$dbname);
  
  
    if(!$conn){
     die("something want wrong".mysqli_connect_error());
     }
     else{
      $sql = "INSERT INTO `imgsec2` (`name`,`img`,`comment`) VALUES ('$name','img','$comment')";
      $result = mysqli_query($conn,$sql);
    }


?>

<button id="openModalBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
        <h2>Post Your Information</h2>
        <form id="postForm" action="submit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
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
