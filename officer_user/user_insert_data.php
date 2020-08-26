<?php
  //Start the session to see if the user is authencticated user.
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){

  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



$quer = "insert into person_id(name, dob, contact, address, gender) values ('$name', '$dob', '$contact', '$address', '$gender')";

if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('user_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" User Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('user_insert_form.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the user please try again !!!");
          }
          myFunction();
       </script>';
  exit();
}
}

?>
