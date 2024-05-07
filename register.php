<?php 
    include_once('includes/Db_Connect.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fudma Jounal of Educational Management</title>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/web_style.css" rel="stylesheet">
  <!-- sweetAleart here -->
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/web_style.css">
       
    </head>
        <!-- main header of the page  -->
        <!-- <header> -->
            
            <?php 
                    include 'includes/about_head.php';
            ?>
        <!-- </header> -->
            <!-- navigation links  -->
       
            <!-- section starts from here  -->
        <section class="calline">
             <!-- style="background-color: rgb(173, 7, 7); padding: 2px; color: white; text-align: center;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif; font-size: 14px;"> -->
                <h2> CALL FOR PAPERS (FUDMAJEM)</h2> <br><h4>Volume 2</h4>
        </section>
        <!-- journal article section     -->
        <article>
             <!-- style="background-color: white; height: 100%; padding:; width: 70%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif; font-size: 14px; border-radius: 6px, 8px, 12px solid black; clear: both;"> -->
             <center> <h1 style="font-size: 20px; color: red;"><b><u>INSTRUCTIONS FOR REGISTRATION</u> </b></h1></center><br>
             <p align="justify"><ol type="circle">
                <li>FUDMAJEM is published in English Language. Manuscripts should include author’s (s’) name, contact address, institutional affiliation, email address and mobile telephone number(s) on the title page. Manuscripts should be in MS Word document using Times New Romans with font size 12 </li>
                <li>Submission of article is to be accompanied with a non-refundable assessment fee of five thousand naira (N5, 000.00) or 50 US Dollar </li>
                <li>Submission due dates for April, and December editions are 5th of March, and November respectively </li> 
                <li>Article(s) that does not follow the FUJEF guidelines will be rejected </li>
                <li>Published articles will be uploaded on the University website: www.fudutsinma.edu.ng </li> 
                <li>Upon acceptance of article, the author will be requested to pay N25,000.00 or 100 US Dollar publication fee </li> 
                
</p></ol> 
         </article>
        <!-- this is aside  -->
        <aside>
           
        <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Create Account</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="post">
                                <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Author Name *</label>
									    <input type="text" class="form-control" id="setting-input-3" name="name" placeholder="" required>
										</div>
								    <div class="mb-3">
									    <label for="setting-input-2" class="form-label" style="float:left;">Gender *</label>
									    <select class="form-control" id="setting-input-3" name="gender" required>
											<option value="" disabled selected>Select Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											</select></div>
										 <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Phone Number *</label> 
									    <input type="number" class="form-control" id="setting-input-3" name="phone" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Email Address*</label>
									    <input type="email" class="form-control" id="setting-input-3" name="email" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Contact Address *</label>
									    <input type="text" class="form-control" id="setting-input-3" name="address" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Institution Affiliation *</label>
									    <input type="text" class="form-control" id="setting-input-3" name="institution" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Choose Password *</label>
									    <input type="password" class="form-control" id="setting-input-3" name="password" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Confirm Password *</label>
									    <input type="text" class="form-control" id="setting-input-3" name="topic" placeholder="" required>
										</div>
										<button type="submit" class="btn app-btn-primary" style="background-color:rgb(173, 7, 7); color: hwb(0 100% 0%)" name="add" >Sign Up</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
       
        </aside>
        <body class="body">
                <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

        </body>
        <!-- footer starts here -->
        <footer class="myfooter">
 <?php 
        include_once('includes/footer.php')
 ?>
        </footer>
        
</html>