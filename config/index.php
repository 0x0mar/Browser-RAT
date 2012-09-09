<?php
// Resources
// Video 
//  - Build your first Tiny PHP MVC Framework
//    i. http://www.youtube.com/watch?v=CGiIVQPaOJQ&feature=related
//  - Creating an MVC from Scratch with PHP - Part 1 
//    i. http://www.youtube.com/watch?v=ZbBf4jfwWko&feature=related

// Display errors in production mode
ini_set('display_errors', 1);

// Check if user is logged in
// Check if user is logged in
session_start();
if(!(isset($_SESSION['myuser'])))
{
  header("Location: ../login/");
  exit;
  if(!($_SESSION['myusers']=="admin"))
  {
    header("Location: ../login/");
    exit;
  }
}


// Let's get started
require '../application/core.php';
?>
