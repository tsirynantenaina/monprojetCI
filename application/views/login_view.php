<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bijouterie | <?php echo $title ; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ; ?>/asset/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="index.html" class="btn btn-primary" hidden>Back to Dashboard</a><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>Authentification utilisateur</h3>
                    <p></p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url('login_controller/login_validation') ; ?> ">
                             <?php if($this->session->flashdata("error")!=""){
                                ?>
                                    <div class="alert alert-danger alert-dismissible" role="alert" style="text-align:center">
                                                <?php echo $this->session->flashdata("error")  ; ?>
                                    </div>
                                <?php
                             }

                            ?>
                            
                            <div class="form-group">
                                <label class="control-label" for="username">Utilisateur</label>
                                <input type="text"  title="Entrer votre nom d'utilisateur" placeholder="administrateur" required  value="" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Mot de passe</label>
                                <input type="password" title="Entrer votre mot de passe" placeholder="******************"  value="" required name="password" id="password" class="form-control">
                                
                            </div> 
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="<?php echo base_url('register_controller/register') ; ?>">Creer compte</a>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
            </div>
        </div>
    </div>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/main.js"></script>
</body>

</html>