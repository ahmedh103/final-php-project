<?php

include "../shared/header.php";
include "../shared/nav.php";
include "../general/conn.php";
include "../general/function.php";

if($_SESSION['admin']== 'zein'){

if(isset($_POST['send'])){

$name = $_POST['name'];
$password = $_POST['password'];

$insert = "INSERT  INTO  `admin` VALUES (null,'$name','$password' )";
  $i =   mysqli_query($conn,$insert);
  testMassege($i, "insert");

  //header("location:/yarab/doctors/listde.php");
}





?>




<body  class="roomddd">

<h1  class="display-5  text-center  "> Add Admin page</h2>
	<div class="container col-md-6 mt-5  text-center">
     
          
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">

                        Admin Name
                    </label>
                    <input  type="text" name="name" class="form-control text-center">
                </div>
                
                <div class="form-group text-center">
                        <label for="">

                        Admin password
                    </label>
                    <input  type="text" name="password" class="form-control text-center">
                </div>
               
                <button name="send"  class="btn btn-info">Send admin </button>
                    </form>

                    
            </div>
        </div>

        
        

   


    </div>  
</body>









</body>








<?php

include "../shared/footer.php";}else{
    echo "<div class='container col-md-6  text-center mt-5
    '> <img src='../images/noAuth.jpg' class='w-100'> <a href='/yarab/index.php' class='btn btn-info '>Back</a></div>";
}


?>