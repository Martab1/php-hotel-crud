
<?php 
   require_once __DIR__ . '/partials/scripts/get-room-details.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php  // HEAD
  require_once __DIR__ . '/templates/head.php';
?>

<body>
    
   <!-- room details --> 
   <section class="container mt-5 mx-auto text-center " style="width: 200px;"> 
       <h2 class="fw-light my-5">  ROOM <?php echo $room['room_number']; ?> </h2>
       <ul class="list-unstyled">
          <li>Beds: <?php echo $room['beds']; ?> </li>
          <li>Floor n.  <?php echo $room['floor']; ?> </li> 
       </ul>
   </section>

   <?php  // IMAGES
      include_once __DIR__ . '/templates/images.php';
   ?>

    <!-- back all rooms-->
    <div class="text-center my-5">
        <a class= " text-decoration-none" style="color: #53a7d0;"  href="/php-hotel-crud/indexx.php"> 
             <i class="fas fa-arrow-left"></i> Back to all rooms 
        </a>
    </div>
   
    
</body>
</html>