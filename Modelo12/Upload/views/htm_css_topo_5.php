<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.margemtopo{
		position: relative;
		width: 100%;
		height: 190px;
		display: none;
	}
	
	.header-middle .container .row {
		border-bottom: 0px;
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
		border-top:0px; 
	}
	.topo_superior{
		background-color:<?=$cores[143]?>;
		color:<?=$cores[144]?>;
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
		text-align: center;
		width: 100%;
	}
	a.botao_carrinho{
		position: relative;
		display: inline-block;
		width: 160px; 
		margin-left:15px;
		overflow: hidden; 
	}
	.botao_carrinho_esq{
		width:30%; 
		margin-left:15%;
		margin-right:5%;
		float: left;
		margin-top:10px;
		text-align:center;
		font-size:38px;
	}
	.botao_carrinho_dir{
		width:50%; 
		float: left;
		text-align: center;
		padding-top:15px;
	}
	.botao_carrinho_dir span{
		font-weight: bold;
		font-size: 16px; 
	}
	.div_botoes_topo{
		text-align: right;
		width: 100%; 
	}
	.div_botoes_topo i{
		font-size:16px; 
		color:<?=$cores[144]?>;
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
	a.botao_conta_topo span{
		display:none;
		font-size:10px;
		font-weight: 400;
		padding-top:8px; 
	} 


	.mainmenu ul li a{ 
		font-weight: 400;
	}
	.mainmenu ul li a { 
		font-size: 20px;
	}
	.mainmenu ul li a:hover{
		font-weight: 400;
	}
	.mainmenu ul li a.active{ 
		font-weight: 500;
	}
	.navbar-collapse.collapse {
		padding-top: 7px;
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
		font-size: 12px !important;
		width:130px; 
		height:auto;
		padding-top:15px;
		padding-bottom:15px;
		padding-left:5px;
		padding-right:5px;
	} 
	.mainmenu_txt{
		padding-top:0px;
		display: block;
		font-size: 12px;
		text-align: center;
		line-height: 15px;
		width: 100%;
		height:25px;
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
		margin-left:0px;
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
		display: block;
		float: left; 
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
		background-color: transparent !important;
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
		background-color: transparent !important;
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
		color: <?=$cores[153]?>
	}
	.mainmenu ul li ul li:hover{
		background-color: transparent;
	}
	.submenu_esq{
		float: left;
		width: 45%;
		padding-bottom: 20px;
	}
	.submenu_meio{
		float: left;
		width: 20%;
		padding-bottom: 20px;
	}
	.submenu_dir{
		float: right;
		width: 35%;
	}
	.mainmenu_titulo{
		padding-left:20px;
		padding-top:40px;
		padding-bottom:20px;
		text-align: left;
		font-size: 22px;
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
	
	
	
	.topo5{
		background-color: <?=$cores[142]?>;
	}
	.main_header{
		position: relative;
		top: 0px;
		z-index: 999999;
		width: 100%;
	}	
	.main_header, header{
		background: transparent;
	}
	.topo_div1{
		text-align: right;
		width: 100%;
		margin-top:5px;
	}
	.main_header.type2 header nav ul.menu > li:hover > .sub-nav{
		top:80px !important;
	}
	header nav ul.menu > li{
		padding: 0px;
		margin: 0px;
	}
	header nav ul.menu > li > a{
		display: inline-block; 
		font-size: 15px;
		margin: 0px;
		margin-top: -15px;
		padding-top:20px;
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom:20px;
		font-weight:400;
		text-decoration: none !important;
	}
	header nav ul.menu > li > a:hover{
		color:<?=$cores[146]?> !important;
		background-color: <?=$cores[148]?>;
		text-decoration: none !important;
	}
	header nav {
		float: none;
		text-align:left; 
	}

	header nav ul.menu > li:hover > .sub-nav{
		top:60px !important;
	}
	header nav {
		float: none;
		text-align:left; 
	}

	header nav ul.menu > li:hover > a, header nav ul.menu > li.current-menu-ancestor > a, header nav ul.menu > li.current-menu-item > a, header nav ul.menu > li.current-menu-parent > a{

	}

	.menu{
		margin:0px;
		padding: 0px;
		text-align: center;
	}	
	.menu li{
		display: inline-block;
	}
	.menu li a{
		margin: 0px;
		padding: 0px;
		margin-right: 15px;
		padding-top: 5px;
		padding-bottom: 5px;
		color:<?=$cores[146]?> !important;
	}

	a.redes_topo_item{
		margin-top:4px;
	}

	.topo2_superior{
		background-color: <?=$cores[143]?>;
		color: <?=$cores[144]?>;
	}

	.topo2_superior_dir{
		text-align: right;
		color: <?=$cores[144]?>;
	}

	.topo_contatos_item{
		display: inline-block;
		padding-right: 15px;
		font-size: 12px;
		padding-top: 6px;
	}

	a.botao_conta_topo{
		display: inline-block;
		padding-top:5px;
		padding-bottom: 5px;
		float: none;
		color: <?=$cores[144]?>;
	}
	a.botao_conta_topo span{
		color: <?=$cores[144]?>;
	}

	.logo_div{
		width: 100%;
		text-align: center;
		margin-top:20px;
		margin-bottom: 20px;
	}
	.logo{
		display: inline-block;
		width:50%;
		max-width:400px;
		margin-top: 0px;
		text-align: center
	}
	.logo img{
		width: 100%;
	}
	
	a.redes_topo_item{
		margin-top: 5px;
	}

	.menu{
		margin:0px;
		padding: 0px;
	}	
	.menu li{
		display: inline-block;
	}
	.menu li a{
		margin: 0px;
		padding: 0px;
		padding-top: 5px;
		padding-bottom: 5px;
		color:<?=$cores[146]?> !important;
	}
	.menu li a:hover{
		background-color:<?=$cores[150]?> !important;	
		color:<?=$cores[151]?> !important;	
	}

	.sub-menu{
		display: none;
	}

	.menu ul{
		text-align:left;
		margin-left:0px;
	}
	.menu ul li{
		height: auto;
	}
	.menu ul li:hover{
		background-color: transparent;
	}
	.menu ul li a{
		width: auto;
		padding-top:20px;
		padding-left:12px;
		padding-right:12px;
		padding-bottom:20px;
		display: inline-block;
		height: auto;
		background-color: <?=$cores[145]?> !important;
		color: <?=$cores[146]?> !important;
	}
	.menu ul li a .mainmenu_txt{
		color: <?=$cores[146]?> !important;
	}

	.menu ul li a:hover{
		width: auto;
		padding-top:20px;
		padding-left:12px;
		padding-right:12px;
		padding-bottom:20px;
		display: inline-block;
		height: auto;
		background-color: <?=$cores[150]?> !important;
		color: <?=$cores[151]?> !important;
	}
	.menu ul li a:hover .mainmenu_txt{
		color: <?=$cores[151]?> !important;
	}

	.menu ul li ul{
		top:40px;
		width:440px;
		min-width:440px;
		background-color: transparent;
		border:0px;
	}
	.menu ul li ul .setasub{
		position: absolute;
		top: 0px;
		left: 20px;
		color: <?=$cores[152]?>;
	}
	.menu ul li ul .setasub i{
		font-size:28px;
		color: <?=$cores[152]?>;
	}
	.submenu_esq{
		width: 100%; 
		box-shadow: 0 6px 12px rgba(0,0,0,.175);		
		padding-top:20px;
		margin-top:10px;
		background-color:<?=$cores[152]?>;
	}
	.menu ul li ul li .mainmenu_txt{
		font-weight: 400;
		color:<?=$cores[153]?> !important;
	}
	.mainmenu_txt{
		font-size: 13px;
		height: auto;
		font-weight:500;	
		color:<?=$cores[151]?> !important;
	}

	.botaomenuresponsivo {
		display: none;
		text-align: center;
		width: 100%;
		margin-top: 10px;
		margin-bottom: 10px;
		padding-bottom: 10px;
		font-size: 16px;
		color:<?=$cores[155]?>;
		cursor:pointer;
	}

	a.redes_topo_item{
		margin-top:4px;
	}
	.navbar-collapse.collapse{
		margin-top: -15px;
	}


	.navbar-collapse.collapse{
		text-align: center;
	}
	.menu ul li{
		position: relative;
	}
	.menu ul li ul{
		position: absolute;
		left: 0px;

	}

	.menu_borda{
		position: relative; width: 100%; padding-top: 15px;
		border-top:1px solid <?=$cores[250]?>;
	}

	.topo_contatos{
		text-align: left;
		width: 100%;
	}

	@media only screen and (max-width: 990px) {

		header nav ul.menu > li > a{ 
			font-size: 13px;
			padding-left: 5px;
			padding-right: 5px;
			padding-top:15px;
			padding-bottom:15px;
		}
		a.redes_topo_item{
			margin-top:0px;
		}
		.logo{
			padding-top:10px;
		}
		.logo img{
			height: auto;
		}
		a.botao_conta_topo i{
			font-size: 15px;
			padding-top:3px;
			padding-bottom: 3px;
		}
		a.botao_conta_topo span{
			font-size: 11px;
		}
		.mainmenu_txt{
			font-size: 13px;
		}

		.menu ul li a{
			padding-top: 13px;
			padding-bottom:13px;
		}
		.menu ul li a:hover{
			padding-top: 13px;
			padding-bottom:13px;
		}

		.margemtopo{
			height: 180px;
		}

	}

	@media only screen and (max-width: 770px) {

		.mainmenu ul li ul .setasub i{
			display: none;
		}
		
		.menu{
			text-align: center;
		}
		header nav ul.menu > li > a{ 
			font-size: 12px;
			padding-left: 5px;
			padding-right: 5px;
			padding-top:10px;
			padding-bottom:10px;
		}
		a.redes_topo_item{
			margin-top:0px;
		}
		.logo{
			padding-top:0px;
		}
		.logo img{
			height: auto;
		}
		a.botao_conta_topo i{
			font-size:15px;
			padding-top:5px;
		}
		a.botao_conta_topo span{
			font-size:10px;
		}
		.topo2_superior_esq{
			display: none;
		}
		.topo2_superior_dir{
			text-align: center;
		}
		a.botao_conta_topo{
			padding-left:3px;
			padding-right:3px;
			padding-top:0px;
			text-align: center;
		}
		.topo_div1{
			text-align: center;
		}
		.logo_div{
			width: 100%;
			text-align: center;
		}
		.logo_div img{
			width: 60%;
		}
		.logo{
			text-align: center;
			width: 80%;
		}
		.mainmenu_txt{
			color:<?=$cores[155]?> !important;
		}
		.botaomenuresponsivo {
			display:block;
			color:<?=$cores[156]?>;
		}
		.linha_menu{
			margin-top:10px !important;
		}
		.menu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li a .mainmenu_txt{
			color:<?=$cores[155]?> !important;
		}
		.menu ul li a .mainmenu_txt:hover{
			color:<?=$cores[155]?> !important;
		}
		.mainmenu ul li{
			width: 100% !important;
			max-width: 100% !important;
		}
		.menu ul li ul{
			position: relative;	 
		}
		.mainmenu{
			background-color: <?=$cores['154']?> !important;
			z-index: 999999;
		}
		.navbar-collapse.collapse{
			padding-top: 20px;
			box-shadow:none;
		}

		.mainmenu a{
			width: 100% !important;
			display: block !important;
			color: <?=$cores['155']?> !important;
			background-color: transparent !important;
			padding-top: 20px;
		}
		.navbar-collapse.collapse{
			margin-top: 0px;
		}
		.menu ul li a{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores['155']?> !important;
			background-color: transparent !important;
		}
		.menu ul li a:hover{
			width: 100%;
			margin-left: 0px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom:10px;
			padding-top:10px;
			text-align: left;
			color: <?=$cores['155']?> !important;
			background-color: transparent !important;
		}
		.menu ul li a .mainmenu_txt{
			text-align: left;
			margin-left: 20px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			color: <?=$cores['155']?> !important;
			font-weight: bold;
		}
		.mainmenu ul li ul{
			padding: 0px !important;
			margin: 0px !important;
			background-color: transparent !important;
		}
		.menu ul li ul{
			top: 0px;
			position: relative;
			width: 100% !important;
			min-width:100% !important;
			height: auto !important;
			min-height:10px;
			background-color: transparent !important;
		}
		.mainmenu ul li ul li{
			width: 100% !important;
			max-width:100% !important;
		}
		.mainmenu ul{
			height: auto !important;
		}
		.submenu_esq{
			background-color: transparent !important;
			box-shadow:none;
			padding: 0px;
			margin: 0px;
			padding-left: 15px;

		}
		.mainmenu ul li{
			background-color: transparent !important;
		}
		.menu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[155]?> !important;
			text-decoration: none;
		}


		.topo_contatos{
			text-align: center;
		}
		.topo_contatos_item{
			padding-left:5px;
			padding-right:5px;
		}

		.div_botoes_topo{
			text-align: center;
			margin-top: 5px;
		}
		.mainmenu ul li a.active{
			padding-left: 0px;
		}

		.topo_superior{
			display: none !important;
		} 
		.menu_borda{
			padding-top: 5px;
		}
		.botaomenuresponsivo{
			padding-bottom: 5px;
		}

		.margemtopo{
			height: 140px;
		}

	}	


	@media only screen and (max-width: 520px) {

		.margemtopo{
			height: 130px;
		}

	}

	@media only screen and (max-width: 430px) {

		.margemtopo{
			height: 120px;
		}

	}

</style>