 <?php
	// Menghubungkan Koneksi dengan server MySQL 
	$mysql_hostname = "localhost";  //alamat server
	$mysql_user = "root";       	//username untuk koneksi ke database
	$mysql_password = "";   //password koneksi ke database
	$mysql_database = "db_sigweb";   //nama database yang akan diakses			

	//using mysqli
	$mysqli = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	}
?>