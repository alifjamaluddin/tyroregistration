<?php 
require( "config.php" );
$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
echo "1";
$fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
echo "2";

$key = mysqli_real_escape_string($connection, $_POST['key']);
echo "3";

$SELECT_QUERY = "SELECT * FROM accesskey WHERE token = $key";
echo "4";
$SELECT_RESULT = $connection->query($SELECT_QUERY);
echo "5";
if($SELECT_RESULT){
	echo "yes";
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