<?php 
            include_once('includes/Db_Connect.php');
           
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
  <link href="css/web_style.css" rel="stylesheet">
           
    </head>
        <!-- main header of the page  -->
        <!-- <header> -->
              
            <?php 
                    include 'includes/submit.php';
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
       <center> <h1 style="font-size: 20px; color: red;"><b><u>INSTRUCTIONS TO CONTRIBUTORS</u> </b></h1></center><br>
        <p align="justify"> </p>  
        
        <ol type="circle">
                <li>FUDMAJEM accepts only original articles in the areas of educational management, which should be free from plagiarism in part or entirely </li>
                <li>FUDMAJEM is published in English Language. Manuscripts should include author’s (s’) name, contact address, institutional affiliation, email address and mobile telephone number(s) on the title page. Manuscripts should be in MS Word document using Times New Romans with font size 12 </li>
                <li>Abstract should not exceed 200 words including 4-5 keywords. Authors are to ensure that the article(s) submitted to FUDMAJEM are not being considered for publication elsewhere </li>
                <li>Manuscripts should be typed with double line spacing not exceeding 15 pages on one – side of A-4 size paper including all tables, appendices, notes, acknowledgement and references</li>
                <li>References should be written in American Psychological Association (APA publication style i.e., Sixth Edition) </li> 
                <li>Each article will undergo vigorous blind peer-review by at least two experts in relevant field      </li>
                <li>FUDMAJEM accepts empirical and theoretical articles </li>
                <li>Only the accepted paper (s) will be published </li>
                <li>Submission of article is to be accompanied with a non-refundable assessment fee of five thousand naira (N5, 000.00) or 50 US Dollar </li>
                <li>Submission due dates for April, and December editions are 5th of March, and November respectively </li> 
                <li>Article(s) that does not follow the FUJEF guidelines will be rejected </li>
                <li>Published articles will be uploaded on the University website: www.fudutsinma.edu.ng </li> 
                <li>Upon acceptance of article, the author will be requested to pay N25,000.00 or 100 US Dollar publication fee </li> 
                
        </ol> 
        <p align="justify" style="font-size: 16px;"><b>All correspondences to: Dr. S.O. Olomola (+2348062297046), <br> Professor Umar Sanda Dr. S.E. Nnamdi and Dr. S. Yangaiyya <br> Email: fudmajem@gmail.com</b> </p>  

        </article>
        <!-- this is aside  -->
        <aside>
                
           
        <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Articles Submission Page</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Title *</label>
									    <input type="text" class="form-control" id="setting-input-3" name="title" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Upload File *</label>
									    <input type="file" class="form-control" id="setting-input-3" name="pdfile" placeholder="" required>
										</div>
								    <div class="mb-3">
									    <label for="setting-input-2" class="form-label" style="float:left;">Articles Area *</label>
									    <select class="form-control" id="setting-input-3" name="area" required>
											<option value="" disabled selected>Select Area</option>
											<option value="Educational Administration/Management">Educational Administration/Management </option>
                                            <option value="Educational planning">Educational planning</option>
                                            <option value="Business education">Business education</option>
                                            <option value="Administration of vocational Education ">Administration of vocational Education </option>
                                            <option value="Administration of Distance Education">Administration of Distance Education</option> 
                                            <option value="Administration of Adult education">Administration of Adult education</option>
                                            <option value="Administration Normadic Education">Administration Normadic Education</option>
                                            <option value="Administration Universal Basic Education">Administration Universal Basic Education</option>
                                            <option value="Administration of private schools">Administration of private schools </option>
                                            <option value="ICT in Education">ICT in Education</option> 
                                            <option value="Policy formulation and Implementation">Policy formulation and Implementation </option>
                                            <option value="Pre-primary Education">Pre-primary Education</option> 
                                            <option value="Primary education">Primary education </option> 
                                            <option value="Secondary education">Secondary education </option>
                                            <option value="Tertiary Education">Tertiary Education </option>
											</select></div>
										 <div class="mb-3"> 
									    <label for="setting-input-3" class="form-label" style="float:left;">Published Date</label> 
									    <input type="date" class="form-control" id="setting-input-3" name="pubdate" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <label for="setting-input-3" class="form-label" style="float:left;">Approved Date</label>
									    <input type="date" class="form-control" id="setting-input-3" name="appdate" placeholder="" required>
										</div>
                                        <div class="mb-3">
									    <!-- <label for="setting-input-3" class="form-label" style="float:left;">Contact Address *</label> -->
									    <input type="number" class="form-control" id="setting-input-3" name="authorId" value="" hidden>
										</div>
                                        <div class="mb-3">
									    <!-- <label for="setting-input-3" class="form-label" style="float:left;">Institution Affiliation *</label> -->
									    <input type="text" class="form-control" id="setting-input-3" name="authorname" value="" hidden>
										</div>
                                        
										<button type="submit" class="btn app-btn-primary" name="submit" style="background-color:rgb(173, 7, 7); color: hwb(0 100% 0%)">Submit Now</button>
                                        <?php
$err = "";

if(isset($_POST['submit']) && isset($_FILES['pdfile'])){
    $title=$_POST['title'];
	$pdfile_name = $_FILES['pdfile']['name'];
	$pdfile_size = $_FILES['pdfile']['size'];
	$pdfile_type= $_FILES['pdfile']['type'];
	$pdfile_tmp = $_FILES ['pdfile']['tmp_name'];
	$pdfile_error = $_FILES['pdfile']['error'];

	//VALIDATION SECTION
	if($pdfile_size>2000000){
		$em = "You Can upload file less than 2MB";
		header("Location: upload.php");
	}
	$file_ext = pathinfo($pdfile_name, PATHINFO_EXTENSION);
	$file_ext_lc = strtolower($file_ext);

	$allowed_exts = array("doc", "docx", "pdf");

	// echo $file_ext;

	if(!in_array($file_ext_lc, $allowed_exts)){
		$err = "File type not allowed.";
	}else{
		if($pdfile_error===0){
		$upload_path = "uploaded_articles/";
		$new_pdfile_name = uniqid("Fudmajem",true).".".$file_ext_lc;
		move_uploaded_file($pdfile_tmp, $upload_path.$new_pdfile_name);
        $category=$_POST['area'];
        $pubdate=$_POST['pubdate'];
        $appdate=$_POST['appdate'];

		$sql = "INSERT INTO submission  ( title, mainfile, category, published_date, approved_date) VALUES('$title','$new_pdfile_name', '$category', '$pubdate', '$appdate')";
		$result = mysqli_query($con, $sql);
		if($result){
					//$em = "File Uploaded Successful...";
                    echo "<script type='text/javascript'>
					swal({
					title: 'Fudmajem Publication',
					text: 'Your articles have been submitted successefully!!',
					icon: 'success',
					button: 'Ok',
					timer:70000
				});
				window.location.href = 'index.php';
		</script>"; 
				}else{
					$em = "Uknown Error Occured.";
				}
	}
	}

}

?>
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
