<?php
	function getdb(){
		$servername ="localhost";
		$username = "root";
		$password = " ";
		$db = "utilitas";
	try {
		$conn = mysqli_connect($servername, $username, $password, $db);
	}
	catch(exception $e)
	{
		echo "Koneksi gagal" . $e->getMessage();
	}
	return $conn;
}	
?>