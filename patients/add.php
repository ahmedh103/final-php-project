<?php

include "../shared/header.php";
include "../shared/nav.php";
include "../general/conn.php";
include "../general/function.php";
if(isset($_POST['send'])){

$name = $_POST['name'];
$statu = $_POST['statu'];
$roomId = $_POST['roomId'];
$image_type = $_FILES['image']['type'];
$image_name =$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
$location = './upload/';
if(move_uploaded_file($image_tmp ,$location.$image_name)){
echo "image true";

}else {

    echo "image false";  
}
$doctorId = $_POST['doctorId'];
$insert  =  "INSERT  INTO  patients VALUES (null,'$name','$statu','$image_name',$roomId, $doctorId )";
  $i =   mysqli_query($conn,$insert);
  testMassege($i,"insert");
 // header("location:/yarab/patients/listdp.php");
}
$name ="";
$statu ="";
$update =false ;
if(isset($_GET['edit'])){

    $update =true ;
  $id =  $_GET['edit'];
$select = "SELECT * FROM patients WHERE id =$id";
$ss = mysqli_query($conn , $select);
$row  = mysqli_fetch_assoc($ss);
$name = $row['name'];
$statu = $row['statu'];
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $statu = $_POST['statu'];
    $roomId = $_POST['roomId'];
    $doctorId = $_POST['doctorId'];
    $update ="UPDATE patients SET name ='$name' , statu ='$statu' , roomId =  $roomId , doctorId =  $doctorId  WHERE id =$id";
$u = mysqli_query($conn ,$update);

header("location:/yarab/patients/listdp.php");

}


}


?>




<body  class="roomddd">

<h1  class="display-5  text-center  "> Add Patient page</h2>
	<div class="container  text-center">
        <div class="row">
            <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="">

                        Patient Name
                    </label>
                    <input value="<?php  echo $name ?>" type="text" name="name" class="form-control text-center">
                </div>
                <div class="form-group text-center">
                        <label for="">

                        Patient status
                    </label>
                    <input value="<?php  echo $statu ?>" type="text" name="statu" class="form-control text-center">
                </div>
                <div class="form-group text-center">
                        <label for="">

                         Image 
                    </label>
                    <input  type="file" name="image" class="form-control text-center">
                </div>
                <div class="form-group  text-center">
                        <label for="">

                      Room Name
                    </label>
                   <?php $select="SELECT * FROM  rooms";
                   $s =mysqli_query($conn,$select);
                   
                   ?>
                    <select name="roomId" id=""  class="form-control text-center">

                    <?php  foreach($s as $data){ ?>
                    <option value="<?php  echo $data['id']; ?>"> <?php  echo $data['name']; ?> </option>
                    <?php  }?>

                    </select>
                </div>
                <div class="form-group  text-center">
                        <label for="">

                      Doctors Name-Date
                    </label>
                   <?php $select="SELECT * FROM  doctors";
                   $s =mysqli_query($conn,$select);
                   
                   ?>
                    <select name="doctorId" id=""  class="form-control text-center">

                    <?php  foreach($s as $data){ ?>
                    <option value="<?php  echo $data['id']; ?>"> <?php  echo $data['name'], $data['date']; ?> </option>
                    <?php  }?>

                    </select>
                </div>
                <?php if($update): ?>
                    <button  class="btn btn-primary"  name="update"> Update</button>
                    <?php else : ?>
                <button class="btn btn-info "  name="send"> Book  </button>
                <?php endif; ?>
                <?php if(isset($_SESSION['admin'])):?>
                <hr>
               
                <a class="btn btn-info"  href="listdp.php">List</a>
                <?php endif; ?>
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-6 scanqrcode ">

    <img src="../images/frame.png" alt="chan"></img>
    
 

        </div>
        <div class="col-md-6">

<figure class="wave">
<img src="../images/dep2.jpg" alt="chan"></img>

</figure>

</div>
<div class="col-md-6">

<figure class="wave">
<img src="../images/dep3.jpg" alt="chan"></img>

</figure>

</div>
    </div>


    </div>  
</body>









</body>








<?php

include "../shared/footer.php";


?>