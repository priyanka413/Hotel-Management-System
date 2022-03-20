<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Imperia Hotel</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="../photogallery.html">Photo Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="../about.html">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="../rooms.html">Rooms</a></li>
						<li class="nav-item"><a class="nav-link" href="../contact.html">Contact Us</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header><br><br><br><br>
	<!-- End header -->





  <br><br><br><br>



   <!-- Admin Login Page -->



	 <div class="row">
       <div class="col-md-2"></div>
       <div class="col-md-8">
           <form action="" method="post">
               <a href="rooms.php" class="btn btn-primary">Book Room</a>
               <a href="rooms.php" class="btn btn-success">Check Room Status</a>
               <a href="admin_dashboard.php" class="btn btn-warning">View Users Detail</a>
               <a href="" class="btn btn-info">Recently Check Outs</a>
               <a href="logout.php" class="btn btn-danger">Logout</a>
            </form>
        </div>
        <div class="col-md-2"></div>
   </div>
   <br><br><br><br><br><br>
   <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In User's Details</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr> 
                    </thead>
                    <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"imperiahotel");
                    $query = "select * from single_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile_no'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?> 

                     




                    <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"imperiahotel");
                    $query = "select * from double_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile_no'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?> 



                    <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"imperiahotel");
                    $query = "select * from double_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile_no'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?> 
                     




                    <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"imperiahotel");
                    $query = "select * from single_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile_no'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?> 




                </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
	














	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							9168665005
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							@theimperiahotel.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Ayodhya Nagar, Old MIDC, Jalgaon,
              Maharashtra 425003
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>The Imperia Hotel is renowned for its unstinting hospitality services and is ranked amongst the best luxury heritage hotels in Jalgaon.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday :</span>9.00AM - 10.00PM</p>
					<p><span class="text-color">Tue-Wed :</span>9.00AM - 10.00PM</p>
					<p><span class="text-color">Thu-Fri :</span>9.00AM - 10.00PM</p>
					<p><span class="text-color">Sat-Sun :</span>9.00AM - 10.00PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead"><a href="#">	9168665005</a></p>
					<p><a href="#"> @theimperiahotel.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Stay In Touch</h3>
					<div class="subscribe_form">
						
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.instagram.com/the.imperia_/?utm_medium=copy_link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2022 Imperia Hotel</a> Design By : 
					Priyanka Sonar</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>