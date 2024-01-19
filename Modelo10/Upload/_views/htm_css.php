<?php require_once('_system/bloqueia_view.php'); ?>
<style type="text/css">

body{
	font-family: 'Open Sans', sans-serif;
}

.topo_imagem{
	width: 100%;
	height: auto;
	margin: 0px;
	padding: 0px;
}
.topo_imagem img{
	width: 100%;
}
.header{
	position: relative;
	background-color: <?=$_base['cor']['78']?>;
	overflow: hidden;
	font-family: 'Roboto', sans-serif;
	background:<?=$_base['cor']['55']?>;
	margin-top: -5px;
}
.top-nav{
	float: left;
	padding-left:55px;
}
.top-nav:before {
	position: absolute;
	content: '';
	display: block;
	top: 0;
	left: 370px;
	height:60px;
	width: 1150px;
	background-color: <?=$_base['cor']['79']?>;
	z-index: 0;
	border-radius: 0px 0px 0px 30px;
}
.borda_topo{
	border-top:5px solid <?=$_base['cor']['79']?>;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 10px;
	z-index: 0;
}
.top-nav ul li a {
	font-size: 14px;
	font-weight: 600;	 
	padding-top: 23px;
	padding-bottom: 15px;     
	padding-left: 22px;
	padding-right: 18px;
	color: <?=$_base['cor']['80']?>;
	z-index: 10;
	transition: none;
	-o-transition: none;
	-webkit-transition: none;
	border-radius: 0px 0px 0px 30px;
}
.top-nav li.active> a, .top-nav li> a:hover {
	background:<?=$_base['cor']['81']?>;
	color: <?=$_base['cor']['82']?>;
	text-decoration: none;
	height: 60px;
}
.top-nav li{
	position: relative;
	margin-top:0px;
	margin-bottom:0px;
	margin-left: 0px;
	margin-right: 0px;
	height: 60px;
}
.top-nav li:hover{
	background: <?=$_base['cor']['81']?>;
	border-radius: 0px 0px 0px 30px;
	height: 60px;
}
.top-nav li.active{
	background-color: <?=$_base['cor']['81']?>
	border-radius: 0px 0px 0px 30px;
	height: 60px;
}
.top-nav li.active .esq:before, .top-nav li:hover:before {
	position: absolute;
	content: '';
	display: block;
	top: 0;
	left:0px;
	height: 60px;
	width: 50px;
	background: <?=$_base['cor']['81']?>;    
	z-index:0;
	border-radius: 0px 0px 0px 30px;
}
.top-nav li.active .dir:after, .top-nav li:hover:after {
	position: absolute;
	content: '';
	display: block;
	top: 0;
	left: 0px;
	height: 100%;
	width: 50px;
	z-index:0;
	border-radius: 0px 0px 0px 30px;
}
.top-nav ul li{
	text-align: center;
}
.botaomenuresponsivo {
	display: none;
	float: right;
	margin-top: 30px;
	margin-bottom: 25px;
	padding-left: 10px;
	padding-right: 10px;
	cursor: pointer;
	font-size: 20px;
	color:<?=$_base['cor']['81']?>;
}

.logo {
	width: 300px;
	padding-bottom: 20px;
	padding-top: 25px;
	text-align: left;
}
.logo img {
	width: 100%;
}

.topo_contatos{
	position: absolute;
	bottom:10px;
	right: 20px;
	color:#fff;
	font-size: 17px;
}
.topo_contatos span{
	color:<?=$_base['cor']['79']?>;
	padding-right:5px;
	padding-left: 20px;
}
.topo_telefone2{
	background:<?=$_base['cor']['81']?>;
	color: <?=$_base['cor']['82']?>;
	border-radius: 10px;
	padding-top:5px;
	padding-bottom:5px;
	margin-left: 20px;
	padding-right:10px;
	display: inline-block;
}
.topo_telefone2 span{
	padding-right: 5px;
	padding-left: 10px;	
}

.callbacks_nav{
	opacity: 0.6;
	width: 50px;
	margin:15px;
}
.callbacks_nav.prev{
	margin-top:-50px;
	background-image: url(<?=LAYOUT?>img/seta_esq2.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}
.callbacks_nav.next{
	margin-top:-50px;
	background-image: url(<?=LAYOUT?>img/seta_dir2.png);
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	height: 100%;
}
.callbacks_container{
	padding-top: 0px;
	border-bottom: 5px solid <?=$_base['cor']['83']?>;
}
.callbacks_tabs{
	width: 100%;
	left: 0px;
	text-align: center;
}
.callbacks_tabs a {
	visibility: visible;
	background-color: <?=$_base['cor']['83']?>;
	color:<?=$_base['cor']['84']?>;
	padding-left: 13px;
	padding-right: 13px;
	padding-top: 7px;
	padding-bottom: 5px;
	display: inline-block;
	margin-left: 3px;
	margin-right: 3px;
	border-radius:10px 10px 0px 0px;
	font-weight: 600;
}
.callbacks_tabs a:hover {
	text-decoration: none;
	background-color: <?=$_base['cor']['83']?>;
	color:<?=$_base['cor']['84']?>;
}
.callbacks_tabs a:after{
	display: none;
}
.callbacks_tabs li.callbacks_here a {
	text-decoration: none;
	background-color: <?=$_base['cor']['86']?>;
	color:<?=$_base['cor']['85']?>;
}

@media only screen and (max-width: 770px) {
	
	.callbacks_tabs a { 
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 4px;
		padding-bottom: 2px;
		margin-left: 2px;
		margin-right: 2px; 
	}
	.callbacks_container{
		margin-top: 0px;
	}

}


.titulos {
	display: block;
	color: <?=$_base['cor']['89']?>;
	font-size: 34px;
	font-weight: 500;
	font-family: 'Roboto', sans-serif;
}

.detalhes_canto{
	position: absolute;
	right: 0px;
	bottom:0px;
	width:15px;
	height:15px;
}
.detalhes_canto > div{
	border-left: 15px solid transparent;
	border-bottom: 15px solid black;
}

.subtopo{
	position: relative;
	width: 100%;
	height: 45px;
	background-color: <?=$_base['cor']['103']?>;
}
.subtopo_faixa{
	position: absolute;
	content: '';
	display: block;
	top: 0;
	left: 32%;
	height: 100%;
	width: 1150px;
	background-color: <?=$_base['cor']['102']?>;
	-webkit-transform: skew(-30deg,0deg);
	transform: skew(-50deg,0deg);
	z-index: 0;
}
.subtopo_faixa_caminho{
	text-align: left;
	padding-top: 10px;
}
.subtopo_faixa_caminho span{
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	color:<?=$_base['cor']['104']?>;
	font-size: 15px;
}
a.subtopo_faixa_caminho_item{
	font-size: 15px;
	color:<?=$_base['cor']['104']?>;
	text-transform: lowercase;
}
a.subtopo_faixa_caminho_item:hover{
	text-decoration: underline;
}

.subtopo_redes_txt{
	font-size: 14px;
	color:<?=$_base['cor']['105']?>;
	text-align: right;
	padding-top: 11px;
	float: right;
}
.subtopo_redes{
	float: right;
	margin-top: 7px;
	margin-left: 20px;
}





.header_top_blocos{
	color:<?=$_base['cor']['72']?>;
	font-size:16px;
	padding-top: 17px;
	padding-bottom: 17px;
	font-weight: 600;
	letter-spacing: -1px;
}
.topo_email{
	text-align: right;
	width: 100%;
	display: inline-block;
}



.content {
	background: <?=$_base['cor']['68']?>;
}





@media only screen and (max-width: 1200px) {
	.topo_contatos{ 
		bottom: 15px;
		right: 20px; 
		font-size: 15px;
	}
	.topo_contatos span{
		color:<?=$_base['cor']['73']?>;
		padding-right:5px;
		padding-left: 20px;
	}	 
	.logo {
		width: 230px;
	}
	.top-nav{
		float: left;
		padding-left:95px;
	}
	.top-nav:before {
		left: 340px;
		height:55px;
		border-radius: 0px 0px 0px 25px;
	}
	.top-nav ul li a {
		font-size: 13px;
		font-weight: 600;	 
		padding-top: 20px;
		padding-bottom: 13px;     
		padding-left: 12px;
		padding-right: 8px;
		border-radius: 0px 0px 0px 25px;
	}

	.top-nav li.active> a, .top-nav li> a:hover {
		height: 55px;
	}
	.top-nav li{
		height: 55px;
	}
	.top-nav li:hover{
		background: <?=$_base['cor']['60']?>;
		border-radius: 0px 0px 0px 25px;
		height: 55px;
	}
	.top-nav li.active{
		background-color: <?=$_base['cor']['60']?>
		border-radius: 0px 0px 0px 25px;
		height: 55px;
	}
	.top-nav li.active .esq:before, .top-nav li:hover:before {
		height: 55px;
		border-radius: 0px 0px 0px 25px;
	}
	.top-nav li.active .dir:after, .top-nav li:hover:after {
		border-radius: 0px 0px 0px 25px;
	}

}

@media only screen and (max-width: 990px) { 

	.logo {
		width: 200px;
		padding-top: 25px;
	}
	.topo_contatos{ 
		bottom: 16px;
		right: 20px; 
		font-size: 12px;
	}
	.topo_contatos span{
		color:<?=$_base['cor']['73']?>;
		padding-right:5px;
		padding-left: 20px;
	}	 
	.top-nav{
		float: left;
		padding-left:35px;
	}
	.top-nav:before {
		left: 250px;
		height:47px;
		border-radius: 0px 0px 0px 20px;
	}
	.top-nav ul li a {
		font-size: 11px; 
		padding-top: 17px;
		padding-bottom: 10px;     
		padding-left: 7px;
		padding-right: 6px;
		border-radius: 0px 0px 0px 20px;
	}

	.top-nav li.active> a, .top-nav li> a:hover {
		height: 47px;
	}
	.top-nav li{
		height: 47px;
	}
	.top-nav li:hover{
		height: 47px;
	}
	.top-nav li.active{
		height: 47px;
	}
	.top-nav li.active .esq:before, .top-nav li:hover:before {
		height: 47px;
	}
	
	.subtopo_redes_txt{
		font-size: 12px;
		padding-top: 13px;
	}

}
@media only screen and (max-width: 770px) {	
	.topo_contatos{ 
		display: none;
	}
	.header_top_botoes_restrito{
		display: none;
	}
	.botaomenuresponsivo {
		display: inline-block;
	}
	.logo {
		width:60%;
		height: 100%
		padding-left: 10px;
		padding-right: 10px;
		padding-bottom: 10px;
		padding-top: 15px;
		border-radius: 0 0 30px 30px;
	}
	
	.top-nav{
		display: none;
		float: none; 
		background:transparent;
		padding-left: 0px;
	}

	.top-nav:before {
		background:transparent;
		left:100%;
	}
	.top-nav ul li {
		width: 100%;
		text-align: center;	 
		padding: 0px;
		margin: 0px;
		background-color: transparent;
	}
	.top-nav ul li a {
		width: 100%;
		padding: 15px 15px;
		margin: 0px;
		font-size: 13px;
		color:#fff;
	}
	.top-nav li.active> a, .top-nav li> a:hover {

	}

	.header_top_blocos{
		font-size:12px;
		padding-top: 15px;
		padding-bottom: 15px;
		font-weight: 600;
		letter-spacing: -1px;
		text-align: center;
	}
	.top-nav li.active{
		background-color: <?=$_base['cor']['60']?>;
	}

	.subtopo_faixa{
		left: 45%;
	}
	.subtopo_redes_txt{
		display: none;
	}
	a.subtopo_faixa_caminho_item{
		font-size: 12px;
	}
	.subtopo_faixa_caminho span{
		font-size: 12px;
	}

}


.quemsomos_inicial_caixa{
	margin-top:20px;
	border:1px solid #ccc;
	margin-bottom: 30px;
}
.quemsomos_inicial_texto {
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	color: #333;
	line-height: 20px;
	width: 100%; 
	padding-left: 20px;
	padding-top: 15px;
	padding-right: 20px;
	padding-bottom:5px;
	text-align: left;
}
.quemsomos_inicial_botao{
	font-family: 'Open Sans', sans-serif;
	text-align: center;
	border:0px;
	font-size: 16px;
	font-weight: 600;
	cursor: pointer;
	border-radius:0px 22px 0px 22px ;
	background-color: <?=$_base['cor']['90']?>;
	color: <?=$_base['cor']['91']?>;
	padding-top:10px;
	padding-bottom: 10px;
	padding-left: 20px;
	padding-right: 20px;
}
.quemsomos_inicial_botao:hover{
	background-color: <?=$_base['cor']['93']?>;
	color:<?=$_base['cor']['92']?>;
}







.parceiros_inicial{
	background-color: <?=$_base['cor']['76']?>;
	padding-top: 50px !important;
	padding-bottom: 25px !important;
}
.parceiros_inicial .titulos{
	color: <?=$_base['cor']['77']?>;
}


.noticias_caixa_inicial{	
	padding-bottom:20px;
	margin-top:40px;
	font-family: 'Roboto', sans-serif;
	border:1px solid #ccc;
	background-color: #f2f2f2;

}
.noticias_caixa_inicial:hover{
	background: rgba(255,255,255,0.3);
}
.noticia_titulo_inicial {
	padding-bottom:10px;
}
.noticia_inicial_imagem{
	margin:0px;
	margin-bottom:20px;
	width: 100%;
	height:180px;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
.noticia_inicial_imagem:hover{
	
}
a.noticia_inicial_titulo_ajuste{
	font-size: 18px !important;
}
.blog_lista_previa{
	font-size: 14px;
	height: 80px;
	overflow: hidden;
}

.content{
	padding-top:70px;
	padding-bottom: 80px;
}
@media only screen and (max-width: 770px) {
	.noticias_caixa_inicial{
		min-height:none;
		height: auto;
	}	 
}






label{
	margin-bottom:3px;
	font-family: 'Open Sans', sans-serif;
	font-size:14px;
}
.form-control{
	font-family: 'Open Sans', sans-serif;
	font-size:14px;
}
.form-group{
	margin-bottom:12px;
}

/* start cauresol */
.nbs-flexisel-container {
	padding:4% 0;
	position: relative;
	max-width: 100%;
}
.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}
.nbs-flexisel-inner {
	overflow: hidden;
	width:90%;
	margin: 0 auto;
}
.nbs-flexisel-item {
	float: left;
	margin: 0px;
	padding: 0px;
	cursor: pointer;
	position: relative;
	line-height: 0px;
}
.nbs-flexisel-item > img {
	width:200px;
	height:100px;
	cursor: pointer;
	position: relative;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100px;
	max-height: 45px;
}
/*** start cauresol  navigation ***/
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
	width: 46px;
	height: 100px;
	position: absolute;
	cursor: pointer;
	z-index: 100;
	margin-top: 60px;
}
.nbs-flexisel-nav-left {
	left: 0px;
	background: url(../images/img-sprite.png) no-repeat -19px -21px;
}
.nbs-flexisel-nav-right {
	right: 0px;
	background: url(../images/img-sprite.png) no-repeat -55px -20px;
}





.produtos_inicial_ul{
	list-style: none;
}
.produtos_inicial_item{
	list-style: none;
	border:1px solid #E6E7E8;
	padding:10px; 
	margin-bottom:30px;
	display: block;
	text-align: center;
}
.produtos_inicial_img_div{
	width: 100%;
}
.produtos_inicial_img_div img{
	width:200px;
}
.produtos_inicial_titulo a{
	line-height: 30px;
	font-size: 16px;
	font-weight: bold;
	color:#000;
}
.produtos_inicial_previa{
	padding-bottom: 10px;
	padding-right: 15px;
	padding-left: 15px;
	line-height: 15px;
	font-size:12px;
	color:#000;
}
.produtos_inicial_botao_div{
	
}
.produtos_inicial_botao_div a{
	border-radius:10px;
	padding-left: 15px;
	padding-right: 15px;
	display: inline-block;
	background-color: <?=$_base['cor']['87']?>;
	color: <?=$_base['cor']['88']?>;
	line-height: 30px;
	font-size: 13px;
	font-weight: 500;
}


.botao_orcamento_add a{
	border-radius:10px;
	padding-left: 15px;
	padding-right: 15px;
	display: inline-block;
	background-color: <?=$_base['cor']['88']?>;
	color: <?=$_base['cor']['87']?>;
	line-height: 30px;
	font-size: 13px;
	font-weight: 500;
	cursor: pointer;
}

.botao_orcamento_remover a{
	border-radius:10px;
	padding-left: 15px;
	padding-right: 15px;
	display: inline-block;
	background-color: <?=$_base['cor']['87']?>;
	color: <?=$_base['cor']['88']?>;
	line-height: 30px;
	font-size: 13px;
	font-weight: 500;
	cursor: pointer;
}

.fotos_item_imagem{
	width: 100%;
	height:90px;
	border-radius: 0px 22px 0px 22px;
	overflow: hidden;
	display: inline-block;
	margin-bottom:10px;
}
.fotos_item_imagem img{
	width: 100%;
	border-radius: 0px 22px 0px 22px;
	border:0px;
}



/* start cauresol */
.nbs-flexisel-container {
	padding:4% 0;
	position: relative;
	max-width: 100%;
}
.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}
.nbs-flexisel-inner {
	overflow: hidden;
	width:90%;
	margin: 0 auto;
}
.nbs-flexisel-item {
	float: left;
	margin: 0px;
	padding: 0px;
	cursor: pointer;
	position: relative;
	line-height: 0px;
}
.nbs-flexisel-item > img {
	width:200px;
	height:100px;
	cursor: pointer;
	position: relative;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100px;
	max-height: 45px;
}
.nbs-flexisel-item:hover{

}
/*** start cauresol  navigation ***/
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
	width: 55px;
	height: 100px;
	margin-top: 60px;
	position: absolute;
	cursor: pointer;
	z-index: 100;
}
.nbs-flexisel-nav-left {
	left: 0px;
	background: url(<?=LAYOUT?>img/seta_esq2.png) no-repeat;
	opacity: 0.7;
}
.nbs-flexisel-nav-right {
	right: 0px;
	background: url(<?=LAYOUT?>img/seta_dir2.png) no-repeat;
	opacity: 0.7;
}









.institucional_inicial_texto{
	padding-top: 0px;
	color:#000;
}
.institucional_inicial_img{
	padding-bottom: 20px;
}
.institucional_inicial_img img{
	width: 100%;
}

.parceiros{
	width:100%;
	position: relative;
}
.parceiros img{
	width:100%;
	height: auto;
}
#parceiros .nbs-flexisel-nav-left{
	display: none !important;
}
#parceiros .nbs-flexisel-nav-right{
	display: none !important;
}
#parceiros .nbs-flexisel-inner{
	width: 100%;
}














.servicos_inicial_item{
	list-style: none;
}
.servicos_inicial_img_div{
	width: 100%;
}
.servicos_inicial_img_div img{
	width:180px;
	border-radius: 0px 22px 0px 22px;
	border:2px solid;
	color: #ffffff;
}
.servicoes_quadro1{
	background:<?=$_base['cor']['81']?>;
	color: <?=$_base['cor']['82']?>;
	padding:20px;
	font-size: 20px;
	font-weight: 500;
	width: 400px;
	text-align: center;
	max-width: 100%;
}








.footer {
	background: <?=$_base['cor']['94']?>;
	padding-top: 40px;
	padding-bottom:0px;
}

.rodape_titulo{
	font-size:23px;
	padding-bottom: 10px;
	color:<?=$_base['cor']['99']?>;
	font-weight: bold;
}

.rodape_facebook{
	width: 100%;
	overflow: hidden;
}

.rodape_servicos{
	padding-bottom:13px;
}
.rodape_servicos a{
	color:<?=$_base['cor']['98']?>;
	font-size: 17px;
}
.rodape_servicos a:hover{
	color:<?=$_base['cor']['98']?>;
	text-decoration: underline;
}
.rodape_servicos a span{
	display: inline-block;
	padding-right: 5px;
}
.rodape_servicos a span img{
	height: 15px;
}

.rodape_contatos{
	padding-bottom: 9px;
	color:<?=$_base['cor']['98']?>;
	font-size: 16px;
	vertical-align:middle !important;
}
.rodape_contatos span{ 
	vertical-align:middle !important;
}
.rodape_contatos img{
	width: 20px;
	margin-right: 5px;
	vertical-align:middle !important;
}

.rodape_copyright{
	width: 100%;
	height: 50px;
	margin-top: 15px;
	overflow: hidden;
	font-size: 14px;
	color:<?=$_base['cor']['98']?>;
}
.rodape_menu{
	position: absolute;
	bottom: 0px;
	left: 0px;
	background-color: <?=$_base['cor']['95']?>;
	border-radius: 20px 20px 0px 0px;
	width: 90%;
	height: 55px;
	z-index: 10;
	text-align: center;
	overflow: hidden;
}
.rodape_menu ul{
	list-style: none;
}
.rodape_menu li{
	list-style: none;
	display: inline-block;
	margin-left:5px;
	margin-right:5px;
}
.rodape_menu li a{
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 18px;
	padding-bottom: 18px;
	font-size: 15px;
	font-weight: bold;
	color:<?=$_base['cor']['96']?>;
}
.rodape_menu li a:hover{
	color:<?=$_base['cor']['97']?>;
	text-decoration: underline;
}
.rodape_menu_contato{
	position: absolute;
	bottom: 0px;
	right: 0px;
	background-color: #fff;
	border-radius: 0px 20px 0px 0px;
	width: 13%;
	height: 55px;
	text-align: center;
	padding-top: 20px;
	padding-left:3%;
	cursor: pointer;
	z-index: 1;
}
.rodape_menu_contato img{
	width: 40%;	 
	display: inline-block;
}

.rodape_news_txt{
	text-align: center;
	color:<?=$_base['cor']['98']?>;
	font-size: 14px;
}

.form_rodape{
	border: none;
	width: 87%;
	height: 40px;
	font-size: 14px;
	color: #000;
	background: #fff;
	float: left;
	padding-left: 15px;
	padding-right: 15px;
}
.form_rodape_botao{
	color: <?=$_base['cor']['96']?>;
	background-color: <?=$_base['cor']['95']?>;
	border: none;
	width: 13%;
	height: 40px;
	float: right;
	font-size: 22px;     
	padding: 0;
	padding-left: 6px;     
}
.form_rodape_botao:hover{
	background-color: <?=$_base['cor']['95']?>;
}
.redessociais{
	display: inline-block;
	margin-top:5px;
	margin-right: 5px;
}
.redessociais img{
	width: 40px;
}

.redessociais_subtopo{
	display: inline-block;
	margin-right: 3px;
}
.redessociais_subtopo img{
	width: 30px;
}

.rodape_menu_div{
	position: relative; height:55px; margin-top: 10px;
}

@media only screen and (max-width: 990px) {

	.rodape_news_txt{
		text-align: left;
	}

}
@media only screen and (max-width: 770px) {
	.rodape_menu_div{
		display: none;
	}
}


.quemsomos_imagem {
	width: 100%;
	padding-top:50px;
	padding-bottom:20px;
}
.quemsomos_imagem img{
	width: 100%;
}
.quemsomos_titulos{
	background-color: <?=$_base['cor']['100']?>;
	color: <?=$_base['cor']['101']?>;
	padding-top: 20px;
	padding-bottom: 20px;
	width: 100%;
	font-size: 18px;
	font-weight: bold;
	text-align: center;
}
.quemsomos_quadros{
	border:1px solid #BDBFC1;
	border-radius: 0px 0px 22px 0px;
	padding: 20px;
}

@media only screen and (max-width: 990px) {

	.quemsomos_titulos{
		margin-top:30px;
	}

}


.servicos_imagem{
	width: 100%;
	margin: 0px;
	padding: 0px;
}
.servicos_imagem img{
	width: 100%;
}


.faleconosco_botao_div {

}
.faleconosco_botao {
	color: <?=$_base['cor']['96']?>;
	background-color: <?=$_base['cor']['95']?>;
	border: none;
	height: 40px;
	float: right;
	font-size: 16px;
	padding-left:20px;
	padding-right: 20px;
	padding-top: 10px;
	cursor: pointer;
}
.mapa{
	width: 100%;
}


.clientes_item_div{
	text-align: center;
	padding-bottom: 55px;
	padding-top: 40px;
	width: 100%;
}
.clientes_item{
	display: inline-block;
	margin: 12px;
	padding: 7px;
	border:1px solid #ccc;
	width: 200px;
	height: 150px;
	overflow: hidden;
}
.clientes_item img{
	width: 100%;
}

.clientes_item_interno{
	display: inline-block;
	margin-top: 30px;	 
	width: 100%;
	border:1px solid #ccc;
	background-color: #eee;
	text-align: center;
}
.clientes_item_interno img{
	width: 100%;
	padding: 50px;
}


.produtos_filtro_titulo{
	position: relative;
	background-color: <?=$_base['cor']['87']?>;
	color: <?=$_base['cor']['88']?>;
	padding-top: 10px;
	padding-bottom: 10px;
	width: 100%;
	text-align: center;
	margin-top:50px;
	font-weight: bold;
}
.produtos_categorias{
	padding-right:20px;
	padding-bottom: 100px;
	text-align: left;
}
.produtos_categorias ul{
	list-style: none;
}
.produtos_categorias li{
	list-style: none;
	margin-top:8px;
}
.produtos_categorias li a{
	font-size: 15px;
	color:#666;
}
.produtos_categorias li a.active{
	color:#000;
}
.produtos_categorias li ul{
	list-style: none;
}
.subcategoria {
	list-style: none;
	margin-left:15px;
	margin-top:3px;
	margin-bottom:3px;
}
.subcategoria a{
	color:#000;
}
.subcategoria a:hover{
	color:#000;
	text-decoration: underline;
}
.subcategoria span{
	display: inline-block;
	padding-right:3px;
}
.subcategoria img{
	height:10px;
}
.produtos_categorias li {
	list-style: none;
}
.produtos_categorias ul li ul {
	display: none;
}
.produtos_categorias ul li.ativo ul {
	display: block;
}
.panel-heading, .panel-group .panel{
	border-radius: 0px;
}
.panel-body{
	padding: 10px;
}

.produtos_detalhes{
	margin-top: 45px;
	margin-left: 10px;
	margin-right: 10px;
}
.produtos_detalhes h2{
	font-size:22px;
	font-weight: bold;
	color:#000;
}
.produtos_detalhes_descricao{
	margin-top: 20px;
}
.produtos_detalhes_imagens{
	margin-top: 30px;
	margin-left: -5px;
}
.produtos_detalhes_imagens a.produtos_item_imagem {
	width: 170px;
	height: 100px;
}
.produtos_detalhes_imagens a.produtos_item_imagem:hover {
	opacity: 0.9;
}
.produtos_voltar{
	color: <?=$_base['cor']['96']?>;
	background-color: <?=$_base['cor']['95']?>;
	border: none;
	height: 40px;
	float: right;
	font-size: 16px;
	padding-left:20px;
	padding-right: 20px;
	padding-top: 10px;
	cursor: pointer;
}

.produtos_detalhes_descricao{
	margin-top: 20px;
}
.produtos_detalhes_imagens{
	margin-top:20px;
	text-align: center;
}
.produtos_detalhes_imagens a.produtos_item_imagem {
	width: 100%;
}
.produtos_detalhes_imagens a.produtos_item_imagem_mini {
	width: 70px;
	height: 50px;
	overflow: hidden;
	display: inline-block;
	margin:5px;
}
.produtos_detalhes_imagens a.produtos_item_imagem:hover {
	opacity: 0.9;
}
.produtos_detalhes_imagens a.produtos_item_imagem_mini:hover {
	opacity: 0.9;
}




.orcamento_txt1{
	text-align: left;
	font-size: 18px;
	color: #606062;
	margin-top: 40px;
	margin-bottom: 30px;
}
.orcamento_txt2{
	text-align: right;
	font-size: 16px;
	color:#848688;
	margin-top: 40px;
	margin-bottom: 30px;
}
.form_orcamento{
	border-radius: 0px;
	padding: 15px;
	height: 40px;
}

@media only screen and (max-width: 990px) {

	.orcamento_txt1{
		text-align:center;
	}
	.orcamento_txt2{
		text-align:center;
	}

}



.portfolio_imagens{

}
.portfolio_imagens a{
	display: inline-block;
	width: 100%;
	height: 170px;
	overflow: hidden;
	margin-bottom:25px;
	text-align: center;
}
.portfolio_imagens a img{
	height: 170px;
}
.portfolio_imagens a:hover{
	opacity: 0.9;
}

.pagination>li:first-child>a, .pagination>li:first-child>span{
	border-radius: 0px;
}
.pagination>li:last-child>a, .pagination>li:last-child>span{
	border-radius: 0px;
}

.pi-pagenav li {	
	border-radius: 0px;
	margin:1px;
}
.pi-pagenav li a{
	color:#000;
}
.pi-pagenav li:hover {
	color:#666;
	border-radius: 0px;
}
.pi-pagenav li a:hover{
	color:#666;
}
.pi-pagenav li .active {
	background: #282828;
	border-color: #000;
	color:#fff;
	border-radius: 0px;
}



.owl-carousel .owl-item img{
	display: inline-block;
}


a.botao_portfolio_inicial{
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	font-weight: 500;
	color:#000;
	position: absolute;
	bottom:7px;
	right: 15px;
	z-index: 9999999;
}




</style>