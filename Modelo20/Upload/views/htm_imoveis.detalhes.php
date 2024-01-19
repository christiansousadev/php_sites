<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?=$data->titulo?> - <?=$data_pagina->meta_titulo?></title>
	<link rel="shortcut icon" href="<?=$_base['favicon'];?>" />

  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?=$data->titulo?> - <?=$data_pagina->meta_titulo?>" />
  <meta property="og:description" content="<?=strip_tags($data->descricao)?>" />
  <meta property="og:url" content="<?=$endereco_imovel_sem_ssl?>" />
  <meta property="og:site_name" content="<?=$data_pagina->meta_titulo?>" />

  <meta property="article:tag" content="destaque" />
  <meta property="article:published_time" content="<?=date('c');?>" />
  <meta property="article:modified_time" content="<?=date('c');?>" />
  <meta property="og:updated_time" content="<?=date('c');?>" />  
  <meta property="og:image" content="<?=$imagem_principal_sem_ssl?>" />
  <meta property="og:image:secure_url" content="<?=$imagem_principal_sem_ssl?>" />
  <meta property="og:image:width" content="<?=$imagem_principal_largura?>" />
  <meta property="og:image:height" content="<?=$imagem_principal_altura?>" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="<?=strip_tags($data->descricao)?>" />
  <meta name="twitter:title" content="<?=$data->titulo?> - <?=$data_pagina->meta_titulo?>" />
  <meta name="twitter:image" content="<?=$imagem_principal_sem_ssl?>" />

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
      background-color:<?=$cores_imo[134]?>;
    }

    .imoveis_detalhes_quadro{
      border:1px solid <?=$cores_imo[136]?>;
    }
    hr{
      border-top: 1px solid <?=$cores_imo[136]?> !important;
    }

    .imoveis_detalhes_categoria{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_titulo2{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_suites{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_quadro_ico2 a{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_quadro_ico2 i{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_quadro_ico2 span{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_ref{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_titulo{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_subtitulo{
      color: <?=$cores_imo[135]?>;
    }
    .social_titulo{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_opcoes{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_dormitorios{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_condominio{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_area{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_descricao{
      color: <?=$cores_imo[135]?>;
    }
    .imoveis_detalhes_ref2{
      color: <?=$cores_imo[135]?>;
    }



    .imovel_quadro{
      border: 1px solid <?=$cores_imo[140]?>;
      background-color: <?=$cores_imo[139]?>;
    }
    .imovel_titulo{
      color: <?=$cores_imo[141]?>;
    }
    .imovel_endereco{
      color: <?=$cores_imo[142]?>;
    }
    .imoveis_lista_itens{
      border: 1px solid <?=$cores_imo[140]?>;
      color: <?=$cores_imo[143]?>;
    }
    .imoveis_lista_itens i{
      color: <?=$cores_imo[143]?>;
    }
    .imovel_valor{
      color: <?=$cores_imo[145]?>;
      background-color: <?=$cores_imo[144]?>;
    }

  </style>

</head>
<body>

  <?=$_base['analytics']?>

  <?php include_once('htm_modal.php'); ?>

  <?php
  // topo 
  foreach ($layout_lista as $key_layout => $value_layout) {

    if($value_layout['full'] != 1){
      echo "<div class='container' >";
    }
    echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

    if($value_layout['colunas'] == 1){
      ?>

      <div class="col-md-12 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna1'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>

    <?php }

    if($value_layout['colunas'] == 2){

      if($value_layout['formato'] == '6_6'){
        ?>      

        <div class="col-md-6 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-6 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>          
        </div>

      <?php }

      if($value_layout['formato'] == '4_8'){
        ?>        

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-8 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

      if($value_layout['formato'] == '8_4'){
        ?>
        <div class="col-md-8 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>        
      <?php }

    }

    if($value_layout['colunas'] == 3){

      if($value_layout['formato'] == '4_4_4'){
        ?>

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }


      if($value_layout['formato'] == '2_5_5'){
        ?>      

        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }


      if($value_layout['formato'] == '5_2_5'){
        ?>      

        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

      if($value_layout['formato'] == '5_5_2'){
        ?>        

        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

    }

    if($value_layout['colunas'] == 4){

      if($value_layout['formato'] == '3_3_3_3'){
        ?>                                

        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }


      if($value_layout['formato'] == '4_2_2_4'){
        ?>

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }

      if($value_layout['formato'] == '2_4_4_2'){
        ?>

        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'topo'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

        <?php
      }

    }

    if($value_layout['colunas'] == 6){
      ?>

      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna1'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna2'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna3'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna4'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna5'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>              
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna6'];
        if($conteudo_coluna['tipo'] == 'topo'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>

    <?php }


    echo "
    </div>
    ";

    if($value_layout['full'] != 1){
      echo "</div>";
    }

  }
  
  // termina topo
  ?>
  
  <section class="animate-effect" style="margin-top:50px; margin-bottom: 50px;">

    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-7">

          <div class="row">

            <div class="col-xs-12 col-sm-9 col-md-10">
              <div class='imoveis_detalhes_titulo' ><?=$data->titulo?></div>
              <div class='imoveis_detalhes_subtitulo'><?=$data->bairro?> | <span><?=$data->cidade?> - <?=$data->uf?></span></div>
            </div>
            
            <div class="col-xs-12 col-sm-3 col-md-2">
              <div class="detalhes_favorito">

              </div>
            </div>

          </div>

          <div class="imoveis_imagens_div" >

            <div class="owl-carousel detalhes_imagens" >
              <?php

              foreach ($imagens as $key => $value) {

                echo "
                <div class='item' data-hash='img_".$value['id']."' >
                <div class='imoveis_detalhes_imagens' style='background-image:url(".$value['imagem_g'].");' >                                             
                </div>
                </div>
                ";

              }

              if(count($imagens) == 0){
                echo "
                <div class='item' data-hash='img_1' >
                <div class='imoveis_detalhes_imagens' style='background-image:url(".LAYOUT."img/semimagem.png);' >                                             
                </div>
                </div>
                ";
              }

              ?>   
            </div>

          </div>

          <div class="imoveis_imagens_div_min" id="galeria" >

            <div class="owl-carousel detalhes_imagens_miniaturas" id="galeria" >
              <?php

              foreach ($imagens as $key => $value) {

                echo "
                <div class='item' >
                <div class='imoveis_detalhes_imagens_min' style='background-image:url(".$value['imagem_p'].");' >
                <a href='".$value['imagem_g']."' title='".$value['legenda']."' ><img src='".$value['imagem_p']."' style='width:100%; opacity:0; height:100%;'>
                </a>                
                </div>
                ";

                if($value['legenda']){
                  echo "<div style='font-size:11px; width:100%; text-align:center; margin-top:3px;'>".$value['legenda']."</div>";
                }

                echo "
                </div>
                ";

              }

              ?>
            </div>

          </div> 

          <div class="social" >

            <div class='social_titulo' >
              Gostou? Compartilhe!
            </div>
            <ul>
              <li>
                <a href="https://www.facebook.com/sharer.php?u=<?=$endereco_imovel_sem_ssl?>" class="facebook" target="_blank" title="Compartilhar via Facebook"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/intent/tweet?text=<?=$data->titulo?>&url=<?=$endereco_imovel_sem_ssl?>" class="twitter" target="_blank" title="Compartilhar via Twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?text=Veja esta matéria:<?=$endereco_imovel_sem_ssl?>" class="whats" target="_blank" title="Compartilhar via WhatsApp"><i class="fab fa-whatsapp"></i></a>
              </li>
            </ul>

          </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-5">

          <div class="imoveis_detalhes_quadro" >
            <div class='padding' >

              <div class="row">

                <div class="col-xs-12 col-sm-7 col-md-7">
                  <div class="imoveis_detalhes_categoria">
                    <?php
                    if($data->categoria_id == 5279){
                      echo "Imóvel para Venda";
                    } else {
                      echo "Imóvel para Locação";
                    }
                    ?>
                  </div>
                  <div class="imoveis_detalhes_titulo2"><?=$data->titulo?></div>                                     
                </div>

                <div class="col-xs-12 col-sm-5 col-md-5">
                  <div class="imoveis_detalhes_ref" >Ref. <?=$data->cod_interno?></div>
                  <div class="imoveis_detalhes_valor" >R$ <?=$valor?></div>
                </div>

              </div>

              <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                  <?php if($data->iptu > 0){ ?>
                    <div class="imoveis_detalhes_area" >IPTU: R$ <?=$iptu?></div>
                  <?php } ?>                                        
                  <div class="imoveis_detalhes_ref2" >Ref. <?=$data->cod_interno?></div>
                  <?php if($data->area_total){ ?>
                    <div class="imoveis_detalhes_area" >Área Total: <?=$data->area_total?></div>
                  <?php } ?>
                  <?php if($data->area_util){ ?>
                    <div class="imoveis_detalhes_area" >Área Útil: <?=$data->area_util?></div>
                  <?php } ?>
                  <?php if($data->condominio){ ?><div class="imoveis_detalhes_condominio" >Condomínio: R$ <?=$condominio?></div><?php } ?>
                  <?php if($data->quartos){ ?><div class="imoveis_detalhes_dormitorios" >Dormitorios: <?=$data->quartos?></div><?php } ?>
                  <?php if($data->suites){ ?><div class="imoveis_detalhes_suites" >Sendo <?=$data->suites?> suite(s)</div><?php } ?>
                  <?php if($data->salas){ ?><div class="imoveis_detalhes_dormitorios" >Sala de Estar: <?=$data->salas?></div><?php } ?>
                  <?php if($data->cozinhas){ ?><div class="imoveis_detalhes_dormitorios" >Cozinha: <?=$data->cozinhas?></div><?php } ?>
                  <?php if($data->lavanderias){ ?><div class="imoveis_detalhes_dormitorios" >Lavanderia: <?=$data->lavanderias?></div><?php } ?>                   
                  <?php if($data->garagem){ ?><div class="imoveis_detalhes_suites" >Garagem: <?=$data->garagem?></div><?php } ?>  


                  <?php

                  if(count($opcoes) > 0){

                    echo "<hr>";

                    foreach ($opcoes as $key_op => $value_op) {

                      echo "
                      <div class='imoveis_detalhes_opcoes' >
                      ".$value_op['titulo']."
                      </div>
                      ";

                    }

                  }
                  ?>


                  <?php if($data->descricao){ ?>

                    <div style="margin-top: -10px;"><hr></div>

                    <div class="imoveis_detalhes_descricao" ><?=$data->descricao?></div>

                  <?php } ?>


                </div>

              </div>

            </div>
          </div>

          <div class='imoveis_detalhes_bt_esq' >
            <div class="imoveis_detalhes_quadro" >
              <div class="imoveis_detalhes_quadro_ico2">
                <a href="#" class="hvr-grow" onclick="modal('<?=DOMINIO?><?=$controller?>/imovel_desejo/id/<?=$data->id?>');" >
                  <span style="float: left; width:15%; padding-top:10px;">
                    <i class="fas fa-info-circle"></i>
                  </span>
                  <span style="float: left; width:85%;">Desejo mais informações sobre este imovel</span>
                  <div style="clear: both;"></div>
                </a>
              </div>
            </div>
          </div>

          <div class='imoveis_detalhes_bt_dir' >
            <div class="imoveis_detalhes_quadro" >
              <div class="imoveis_detalhes_quadro_ico2 hvr-grow" onClick="<?php if(!$data_detalhes->destino_voltar){ echo "history.go(-1);"; } else { echo "window.location='".DOMINIO.$data_detalhes->destino_voltar."';"; } ?>"; style="cursor: pointer;"> 
                <span style="float: left; width:40%; padding-top:10px; padding-bottom:8px;">
                  <i class="far fa-arrow-alt-circle-left"></i>
                </span>
                <span style="float: left; width:60%; padding-top:10px; padding-bottom:8px;">Voltar</span>
                <div style="clear: both;"></div> 
              </div>
            </div>
          </div>

          <div style="clear:both;"></div>

        </div>

      </div>

    </div>

  </section>


  <div style="background-color:<?=$cores_imo['137']?>; margin-top:60px; padding-bottom:70px; padding-top:40px;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

          <div><h2 class="imoveis_destaque_titulo" style="color:<?=$cores_imo['138']?>;" >Imóveis Similares</h2></div>

          <div class="owl-carousel similares" >
            <?php

            foreach ($similares as $key => $value) {

              $endereco_imo = DOMINIO.$controller.'/imoveis_detalhes/id/'.$value['codigo'];

              echo "
              <div class='item' >
              <div class='imovel_quadro' >

              <div class='imovel_titulo' onClick=\"window.location='".$endereco_imo."';\" >".$value['titulo']."</div>

              <div class='imovel_imagem_div'>
              <div class='imovel_valor' >R$ ".$value['valor']."</div>
              <div class='imovel_imagem hvr-grow' style='background-image:url(".$value['imagem'].");' >
              <a href='".$endereco_imo."'><img src='".LAYOUT."img/transp.png' style='width:100%; height:100%;'></a>
              </div>
              </div>
              <div class='imovel_endereco' >
              <div>".$value['bairro']."</div>
              <div>".$value['cidade']." - ".$value['uf']."</div>
              </div>

              <div style='margin-left:10px; margin-right:10px; text-align:left;' >
              ";

              if($value['area_total']){
                echo "
                <span class='imoveis_lista_itens'>
                <i class='fas fa-ruler-horizontal'></i>
                ".$value['area_total']."
                </span>
                ";
              }

              if($value['quartos']){
                echo "
                <span class='imoveis_lista_itens'>
                <i class='fas fa-bed'></i>
                ".$value['quartos']."
                </span>
                ";
              }

              if($value['garagem']){
                echo "
                <span class='imoveis_lista_itens'>
                <i class='fas fa-car'></i>
                ".$value['garagem']."
                </span>
                ";
              }

              echo "
              </div>

              </div>
              </div>
              ";

            }

            ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  
  <?php

  // rodape
  foreach ($layout_lista as $key_layout => $value_layout) {
    
    if($value_layout['full'] != 1){
      echo "<div class='container' >";
    }
    echo "<div class='row' style='margin-right:0px; margin-left:0px;' >";

    if($value_layout['colunas'] == 1){
      ?>

      <div class="col-md-12 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna1'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>

    <?php }

    if($value_layout['colunas'] == 2){

      if($value_layout['formato'] == '6_6'){
        ?>      

        <div class="col-md-6 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-6 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>          
        </div>

      <?php }

      if($value_layout['formato'] == '4_8'){
        ?>        

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-8 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

      if($value_layout['formato'] == '8_4'){
        ?>
        <div class="col-md-8 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>        
      <?php }

    }

    if($value_layout['colunas'] == 3){

      if($value_layout['formato'] == '4_4_4'){
        ?>

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }


      if($value_layout['formato'] == '2_5_5'){
        ?>      

        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }


      if($value_layout['formato'] == '5_2_5'){
        ?>      

        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

      if($value_layout['formato'] == '5_5_2'){
        ?>        

        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-5 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }

    }

    if($value_layout['colunas'] == 4){

      if($value_layout['formato'] == '3_3_3_3'){
        ?>                                

        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-3 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>

      <?php }


      if($value_layout['formato'] == '4_2_2_4'){
        ?>

        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

      <?php }

      if($value_layout['formato'] == '2_4_4_2'){
        ?>

        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna1'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna2'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-4 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna3'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div>
        <div class="col-md-2 corrige_cedulas_principais">
          <?php

          $conteudo_coluna = $value_layout['coluna4'];
          if($conteudo_coluna['tipo'] == 'rodape'){

            $conteudo_id = $conteudo_coluna['id'];
            $conteudo_sessao = $conteudo_coluna['conteudo'];
            include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

          }

          ?>
        </div> 

        <?php
      }

    }

    if($value_layout['colunas'] == 6){
      ?>

      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna1'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna2'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna3'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna4'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna5'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>              
      <div class="col-md-2 corrige_cedulas_principais">
        <?php

        $conteudo_coluna = $value_layout['coluna6'];
        if($conteudo_coluna['tipo'] == 'rodape'){

          $conteudo_id = $conteudo_coluna['id'];
          $conteudo_sessao = $conteudo_coluna['conteudo'];
          include 'htm_conteudo_'.$conteudo_coluna['tipo'].'.php';

        }

        ?>
      </div>

    <?php }


    echo "
    </div>
    ";

    if($value_layout['full'] != 1){
      echo "</div>";
    }

  }

  // termina rodape
  ?>

  <script type="text/javascript" src="<?=LAYOUT?>js/jquery-2.2.4.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/jquery-ui.min.js"></script>  
  <script type="text/javascript" src="<?=LAYOUT?>api/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <script type="text/javascript" >function dominio(){ return '<?=DOMINIO?>'; }</script>
  <script type="text/javascript" src="<?=LAYOUT?>js/funcoes.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/animation.js"></script>
  <script type="text/javascript" src="<?=LAYOUT?>js/responsiveslides.min.js"></script>
  <script src="<?=LAYOUT?>api/photobox-master/photobox/jquery.photobox.js"></script>

  <?php
  
  foreach ($layout_lista as $key_layout => $value_blocos) {
    $n_col = 1;
    while ($n_col <= $value_blocos['colunas']) {

      $value_layout = $value_blocos['coluna'.$n_col];
      
      if(isset($value_layout['tipo'])){
        
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
                
                <?php if($conteudo_sessao['data_topo']->modelo  == 13){ ?>

                  if(posicao_topo > 100){          
                    $(".topo13").addClass("topo13_decendo");
                  }
                  if(posicao_topo < 100){          
                    $(".topo13").removeClass("topo13_decendo");
                  }
                  
                <?php } ?>
                
              });
            });

          </script>
          <?php
        }
      }
      $n_col++;
    }

    // termina lista
  }

  ?>

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


  <script>
    $(document).ready(function () {

      $('#galeria').photobox('a',{ time:0 });

      var owl_detalhes = $('.detalhes_imagens');
      owl_detalhes.owlCarousel({
        autoplay: false,
        nav: true,
        navText:["", ""],
        dots: false,
        margin: 0,
        loop: false,
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }        
        }
      });
      var owl_detalhes_min = $('.detalhes_imagens_miniaturas');
      owl_detalhes_min.owlCarousel({
        autoplay: false,
        nav: true,
        navText:["", ""],
        dots: false,
        margin:10,
        loop: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash',
        responsive: {
          0: {
            items: 3
          },
          600: {
            items: 6
          },
          1000: {
            items: 6
          }
        }
      });
      var owl = $('.similares');
      owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 7000,
        nav: false,
        navText:["", ""],
        dots: true,
        margin: 50,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      });


    });

  </script>

</body>
</html>