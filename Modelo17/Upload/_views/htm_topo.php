<?php require_once('_system/bloqueia_view.php'); ?>

<div class="main_header">
	<div class="header_parent_wrap">

		<header>
			<div class="container">
				<div class="row">


          <div class="div_topo_superior">
            <div style="float: left;"><img src="<?=LAYOUT?>img/topocanto1.png"></div>
            <div class="div_topo_superior_txt" ><i class="fas fa-phone"></i> <?=$_base['topo_txt1']?></div>
            <div class="div_topo_superior_txt" ><i class="fab fa-whatsapp"></i> <?=$_base['topo_txt2']?></div>
            <div class="div_topo_superior_txt_email" ><?=$_base['topo_txt3']?></div>

            <div style="float: right;"><img src="<?=LAYOUT?>img/topocanto2.png"></div>
            <div class="div_topo_superior_txt redestopo" >
              <?php

              $listaredes = $_base['listaredes'];
              foreach ($listaredes as $key => $value) {

                if($value['imagem']){
                  echo " 
                  <a href='".$value['endereco']."' target='_blank' class='topo_redes_sociais_item' >
                  <img src='".$value['imagem']."'>
                  </a> 
                  ";
                }

              }

              ?>
            </div>


            <div style="clear: both;"></div>
          </div>


          <div class="col-xs-7 col-sm-3 col-md-3" >

            <a href="<?=DOMINIO?>" class="logo">
              <img alt="" src="<?=$_base['imagem']['147796771992551']?>">
            </a>

          </div>


          <div class="col-xs-5 col-sm-9 col-md-9" >

            <nav>
             <ul class="menu">
              <?php

              function geramenu($lista, $controller, $pai){

               if($pai != 0){ echo "<div class='sub-nav'><ul class='sub-menu'>"; }

               foreach ($lista as $key => $value) {

                $array = explode('#', $value['destino']);
                $numero = count($array);
                $end_final = '#'.end($array);

                if($end_final == "#conteudo"){
                 $namesmapagina = "";
                 $endereco = $value['destino'];
               } else {
                 if($numero > 1){
                  $namesmapagina = " class='scrollSuave' "; // regra para navegar por # na mesma pagina
                  $endereco = $end_final;
                } else {
                 $namesmapagina = "";
                 $endereco = $value['destino'];
               }
             }

             if(count($value['filhos']) > 0){
               $pre_submenu = "class='menu-item-has-children'";
             } else {
               $pre_submenu = "";
             }

                                        // caso ativo class='current-menu-parent'

             echo "
             <li $pre_submenu >
             <a $namesmapagina href='".$endereco."' >
             ".$value['titulo']."</a>
             ";

             if(count($value['filhos']) > 0){
               geramenu($value['filhos'], $controller, 1);
             }

             echo "</li>";

           }

           if($pai != 0){ echo "</ul></div>"; }
         }
         geramenu($_base['menu'], $controller, 0);

         ?>
       </ul>
     </nav>

   </div>

 </div>
</div>
</header>

</div>
</div> 