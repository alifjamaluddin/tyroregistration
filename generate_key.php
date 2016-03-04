<?php 
require( "config.php" );
$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

// $fullname = $_POST['fullname'];
// $key = $_POST['key'];
// echo $fullname.$key;
for ($x =0; $x<30; $x++){
$key = rand_char(8);
$SQL_STATEMENT = "INSERT INTO accesskey (token) VALUES ('$key')";
$RESULT = $connection->query($SQL_STATEMENT);
if($RESULT){
   echo $key;
	echo "<br/>";
  }


}
?>