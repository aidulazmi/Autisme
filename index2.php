<?php session_start();
//$_SESSION['user']='Admin';
//$_SESSION['level']='Administrator';
include 'control/cone.php';
if(!isset($_SESSION['username'])){
?>
<script>
     window.location='home.php';
</script>
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
                    <a class="navbar-brand" href="index1.php">
                           <h3 style="color:#fff">SISTEM PAKAR</h3>
                    </a>
                </div>
             <div class="navbar-collapse">
                   <ul class="navbar-nav mr-auto mt-md-0">
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="asset/kita/assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="asset/kita/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?=$_SESSION['username']?></h4>
                                                <p class="text-muted"><?=$_SESSION['hakakses']?></p></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    
                                    <li><a href="control/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<?php include 'setting/navigasi2.php';?>


        <div class="page-wrapper">
        <?php include 'setting/rule2.php';?>

            </div>
            
            <footer class="footer"> © <?=date('Y')?> |  :D</footer>
            
        </div>
      
    </div>
   
    
</body>

</html>