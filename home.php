<?php session_start();

include 'control/cone.php';
if(!isset($_SESSION['username'])){
?>
<script>
    // window.location='login.php';
</script>
<style>
.edtt {
margin-bottom:150px!important;}
</style>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "setting/head.php";?>


<body class="fix-header fix-sidebar card-no-border logo-center">
<script>
    function hanyaAngka(e, decimal) {
                var key;
                var keychar;
                if (window.event) {
                    key = window.event.keyCode;
                } else if (e) {
                    key = e.which;
                } else return true;
                keychar = String.fromCharCode(key);
                if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27)|| (key==46) ) {
                    return true;
                } 
                else if ((("0123456789").indexOf(keychar) > -1)) {
                    return true;
                } else if (decimal && (keychar == ".")) {
                    return true;
                } else return false;
            }

</script>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="login.php">
                    <h3 style="color:#fff">SISTEM PAKAR </h3>
                    <h3 style="color:#fff"> DIAGNOSA DINI GEJALA AUTISME PADA ANAK</h3>
                    </a>
                </div>
                  <!-- //DIAGNOSA DINI GEJALA AUTISME PADA ANAK -->
             <div class="navbar-collapse">
                   <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        
                     
                    </ul>
                </div>
            </nav>
        </header>
<?php include 'setting/navigasi.php';?>


        <div class="page-wrapper">
        <?php include 'setting/rule.php';?>

            <footer class="footer"> © <?=date('Y')?> |  Izin Make Om</footer>
            
        </div>
      
    </div>
   
    
</body>

</html>