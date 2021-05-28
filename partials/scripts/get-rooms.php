
<?php
 /**
  * GET ALL ROOMS
  */

require_once __DIR__ . '/database.php';

// ottenere stanze
$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);  

// al check creo array stanze con loop
if($result && $result->num_rows > 0){ 
    $rooms= [];

    
    while($row = $result->fetch_assoc()){
        // popolo array rooms
        $rooms[] = $row;

    }
    //var_dump( $rooms);
} else {
    echo 'query error';
}



// close DB connection array
$conn->close();

?>