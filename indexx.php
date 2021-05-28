
<?php 
   require_once __DIR__ . '/partials/scripts/get-rooms.php'
 ?>

<!DOCTYPE html>
<html lang="en">
<?php  // HEAD
  require_once __DIR__ . '/templates/head.php';
?>

<body>

    <section>
         <h1> ROOMS</h1>
        <ul>
            <?php // loop records DB
            if(!empty($rooms)){
                foreach($rooms as $room){ ?>
                    <li> id room: <?php echo $room['id'] ?>  
                         number room: <?php echo $room['room_number'] ?>
                         <a href="./details-room.php?id=<?php echo $room['id'] ?>">view the details of this room</a> 
                     </li>
                <?php  } ?>          
            <?php } ?> 
            
        </ul>
    </section>


    
</body>
</html>