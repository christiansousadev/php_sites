<?php require_once('_system/bloqueia_view.php'); ?>
<style>

.fonte1{
	font-family: 'Open Sans', sans-serif;
}
.fonte2{
	font-family: 'Roboto', sans-serif;
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
.fixed_show header{
	background: rgba(0,0,0,0.6) !important;
	display: none;
}
.wrapper{
	padding-top: 0px;
	margin-top: 0px;
}

.sombrabanner{
	background-color: #F23005;
	-webkit-box-shadow: 10px 17px 35px rgba(50, 50, 50, 0.60);
	-moz-box-shadow:    10px 17px 35px rgba(50, 50, 50, 0.60);
	box-shadow:         10px 17px 35px rgba(50, 50, 50, 0.60);
}

.logo{
	display: inline-block;
	width: 100%;
	height: auto !important;
	text-align: left;
	border:none;
	margin-top:10px !important;
}
.logo img{
	width: 100%;
	height: auto;
}

.div_topo_superior{
	background-image:url(<?=LAYOUT?>img/topocanto3.png);
	height: 45px;
	width:60%;
	position: absolute;
	top: -5px;
	right: 50px;
}
.div_topo_superior_txt{
	color:#fff;
	font-size: 13px;
	float: left;
	padding-right: 15px;
	padding-top: 11px;
}
.div_topo_superior_txt_email{
	color:#fff;
	font-size: 13px;
	float: left;
	padding-right: 15px;
	padding-top: 11px;
	padding-left: 15px;
}
header nav ul.menu > li:hover > .sub-nav{
	top:60px !important;
}
header nav ul.menu > li > a{
	color:#000;
	font-size: 16px;
	padding-top:10px;
	font-weight: 500;
	margin-left:7px;
}
header nav ul.menu > li > a:hover{
	text-decoration: underline;
}
header nav {
	float: none;
	text-align:left;
	margin-top:20px;
}

header nav ul.menu > li:hover > a, header nav ul.menu > li.current-menu-ancestor > a, header nav ul.menu > li.current-menu-item > a, header nav ul.menu > li.current-menu-parent > a{
	color:#000;
}

.redestopo{
	margin-left: 25px;
	text-align: right;
	float: right;
}
a.topo_redes_sociais_item{
	display: inline-block;
	margin:2px;
	width:20px;
	height:20px;
	text-align: center;
}
.topo_redes_sociais_item img{
	width: 100%;
}

.slider_container{
	margin:0px;
}
.sub_banner{
	width: 100%;
}
.sub_banner_item{
	width: 25%;
	height: 270px;
	float:left;
	margin:0px;
	border:0px;
	padding:0px;
}
.sub_banner_item_txt1{
	margin-top: 15px;
	font-size: 20px;
	color:#fff;
	font-weight: bold;
	text-align: center;
}
.sub_banner_item_txt2{
	margin-top: 15px;
	margin-left: 10px;
	margin-right: 15px;
	font-size: 15px;
	color:#fff;
	text-align: center;
}


.titulo_padrao{
	text-align: left;
	font-size: 30px;
	color:#000;
	font-weight: 500;
	padding-bottom:0px;
	line-height: 55px;
}
.titulo_padrao img{
	width:40px;

}

.apres_item{
	margin-top:20px;
	margin-bottom:20px;
}
.apres_ico{
	width: 100%;
	text-align: center;
}
.apres_ico img{
	width:40%;
}
.apres_subtitulos{
	font-size:22px;
	font-weight: 500;
	color:#666;
	text-align: center;
	padding-top:25px;
}
.apres_subtextos{
	margin-top: 20px;
	font-size: 16px;
	color:#000;
}
.apres_botao{
	display: inline-block;
	width:180px;
	border-radius:20px;
	text-align: center;
	background-color: <?=$_base['cor']['1']?>;
	color: <?=$_base['cor']['2']?>;
	font-size: 15px;
	font-weight: 500;
	padding: 5px;
	margin-top: 15px;
	cursor: pointer;
}
.apres_botao:hover{
	background-color: <?=$_base['cor']['3']?>;
	color: <?=$_base['cor']['4']?>;
}
.module_cont{
	padding-bottom:0px;
}


.pacotes{
	width: 100%;
	position: relative;
	padding-top: 70px;
	padding-bottom:70px; 
	color: <?=$_base['cor']['1']?> !important;
}
.pacotes .titulo_padrao{
	color: <?=$_base['cor']['1']?> !important;
}

.pacotes .titulo_padrao i {
	background: <?=$_base['cor']['1']?> !important;
}

.pacotes_item{
	margin:5%;
	padding: 10px;
	border:1px solid #ccc;
	width:90%;
	margin-top:40px;
}
.pacotes_item h3{
	font-size: 23px;
	text-align: center;
	margin-top: 30px;
	color:<?=$_base['cor'][1]?>;
	font-weight: bold;
	line-height: 20px;
	margin-bottom:30px;
}
.pacotes_interno{
	margin:0px;
	width:100%;
	margin-bottom: 30px;
}

.pacotes_item_img{
	width: 100%;
	height: 150px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.destinos_div{
	height:90px;
	width: 100%;
}
.pacotes_item_destinos{
	color:#000;
	margin-left:10%;
	width: 39%;
	margin-bottom:5px;
	text-align: left;
	font-size: 15px;
	font-weight: 500;
	float: left;
}
.pacotes_item_valor{
	font-size: 18px;
	margin-top:30px;
	text-align: center;
	color:#000;
}
.pacotes_item_valor span{
	font-size:23px;
	font-weight: bold;
	color:<?=$_base['cor'][1]?>;
}
.pacotes_item_botao{
	margin-top:30px;
	text-align: center;
	background-color:<?=$_base['cor'][1]?>;
	color:<?=$_base['cor'][2]?>;
	border-radius:20px;
	padding-left:20px;
	padding-right:20px;
	padding-top:5px;
	padding-bottom:5px;
	font-weight: bold;
	font-size: 14px;
	display: inline-block;
	margin-bottom: 20px;
	border-radius: 2px;
}
.pacotes_item_botao:hover{
	background-color:<?=$_base['cor'][3]?>;
	color:<?=$_base['cor'][4]?>;
}
.pacotes_titulo_interno{
	color: <?=$_base['cor']['1']?> !important;
	font-weight: bold;
	font-size: 24px;
	padding-bottom: 0px;
	margin-bottom: 0px;
}




.orcamentos{
	background-color: #bdbfc1;
	padding-top:70px;
	padding-bottom:70px;
}
.orcamentos_campos{
	width: 100% !important;
	height: 30px !important;
	color:#000 !important;
	font-size: 15px !important;
	background-color: #f2f2f2 !important;
	margin-top:0px !important;
	margin-bottom: 0px !important;
	padding:20px !important;
}
.orcamentos label{
	font-size: 16px;
	font-weight:500;
	color:#666;
	text-align: left;
	padding-top:10px;
	padding-bottom:10px;
	margin: 0px;
}
.orcamentos_campos_select{
	width: 100% !important; 
	color:#666 !important;
	font-size:15px !important;
	background-color: #f2f2f2 !important;
	margin-top:0px !important;
	margin-bottom: 0px !important;
	padding-top:11px !important;
	padding-left:15px !important;
	padding-right:15px !important;
	padding-bottom:10px !important;
}
.orcamentos_campos_msg{
	width: 100% !important;
	height: 120px !important;
	color:#000 !important;
	font-size: 15px !important;
	background-color: #f2f2f2 !important;
	margin-top:0px !important;
	margin-bottom: 0px !important;
	padding:20px !important;
}
.orcamentos_botao{
	width: 200px;
	text-align: center;
	border:2px solid #fff; 
	padding-left:20px;
	padding-right: 20px;
	padding-top: 10px;
	padding-bottom: 10px;
	color:#fff;
	cursor: pointer;
	background-color: transparent;
	border-radius: 10px;
	font-weight: bold;
}
.orcamentos_botao:hover{
	color:#333;
	border-color:#333;
}

#bloco_pessoas{
	position: absolute;
	top:95px;
	left: 0px;
	width: 100%;
	height:auto;
	background-color: #f5811e;
	display: none;
	z-index: 99999;
}
#adultos_num{
	width:50% !important;
	float: left;
}
#adultos_menos{
	width: 24% !important;
	float: left;
}
#adultos_mais{
	width: 24% !important;
	float: left;
}

#criancas_num{
	width:50% !important;
	float: left;
}
#criancas_menos{
	width: 24% !important;
	float: left;
}
#criancas_mais{
	width: 24% !important;
	float: left;
}

.bloco_pessoas_botao{
	display: inline-block;
	background-color: transparent;
	border-radius: 2px;
	border: 2px solid #fff;
	color:#fff;
	text-align: center;
	width:90px;
	cursor: pointer;
}


.bloco_pessoas_label{
	float: left; 
	font-size:17px;
	color:#fff;
	font-weight: bold;
	line-height: 20px;
	width:47%;
}
.bloco_pessoas_label span{
	display:block;
	font-size: 13px;
	font-weight: 400;
}
.bloco_pessoas_form{
	border-radius: 0px;
	height: 40px;
	border:none;
	background-color: #fff;
}

.cadastro_email{
	background-color: #FFF;
	padding-top:70px;
	padding-bottom:70px;
}
.cadastro_email_div_campos{
	display: inline-block;
	width:100% !important;
	text-align: right;
	margin: 0px;
	padding: 0px;
	margin-top:0px !important;
}
.cadastro_email_campos{
	border:3px solid <?=$_base['cor'][1]?> !important;
	width:100% !important;
	background-color: #fff !important;
}
.cadastro_email_div_botao{
	width: 100%;
	text-align: right;
	margin-top: 20px;
	margin-right:20px;
}
.cadastro_email_botao{
	background-color: <?=$_base['cor'][1]?>;
	color: <?=$_base['cor'][2]?>;
	font-size: 16px;
	padding-left:15px;
	padding-right:15px;
	padding-top: 5px;
	padding-bottom: 5px;
	border:0px;
}
.cadastro_email_texto{
	font-size: 20px;
	text-align: left;
	color: #000;
	font-weight: 500;
	padding-top:0px;
}



.contato{
	background-color: <?=$_base['cor'][1]?>;
	padding-top:60px;
	padding-bottom:70px;
}
#contato label{
	color:#fff;
	font-size: 14px;
	font-weight: 500;
}
.contato_campos{
	background-color: transparent !important;
	border: 2px solid #fff !important;
	color:#fff !important;
}
.contato_botao{
	border:2px solid #fff;
	background-color: transparent;
	color:#fff;
	font-size: 15px;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 5px;
	padding-bottom: 5px;
}
.fileupload .uneditable-input{
	background-color: transparent !important;
	border: 2px solid #fff !important;
	color:#fff !important; 
}
.btn-default{
	background-color: transparent !important;
	border: 2px solid #fff !important;
	color:#fff !important; 
}
.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default{
	background-color: transparent !important;
	border: 2px solid #fff !important;
	color:#fff !important; 
}
.contato_msg{
	height:125px !important;
}


.instagram{
	margin-top: 70px;
	margin-bottom: 70px;
}

.stat_count{
	color:#fff;
	font-size: 50px;
	font-weight: bold;
	padding-bottom:30px;
}
.stat_count:before{
	position: absolute;
	top:60px;
	left: 50%;
	margin-left: -50px;
	overflow: hidden;
	width: 100px;
	height:5px;
	content: '\a0'; 
	background-color:#FFF;
}
.counter_title{
	color:#fff;
	font-size: 26px;
	font-weight: bold;
	line-height:30px;
}

.noticias_div{
	margin-top:30px;
}
a.noticias_imagem{
	display: block;
	width: 100%;
	height: 200px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
} 
.noticias_dia{
	text-align:left;
	font-size: 14px;
	color:<?=$_base['cor'][1]?>;
	font-weight: 500;
	padding-top: 5px;
}
a.noticias_titulo{
	display: block;
	padding-top: 10px;
	font-size: 17px;
	font-weight: bold;
	text-align: left;
	color: #333;
}
.noticias_previa{
	padding-top:5px;
	text-align: left;
	font-size: 14px;
	color:#999;
}

.card_item_topo{
	border-radius:40px;
	display: inline-block;
	width: 100%;
	background-color:#dadddc;
	height:40px;
}
.card_sub_titu{
	display: inline-block;
	padding-top:8px;
	padding-left: 5px;
	font-weight: bold;
}
.state-active{
	background-color:<?=$_base['cor'][1]?>;
	color:<?=$_base['cor'][2]?> !important;
}
.state-active .card_sub_titu{
	color:<?=$_base['cor'][2]?> !important;
}
.card_item_topo .ico{
	margin: 5px;
	display: inline-block;
}
.shortcode_accordion_item_body, .shortcode_toggles_item_body{
	padding-left: 0px;
	padding-top: 7px;
}

.footer{
	background-color: <?=$_base['cor']['9']?>;
	padding-top:60px;
	padding-bottom:30px;
}
.footer h3{
	color:<?=$_base['cor']['10']?>;
	font-size: 20px;
	font-weight: bold;
	padding-bottom:10px;
}
.rodape_textos{
	color:<?=$_base['cor']['11']?>;
	font-size: 14px;
}
.logo_rodape{
	text-align: left;
}
.logo_rodape img{
	width:70% !important;
}
.logo_rodape_texto{
	margin-top: 20px;
	text-align: justify;
	font-size: 14px;
	padding-bottom:30px;
	color:<?=$_base['cor']['11']?>;
}
.footer_bottom{
	background-color: <?=$_base['cor']['1']?>;
	color: <?=$_base['cor']['2']?>;
	text-align: center;
	padding-top:30px !important;
	padding-bottom:30px !important;
	font-size: 15px;
}

.redessociais_rodape{
	width: 30px;
	display: inline-block;
	margin-right:5px;
	margin-top: 10px;
}

.rodape_menu{
	list-style: none;
	text-align: left;
	margin: 0px;
	padding: 0px;
	margin-bottom:10px;
}
.rodape_menu li{
	list-style: none;
	width:100%;
	margin-top:7px;
	text-align: left;
}
.rodape_menu li a{
	font-size: 14px;
	color:<?=$_base['cor']['62']?>;
}
.rodape_menu li a:hover{
	text-decoration: underline;
}

input[type="text"], input[type="email"], input[type="password"], textarea{
	border-radius: 2px;
	-webkit-border-radius: 2px;
	width: 100%;
	height: 35px;
}

.botao_news{
	padding-left: 20px;
	padding-right: 20px;
	padding-top:7px;
	padding-bottom:5px;
	text-align: center;
	background-color:<?=$_base['cor']['1']?>; 
	color:<?=$_base['cor']['2']?>;
	cursor: pointer;
	font-size: 12px;
	font-weight: 500;
	border:0px;
	border-radius: 20px;
}
.botao_news:hover{
	background-color:<?=$_base['cor']['3']?>; 
	color:<?=$_base['cor']['4']?>;
}


.parceiros{
	background-color: #fff;
	padding-top:70px;
	padding-bottom:80px;
}

.parceiros_item{
	width:100%;
}
.parceiros_item img{
	width: 100%;
}

.parceiros_botao{
	display: inline-block;
	width:180px;
	border-radius:20px;
	text-align: center;
	background-color:#d4d2d1;
	color:#9d989b;
	font-size: 15px;
	font-weight: 500;
	padding: 5px;
	margin-top: 15px;
	cursor: pointer;
}
.parceiros_botao:hover{
	background-color:#ddd;
	color:#9d989b;
}


.galeria{
	background-color:<?=$_base['cor'][7]?>;
	padding-top:60px;
	padding-bottom:50px;
}
a.galeria_inicial_item{
	width:100%;
	height: 300px;
	display: inline-block;
	margin: 0px;
	padding: 0px;
	margin-top:20px;
	overflow: hidden;
}
.galeria_inicial_item_img{
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	width:100%;
	height:300px;
}
.galeria_inicial_item_titulo{
	opacity: 0;
	position: absolute;
	top:20px;
	left: 0px;
	width:100%;
	height:300px; 
	padding-top:130px;
	text-align: center;
	font-size: 25px;
	font-weight: bold;
	color:#fff;
	background-color: rgba(0,0,0,0.6);
}
.galeria_inicial_item_titulo span{
	font-size: 14px;
	font-weight: 500;
	display:block;
	padding-top:2px;
	width:100%;
	text-align: center;
}
.galeria_inicial_item_titulo:hover{
	opacity:1;
	transition:all 0.3s ease;
}

.galeria_imagem_interna{
	width: 200px;
	height: 130px;
	overflow: hidden;
	display: inline-block;
	margin:10px;
}
.galeria_imagem_interna img{
	width: 100%;
}



#slider-depoimentos{
	height:auto;
	text-align: center;
}
.depoimentos_inicial_imagem{
	float: left;
	width:47%;
	margin-top:20px;
	text-align: right;
}
.depoimentos_inicial_imagem img{
	width: 100px;
	height: 100px;
	border-radius:100px;
}
.depoimentos_inicial_conteudo{
	width:100%;
	margin-top: 0px;
	font-size: 17px;
	color:#385188; 
	text-align: left; 
	height: auto;
} 
.depoimentos_inicial_nome{
	float: right;
	width:47%;
	font-size: 16px;
	color:#EF7F1A;
	font-weight: bold;
	margin-left:20px;
	margin-top:20px;
	text-align: left;
}
.depoimentos_left{
	position: absolute;
	left: 0px;
	top:50%;
	margin-top:-60px;
	cursor: pointer;
	z-index: 999999;
}
.depoimentos_right{
	position: absolute;
	right: 0px;
	top:50%;
	margin-top:-60px;
	cursor: pointer;
	z-index: 999999;
}
#slider-depoimentos .carousel-indicators{
	bottom:30px;
}


.depoimentos_lista{
	padding-top:50px;
	padding-bottom:50px;
}
.depoimentos_lista_conteudo{
	font-size: 16px;
	color:#385188;
	text-align: center;
	width: 100%;
}
.depoimentos_lista_nome{
	font-size: 17px;
	color:#000;
	font-weight: bold;
	padding-top: 15px;
	text-align: center;
}
.depoimentos_lista_cidade{
	font-size: 14px;
	color:#000;
	text-align: center;     
}

.depoimentos_lista_imagem{
	padding-top: 30px;
	text-align: center;
}
.depoimentos_lista_imagem img{
	max-width: 250px;
}

.depoimentos_base{
	padding-top:50px; margin-bottom:100px; margin-left: 100px; margin-right: 100px; text-align: center;
}

.paginacao{
	padding-top:10px;
	margin-bottom:30px;
	text-align: center;
	width: 100%;
}
.paginacao ul{
	list-style: none;
}
.paginacao li{
	list-style: none;
	display: inline-block;
	text-align: center;
	padding:0px;
	margin: 2px;
}
.paginacao a{
	border-radius: 2px;
	font-size: 15px;
	padding: 5px;
}
.paginacao a:active, .paginacao a.active {
	background: <?=$_base['cor']['1']?>;   
	border-color: <?=$_base['cor']['1']?>;
	color: <?=$_base['cor']['2']?>;
}
.paginacao a:active:hover, .paginacao a.active:hover {
	background: <?=$_base['cor']['3']?>;   
	border-color: <?=$_base['cor']['3']?>;
	color: <?=$_base['cor']['4']?>;
}


.tp-bullets{
	right: 0px;
	text-align: center;
	width: 100% !important;
	top:105%; 
}
.tp-bullets.simplebullets.round .bullet{
	float: none;
	display: inline-block;
	margin-left:4px !important;
	margin-right:4px !important;
}

.owl-theme .owl-dots .owl-dot span{
	width:15px;
	height:15px;
	background-color: #666;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
	background-color: <?=$_base['cor'][3]?>;
}
#galeria .owl-theme .owl-dots .owl-dot.active span, #galeria .owl-theme .owl-dots .owl-dot:hover span{
	background-color: <?=$_base['cor'][8]?>;
}

.quemsomos_titulos{
	color:<?=$_base['cor'][1]?>;
	margin-top:50px;
}

#corpo{
	padding-top: 70px;
	padding-bottom: 70px;
}


.botao_padrao{
	background-color: <?=$_base['cor'][1]?>;
	color: <?=$_base['cor'][2]?>;
	border-radius:4px !important;
}
.botao_padrao:hover{
	background-color: <?=$_base['cor'][3]?>;
	color: <?=$_base['cor'][4]?>;
}
.titulo_lateral{
	margin-bottom:5px;
	padding-bottom:5px;
}


.categorias_lateral{
	margin-bottom:20px;
	padding-right:20px;
	padding-bottom:20px;
	text-align: left;
}
.categorias_lateral ul{
	list-style: none;
	margin:0px;
	padding:0px;
}
.categorias_lateral li{
	list-style: none;
	margin-top:10px;
}
.categorias_lateral li ul{
	list-style: none;
	margin:0px;
	padding:0px;
}
.categorias_lateral li a{
	font-size: 16px;
	color:#000;
}
.categorias_lateral li a.active{
	color:<?=$_base['cor'][1]?>;
}
.categorias_lateral li ul li {
	margin-left: 20px;
}


.pacotes_titulo{
	font-size:26px !important;
	font-weight: bold !important;
	text-align: left !important;
	margin-top:0px !important;
	padding: 0px !important;
}
.pacotes_descricao{
	clear: both;
	margin-top:30px;
	width: 100%;
}
.pacotes_imagem_interna{
	width: 100%;
	height: auto;
}
.pacotes_imagem_interna_mini{
	width: 100px;
	height: 50px;
	margin-left:5px;
	margin-right: 5px;
	margin-top: 10px;
	display: inline-block;
	overflow: hidden;
}


.social {
    padding-bottom:5px;
    width:100%;
    margin-top:5px;
}
.social ul {
    margin-left: 0px;
    padding-left: 0px;
}
.social li {
    list-style: none;
    float: left;
}
.social li a {
    display: block;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    color: #fff;
    margin: 0 3px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    border-radius: 2px;
    font-size: 16px;
}

.social li a.facebook {
    background: #5370bb;
}
.social li a.twitter {
    background: #6bb8db;
}
.social li a.pinterest {
    background: #e95659;
}
.social li a.googleplus {
    background: #dd4b39;
}
.social li a.linkedin {
    background: #0077b5;
}
.social li a:hover {
    opacity: 0.7;
    color:#FFF;
}

a.rslides_nav{
	display: block !important;
	position: absolute !important;
	top:45% !important;
	z-index: 999;
	color:#fff;
	font-size: 60px;
}

a.prev{
	left: 10px !important;
}
a.next{
	right: 10px !important;
}

.whatsapp_lateral{
	position: fixed;
	left: 10px;
	bottom:20px;
	z-index: 9999;
	width: 50px;
}
</style>