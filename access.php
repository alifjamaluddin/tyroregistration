<?php 
require( "config.php" );
$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
$fullname = mysqli_real_escape_string($connection, $_POST['fullname']);

$key = mysqli_real_escape_string($connection, $_POST['key']);

$SELECT_QUERY = "SELECT * FROM accesskey WHERE token = $key";
$SELECT_RESULT = $connection->query($SELECT_QUERY);
if($SELECT_RESULT){
	$SQL_STATEMENT = "INSERT INTO registration (fullname) VALUES ('$fullname')";
	$RESULT = $connection->query($SQL_STATEMENT);
	if($RESULT){
   		echo "Download File";
		echo "<br/>";
	}
}else{
	echo "Access key is not valid";
}


?>