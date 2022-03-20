<?php
	  session_start();
    if(isset($_POST['book_room'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"imperiahotel");
        if($_POST['room_type'] == 'Single Non-AC'){
            $query = "update single_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile_no = '$_POST[holder_mobile_no]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
        }

        
        if($_POST['room_type'] == 'Single AC'){
            $query = "update single_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile_no = '$_POST[holder_mobile_no]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
        }


        if($_POST['room_type'] == 'Double Non-AC'){
            $query = "update double_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile_no = '$_POST[holder_mobile_no]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
        }


        if($_POST['room_type'] == 'Double AC'){
            $query = "update double_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile_no = '$_POST[holder_mobile_no]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
        }
        $query_run = mysqli_query($connection, $query);
        if($_SESSION['name'] = 'user'){
            header("location:redirect_user.php");   
        }
       
        
    }


?>   

















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
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

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
						<li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="photogallery.html">Photo Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="rooms.html">Rooms</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
						
					</ul>
				</div>
			</div>
		</nav>
	</header><br><br><br><br>
	<!-- End header -->





  <br><br><br><br>



   <!-- Admin Login Page -->



	 <div class="row">
       <div class="col-md-12">
       	   <center><h1><b>Fill the given details</b></h1></center>
       </div>
   </div><br><br>
	 <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
       	  <form action="" method="post">
       	  	  <div class="form-group">
		    	        <label>Room No:</label>
		    	        <input type="text" class="form-control" name="room_no" value="<?php echo $_GET['rn'];?>" required="">
		  	      </div>
			        <div class="form-group">
		    	        <label>Room Type:</label>
		    	        <input type="text" class="form-control" name="room_type" value="<?php if($_GET['rt']=='a'){echo 'Single Non-AC';}if($_GET['rt']=='b'){echo 'Single AC';}if($_GET['rt']=='c'){echo 'Double Non-AC';}if($_GET['rt']== 'd'){echo 'Double AC';}?>" required="">
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Holder Name:</label>
		    	        <input type="text" class="form-control" name="holder_name" required="">
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Holder Id:</label>
		    	        <input type="text" class="form-control" name="holder_id" required="">
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Holder Mobile No:</label>
		    	        <input type="text" class="form-control" name="holder_mobile_no" required="">
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Holder Address:</label>
		    	        <textarea rows="3" cols="40" class="form-control" name="holder_address" required=""></textarea>
		  	      </div>
		  	      <div class="form-group">
		    	        <label>No of child:</label>
		    	        <select class="form-control" name="child_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
		  	      </div>
		  	      <div class="form-group">
		    	        <label>No of Adult:</label>
		    	        <select class="form-control" name="adult_no">
                    <option>-Select-</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Check In Date:</label>
		    	        <input type="text" class="form-control" name="in_date" required="">
		  	      </div>
		  	      <div class="form-group">
		    	        <label>Check Out Date:</label>
		    	        <input type="text" class="form-control" name="out_date" required="">
		  	      </div>
		  	      <button type="submit" class="btn btn-warning" name="book_room">Book Now</button>
		      </form>
        
       </div>
       <div class="col-md-2"></div> 	
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