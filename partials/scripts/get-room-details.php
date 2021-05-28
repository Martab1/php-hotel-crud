
<?php
/**
 * GET ROOM DETAILS BY ID
 */

require_once __DIR__ . '/database.php';

// GET ROOM ID

$id= empty($_GET['id']) ? false : $_GET['id'];

if ($id){
      
    $stmt = $conn->prepare("SELECT `beds`, `floor`, `room_number`  FROM `stanze` WHERE `id` = ? ");
    $stmt->bind_param('s', $id);

    // execute
     $stmt->execute();

    // get results
    $result = $stmt->get_result();

    if ($result &&  $result->num_rows > 0){
        $room =  $result->fetch_assoc();
       // var_dump($room);
    }
  
}

// close DB connection
$conn->close();

?>