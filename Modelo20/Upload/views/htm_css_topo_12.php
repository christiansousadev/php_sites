<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.margemtopo{
		position: relative;
		width: 100%;
		height: 140px;
		display: none;
	}
	
	.topo12{
		position: relative; 
		background-color: <?=$cores[257]?>;
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

	.mainmenu ul li:hover{
		background-color: transparent !important;
	}

	.mainmenu ul li a {
		font-size: 12px;
	}
	.mainmenu ul li a:hover{
		font-weight: 400;
		background-color: transparent !important;
	}
	.mainmenu ul li a.active{ 
		font-weight: 500;
	}
	.navbar-collapse.collapse {
		padding-top: 7px;
		padding-right: 0px;
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
		margin-left: 15px;
		margin-right: 25px;
		text-align: left;
		display: block;
		line-height: 20px;
		padding: 0px;
		text-decoration: none;		
		background-color: transparent !important;
	}

	.mainmenu_txt{
		padding-top:0px;
		display: block; 
		text-align: right;
		line-height: 15px;
		width: 100%;
		height:25px;
		color:<?=$cores[259]?> !important;  
	}
	.mainmenu ul li ul li .mainmenu_txt{
		padding-left:8px;
		padding-top:8px;
		padding-bottom:8px;
		padding-right: 8px;
		margin-left: 0px;
		text-align: left; 
		background-color:transparent;

		color: <?=$cores[259]?> !important;
	}

	.mainmenu ul li ul li:hover{
		background-color: transparent;
	}
	.submenu_esq{
		float: left;
		width: 45%;
		padding-bottom: 20px;
	}
	.submenu_esq a{
		color: <?=$cores[259]?> !important;
	}
	.submenu_esq a .mainmenu_txt{
		color: <?=$cores[259]?> !important;
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

	.main_header{
		position: relative;
		top: 0px;
		z-index: 999999;
		width: 100%;
	}	
	.main_header, header{
		background: transparent;
	}

	.mainmenu ul li a{
		padding-left:40px;
		position:inherit;
		display: table-cell; 
		width:100%; 
		height:auto;
		padding-top:20px;
		padding-bottom:15px;
	} 
	.mainmenu ul li a:hover {
		background-color: transparent !important;
		color: <?=$cores[262]?> !important;
	}
	.mainmenu ul li a:hover .mainmenu_txt{
		color: <?=$cores[262]?> !important;
	}

	.mainmenu ul{
		text-align: right;
	}
	.mainmenu ul li{
		height: auto;
	}
	.mainmenu_txt{
		height: auto;
		font-size: 14px;
		font-weight: 500;
	}
	.mainmenu ul li ul{
		top:40px;
		width:440px;
		min-width:440px;
		background-color: transparent;
		border:0px;
	}
	.mainmenu ul li ul .setasub{
		position: absolute;
		top: 0px;
		left: 20px;
	}
	.mainmenu ul li ul .setasub i{
		font-size:28px;
		color: <?=$cores[259]?>;
	}


	.submenu_esq{
		width: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);		
		padding-top:25px;
		margin-top:10px;
		background-color: <?=$cores[259]?>;
	}
	.mainmenu ul li ul li .mainmenu_txt{
		font-weight: 400;
	}

	.botao_carrinho2{
		display: none;
	}
	.topo_botao_user2{
		display: none;
	}

	.mainmenu ul li{
		position: relative;
	} 


	.fundo_menu{
		padding:0px;
		margin: 0px;
		padding-right:70px;
		border-top:0px; 
		background-color: <?=$cores[258]?> !important; 
	}

	.logo_div{
		float: left;
		width:25%;
		padding-top:10px;
		text-align: left;
	}
	.logo{
		text-align: left;
		margin-top:20px;
	}
	a.logo{
		display: inline-block;
		width: 100%;
	}
	a.logo img{
		max-width:60%;
		width:60%;
		margin-left:70px;
	}


	.lnks_topo_div{
		text-align: right;
		padding-right:70px;
		padding-top: 20px;
	}

	a.lnks_topo{
		display: inline-block;
		padding-left:45px;
		text-align: right;
		margin-top:0px;
		margin-bottom:15px;
		font-size: 14px;
		color:<?=$cores[260]?>;
	}
	a.lnks_topo i{
		font-size: 14px;
		color:<?=$cores[261]?>;
	}
	a.lnks_topo a{
		color:<?=$cores[260]?>;
		cursor: pointer;
	}
	a.lnks_topo a:hover{
		color:<?=$cores[260]?>;
	}


	.mainmenu_txt{ 
		font-size: 15px !important;
	}

	.topo_direita{
		float: right;
		width:75%;
	}
	.botao_menu_responsivo{
		position: absolute;
		top:7px;
		right: 0px;
		display: none;
		z-index: 9999999999;
		padding: 20px;
	}
	.botao_menu_responsivo_fechar{
		position: absolute;
		top:7px;
		right:0px;
		display: none;
		z-index: 9999999999;
		padding: 20px;
	}

	.whatsapp_topo{
		font-weight: 500;
		font-size: 14px;
		padding-right:3px;
	}

	.anime_menu{

	}



	@media only screen and (max-width:1200px) { 
		
		.mainmenu ul li a{
			padding-left: 25px;
		}
		.mainmenu_txt{ 
			font-size: 14px !important;
		}
		.lnks_topo{ 
			padding-left:30px;
			font-size: 13px;
		}
		.whatsapp_topo{
			font-size: 12px;
		}

	}

	@media only screen and (max-width:1024px) { 

		.mainmenu ul li a{
			padding-left: 25px;
		}
		.mainmenu_txt{ 
			font-size: 13px !important;
		}
		.lnks_topo{ 
			padding-left:30px;
			font-size: 13px;
		}
		.whatsapp_topo{
			display: none;
		}

		.fundo_menu{ 
			padding-right:60px; 
		}
		.logo_div{ 
			width:25%;
			padding-top: 13px;
		}
		a.logo img{
			margin-left: 60px;
		}
		.lnks_topo_div{
			padding-right:60px;
		}
		.margemtopo{
			height: 130px;
		}

	}

	@media only screen and (max-width:990px) {

		.logo_div{ 
			width:25%;
			padding-top: 13px;
		}
		a.logo img{
			margin-left: 60px;
		}

		.fundo_menu{ 
			padding-right:60px;  
		}

		.lnks_topo{
			font-size: 10px;
		} 

		.mainmenu ul li a{
			font-size: 10px;
		}
		.mainmenu_txt{
			font-size: 10px !important;
		}
		.mainmenu ul li a{
			padding-left:18px;
		}
		.mainmenu ul li a{
			padding-top: 13px;
			padding-bottom:8px;
		}
		.lnks_topo{
			padding-left:18px;
		}
		.topo_direita{
			width:73%;
		}

	}
	@media only screen and (max-width:770px) {  

		
		.anime_menu {
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
			-moz-transform: translateY(-50px);
			-webkit-transform: translateY(-50px);
			-o-transform: translateY(-50px);
			-ms-transform: translateY(-50px);
			transform: translateY(-50px);
			visibility: visible;
			opacity: 0;
			height: 0px;
		}
		.anime_menu2{  
			-moz-transform: translateY(0px);
			-webkit-transform: translateY(0px);
			-o-transform: translateY(0px);
			-ms-transform: translateY(0px);
			transform: translateY(0px);
			visibility: visible;
			opacity: 1;
			height:260px;
		}


		.lnks_topo_div{
			display: none;
		}
		.logo_div{  
			float: none;
			position: relative;
			width:100% !important;
			margin:0px !important;
			padding: 0px;
			text-align: left !important;
		}
		a.logo img{
			width: auto !important;
			max-width:70% !important;
			margin-left: 20px;
			height:50px !important;
		}
		.logo{
			text-align: left;
			padding-bottom: 20px;
		}
		
		.navbar-toggle{
			background-color: transparent !important;
			color: <?=$cores[266]?>;
			display: inline-block;
			float: none;
			margin-right: 0px;
		}
		.navbar-toggle i{
			color: <?=$cores[266]?>;
		} 
		a.botao_carrinho{
			display: none;
		}

		.nav {
			display: block !important;
		}

		.setasub{
			color: #fff
		}
		.mainmenu ul li ul{
			width: 100%;
			min-width: 100%;
			top:0px;
			background-color: transparent;
		}
		.submenu_esq{
			background-color: transparent;			
			border: 1px solid #fff;
			padding-top: 15px;
			margin-top: 11px;
		}
		.mainmenu ul li ul li a{
			padding-left: 20px;
		} 

		.mainmenu{
			text-align: left !important;
		}
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

		.mainmenu_txt{
			color:<?=$cores[263]?> !important;
		}		 
		.linha_menu{
			margin-top:10px !important;
		}
		.menu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li a .mainmenu_txt{
			color:<?=$cores[263]?> !important;
		}
		.menu ul li a .mainmenu_txt:hover{
			color:<?=$cores[263]?> !important;
		}
		.mainmenu ul li{
			width: 100% !important;
			max-width: 100% !important;
		}
		.menu ul li ul{
			position: relative;	 
		}
		.mainmenu{
			background-color: <?=$cores[265]?> !important;
			z-index: 999999;
		}
		.navbar-collapse.collapse{
			padding-top: 20px;
			box-shadow:none;
		}

		.mainmenu a{
			width: 100% !important;
			display: block !important;
			color: <?=$cores[263]?> !important;
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
			color: <?=$cores[263]?> !important;
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
			color: <?=$cores[263]?> !important;
			background-color: transparent !important;
		}
		.menu ul li a .mainmenu_txt{
			text-align: right;
			margin-left: 20px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			color: <?=$cores[263]?> !important;
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
		.mainmenu ul li ul{
			position: relative;
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
			border: none;
			box-shadow:none;
			padding: 0px;
			margin: 0px;
			padding-left: 15px;			
		}
		.mainmenu ul li{
			background-color: transparent !important;
		}
		.menu ul li ul li a:hover .mainmenu_txt{
			color: <?=$cores[263]?> !important;
			text-decoration: none;
		}
		.navbar-collapse.collapse{
			background-color: transparent !important;
		}
		.mainmenu_txt{
			text-align: left;
		}
		.navbar-collapse.collapse, .mainmenu{
			background-color: transparent !important;
		}

		.mainmenu ul li ul li a{
			padding-left: 10px;
		}
		.mainmenu ul li ul{
			height: auto !important;
			min-height: 10px;
		}
		.mainmenu ul li ul li a i{
			display: none;
		}
		.mainmenu ul li ul li a:hover{
			padding-left:10px;
		}
		.navbar-collapse.collapse{
			padding-top: 0px;
		}

		.header-middle .container .row .col-sm-8{
			padding-right: 15px;
		}
		.header-middle .container .row .col-sm-4{
			padding-left: 15px;
		}
		.mainmenu_txt{
			font-size:17px !important;
			text-align: left;
			padding-left: 20px;
			width: 100%;
		}
		
		
		.fundo_menu{
			padding-right: 0px;
		} 
		
		.topo_direita{
			float: none;
			width: 100%;
		}
		.navbar-collapse.collapse{
			padding-top:15px;
		}
		.botao_menu_responsivo_fechar{ 
			display: none; 
		}

		.margemtopo{
			height:90px;
		}

		
	}
</style>