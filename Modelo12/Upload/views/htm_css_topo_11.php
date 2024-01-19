<?php if(!isset($_base['libera_views'])){ header("HTTP/1.0 404 Not Found"); exit; } ?>
<style type="text/css">

	.margemtopo{
		position: relative;
		width: 100%;
		height:255px;
		display: none;
	}
	
	.banner_topo .rslides img{
		max-height: 100px;
	}

	.topo11{
		background-color: <?=$cores[237]?>;
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
		background-color: <?=$cores[238]?>;
		padding-top:0px;
	}
	.logo{
		text-align: center;
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

	.email_topo{
		float: left;
		margin-top:36px;
		font-size: 15px;
		font-weight: bold;
		padding-top: 3px;
		padding-right:20px; 
		text-align: left;
		color:<?=$cores[251]?>;
	}
	.email_topo i{
		font-size: 15px;
	}
	.whats_topo{
		float: left;
		margin-top:35px;
		font-size: 16px;
		font-weight: bold;
		padding-top: 3px;
		text-align: left;
		padding-left:20px;
		padding-right:20px;
		color:<?=$cores[251]?>;
	}
	.whats_topo i{
		font-size: 15px;
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
		font-size: 12px; 
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
		color:<?=$cores[239]?> !important; 
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
	.mainmenu ul li ul li .mainmenu_txt{
		padding-left:8px;
		padding-top:8px;
		padding-bottom:8px;
		padding-right: 8px;
		margin-left: 0px;
		text-align: left; 
		background-color:transparent;
		font-size: 14px; 
		color: <?=$cores[240]?> !important;
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
		color: <?=$cores[240]?> !important;
	}
	.submenu_esq a .mainmenu_txt{
		color: <?=$cores[240]?> !important;
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

	.logo_div{
		position: absolute;
		left: 0px;
		top: 0px;
		width:80%;
		margin-right: 20%;
		padding: 20px;
		z-index: 9999; 
	}
	a.logo{
		display: inline-block;
		width: 100%;
		margin: 0px;
	}
	a.logo img{
		width: 100%;
		max-width: 100%;
	}

	.busca_div{
		margin-top:25px;
		margin-bottom:20px;
		text-align: center;
		width: 100%;
	}
	.topo_medio{
		text-align: right;
		width: 100%;
	}
	.busca_input{
		display: inline-block;
		border-top:1px solid <?=$cores['241']?>;
		border-left:1px solid <?=$cores['241']?>;
		border-bottom:1px solid <?=$cores['241']?>;
		border-right: 0px solid transparent;
		height:40px;
		border-radius: 0px; 
		color:<?=$cores['242']?> !important;
		font-size: 14px;
		width: 300px;
		padding: 14px 35px 13px 15px;
		border-radius: 0;
		box-shadow: none;
		background-color: <?=$cores['243']?> !important;
	}

	.busca_botao{
		background-color: <?=$cores['243']?> !important;
		border-top:1px solid <?=$cores['241']?>;
		border-right:1px solid <?=$cores['241']?>;
		border-bottom:1px solid <?=$cores['241']?>;
		height:40px;
		width: 50px;
		border-radius: 0px; 
		background-repeat: no-repeat;
		background-position: center;
		color:<?=$cores['242']?> !important;
		font-size: 20px;
	}

	.mainmenu ul{
		text-align: right;
	}
	.mainmenu ul li{
		height: auto;
	}
	.mainmenu ul li a{
		width: auto;
		padding-top:20px;
		padding-left:10px;
		padding-right:15px;
		padding-bottom:18px;
		display: inline-block;
	}
	.mainmenu_txt{
		height: auto;
		font-size: 14px;
		font-weight: 500;
	}
	.mainmenu ul li a:hover {
		background-color: <?=$cores[244]?> !important;
		color: <?=$cores[245]?> !important;
	}
	.mainmenu ul li a:hover .mainmenu_txt{
		color: <?=$cores[245]?> !important;
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
		color: <?=$cores[246]?>;
	}


	.submenu_esq{
		width: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);		
		padding-top:25px;
		margin-top:10px;
		background-color: <?=$cores[246]?>;
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

	.banner_topo{
		margin-left:10%;
		text-align: right;
		margin-right:10%;
		width: 80%;
		margin-top: 20px;
	}

	.topo_contatos{
		text-align: right;
		margin-top:30px;
		margin-right:30px;
	}

	.topo_contatos_item{
		color: <?=$cores[251]?>;
		display: inline-block;
		padding-left: 15px;
		font-size: 16px;
	}

	@media only screen and (max-width:1200px) {

		.margemtopo{
			height:250px;
		}

		.busca_div{
			margin-top:17px;
		}

		.topo_bordas1{ 
			padding-left: 15px;
			padding-right:10px;
			margin-top:17px;
			height:40px;
		}
		.topo_bordas2{ 
			margin-top:17px;
			height:40px;
			margin-left: -10px;
			width: 125%;
		}

		a.topo_botao_blog i{
			font-size:20px; 
			vertical-align:middle;
		}

		.email_topo{
			display:none;
		}
		.whats_topo{
			float: right;
			margin-top:25px;
			font-size: 15px;
			font-weight: bold;
			padding-top: 3px;
			text-align: left;
			padding-left:20px;
			padding-right:20px;
		}
		.mainmenu ul li a{
			height: auto;
			display: inline-block;
		}

	}


	@media only screen and (max-width:990px) {

		.whats_topo{
			text-align: center;
			width: 100%; 
		}

		.margemtopo{
			height:250px;
		}

		.topo_contatos{
			margin-top: 15px;
		}
		.topo_contatos_item{
			font-size: 14px;
		}
	}

	@media only screen and (max-width:770px) {

		.topo_contatos{
			text-align: center;
		}
		.navbar-toggle{
			background-color: transparent !important;
			color: <?=$cores[247]?>;
			display: inline-block;
			float: none;
			margin-right: 0px;
		} 
		a.botao_carrinho{
			display: none;
		}
		.logo_div{
			position: relative; 
			width:100% !important;
			margin-left:0px;
			margin-right:0px;
			padding:0px;
			z-index: 9999; 

		}
		a.logo{
			display: inline-block;
			width: 100%;
			margin: 0px;
			margin-top: 10px;
		}
		a.logo img{
			width: 50%;
			max-width: 100%;
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
		.header-bottom { 
			margin-top: 0px;
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
			color:<?=$cores[248]?> !important;
		}		 
		.linha_menu{
			margin-top:10px !important;
		}
		.menu ul li ul{
			position: relative;
		}
		.mainmenu ul li ul li a .mainmenu_txt{
			color:<?=$cores[248]?> !important;
		}
		.menu ul li a .mainmenu_txt:hover{
			color:<?=$cores[248]?> !important;
		}
		.mainmenu ul li{
			width: 100% !important;
			max-width: 100% !important;
		}
		.menu ul li ul{
			position: relative;	 
		}
		.mainmenu{
			background-color: <?=$cores[249]?> !important;
			z-index: 999999;
		}
		.navbar-collapse.collapse{
			padding-top: 20px;
			box-shadow:none;
		}

		.mainmenu a{
			width: 100% !important;
			display: block !important;
			color: <?=$cores[248]?> !important;
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
			color: <?=$cores[248]?> !important;
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
			color: <?=$cores[248]?> !important;
			background-color: transparent !important;
		}
		.menu ul li a .mainmenu_txt{
			text-align: left;
			margin-left: 20px;
			margin-right: 0px;
			padding-left: 0px;
			padding-right: 0px;
			color: <?=$cores[248]?> !important;
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
			color: <?=$cores[248]?> !important;
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
		.mainmenu ul li a{
			padding-left: 20px;
		}
		.mainmenu ul li ul li a{
			padding-left: 10px;}
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

		.banner_topo{
			margin-left:0px;
			text-align: center;
			margin-right:0px;
			width:100%;
			margin-top: 20px; 
		}		

		.header-middle .container .row .col-sm-8{
			padding-right: 15px;
		}
		.header-middle .container .row .col-sm-4{
			padding-left: 15px;
		}

		#header{
			position: relative !important
		}


	}
</style>