<?php

include "../shared/header.php";
include "../shared/nav.php";
include "../general/conn.php";
//include "../general/function.php";


if(isset($_POST['login'])){

$name = $_POST['name'];
$password = $_POST['password'];
$select ="SELECT * FROM  admin WHERE name ='$name' and password ='$password' ";
$s = mysqli_query($conn,$select);
$numRow =mysqli_num_rows($s);
if($numRow>0){
$_SESSION['admin']= "$name";
    header('location:/yarab/index.php');
}else{

    echo "Not Admin";
}
 
}
 print_r($_SESSION);


?>




<body  class="roomddd">

<h1  class="display-5  text-center  "> Login page</h2>
	<div class="container col-md-6 text-center">
        
          
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">
                        UserName   
                 </label>
                    <input  type="text" name="name" class="form-control text-center ">
                </div>
                <div class="form-group text-center">
                        <label for="">
                        Password   
                 </label>
                    <input  type="text" name="password" class="form-control text-center ">
                </div>
                <button class="btn btn-info "  name="login"> Login  </button>
              
            
                </form>
            </div>
           
        </div>

    

  


    </div>  
</body>









</body>








<?php

include "../shared/footer.php";


?>