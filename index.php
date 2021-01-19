

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
       <title> SISTEM PAKAR Autisme </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="asset/login/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="asset/login/css/charisma-app.css" rel="stylesheet">
    <link href='asset/login/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='asset/login/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='asset/login/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='asset/login/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='asset/login/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='asset/login/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='asset/login/css/jquery.noty.css' rel='stylesheet'>
    <link href='asset/login/css/noty_theme_default.css' rel='stylesheet'>
    <link href='asset/login/css/elfinder.min.css' rel='stylesheet'>
    <link href='asset/login/css/elfinder.theme.css' rel='stylesheet'>
    <link href='asset/login/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='asset/login/css/uploadify.css' rel='stylesheet'>
    <link href='asset/login/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="asset/login/bower_components/jquery/jquery.min.js"></script>


    <link rel="shortcut icon" href="asset/login/img/favicon.ico">

</head>

<body>
    
     <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img alt="Charisma Logo" src="asset/login/img/logo20.png" class="hidden-xs"/>
                <span>Autisme</span></a>

            <!-- user dropdown starts -->


            <div class="btn-group pull-right theme-container animated tada" >
                <button class="btn btn-default dropdown-toggle">
                <span> Sistem Pakar Diagnosa Dini Autisme Pada Anak</span>
            
                </button>
            </div>   
            
            

        </div>
    </div>
    
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Assalamu'alaikum</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Silahkan Masuk Dengan Username dan Password.
            </div>
            <form class="form-horizontal" method="POST" action="">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input name="username" type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="clearfix"></div>

               
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <input type="submit" name="login" Value="Login" class="btn btn-primary" />
                    </p>
                    
                     
                        <a href="" class="btn-setting" >Daftar</a>
                   
                </fieldset>
            </form>

        </div>
        <!--/span-->
    </div><!--/row-->

</div><!--/fluid-row-->

</div><!--/.fluid-container-->



   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <form role="form" method="POST" action="simpanpengguna.php">
                                                  

                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Daftar</h3>
                </div>
                <div class="modal-body">
                    
  
                    <div class="form-group" hidden>

                     <label>ID</label>
                     <input class="form-control" id="" name="id" readonly value="<?php echo $hasilkode ?>">
                    </div>             
                    
                                      <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" id="" name="username" placeholder="Masukkan Username Anda">
                                        </div>
										
					<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"id="" name="password" placeholder="Masukkan Password Anda">
                                        </div>
					
                                            <div class="form-group" hidden>
                                            <label>Hak Akses</label>
                                            <input class="form-control"id="" name="hakakses" value="Pasien">
                                        </div>
                         
                                         <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" id="" placeholder="Masukkan Nama Anda">
					</div>
                    
                  
                         <label> Jenis Kelamin</label>
                                            <div class="radio" >
                                                <label>
                                                    <input type="radio" name="jk" id="jk" value="laki-laki">Laki-Laki
                                                </label>
                                            <br>
                                                <label>
                                                    <input type="radio" name="jk" id="jk" value="perempuan">Perempuan
                                                </label>
                                            </div>
                     <div class="form-group">      
                   <label>Email</label>
                    <input class="form-control"id="" name="email" placeholder="Masukkan Email Anda">
                    </div>
                      
                      <div class="form-group">               
                     <label>No.HP</label>
                       <input class="form-control"id="" name="hp" placeholder="Masukkan No.HP Anda">
                       </div>                     
                                            
                </div>
                <div class="modal-footer">
                    
                     <button type="submit" class="btn btn-outline btn-primary" name="simpan" value="simpan">Simpan</button>
                    <a href="#" class="btn btn-default" data-dismiss="modal">Batal</a>
                    
                </div>
            </div>
              </form>
        </div>
    </div>


<!-- external javascript -->

<script src="asset/login/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="asset/login/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='asset/login/bower_components/moment/min/moment.min.js'></script>
<script src='asset/login/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='asset/login/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="asset/login/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="asset/login/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="asset/login/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="asset/login/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="asset/login/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="asset/login/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="asset/login/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="asset/login/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="asset/login/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="asset/login/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="asset/login/js/charisma.js"></script>


</body>
</html>