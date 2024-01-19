 

<div class="modal-header"> 
	<h4 class="modal-title">Detalhes do Pedido <?=$data->id?></h4>
</div>

<div class="modal-body">	 

	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="div_form" >
				<label>Plano: <?=$data->plano_titulo?></label> 	
			</div>
 			
 			<div class="div_form" >
				<label>Limite de anúncios: <?=$data->plano_limite?></label> 	
			</div>

			<div class="div_form" >
				<label>Anúncios utilizados: <?=$data->plano_utilizado?></label> 	
			</div>

			<div class="div_form" >
				<label>Status: <?php 
				if($data->status == 2){
					echo "Aprovado";
				} else {
					echo "Aguardando Pagamento";
				}
				
				?></label> 	
			</div>

			<hr>

			<div style="font-weight: bold; font-size: 15px;">Histórico</div>

			<?php

			foreach ($lista as $key => $value) {
				
				echo "<div style='margin-top:10px; font-size:13px;'>".$value['data']." - Ref. ".$value['ref']."</div>";

			}

			?>

		</div>

	</div>

</div>