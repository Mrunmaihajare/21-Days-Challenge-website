<?php
  // host, username, password, dbname 
  $con = mysqli_connect('localhost','root','','login');
  // $con = mysqli_connect('localhost','system','samarth','21Ddb');
  //  if($con){
  //     echo "Connection successful";
  //  }else{
  //   echo "no connection";
  // }
 
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "SELECT * FROM logindata WHERE email='$email' AND password='$password'");
  $query = mysqli_query($con, "SELECT * FROM logindata WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($query) > 0) {
    echo "Exists";
    header('location: index.html');
  }
  else{
    echo "Naaah";
    header('location: login.php');
  }


?> 