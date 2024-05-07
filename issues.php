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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    include 'includes/issues.php';
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
        <center> <h1 style="font-size: 20px;"><b>NEWLY SUBMITTED ARTICLES</b></h1></center><br>
        <p align="justify">Below is the sample of the newly submited articles </p>
            <div>
    <?php  
           $plimited = 03;

           if(isset($_GET["page"]))
           {
                $page=$_GET["page"];

           }
           else{
                $page=1;
           }
           $show=($page-1) *01;

           $pg="SELECT * FROM submission limit $show, $plimited";
           $pgqr=mysqli_query($con, $pg);

            //$pgresult=mysqli_fetch_assoc($pgqr);
            
            ?>

 <!-- <table align="center" border=""> -->
    <?php 
     while($rows=mysqli_fetch_assoc($pgqr)): ?>

    <!-- <tr> -->
        <!-- <td> -->
            <div><p align="left" style="color: skyblue; font-size: 14px;"> <?php echo $rows['title'];?><br><b> Author: Dr. Publisher</b>  Published Date: <?php echo $rows['approved_date']; ?>
        <br> <button class="btn" width="100%"><i class="fa fa-file"></i><a href="uploaded_articles/<?php echo $rows['mainfile']; ?>" target="_blank">Open Pdf</a></button>
        <button class="btn"><i class="fa fa-download"></i><a href="uploaded_articles/<?php echo $rows['mainfile']; ?>" download="uploaded_articles/<?php echo $rows['mainfile']; ?>"> Download</a></button> 
    <!-- </td> -->
    <!-- </tr> -->
       <?php endwhile?>
<!-- </table> -->
<div>
<ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" tabindex="-1">Preveous </a></li>
        <?php
$sel="select * FROM submission";
$qry =mysqli_query($con, $sel);
$rowcount=mysqli_num_rows($qry);
$total= ceil($rowcount/$plimited);
      for($rs=1; $rs<=$total; $rs++):
      
        //echo "<a href='issues.php?page=".$rs."'>".$rs."</a>";
        endfor?>
        <li class="page-item">
            <a class="page-link" href="issues.php?page=<?php echo $rs; ?> "> <?php echo $rs ?> </a></li>
        <li class="page-item">
            <a class="page-link active" href="#" tabindex="+1"> Next</a></li>
        </ul>
      </div>
      <?php
?>
</div>

        </article>
        <!-- this is aside  -->
        <aside>
             <!-- style="background-color: white;  width: 30%; height: 100%; float: right; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', Verdana, sans-serif; font-size: 14px; clear:;"> -->
       <b><h1 align="center">Disclaimer:</h1></b> 
        <p align="justify">
          <div>Every Author is solely responsible for the views and styles expressed in the articles published in this Journal. The views are not necessarily shared by reviewers,
           the editors, Editorial Advisory Board, the Department of Educational Administration and Planning and Federal University Dutsin-Ma, Katsina State.</div> </p>  
        <!-- <img src="includes/img/flyer.jpg" width="100%" height="100%" alt="image">-->
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