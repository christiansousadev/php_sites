<?php require_once('_system/bloqueia_view.php'); ?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="<?=$_base['imagem']['146955550242195']?>">   
  <title>Parceiros - <?=$_base['titulo_pagina']?></title>

  <link href="<?=LAYOUT?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?=LAYOUT?>css/theme.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?=LAYOUT?>css/revslider.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?=LAYOUT?>css/custom.css" rel="stylesheet" type="text/css" media="all" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800|Roboto:400,400i,500,500i,700,700i,900" rel="stylesheet">

  <?php // css alteravel pelo painel
  require_once('_css_padrao.php');
  require_once('_css_personalizado.php');
  ?>

</head>
<body>

  <?php require_once('htm_modal.php'); ?>  

  <?php require_once('htm_topo2.php'); ?>

  <div class="wrapper">

    <div class="container">

      <div class="content_block row no-sidebar">
        <div class="fl-container">
          <div class="posts-block">
            <div class="contentarea"> 

              <div id="conteudo" style="padding-top:0px;">

                <div class="row">

                  <div class="col-sm-12" >
                    <div class="titulo_padrao" >Parceiros e Clientes<br><i></i></div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12" >

                      <div style="padding-top:50px; margin-bottom: 80px; text-align: center;">
                        <?php

                        foreach ($parceiros as $key => $value) {

                          echo "
                          <div class='parceiros_item' style='background-image:url(".$value['imagem'].");' ></div>";

                        }

                        ?>
                      </div>                      

                    </div>
                  </div> 

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <?php include_once('htm_rodape.php'); ?>

    <div class="fixed-menu"></div>

    <script type="text/javascript" src="<?=LAYOUT?>js/jquery.min.js"></script>	
    <script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="<?=LAYOUT?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=LAYOUT?>js/modules.js"></script>	
    <script type="text/javascript" src="<?=LAYOUT?>js/theme.js"></script>
    <script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?=LAYOUT?>js/jquery.themepunch.revolution.min.js"></script>
    <!-- Portfolio -->
    <script type="text/javascript" src="<?=LAYOUT?>js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?=LAYOUT?>js/sorting.js"></script>    
    <!-- Testimonials -->
    <script type="text/javascript" src="<?=LAYOUT?>js/slick.js"></script>
    <script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
    <script type="text/javascript">function dominio(){ return "<?=DOMINIO?>"; }</script>

    <script type="text/javascript">
      $('a.scrollSuave').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 500);
        }

      }); 
    </script>

  </body>
  </html>