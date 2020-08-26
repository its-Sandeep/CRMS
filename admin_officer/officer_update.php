<?php
  //Start the session to see if the user is authencticated user.
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  //include the menu
  //require('menu.php');
  require('officer_update_form.php');
  exit();
}
else{
  header('location: ../index_home.php');
  exit();
}
?>
