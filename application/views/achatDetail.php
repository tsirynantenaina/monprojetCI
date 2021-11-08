<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bijouterie | details</title>
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
     <script>function printContent(el){
      var restorepage=document.body.innerHTML;
      var printContent=document.getElementById(el).innerHTML;
      document.body.innerHTML=printContent;
      window.print();
      document.body.innerHTML=restorepage;
    }
  </script>
  <style type="text/css">

  </style>
</head>
<body onload="" style="background-color : white">
<div class="wrapper">
<div style="width:1200px ; margin-left:60px ; margin-top:10px" id="imprimer">
              <!-- Main content -->
              <section class="invoice">
                <!-- title row -->
                <div class="row">
                  <div class="col-xs-12">
                    <h2 class="page-header">
                      <i class="fa fa-globe"></i> Bijouterie Unkown
                      <small class="pull-right">Date: <?php echo date('d-m-Y'); ?></small>
                    </h2>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    De
                    <address>
                      <strong>Bijouterie Unkown</strong><br>
                      Adresse FIANARANTSOA<br>
                      Rue Ampasambazaha, CA 94107<br>
                      Phone: 034 67 999 00<br>
                      Email: unkwonbijouterie@gmail.com
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    Vers
                    <address>
                       <?php foreach ($infoClient as $row) { ?>
                            <strong><?php echo $row->nomCli ; ?> <?php echo $row->prenomCli ; ?></strong><br>
                            Client identite :<?php echo $row->idCli ; ?><br>
                            <?php echo $row->adrsCli ; ?><br>
                            Phone: <?php echo $row->telCli ; ?><br>
                                                  
                        <?php }?>
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>FIANARANTSOA</b><br>
                    <br>
                    <b>Achat lieu:</b> Bijouterie unkown<br>
                    <b>Mode Payement:</b> Directe <br>
                    <b>Payement:</b> Validé
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>total</th>
        
                      </tr>
                      </thead>
                      <tbody>
                      <?php  foreach ($listeAchat as $row) { ?>
                            <?php $dateAchat = $row->dateAchat ;?>
                            <tr>
                                <td><?php echo $row->nomProd ;?></td>
                                <td><?php echo $row->qteAchat ;?></td>
                                <td><?php echo $row->totalAchat ;?></td>

                            <tr>                         
                        <?php }?>
                      
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-xs-6">
                    <p class="lead">Facture de bijouterie Unkown:</p>

                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                      Tout achat dans notre bijouterie sont muni d'une facture de validation.Ainsi, une garentie de 2 semaines
                      sera donnr au client compter dès le jour de l'achat du produit
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-6">
                    <p class="lead">Achat fait le : <?php echo $dateAchat ; ?></p>                      
                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th>Quantité Produit Acheté :</th>
                          <?php  foreach ($effectifAchat as $row) { ?>
                             <td><?php echo $row->effectif ; ?></td>                      
                          <?php }?>
                        </tr>
                        <tr>
                        <?php $tva ; $somme;   ?>
                          <th style="width:50%">Total Hors Taxes (THT) :</th>
                          <?php  foreach ($horsTaxe as $row) { ?>
                              
                             <td><?php echo $row->somme ; $somme =  $row->somme; ?> Ariary</td>                      
                          <?php }?>
                        </tr>
                        <tr>
                        
                          <th>Taxes sur Valeur Ajouté (TVA = 20%) :</th>
                          <?php  foreach ($horsTaxe as $row) { ?>
                             <td><?php $tht = $row->somme ;  $tva = ($tht*20)/100 ; echo $tva;?> Ariary</td>                      
                          <?php }?>
                        </tr>
                        <tr>
                          <th>Net A payer (TTC):</th>
                          <td><?php echo $somme+$tva ; ?> Ariary</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>
              <!-- /.content -->

  </div><br>
  <a class="btn btn-primary" onclick="printContent('imprimer')" title="impression" class="pd-setting-ed " style="margin-left:1200px" >
      <i class="fa fa-print" aria-hidden="true"></i> Imprimer
  </a>
   <a href="<?php echo base_url('achat_controller/achat') ; ?>" class="btn btn-default" class="pd-setting-ed " style="margin-top:-55px ; margin-left:1120px ">
      <i   aria-hidden="true"></i> Retour
  </a>
</div>
<!-- ./wrapper -->
</body>
</html>
