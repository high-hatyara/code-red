<?php

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['login'])) {
    $submit = $_POST['login'];
}
$error="";
$success="";
if(isset($_POST['login'])) {
  if($username=="admin"){
    if($password=="password"){
      $error="";
      $success="Welcome Admin";
    }
    else{
      $error="Invalid password";
      $success="";
    }
  } 
  else{
    $error="Invalid username";
      $success="";
  }
}
?>