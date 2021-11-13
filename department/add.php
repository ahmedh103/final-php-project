<?php

include "../shared/header.php";
include "../shared/nav.php";
include "../general/conn.php";
include "../general/function.php";
if(isset($_POST['send'])){

$name = $_POST['name'];
$insert = "INSERT  INTO   department VALUES (null,'$name')";
  $i =   mysqli_query($conn,$insert);
  testMassege($i, "insert");

  header("location:");
}
 


?>




<body  class="roomddd">

<h1  class="display-5  text-center  "> Add Department page</h2>
	<div class="container  text-center">
        <div class="row">
            <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">

                    Departmnt Name
                    </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-info "  name="send"> Send Data  </button>
                <hr>
                <a class="btn btn-info"  href="listd.php">List</a>
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