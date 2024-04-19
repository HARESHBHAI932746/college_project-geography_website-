<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: inndex.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo $username; ?></title>
    <style>
table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .delete-btn {
            background-color: #ff0000;
            color: #ffffff;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }

        .btn{
            margin-top: 10px;
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
        }

        .btnn{
            margin-top: 10px;
    background-color: #4c59af;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
        }
        
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    
    <a href="logout.php" class="btn">Logout</a>
    <a href="index.php" class="btnn">Go To Home page</a>



    
    <?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "giovista";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the comments table
$sql = "SELECT id, name, comment FROM comments";
$result = $conn->query($sql);

?>


<br><br>



<h2>Comments from users</h2> <h3>country:india</h3> 
    <table>
        <tr>
            <th>ID</th>
            <!-- <th>Name</th> -->
            <th>Comment</th>
            <th>Action</th>
        </tr>
        <?php
        // Display fetched data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                // echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["comment"] . "</td>";
                echo "<td><button class='delete-btn' onclick='deleteComment(" . $row["id"] . ")'>Delete</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No comments found</td></tr>";
        }
        ?>
    </table>

    <script>
        function deleteComment(commentId) {
            if (confirm("Are you sure you want to delete this comment?")) {
                window.location.href = "delete_comment.php?id=" + commentId;
            }
        }
    </script>
</body>
</html>
