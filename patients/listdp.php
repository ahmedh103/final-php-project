<?php   include '../shared/header.php';
include '../shared/nav.php';
include '../general/conn.php';

include '../general/function.php';
$select= "SELECT  * FROM  patients ";
$s = mysqli_query($conn,$select);

if(isset($_GET['delete'])){
$id =$_GET['delete'];
$delete = "DELETE FROM patients WHERE id =$id ";
$d = mysqli_query($conn,$delete);
testMassege($d ,"delete");
header("location:/yarab/patients/listdp.php");
}


?>
	
    <h1  class="display-5  text-center  "> Add Doctor page</h2>
   
	<div class="container col-md-6  text-center">
       
        <div class="card">
            <div class="card-body">
               <table class="table table-light  zigzag">
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>statu</th>
                       <th>Doctor Id</th>
                      
                       <th>Action</th>
              
                   </tr>
                   <tr>
                       <?php foreach($s as $data){

                        ?>
                       <th><?php echo $data['id'];?></th>
                       <th><?php echo $data['name'];?></th>
                       <th><?php echo $data['statu'];?></th>
                       <th><?php  echo $data['doctorId']  ?></th>
                       <th><a  onclick ="return confirm('are you sure !!')" href="/yarab/patients/listdP.php?delete=<?php echo $data['id']; ?>"  class="btn btn-danger">Delete  </a></th>
                       <th><a   href="/yarab/patients/add.php?edit=<?php echo $data['id']; ?>"  class="btn btn-info">Edit </a></th>
                   </tr>

                   <?php } ?>
               </table>
            </div>
            

        


                <?php


include '../shared/footer.php'; ?>