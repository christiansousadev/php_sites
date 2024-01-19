<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<?php
//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
?>

<style type="text/css">
	.news_botao_<?=$conteudo_id?> {
		background-color:<?=$cores['18']?> !important;
		color:<?=$cores['19']?> !important;
	}
	.news_botao_<?=$conteudo_id?>:hover {
		background-color:<?=$cores['20']?> !important;
		color:<?=$cores['21']?> !important;
	}
</style>
<section id="section-news-fone-<?=$conteudo_id?>" class="animate-effect" style="background-color:<?=$cores[16]?> !important; color:<?=$cores[17]?> !important; padding-bottom:50px; ">	
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" > 
				<div class="news_texto" style="color:<?=$cores[17]?> !important;">	
					<?=$conteudo_sessao['descricao']?>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-xs-12 col-sm-5 col-md-5" > 
				<input type="text" name="news_fone_nome_<?=$conteudo_id?>" id="news_fone_nome_<?=$conteudo_id?>" class="form_news" placeholder="NOS FALE SEU NOME!">	
			</div>
			
			<div class="col-xs-12 col-sm-5 col-md-5" > 
				<input type="text" name="news_fone_numero_<?=$conteudo_id?>" id="news_fone_numero_<?=$conteudo_id?>" class="form_news" placeholder="INFORME SEU WHATSAPP"  onKeyPress="Mascara(this,telefone)" onKeyDown="Mascara(this,telefone)" maxlength="15" >
			</div>

			<div class="col-xs-12 col-sm-2 col-md-2" > 
				<button class="botao_padrao news_botao news_botao_<?=$conteudo_id?>" onclick="cadastro_fone_<?=$conteudo_id?>();" ><i class="fa fa-arrow-right" aria-hidden="true"></i>
 SOLICITAR</button></div>
			</div>

		</div>

	</div>
</section>