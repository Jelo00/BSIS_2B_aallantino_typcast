<?php 
  include 'connection.php';

  if(isset($_POST['sign-up']))
  {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email_address'];
    $contacts = $_POST['contact_number'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];
  }
    $query = "INSERT INTO `user_id` (firstname, lastname, address, email_address, contact_number, username, password) VALUES ('$fname', '$lname', '$address', '$email', '$contacts', '$uname', '$pass')";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header("Location: register.php");
    } 
?>