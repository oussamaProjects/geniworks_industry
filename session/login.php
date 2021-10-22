<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['accesu'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $cdb= new mysqli("db5000057014.hosting-data.io", "dbu157898", "PJNQKt6Zt3+", "dbs51829");
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT username, password FROM login WHERE username=? AND password=? LIMIT 1"; 
    // To protect MySQL injection for Security purpose 
    $stmt = $cdb->prepare($query); 
    $stmt->bind_param("ss", $username, $password); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session 
    header("location: ../dashboard.php"); // Redirecting To Profile Page 
  } 
  mysqli_close($cdb); // Closing Connection 
} 
?>