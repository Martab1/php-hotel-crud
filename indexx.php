
<?php 
   require_once __DIR__ . '/partials/scripts/get-rooms.php'
 ?>

<!DOCTYPE html>
<html lang="en">
<?php  // HEAD
  require_once __DIR__ . '/templates/head.php';
?>

<body class="">

    <section class="text-uppercase">
         <h1 class="fw-light my-5 mx-5"> HOTEL ROOMS</h1>
    

        <table class="table table-hover container my-6 shadow-sm p-3 mb-5 rounded text-secondary">
        <thead>
          <tr>
            <th> id</th>
            <th> number</th>
            <th> details</th>
          </tr>
        </thead>
            <tbody>
                <?php // loop records DB
                if(!empty($rooms)){
                    foreach($rooms as $room){ ?> 
                        <tr>
                            <td> <?php echo $room['id'] ?></td>
                            <td> <?php echo $room['room_number'] ?> </td>
                            <td> <a class="text-decoration-none" style="color: #53a7d0;" href="./details-room.php?id=<?php echo $room['id'] ?>">view more details </a> </td>
                        <?php  } ?>
                        </tr>             
                <?php } else echo 'no rooms found' ?> 
                        
                       
            </tbody>
       </table>
 
     
    </section>


    
</body>
</html>