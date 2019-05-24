<?php
header('Access-Control-Allow-Origin: *');

$fullname = $_POST['nama'];
$email = $_POST['email'];
$phonenumber = $_POST['nomorTelepon'];
$password = $_POST['pass'];

if (!empty($fullname)) {
	if (!empty($email)) {
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "Samid123";
		$dbname = "komkom";

		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error()) {
  			die('Connect Error ('. mysqli_connect_errno() .') '
    . 		mysqli_connect_error());
		} else {
  			$sql = "INSERT INTO androidKomKom (nama, email, nomorTelepon, password) VALUES ('$fullname','$email','$phonenumber','$password')";
  			if ($conn->query($sql)) {
   				echo "success oke";
  			} else {
    			echo "Error: ". $sql ."
				". $conn->error;
  			}
  			$conn->close();
		}
	} else {
  		echo "Error 1";
  		die();
	}
} else {
	echo "Error 2";
	die();
}
?>