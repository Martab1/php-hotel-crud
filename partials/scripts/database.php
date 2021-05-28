<?php 

/**
 * DATABASE CONNECTION
 */


 // info connection db
 $host = 'localhost';
 $username = 'root';
 $password = 'root';
 $db_name = 'hotel';


 // open connection
 $conn = new mysqli($host, $username, $password, $db_name );
   //var_dump($conn);

 // check connection 
 if( $conn && $conn->connect_error ){
     die( "No connection: $conn->connect_error  ");
 }
?>