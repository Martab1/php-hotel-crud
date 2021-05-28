
<?php 
   require_once __DIR__ . '/partials/scripts/get-room-details.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php  // HEAD
  require_once __DIR__ . '/templates/head.php';
?>

<body>

   <section>
       <h3> ROOM <?php echo $room['room_number']; ?> </h3>
       <li> beds: <?php echo $room['beds']; ?> floor: <?php echo $room['floor']; ?>  </li> 
   </section>
  
</body>
</html>