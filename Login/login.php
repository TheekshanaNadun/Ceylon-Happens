<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Username = $_POST['first_name'];
    $Email = $_POST['email'];
    $City=$_POST['city'];
    $Password = $_POST['password'];
}

// connecting to database

$servername = "localhost";
$username = "root";
$password = "";
$database = "ceylon_happens";

// creating connection

$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successfull

if (!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    // submitting to database
    
    $sql = "INSERT INTO user (name,email,city,password) VALUES ('$Username', '$Email','$City', '$Password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Sign in successfull...you may now login.');
        window.location.href = 'right.html';
        </script>";
    }
    else{
        echo "<script>alert('Sign in Failed...Please try again.!!');
        window.location.href = 'right.html';
        </script>";

    }
}
?>