<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>

<?php
//echo "<pre>"; print_r($conteudo_sessao['cores']['detalhes']); echo "</pre>";
$cores = $conteudo_sessao['cores']['lista'];
?>

<style type="text/css">
	.news_botao_<?=$conteudo_id?> {
		background-color:<?=$cores[12]?> !important;
		color:<?=$cores[13]?> !important;
	}
	.news_botao_<?=$conteudo_id?>:hover {
		background-color:<?=$cores[14]?> !important;
		color:<?=$cores[15]?> !important;
	}
</style>
<section id="section-news-email-<?=$conteudo_id?>" class="" style="background-color:<?=$cores[10]?> !important; color:<?=$cores[11]?> !important; padding-bottom:50px; ">	
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" > 
				<div class="news_texto" style="color:<?=$cores[11]?> !important;">	
					<?=$conteudo_sessao['descricao']?>
				</div>
			</div>
		</div>

		<div class="row">
			
			<div class="col-xs-12 col-sm-5 col-md-5" > 
				<input type="text" name="news_nome_<?=$conteudo_id?>" id="news_nome_<?=$conteudo_id?>" class="form_news" placeholder="Digite seu nome">	
			</div>
			
			<div class="col-xs-12 col-sm-5 col-md-5" > 
				<input type="text" name="news_email_<?=$conteudo_id?>" id="news_email_<?=$conteudo_id?>" class="form_news" placeholder="Digite seu e-mail">
			</div>
			
			<div class="col-xs-12 col-sm-2 col-md-2" > 
				<button class="botao_padrao news_botao news_botao_<?=$conteudo_id?>" onclick="cadastro_news_<?=$conteudo_id?>();" >CADASTRAR</button></div>
			</div>

		</div>

	</div>
</section>