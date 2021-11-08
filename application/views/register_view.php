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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3>Registration</h3>
                    <p></p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url('register_controller/register_validation') ; ?>">
                            <div id="erreur">
                            
                            </div>
                            <div id="msgSuccess">
                            <?php if($this->session->flashdata("succes")!=""){
                                ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    <strong>Success!</strong> <?php echo $this->session->flashdata("succes")  ; ?>
                                </div>
                                <?php
                             }

                            ?>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Nom d'utilisateur</label>
                                    <input type="text" class="form-control" name="pseudo" id="pseudo" required onkeypress="vider()">
                                    
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="mdp1" id="mdp1" required onkeypress="vider()">
                                    
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirmé mot de passe</label>
                                    <input type="password" class="form-control" name="mdp2" id="mdp2" required onkeypress="vider()">

                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email </label>
                                    <input class="form-control" name="mail" id="mail" required onkeypress="vider()">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Telephone</label>
                                    <input class="form-control" name="tel" id="tel" required onkeypress="vider()" >
                                    
                                </div>
                            </div>
                            <div class="text-center">
                                <button  type="submit" onclick="return valider()" class="btn btn-success">Enregistrer</button>
                                <a href="<?php echo base_url('login_controller/login') ; ?>"><span class="btn btn-default">Revenir au login</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
        <div class="row">
           
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
    <script type="text/javascript">
    function valider(){
        var a = document.getElementById("mdp1").value;
        var b = document.getElementById("mdp2").value;
        if(a!=b){
            document.getElementById('erreur').innerHTML="<div class=\"alert alert-danger alert-dismissible\"> <p>La confirmation du mot de passe est incorrecte </p></div>";

            return false ;
        }else{
            return true ; 
        }
    }  

    function vider(){
        document.getElementById('erreur').innerHTML="";
        document.getElementById('msgSuccess').innerHTML="";
    }                  
    </script>
    
</body>

</html>