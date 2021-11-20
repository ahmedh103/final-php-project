<?php

include "../shared/header.php";
include "../shared/nav.php";
include "../general/conn.php";
include "../general/function.php";

if(isset($_POST['send'])){

$name = $_POST['name'];
$depId = $_POST['depId'];
$date = $_POST['date'];
$insert = "INSERT  INTO  doctors VALUES (null,'$name' ,$depId,'$date')";
  $i =   mysqli_query($conn,$insert);
  testMassege($i, "insert");

  header("location:/yarab/doctors/listde.php");
}
$name ="";
$depId ="";
$date="";
$update =false ;
if(isset($_GET['edit'])){

    $update =true ;
  $id =  $_GET['edit'];
$select = "SELECT * FROM doctors WHERE id =$id";
$ss = mysqli_query($conn ,$select);
$row  = mysqli_fetch_assoc($ss);
$name = $row['name'];
$depId = $row['departmentId'];
$date = $row['date'];
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $depId = $_POST['depId'];
    $date =$_POST['date'];
    $update ="UPDATE doctors SET name ='$name' ,departmentId =$depId , date =  '$date' WHERE id =$id";
$u = mysqli_query($conn ,$update);

header("location:/yarab/doctors/listde.php");

}


}


?>




<body  class="roomddd">

<h1  class="display-5  text-center  "> Add Doctor page</h2>
	<div class="container  text-center">
        <div class="row">
            <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">

                        Doctor Name
                    </label>
                    <input value="<?php  echo $name ?>" type="text" name="name" class="form-control text-center">
                </div>
                <div class="form-group text-center">
                        <label for="">

                        Date and Time
                    </label>
                    <input value="<?php  echo $date ?>" type="text" name="date" class="form-control text-center">
                </div>
                <div class="form-group  text-center">
                        <label for="">

                       Department Name
                    </label>
                   <?php $select="SELECT * FROM  department";
                   $s =mysqli_query($conn,$select);
                   
                   ?>
                    <select name="depId" id=""  class="form-control">

                    <?php  foreach($s as $data){ ?>
                    <option value="<?php  echo $data['id']; ?>"> <?php  echo $data['name']; ?> </option>
<?php  }?>

                    </select>
                </div>
                <?php if($update): ?>
                    <button  class="btn btn-primary"  name="update"> Update</button>
                    <?php else : ?>
                <button class="btn btn-info "  name="send"> Send Data  </button>
                <?php endif; ?>
                <?php if($_SESSION['admin'] == 'zein'):?>
                <hr>
                <a class="btn btn-info"  href="listde.php">List</a>
                <?php endif; ?>
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-6">

        <figure class="wave">
    <img src="../images/dep1.jpg" alt="chan"></img>
    
  </figure>

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