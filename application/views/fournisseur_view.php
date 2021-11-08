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
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/modals.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
        <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/editor/select2.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url() ; ?>/asset/css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url() ; ?>/asset/img/logo/logo.png" alt="" /></a>
                <strong><img src="<?php echo base_url() ; ?>/asset/img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li >
                            <a  href="<?php echo base_url('login_controller/acceuil') ; ?>">
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
                        <li style=" background-color:#ecefea">
                            <a  >
                                   <i class="fa fa-cube sub-icon-mg" ></i> 
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
                            <a  href="<?php echo base_url('reaprov_controller/reaprov') ; ?>">
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


            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row"><br><br><br>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Page</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Fournisseur</span>
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
        
        

        <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div id="msgSuccess"  class="col-lg-12">
                            <?php if($this->session->flashdata("succes")!=""){
                                ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                     <?php echo $this->session->flashdata("succes")  ; ?>
                                </div>
                                <?php
                             }

                            ?>
            </div>

            <div id="msgSuccessEdit"  class="col-lg-12">
                            <?php if($this->session->flashdata("succesEdit")!=""){
                                ?>
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                     <?php echo $this->session->flashdata("succesEdit")  ; ?>
                                </div>
                                <?php
                             }

                            ?>
            </div>
            <div id="msgSuccessDelete" class="col-lg-12">
                            <?php if($this->session->flashdata("succesDelete")!=""){
                                ?>
                                <div class="alert alert-warning">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                     <?php echo $this->session->flashdata("succesDelete")  ; ?>
                                </div>
                                <?php
                             }

                            ?>
            </div>
            

            <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Fournisseur</h1><hr>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <a class="btn btn-danger" href="" data-toggle="modal" data-target="#DangerModalAdd">Nouveau Fournisseur</a>
                                    </div>
                                    <table class="table" id="table" data-toggle="table"  data-search="true"    data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom Fournisseur</th>
                                                <th>Adresse</th>
                                                <th>Telephone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($result as $row) { ?>
                                   
                                            <tr>
                                               
                                                <td><?php echo $row->idFrns ; ?></td>
                                                <td><?php echo $row->nomFrns ; ?></td>
                                                <td><?php echo $row->adrsFrns ; ?></td>
                                                <td><?php echo $row->telFrns ; ?></td>
                                                <td>
                                                    <button  title="Edit" class="pd-setting-ed editFournisseur" data-toggle="modal" data-target="#DangerModalEdit">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                    <button  title="supprimer" class="pd-setting-ed deleteFournisseur" data-toggle="modal" data-target="#DangerModalalert">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                         <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div >
    </div><br><br><br><br><br><br><br><br>
        <!-- Static Table End -->

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

        <div id="DangerModalAdd" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title">Formulaire d'ajout fournisseur</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url('fournisseur_controller/inserer') ; ?>">
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="nomFrns" placeholder="Nom Fournisseur" required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="adrsFrns" placeholder="Adresse" required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="telFrns" placeholder="Telephone " required>
                                            </div>
                                   </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" href="#">Annuler</button>
                                        <button type="submit" class="btn btn-danger" name="submitFournisseur" >Valider</button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>

        <div id="DangerModalEdit" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title" id="modifFrnsTitre"></h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url('fournisseur_controller/editer') ; ?>">
                                            <div class="input-group mg-b-pro-edt">
                                                 <input type="hidden" class="form-control" name="idFrnsEdit"  id="idFrnsEdit"  required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="nomFrnsEdit" id="nomFrnsEdit" placeholder="Nom Fournisseur" required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-tag" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="adrsFrnsEdit" id="adrsFrnsEdit" placeholder="Adresse" required>
                                            </div>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="telFrnsEdit" id="telFrnsEdit" placeholder="Telephone " required>
                                            </div>
                                   </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" href="#">Annuler</button>
                                        <button type="submit" class="btn btn-danger">Editer</button>
                                    </div>
                                        </form>
                                </div>
                            </div>
                        </div>

                        <div id="DangerModalalert" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="<?php echo base_url('fournisseur_controller/supprimer') ; ?>">
                                        <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                        <h2>Suppression!</h2>
                                        <input type="hidden" id="idFrnsDelete" name="idFrnsDelete" required/>
                                        <p id="deleteConfirme"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button data-dismiss="modal" class="btn btn-default" href="#">Annuler</button>
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </div>
                                    </form>
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
    <!-- data table JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/editable/jquery.mockjax.js"></script>
    <script src="j<?php echo base_url() ; ?>/asset/s/editable/mock-active.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/editable/select2.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url() ; ?>/asset/<?php echo base_url() ; ?>/asset/js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url() ; ?>/asset/js/main.js"></script>
    <script type="text/javascript">
          $(document).ready(function(){
              $(".editFournisseur").on('click', function(){
               $tr=$(this).closest("tr");
               var data=$tr.children("td").map(function(){
                  return $(this).text();
               }).get();
                console.log(data);
                $("#idFrnsEdit").val(data[0]);
                $("#nomFrnsEdit").val(data[1]);
                $("#adrsFrnsEdit").val(data[2]);
                $("#telFrnsEdit").val(data[3]);
              
                document.getElementById('modifFrnsTitre').innerHTML=" Edition du fournisseur numero: "+data[0]+" ";
              
              });



            });

          $(document).ready(function(){
              $(".deleteFournisseur").on('click', function(){
               $tr=$(this).closest("tr");
               var data=$tr.children("td").map(function(){
                  return $(this).text();
               }).get();
                console.log(data);
                $("#idFrnsDelete").val(data[0]);
                document.getElementById('deleteConfirme').innerHTML=" Voulez-vous vraiment supprimer le fournisseur numero "+data[0]+" ";
              
              
              });

            });
</script>
</body>

</html>