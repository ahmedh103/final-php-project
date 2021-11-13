<?php
function testMassege($condtion,$mess){

if($condtion){
echo "<div class='alert alert-info w-50 mx-auto text-center'>
<h5> $mess  is true</h5>
</div>";
}else{
    echo "<div class='alert alert-info w-50 mx-auto text-center'>
    <h5> $mess  is false</h5>
    </div>";

}
}
function auth(){

    if($_SESSION['admin']){


    }else{
        header("location:/yarab/admins/login.php");
    }
}

auth();

?>