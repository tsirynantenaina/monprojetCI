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
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/meanmenu.min.css">
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
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url() ; ?>/asset/img/logo/logo.png" alt=""  /></a>
                <strong><img src="<?php echo base_url() ; ?>/asset/img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li style=" background-color:#ecefea">
                            <a  href="#">
								   <i class="fa big-icon fa-home icon-wrap"></i>
								      Acceuil
							</a>
                            
                        </li>
                        <li >
                            <a  href="<?php echo base_url('client_controller/client') ; ?>">
                                   <i class="fa big-icon fa-user icon-wrap"></i>
                                  Client
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url('fournisseur_controller/fournisseur') ; ?>">
                                   <i class="fa big-icon fa-cube sub-icon-mg" ></i> 
                                   Fournisseur
                            </a>
                            
                        </li>
                         <li >
                            <a  href="<?php echo base_url('produit_controller/produit') ; ?>">
                                   <i class="fa big-icon fa-table icon-wrap"></i> 
                                   Produits
                            </a>
                            
                        </li>
                         <li >
                            <a href="<?php echo base_url('panier_controller/panier') ; ?>">
                                   <i class="fa big-icon fa-cart-arrow-down icon-wrap"></i> 
                                   Panier
                            </a>
                            
                        </li>
                         <li >
                            <a href="<?php echo base_url('achat_controller/achat') ; ?>">
                                   <i class="fa big-icon fa-money icon-wrap"></i> 
                                   Achat
                            </a>
                            
                        </li>
                         <li >
                            <a href="<?php echo base_url('reaprov_controller/reaprov') ; ?>">
                                   <i class="fa big-icon fa-plus icon-wrap"></i> 
                                   Réaprovision
                            </a>
                            
                        </li>
                        
                      </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">Utilisateur <?php echo $this->session->userdata('username') ;  ?></span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="<?php echo base_url('register_controller/register'); ?>"><span class="fa fa-home author-log-ic"></span>Register</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('login_controller/logout') ; ?>"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




                        <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Page</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Acceuil</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Clients</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-red">
                                            <?php foreach ($effectifClient as $row) { ?>
                                               <?php echo $row->effectifClient ;  
                                                    $nbCli = $row->effectifClient ;
                                               ?> 

                                        <?php } ?>
                                        <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"> 
                                               <?php echo $nbCli ;  ?> 
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width:<?php echo $nbCli ?>% ;" class="progress-bar bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Produits</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">
                                        <?php foreach ($effectifProduit as $row) { ?>
                                               <?php echo $row->effectifProduit ;  $nbProd = $row->effectifProduit ;  ?> 
                                     <?php } ?>

                                        <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbProd ;  ?> </h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width:<?php echo $nbProd ?>% ;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Fournisseur</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">

                                        <?php foreach ($effectifFournisseur as $row) { ?>
                                               <?php echo $row->effectifFournisseur ; 
                                                        $nbFrns = $row->effectifFournisseur;
                                                ?> 

                                        <?php } ?><i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbFrns ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width:<?php echo $nbFrns ?>% ;" class="progress-bar bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Achat</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red"><?php foreach ($effectifAchat as $row) { ?>
                                               <?php echo $row->effectifAchat ;  $nbAchat = $row->effectifAchat ;  ?> 
                                     <?php } ?><i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin"><?php echo $nbAchat ?></h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width:<?php echo $nbAchat ?>% ;" class="progress-bar bg-red"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div  class="col-lg-12 col-md-9 col-sm-9 col-xs-5" >
                        <div class="product-sales-chart">
                            
                            <h1  style="margin-left:160px ;t">Representation graphiques des produits plus achetés</h1>
                               
            
                            <div id="bar1-chart" style="width:800px ; margin-left:130px">
                                <canvas id="barchart1" ></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="product-new-list-area">
            <div class="container-fluid">
                <div class="row">
                    
                    
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Projet codeigniter|Tsiry nantenaina DAII3 2711</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
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
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/morrisjs/morris-active.js"></script>
     <script src="<?php echo base_url() ; ?>/asset/js/charts/Chart.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/main.js"></script>
    <?php $i=0; foreach ($statistique as $row) {$i++; ?>
        <?php if($i==1){ $prod1 = $row->nomProd ; $qte1 = $row->somme ;} 
              if($i==2){ $prod2 = $row->nomProd ; $qte2 = $row->somme ;}
              if($i==3){ $prod3 = $row->nomProd ; $qte3 = $row->somme ;}
              if($i==4){ $prod4 = $row->nomProd ; $qte4 = $row->somme ;}
              if($i==5){ $prod5 = $row->nomProd ; $qte5 = $row->somme ;}
                if($i==6){ $prod6 = $row->nomProd ; $qte6 = $row->somme ;}
        ?>
    <?php } ?>
    <script type="text/javascript">

    (function ($) {
 "use strict";
     /*----------------------------------------*/
    /*  1.  Bar Chart
    /*----------------------------------------*/

    var ctx = document.getElementById("barchart1");
    var barchart1 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?php echo'"'.$prod1.'"';?>,<?php echo'"'.$prod2.'"';?> , <?php echo'"'.$prod3.'"';?>, <?php echo'"'.$prod4.'"';?>, <?php echo'"'.$prod5.'"';?>, <?php echo'"'.$prod6.'"';?>],
            datasets: [{
                label: 'vendu',
                data: [<?php echo $qte1;?>,<?php echo $qte2;?>, <?php echo $qte3;?>,<?php echo $qte4;?>, <?php echo'"'.$qte5.'"';?>, <?php echo'"'.$qte6.'"';?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }],
                yAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }]
            }
        }
    });
    /*----------------------------------------*/
    /*  2.  Bar Chart vertical
    /*----------------------------------------*/
    var ctx = document.getElementById("barchart2");
    var barchart2 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                data: [12, 19, 3, 5, 2, 3, 9],
                borderWidth: 1,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
            }, {
                label: 'Dataset 2',
                data: [-3, -6, -5, -9, -15, -20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Bar Chart Vertical'
            },
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }],
                yAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }]
            }
        }
    });
    /*----------------------------------------*/
    /*  3.  Bar Chart Horizontal
    /*----------------------------------------*/
    var ctx = document.getElementById("barchart3");
    var barchart3 = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                data: [12, 19, 3, 5, 2, 3, 9],
                borderWidth: 1,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
            }, {
                label: 'Dataset 2',
                data: [-3, -6, -5, -9, -15, -20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Bar Chart horizontal'
            },
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }],
                yAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }]
            }
        }
    });
    
    /*----------------------------------------*/
    /*  4.  Bar Chart Multi axis
    /*----------------------------------------*/
    var ctx = document.getElementById("barchart4");
    var barchart4 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                data: [12, 19, 3, 5, 2, 3, 9],
                borderWidth: 1,
                yAxisID: "y-axis-1",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
            }, {
                label: 'Dataset 2',
                data: [-3, -6, -5, -9, -15, -20],
                borderWidth: 1,
                yAxisID: "y-axis-2",
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:"Bar Chart Multi Axis"
            },
            tooltips: {
                mode: 'index',
                intersect: true
            },
            scales: {
                yAxes: [{
                    type: "linear",
                    display: true,
                    position: "left",
                    id: "y-axis-1",
                }, {
                    type: "linear",
                    display: true,
                    position: "right",
                    id: "y-axis-2",
                    gridLines: {
                        drawOnChartArea: false
                    }
                }],
            }
        }
    });
    
    /*----------------------------------------*/
    /*  5.  Bar Chart Stacked
    /*----------------------------------------*/
    
    var ctx = document.getElementById("barchart5");
    var barchart5 = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: '#303030',
                data: [12, 19, 3, -5, -2, 3, 9]
            }, {
                label: 'Dataset 2',
                backgroundColor: '#03a9f4',
                data: [-10, 15, -7, 7, -2, 4, 9]
                
            }, {
                label: 'Dataset 3',
               backgroundColor: '#FFC13B',
               data: [15, -18, 3, 6, 5, -3, 7]
                
            }]
        },
        options: {
            title:{
                display:true,
                text:"Bar Chart Stacked"
            },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }],
                yAxes: [{
                    ticks: {
                        autoSkip: false,
                        maxRotation: 0
                    },
                    ticks: {
                      fontColor: "#fff", // this here
                    }
                }]
            }
        }
    });
    
    
        
        
})(jQuery); </script>
</body>

</html>

