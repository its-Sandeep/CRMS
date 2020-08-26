<?php
  //Start the session to see if the user is authencticated user.
session_start();

  //Check if the session variable for user authentication is set, if not redirect to login page.
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){

  $case_id = $_POST['case_id'];
  $origin_state = $_POST['origin_state'];
  $crime_id = $_POST['crime_id'];
  $p_id = $_POST['p_id'];

  // inserting into the databse

  $connection = new mysqli("localhost","root", "", "criminal");

  //Check link to the mysql server
  if($connection->error) {
    die('Failed to connect to server: ' . $connection->error);
  }

  //Select database
  //$db = mysql_select_db('test');



  $quer = " insert into criminal(case_id,origin_state,crime_id,p_id)
            VALUES
            ('$case_id','$origin_state','$crime_id','$p_id');
            ";



if($connection->query($quer) == TRUE){
  //$count = mysql_num_rows($result);
  include('criminal_add.php');
  echo'<script>
          function myFunction() {
              alert(" Criminal Inserted Succesfully !!!");
          }
          myFunction();
       </script>';
  exit();
}
else {
  include('criminal_add.php');
  echo'<script>
          function myFunction() {
              alert(" !!! Not able to insert the Criminal please try again !!!");
          }
          myFunction();
       </script>';
       echo "connection->error";

}
}

?>
