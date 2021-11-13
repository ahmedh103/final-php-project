<?php   include '../shared/header.php';
include '../shared/nav.php';
include '../general/conn.php';

include '../general/function.php';
$select= "SELECT * FROM  `rooms`";
$s = mysqli_query($conn,$select);



?>
	
        
   
	<div class="container col-md-6  text-center">
       
        <div class="card">
            <div class="card-body">
               <table class="table table-light  zigzag">
                   <tr>
                       <th>ID</th>
                       <th>Room</th>
                   </tr>
                   <tr>
                       <?php foreach($s as $data){

                        ?>
                       <th><?php echo $data['id'];?></th>
                       <th><?php echo $data['name'];?></th>
                       
                   </tr>

                   <?php } ?>
               </table>
            </div>
            

        


                <?php


include '../shared/footer.php'; ?>