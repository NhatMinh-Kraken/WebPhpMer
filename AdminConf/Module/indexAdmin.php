<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-Nguyễn Nhật Minh</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="SHORTCUT ICON" href="Image/logo-web.ico">

    <!-- Plugin css for this page -Product- -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

    <link rel="stylesheet" href="ReponsiveAdmin.css">
    <link rel="stylesheet" href="CssAdmin.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </head>
  <body>

  <?php
    include("Loadding.php");
  ?>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php
        include("Admin-IndexAdmin-Nav-Product.php");
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <?php
            include("Admin-IndexAdmin-Nav-Reposive.php");
          ?>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              if(isset($_GET['action']))
              {
                $tam = $_GET['action'];
                
              }else{
                $tam = '';
                
              }
              if($tam=='Add-Product'){
                include("Add-Product.php");
              }
              elseif($tam =='Fix-Product'){
                include("Fix-Product.php");
              }
              elseif($tam =='Default-Product'){
                include("Default-Product.php");
              }
              elseif($tam =='Fix-Default-Product'){
                include("Fix-Default-Product.php");
              }
              elseif($tam=='Xem-Loai-Xe')
              {
                include("Xem-Loai-Xe.php");
              }
              elseif($tam=='Add-Type-Product-Car')
              {
                include("Add-LoaiXe.php");
              }
              elseif($tam=='Xem-Xe')
              {
                include("Xem-Xe.php");
              }
              elseif($tam=='Add-Type-Accesory')
              {
                include("Add-Type-Accesory.php");
              }
              elseif($tam=='Add-Type-Accesory-Body')
              {
                include("Add-Type-Accesory-Body.php");
              }
              elseif($tam=='Add-Type-Accesory-BaoVe')
              {
                include("Add-Type-Accesory-BaoVe.php");
              }
              elseif($tam=='Add-Type-Accesory-TienNghi')
              {
                include("Add-Type-Accesory-TienNghi.php");
              }
              elseif($tam=='Add-Type-Accesory-TrangTri')
              {
                include("Add-Type-Accesory-TrangTri.php");
              }
              elseif($tam=='Add-Type-Accesory-MamXe')
              {
                include("Add-Type-Accesory-MamXe.php");
              }
              elseif($tam=='Default-Type-Accesory')
              {
                include("Default-Type-Accesory.php");
              }
              else{
                include("Admin-IndexAdmin-Content.php");
              }
            ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <?php
              include("Admin-IndexAdmin-Footer.php");
            ?>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
   
    <script src="assets/js/misc.js"></script>
    
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- Product -->
    
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
    <!-- End-Product -->

    <script src="JsAdmin.js" type="text/javascript"></script> 
    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>  
  </body>
</html>