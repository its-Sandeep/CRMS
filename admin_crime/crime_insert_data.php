<?php
  //Start the session to see if the user is authencticated user.
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
  //include the menu
  //require('menu.php');
  $crime_type = $_POST['crime_type'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



$quer = "insert into crime(crime_type) values ('$crime_type')";

if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('crime_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" Crime Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('crime_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the crime please try again !!!");
          }
          myFunction();
       </script>';
  exit();
}
}

?>
