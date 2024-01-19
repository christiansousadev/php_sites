<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">


	.header-middle .container .row {
		border-bottom: 0px;
	}
	
	.header-middle {
		background-color: <?=$cores[76]?>;
	}

	.header-middle .container .row {
		border-bottom: 0px;
		margin-bottom: 0px;
		padding-bottom: 0px;
		margin-top: 0px;
		padding-top: 0px;
	}

	.header-bottom {
		padding:0px;
		margin: 0px;
		background-color: <?=$cores[54]?>;
		border-top:0px; 
	}

	.logo{
		text-align: left;
		margin-top:20px;
	}
	.logo img{ 
		max-width:80%;
		margin-top: 0px;
	}

	.busca_div{
		margin-top:15px;
		margin-bottom:0px;
		padding-right:20px;
		text-align: center;
		width: 100%;
	}

	.busca_input{
		border-top:1px solid <?=$cores['77']?>;
		border-left:1px solid <?=$cores['77']?>;
		border-bottom:1px solid <?=$cores['77']?>;
		border-right: 0px solid transparent;
		height:40px;
		border-radius: 0px; 
		color:<?=$cores['78']?> !important;
		font-family: arial;
		font-size: 14px;
		width: 300px;
		padding: 14px 35px 13px 15px;
		border-radius: 0;
		box-shadow: none;
		background-color: <?=$cores['87']?> !important;
	}

	.busca_botao{
		background-color: <?=$cores['87']?> !important;
		border-top:1px solid <?=$cores['77']?>;
		border-right:1px solid <?=$cores['77']?>;
		border-bottom:1px solid <?=$cores['77']?>;
		height:40px;
		width: 50px;
		border-radius: 0px; 
		background-repeat: no-repeat;
		background-position: center;
		color:<?=$cores['78']?> !important;
		font-size: 20px;
	}

	a.botao_carrinho{
		position: relative;
		display: inline-block;
		width: 160px; 
		margin-left:15px;
		overflow: hidden; 
	}

	.submenu_esq{
		margin-top: 20px;
	}
	.botao_carrinho_esq{
		width:30%; 
		margin-left:15%;
		margin-right:5%;
		float: left;
		margin-top:10px;
		text-align:center;
		font-size:38px;
		color:<?=$cores[89]?>;
	}
	.botao_carrinho_dir{
		width:50%; 
		float: left;
		color: <?=$cores[89]?>;
		text-align: center;
		padding-top:15px;
	}

	.botao_carrinho_dir span{
		color: <?=$cores[88]?>;
		font-weight: bold;
		font-size: 16px; 
	}

	.div_botoes_topo{
		text-align: right;
		width: 100%; 
		color: <?=$cores[88]?>;
	}
	.div_botoes_topo i{
		font-size:19px;
		color: <?=$cores[88]?>;
	}

	a.botao_conta_topo{
		display: block;
		float: left;
		padding-left: 10px;
		padding-right: 10px;
		padding-top:9px;
		padding-bottom:10px;
		text-align: center;
	}
	a.botao_conta_topo i{
		color:<?=$cores[89]?>;
	}
	a.botao_conta_topo span{
		display:block;
		font-size:10px;
		font-weight: 400;
		color:<?=$cores[88]?>;
		padding-top:8px; 
	}


	.topo_redes{
		margin-top:15px;
		width:90%;
		height:50px;
		text-align: right;
		background-color: <?=$cores[85]?>;
		float: left;
		color: <?=$cores[86]?>;
	}
	.topo_redes_triangulo {
		margin-top:15px;
		width: 0;
		height: 0;
		border-bottom:50px solid <?=$cores[85]?>;
		border-left:40px solid transparent;
		float: left;
	}

	.fone_topo{
		float: left;
		margin-top:11px;
		color:<?=$cores[86]?>;
		font-size: 15px;
		font-weight: bold;
		border-right:1px solid <?=$cores[86]?>;
		padding-top: 3px;
		padding-right:20px; 
		text-align: left;
	}
	.fone_topo i{
		font-size: 15px;
		color:<?=$cores[86]?>;
	}

	.whats_topo{
		float: left;
		margin-top:11px;
		color:<?=$cores[86]?>;
		font-size: 15px;
		font-weight: bold;
		border-right:1px solid <?=$cores[86]?>;
		padding-top: 3px;
		text-align: left;
		padding-left:20px;
		padding-right:20px;
	}
	.whats_topo i{
		font-size: 15px;
		color:<?=$cores[86]?>;
	}

	.redes_topo{
		float: left;
		text-align: center;
		padding-top: 10px;
		padding-left: 20px;
	}
	a.redes_topo_item{
		display: inline-block;
		padding-left:5px;
		padding-right: 5px;
		margin-top:2px;
	}
	a.redes_topo_item img{
		height: 24px;
	}


	.mainmenu ul li a{ 
		font-weight: 400;
	}
	.mainmenu ul li a { 
		font-size: 20px;
	}
	.mainmenu ul li a:hover{
		color:<?=$cores[93]?>;
		font-weight: 400;
	}
	.mainmenu ul li a.active{ 
		font-weight: 500;
	}

	.navbar-nav li ul.sub-menu li a:hover {

	}

	.navbar-collapse.collapse {
		padding-top: 0px; 
	}

	.navbar-header{
		width: 100%;
		text-align: center;
	}

	.mainmenu ul {
		width: 100%;
		height: 95px;
		text-align: center; 
	}
	.mainmenu ul li{
		float: none;
		display: inline-block;
		margin:0px;
		padding:0px;
		position:inherit;
		height:92px;
	}
	.mainmenu ul li a{
		position:inherit;
		display: table-cell;
		font-size: 12px; 
		width:130px; 
		height:auto;
		padding-top:15px;
		padding-bottom:15px;
		padding-left:5px;
		padding-right:5px;
	}
	.mainmenu ul li:hover, .mainmenu ul li a:hover{

	} 
	.mainmenu_txt{
		padding-top:0px;
		display: block;
		font-size:12px;
		text-align: center;
		line-height: 15px;
		width: 100%;
		height:25px;
		color: <?=$cores[56]?> !important;
	}
	.mainmenu_img{
		display: block;
		width:100%;
		height:42px;
		text-align: center;
	}
	.mainmenu ul li img{
		max-width: 42px;
		max-height: 42px;
	}

	.mainmenu ul li ul{
		position: absolute;
		top:87px;
		width:100%;
		min-width:100%;
		height: auto;
		min-height:200px;
		border-left: 1px solid <?=$cores[94]?> !important;
		border-right: 1px solid <?=$cores[94]?> !important;
		border-bottom: 1px solid <?=$cores[94]?> !important;
		border-top: 1px solid <?=$cores[94]?> !important;
		background-color: <?=$cores[61]?> !important;
		margin-left:20px;
		margin-right:20px;
		margin-top: 0px;
	}
	.mainmenu ul li ul li{
		position: relative;
		width:50%;
		height: auto;
		padding: 0px;
		margin: 0px;
		text-align: left;
		max-width: 50%;
		margin-top:1px;
		display: block;
		float: left;
		border-left: 1px solid <?=$cores[62]?> !important;
	}
	.mainmenu ul li ul li a{
		position: relative; 
		width: auto;
		height: auto;		
		margin-left: 25px;
		margin-right: 25px;
		text-align: left;
		display: block;
		line-height: 20px;		 
		padding: 0px;
		text-decoration: none;
	}
	.mainmenu ul li ul li a:hover{
		position: relative; 
		width: auto;
		height: auto; 
		margin-left: 25px;
		margin-right: 25px;
		text-align: left;
		display: block;
		line-height: 20px;
		padding: 0px;
		text-decoration: none;
		background-color:transparent;
	}
	.mainmenu ul li ul li a .mainmenu_img{
		display: none !important;
	}
	.mainmenu ul li ul li .mainmenu_txt{
		padding-left:8px;
		padding-top:8px;
		padding-bottom:8px;
		padding-right: 8px;
		margin-left: 0px;
		text-align: left; 
		background-color:transparent;
		font-size: 14px;
		color: <?=$cores[62]?> !important;
	}
	.mainmenu ul li ul li:hover{
		background-color: transparent;
	}
	.mainmenu ul li ul li .mainmenu_txt:hover{

	}

	.mainmenu_titulo{
		padding-left:20px;
		padding-top:40px;
		padding-bottom:20px;
		text-align: left;
		font-size: 22px;
		color:<?=$cores[90]?>;
		font-weight: 700;
		width:100%;

	}
	.mainmenu_banner{
		width:100%;
		height:auto;
		max-width: none;
		max-height: none;   
	}
	.mainmenu ul li ul img{
		width: 100%;
		height:auto;
		max-width:none;
		max-height:none;
	}

	.menu_titulo_marcas{
		display: block;
		float: none;
		position: relative;
		padding-left:30px;
		padding-top:40px;
		padding-bottom:17px;
		text-align: left;
		font-size: 22px;
		color:<?=$cores[90]?>;
		font-weight: 700;
		width:100%;
	}

	.navbar-toggle{
		color: <?=$cores[56]?>;
	}

	.mainmenu_txt{
		display: block;
		font-size: 13px !important;
		text-align: center;
		line-height: 13px;
		width: 100%; 
	}

	@media (max-width: 1200px){

		.mainmenu ul li a{ 
			font-size: 18px; 
			width: 100px; 
			height: 100px;
			padding-top:10px;
			padding-bottom: 10px;
			padding-left:5px;
			padding-right:5px; 
		}

		.topo_redes{
			margin-top: 15px;
			width: 92%;
			height:50px;
			text-align: right;
		}

		.whats_topo{
			float: left;
			width:170px;
			margin-top:11px; 
			font-size: 15px;
			font-weight: bold; 
			padding-top: 3px;
			text-align: left;
			padding-left:20px;
			padding-right:0px;
		}
		.whats_topo i{
			font-size: 15px; 
		}

		.redes_topo{ 
			float: left;
			width:120px;
			text-align: center;
			padding-top: 10px; 
		}
		a.redes_topo_item{
			display: inline-block;
			padding-left:2px;
			padding-right:2px;
			margin-top:2px;
		}
		a.redes_topo_item img{
			height: 20px;
		}

		a.botao_conta_topo{
			padding-left: 5px;
			padding-right: 5px;
		}
		a.botao_conta_topo span{
			font-size:9px;
		}

		.busca_div{
			padding-right: 0px;
		}
	}

	@media (max-width: 990px){

		.header-bottom .col-sm-3 {
			top: 27px;
		}

		.navbar-toggle{
			background-color: transparent !important;
			margin-right: 0px;
			border-radius: 0px;
			border: 0px;
			font-size: 17px; 
			padding-bottom: 5px; 
			margin-top:7px;
		}

		.mainmenu ul li {
			height: 75px;
		}
		.mainmenu ul li img{
			max-width:35px;
			max-height:35px;
		}
		.mainmenu ul li a{ 
			font-size: 11px; 
			width: 80px; 
			height:80px;
			padding-top:10px;
			padding-bottom: 10px;
			padding-left:5px;
			padding-right:5px; 
		} 
		.mainmenu ul li ul{
			top: 80px;
		}

		.mainmenu_titulo{
			font-size: 18px;
		}
		.mainmenu_txt{
			display: block;
			font-size: 11px;
			text-align: center;
			line-height: 14px;
			width: 100%; 
		}
		.mainmenu_img{
			display: block;
			width:100%;
			height:40px;
			text-align: center;
		}

		.botao_carrinho_dir span{
			font-size: 14px;
		}

		.redes_topo{
			display: none;
		}
		.botao_conta_topo{
			font-size: 12px;
		}
		.botao_conta_topo img{
			display: none;
		}
		.topo_redes{
			background: none;
			width: 100%;
		}
		.topo_redes_triangulo{
			display: none;
		}
		.div_botoes_topo{
			text-align: right;
			width: 100%;
		}
		.whats_topo{
			color:<?=$cores[88]?>;
			font-size: 14px;
			border:none;
			width:auto;
			padding-right:0px;
			padding-left:10px; 
			padding-top: 0px;
			margin-top: 10px;
			float:none;
			display: inline-block;
		}
		.whats_topo i{ 
			color:<?=$cores[88]?>;
			font-size: 13px;
		}
		.fone_topo{
			color:<?=$cores[88]?>;
			font-size: 14px;
			border:none;
			width:auto;
			padding-left:10px;
			padding-right:0px;
			padding-top: 0px;
			margin-top:10px;
			float:none;
			display: inline-block;
		}
		.fone_topo i{
			color:<?=$cores[88]?>;
			font-size: 13px;
		}

		a.botao_conta_topo{
			padding-left: 5px;
			padding-right: 5px;
		}
		a.botao_conta_topo span{
			font-size:8px;
		}

	}

	@media (max-width: 770px){
		
		.busca_div{
			padding-right: 20px;
		}
		
		.logo{
			text-align: center;
			margin-top:10px;
			height: auto;
		}
		.logo img{
			max-width:80%;
			max-height:none;
			height: auto;
		}
		a.botao_carrinho{
			position: absolute;
			z-index: 999999999999;
			top:-5px;
			right:15px;
		}

		.botao_minha_conta{
			margin-top: 20px;
		}
		.mainmenu ul li{
			padding-left: 0px;
			padding-right: 0px;
			padding-top:5px;
			padding-bottom:5px; 
		}
		.mainmenu ul li:last-child {
			padding-bottom: 0px;
		}

		.navbar-collapse{
			box-shadow:none; 
			margin-top:20px;
			padding-top:20px;
		}
		.texto_menu_resp {
			display: block;
		}

		.navbar-toggle { 
			margin-right: 0px;
			margin-top:7px;
			border-radius: 0px;
			border: 0px;  
			font-size: 17px;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		.search_box {
			margin-top: 0px;
		}

		.header-bottom .col-sm-3 {
			top: 27px;
		}

		.navbar-collapse{
			border:none !important;
			padding: 0px;
		}
		.navbar-toggle{
			background-color: transparent !important;
			margin-right: 0px;
			border-radius: 0px;
			border: 0px !important;
			font-size: 17px;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		.mainmenu{
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px; 
			position: relative;
			left: 0px;
			top: 0px;
			float: none;
			text-align: left;
		}
		.mainmenu_titulo{
			display: none;
		}
		.mainmenu_img{
			display: none;
		}
		.mainmenu ul{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px; 
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li:hover{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li:first-child{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li ul { 
			list-style: none;
			background-color: transparent !important;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			border: none !important;
			width: 100% !important;
		}
		.mainmenu ul li ul li{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li a{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			padding-top: 1px;
			padding-left:10px;
			padding-bottom:10px;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li a:hover{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			padding-top: 1px;
			padding-left:10px;
			padding-bottom:10px;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li ul li a{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			padding-left:30px;
			padding-bottom:15px;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu ul li ul li a:hover{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			padding-left:30px;
			padding-bottom:15px;
			max-width: 100% !important;
			width: 100% !important;
		}

		.mainmenu_txt{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}
		.mainmenu_txt:hover{
			list-style: none;
			background-color: transparent;
			border:0px !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto;
			height: auto;
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
		}

		.mainmenu ul li ul li .mainmenu_txt{
			list-style: none;
			background-color: transparent;
			border: none !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto; 
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
			color:<?=$cores[56]?> !important;
		}
		.mainmenu ul li ul li .mainmenu_txt:hover{
			list-style: none;
			background-color: transparent;
			border: none !important;
			padding: 0px;
			margin:0px;
			display: block;
			position: relative;
			left: 0px;
			top: 0px;
			width: 100%;
			height: auto;
			max-width:auto
			min-width:auto; 
			max-height:auto;
			min-height:auto; 
			font-size: 16px;
			float: none;
			text-align: left;
			max-width: 100% !important;
			width: 100% !important;
			color:<?=$cores[56]?> !important;
		}

		.whats_topo{
			margin:0px;
			padding: 0px;
			width:50%;
			float: left;
			margin-top:10px;
		}
		.topo_redes{
			margin:0px;
			padding: 0px;
			height: auto; 
			z-index: -100;
		}
		.header-middle{
			padding-bottom:20px;
		}

		.div_botoes_topo{
			padding-top: 15px;
			padding-left:15px;
		}
		.fone_topo{
			width:50%;
			float: right;
			padding-right: 15px;
			text-align: right;
		}

		.mainmenu ul li ul{
			margin-top: -15px;
		}

		.navbar-collapse.collapse {
			padding-top: 0px;
			padding-bottom: 20px;
		}
		
	}

</style>