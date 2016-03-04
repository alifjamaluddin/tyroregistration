<?php
/**
 * Created by Anocriny on 18/10/15.
 */
session_start();
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Kuala_Lumpur" );  
define( "DB_HOST", "localhost:8889" );//PUT YOUR LOCALHOST/REMOTE ADDRESS
define( "DB_USERNAME", "root" );//PUT YOUR DB USERNAME
define( "DB_PASSWORD", "root" );//PUT YOUR DB PASSOWRD
define( "DB_NAME", "tyro_db" );//PUT YOUR DATABASE NAME

define( "UPLOAD_PATH", "http://localhost/amfashion/uploads/" );//PUT YOUR DATABASE NAME


function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>