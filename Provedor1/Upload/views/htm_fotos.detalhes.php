<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?=$data->titulo?> - <?=$data_pagina->meta_titulo?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>" />

  <meta name="description" content="<?=$data_pagina->meta_descricao?>" />
  <meta property="og:description" content="<?=$data_pagina->meta_descricao?>" />
  <meta name="author" content="<?=AUTOR?>" />
  <meta name="classification" content="Website" />
  <meta name="robots" content="index, follow" />
  <meta name="Indentifier-URL" content="<?=DOMINIO?>" />

  <link href="<?=LAYOUT?>api/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>api/fontawesome/css/all.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>css/animate.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>api/hover-master/css/hover-min.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>css/main.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>css/responsiveslides.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>api/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
  <link href="<?=LAYOUT?>api/photobox-master/photobox/photobox.css" rel="stylesheet" type="text/css"> 


  <?php include_once('htm_css.php'); ?>
  <?php include_once('htm_css_resp.php'); ?>

  <style type="text/css">
    body {
      background-color:<?=$pagina_cores[1]?>;
    }
  </style>

</head>
<body>

  <?=$_base['analytics']?>

  <?php include_once('htm_modal.php'); ?>

  <?php
  
  foreach ($layout_lista as $key_layout => $value_layout) {

    if($value_layout['tipo'] == 'topo'){
      $conteudo_id = $value_layout['id'];
      $conteudo_sessao = $value_layout['conteudo'];
      include 'htm_conteudo_'.$value_layout['tipo'].'.php';
    }

  }

  ?>
  
  <section class="animate-effect" style="margin-top:50px; margin-bottom: 50px;">

    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <h2 class="titulo_padrao" ><?=$data->titulo?></h2>
          <div class="titulo_padrao_linha" ><i class="fas fa-caret-down"></i></div>
        </div>
      </div> 

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12" >

          <div ><hr></div>

          <div style="font-size: 16px;">
            <?=$data->conteudo?>
          </div>

          <div id="gallery" style="margin-left: -10px; text-align: center;">
            <?php

            foreach ($imagens['lista'] as $key => $value) {
              echo "<a class='fotos_imagens_interno' href='".$value['imagem_g']."' style='background-image:url(".$value['imagem_p'].");' ></a>";
            }

            ?>
          </div>

          <div style="margin-bottom: 20px; text-align: center; margin-top:40px;" >
            <a class="btn botao_leitura hvr-float-shadow" style="padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:7px; " href="#" onClick="history.go(-1)" >Voltar</a>
          </div>

          <div style="clear:left;" ></div>                 

        </div>

        

      </div>

    </div>

  </section>

  
  <?php

  foreach ($layout_lista as $key_layout => $value_layout) {

    if($value_layout['tipo'] == 'rodape'){
      $conteudo_id = $value_layout['id'];
      $conteudo_sessao = $value_layout['conteudo'];
      include 'htm_conteudo_'.$value_layout['tipo'].'.php';
    }

  }

  ?>

  <script type="text/javascript" src="<?=LAYOUT?>js/jquery-2.2.4.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>  
  <script type="text/javascript" >function dominio(){ return '<?=DOMINIO?>'; }</script>
  <script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/animation.js"></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
  <script type="text/javascript" src="<?=LAYOUT?>api/photobox-master/photobox/jquery.photobox.js"></script>

  <?php

  foreach ($layout_lista as $key_layout => $value_layout) {

    if($value_layout['tipo'] == 'topo'){

      $conteudo_id = $value_layout['id'];
      $conteudo_sessao = $value_layout['conteudo'];
      $id_script = '#slider_topo_'.$conteudo_id;

      ?>
      <script>
        
        <?php if($conteudo_sessao['data_topo']->modelo  == 11){ ?>
          
          $("<?=$id_script?>").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            pause: true,
            pauseControls: true,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
          });
          
        <?php } ?>

        $(document).ready(function(){
          $(window).on('scroll', function() {
            var posicao_topo = $(window).scrollTop();



            <?php if($conteudo_sessao['data_topo']->modelo  == 6){ ?>

              if(posicao_topo > 100){          
                $(".topo6").addClass("topo6_decendo");
              }
              if(posicao_topo < 100){          
                $(".topo6").removeClass("topo6_decendo");
              }

            <?php } ?>

            <?php if($conteudo_sessao['data_topo']->modelo  == 7){ ?>

              if(posicao_topo > 100){          
                $(".topo7").addClass("topo7_decendo");
              }
              if(posicao_topo < 100){          
                $(".topo7").removeClass("topo7_decendo");
              }

            <?php } ?>

            <?php if($conteudo_sessao['data_topo']->modelo  == 8){ ?>

              if(posicao_topo > 100){          
                $(".topo8").addClass("topo8_decendo");
              }
              if(posicao_topo < 100){          
                $(".topo8").removeClass("topo8_decendo");
              }

            <?php } ?>

            <?php if($conteudo_sessao['data_topo']->modelo  == 9){ ?>

              if(posicao_topo > 100){          
                $(".topo9").addClass("topo9_decendo");
              }
              if(posicao_topo < 100){          
                $(".topo9").removeClass("topo9_decendo");
              }
              
            <?php } ?>

            <?php if($conteudo_sessao['data_topo']->modelo  == 10){ ?>

              if(posicao_topo > 100){          
                $(".topo10").addClass("topo10_decendo");
              }
              if(posicao_topo < 100){          
                $(".topo10").removeClass("topo10_decendo");
              }
              
            <?php } ?>

          });
        });

      </script>

      <?php
    }

    // termina lista
  }

  ?>

  <script>        
    $(function(){
      $('#gallery').photobox('a',{ time:0 });
    });
  </script>

  <?php if($data_pagina->bloqueio == 1){ ?>

    <script type="text/javascript">

      $(document).ready(function(){
        $(document).bind("contextmenu",function(e){
          return false;
        });

        $('body').bind('contextmenu', function(event) {
          event.preventDefault();
        });

        $('body').bind('selectstart dragstart', function(event) {
          event.preventDefault();
          return false;
        });

        $("body").bind("cut copy paste", function() {
          return false;
        });

        $('body').focus(function() {
          $(this).blur();
        });

      });
    </script>

  <?php } ?> 
  
</body>
</html>