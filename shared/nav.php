<!-- Start top bar -->
<?php  
ob_start();


session_start();
if(isset($_GET['logout'])){

	session_unset();
	session_destroy();
	header("location:/yarab/admins/login.php");
}



?>

<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
						<div class="mail-b  text-center"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Health Lab!</p>
					</div>
					<div class="right-top text-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="/yarab/images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active text-left" href="/yarab/index.php">Home</a></li>
                        <li><a class="nav-link text-left" href="/yarab/patients/add.php">Make Appointment</a></li>
						<?php if(isset($_SESSION['admin'])):?>
                        <li><a class="nav-link text-left" href="/yarab/doctors/add.php">Doctors</a></li>
						<li><a class="nav-link text-left" href="#appointment">Managers</a></li>
                        <li><a class="nav-link text-left" href="/yarab/department/add.php">Department</a></li>
                        <li><a class="nav-link text-left" href="/yarab/rooms/add.php">Rooms</a></li>
						<li><a class="nav-link text-left" href="/yarab/admins/adda.php">admins</a></li>
						<form class="form-inline my-2 my-lg-0"  action="">
						<li><button name="logout" class="text-left  ml-5 btn btn-info"  >Logout</button></li>
						</form>
						<?php else :?>
						<li><a class="text-left  ml-5 btn btn-info" href="/yarab/admins/login.php">Login</a></li>
						<?php endif;?>
					                 </ul>
								</div>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->