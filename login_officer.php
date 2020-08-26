

<?php
error_reporting(E_ALL ^ E_WARNING);

if ($_POST['submit'] == 'Login'){

	//Collect POST values
	$user_id = $_POST['user_name'];
	$password = $_POST['password'];

	if($user_id && $password){

		// Connecting to the mysql
		$connection = new mysqli("localhost","$user_id", "$password", "criminal");
		//Check link to the mysql server
		if($connection->error) {
			die('Failed to connect to server: ' . $connection->error);
		}

		//Select database
		//$db = mysql_select_db('test');

		//if(!$db) {
		//	die("Unable to select database");
		//}
	//Create query (if you have a Logins table the you can select login id and password from there)
	//$qry='SELECT * FROM Logins WHERE login_id = "ABC" AND password = "12345"';
	//Execute query
	//$result=mysql_query($qry);
	//Check whether the query was successful or not

	$quer = "SELECT * FROM admin_login WHERE user_id = '$user_id' and password = '$password' ";

	//if($connection->query($quer) == TRUE){
		//$count = mysql_num_rows($result);
		$count = 1;
	/*}
	else{
		//Login failed
		include('index_officer.php');
		echo'<script>
						function myFunction() {
						    alert("Incorrect Username or Password !!!");
						}
						myFunction();
				 </script>';
		exit();
	}*/

	//if query was successful it should fetch 1 matching record from the table.

	if( $count == 1){
  	//Login successful set session variables and redirect to main page.
  	session_start();
  	$_SESSION['IS_AUTHENTICATED'] = 1;
  	$_SESSION['USER_ID'] = $user_id;
  	header('location:officer_menu.php');
	}
	else{
  	//Login failed
  	include('index_officer.php');
  	echo '';
  	exit();
	}
}
  else{
  include('index_officer.php');
	echo'<script>
					function myFunction() {
							alert("Username or Password missing !!!");
					}
					myFunction();
			 </script>';
  echo '<center>Username or Password missing!!</center>';
  exit();
  }
}

else{
  header("location: index_officer.php");
  exit();
}
?>
