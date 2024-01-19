<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.rodape {
		background-color: <?=$cores[5]?>;
		color: <?=$cores[6]?>;
		padding-top: 20px; 
	}

	.footer-grid ul, .footer-grid ul li{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}  
	.footer-grid ul li a{
		display: block;
		border-bottom: 1px solid rgba(201, 201, 201, 0.05);
		padding-bottom: 5px;
		margin-bottom: 5px;
		padding-top: 0px;
		font-size: 16px;
		color: <?=$cores[6]?> !important;
	}
	.footer-grid h3{
		font-size: 1.4em;
		text-transform: uppercase;
		margin-bottom:30px;
		font-weight: normal;
		color: <?=$cores[6]?> !important;
	}
	.rodape_contatos{
		font-size:13px;
		color: <?=$cores[6]?> !important;
		line-height:16px;
	}
	.rodape_copy{
		background-color: <?=$cores['2']?> !important;
	}
	.rodape_copy a{
		width: 100%;
		text-align: center; 
		padding-bottom: 20px;
		padding-top:20px;
		display: block;
		font-size: 13px;
		background-color: <?=$cores['2']?>;
		color: <?=$cores['1']?> !important;
	}
	.rodape_copy a:hover{
		color: <?=$cores['1']?>;
	}

	.categorias_rodape ul li a{
		font-size: 15px !important;
		border-bottom:0px;
		padding-bottom: 0px;
	}

	.redessociais img{
		width: 30px;
	}
	

	
	@media (max-width: 990px){

		.rodape_copy_esq{
			text-align: center;
		}
		.rodape_copy_dir {
			text-align: center;
			padding-top: 0px;
		}

	}

	@media (max-width:768px){

		.rodape_copy_esq{
			text-align: center;
		}
		.rodape_copy_dir {
			text-align: center;
			padding-top: 0px;
		}
		
	}

</style>