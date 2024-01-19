-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 17/08/2022 às 17:02
-- Versão do servidor: 10.3.36-MariaDB
-- Versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fabricadosite_provedor3`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acordeon`
--

CREATE TABLE `acordeon` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `acordeon_grupos`
--

CREATE TABLE `acordeon_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT 2,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `acordeon_ordem`
--

CREATE TABLE `acordeon_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_config`
--

CREATE TABLE `adm_config` (
  `id` int(11) NOT NULL,
  `email_nome` varchar(255) NOT NULL,
  `email_origem` varchar(255) NOT NULL,
  `email_retorno` varchar(255) NOT NULL,
  `email_porta` int(11) NOT NULL,
  `email_host` varchar(255) NOT NULL,
  `email_usuario` varchar(200) NOT NULL,
  `email_senha` varchar(200) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `analytcs` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_config`
--

INSERT INTO `adm_config` (`id`, `email_nome`, `email_origem`, `email_retorno`, `email_porta`, `email_host`, `email_usuario`, `email_senha`, `logo`, `analytcs`) VALUES
(1, 'Escritório Contábel', 'falecom@fabricadosite.com', 'falecom@fabricadosite.com', 587, 'mail.fabricadosite.com', 'falecom@fabricadosite.com', '00000000000', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_setores`
--

CREATE TABLE `adm_setores` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pai` int(11) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL,
  `titulo_tecnico` varchar(200) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `ico` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_setores`
--

INSERT INTO `adm_setores` (`id`, `id_pai`, `titulo`, `titulo_tecnico`, `endereco`, `ico`) VALUES
(124, 0, 'Layout - Topos', 'Layout - Topos', 'topos', 'fas fa-paint-brush'),
(108, 0, 'Planos', 'Planos', 'planos', 'fas fa-dollar-sign'),
(107, 0, 'Características', 'Características', 'caracteristicas', 'fas fa-list'),
(80, 0, 'Layout - Páginas', 'Layout - Páginas', 'layout', 'fas fa-paint-brush'),
(46, 0, 'Redes Sociais', 'Redes Sociais', 'redes_sociais', 'fab fa-facebook'),
(44, 0, 'Banners', 'Banners', 'banners', 'far fa-images'),
(28, 0, 'Imagens', 'Imagens', 'imagens', 'far fa-image'),
(27, 0, 'Postagens', 'Postagens', 'postagens', 'far fa-newspaper'),
(38, 2, 'Imagem Organização', 'Configurações - Imagem Organização', '', ''),
(37, 2, 'Smtp', 'Configurações - Smtp', '', ''),
(126, 0, 'Formulários/Contato', 'Formulários', 'contato', 'far fa-comments'),
(2, 0, 'Configurações', 'Configurações', 'config', 'fas fa-cogs'),
(1, 0, 'Usuários', 'Usuários', 'usuarios', 'fas fa-users'),
(125, 0, 'Layout - Rodapés', 'Layout - Rodapés', 'rodapes', 'fas fa-paint-brush'),
(118, 0, 'Widgets', 'Widgets', 'widgets', 'fas fa-code'),
(121, 0, 'Conteúdos', 'Conteúdos', 'conteudos_blocos', 'fas fa-align-justify'),
(129, 2, 'Google analytics', 'Google analytics', NULL, NULL),
(132, 0, 'Layout - Itens', 'Layout - Itens', 'layout_itens', 'fas fa-paint-brush'),
(133, 130, 'Imóveis - Beview', 'Imóveis - Beview', '', ''),
(140, 2, 'Editar CSS', 'Editar CSS', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_setores_ordem`
--

CREATE TABLE `adm_setores_ordem` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_setores_ordem`
--

INSERT INTO `adm_setores_ordem` (`id`, `usuario`, `data`) VALUES
(254, '1', '44,107,27,121,108,80,125,124,127,82,118,132,46,28,126,2,1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_setores_perfil`
--

CREATE TABLE `adm_setores_perfil` (
  `id` int(11) NOT NULL,
  `setor` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_setores_perfil`
--

INSERT INTO `adm_setores_perfil` (`id`, `setor`) VALUES
(110, '10056'),
(4, '85'),
(170, '52'),
(85, '10057'),
(8, '71'),
(111, '10072'),
(11, '10001'),
(12, '10000'),
(116, '1'),
(17, '10048'),
(55, '10063'),
(118, '2'),
(81, '10025'),
(88, '10065'),
(80, '10030'),
(113, '10081'),
(112, '10059'),
(104, '10039'),
(117, '3'),
(122, '7'),
(123, '6'),
(124, '9'),
(125, '10'),
(126, '18'),
(127, '14'),
(128, '12'),
(129, '16'),
(130, '15'),
(131, '11'),
(132, '17'),
(133, '20'),
(134, '21'),
(135, '22'),
(136, '23'),
(137, '24'),
(139, '28'),
(201, '58'),
(150, '29'),
(158, '30'),
(266, '44'),
(202, '35'),
(169, '46'),
(216, '36'),
(183, '61'),
(208, '69'),
(188, '48'),
(194, '42'),
(195, '54'),
(198, '25'),
(214, '4'),
(212, '68'),
(215, '5'),
(217, '32'),
(218, '33'),
(219, '55'),
(220, '40'),
(221, '39'),
(222, '57'),
(223, '34'),
(231, '37'),
(230, '38'),
(234, '88'),
(253, '100'),
(243, '80'),
(250, '98'),
(251, '97'),
(252, '99'),
(254, '90'),
(347, '93'),
(270, '27'),
(329, '121'),
(331, '91'),
(322, '126'),
(343, '103'),
(333, '109'),
(281, '101'),
(365, '133'),
(286, '112'),
(346, '82'),
(290, '114'),
(291, '115'),
(292, '116'),
(351, '83'),
(337, '111'),
(348, '113'),
(332, '107'),
(299, '117'),
(344, '76'),
(330, '70'),
(311, '125'),
(352, '127'),
(309, '123'),
(310, '124'),
(327, '120'),
(326, '128'),
(356, '105'),
(357, '104'),
(358, '89'),
(359, '119'),
(360, '118'),
(361, '129'),
(362, '130'),
(364, '132'),
(366, '77'),
(367, '74'),
(368, '75'),
(369, '78'),
(370, '108'),
(371, '73'),
(372, '131'),
(373, '84'),
(374, '134'),
(375, '135'),
(376, '136'),
(377, '137'),
(378, '138'),
(379, '139'),
(380, '140'),
(381, '141'),
(382, '142');

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_setores_usuario`
--

CREATE TABLE `adm_setores_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` char(200) DEFAULT NULL,
  `setor` char(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_setores_usuario`
--

INSERT INTO `adm_setores_usuario` (`id`, `usuario`, `setor`) VALUES
(564, '151684786992902', '76'),
(563, '151684681732022', '82'),
(562, '151684681732022', '76'),
(565, '151684786992902', '80'),
(566, '151684786992902', '78'),
(567, '151684786992902', '27'),
(568, '155066921129611', '103'),
(569, '155066921129611', '83'),
(570, '155429487281823', '106'),
(571, '155429487281823', '70'),
(572, '155429487281823', '29'),
(573, '155429487281823', '27'),
(574, '155429487281823', '105'),
(575, '155429487281823', '88'),
(576, '158500225266470', '44'),
(577, '158500225266470', '70'),
(578, '158500225266470', '76'),
(579, '158500225266470', '91'),
(580, '158500225266470', '2'),
(581, '158500225266470', '77'),
(582, '158500225266470', '82'),
(583, '158500225266470', '52'),
(584, '158500225266470', '74'),
(585, '158500225266470', '75'),
(586, '158500225266470', '83'),
(587, '158500225266470', '38'),
(588, '158500225266470', '28'),
(589, '158500225266470', '110'),
(590, '158500225266470', '80'),
(591, '158500225266470', '36'),
(592, '158500225266470', '29'),
(593, '158500225266470', '78'),
(594, '158500225266470', '27'),
(595, '158500225266470', '73'),
(596, '158500225266470', '46'),
(597, '158500225266470', '105'),
(598, '158500225266470', '37'),
(599, '158500225266470', '88'),
(600, '158500225266470', '89'),
(601, '158500225266470', '1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm_usuario`
--

CREATE TABLE `adm_usuario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `email_recuperacao` varchar(255) DEFAULT NULL,
  `usuario` char(255) DEFAULT NULL,
  `senha` char(255) DEFAULT NULL,
  `abre_fecha_menu` int(11) DEFAULT NULL,
  `recuperacao` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `adm_usuario`
--

INSERT INTO `adm_usuario` (`id`, `codigo`, `nome`, `imagem`, `email_recuperacao`, `usuario`, `senha`, `abre_fecha_menu`, `recuperacao`) VALUES
(1, '1', 'Administrador', 'perfil-fw-[16-08-22][21-01-37].png', 'falecom@fabricadosite.com', '21232f297a57a5a743894a0e4a801fc3', '827ccb0eea8a706c4c34a16891f84e7b', 0, '287abb19da8aadbd118443e92685853e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `tempo` varchar(100) NOT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `audios_categorias`
--

CREATE TABLE `audios_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `audios_categorias`
--

INSERT INTO `audios_categorias` (`id`, `codigo`, `grupo`, `titulo`, `imagem`) VALUES
(27, '163744778284222', '163744773581988', 'Categoria 1', NULL),
(28, '163744779170892', '163744773581988', 'Categoria 2', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `audios_grupos`
--

CREATE TABLE `audios_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `mostrar_categorias` int(11) DEFAULT 1,
  `mostrar_titulo_video` int(11) DEFAULT 1,
  `tipo_menu` int(11) DEFAULT 0,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `balcoes`
--

CREATE TABLE `balcoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `uf` varchar(3) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `grupo_produtos` varchar(100) DEFAULT NULL,
  `titulo` char(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `botao_alinhamento` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `banners`
--

INSERT INTO `banners` (`id`, `codigo`, `grupo`, `grupo_produtos`, `titulo`, `endereco`, `imagem`, `texto`, `botao_codigo`, `botao_alinhamento`) VALUES
(111, '159421975529787', '159421971030200', NULL, 'teste 2', '', '6-[08-07-20][11-49-19].jpeg', NULL, NULL, NULL),
(110, '159421971944030', '159421971030200', NULL, 'teste', '', '2-[08-07-20][11-48-47].jpg', NULL, NULL, NULL),
(108, '159421856175293', '159421755016280', NULL, 'Banner 1', '', 'BANER1-[16-08-22][22-18-47].jpg', '<div align=\"right\"><font color=\"#FFFFFF\"><font color=\"#CEC6CE\"><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-size: 12px;\"></span></span></font><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\"></span></font><br></div>', '', 'right'),
(151, '166075794554183', '159421755016280', NULL, 'Banner2', '', 'BANER2-[17-08-22][14-39-13].jpg', '', NULL, NULL),
(123, '160626462235495', '148713350186606', NULL, 'teste', '#', 'AnuncieAqui-730x240-[29-03-21][18-39-28].jpg', NULL, NULL, NULL),
(129, '161990426841154', '161990417290497', NULL, 'Banner 1', 'index', 'baner-1-[01-05-21][18-24-35].jpg', '<p></p><div style=\"text-align: left;\"><span style=\"font-family: Ubuntu; font-size: 46px; white-space: pre-wrap;\"><b style=\"\"><font color=\"#ffffff\"><br></font></b></span></div><div style=\"text-align: left;\"><span style=\"font-family: Ubuntu; font-size: 46px; white-space: pre-wrap;\"><b><font color=\"#ffffff\"><br></font></b></span></div><div style=\"text-align: left;\"><span style=\"font-family: Ubuntu; font-size: 46px; white-space: pre-wrap;\"><b><font color=\"#ffffff\"><br></font></b></span></div><div style=\"text-align: left;\"><font color=\"#ffffff\"><span style=\"font-family: Ubuntu; font-size: 46px; white-space: pre-wrap;\"><b>Facilite sua Vida!\r\n</b></span><span style=\"font-family: Ubuntu; font-size: 34px; white-space: pre-wrap;\">Digitalize seus Documentos.\r\n</span><span style=\"font-family: Ubuntu; font-size: 28px; white-space: pre-wrap;\">Ganhe tempo, organização &nbsp;e produtividade&nbsp;sem limites.</span></font><br></div><p></p>', '', 'center'),
(131, '161991024614251', '161991016538192', NULL, 'Banner 1', '', 'baner1-[01-05-21][20-04-09].jpg', '', NULL, NULL),
(132, '161991025428832', '161991016538192', NULL, 'Banner 2', '', 'baner-2-[01-05-21][20-04-17].jpg', '', NULL, NULL),
(133, '161991026754587', '161991016538192', NULL, 'Banner 3', '', 'baner-3-[01-05-21][20-04-31].jpg', '', NULL, NULL),
(138, '163302866993981', '163302849714614', NULL, 'Banner1', '', 'baner-fundo-paginas-[30-09-21][16-12-09].jpg', '', '', 'left'),
(140, '163310673192825', '163310619422794', NULL, 'Hospedagem de Sites', 'hospedagemdesites', 'hospedagem-cpanel-[01-10-21][13-45-48].jpg', '', NULL, NULL),
(141, '163345361027595', '163345358737911', NULL, 'Banner1', '', 'baner-fundo-lojascripts-[05-10-21][14-07-17].jpg', '', NULL, NULL),
(142, '163345735394988', '148713350186607', NULL, 'Host 1 Mes Gratis', 'hospedagemdesites', 'host-gartis-[05-10-21][15-47-37].jpg', '', NULL, NULL),
(143, '163414545979555', '163414542687847', NULL, 'Banner1', '', 'baner-fundo-paginas-hospedagemdesites-[13-10-21][14-18-35].jpg', '', NULL, NULL),
(145, '163535523968744', '163535511542441', NULL, 'Pix', '', 'bara-pix-[27-10-21][14-25-12].gif', '', NULL, NULL),
(149, '163658378662764', '163658037859877', NULL, 'Banner3', '', 'baner3-[10-11-21][19-38-24].jpg', '', NULL, NULL),
(150, '164338258449311', '148841831030374', NULL, 'Principal', '', 'baner-home-1024x87-fw-[28-01-22][12-10-20].png', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners_grupos`
--

CREATE TABLE `banners_grupos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` char(200) DEFAULT NULL,
  `bloqueio` int(11) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `banners_grupos`
--

INSERT INTO `banners_grupos` (`id`, `codigo`, `titulo`, `bloqueio`, `classes`, `classes_img`) VALUES
(17, '159421755016280', 'Banners Principais', NULL, '', ''),
(11, '148713350186607', 'Banner Lateral Esquerda', 1, NULL, NULL),
(13, '148841831030374', 'Banner Lateral Direita', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `banners_ordem`
--

CREATE TABLE `banners_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `banners_ordem`
--

INSERT INTO `banners_ordem` (`id`, `codigo`, `data`) VALUES
(78, '148713351986017', '117'),
(84, '148713350186606', '115,116,121,122,123'),
(103, '148713350186607', '114,136,142'),
(71, '159421971030200', '110,111'),
(90, '161990417290497', '129'),
(111, '148841831030374', '112,113,130,134,150'),
(94, '161991016538192', '131,132,133'),
(112, '159421755016280', '108,109,118,119,120,124,125,126,127,128,135,137,144,151'),
(107, '163302849714614', '138,139,146'),
(101, '163310619422794', '140'),
(102, '163345358737911', '141'),
(104, '163414542687847', '143'),
(106, '163535511542441', '145'),
(110, '163658037859877', '147,148,149');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `fisica_nome` varchar(255) DEFAULT NULL,
  `fisica_sexo` varchar(20) DEFAULT NULL,
  `fisica_nascimento` int(11) DEFAULT NULL,
  `fisica_cpf` varchar(100) DEFAULT NULL,
  `fisica_rg` varchar(100) DEFAULT NULL,
  `juridica_nome` varchar(255) DEFAULT NULL,
  `juridica_razao` varchar(255) DEFAULT NULL,
  `juridica_responsavel` varchar(255) DEFAULT NULL,
  `juridica_cnpj` varchar(100) DEFAULT NULL,
  `juridica_ie` varchar(255) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `receber_promocoes` int(11) DEFAULT 0,
  `anuncio_gratis` int(11) DEFAULT 0,
  `etapa` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_comentarios`
--

CREATE TABLE `cadastro_comentarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `cadastro` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `comentario` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_detalhes`
--

CREATE TABLE `cadastro_detalhes` (
  `id` int(11) NOT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cadastro_detalhes`
--

INSERT INTO `cadastro_detalhes` (`id`, `botao_codigo`) VALUES
(1, '160702629766519');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_email`
--

CREATE TABLE `cadastro_email` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(200) DEFAULT NULL,
  `email` char(200) DEFAULT NULL,
  `grupo_codigo` varchar(255) DEFAULT NULL,
  `grupo_titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_email_grupos`
--

CREATE TABLE `cadastro_email_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `descricao` text DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cadastro_email_grupos`
--

INSERT INTO `cadastro_email_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `descricao`, `botao_codigo`, `classes`, `classes_img`) VALUES
(6, '159423504627111', 'Cadastre-se', 0, 'RECEBA TODAS NOSSAS OFERTAS EXCLUSIVAS POR E-MAIL', '160693669447745', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_fone`
--

CREATE TABLE `cadastro_fone` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(200) DEFAULT NULL,
  `fone` char(100) DEFAULT NULL,
  `grupo_codigo` varchar(255) DEFAULT NULL,
  `grupo_titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_fone_grupos`
--

CREATE TABLE `cadastro_fone_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `descricao` text DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_grupos`
--

CREATE TABLE `cadastro_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `descricao` text DEFAULT NULL,
  `dados_acesso` int(11) DEFAULT 1,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cadastro_grupos`
--

INSERT INTO `cadastro_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `descricao`, `dados_acesso`, `botao_codigo`, `classes`, `classes_img`) VALUES
(1, '159647710291537', 'Cadastro', 0, 'Faça seu cadastro', 1, '160694317744131', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `alinhamento` varchar(30) DEFAULT 'center'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `codigo`, `grupo`, `titulo`, `previa`, `conteudo`, `imagem`, `icone`, `alinhamento`) VALUES
(176, '164329481515369', '164329476972748', 'WIFI-GRÁTIS', NULL, '', '1-[16-08-22][21-38-30].png', '', 'center'),
(177, '164329515727139', '164329476972748', '100% FIBRA ÓPTICA', NULL, '<p><br></p>', '4-fw-[16-08-22][21-51-51].png', '', 'center'),
(178, '164329524445186', '164329476972748', 'SUPORTE GRÁTIS', NULL, '<p><br></p>', '3-[16-08-22][21-50-34].png', '', 'center'),
(182, '166069769520091', '164329476972748', 'INSTALAÇÃO GRÁTIS!', NULL, NULL, '5-fw-[16-08-22][21-55-01].png', NULL, 'center');

-- --------------------------------------------------------

--
-- Estrutura para tabela `caracteristicas_grupos`
--

CREATE TABLE `caracteristicas_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `ordem_itens` int(11) DEFAULT 1,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `caracteristicas_grupos`
--

INSERT INTO `caracteristicas_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `itens_por_linha`, `descricao`, `ordem_itens`, `classes`, `classes_img`) VALUES
(32, '164329476972748', '<h5 align=\"center\"><span class=\"themecolor\" style=\"font-size: 20px;\"><strong>BENEFÍCIOS</strong></span></h5>', 1, 4, '<h2 align=\"center\"><span style=\"font-size: 42px; font-family: &quot;Exol2 Regular&quot;;\" exol2=\"\" regular\";\"=\"\">Roteador Wi-Fi</span><span class=\"themecolor\"><span style=\"font-family: &quot;Exol2 Regular&quot;; font-size: 42px;\" exol2=\"\" regular\";\"=\"\"> </span><font color=\"#FF9C00\"><span style=\"font-size: 42px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">grátis</span></font></span><span style=\"font-size: 42px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" regular\";\"=\"\">!</span></h2><p></p>', 1, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `caracteristicas_ordem`
--

CREATE TABLE `caracteristicas_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `caracteristicas_ordem`
--

INSERT INTO `caracteristicas_ordem` (`id`, `grupo`, `data`) VALUES
(73, '164329476972748', '176,177,178'),
(72, '164329476972748', '176,177'),
(71, '164329476972748', '176'),
(77, '164329476972748', '176,177,178,182');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `uf` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `estado`, `uf`) VALUES
(1, 'Afonso Cláudio', 8, 'ES'),
(2, 'Água Doce do Norte', 8, 'ES'),
(3, 'Águia Branca', 8, 'ES'),
(4, 'Alegre', 8, 'ES'),
(5, 'Alfredo Chaves', 8, 'ES'),
(6, 'Alto Rio Novo', 8, 'ES'),
(7, 'Anchieta', 8, 'ES'),
(8, 'Apiacá', 8, 'ES'),
(9, 'Aracruz', 8, 'ES'),
(10, 'Atilio Vivacqua', 8, 'ES'),
(11, 'Baixo Guandu', 8, 'ES'),
(12, 'Barra de São Francisco', 8, 'ES'),
(13, 'Boa Esperança', 8, 'ES'),
(14, 'Bom Jesus do Norte', 8, 'ES'),
(15, 'Brejetuba', 8, 'ES'),
(16, 'Cachoeiro de Itapemirim', 8, 'ES'),
(17, 'Cariacica', 8, 'ES'),
(18, 'Castelo', 8, 'ES'),
(19, 'Colatina', 8, 'ES'),
(20, 'Conceição da Barra', 8, 'ES'),
(21, 'Conceição do Castelo', 8, 'ES'),
(22, 'Divino de São Lourenço', 8, 'ES'),
(23, 'Domingos Martins', 8, 'ES'),
(24, 'Dores do Rio Preto', 8, 'ES'),
(25, 'Ecoporanga', 8, 'ES'),
(26, 'Fundão', 8, 'ES'),
(27, 'Governador Lindenberg', 8, 'ES'),
(28, 'Guaçuí', 8, 'ES'),
(29, 'Guarapari', 8, 'ES'),
(30, 'Ibatiba', 8, 'ES'),
(31, 'Ibiraçu', 8, 'ES'),
(32, 'Ibitirama', 8, 'ES'),
(33, 'Iconha', 8, 'ES'),
(34, 'Irupi', 8, 'ES'),
(35, 'Itaguaçu', 8, 'ES'),
(36, 'Itapemirim', 8, 'ES'),
(37, 'Itarana', 8, 'ES'),
(38, 'Iúna', 8, 'ES'),
(39, 'Jaguaré', 8, 'ES'),
(40, 'Jerônimo Monteiro', 8, 'ES'),
(41, 'João Neiva', 8, 'ES'),
(42, 'Laranja da Terra', 8, 'ES'),
(43, 'Linhares', 8, 'ES'),
(44, 'Mantenópolis', 8, 'ES'),
(45, 'Marataízes', 8, 'ES'),
(46, 'Marechal Floriano', 8, 'ES'),
(47, 'Marilândia', 8, 'ES'),
(48, 'Mimoso do Sul', 8, 'ES'),
(49, 'Montanha', 8, 'ES'),
(50, 'Mucurici', 8, 'ES'),
(51, 'Muniz Freire', 8, 'ES'),
(52, 'Muqui', 8, 'ES'),
(53, 'Nova Venécia', 8, 'ES'),
(54, 'Pancas', 8, 'ES'),
(55, 'Pedro Canário', 8, 'ES'),
(56, 'Pinheiros', 8, 'ES'),
(57, 'Piúma', 8, 'ES'),
(58, 'Ponto Belo', 8, 'ES'),
(59, 'Presidente Kennedy', 8, 'ES'),
(60, 'Rio Bananal', 8, 'ES'),
(61, 'Rio Novo do Sul', 8, 'ES'),
(62, 'Santa Leopoldina', 8, 'ES'),
(63, 'Santa Maria de Jetibá', 8, 'ES'),
(64, 'Santa Teresa', 8, 'ES'),
(65, 'São Domingos do Norte', 8, 'ES'),
(66, 'São Gabriel da Palha', 8, 'ES'),
(67, 'São José do Calçado', 8, 'ES'),
(68, 'São Mateus', 8, 'ES'),
(69, 'São Roque do Canaã', 8, 'ES'),
(70, 'Serra', 8, 'ES'),
(71, 'Sooretama', 8, 'ES'),
(72, 'Vargem Alta', 8, 'ES'),
(73, 'Venda Nova do Imigrante', 8, 'ES'),
(74, 'Viana', 8, 'ES'),
(75, 'Vila Pavão', 8, 'ES'),
(76, 'Vila Valério', 8, 'ES'),
(77, 'Vila Velha', 8, 'ES'),
(78, 'Vitória', 8, 'ES'),
(79, 'Acrelândia', 1, 'AC'),
(80, 'Assis Brasil', 1, 'AC'),
(81, 'Brasiléia', 1, 'AC'),
(82, 'Bujari', 1, 'AC'),
(83, 'Capixaba', 1, 'AC'),
(84, 'Cruzeiro do Sul', 1, 'AC'),
(85, 'Epitaciolândia', 1, 'AC'),
(86, 'Feijó', 1, 'AC'),
(87, 'Jordão', 1, 'AC'),
(88, 'Mâncio Lima', 1, 'AC'),
(89, 'Manoel Urbano', 1, 'AC'),
(90, 'Marechal Thaumaturgo', 1, 'AC'),
(91, 'Plácido de Castro', 1, 'AC'),
(92, 'Porto Acre', 1, 'AC'),
(93, 'Porto Walter', 1, 'AC'),
(94, 'Rio Branco', 1, 'AC'),
(95, 'Rodrigues Alves', 1, 'AC'),
(96, 'Santa Rosa do Purus', 1, 'AC'),
(97, 'Sena Madureira', 1, 'AC'),
(98, 'Senador Guiomard', 1, 'AC'),
(99, 'Tarauacá', 1, 'AC'),
(100, 'Xapuri', 1, 'AC'),
(101, 'Água Branca', 2, 'AL'),
(102, 'Anadia', 2, 'AL'),
(103, 'Arapiraca', 2, 'AL'),
(104, 'Atalaia', 2, 'AL'),
(105, 'Barra de Santo Antônio', 2, 'AL'),
(106, 'Barra de São Miguel', 2, 'AL'),
(107, 'Batalha', 2, 'AL'),
(108, 'Belém', 2, 'AL'),
(109, 'Belo Monte', 2, 'AL'),
(110, 'Boca da Mata', 2, 'AL'),
(111, 'Branquinha', 2, 'AL'),
(112, 'Cacimbinhas', 2, 'AL'),
(113, 'Cajueiro', 2, 'AL'),
(114, 'Campestre', 2, 'AL'),
(115, 'Campo Alegre', 2, 'AL'),
(116, 'Campo Grande', 2, 'AL'),
(117, 'Canapi', 2, 'AL'),
(118, 'Capela', 2, 'AL'),
(119, 'Carneiros', 2, 'AL'),
(120, 'Chã Preta', 2, 'AL'),
(121, 'Coité do Nóia', 2, 'AL'),
(122, 'Colônia Leopoldina', 2, 'AL'),
(123, 'Coqueiro Seco', 2, 'AL'),
(124, 'Coruripe', 2, 'AL'),
(125, 'Craíbas', 2, 'AL'),
(126, 'Delmiro Gouveia', 2, 'AL'),
(127, 'Dois Riachos', 2, 'AL'),
(128, 'Estrela de Alagoas', 2, 'AL'),
(129, 'Feira Grande', 2, 'AL'),
(130, 'Feliz Deserto', 2, 'AL'),
(131, 'Flexeiras', 2, 'AL'),
(132, 'Girau do Ponciano', 2, 'AL'),
(133, 'Ibateguara', 2, 'AL'),
(134, 'Igaci', 2, 'AL'),
(135, 'Igreja Nova', 2, 'AL'),
(136, 'Inhapi', 2, 'AL'),
(137, 'Jacaré dos Homens', 2, 'AL'),
(138, 'Jacuípe', 2, 'AL'),
(139, 'Japaratinga', 2, 'AL'),
(140, 'Jaramataia', 2, 'AL'),
(141, 'Jequiá da Praia', 2, 'AL'),
(142, 'Joaquim Gomes', 2, 'AL'),
(143, 'Jundiá', 2, 'AL'),
(144, 'Junqueiro', 2, 'AL'),
(145, 'Lagoa da Canoa', 2, 'AL'),
(146, 'Limoeiro de Anadia', 2, 'AL'),
(147, 'Maceió', 2, 'AL'),
(148, 'Major Isidoro', 2, 'AL'),
(149, 'Mar Vermelho', 2, 'AL'),
(150, 'Maragogi', 2, 'AL'),
(151, 'Maravilha', 2, 'AL'),
(152, 'Marechal Deodoro', 2, 'AL'),
(153, 'Maribondo', 2, 'AL'),
(154, 'Mata Grande', 2, 'AL'),
(155, 'Matriz de Camaragibe', 2, 'AL'),
(156, 'Messias', 2, 'AL'),
(157, 'Minador do Negrão', 2, 'AL'),
(158, 'Monteirópolis', 2, 'AL'),
(159, 'Murici', 2, 'AL'),
(160, 'Novo Lino', 2, 'AL'),
(161, 'Olho d`Água das Flores', 2, 'AL'),
(162, 'Olho d`Água do Casado', 2, 'AL'),
(163, 'Olho d`Água Grande', 2, 'AL'),
(164, 'Olivença', 2, 'AL'),
(165, 'Ouro Branco', 2, 'AL'),
(166, 'Palestina', 2, 'AL'),
(167, 'Palmeira dos Índios', 2, 'AL'),
(168, 'Pão de Açúcar', 2, 'AL'),
(169, 'Pariconha', 2, 'AL'),
(170, 'Paripueira', 2, 'AL'),
(171, 'Passo de Camaragibe', 2, 'AL'),
(172, 'Paulo Jacinto', 2, 'AL'),
(173, 'Penedo', 2, 'AL'),
(174, 'Piaçabuçu', 2, 'AL'),
(175, 'Pilar', 2, 'AL'),
(176, 'Pindoba', 2, 'AL'),
(177, 'Piranhas', 2, 'AL'),
(178, 'Poço das Trincheiras', 2, 'AL'),
(179, 'Porto Calvo', 2, 'AL'),
(180, 'Porto de Pedras', 2, 'AL'),
(181, 'Porto Real do Colégio', 2, 'AL'),
(182, 'Quebrangulo', 2, 'AL'),
(183, 'Rio Largo', 2, 'AL'),
(184, 'Roteiro', 2, 'AL'),
(185, 'Santa Luzia do Norte', 2, 'AL'),
(186, 'Santana do Ipanema', 2, 'AL'),
(187, 'Santana do Mundaú', 2, 'AL'),
(188, 'São Brás', 2, 'AL'),
(189, 'São José da Laje', 2, 'AL'),
(190, 'São José da Tapera', 2, 'AL'),
(191, 'São Luís do Quitunde', 2, 'AL'),
(192, 'São Miguel dos Campos', 2, 'AL'),
(193, 'São Miguel dos Milagres', 2, 'AL'),
(194, 'São Sebastião', 2, 'AL'),
(195, 'Satuba', 2, 'AL'),
(196, 'Senador Rui Palmeira', 2, 'AL'),
(197, 'Tanque d`Arca', 2, 'AL'),
(198, 'Taquarana', 2, 'AL'),
(199, 'Teotônio Vilela', 2, 'AL'),
(200, 'Traipu', 2, 'AL'),
(201, 'União dos Palmares', 2, 'AL'),
(202, 'Viçosa', 2, 'AL'),
(203, 'Amapá', 4, 'AP'),
(204, 'Calçoene', 4, 'AP'),
(205, 'Cutias', 4, 'AP'),
(206, 'Ferreira Gomes', 4, 'AP'),
(207, 'Itaubal', 4, 'AP'),
(208, 'Laranjal do Jari', 4, 'AP'),
(209, 'Macapá', 4, 'AP'),
(210, 'Mazagão', 4, 'AP'),
(211, 'Oiapoque', 4, 'AP'),
(212, 'Pedra Branca do Amaparí', 4, 'AP'),
(213, 'Porto Grande', 4, 'AP'),
(214, 'Pracuúba', 4, 'AP'),
(215, 'Santana', 4, 'AP'),
(216, 'Serra do Navio', 4, 'AP'),
(217, 'Tartarugalzinho', 4, 'AP'),
(218, 'Vitória do Jari', 4, 'AP'),
(219, 'Alvarães', 3, 'AM'),
(220, 'Amaturá', 3, 'AM'),
(221, 'Anamã', 3, 'AM'),
(222, 'Anori', 3, 'AM'),
(223, 'Apuí', 3, 'AM'),
(224, 'Atalaia do Norte', 3, 'AM'),
(225, 'Autazes', 3, 'AM'),
(226, 'Barcelos', 3, 'AM'),
(227, 'Barreirinha', 3, 'AM'),
(228, 'Benjamin Constant', 3, 'AM'),
(229, 'Beruri', 3, 'AM'),
(230, 'Boa Vista do Ramos', 3, 'AM'),
(231, 'Boca do Acre', 3, 'AM'),
(232, 'Borba', 3, 'AM'),
(233, 'Caapiranga', 3, 'AM'),
(234, 'Canutama', 3, 'AM'),
(235, 'Carauari', 3, 'AM'),
(236, 'Careiro', 3, 'AM'),
(237, 'Careiro da Várzea', 3, 'AM'),
(238, 'Coari', 3, 'AM'),
(239, 'Codajás', 3, 'AM'),
(240, 'Eirunepé', 3, 'AM'),
(241, 'Envira', 3, 'AM'),
(242, 'Fonte Boa', 3, 'AM'),
(243, 'Guajará', 3, 'AM'),
(244, 'Humaitá', 3, 'AM'),
(245, 'Ipixuna', 3, 'AM'),
(246, 'Iranduba', 3, 'AM'),
(247, 'Itacoatiara', 3, 'AM'),
(248, 'Itamarati', 3, 'AM'),
(249, 'Itapiranga', 3, 'AM'),
(250, 'Japurá', 3, 'AM'),
(251, 'Juruá', 3, 'AM'),
(252, 'Jutaí', 3, 'AM'),
(253, 'Lábrea', 3, 'AM'),
(254, 'Manacapuru', 3, 'AM'),
(255, 'Manaquiri', 3, 'AM'),
(256, 'Manaus', 3, 'AM'),
(257, 'Manicoré', 3, 'AM'),
(258, 'Maraã', 3, 'AM'),
(259, 'Maués', 3, 'AM'),
(260, 'Nhamundá', 3, 'AM'),
(261, 'Nova Olinda do Norte', 3, 'AM'),
(262, 'Novo Airão', 3, 'AM'),
(263, 'Novo Aripuanã', 3, 'AM'),
(264, 'Parintins', 3, 'AM'),
(265, 'Pauini', 3, 'AM'),
(266, 'Presidente Figueiredo', 3, 'AM'),
(267, 'Rio Preto da Eva', 3, 'AM'),
(268, 'Santa Isabel do Rio Negro', 3, 'AM'),
(269, 'Santo Antônio do Içá', 3, 'AM'),
(270, 'São Gabriel da Cachoeira', 3, 'AM'),
(271, 'São Paulo de Olivença', 3, 'AM'),
(272, 'São Sebastião do Uatumã', 3, 'AM'),
(273, 'Silves', 3, 'AM'),
(274, 'Tabatinga', 3, 'AM'),
(275, 'Tapauá', 3, 'AM'),
(276, 'Tefé', 3, 'AM'),
(277, 'Tonantins', 3, 'AM'),
(278, 'Uarini', 3, 'AM'),
(279, 'Urucará', 3, 'AM'),
(280, 'Urucurituba', 3, 'AM'),
(281, 'Abaíra', 5, 'BA'),
(282, 'Abaré', 5, 'BA'),
(283, 'Acajutiba', 5, 'BA'),
(284, 'Adustina', 5, 'BA'),
(285, 'Água Fria', 5, 'BA'),
(286, 'Aiquara', 5, 'BA'),
(287, 'Alagoinhas', 5, 'BA'),
(288, 'Alcobaça', 5, 'BA'),
(289, 'Almadina', 5, 'BA'),
(290, 'Amargosa', 5, 'BA'),
(291, 'Amélia Rodrigues', 5, 'BA'),
(292, 'América Dourada', 5, 'BA'),
(293, 'Anagé', 5, 'BA'),
(294, 'Andaraí', 5, 'BA'),
(295, 'Andorinha', 5, 'BA'),
(296, 'Angical', 5, 'BA'),
(297, 'Anguera', 5, 'BA'),
(298, 'Antas', 5, 'BA'),
(299, 'Antônio Cardoso', 5, 'BA'),
(300, 'Antônio Gonçalves', 5, 'BA'),
(301, 'Aporá', 5, 'BA'),
(302, 'Apuarema', 5, 'BA'),
(303, 'Araças', 5, 'BA'),
(304, 'Aracatu', 5, 'BA'),
(305, 'Araci', 5, 'BA'),
(306, 'Aramari', 5, 'BA'),
(307, 'Arataca', 5, 'BA'),
(308, 'Aratuípe', 5, 'BA'),
(309, 'Aurelino Leal', 5, 'BA'),
(310, 'Baianópolis', 5, 'BA'),
(311, 'Baixa Grande', 5, 'BA'),
(312, 'Banzaê', 5, 'BA'),
(313, 'Barra', 5, 'BA'),
(314, 'Barra da Estiva', 5, 'BA'),
(315, 'Barra do Choça', 5, 'BA'),
(316, 'Barra do Mendes', 5, 'BA'),
(317, 'Barra do Rocha', 5, 'BA'),
(318, 'Barreiras', 5, 'BA'),
(319, 'Barro Alto', 5, 'BA'),
(320, 'Barro Preto (antigo Gov. Lomanto Jr.)', 5, 'BA'),
(321, 'Barrocas', 5, 'BA'),
(322, 'Belmonte', 5, 'BA'),
(323, 'Belo Campo', 5, 'BA'),
(324, 'Biritinga', 5, 'BA'),
(325, 'Boa Nova', 5, 'BA'),
(326, 'Boa Vista do Tupim', 5, 'BA'),
(327, 'Bom Jesus da Lapa', 5, 'BA'),
(328, 'Bom Jesus da Serra', 5, 'BA'),
(329, 'Boninal', 5, 'BA'),
(330, 'Bonito', 5, 'BA'),
(331, 'Boquira', 5, 'BA'),
(332, 'Botuporã', 5, 'BA'),
(333, 'Brejões', 5, 'BA'),
(334, 'Brejolândia', 5, 'BA'),
(335, 'Brotas de Macaúbas', 5, 'BA'),
(336, 'Brumado', 5, 'BA'),
(337, 'Buerarema', 5, 'BA'),
(338, 'Buritirama', 5, 'BA'),
(339, 'Caatiba', 5, 'BA'),
(340, 'Cabaceiras do Paraguaçu', 5, 'BA'),
(341, 'Cachoeira', 5, 'BA'),
(342, 'Caculé', 5, 'BA'),
(343, 'Caém', 5, 'BA'),
(344, 'Caetanos', 5, 'BA'),
(345, 'Caetité', 5, 'BA'),
(346, 'Cafarnaum', 5, 'BA'),
(347, 'Cairu', 5, 'BA'),
(348, 'Caldeirão Grande', 5, 'BA'),
(349, 'Camacan', 5, 'BA'),
(350, 'Camaçari', 5, 'BA'),
(351, 'Camamu', 5, 'BA'),
(352, 'Campo Alegre de Lourdes', 5, 'BA'),
(353, 'Campo Formoso', 5, 'BA'),
(354, 'Canápolis', 5, 'BA'),
(355, 'Canarana', 5, 'BA'),
(356, 'Canavieiras', 5, 'BA'),
(357, 'Candeal', 5, 'BA'),
(358, 'Candeias', 5, 'BA'),
(359, 'Candiba', 5, 'BA'),
(360, 'Cândido Sales', 5, 'BA'),
(361, 'Cansanção', 5, 'BA'),
(362, 'Canudos', 5, 'BA'),
(363, 'Capela do Alto Alegre', 5, 'BA'),
(364, 'Capim Grosso', 5, 'BA'),
(365, 'Caraíbas', 5, 'BA'),
(366, 'Caravelas', 5, 'BA'),
(367, 'Cardeal da Silva', 5, 'BA'),
(368, 'Carinhanha', 5, 'BA'),
(369, 'Casa Nova', 5, 'BA'),
(370, 'Castro Alves', 5, 'BA'),
(371, 'Catolândia', 5, 'BA'),
(372, 'Catu', 5, 'BA'),
(373, 'Caturama', 5, 'BA'),
(374, 'Central', 5, 'BA'),
(375, 'Chorrochó', 5, 'BA'),
(376, 'Cícero Dantas', 5, 'BA'),
(377, 'Cipó', 5, 'BA'),
(378, 'Coaraci', 5, 'BA'),
(379, 'Cocos', 5, 'BA'),
(380, 'Conceição da Feira', 5, 'BA'),
(381, 'Conceição do Almeida', 5, 'BA'),
(382, 'Conceição do Coité', 5, 'BA'),
(383, 'Conceição do Jacuípe', 5, 'BA'),
(384, 'Conde', 5, 'BA'),
(385, 'Condeúba', 5, 'BA'),
(386, 'Contendas do Sincorá', 5, 'BA'),
(387, 'Coração de Maria', 5, 'BA'),
(388, 'Cordeiros', 5, 'BA'),
(389, 'Coribe', 5, 'BA'),
(390, 'Coronel João Sá', 5, 'BA'),
(391, 'Correntina', 5, 'BA'),
(392, 'Cotegipe', 5, 'BA'),
(393, 'Cravolândia', 5, 'BA'),
(394, 'Crisópolis', 5, 'BA'),
(395, 'Cristópolis', 5, 'BA'),
(396, 'Cruz das Almas', 5, 'BA'),
(397, 'Curaçá', 5, 'BA'),
(398, 'Dário Meira', 5, 'BA'),
(399, 'Dias d`Ávila', 5, 'BA'),
(400, 'Dom Basílio', 5, 'BA'),
(401, 'Dom Macedo Costa', 5, 'BA'),
(402, 'Elísio Medrado', 5, 'BA'),
(403, 'Encruzilhada', 5, 'BA'),
(404, 'Entre Rios', 5, 'BA'),
(405, 'Érico Cardoso', 5, 'BA'),
(406, 'Esplanada', 5, 'BA'),
(407, 'Euclides da Cunha', 5, 'BA'),
(408, 'Eunápolis', 5, 'BA'),
(409, 'Fátima', 5, 'BA'),
(410, 'Feira da Mata', 5, 'BA'),
(411, 'Feira de Santana', 5, 'BA'),
(412, 'Filadélfia', 5, 'BA'),
(413, 'Firmino Alves', 5, 'BA'),
(414, 'Floresta Azul', 5, 'BA'),
(415, 'Formosa do Rio Preto', 5, 'BA'),
(416, 'Gandu', 5, 'BA'),
(417, 'Gavião', 5, 'BA'),
(418, 'Gentio do Ouro', 5, 'BA'),
(419, 'Glória', 5, 'BA'),
(420, 'Gongogi', 5, 'BA'),
(421, 'Governador Mangabeira', 5, 'BA'),
(422, 'Guajeru', 5, 'BA'),
(423, 'Guanambi', 5, 'BA'),
(424, 'Guaratinga', 5, 'BA'),
(425, 'Heliópolis', 5, 'BA'),
(426, 'Iaçu', 5, 'BA'),
(427, 'Ibiassucê', 5, 'BA'),
(428, 'Ibicaraí', 5, 'BA'),
(429, 'Ibicoara', 5, 'BA'),
(430, 'Ibicuí', 5, 'BA'),
(431, 'Ibipeba', 5, 'BA'),
(432, 'Ibipitanga', 5, 'BA'),
(433, 'Ibiquera', 5, 'BA'),
(434, 'Ibirapitanga', 5, 'BA'),
(435, 'Ibirapuã', 5, 'BA'),
(436, 'Ibirataia', 5, 'BA'),
(437, 'Ibitiara', 5, 'BA'),
(438, 'Ibititá', 5, 'BA'),
(439, 'Ibotirama', 5, 'BA'),
(440, 'Ichu', 5, 'BA'),
(441, 'Igaporã', 5, 'BA'),
(442, 'Igrapiúna', 5, 'BA'),
(443, 'Iguaí', 5, 'BA'),
(444, 'Ilhéus', 5, 'BA'),
(445, 'Inhambupe', 5, 'BA'),
(446, 'Ipecaetá', 5, 'BA'),
(447, 'Ipiaú', 5, 'BA'),
(448, 'Ipirá', 5, 'BA'),
(449, 'Ipupiara', 5, 'BA'),
(450, 'Irajuba', 5, 'BA'),
(451, 'Iramaia', 5, 'BA'),
(452, 'Iraquara', 5, 'BA'),
(453, 'Irará', 5, 'BA'),
(454, 'Irecê', 5, 'BA'),
(455, 'Itabela', 5, 'BA'),
(456, 'Itaberaba', 5, 'BA'),
(457, 'Itabuna', 5, 'BA'),
(458, 'Itacaré', 5, 'BA'),
(459, 'Itaeté', 5, 'BA'),
(460, 'Itagi', 5, 'BA'),
(461, 'Itagibá', 5, 'BA'),
(462, 'Itagimirim', 5, 'BA'),
(463, 'Itaguaçu da Bahia', 5, 'BA'),
(464, 'Itaju do Colônia', 5, 'BA'),
(465, 'Itajuípe', 5, 'BA'),
(466, 'Itamaraju', 5, 'BA'),
(467, 'Itamari', 5, 'BA'),
(468, 'Itambé', 5, 'BA'),
(469, 'Itanagra', 5, 'BA'),
(470, 'Itanhém', 5, 'BA'),
(471, 'Itaparica', 5, 'BA'),
(472, 'Itapé', 5, 'BA'),
(473, 'Itapebi', 5, 'BA'),
(474, 'Itapetinga', 5, 'BA'),
(475, 'Itapicuru', 5, 'BA'),
(476, 'Itapitanga', 5, 'BA'),
(477, 'Itaquara', 5, 'BA'),
(478, 'Itarantim', 5, 'BA'),
(479, 'Itatim', 5, 'BA'),
(480, 'Itiruçu', 5, 'BA'),
(481, 'Itiúba', 5, 'BA'),
(482, 'Itororó', 5, 'BA'),
(483, 'Ituaçu', 5, 'BA'),
(484, 'Ituberá', 5, 'BA'),
(485, 'Iuiú', 5, 'BA'),
(486, 'Jaborandi', 5, 'BA'),
(487, 'Jacaraci', 5, 'BA'),
(488, 'Jacobina', 5, 'BA'),
(489, 'Jaguaquara', 5, 'BA'),
(490, 'Jaguarari', 5, 'BA'),
(491, 'Jaguaripe', 5, 'BA'),
(492, 'Jandaíra', 5, 'BA'),
(493, 'Jequié', 5, 'BA'),
(494, 'Jeremoabo', 5, 'BA'),
(495, 'Jiquiriçá', 5, 'BA'),
(496, 'Jitaúna', 5, 'BA'),
(497, 'João Dourado', 5, 'BA'),
(498, 'Juazeiro', 5, 'BA'),
(499, 'Jucuruçu', 5, 'BA'),
(500, 'Jussara', 5, 'BA'),
(501, 'Jussari', 5, 'BA'),
(502, 'Jussiape', 5, 'BA'),
(503, 'Lafaiete Coutinho', 5, 'BA'),
(504, 'Lagoa Real', 5, 'BA'),
(505, 'Laje', 5, 'BA'),
(506, 'Lajedão', 5, 'BA'),
(507, 'Lajedinho', 5, 'BA'),
(508, 'Lajedo do Tabocal', 5, 'BA'),
(509, 'Lamarão', 5, 'BA'),
(510, 'Lapão', 5, 'BA'),
(511, 'Lauro de Freitas', 5, 'BA'),
(512, 'Lençóis', 5, 'BA'),
(513, 'Licínio de Almeida', 5, 'BA'),
(514, 'Livramento de Nossa Senhora', 5, 'BA'),
(515, 'Luís Eduardo Magalhães', 5, 'BA'),
(516, 'Macajuba', 5, 'BA'),
(517, 'Macarani', 5, 'BA'),
(518, 'Macaúbas', 5, 'BA'),
(519, 'Macururé', 5, 'BA'),
(520, 'Madre de Deus', 5, 'BA'),
(521, 'Maetinga', 5, 'BA'),
(522, 'Maiquinique', 5, 'BA'),
(523, 'Mairi', 5, 'BA'),
(524, 'Malhada', 5, 'BA'),
(525, 'Malhada de Pedras', 5, 'BA'),
(526, 'Manoel Vitorino', 5, 'BA'),
(527, 'Mansidão', 5, 'BA'),
(528, 'Maracás', 5, 'BA'),
(529, 'Maragogipe', 5, 'BA'),
(530, 'Maraú', 5, 'BA'),
(531, 'Marcionílio Souza', 5, 'BA'),
(532, 'Mascote', 5, 'BA'),
(533, 'Mata de São João', 5, 'BA'),
(534, 'Matina', 5, 'BA'),
(535, 'Medeiros Neto', 5, 'BA'),
(536, 'Miguel Calmon', 5, 'BA'),
(537, 'Milagres', 5, 'BA'),
(538, 'Mirangaba', 5, 'BA'),
(539, 'Mirante', 5, 'BA'),
(540, 'Monte Santo', 5, 'BA'),
(541, 'Morpará', 5, 'BA'),
(542, 'Morro do Chapéu', 5, 'BA'),
(543, 'Mortugaba', 5, 'BA'),
(544, 'Mucugê', 5, 'BA'),
(545, 'Mucuri', 5, 'BA'),
(546, 'Mulungu do Morro', 5, 'BA'),
(547, 'Mundo Novo', 5, 'BA'),
(548, 'Muniz Ferreira', 5, 'BA'),
(549, 'Muquém de São Francisco', 5, 'BA'),
(550, 'Muritiba', 5, 'BA'),
(551, 'Mutuípe', 5, 'BA'),
(552, 'Nazaré', 5, 'BA'),
(553, 'Nilo Peçanha', 5, 'BA'),
(554, 'Nordestina', 5, 'BA'),
(555, 'Nova Canaã', 5, 'BA'),
(556, 'Nova Fátima', 5, 'BA'),
(557, 'Nova Ibiá', 5, 'BA'),
(558, 'Nova Itarana', 5, 'BA'),
(559, 'Nova Redenção', 5, 'BA'),
(560, 'Nova Soure', 5, 'BA'),
(561, 'Nova Viçosa', 5, 'BA'),
(562, 'Novo Horizonte', 5, 'BA'),
(563, 'Novo Triunfo', 5, 'BA'),
(564, 'Olindina', 5, 'BA'),
(565, 'Oliveira dos Brejinhos', 5, 'BA'),
(566, 'Ouriçangas', 5, 'BA'),
(567, 'Ourolândia', 5, 'BA'),
(568, 'Palmas de Monte Alto', 5, 'BA'),
(569, 'Palmeiras', 5, 'BA'),
(570, 'Paramirim', 5, 'BA'),
(571, 'Paratinga', 5, 'BA'),
(572, 'Paripiranga', 5, 'BA'),
(573, 'Pau Brasil', 5, 'BA'),
(574, 'Paulo Afonso', 5, 'BA'),
(575, 'Pé de Serra', 5, 'BA'),
(576, 'Pedrão', 5, 'BA'),
(577, 'Pedro Alexandre', 5, 'BA'),
(578, 'Piatã', 5, 'BA'),
(579, 'Pilão Arcado', 5, 'BA'),
(580, 'Pindaí', 5, 'BA'),
(581, 'Pindobaçu', 5, 'BA'),
(582, 'Pintadas', 5, 'BA'),
(583, 'Piraí do Norte', 5, 'BA'),
(584, 'Piripá', 5, 'BA'),
(585, 'Piritiba', 5, 'BA'),
(586, 'Planaltino', 5, 'BA'),
(587, 'Planalto', 5, 'BA'),
(588, 'Poções', 5, 'BA'),
(589, 'Pojuca', 5, 'BA'),
(590, 'Ponto Novo', 5, 'BA'),
(591, 'Porto Seguro', 5, 'BA'),
(592, 'Potiraguá', 5, 'BA'),
(593, 'Prado', 5, 'BA'),
(594, 'Presidente Dutra', 5, 'BA'),
(595, 'Presidente Jânio Quadros', 5, 'BA'),
(596, 'Presidente Tancredo Neves', 5, 'BA'),
(597, 'Queimadas', 5, 'BA'),
(598, 'Quijingue', 5, 'BA'),
(599, 'Quixabeira', 5, 'BA'),
(600, 'Rafael Jambeiro', 5, 'BA'),
(601, 'Remanso', 5, 'BA'),
(602, 'Retirolândia', 5, 'BA'),
(603, 'Riachão das Neves', 5, 'BA'),
(604, 'Riachão do Jacuípe', 5, 'BA'),
(605, 'Riacho de Santana', 5, 'BA'),
(606, 'Ribeira do Amparo', 5, 'BA'),
(607, 'Ribeira do Pombal', 5, 'BA'),
(608, 'Ribeirão do Largo', 5, 'BA'),
(609, 'Rio de Contas', 5, 'BA'),
(610, 'Rio do Antônio', 5, 'BA'),
(611, 'Rio do Pires', 5, 'BA'),
(612, 'Rio Real', 5, 'BA'),
(613, 'Rodelas', 5, 'BA'),
(614, 'Ruy Barbosa', 5, 'BA'),
(615, 'Salinas da Margarida', 5, 'BA'),
(616, 'Salvador', 5, 'BA'),
(617, 'Santa Bárbara', 5, 'BA'),
(618, 'Santa Brígida', 5, 'BA'),
(619, 'Santa Cruz Cabrália', 5, 'BA'),
(620, 'Santa Cruz da Vitória', 5, 'BA'),
(621, 'Santa Inês', 5, 'BA'),
(622, 'Santa Luzia', 5, 'BA'),
(623, 'Santa Maria da Vitória', 5, 'BA'),
(624, 'Santa Rita de Cássia', 5, 'BA'),
(625, 'Santa Teresinha', 5, 'BA'),
(626, 'Santaluz', 5, 'BA'),
(627, 'Santana', 5, 'BA'),
(628, 'Santanópolis', 5, 'BA'),
(629, 'Santo Amaro', 5, 'BA'),
(630, 'Santo Antônio de Jesus', 5, 'BA'),
(631, 'Santo Estêvão', 5, 'BA'),
(632, 'São Desidério', 5, 'BA'),
(633, 'São Domingos', 5, 'BA'),
(634, 'São Felipe', 5, 'BA'),
(635, 'São Félix', 5, 'BA'),
(636, 'São Félix do Coribe', 5, 'BA'),
(637, 'São Francisco do Conde', 5, 'BA'),
(638, 'São Gabriel', 5, 'BA'),
(639, 'São Gonçalo dos Campos', 5, 'BA'),
(640, 'São José da Vitória', 5, 'BA'),
(641, 'São José do Jacuípe', 5, 'BA'),
(642, 'São Miguel das Matas', 5, 'BA'),
(643, 'São Sebastião do Passé', 5, 'BA'),
(644, 'Sapeaçu', 5, 'BA'),
(645, 'Sátiro Dias', 5, 'BA'),
(646, 'Saubara', 5, 'BA'),
(647, 'Saúde', 5, 'BA'),
(648, 'Seabra', 5, 'BA'),
(649, 'Sebastião Laranjeiras', 5, 'BA'),
(650, 'Senhor do Bonfim', 5, 'BA'),
(651, 'Sento Sé', 5, 'BA'),
(652, 'Serra do Ramalho', 5, 'BA'),
(653, 'Serra Dourada', 5, 'BA'),
(654, 'Serra Preta', 5, 'BA'),
(655, 'Serrinha', 5, 'BA'),
(656, 'Serrolândia', 5, 'BA'),
(657, 'Simões Filho', 5, 'BA'),
(658, 'Sítio do Mato', 5, 'BA'),
(659, 'Sítio do Quinto', 5, 'BA'),
(660, 'Sobradinho', 5, 'BA'),
(661, 'Souto Soares', 5, 'BA'),
(662, 'Tabocas do Brejo Velho', 5, 'BA'),
(663, 'Tanhaçu', 5, 'BA'),
(664, 'Tanque Novo', 5, 'BA'),
(665, 'Tanquinho', 5, 'BA'),
(666, 'Taperoá', 5, 'BA'),
(667, 'Tapiramutá', 5, 'BA'),
(668, 'Teixeira de Freitas', 5, 'BA'),
(669, 'Teodoro Sampaio', 5, 'BA'),
(670, 'Teofilândia', 5, 'BA'),
(671, 'Teolândia', 5, 'BA'),
(672, 'Terra Nova', 5, 'BA'),
(673, 'Tremedal', 5, 'BA'),
(674, 'Tucano', 5, 'BA'),
(675, 'Uauá', 5, 'BA'),
(676, 'Ubaíra', 5, 'BA'),
(677, 'Ubaitaba', 5, 'BA'),
(678, 'Ubatã', 5, 'BA'),
(679, 'Uibaí', 5, 'BA'),
(680, 'Umburanas', 5, 'BA'),
(681, 'Una', 5, 'BA'),
(682, 'Urandi', 5, 'BA'),
(683, 'Uruçuca', 5, 'BA'),
(684, 'Utinga', 5, 'BA'),
(685, 'Valença', 5, 'BA'),
(686, 'Valente', 5, 'BA'),
(687, 'Várzea da Roça', 5, 'BA'),
(688, 'Várzea do Poço', 5, 'BA'),
(689, 'Várzea Nova', 5, 'BA'),
(690, 'Varzedo', 5, 'BA'),
(691, 'Vera Cruz', 5, 'BA'),
(692, 'Vereda', 5, 'BA'),
(693, 'Vitória da Conquista', 5, 'BA'),
(694, 'Wagner', 5, 'BA'),
(695, 'Wanderley', 5, 'BA'),
(696, 'Wenceslau Guimarães', 5, 'BA'),
(697, 'Xique-Xique', 5, 'BA'),
(698, 'Abaiara', 6, 'CE'),
(699, 'Acarape', 6, 'CE'),
(700, 'Acaraú', 6, 'CE'),
(701, 'Acopiara', 6, 'CE'),
(702, 'Aiuaba', 6, 'CE'),
(703, 'Alcântaras', 6, 'CE'),
(704, 'Altaneira', 6, 'CE'),
(705, 'Alto Santo', 6, 'CE'),
(706, 'Amontada', 6, 'CE'),
(707, 'Antonina do Norte', 6, 'CE'),
(708, 'Apuiarés', 6, 'CE'),
(709, 'Aquiraz', 6, 'CE'),
(710, 'Aracati', 6, 'CE'),
(711, 'Aracoiaba', 6, 'CE'),
(712, 'Ararendá', 6, 'CE'),
(713, 'Araripe', 6, 'CE'),
(714, 'Aratuba', 6, 'CE'),
(715, 'Arneiroz', 6, 'CE'),
(716, 'Assaré', 6, 'CE'),
(717, 'Aurora', 6, 'CE'),
(718, 'Baixio', 6, 'CE'),
(719, 'Banabuiú', 6, 'CE'),
(720, 'Barbalha', 6, 'CE'),
(721, 'Barreira', 6, 'CE'),
(722, 'Barro', 6, 'CE'),
(723, 'Barroquinha', 6, 'CE'),
(724, 'Baturité', 6, 'CE'),
(725, 'Beberibe', 6, 'CE'),
(726, 'Bela Cruz', 6, 'CE'),
(727, 'Boa Viagem', 6, 'CE'),
(728, 'Brejo Santo', 6, 'CE'),
(729, 'Camocim', 6, 'CE'),
(730, 'Campos Sales', 6, 'CE'),
(731, 'Canindé', 6, 'CE'),
(732, 'Capistrano', 6, 'CE'),
(733, 'Caridade', 6, 'CE'),
(734, 'Cariré', 6, 'CE'),
(735, 'Caririaçu', 6, 'CE'),
(736, 'Cariús', 6, 'CE'),
(737, 'Carnaubal', 6, 'CE'),
(738, 'Cascavel', 6, 'CE'),
(739, 'Catarina', 6, 'CE'),
(740, 'Catunda', 6, 'CE'),
(741, 'Caucaia', 6, 'CE'),
(742, 'Cedro', 6, 'CE'),
(743, 'Chaval', 6, 'CE'),
(744, 'Choró', 6, 'CE'),
(745, 'Chorozinho', 6, 'CE'),
(746, 'Coreaú', 6, 'CE'),
(747, 'Crateús', 6, 'CE'),
(748, 'Crato', 6, 'CE'),
(749, 'Croatá', 6, 'CE'),
(750, 'Cruz', 6, 'CE'),
(751, 'Deputado Irapuan Pinheiro', 6, 'CE'),
(752, 'Ererê', 6, 'CE'),
(753, 'Eusébio', 6, 'CE'),
(754, 'Farias Brito', 6, 'CE'),
(755, 'Forquilha', 6, 'CE'),
(756, 'Fortaleza', 6, 'CE'),
(757, 'Fortim', 6, 'CE'),
(758, 'Frecheirinha', 6, 'CE'),
(759, 'General Sampaio', 6, 'CE'),
(760, 'Graça', 6, 'CE'),
(761, 'Granja', 6, 'CE'),
(762, 'Granjeiro', 6, 'CE'),
(763, 'Groaíras', 6, 'CE'),
(764, 'Guaiúba', 6, 'CE'),
(765, 'Guaraciaba do Norte', 6, 'CE'),
(766, 'Guaramiranga', 6, 'CE'),
(767, 'Hidrolândia', 6, 'CE'),
(768, 'Horizonte', 6, 'CE'),
(769, 'Ibaretama', 6, 'CE'),
(770, 'Ibiapina', 6, 'CE'),
(771, 'Ibicuitinga', 6, 'CE'),
(772, 'Icapuí', 6, 'CE'),
(773, 'Icó', 6, 'CE'),
(774, 'Iguatu', 6, 'CE'),
(775, 'Independência', 6, 'CE'),
(776, 'Ipaporanga', 6, 'CE'),
(777, 'Ipaumirim', 6, 'CE'),
(778, 'Ipu', 6, 'CE'),
(779, 'Ipueiras', 6, 'CE'),
(780, 'Iracema', 6, 'CE'),
(781, 'Irauçuba', 6, 'CE'),
(782, 'Itaiçaba', 6, 'CE'),
(783, 'Itaitinga', 6, 'CE'),
(784, 'Itapagé', 6, 'CE'),
(785, 'Itapipoca', 6, 'CE'),
(786, 'Itapiúna', 6, 'CE'),
(787, 'Itarema', 6, 'CE'),
(788, 'Itatira', 6, 'CE'),
(789, 'Jaguaretama', 6, 'CE'),
(790, 'Jaguaribara', 6, 'CE'),
(791, 'Jaguaribe', 6, 'CE'),
(792, 'Jaguaruana', 6, 'CE'),
(793, 'Jardim', 6, 'CE'),
(794, 'Jati', 6, 'CE'),
(795, 'Jijoca de Jericoacoara', 6, 'CE'),
(796, 'Juazeiro do Norte', 6, 'CE'),
(797, 'Jucás', 6, 'CE'),
(798, 'Lavras da Mangabeira', 6, 'CE'),
(799, 'Limoeiro do Norte', 6, 'CE'),
(800, 'Madalena', 6, 'CE'),
(801, 'Maracanaú', 6, 'CE'),
(802, 'Maranguape', 6, 'CE'),
(803, 'Marco', 6, 'CE'),
(804, 'Martinópole', 6, 'CE'),
(805, 'Massapê', 6, 'CE'),
(806, 'Mauriti', 6, 'CE'),
(807, 'Meruoca', 6, 'CE'),
(808, 'Milagres', 6, 'CE'),
(809, 'Milhã', 6, 'CE'),
(810, 'Miraíma', 6, 'CE'),
(811, 'Missão Velha', 6, 'CE'),
(812, 'Mombaça', 6, 'CE'),
(813, 'Monsenhor Tabosa', 6, 'CE'),
(814, 'Morada Nova', 6, 'CE'),
(815, 'Moraújo', 6, 'CE'),
(816, 'Morrinhos', 6, 'CE'),
(817, 'Mucambo', 6, 'CE'),
(818, 'Mulungu', 6, 'CE'),
(819, 'Nova Olinda', 6, 'CE'),
(820, 'Nova Russas', 6, 'CE'),
(821, 'Novo Oriente', 6, 'CE'),
(822, 'Ocara', 6, 'CE'),
(823, 'Orós', 6, 'CE'),
(824, 'Pacajus', 6, 'CE'),
(825, 'Pacatuba', 6, 'CE'),
(826, 'Pacoti', 6, 'CE'),
(827, 'Pacujá', 6, 'CE'),
(828, 'Palhano', 6, 'CE'),
(829, 'Palmácia', 6, 'CE'),
(830, 'Paracuru', 6, 'CE'),
(831, 'Paraipaba', 6, 'CE'),
(832, 'Parambu', 6, 'CE'),
(833, 'Paramoti', 6, 'CE'),
(834, 'Pedra Branca', 6, 'CE'),
(835, 'Penaforte', 6, 'CE'),
(836, 'Pentecoste', 6, 'CE'),
(837, 'Pereiro', 6, 'CE'),
(838, 'Pindoretama', 6, 'CE'),
(839, 'Piquet Carneiro', 6, 'CE'),
(840, 'Pires Ferreira', 6, 'CE'),
(841, 'Poranga', 6, 'CE'),
(842, 'Porteiras', 6, 'CE'),
(843, 'Potengi', 6, 'CE'),
(844, 'Potiretama', 6, 'CE'),
(845, 'Quiterianópolis', 6, 'CE'),
(846, 'Quixadá', 6, 'CE'),
(847, 'Quixelô', 6, 'CE'),
(848, 'Quixeramobim', 6, 'CE'),
(849, 'Quixeré', 6, 'CE'),
(850, 'Redenção', 6, 'CE'),
(851, 'Reriutaba', 6, 'CE'),
(852, 'Russas', 6, 'CE'),
(853, 'Saboeiro', 6, 'CE'),
(854, 'Salitre', 6, 'CE'),
(855, 'Santa Quitéria', 6, 'CE'),
(856, 'Santana do Acaraú', 6, 'CE'),
(857, 'Santana do Cariri', 6, 'CE'),
(858, 'São Benedito', 6, 'CE'),
(859, 'São Gonçalo do Amarante', 6, 'CE'),
(860, 'São João do Jaguaribe', 6, 'CE'),
(861, 'São Luís do Curu', 6, 'CE'),
(862, 'Senador Pompeu', 6, 'CE'),
(863, 'Senador Sá', 6, 'CE'),
(864, 'Sobral', 6, 'CE'),
(865, 'Solonópole', 6, 'CE'),
(866, 'Tabuleiro do Norte', 6, 'CE'),
(867, 'Tamboril', 6, 'CE'),
(868, 'Tarrafas', 6, 'CE'),
(869, 'Tauá', 6, 'CE'),
(870, 'Tejuçuoca', 6, 'CE'),
(871, 'Tianguá', 6, 'CE'),
(872, 'Trairi', 6, 'CE'),
(873, 'Tururu', 6, 'CE'),
(874, 'Ubajara', 6, 'CE'),
(875, 'Umari', 6, 'CE'),
(876, 'Umirim', 6, 'CE'),
(877, 'Uruburetama', 6, 'CE'),
(878, 'Uruoca', 6, 'CE'),
(879, 'Varjota', 6, 'CE'),
(880, 'Várzea Alegre', 6, 'CE'),
(881, 'Viçosa do Ceará', 6, 'CE'),
(882, 'Brasília', 7, 'DF'),
(883, 'Abadia de Goiás', 9, 'GO'),
(884, 'Abadiânia', 9, 'GO'),
(885, 'Acreúna', 9, 'GO'),
(886, 'Adelândia', 9, 'GO'),
(887, 'Água Fria de Goiás', 9, 'GO'),
(888, 'Água Limpa', 9, 'GO'),
(889, 'Águas Lindas de Goiás', 9, 'GO'),
(890, 'Alexânia', 9, 'GO'),
(891, 'Aloândia', 9, 'GO'),
(892, 'Alto Horizonte', 9, 'GO'),
(893, 'Alto Paraíso de Goiás', 9, 'GO'),
(894, 'Alvorada do Norte', 9, 'GO'),
(895, 'Amaralina', 9, 'GO'),
(896, 'Americano do Brasil', 9, 'GO'),
(897, 'Amorinópolis', 9, 'GO'),
(898, 'Anápolis', 9, 'GO'),
(899, 'Anhanguera', 9, 'GO'),
(900, 'Anicuns', 9, 'GO'),
(901, 'Aparecida de Goiânia', 9, 'GO'),
(902, 'Aparecida do Rio Doce', 9, 'GO'),
(903, 'Aporé', 9, 'GO'),
(904, 'Araçu', 9, 'GO'),
(905, 'Aragarças', 9, 'GO'),
(906, 'Aragoiânia', 9, 'GO'),
(907, 'Araguapaz', 9, 'GO'),
(908, 'Arenópolis', 9, 'GO'),
(909, 'Aruanã', 9, 'GO'),
(910, 'Aurilândia', 9, 'GO'),
(911, 'Avelinópolis', 9, 'GO'),
(912, 'Baliza', 9, 'GO'),
(913, 'Barro Alto', 9, 'GO'),
(914, 'Bela Vista de Goiás', 9, 'GO'),
(915, 'Bom Jardim de Goiás', 9, 'GO'),
(916, 'Bom Jesus de Goiás', 9, 'GO'),
(917, 'Bonfinópolis', 9, 'GO'),
(918, 'Bonópolis', 9, 'GO'),
(919, 'Brazabrantes', 9, 'GO'),
(920, 'Britânia', 9, 'GO'),
(921, 'Buriti Alegre', 9, 'GO'),
(922, 'Buriti de Goiás', 9, 'GO'),
(923, 'Buritinópolis', 9, 'GO'),
(924, 'Cabeceiras', 9, 'GO'),
(925, 'Cachoeira Alta', 9, 'GO'),
(926, 'Cachoeira de Goiás', 9, 'GO'),
(927, 'Cachoeira Dourada', 9, 'GO'),
(928, 'Caçu', 9, 'GO'),
(929, 'Caiapônia', 9, 'GO'),
(930, 'Caldas Novas', 9, 'GO'),
(931, 'Caldazinha', 9, 'GO'),
(932, 'Campestre de Goiás', 9, 'GO'),
(933, 'Campinaçu', 9, 'GO'),
(934, 'Campinorte', 9, 'GO'),
(935, 'Campo Alegre de Goiás', 9, 'GO'),
(936, 'Campo Limpo de Goiás', 9, 'GO'),
(937, 'Campos Belos', 9, 'GO'),
(938, 'Campos Verdes', 9, 'GO'),
(939, 'Carmo do Rio Verde', 9, 'GO'),
(940, 'Castelândia', 9, 'GO'),
(941, 'Catalão', 9, 'GO'),
(942, 'Caturaí', 9, 'GO'),
(943, 'Cavalcante', 9, 'GO'),
(944, 'Ceres', 9, 'GO'),
(945, 'Cezarina', 9, 'GO'),
(946, 'Chapadão do Céu', 9, 'GO'),
(947, 'Cidade Ocidental', 9, 'GO'),
(948, 'Cocalzinho de Goiás', 9, 'GO'),
(949, 'Colinas do Sul', 9, 'GO'),
(950, 'Córrego do Ouro', 9, 'GO'),
(951, 'Corumbá de Goiás', 9, 'GO'),
(952, 'Corumbaíba', 9, 'GO'),
(953, 'Cristalina', 9, 'GO'),
(954, 'Cristianópolis', 9, 'GO'),
(955, 'Crixás', 9, 'GO'),
(956, 'Cromínia', 9, 'GO'),
(957, 'Cumari', 9, 'GO'),
(958, 'Damianópolis', 9, 'GO'),
(959, 'Damolândia', 9, 'GO'),
(960, 'Davinópolis', 9, 'GO'),
(961, 'Diorama', 9, 'GO'),
(962, 'Divinópolis de Goiás', 9, 'GO'),
(963, 'Doverlândia', 9, 'GO'),
(964, 'Edealina', 9, 'GO'),
(965, 'Edéia', 9, 'GO'),
(966, 'Estrela do Norte', 9, 'GO'),
(967, 'Faina', 9, 'GO'),
(968, 'Fazenda Nova', 9, 'GO'),
(969, 'Firminópolis', 9, 'GO'),
(970, 'Flores de Goiás', 9, 'GO'),
(971, 'Formosa', 9, 'GO'),
(972, 'Formoso', 9, 'GO'),
(973, 'Gameleira de Goiás', 9, 'GO'),
(974, 'Goianápolis', 9, 'GO'),
(975, 'Goiandira', 9, 'GO'),
(976, 'Goianésia', 9, 'GO'),
(977, 'Goiânia', 9, 'GO'),
(978, 'Goianira', 9, 'GO'),
(979, 'Goiás', 9, 'GO'),
(980, 'Goiatuba', 9, 'GO'),
(981, 'Gouvelândia', 9, 'GO'),
(982, 'Guapó', 9, 'GO'),
(983, 'Guaraíta', 9, 'GO'),
(984, 'Guarani de Goiás', 9, 'GO'),
(985, 'Guarinos', 9, 'GO'),
(986, 'Heitoraí', 9, 'GO'),
(987, 'Hidrolândia', 9, 'GO'),
(988, 'Hidrolina', 9, 'GO'),
(989, 'Iaciara', 9, 'GO'),
(990, 'Inaciolândia', 9, 'GO'),
(991, 'Indiara', 9, 'GO'),
(992, 'Inhumas', 9, 'GO'),
(993, 'Ipameri', 9, 'GO'),
(994, 'Ipiranga de Goiás', 9, 'GO'),
(995, 'Iporá', 9, 'GO'),
(996, 'Israelândia', 9, 'GO'),
(997, 'Itaberaí', 9, 'GO'),
(998, 'Itaguari', 9, 'GO'),
(999, 'Itaguaru', 9, 'GO'),
(1000, 'Itajá', 9, 'GO'),
(1001, 'Itapaci', 9, 'GO'),
(1002, 'Itapirapuã', 9, 'GO'),
(1003, 'Itapuranga', 9, 'GO'),
(1004, 'Itarumã', 9, 'GO'),
(1005, 'Itauçu', 9, 'GO'),
(1006, 'Itumbiara', 9, 'GO'),
(1007, 'Ivolândia', 9, 'GO'),
(1008, 'Jandaia', 9, 'GO'),
(1009, 'Jaraguá', 9, 'GO'),
(1010, 'Jataí', 9, 'GO'),
(1011, 'Jaupaci', 9, 'GO'),
(1012, 'Jesúpolis', 9, 'GO'),
(1013, 'Joviânia', 9, 'GO'),
(1014, 'Jussara', 9, 'GO'),
(1015, 'Lagoa Santa', 9, 'GO'),
(1016, 'Leopoldo de Bulhões', 9, 'GO'),
(1017, 'Luziânia', 9, 'GO'),
(1018, 'Mairipotaba', 9, 'GO'),
(1019, 'Mambaí', 9, 'GO'),
(1020, 'Mara Rosa', 9, 'GO'),
(1021, 'Marzagão', 9, 'GO'),
(1022, 'Matrinchã', 9, 'GO'),
(1023, 'Maurilândia', 9, 'GO'),
(1024, 'Mimoso de Goiás', 9, 'GO'),
(1025, 'Minaçu', 9, 'GO'),
(1026, 'Mineiros', 9, 'GO'),
(1027, 'Moiporá', 9, 'GO'),
(1028, 'Monte Alegre de Goiás', 9, 'GO'),
(1029, 'Montes Claros de Goiás', 9, 'GO'),
(1030, 'Montividiu', 9, 'GO'),
(1031, 'Montividiu do Norte', 9, 'GO'),
(1032, 'Morrinhos', 9, 'GO'),
(1033, 'Morro Agudo de Goiás', 9, 'GO'),
(1034, 'Mossâmedes', 9, 'GO'),
(1035, 'Mozarlândia', 9, 'GO'),
(1036, 'Mundo Novo', 9, 'GO'),
(1037, 'Mutunópolis', 9, 'GO'),
(1038, 'Nazário', 9, 'GO'),
(1039, 'Nerópolis', 9, 'GO'),
(1040, 'Niquelândia', 9, 'GO'),
(1041, 'Nova América', 9, 'GO'),
(1042, 'Nova Aurora', 9, 'GO'),
(1043, 'Nova Crixás', 9, 'GO'),
(1044, 'Nova Glória', 9, 'GO'),
(1045, 'Nova Iguaçu de Goiás', 9, 'GO'),
(1046, 'Nova Roma', 9, 'GO'),
(1047, 'Nova Veneza', 9, 'GO'),
(1048, 'Novo Brasil', 9, 'GO'),
(1049, 'Novo Gama', 9, 'GO'),
(1050, 'Novo Planalto', 9, 'GO'),
(1051, 'Orizona', 9, 'GO'),
(1052, 'Ouro Verde de Goiás', 9, 'GO'),
(1053, 'Ouvidor', 9, 'GO'),
(1054, 'Padre Bernardo', 9, 'GO'),
(1055, 'Palestina de Goiás', 9, 'GO'),
(1056, 'Palmeiras de Goiás', 9, 'GO'),
(1057, 'Palmelo', 9, 'GO'),
(1058, 'Palminópolis', 9, 'GO'),
(1059, 'Panamá', 9, 'GO'),
(1060, 'Paranaiguara', 9, 'GO'),
(1061, 'Paraúna', 9, 'GO'),
(1062, 'Perolândia', 9, 'GO'),
(1063, 'Petrolina de Goiás', 9, 'GO'),
(1064, 'Pilar de Goiás', 9, 'GO'),
(1065, 'Piracanjuba', 9, 'GO'),
(1066, 'Piranhas', 9, 'GO'),
(1067, 'Pirenópolis', 9, 'GO'),
(1068, 'Pires do Rio', 9, 'GO'),
(1069, 'Planaltina', 9, 'GO'),
(1070, 'Pontalina', 9, 'GO'),
(1071, 'Porangatu', 9, 'GO'),
(1072, 'Porteirão', 9, 'GO'),
(1073, 'Portelândia', 9, 'GO'),
(1074, 'Posse', 9, 'GO'),
(1075, 'Professor Jamil', 9, 'GO'),
(1076, 'Quirinópolis', 9, 'GO'),
(1077, 'Rialma', 9, 'GO'),
(1078, 'Rianápolis', 9, 'GO'),
(1079, 'Rio Quente', 9, 'GO'),
(1080, 'Rio Verde', 9, 'GO'),
(1081, 'Rubiataba', 9, 'GO'),
(1082, 'Sanclerlândia', 9, 'GO'),
(1083, 'Santa Bárbara de Goiás', 9, 'GO'),
(1084, 'Santa Cruz de Goiás', 9, 'GO'),
(1085, 'Santa Fé de Goiás', 9, 'GO'),
(1086, 'Santa Helena de Goiás', 9, 'GO'),
(1087, 'Santa Isabel', 9, 'GO'),
(1088, 'Santa Rita do Araguaia', 9, 'GO'),
(1089, 'Santa Rita do Novo Destino', 9, 'GO'),
(1090, 'Santa Rosa de Goiás', 9, 'GO'),
(1091, 'Santa Tereza de Goiás', 9, 'GO'),
(1092, 'Santa Terezinha de Goiás', 9, 'GO'),
(1093, 'Santo Antônio da Barra', 9, 'GO'),
(1094, 'Santo Antônio de Goiás', 9, 'GO'),
(1095, 'Santo Antônio do Descoberto', 9, 'GO'),
(1096, 'São Domingos', 9, 'GO'),
(1097, 'São Francisco de Goiás', 9, 'GO'),
(1098, 'São João d`Aliança', 9, 'GO'),
(1099, 'São João da Paraúna', 9, 'GO'),
(1100, 'São Luís de Montes Belos', 9, 'GO'),
(1101, 'São Luíz do Norte', 9, 'GO'),
(1102, 'São Miguel do Araguaia', 9, 'GO'),
(1103, 'São Miguel do Passa Quatro', 9, 'GO'),
(1104, 'São Patrício', 9, 'GO'),
(1105, 'São Simão', 9, 'GO'),
(1106, 'Senador Canedo', 9, 'GO'),
(1107, 'Serranópolis', 9, 'GO'),
(1108, 'Silvânia', 9, 'GO'),
(1109, 'Simolândia', 9, 'GO'),
(1110, 'Sítio d`Abadia', 9, 'GO'),
(1111, 'Taquaral de Goiás', 9, 'GO'),
(1112, 'Teresina de Goiás', 9, 'GO'),
(1113, 'Terezópolis de Goiás', 9, 'GO'),
(1114, 'Três Ranchos', 9, 'GO'),
(1115, 'Trindade', 9, 'GO'),
(1116, 'Trombas', 9, 'GO'),
(1117, 'Turvânia', 9, 'GO'),
(1118, 'Turvelândia', 9, 'GO'),
(1119, 'Uirapuru', 9, 'GO'),
(1120, 'Uruaçu', 9, 'GO'),
(1121, 'Uruana', 9, 'GO'),
(1122, 'Urutaí', 9, 'GO'),
(1123, 'Valparaíso de Goiás', 9, 'GO'),
(1124, 'Varjão', 9, 'GO'),
(1125, 'Vianópolis', 9, 'GO'),
(1126, 'Vicentinópolis', 9, 'GO'),
(1127, 'Vila Boa', 9, 'GO'),
(1128, 'Vila Propício', 9, 'GO'),
(1129, 'Açailândia', 10, 'MA'),
(1130, 'Afonso Cunha', 10, 'MA'),
(1131, 'Água Doce do Maranhão', 10, 'MA'),
(1132, 'Alcântara', 10, 'MA'),
(1133, 'Aldeias Altas', 10, 'MA'),
(1134, 'Altamira do Maranhão', 10, 'MA'),
(1135, 'Alto Alegre do Maranhão', 10, 'MA'),
(1136, 'Alto Alegre do Pindaré', 10, 'MA'),
(1137, 'Alto Parnaíba', 10, 'MA'),
(1138, 'Amapá do Maranhão', 10, 'MA'),
(1139, 'Amarante do Maranhão', 10, 'MA'),
(1140, 'Anajatuba', 10, 'MA'),
(1141, 'Anapurus', 10, 'MA'),
(1142, 'Apicum-Açu', 10, 'MA'),
(1143, 'Araguanã', 10, 'MA'),
(1144, 'Araioses', 10, 'MA'),
(1145, 'Arame', 10, 'MA'),
(1146, 'Arari', 10, 'MA'),
(1147, 'Axixá', 10, 'MA'),
(1148, 'Bacabal', 10, 'MA'),
(1149, 'Bacabeira', 10, 'MA'),
(1150, 'Bacuri', 10, 'MA'),
(1151, 'Bacurituba', 10, 'MA'),
(1152, 'Balsas', 10, 'MA'),
(1153, 'Barão de Grajaú', 10, 'MA'),
(1154, 'Barra do Corda', 10, 'MA'),
(1155, 'Barreirinhas', 10, 'MA'),
(1156, 'Bela Vista do Maranhão', 10, 'MA'),
(1157, 'Belágua', 10, 'MA'),
(1158, 'Benedito Leite', 10, 'MA'),
(1159, 'Bequimão', 10, 'MA'),
(1160, 'Bernardo do Mearim', 10, 'MA'),
(1161, 'Boa Vista do Gurupi', 10, 'MA'),
(1162, 'Bom Jardim', 10, 'MA'),
(1163, 'Bom Jesus das Selvas', 10, 'MA'),
(1164, 'Bom Lugar', 10, 'MA'),
(1165, 'Brejo', 10, 'MA'),
(1166, 'Brejo de Areia', 10, 'MA'),
(1167, 'Buriti', 10, 'MA'),
(1168, 'Buriti Bravo', 10, 'MA'),
(1169, 'Buriticupu', 10, 'MA'),
(1170, 'Buritirana', 10, 'MA'),
(1171, 'Cachoeira Grande', 10, 'MA'),
(1172, 'Cajapió', 10, 'MA'),
(1173, 'Cajari', 10, 'MA'),
(1174, 'Campestre do Maranhão', 10, 'MA'),
(1175, 'Cândido Mendes', 10, 'MA'),
(1176, 'Cantanhede', 10, 'MA'),
(1177, 'Capinzal do Norte', 10, 'MA'),
(1178, 'Carolina', 10, 'MA'),
(1179, 'Carutapera', 10, 'MA'),
(1180, 'Caxias', 10, 'MA'),
(1181, 'Cedral', 10, 'MA'),
(1182, 'Central do Maranhão', 10, 'MA'),
(1183, 'Centro do Guilherme', 10, 'MA'),
(1184, 'Centro Novo do Maranhão', 10, 'MA'),
(1185, 'Chapadinha', 10, 'MA'),
(1186, 'Cidelândia', 10, 'MA'),
(1187, 'Codó', 10, 'MA'),
(1188, 'Coelho Neto', 10, 'MA'),
(1189, 'Colinas', 10, 'MA'),
(1190, 'Conceição do Lago-Açu', 10, 'MA'),
(1191, 'Coroatá', 10, 'MA'),
(1192, 'Cururupu', 10, 'MA'),
(1193, 'Davinópolis', 10, 'MA'),
(1194, 'Dom Pedro', 10, 'MA'),
(1195, 'Duque Bacelar', 10, 'MA'),
(1196, 'Esperantinópolis', 10, 'MA'),
(1197, 'Estreito', 10, 'MA'),
(1198, 'Feira Nova do Maranhão', 10, 'MA'),
(1199, 'Fernando Falcão', 10, 'MA'),
(1200, 'Formosa da Serra Negra', 10, 'MA'),
(1201, 'Fortaleza dos Nogueiras', 10, 'MA'),
(1202, 'Fortuna', 10, 'MA'),
(1203, 'Godofredo Viana', 10, 'MA'),
(1204, 'Gonçalves Dias', 10, 'MA'),
(1205, 'Governador Archer', 10, 'MA'),
(1206, 'Governador Edison Lobão', 10, 'MA'),
(1207, 'Governador Eugênio Barros', 10, 'MA'),
(1208, 'Governador Luiz Rocha', 10, 'MA'),
(1209, 'Governador Newton Bello', 10, 'MA'),
(1210, 'Governador Nunes Freire', 10, 'MA'),
(1211, 'Graça Aranha', 10, 'MA'),
(1212, 'Grajaú', 10, 'MA'),
(1213, 'Guimarães', 10, 'MA'),
(1214, 'Humberto de Campos', 10, 'MA'),
(1215, 'Icatu', 10, 'MA'),
(1216, 'Igarapé do Meio', 10, 'MA'),
(1217, 'Igarapé Grande', 10, 'MA'),
(1218, 'Imperatriz', 10, 'MA'),
(1219, 'Itaipava do Grajaú', 10, 'MA'),
(1220, 'Itapecuru Mirim', 10, 'MA'),
(1221, 'Itinga do Maranhão', 10, 'MA'),
(1222, 'Jatobá', 10, 'MA'),
(1223, 'Jenipapo dos Vieiras', 10, 'MA'),
(1224, 'João Lisboa', 10, 'MA'),
(1225, 'Joselândia', 10, 'MA'),
(1226, 'Junco do Maranhão', 10, 'MA'),
(1227, 'Lago da Pedra', 10, 'MA'),
(1228, 'Lago do Junco', 10, 'MA'),
(1229, 'Lago dos Rodrigues', 10, 'MA'),
(1230, 'Lago Verde', 10, 'MA'),
(1231, 'Lagoa do Mato', 10, 'MA'),
(1232, 'Lagoa Grande do Maranhão', 10, 'MA'),
(1233, 'Lajeado Novo', 10, 'MA'),
(1234, 'Lima Campos', 10, 'MA'),
(1235, 'Loreto', 10, 'MA'),
(1236, 'Luís Domingues', 10, 'MA'),
(1237, 'Magalhães de Almeida', 10, 'MA'),
(1238, 'Maracaçumé', 10, 'MA'),
(1239, 'Marajá do Sena', 10, 'MA'),
(1240, 'Maranhãozinho', 10, 'MA'),
(1241, 'Mata Roma', 10, 'MA'),
(1242, 'Matinha', 10, 'MA'),
(1243, 'Matões', 10, 'MA'),
(1244, 'Matões do Norte', 10, 'MA'),
(1245, 'Milagres do Maranhão', 10, 'MA'),
(1246, 'Mirador', 10, 'MA'),
(1247, 'Miranda do Norte', 10, 'MA'),
(1248, 'Mirinzal', 10, 'MA'),
(1249, 'Monção', 10, 'MA'),
(1250, 'Montes Altos', 10, 'MA'),
(1251, 'Morros', 10, 'MA'),
(1252, 'Nina Rodrigues', 10, 'MA'),
(1253, 'Nova Colinas', 10, 'MA'),
(1254, 'Nova Iorque', 10, 'MA'),
(1255, 'Nova Olinda do Maranhão', 10, 'MA'),
(1256, 'Olho d`Água das Cunhãs', 10, 'MA'),
(1257, 'Olinda Nova do Maranhão', 10, 'MA'),
(1258, 'Paço do Lumiar', 10, 'MA'),
(1259, 'Palmeirândia', 10, 'MA'),
(1260, 'Paraibano', 10, 'MA'),
(1261, 'Parnarama', 10, 'MA'),
(1262, 'Passagem Franca', 10, 'MA'),
(1263, 'Pastos Bons', 10, 'MA'),
(1264, 'Paulino Neves', 10, 'MA'),
(1265, 'Paulo Ramos', 10, 'MA'),
(1266, 'Pedreiras', 10, 'MA'),
(1267, 'Pedro do Rosário', 10, 'MA'),
(1268, 'Penalva', 10, 'MA'),
(1269, 'Peri Mirim', 10, 'MA'),
(1270, 'Peritoró', 10, 'MA'),
(1271, 'Pindaré-Mirim', 10, 'MA'),
(1272, 'Pinheiro', 10, 'MA'),
(1273, 'Pio XII', 10, 'MA'),
(1274, 'Pirapemas', 10, 'MA'),
(1275, 'Poção de Pedras', 10, 'MA'),
(1276, 'Porto Franco', 10, 'MA'),
(1277, 'Porto Rico do Maranhão', 10, 'MA'),
(1278, 'Presidente Dutra', 10, 'MA'),
(1279, 'Presidente Juscelino', 10, 'MA'),
(1280, 'Presidente Médici', 10, 'MA'),
(1281, 'Presidente Sarney', 10, 'MA'),
(1282, 'Presidente Vargas', 10, 'MA'),
(1283, 'Primeira Cruz', 10, 'MA'),
(1284, 'Raposa', 10, 'MA'),
(1285, 'Riachão', 10, 'MA'),
(1286, 'Ribamar Fiquene', 10, 'MA'),
(1287, 'Rosário', 10, 'MA'),
(1288, 'Sambaíba', 10, 'MA'),
(1289, 'Santa Filomena do Maranhão', 10, 'MA'),
(1290, 'Santa Helena', 10, 'MA'),
(1291, 'Santa Inês', 10, 'MA'),
(1292, 'Santa Luzia', 10, 'MA'),
(1293, 'Santa Luzia do Paruá', 10, 'MA'),
(1294, 'Santa Quitéria do Maranhão', 10, 'MA'),
(1295, 'Santa Rita', 10, 'MA'),
(1296, 'Santana do Maranhão', 10, 'MA'),
(1297, 'Santo Amaro do Maranhão', 10, 'MA'),
(1298, 'Santo Antônio dos Lopes', 10, 'MA'),
(1299, 'São Benedito do Rio Preto', 10, 'MA'),
(1300, 'São Bento', 10, 'MA'),
(1301, 'São Bernardo', 10, 'MA'),
(1302, 'São Domingos do Azeitão', 10, 'MA'),
(1303, 'São Domingos do Maranhão', 10, 'MA'),
(1304, 'São Félix de Balsas', 10, 'MA'),
(1305, 'São Francisco do Brejão', 10, 'MA'),
(1306, 'São Francisco do Maranhão', 10, 'MA'),
(1307, 'São João Batista', 10, 'MA'),
(1308, 'São João do Carú', 10, 'MA'),
(1309, 'São João do Paraíso', 10, 'MA'),
(1310, 'São João do Soter', 10, 'MA'),
(1311, 'São João dos Patos', 10, 'MA'),
(1312, 'São José de Ribamar', 10, 'MA'),
(1313, 'São José dos Basílios', 10, 'MA'),
(1314, 'São Luís', 10, 'MA'),
(1315, 'São Luís Gonzaga do Maranhão', 10, 'MA'),
(1316, 'São Mateus do Maranhão', 10, 'MA'),
(1317, 'São Pedro da Água Branca', 10, 'MA'),
(1318, 'São Pedro dos Crentes', 10, 'MA'),
(1319, 'São Raimundo das Mangabeiras', 10, 'MA'),
(1320, 'São Raimundo do Doca Bezerra', 10, 'MA'),
(1321, 'São Roberto', 10, 'MA'),
(1322, 'São Vicente Ferrer', 10, 'MA'),
(1323, 'Satubinha', 10, 'MA'),
(1324, 'Senador Alexandre Costa', 10, 'MA'),
(1325, 'Senador La Rocque', 10, 'MA'),
(1326, 'Serrano do Maranhão', 10, 'MA'),
(1327, 'Sítio Novo', 10, 'MA'),
(1328, 'Sucupira do Norte', 10, 'MA'),
(1329, 'Sucupira do Riachão', 10, 'MA'),
(1330, 'Tasso Fragoso', 10, 'MA'),
(1331, 'Timbiras', 10, 'MA'),
(1332, 'Timon', 10, 'MA'),
(1333, 'Trizidela do Vale', 10, 'MA'),
(1334, 'Tufilândia', 10, 'MA'),
(1335, 'Tuntum', 10, 'MA'),
(1336, 'Turiaçu', 10, 'MA'),
(1337, 'Turilândia', 10, 'MA'),
(1338, 'Tutóia', 10, 'MA'),
(1339, 'Urbano Santos', 10, 'MA'),
(1340, 'Vargem Grande', 10, 'MA'),
(1341, 'Viana', 10, 'MA'),
(1342, 'Vila Nova dos Martírios', 10, 'MA'),
(1343, 'Vitória do Mearim', 10, 'MA'),
(1344, 'Vitorino Freire', 10, 'MA'),
(1345, 'Zé Doca', 10, 'MA'),
(1346, 'Acorizal', 13, 'MT'),
(1347, 'Água Boa', 13, 'MT'),
(1348, 'Alta Floresta', 13, 'MT'),
(1349, 'Alto Araguaia', 13, 'MT'),
(1350, 'Alto Boa Vista', 13, 'MT'),
(1351, 'Alto Garças', 13, 'MT'),
(1352, 'Alto Paraguai', 13, 'MT'),
(1353, 'Alto Taquari', 13, 'MT'),
(1354, 'Apiacás', 13, 'MT'),
(1355, 'Araguaiana', 13, 'MT'),
(1356, 'Araguainha', 13, 'MT'),
(1357, 'Araputanga', 13, 'MT'),
(1358, 'Arenápolis', 13, 'MT'),
(1359, 'Aripuanã', 13, 'MT'),
(1360, 'Barão de Melgaço', 13, 'MT'),
(1361, 'Barra do Bugres', 13, 'MT'),
(1362, 'Barra do Garças', 13, 'MT'),
(1363, 'Bom Jesus do Araguaia', 13, 'MT'),
(1364, 'Brasnorte', 13, 'MT'),
(1365, 'Cáceres', 13, 'MT'),
(1366, 'Campinápolis', 13, 'MT'),
(1367, 'Campo Novo do Parecis', 13, 'MT'),
(1368, 'Campo Verde', 13, 'MT'),
(1369, 'Campos de Júlio', 13, 'MT'),
(1370, 'Canabrava do Norte', 13, 'MT'),
(1371, 'Canarana', 13, 'MT'),
(1372, 'Carlinda', 13, 'MT'),
(1373, 'Castanheira', 13, 'MT'),
(1374, 'Chapada dos Guimarães', 13, 'MT'),
(1375, 'Cláudia', 13, 'MT'),
(1376, 'Cocalinho', 13, 'MT'),
(1377, 'Colíder', 13, 'MT'),
(1378, 'Colniza', 13, 'MT'),
(1379, 'Comodoro', 13, 'MT'),
(1380, 'Confresa', 13, 'MT'),
(1381, 'Conquista d`Oeste', 13, 'MT'),
(1382, 'Cotriguaçu', 13, 'MT'),
(1383, 'Cuiabá', 13, 'MT'),
(1384, 'Curvelândia', 13, 'MT'),
(1385, 'Curvelândia', 13, 'MT'),
(1386, 'Denise', 13, 'MT'),
(1387, 'Diamantino', 13, 'MT'),
(1388, 'Dom Aquino', 13, 'MT'),
(1389, 'Feliz Natal', 13, 'MT'),
(1390, 'Figueirópolis d`Oeste', 13, 'MT'),
(1391, 'Gaúcha do Norte', 13, 'MT'),
(1392, 'General Carneiro', 13, 'MT'),
(1393, 'Glória d`Oeste', 13, 'MT'),
(1394, 'Guarantã do Norte', 13, 'MT'),
(1395, 'Guiratinga', 13, 'MT'),
(1396, 'Indiavaí', 13, 'MT'),
(1397, 'Ipiranga do Norte', 13, 'MT'),
(1398, 'Itanhangá', 13, 'MT'),
(1399, 'Itaúba', 13, 'MT'),
(1400, 'Itiquira', 13, 'MT'),
(1401, 'Jaciara', 13, 'MT'),
(1402, 'Jangada', 13, 'MT'),
(1403, 'Jauru', 13, 'MT'),
(1404, 'Juara', 13, 'MT'),
(1405, 'Juína', 13, 'MT'),
(1406, 'Juruena', 13, 'MT'),
(1407, 'Juscimeira', 13, 'MT'),
(1408, 'Lambari d`Oeste', 13, 'MT'),
(1409, 'Lucas do Rio Verde', 13, 'MT'),
(1410, 'Luciára', 13, 'MT'),
(1411, 'Marcelândia', 13, 'MT'),
(1412, 'Matupá', 13, 'MT'),
(1413, 'Mirassol d`Oeste', 13, 'MT'),
(1414, 'Nobres', 13, 'MT'),
(1415, 'Nortelândia', 13, 'MT'),
(1416, 'Nossa Senhora do Livramento', 13, 'MT'),
(1417, 'Nova Bandeirantes', 13, 'MT'),
(1418, 'Nova Brasilândia', 13, 'MT'),
(1419, 'Nova Canaã do Norte', 13, 'MT'),
(1420, 'Nova Guarita', 13, 'MT'),
(1421, 'Nova Lacerda', 13, 'MT'),
(1422, 'Nova Marilândia', 13, 'MT'),
(1423, 'Nova Maringá', 13, 'MT'),
(1424, 'Nova Monte verde', 13, 'MT'),
(1425, 'Nova Mutum', 13, 'MT'),
(1426, 'Nova Olímpia', 13, 'MT'),
(1427, 'Nova Santa Helena', 13, 'MT'),
(1428, 'Nova Ubiratã', 13, 'MT'),
(1429, 'Nova Xavantina', 13, 'MT'),
(1430, 'Novo Horizonte do Norte', 13, 'MT'),
(1431, 'Novo Mundo', 13, 'MT'),
(1432, 'Novo Santo Antônio', 13, 'MT'),
(1433, 'Novo São Joaquim', 13, 'MT'),
(1434, 'Paranaíta', 13, 'MT'),
(1435, 'Paranatinga', 13, 'MT'),
(1436, 'Pedra Preta', 13, 'MT'),
(1437, 'Peixoto de Azevedo', 13, 'MT'),
(1438, 'Planalto da Serra', 13, 'MT'),
(1439, 'Poconé', 13, 'MT'),
(1440, 'Pontal do Araguaia', 13, 'MT'),
(1441, 'Ponte Branca', 13, 'MT'),
(1442, 'Pontes e Lacerda', 13, 'MT'),
(1443, 'Porto Alegre do Norte', 13, 'MT'),
(1444, 'Porto dos Gaúchos', 13, 'MT'),
(1445, 'Porto Esperidião', 13, 'MT'),
(1446, 'Porto Estrela', 13, 'MT'),
(1447, 'Poxoréo', 13, 'MT'),
(1448, 'Primavera do Leste', 13, 'MT'),
(1449, 'Querência', 13, 'MT'),
(1450, 'Reserva do Cabaçal', 13, 'MT'),
(1451, 'Ribeirão Cascalheira', 13, 'MT'),
(1452, 'Ribeirãozinho', 13, 'MT'),
(1453, 'Rio Branco', 13, 'MT'),
(1454, 'Rondolândia', 13, 'MT'),
(1455, 'Rondonópolis', 13, 'MT'),
(1456, 'Rosário Oeste', 13, 'MT'),
(1457, 'Salto do Céu', 13, 'MT'),
(1458, 'Santa Carmem', 13, 'MT'),
(1459, 'Santa Cruz do Xingu', 13, 'MT'),
(1460, 'Santa Rita do Trivelato', 13, 'MT'),
(1461, 'Santa Terezinha', 13, 'MT'),
(1462, 'Santo Afonso', 13, 'MT'),
(1463, 'Santo Antônio do Leste', 13, 'MT'),
(1464, 'Santo Antônio do Leverger', 13, 'MT'),
(1465, 'São Félix do Araguaia', 13, 'MT'),
(1466, 'São José do Povo', 13, 'MT'),
(1467, 'São José do Rio Claro', 13, 'MT'),
(1468, 'São José do Xingu', 13, 'MT'),
(1469, 'São José dos Quatro Marcos', 13, 'MT'),
(1470, 'São Pedro da Cipa', 13, 'MT'),
(1471, 'Sapezal', 13, 'MT'),
(1472, 'Serra Nova Dourada', 13, 'MT'),
(1473, 'Sinop', 13, 'MT'),
(1474, 'Sorriso', 13, 'MT'),
(1475, 'Tabaporã', 13, 'MT'),
(1476, 'Tangará da Serra', 13, 'MT'),
(1477, 'Tapurah', 13, 'MT'),
(1478, 'Terra Nova do Norte', 13, 'MT'),
(1479, 'Tesouro', 13, 'MT'),
(1480, 'Torixoréu', 13, 'MT'),
(1481, 'União do Sul', 13, 'MT'),
(1482, 'Vale de São Domingos', 13, 'MT'),
(1483, 'Várzea Grande', 13, 'MT'),
(1484, 'Vera', 13, 'MT'),
(1485, 'Vila Bela da Santíssima Trindade', 13, 'MT'),
(1486, 'Vila Rica', 13, 'MT'),
(1487, 'Água Clara', 12, 'MS'),
(1488, 'Alcinópolis', 12, 'MS'),
(1489, 'Amambaí', 12, 'MS'),
(1490, 'Anastácio', 12, 'MS'),
(1491, 'Anaurilândia', 12, 'MS'),
(1492, 'Angélica', 12, 'MS'),
(1493, 'Antônio João', 12, 'MS'),
(1494, 'Aparecida do Taboado', 12, 'MS'),
(1495, 'Aquidauana', 12, 'MS'),
(1496, 'Aral Moreira', 12, 'MS'),
(1497, 'Bandeirantes', 12, 'MS'),
(1498, 'Bataguassu', 12, 'MS'),
(1499, 'Bataiporã', 12, 'MS'),
(1500, 'Bela Vista', 12, 'MS'),
(1501, 'Bodoquena', 12, 'MS'),
(1502, 'Bonito', 12, 'MS'),
(1503, 'Brasilândia', 12, 'MS'),
(1504, 'Caarapó', 12, 'MS'),
(1505, 'Camapuã', 12, 'MS'),
(1506, 'Campo Grande', 12, 'MS'),
(1507, 'Caracol', 12, 'MS'),
(1508, 'Cassilândia', 12, 'MS'),
(1509, 'Chapadão do Sul', 12, 'MS'),
(1510, 'Corguinho', 12, 'MS'),
(1511, 'Coronel Sapucaia', 12, 'MS'),
(1512, 'Corumbá', 12, 'MS'),
(1513, 'Costa Rica', 12, 'MS'),
(1514, 'Coxim', 12, 'MS'),
(1515, 'Deodápolis', 12, 'MS'),
(1516, 'Dois Irmãos do Buriti', 12, 'MS'),
(1517, 'Douradina', 12, 'MS'),
(1518, 'Dourados', 12, 'MS'),
(1519, 'Eldorado', 12, 'MS'),
(1520, 'Fátima do Sul', 12, 'MS'),
(1521, 'Figueirão', 12, 'MS'),
(1522, 'Glória de Dourados', 12, 'MS'),
(1523, 'Guia Lopes da Laguna', 12, 'MS'),
(1524, 'Iguatemi', 12, 'MS'),
(1525, 'Inocência', 12, 'MS'),
(1526, 'Itaporã', 12, 'MS'),
(1527, 'Itaquiraí', 12, 'MS'),
(1528, 'Ivinhema', 12, 'MS'),
(1529, 'Japorã', 12, 'MS'),
(1530, 'Jaraguari', 12, 'MS'),
(1531, 'Jardim', 12, 'MS'),
(1532, 'Jateí', 12, 'MS'),
(1533, 'Juti', 12, 'MS'),
(1534, 'Ladário', 12, 'MS'),
(1535, 'Laguna Carapã', 12, 'MS'),
(1536, 'Maracaju', 12, 'MS'),
(1537, 'Miranda', 12, 'MS'),
(1538, 'Mundo Novo', 12, 'MS'),
(1539, 'Naviraí', 12, 'MS'),
(1540, 'Nioaque', 12, 'MS'),
(1541, 'Nova Alvorada do Sul', 12, 'MS'),
(1542, 'Nova Andradina', 12, 'MS'),
(1543, 'Novo Horizonte do Sul', 12, 'MS'),
(1544, 'Paranaíba', 12, 'MS'),
(1545, 'Paranhos', 12, 'MS'),
(1546, 'Pedro Gomes', 12, 'MS'),
(1547, 'Ponta Porã', 12, 'MS'),
(1548, 'Porto Murtinho', 12, 'MS'),
(1549, 'Ribas do Rio Pardo', 12, 'MS'),
(1550, 'Rio Brilhante', 12, 'MS'),
(1551, 'Rio Negro', 12, 'MS'),
(1552, 'Rio Verde de Mato Grosso', 12, 'MS'),
(1553, 'Rochedo', 12, 'MS'),
(1554, 'Santa Rita do Pardo', 12, 'MS'),
(1555, 'São Gabriel do Oeste', 12, 'MS'),
(1556, 'Selvíria', 12, 'MS'),
(1557, 'Sete Quedas', 12, 'MS'),
(1558, 'Sidrolândia', 12, 'MS'),
(1559, 'Sonora', 12, 'MS'),
(1560, 'Tacuru', 12, 'MS'),
(1561, 'Taquarussu', 12, 'MS'),
(1562, 'Terenos', 12, 'MS'),
(1563, 'Três Lagoas', 12, 'MS'),
(1564, 'Vicentina', 12, 'MS'),
(1565, 'Abadia dos Dourados', 11, 'MG'),
(1566, 'Abaeté', 11, 'MG'),
(1567, 'Abre Campo', 11, 'MG'),
(1568, 'Acaiaca', 11, 'MG'),
(1569, 'Açucena', 11, 'MG'),
(1570, 'Água Boa', 11, 'MG'),
(1571, 'Água Comprida', 11, 'MG'),
(1572, 'Aguanil', 11, 'MG'),
(1573, 'Águas Formosas', 11, 'MG'),
(1574, 'Águas Vermelhas', 11, 'MG'),
(1575, 'Aimorés', 11, 'MG'),
(1576, 'Aiuruoca', 11, 'MG'),
(1577, 'Alagoa', 11, 'MG'),
(1578, 'Albertina', 11, 'MG'),
(1579, 'Além Paraíba', 11, 'MG'),
(1580, 'Alfenas', 11, 'MG'),
(1581, 'Alfredo Vasconcelos', 11, 'MG'),
(1582, 'Almenara', 11, 'MG'),
(1583, 'Alpercata', 11, 'MG'),
(1584, 'Alpinópolis', 11, 'MG'),
(1585, 'Alterosa', 11, 'MG'),
(1586, 'Alto Caparaó', 11, 'MG'),
(1587, 'Alto Jequitibá', 11, 'MG'),
(1588, 'Alto Rio Doce', 11, 'MG'),
(1589, 'Alvarenga', 11, 'MG'),
(1590, 'Alvinópolis', 11, 'MG'),
(1591, 'Alvorada de Minas', 11, 'MG'),
(1592, 'Amparo do Serra', 11, 'MG'),
(1593, 'Andradas', 11, 'MG'),
(1594, 'Andrelândia', 11, 'MG'),
(1595, 'Angelândia', 11, 'MG'),
(1596, 'Antônio Carlos', 11, 'MG'),
(1597, 'Antônio Dias', 11, 'MG'),
(1598, 'Antônio Prado de Minas', 11, 'MG'),
(1599, 'Araçaí', 11, 'MG'),
(1600, 'Aracitaba', 11, 'MG'),
(1601, 'Araçuaí', 11, 'MG'),
(1602, 'Araguari', 11, 'MG'),
(1603, 'Arantina', 11, 'MG'),
(1604, 'Araponga', 11, 'MG'),
(1605, 'Araporã', 11, 'MG'),
(1606, 'Arapuá', 11, 'MG'),
(1607, 'Araújos', 11, 'MG'),
(1608, 'Araxá', 11, 'MG'),
(1609, 'Arceburgo', 11, 'MG'),
(1610, 'Arcos', 11, 'MG'),
(1611, 'Areado', 11, 'MG'),
(1612, 'Argirita', 11, 'MG'),
(1613, 'Aricanduva', 11, 'MG'),
(1614, 'Arinos', 11, 'MG'),
(1615, 'Astolfo Dutra', 11, 'MG'),
(1616, 'Ataléia', 11, 'MG'),
(1617, 'Augusto de Lima', 11, 'MG'),
(1618, 'Baependi', 11, 'MG'),
(1619, 'Baldim', 11, 'MG'),
(1620, 'Bambuí', 11, 'MG'),
(1621, 'Bandeira', 11, 'MG'),
(1622, 'Bandeira do Sul', 11, 'MG'),
(1623, 'Barão de Cocais', 11, 'MG'),
(1624, 'Barão de Monte Alto', 11, 'MG'),
(1625, 'Barbacena', 11, 'MG'),
(1626, 'Barra Longa', 11, 'MG'),
(1627, 'Barroso', 11, 'MG'),
(1628, 'Bela Vista de Minas', 11, 'MG'),
(1629, 'Belmiro Braga', 11, 'MG'),
(1630, 'Belo Horizonte', 11, 'MG'),
(1631, 'Belo Oriente', 11, 'MG'),
(1632, 'Belo Vale', 11, 'MG'),
(1633, 'Berilo', 11, 'MG'),
(1634, 'Berizal', 11, 'MG'),
(1635, 'Bertópolis', 11, 'MG'),
(1636, 'Betim', 11, 'MG'),
(1637, 'Bias Fortes', 11, 'MG'),
(1638, 'Bicas', 11, 'MG'),
(1639, 'Biquinhas', 11, 'MG'),
(1640, 'Boa Esperança', 11, 'MG'),
(1641, 'Bocaina de Minas', 11, 'MG'),
(1642, 'Bocaiúva', 11, 'MG'),
(1643, 'Bom Despacho', 11, 'MG'),
(1644, 'Bom Jardim de Minas', 11, 'MG'),
(1645, 'Bom Jesus da Penha', 11, 'MG'),
(1646, 'Bom Jesus do Amparo', 11, 'MG'),
(1647, 'Bom Jesus do Galho', 11, 'MG'),
(1648, 'Bom Repouso', 11, 'MG'),
(1649, 'Bom Sucesso', 11, 'MG'),
(1650, 'Bonfim', 11, 'MG'),
(1651, 'Bonfinópolis de Minas', 11, 'MG'),
(1652, 'Bonito de Minas', 11, 'MG'),
(1653, 'Borda da Mata', 11, 'MG'),
(1654, 'Botelhos', 11, 'MG'),
(1655, 'Botumirim', 11, 'MG'),
(1656, 'Brás Pires', 11, 'MG'),
(1657, 'Brasilândia de Minas', 11, 'MG'),
(1658, 'Brasília de Minas', 11, 'MG'),
(1659, 'Brasópolis', 11, 'MG'),
(1660, 'Braúnas', 11, 'MG'),
(1661, 'Brumadinho', 11, 'MG'),
(1662, 'Bueno Brandão', 11, 'MG'),
(1663, 'Buenópolis', 11, 'MG'),
(1664, 'Bugre', 11, 'MG'),
(1665, 'Buritis', 11, 'MG'),
(1666, 'Buritizeiro', 11, 'MG');
INSERT INTO `cidade` (`id`, `nome`, `estado`, `uf`) VALUES
(1667, 'Cabeceira Grande', 11, 'MG'),
(1668, 'Cabo Verde', 11, 'MG'),
(1669, 'Cachoeira da Prata', 11, 'MG'),
(1670, 'Cachoeira de Minas', 11, 'MG'),
(1671, 'Cachoeira de Pajeú', 11, 'MG'),
(1672, 'Cachoeira Dourada', 11, 'MG'),
(1673, 'Caetanópolis', 11, 'MG'),
(1674, 'Caeté', 11, 'MG'),
(1675, 'Caiana', 11, 'MG'),
(1676, 'Cajuri', 11, 'MG'),
(1677, 'Caldas', 11, 'MG'),
(1678, 'Camacho', 11, 'MG'),
(1679, 'Camanducaia', 11, 'MG'),
(1680, 'Cambuí', 11, 'MG'),
(1681, 'Cambuquira', 11, 'MG'),
(1682, 'Campanário', 11, 'MG'),
(1683, 'Campanha', 11, 'MG'),
(1684, 'Campestre', 11, 'MG'),
(1685, 'Campina Verde', 11, 'MG'),
(1686, 'Campo Azul', 11, 'MG'),
(1687, 'Campo Belo', 11, 'MG'),
(1688, 'Campo do Meio', 11, 'MG'),
(1689, 'Campo Florido', 11, 'MG'),
(1690, 'Campos Altos', 11, 'MG'),
(1691, 'Campos Gerais', 11, 'MG'),
(1692, 'Cana Verde', 11, 'MG'),
(1693, 'Canaã', 11, 'MG'),
(1694, 'Canápolis', 11, 'MG'),
(1695, 'Candeias', 11, 'MG'),
(1696, 'Cantagalo', 11, 'MG'),
(1697, 'Caparaó', 11, 'MG'),
(1698, 'Capela Nova', 11, 'MG'),
(1699, 'Capelinha', 11, 'MG'),
(1700, 'Capetinga', 11, 'MG'),
(1701, 'Capim Branco', 11, 'MG'),
(1702, 'Capinópolis', 11, 'MG'),
(1703, 'Capitão Andrade', 11, 'MG'),
(1704, 'Capitão Enéas', 11, 'MG'),
(1705, 'Capitólio', 11, 'MG'),
(1706, 'Caputira', 11, 'MG'),
(1707, 'Caraí', 11, 'MG'),
(1708, 'Caranaíba', 11, 'MG'),
(1709, 'Carandaí', 11, 'MG'),
(1710, 'Carangola', 11, 'MG'),
(1711, 'Caratinga', 11, 'MG'),
(1712, 'Carbonita', 11, 'MG'),
(1713, 'Careaçu', 11, 'MG'),
(1714, 'Carlos Chagas', 11, 'MG'),
(1715, 'Carmésia', 11, 'MG'),
(1716, 'Carmo da Cachoeira', 11, 'MG'),
(1717, 'Carmo da Mata', 11, 'MG'),
(1718, 'Carmo de Minas', 11, 'MG'),
(1719, 'Carmo do Cajuru', 11, 'MG'),
(1720, 'Carmo do Paranaíba', 11, 'MG'),
(1721, 'Carmo do Rio Claro', 11, 'MG'),
(1722, 'Carmópolis de Minas', 11, 'MG'),
(1723, 'Carneirinho', 11, 'MG'),
(1724, 'Carrancas', 11, 'MG'),
(1725, 'Carvalhópolis', 11, 'MG'),
(1726, 'Carvalhos', 11, 'MG'),
(1727, 'Casa Grande', 11, 'MG'),
(1728, 'Cascalho Rico', 11, 'MG'),
(1729, 'Cássia', 11, 'MG'),
(1730, 'Cataguases', 11, 'MG'),
(1731, 'Catas Altas', 11, 'MG'),
(1732, 'Catas Altas da Noruega', 11, 'MG'),
(1733, 'Catuji', 11, 'MG'),
(1734, 'Catuti', 11, 'MG'),
(1735, 'Caxambu', 11, 'MG'),
(1736, 'Cedro do Abaeté', 11, 'MG'),
(1737, 'Central de Minas', 11, 'MG'),
(1738, 'Centralina', 11, 'MG'),
(1739, 'Chácara', 11, 'MG'),
(1740, 'Chalé', 11, 'MG'),
(1741, 'Chapada do Norte', 11, 'MG'),
(1742, 'Chapada Gaúcha', 11, 'MG'),
(1743, 'Chiador', 11, 'MG'),
(1744, 'Cipotânea', 11, 'MG'),
(1745, 'Claraval', 11, 'MG'),
(1746, 'Claro dos Poções', 11, 'MG'),
(1747, 'Cláudio', 11, 'MG'),
(1748, 'Coimbra', 11, 'MG'),
(1749, 'Coluna', 11, 'MG'),
(1750, 'Comendador Gomes', 11, 'MG'),
(1751, 'Comercinho', 11, 'MG'),
(1752, 'Conceição da Aparecida', 11, 'MG'),
(1753, 'Conceição da Barra de Minas', 11, 'MG'),
(1754, 'Conceição das Alagoas', 11, 'MG'),
(1755, 'Conceição das Pedras', 11, 'MG'),
(1756, 'Conceição de Ipanema', 11, 'MG'),
(1757, 'Conceição do Mato Dentro', 11, 'MG'),
(1758, 'Conceição do Pará', 11, 'MG'),
(1759, 'Conceição do Rio Verde', 11, 'MG'),
(1760, 'Conceição dos Ouros', 11, 'MG'),
(1761, 'Cônego Marinho', 11, 'MG'),
(1762, 'Confins', 11, 'MG'),
(1763, 'Congonhal', 11, 'MG'),
(1764, 'Congonhas', 11, 'MG'),
(1765, 'Congonhas do Norte', 11, 'MG'),
(1766, 'Conquista', 11, 'MG'),
(1767, 'Conselheiro Lafaiete', 11, 'MG'),
(1768, 'Conselheiro Pena', 11, 'MG'),
(1769, 'Consolação', 11, 'MG'),
(1770, 'Contagem', 11, 'MG'),
(1771, 'Coqueiral', 11, 'MG'),
(1772, 'Coração de Jesus', 11, 'MG'),
(1773, 'Cordisburgo', 11, 'MG'),
(1774, 'Cordislândia', 11, 'MG'),
(1775, 'Corinto', 11, 'MG'),
(1776, 'Coroaci', 11, 'MG'),
(1777, 'Coromandel', 11, 'MG'),
(1778, 'Coronel Fabriciano', 11, 'MG'),
(1779, 'Coronel Murta', 11, 'MG'),
(1780, 'Coronel Pacheco', 11, 'MG'),
(1781, 'Coronel Xavier Chaves', 11, 'MG'),
(1782, 'Córrego Danta', 11, 'MG'),
(1783, 'Córrego do Bom Jesus', 11, 'MG'),
(1784, 'Córrego Fundo', 11, 'MG'),
(1785, 'Córrego Novo', 11, 'MG'),
(1786, 'Couto de Magalhães de Minas', 11, 'MG'),
(1787, 'Crisólita', 11, 'MG'),
(1788, 'Cristais', 11, 'MG'),
(1789, 'Cristália', 11, 'MG'),
(1790, 'Cristiano Otoni', 11, 'MG'),
(1791, 'Cristina', 11, 'MG'),
(1792, 'Crucilândia', 11, 'MG'),
(1793, 'Cruzeiro da Fortaleza', 11, 'MG'),
(1794, 'Cruzília', 11, 'MG'),
(1795, 'Cuparaque', 11, 'MG'),
(1796, 'Curral de Dentro', 11, 'MG'),
(1797, 'Curvelo', 11, 'MG'),
(1798, 'Datas', 11, 'MG'),
(1799, 'Delfim Moreira', 11, 'MG'),
(1800, 'Delfinópolis', 11, 'MG'),
(1801, 'Delta', 11, 'MG'),
(1802, 'Descoberto', 11, 'MG'),
(1803, 'Desterro de Entre Rios', 11, 'MG'),
(1804, 'Desterro do Melo', 11, 'MG'),
(1805, 'Diamantina', 11, 'MG'),
(1806, 'Diogo de Vasconcelos', 11, 'MG'),
(1807, 'Dionísio', 11, 'MG'),
(1808, 'Divinésia', 11, 'MG'),
(1809, 'Divino', 11, 'MG'),
(1810, 'Divino das Laranjeiras', 11, 'MG'),
(1811, 'Divinolândia de Minas', 11, 'MG'),
(1812, 'Divinópolis', 11, 'MG'),
(1813, 'Divisa Alegre', 11, 'MG'),
(1814, 'Divisa Nova', 11, 'MG'),
(1815, 'Divisópolis', 11, 'MG'),
(1816, 'Dom Bosco', 11, 'MG'),
(1817, 'Dom Cavati', 11, 'MG'),
(1818, 'Dom Joaquim', 11, 'MG'),
(1819, 'Dom Silvério', 11, 'MG'),
(1820, 'Dom Viçoso', 11, 'MG'),
(1821, 'Dona Eusébia', 11, 'MG'),
(1822, 'Dores de Campos', 11, 'MG'),
(1823, 'Dores de Guanhães', 11, 'MG'),
(1824, 'Dores do Indaiá', 11, 'MG'),
(1825, 'Dores do Turvo', 11, 'MG'),
(1826, 'Doresópolis', 11, 'MG'),
(1827, 'Douradoquara', 11, 'MG'),
(1828, 'Durandé', 11, 'MG'),
(1829, 'Elói Mendes', 11, 'MG'),
(1830, 'Engenheiro Caldas', 11, 'MG'),
(1831, 'Engenheiro Navarro', 11, 'MG'),
(1832, 'Entre Folhas', 11, 'MG'),
(1833, 'Entre Rios de Minas', 11, 'MG'),
(1834, 'Ervália', 11, 'MG'),
(1835, 'Esmeraldas', 11, 'MG'),
(1836, 'Espera Feliz', 11, 'MG'),
(1837, 'Espinosa', 11, 'MG'),
(1838, 'Espírito Santo do Dourado', 11, 'MG'),
(1839, 'Estiva', 11, 'MG'),
(1840, 'Estrela Dalva', 11, 'MG'),
(1841, 'Estrela do Indaiá', 11, 'MG'),
(1842, 'Estrela do Sul', 11, 'MG'),
(1843, 'Eugenópolis', 11, 'MG'),
(1844, 'Ewbank da Câmara', 11, 'MG'),
(1845, 'Extrema', 11, 'MG'),
(1846, 'Fama', 11, 'MG'),
(1847, 'Faria Lemos', 11, 'MG'),
(1848, 'Felício dos Santos', 11, 'MG'),
(1849, 'Felisburgo', 11, 'MG'),
(1850, 'Felixlândia', 11, 'MG'),
(1851, 'Fernandes Tourinho', 11, 'MG'),
(1852, 'Ferros', 11, 'MG'),
(1853, 'Fervedouro', 11, 'MG'),
(1854, 'Florestal', 11, 'MG'),
(1855, 'Formiga', 11, 'MG'),
(1856, 'Formoso', 11, 'MG'),
(1857, 'Fortaleza de Minas', 11, 'MG'),
(1858, 'Fortuna de Minas', 11, 'MG'),
(1859, 'Francisco Badaró', 11, 'MG'),
(1860, 'Francisco Dumont', 11, 'MG'),
(1861, 'Francisco Sá', 11, 'MG'),
(1862, 'Franciscópolis', 11, 'MG'),
(1863, 'Frei Gaspar', 11, 'MG'),
(1864, 'Frei Inocêncio', 11, 'MG'),
(1865, 'Frei Lagonegro', 11, 'MG'),
(1866, 'Fronteira', 11, 'MG'),
(1867, 'Fronteira dos Vales', 11, 'MG'),
(1868, 'Fruta de Leite', 11, 'MG'),
(1869, 'Frutal', 11, 'MG'),
(1870, 'Funilândia', 11, 'MG'),
(1871, 'Galiléia', 11, 'MG'),
(1872, 'Gameleiras', 11, 'MG'),
(1873, 'Glaucilândia', 11, 'MG'),
(1874, 'Goiabeira', 11, 'MG'),
(1875, 'Goianá', 11, 'MG'),
(1876, 'Gonçalves', 11, 'MG'),
(1877, 'Gonzaga', 11, 'MG'),
(1878, 'Gouveia', 11, 'MG'),
(1879, 'Governador Valadares', 11, 'MG'),
(1880, 'Grão Mogol', 11, 'MG'),
(1881, 'Grupiara', 11, 'MG'),
(1882, 'Guanhães', 11, 'MG'),
(1883, 'Guapé', 11, 'MG'),
(1884, 'Guaraciaba', 11, 'MG'),
(1885, 'Guaraciama', 11, 'MG'),
(1886, 'Guaranésia', 11, 'MG'),
(1887, 'Guarani', 11, 'MG'),
(1888, 'Guarará', 11, 'MG'),
(1889, 'Guarda-Mor', 11, 'MG'),
(1890, 'Guaxupé', 11, 'MG'),
(1891, 'Guidoval', 11, 'MG'),
(1892, 'Guimarânia', 11, 'MG'),
(1893, 'Guiricema', 11, 'MG'),
(1894, 'Gurinhatã', 11, 'MG'),
(1895, 'Heliodora', 11, 'MG'),
(1896, 'Iapu', 11, 'MG'),
(1897, 'Ibertioga', 11, 'MG'),
(1898, 'Ibiá', 11, 'MG'),
(1899, 'Ibiaí', 11, 'MG'),
(1900, 'Ibiracatu', 11, 'MG'),
(1901, 'Ibiraci', 11, 'MG'),
(1902, 'Ibirité', 11, 'MG'),
(1903, 'Ibitiúra de Minas', 11, 'MG'),
(1904, 'Ibituruna', 11, 'MG'),
(1905, 'Icaraí de Minas', 11, 'MG'),
(1906, 'Igarapé', 11, 'MG'),
(1907, 'Igaratinga', 11, 'MG'),
(1908, 'Iguatama', 11, 'MG'),
(1909, 'Ijaci', 11, 'MG'),
(1910, 'Ilicínea', 11, 'MG'),
(1911, 'Imbé de Minas', 11, 'MG'),
(1912, 'Inconfidentes', 11, 'MG'),
(1913, 'Indaiabira', 11, 'MG'),
(1914, 'Indianópolis', 11, 'MG'),
(1915, 'Ingaí', 11, 'MG'),
(1916, 'Inhapim', 11, 'MG'),
(1917, 'Inhaúma', 11, 'MG'),
(1918, 'Inimutaba', 11, 'MG'),
(1919, 'Ipaba', 11, 'MG'),
(1920, 'Ipanema', 11, 'MG'),
(1921, 'Ipatinga', 11, 'MG'),
(1922, 'Ipiaçu', 11, 'MG'),
(1923, 'Ipuiúna', 11, 'MG'),
(1924, 'Iraí de Minas', 11, 'MG'),
(1925, 'Itabira', 11, 'MG'),
(1926, 'Itabirinha de Mantena', 11, 'MG'),
(1927, 'Itabirito', 11, 'MG'),
(1928, 'Itacambira', 11, 'MG'),
(1929, 'Itacarambi', 11, 'MG'),
(1930, 'Itaguara', 11, 'MG'),
(1931, 'Itaipé', 11, 'MG'),
(1932, 'Itajubá', 11, 'MG'),
(1933, 'Itamarandiba', 11, 'MG'),
(1934, 'Itamarati de Minas', 11, 'MG'),
(1935, 'Itambacuri', 11, 'MG'),
(1936, 'Itambé do Mato Dentro', 11, 'MG'),
(1937, 'Itamogi', 11, 'MG'),
(1938, 'Itamonte', 11, 'MG'),
(1939, 'Itanhandu', 11, 'MG'),
(1940, 'Itanhomi', 11, 'MG'),
(1941, 'Itaobim', 11, 'MG'),
(1942, 'Itapagipe', 11, 'MG'),
(1943, 'Itapecerica', 11, 'MG'),
(1944, 'Itapeva', 11, 'MG'),
(1945, 'Itatiaiuçu', 11, 'MG'),
(1946, 'Itaú de Minas', 11, 'MG'),
(1947, 'Itaúna', 11, 'MG'),
(1948, 'Itaverava', 11, 'MG'),
(1949, 'Itinga', 11, 'MG'),
(1950, 'Itueta', 11, 'MG'),
(1951, 'Ituiutaba', 11, 'MG'),
(1952, 'Itumirim', 11, 'MG'),
(1953, 'Iturama', 11, 'MG'),
(1954, 'Itutinga', 11, 'MG'),
(1955, 'Jaboticatubas', 11, 'MG'),
(1956, 'Jacinto', 11, 'MG'),
(1957, 'Jacuí', 11, 'MG'),
(1958, 'Jacutinga', 11, 'MG'),
(1959, 'Jaguaraçu', 11, 'MG'),
(1960, 'Jaíba', 11, 'MG'),
(1961, 'Jampruca', 11, 'MG'),
(1962, 'Janaúba', 11, 'MG'),
(1963, 'Januária', 11, 'MG'),
(1964, 'Japaraíba', 11, 'MG'),
(1965, 'Japonvar', 11, 'MG'),
(1966, 'Jeceaba', 11, 'MG'),
(1967, 'Jenipapo de Minas', 11, 'MG'),
(1968, 'Jequeri', 11, 'MG'),
(1969, 'Jequitaí', 11, 'MG'),
(1970, 'Jequitibá', 11, 'MG'),
(1971, 'Jequitinhonha', 11, 'MG'),
(1972, 'Jesuânia', 11, 'MG'),
(1973, 'Joaíma', 11, 'MG'),
(1974, 'Joanésia', 11, 'MG'),
(1975, 'João Monlevade', 11, 'MG'),
(1976, 'João Pinheiro', 11, 'MG'),
(1977, 'Joaquim Felício', 11, 'MG'),
(1978, 'Jordânia', 11, 'MG'),
(1979, 'José Gonçalves de Minas', 11, 'MG'),
(1980, 'José Raydan', 11, 'MG'),
(1981, 'Josenópolis', 11, 'MG'),
(1982, 'Juatuba', 11, 'MG'),
(1983, 'Juiz de Fora', 11, 'MG'),
(1984, 'Juramento', 11, 'MG'),
(1985, 'Juruaia', 11, 'MG'),
(1986, 'Juvenília', 11, 'MG'),
(1987, 'Ladainha', 11, 'MG'),
(1988, 'Lagamar', 11, 'MG'),
(1989, 'Lagoa da Prata', 11, 'MG'),
(1990, 'Lagoa dos Patos', 11, 'MG'),
(1991, 'Lagoa Dourada', 11, 'MG'),
(1992, 'Lagoa Formosa', 11, 'MG'),
(1993, 'Lagoa Grande', 11, 'MG'),
(1994, 'Lagoa Santa', 11, 'MG'),
(1995, 'Lajinha', 11, 'MG'),
(1996, 'Lambari', 11, 'MG'),
(1997, 'Lamim', 11, 'MG'),
(1998, 'Laranjal', 11, 'MG'),
(1999, 'Lassance', 11, 'MG'),
(2000, 'Lavras', 11, 'MG'),
(2001, 'Leandro Ferreira', 11, 'MG'),
(2002, 'Leme do Prado', 11, 'MG'),
(2003, 'Leopoldina', 11, 'MG'),
(2004, 'Liberdade', 11, 'MG'),
(2005, 'Lima Duarte', 11, 'MG'),
(2006, 'Limeira do Oeste', 11, 'MG'),
(2007, 'Lontra', 11, 'MG'),
(2008, 'Luisburgo', 11, 'MG'),
(2009, 'Luislândia', 11, 'MG'),
(2010, 'Luminárias', 11, 'MG'),
(2011, 'Luz', 11, 'MG'),
(2012, 'Machacalis', 11, 'MG'),
(2013, 'Machado', 11, 'MG'),
(2014, 'Madre de Deus de Minas', 11, 'MG'),
(2015, 'Malacacheta', 11, 'MG'),
(2016, 'Mamonas', 11, 'MG'),
(2017, 'Manga', 11, 'MG'),
(2018, 'Manhuaçu', 11, 'MG'),
(2019, 'Manhumirim', 11, 'MG'),
(2020, 'Mantena', 11, 'MG'),
(2021, 'Mar de Espanha', 11, 'MG'),
(2022, 'Maravilhas', 11, 'MG'),
(2023, 'Maria da Fé', 11, 'MG'),
(2024, 'Mariana', 11, 'MG'),
(2025, 'Marilac', 11, 'MG'),
(2026, 'Mário Campos', 11, 'MG'),
(2027, 'Maripá de Minas', 11, 'MG'),
(2028, 'Marliéria', 11, 'MG'),
(2029, 'Marmelópolis', 11, 'MG'),
(2030, 'Martinho Campos', 11, 'MG'),
(2031, 'Martins Soares', 11, 'MG'),
(2032, 'Mata Verde', 11, 'MG'),
(2033, 'Materlândia', 11, 'MG'),
(2034, 'Mateus Leme', 11, 'MG'),
(2035, 'Mathias Lobato', 11, 'MG'),
(2036, 'Matias Barbosa', 11, 'MG'),
(2037, 'Matias Cardoso', 11, 'MG'),
(2038, 'Matipó', 11, 'MG'),
(2039, 'Mato Verde', 11, 'MG'),
(2040, 'Matozinhos', 11, 'MG'),
(2041, 'Matutina', 11, 'MG'),
(2042, 'Medeiros', 11, 'MG'),
(2043, 'Medina', 11, 'MG'),
(2044, 'Mendes Pimentel', 11, 'MG'),
(2045, 'Mercês', 11, 'MG'),
(2046, 'Mesquita', 11, 'MG'),
(2047, 'Minas Novas', 11, 'MG'),
(2048, 'Minduri', 11, 'MG'),
(2049, 'Mirabela', 11, 'MG'),
(2050, 'Miradouro', 11, 'MG'),
(2051, 'Miraí', 11, 'MG'),
(2052, 'Miravânia', 11, 'MG'),
(2053, 'Moeda', 11, 'MG'),
(2054, 'Moema', 11, 'MG'),
(2055, 'Monjolos', 11, 'MG'),
(2056, 'Monsenhor Paulo', 11, 'MG'),
(2057, 'Montalvânia', 11, 'MG'),
(2058, 'Monte Alegre de Minas', 11, 'MG'),
(2059, 'Monte Azul', 11, 'MG'),
(2060, 'Monte Belo', 11, 'MG'),
(2061, 'Monte Carmelo', 11, 'MG'),
(2062, 'Monte Formoso', 11, 'MG'),
(2063, 'Monte Santo de Minas', 11, 'MG'),
(2064, 'Monte Sião', 11, 'MG'),
(2065, 'Montes Claros', 11, 'MG'),
(2066, 'Montezuma', 11, 'MG'),
(2067, 'Morada Nova de Minas', 11, 'MG'),
(2068, 'Morro da Garça', 11, 'MG'),
(2069, 'Morro do Pilar', 11, 'MG'),
(2070, 'Munhoz', 11, 'MG'),
(2071, 'Muriaé', 11, 'MG'),
(2072, 'Mutum', 11, 'MG'),
(2073, 'Muzambinho', 11, 'MG'),
(2074, 'Nacip Raydan', 11, 'MG'),
(2075, 'Nanuque', 11, 'MG'),
(2076, 'Naque', 11, 'MG'),
(2077, 'Natalândia', 11, 'MG'),
(2078, 'Natércia', 11, 'MG'),
(2079, 'Nazareno', 11, 'MG'),
(2080, 'Nepomuceno', 11, 'MG'),
(2081, 'Ninheira', 11, 'MG'),
(2082, 'Nova Belém', 11, 'MG'),
(2083, 'Nova Era', 11, 'MG'),
(2084, 'Nova Lima', 11, 'MG'),
(2085, 'Nova Módica', 11, 'MG'),
(2086, 'Nova Ponte', 11, 'MG'),
(2087, 'Nova Porteirinha', 11, 'MG'),
(2088, 'Nova Resende', 11, 'MG'),
(2089, 'Nova Serrana', 11, 'MG'),
(2090, 'Nova União', 11, 'MG'),
(2091, 'Novo Cruzeiro', 11, 'MG'),
(2092, 'Novo Oriente de Minas', 11, 'MG'),
(2093, 'Novorizonte', 11, 'MG'),
(2094, 'Olaria', 11, 'MG'),
(2095, 'Olhos-d`Água', 11, 'MG'),
(2096, 'Olímpio Noronha', 11, 'MG'),
(2097, 'Oliveira', 11, 'MG'),
(2098, 'Oliveira Fortes', 11, 'MG'),
(2099, 'Onça de Pitangui', 11, 'MG'),
(2100, 'Oratórios', 11, 'MG'),
(2101, 'Orizânia', 11, 'MG'),
(2102, 'Ouro Branco', 11, 'MG'),
(2103, 'Ouro Fino', 11, 'MG'),
(2104, 'Ouro Preto', 11, 'MG'),
(2105, 'Ouro Verde de Minas', 11, 'MG'),
(2106, 'Padre Carvalho', 11, 'MG'),
(2107, 'Padre Paraíso', 11, 'MG'),
(2108, 'Pai Pedro', 11, 'MG'),
(2109, 'Paineiras', 11, 'MG'),
(2110, 'Pains', 11, 'MG'),
(2111, 'Paiva', 11, 'MG'),
(2112, 'Palma', 11, 'MG'),
(2113, 'Palmópolis', 11, 'MG'),
(2114, 'Papagaios', 11, 'MG'),
(2115, 'Pará de Minas', 11, 'MG'),
(2116, 'Paracatu', 11, 'MG'),
(2117, 'Paraguaçu', 11, 'MG'),
(2118, 'Paraisópolis', 11, 'MG'),
(2119, 'Paraopeba', 11, 'MG'),
(2120, 'Passa Quatro', 11, 'MG'),
(2121, 'Passa Tempo', 11, 'MG'),
(2122, 'Passabém', 11, 'MG'),
(2123, 'Passa-Vinte', 11, 'MG'),
(2124, 'Passos', 11, 'MG'),
(2125, 'Patis', 11, 'MG'),
(2126, 'Patos de Minas', 11, 'MG'),
(2127, 'Patrocínio', 11, 'MG'),
(2128, 'Patrocínio do Muriaé', 11, 'MG'),
(2129, 'Paula Cândido', 11, 'MG'),
(2130, 'Paulistas', 11, 'MG'),
(2131, 'Pavão', 11, 'MG'),
(2132, 'Peçanha', 11, 'MG'),
(2133, 'Pedra Azul', 11, 'MG'),
(2134, 'Pedra Bonita', 11, 'MG'),
(2135, 'Pedra do Anta', 11, 'MG'),
(2136, 'Pedra do Indaiá', 11, 'MG'),
(2137, 'Pedra Dourada', 11, 'MG'),
(2138, 'Pedralva', 11, 'MG'),
(2139, 'Pedras de Maria da Cruz', 11, 'MG'),
(2140, 'Pedrinópolis', 11, 'MG'),
(2141, 'Pedro Leopoldo', 11, 'MG'),
(2142, 'Pedro Teixeira', 11, 'MG'),
(2143, 'Pequeri', 11, 'MG'),
(2144, 'Pequi', 11, 'MG'),
(2145, 'Perdigão', 11, 'MG'),
(2146, 'Perdizes', 11, 'MG'),
(2147, 'Perdões', 11, 'MG'),
(2148, 'Periquito', 11, 'MG'),
(2149, 'Pescador', 11, 'MG'),
(2150, 'Piau', 11, 'MG'),
(2151, 'Piedade de Caratinga', 11, 'MG'),
(2152, 'Piedade de Ponte Nova', 11, 'MG'),
(2153, 'Piedade do Rio Grande', 11, 'MG'),
(2154, 'Piedade dos Gerais', 11, 'MG'),
(2155, 'Pimenta', 11, 'MG'),
(2156, 'Pingo-d`Água', 11, 'MG'),
(2157, 'Pintópolis', 11, 'MG'),
(2158, 'Piracema', 11, 'MG'),
(2159, 'Pirajuba', 11, 'MG'),
(2160, 'Piranga', 11, 'MG'),
(2161, 'Piranguçu', 11, 'MG'),
(2162, 'Piranguinho', 11, 'MG'),
(2163, 'Pirapetinga', 11, 'MG'),
(2164, 'Pirapora', 11, 'MG'),
(2165, 'Piraúba', 11, 'MG'),
(2166, 'Pitangui', 11, 'MG'),
(2167, 'Piumhi', 11, 'MG'),
(2168, 'Planura', 11, 'MG'),
(2169, 'Poço Fundo', 11, 'MG'),
(2170, 'Poços de Caldas', 11, 'MG'),
(2171, 'Pocrane', 11, 'MG'),
(2172, 'Pompéu', 11, 'MG'),
(2173, 'Ponte Nova', 11, 'MG'),
(2174, 'Ponto Chique', 11, 'MG'),
(2175, 'Ponto dos Volantes', 11, 'MG'),
(2176, 'Porteirinha', 11, 'MG'),
(2177, 'Porto Firme', 11, 'MG'),
(2178, 'Poté', 11, 'MG'),
(2179, 'Pouso Alegre', 11, 'MG'),
(2180, 'Pouso Alto', 11, 'MG'),
(2181, 'Prados', 11, 'MG'),
(2182, 'Prata', 11, 'MG'),
(2183, 'Pratápolis', 11, 'MG'),
(2184, 'Pratinha', 11, 'MG'),
(2185, 'Presidente Bernardes', 11, 'MG'),
(2186, 'Presidente Juscelino', 11, 'MG'),
(2187, 'Presidente Kubitschek', 11, 'MG'),
(2188, 'Presidente Olegário', 11, 'MG'),
(2189, 'Prudente de Morais', 11, 'MG'),
(2190, 'Quartel Geral', 11, 'MG'),
(2191, 'Queluzito', 11, 'MG'),
(2192, 'Raposos', 11, 'MG'),
(2193, 'Raul Soares', 11, 'MG'),
(2194, 'Recreio', 11, 'MG'),
(2195, 'Reduto', 11, 'MG'),
(2196, 'Resende Costa', 11, 'MG'),
(2197, 'Resplendor', 11, 'MG'),
(2198, 'Ressaquinha', 11, 'MG'),
(2199, 'Riachinho', 11, 'MG'),
(2200, 'Riacho dos Machados', 11, 'MG'),
(2201, 'Ribeirão das Neves', 11, 'MG'),
(2202, 'Ribeirão Vermelho', 11, 'MG'),
(2203, 'Rio Acima', 11, 'MG'),
(2204, 'Rio Casca', 11, 'MG'),
(2205, 'Rio do Prado', 11, 'MG'),
(2206, 'Rio Doce', 11, 'MG'),
(2207, 'Rio Espera', 11, 'MG'),
(2208, 'Rio Manso', 11, 'MG'),
(2209, 'Rio Novo', 11, 'MG'),
(2210, 'Rio Paranaíba', 11, 'MG'),
(2211, 'Rio Pardo de Minas', 11, 'MG'),
(2212, 'Rio Piracicaba', 11, 'MG'),
(2213, 'Rio Pomba', 11, 'MG'),
(2214, 'Rio Preto', 11, 'MG'),
(2215, 'Rio Vermelho', 11, 'MG'),
(2216, 'Ritápolis', 11, 'MG'),
(2217, 'Rochedo de Minas', 11, 'MG'),
(2218, 'Rodeiro', 11, 'MG'),
(2219, 'Romaria', 11, 'MG'),
(2220, 'Rosário da Limeira', 11, 'MG'),
(2221, 'Rubelita', 11, 'MG'),
(2222, 'Rubim', 11, 'MG'),
(2223, 'Sabará', 11, 'MG'),
(2224, 'Sabinópolis', 11, 'MG'),
(2225, 'Sacramento', 11, 'MG'),
(2226, 'Salinas', 11, 'MG'),
(2227, 'Salto da Divisa', 11, 'MG'),
(2228, 'Santa Bárbara', 11, 'MG'),
(2229, 'Santa Bárbara do Leste', 11, 'MG'),
(2230, 'Santa Bárbara do Monte Verde', 11, 'MG'),
(2231, 'Santa Bárbara do Tugúrio', 11, 'MG'),
(2232, 'Santa Cruz de Minas', 11, 'MG'),
(2233, 'Santa Cruz de Salinas', 11, 'MG'),
(2234, 'Santa Cruz do Escalvado', 11, 'MG'),
(2235, 'Santa Efigênia de Minas', 11, 'MG'),
(2236, 'Santa Fé de Minas', 11, 'MG'),
(2237, 'Santa Helena de Minas', 11, 'MG'),
(2238, 'Santa Juliana', 11, 'MG'),
(2239, 'Santa Luzia', 11, 'MG'),
(2240, 'Santa Margarida', 11, 'MG'),
(2241, 'Santa Maria de Itabira', 11, 'MG'),
(2242, 'Santa Maria do Salto', 11, 'MG'),
(2243, 'Santa Maria do Suaçuí', 11, 'MG'),
(2244, 'Santa Rita de Caldas', 11, 'MG'),
(2245, 'Santa Rita de Ibitipoca', 11, 'MG'),
(2246, 'Santa Rita de Jacutinga', 11, 'MG'),
(2247, 'Santa Rita de Minas', 11, 'MG'),
(2248, 'Santa Rita do Itueto', 11, 'MG'),
(2249, 'Santa Rita do Sapucaí', 11, 'MG'),
(2250, 'Santa Rosa da Serra', 11, 'MG'),
(2251, 'Santa Vitória', 11, 'MG'),
(2252, 'Santana da Vargem', 11, 'MG'),
(2253, 'Santana de Cataguases', 11, 'MG'),
(2254, 'Santana de Pirapama', 11, 'MG'),
(2255, 'Santana do Deserto', 11, 'MG'),
(2256, 'Santana do Garambéu', 11, 'MG'),
(2257, 'Santana do Jacaré', 11, 'MG'),
(2258, 'Santana do Manhuaçu', 11, 'MG'),
(2259, 'Santana do Paraíso', 11, 'MG'),
(2260, 'Santana do Riacho', 11, 'MG'),
(2261, 'Santana dos Montes', 11, 'MG'),
(2262, 'Santo Antônio do Amparo', 11, 'MG'),
(2263, 'Santo Antônio do Aventureiro', 11, 'MG'),
(2264, 'Santo Antônio do Grama', 11, 'MG'),
(2265, 'Santo Antônio do Itambé', 11, 'MG'),
(2266, 'Santo Antônio do Jacinto', 11, 'MG'),
(2267, 'Santo Antônio do Monte', 11, 'MG'),
(2268, 'Santo Antônio do Retiro', 11, 'MG'),
(2269, 'Santo Antônio do Rio Abaixo', 11, 'MG'),
(2270, 'Santo Hipólito', 11, 'MG'),
(2271, 'Santos Dumont', 11, 'MG'),
(2272, 'São Bento Abade', 11, 'MG'),
(2273, 'São Brás do Suaçuí', 11, 'MG'),
(2274, 'São Domingos das Dores', 11, 'MG'),
(2275, 'São Domingos do Prata', 11, 'MG'),
(2276, 'São Félix de Minas', 11, 'MG'),
(2277, 'São Francisco', 11, 'MG'),
(2278, 'São Francisco de Paula', 11, 'MG'),
(2279, 'São Francisco de Sales', 11, 'MG'),
(2280, 'São Francisco do Glória', 11, 'MG'),
(2281, 'São Geraldo', 11, 'MG'),
(2282, 'São Geraldo da Piedade', 11, 'MG'),
(2283, 'São Geraldo do Baixio', 11, 'MG'),
(2284, 'São Gonçalo do Abaeté', 11, 'MG'),
(2285, 'São Gonçalo do Pará', 11, 'MG'),
(2286, 'São Gonçalo do Rio Abaixo', 11, 'MG'),
(2287, 'São Gonçalo do Rio Preto', 11, 'MG'),
(2288, 'São Gonçalo do Sapucaí', 11, 'MG'),
(2289, 'São Gotardo', 11, 'MG'),
(2290, 'São João Batista do Glória', 11, 'MG'),
(2291, 'São João da Lagoa', 11, 'MG'),
(2292, 'São João da Mata', 11, 'MG'),
(2293, 'São João da Ponte', 11, 'MG'),
(2294, 'São João das Missões', 11, 'MG'),
(2295, 'São João del Rei', 11, 'MG'),
(2296, 'São João do Manhuaçu', 11, 'MG'),
(2297, 'São João do Manteninha', 11, 'MG'),
(2298, 'São João do Oriente', 11, 'MG'),
(2299, 'São João do Pacuí', 11, 'MG'),
(2300, 'São João do Paraíso', 11, 'MG'),
(2301, 'São João Evangelista', 11, 'MG'),
(2302, 'São João Nepomuceno', 11, 'MG'),
(2303, 'São Joaquim de Bicas', 11, 'MG'),
(2304, 'São José da Barra', 11, 'MG'),
(2305, 'São José da Lapa', 11, 'MG'),
(2306, 'São José da Safira', 11, 'MG'),
(2307, 'São José da Varginha', 11, 'MG'),
(2308, 'São José do Alegre', 11, 'MG'),
(2309, 'São José do Divino', 11, 'MG'),
(2310, 'São José do Goiabal', 11, 'MG'),
(2311, 'São José do Jacuri', 11, 'MG'),
(2312, 'São José do Mantimento', 11, 'MG'),
(2313, 'São Lourenço', 11, 'MG'),
(2314, 'São Miguel do Anta', 11, 'MG'),
(2315, 'São Pedro da União', 11, 'MG'),
(2316, 'São Pedro do Suaçuí', 11, 'MG'),
(2317, 'São Pedro dos Ferros', 11, 'MG'),
(2318, 'São Romão', 11, 'MG'),
(2319, 'São Roque de Minas', 11, 'MG'),
(2320, 'São Sebastião da Bela Vista', 11, 'MG'),
(2321, 'São Sebastião da Vargem Alegre', 11, 'MG'),
(2322, 'São Sebastião do Anta', 11, 'MG'),
(2323, 'São Sebastião do Maranhão', 11, 'MG'),
(2324, 'São Sebastião do Oeste', 11, 'MG'),
(2325, 'São Sebastião do Paraíso', 11, 'MG'),
(2326, 'São Sebastião do Rio Preto', 11, 'MG'),
(2327, 'São Sebastião do Rio Verde', 11, 'MG'),
(2328, 'São Thomé das Letras', 11, 'MG'),
(2329, 'São Tiago', 11, 'MG'),
(2330, 'São Tomás de Aquino', 11, 'MG'),
(2331, 'São Vicente de Minas', 11, 'MG'),
(2332, 'Sapucaí-Mirim', 11, 'MG'),
(2333, 'Sardoá', 11, 'MG'),
(2334, 'Sarzedo', 11, 'MG'),
(2335, 'Sem-Peixe', 11, 'MG'),
(2336, 'Senador Amaral', 11, 'MG'),
(2337, 'Senador Cortes', 11, 'MG'),
(2338, 'Senador Firmino', 11, 'MG'),
(2339, 'Senador José Bento', 11, 'MG'),
(2340, 'Senador Modestino Gonçalves', 11, 'MG'),
(2341, 'Senhora de Oliveira', 11, 'MG'),
(2342, 'Senhora do Porto', 11, 'MG'),
(2343, 'Senhora dos Remédios', 11, 'MG'),
(2344, 'Sericita', 11, 'MG'),
(2345, 'Seritinga', 11, 'MG'),
(2346, 'Serra Azul de Minas', 11, 'MG'),
(2347, 'Serra da Saudade', 11, 'MG'),
(2348, 'Serra do Salitre', 11, 'MG'),
(2349, 'Serra dos Aimorés', 11, 'MG'),
(2350, 'Serrania', 11, 'MG'),
(2351, 'Serranópolis de Minas', 11, 'MG'),
(2352, 'Serranos', 11, 'MG'),
(2353, 'Serro', 11, 'MG'),
(2354, 'Sete Lagoas', 11, 'MG'),
(2355, 'Setubinha', 11, 'MG'),
(2356, 'Silveirânia', 11, 'MG'),
(2357, 'Silvianópolis', 11, 'MG'),
(2358, 'Simão Pereira', 11, 'MG'),
(2359, 'Simonésia', 11, 'MG'),
(2360, 'Sobrália', 11, 'MG'),
(2361, 'Soledade de Minas', 11, 'MG'),
(2362, 'Tabuleiro', 11, 'MG'),
(2363, 'Taiobeiras', 11, 'MG'),
(2364, 'Taparuba', 11, 'MG'),
(2365, 'Tapira', 11, 'MG'),
(2366, 'Tapiraí', 11, 'MG'),
(2367, 'Taquaraçu de Minas', 11, 'MG'),
(2368, 'Tarumirim', 11, 'MG'),
(2369, 'Teixeiras', 11, 'MG'),
(2370, 'Teófilo Otoni', 11, 'MG'),
(2371, 'Timóteo', 11, 'MG'),
(2372, 'Tiradentes', 11, 'MG'),
(2373, 'Tiros', 11, 'MG'),
(2374, 'Tocantins', 11, 'MG'),
(2375, 'Tocos do Moji', 11, 'MG'),
(2376, 'Toledo', 11, 'MG'),
(2377, 'Tombos', 11, 'MG'),
(2378, 'Três Corações', 11, 'MG'),
(2379, 'Três Marias', 11, 'MG'),
(2380, 'Três Pontas', 11, 'MG'),
(2381, 'Tumiritinga', 11, 'MG'),
(2382, 'Tupaciguara', 11, 'MG'),
(2383, 'Turmalina', 11, 'MG'),
(2384, 'Turvolândia', 11, 'MG'),
(2385, 'Ubá', 11, 'MG'),
(2386, 'Ubaí', 11, 'MG'),
(2387, 'Ubaporanga', 11, 'MG'),
(2388, 'Uberaba', 11, 'MG'),
(2389, 'Uberlândia', 11, 'MG'),
(2390, 'Umburatiba', 11, 'MG'),
(2391, 'Unaí', 11, 'MG'),
(2392, 'União de Minas', 11, 'MG'),
(2393, 'Uruana de Minas', 11, 'MG'),
(2394, 'Urucânia', 11, 'MG'),
(2395, 'Urucuia', 11, 'MG'),
(2396, 'Vargem Alegre', 11, 'MG'),
(2397, 'Vargem Bonita', 11, 'MG'),
(2398, 'Vargem Grande do Rio Pardo', 11, 'MG'),
(2399, 'Varginha', 11, 'MG'),
(2400, 'Varjão de Minas', 11, 'MG'),
(2401, 'Várzea da Palma', 11, 'MG'),
(2402, 'Varzelândia', 11, 'MG'),
(2403, 'Vazante', 11, 'MG'),
(2404, 'Verdelândia', 11, 'MG'),
(2405, 'Veredinha', 11, 'MG'),
(2406, 'Veríssimo', 11, 'MG'),
(2407, 'Vermelho Novo', 11, 'MG'),
(2408, 'Vespasiano', 11, 'MG'),
(2409, 'Viçosa', 11, 'MG'),
(2410, 'Vieiras', 11, 'MG'),
(2411, 'Virgem da Lapa', 11, 'MG'),
(2412, 'Virgínia', 11, 'MG'),
(2413, 'Virginópolis', 11, 'MG'),
(2414, 'Virgolândia', 11, 'MG'),
(2415, 'Visconde do Rio Branco', 11, 'MG'),
(2416, 'Volta Grande', 11, 'MG'),
(2417, 'Wenceslau Braz', 11, 'MG'),
(2418, 'Abaetetuba', 14, 'PA'),
(2419, 'Abel Figueiredo', 14, 'PA'),
(2420, 'Acará', 14, 'PA'),
(2421, 'Afuá', 14, 'PA'),
(2422, 'Água Azul do Norte', 14, 'PA'),
(2423, 'Alenquer', 14, 'PA'),
(2424, 'Almeirim', 14, 'PA'),
(2425, 'Altamira', 14, 'PA'),
(2426, 'Anajás', 14, 'PA'),
(2427, 'Ananindeua', 14, 'PA'),
(2428, 'Anapu', 14, 'PA'),
(2429, 'Augusto Corrêa', 14, 'PA'),
(2430, 'Aurora do Pará', 14, 'PA'),
(2431, 'Aveiro', 14, 'PA'),
(2432, 'Bagre', 14, 'PA'),
(2433, 'Baião', 14, 'PA'),
(2434, 'Bannach', 14, 'PA'),
(2435, 'Barcarena', 14, 'PA'),
(2436, 'Belém', 14, 'PA'),
(2437, 'Belterra', 14, 'PA'),
(2438, 'Benevides', 14, 'PA'),
(2439, 'Bom Jesus do Tocantins', 14, 'PA'),
(2440, 'Bonito', 14, 'PA'),
(2441, 'Bragança', 14, 'PA'),
(2442, 'Brasil Novo', 14, 'PA'),
(2443, 'Brejo Grande do Araguaia', 14, 'PA'),
(2444, 'Breu Branco', 14, 'PA'),
(2445, 'Breves', 14, 'PA'),
(2446, 'Bujaru', 14, 'PA'),
(2447, 'Cachoeira do Arari', 14, 'PA'),
(2448, 'Cachoeira do Piriá', 14, 'PA'),
(2449, 'Cametá', 14, 'PA'),
(2450, 'Canaã dos Carajás', 14, 'PA'),
(2451, 'Capanema', 14, 'PA'),
(2452, 'Capitão Poço', 14, 'PA'),
(2453, 'Castanhal', 14, 'PA'),
(2454, 'Chaves', 14, 'PA'),
(2455, 'Colares', 14, 'PA'),
(2456, 'Conceição do Araguaia', 14, 'PA'),
(2457, 'Concórdia do Pará', 14, 'PA'),
(2458, 'Cumaru do Norte', 14, 'PA'),
(2459, 'Curionópolis', 14, 'PA'),
(2460, 'Curralinho', 14, 'PA'),
(2461, 'Curuá', 14, 'PA'),
(2462, 'Curuçá', 14, 'PA'),
(2463, 'Dom Eliseu', 14, 'PA'),
(2464, 'Eldorado dos Carajás', 14, 'PA'),
(2465, 'Faro', 14, 'PA'),
(2466, 'Floresta do Araguaia', 14, 'PA'),
(2467, 'Garrafão do Norte', 14, 'PA'),
(2468, 'Goianésia do Pará', 14, 'PA'),
(2469, 'Gurupá', 14, 'PA'),
(2470, 'Igarapé-Açu', 14, 'PA'),
(2471, 'Igarapé-Miri', 14, 'PA'),
(2472, 'Inhangapi', 14, 'PA'),
(2473, 'Ipixuna do Pará', 14, 'PA'),
(2474, 'Irituia', 14, 'PA'),
(2475, 'Itaituba', 14, 'PA'),
(2476, 'Itupiranga', 14, 'PA'),
(2477, 'Jacareacanga', 14, 'PA'),
(2478, 'Jacundá', 14, 'PA'),
(2479, 'Juruti', 14, 'PA'),
(2480, 'Limoeiro do Ajuru', 14, 'PA'),
(2481, 'Mãe do Rio', 14, 'PA'),
(2482, 'Magalhães Barata', 14, 'PA'),
(2483, 'Marabá', 14, 'PA'),
(2484, 'Maracanã', 14, 'PA'),
(2485, 'Marapanim', 14, 'PA'),
(2486, 'Marituba', 14, 'PA'),
(2487, 'Medicilândia', 14, 'PA'),
(2488, 'Melgaço', 14, 'PA'),
(2489, 'Mocajuba', 14, 'PA'),
(2490, 'Moju', 14, 'PA'),
(2491, 'Monte Alegre', 14, 'PA'),
(2492, 'Muaná', 14, 'PA'),
(2493, 'Nova Esperança do Piriá', 14, 'PA'),
(2494, 'Nova Ipixuna', 14, 'PA'),
(2495, 'Nova Timboteua', 14, 'PA'),
(2496, 'Novo Progresso', 14, 'PA'),
(2497, 'Novo Repartimento', 14, 'PA'),
(2498, 'Óbidos', 14, 'PA'),
(2499, 'Oeiras do Pará', 14, 'PA'),
(2500, 'Oriximiná', 14, 'PA'),
(2501, 'Ourém', 14, 'PA'),
(2502, 'Ourilândia do Norte', 14, 'PA'),
(2503, 'Pacajá', 14, 'PA'),
(2504, 'Palestina do Pará', 14, 'PA'),
(2505, 'Paragominas', 14, 'PA'),
(2506, 'Parauapebas', 14, 'PA'),
(2507, 'Pau d`Arco', 14, 'PA'),
(2508, 'Peixe-Boi', 14, 'PA'),
(2509, 'Piçarra', 14, 'PA'),
(2510, 'Placas', 14, 'PA'),
(2511, 'Ponta de Pedras', 14, 'PA'),
(2512, 'Portel', 14, 'PA'),
(2513, 'Porto de Moz', 14, 'PA'),
(2514, 'Prainha', 14, 'PA'),
(2515, 'Primavera', 14, 'PA'),
(2516, 'Quatipuru', 14, 'PA'),
(2517, 'Redenção', 14, 'PA'),
(2518, 'Rio Maria', 14, 'PA'),
(2519, 'Rondon do Pará', 14, 'PA'),
(2520, 'Rurópolis', 14, 'PA'),
(2521, 'Salinópolis', 14, 'PA'),
(2522, 'Salvaterra', 14, 'PA'),
(2523, 'Santa Bárbara do Pará', 14, 'PA'),
(2524, 'Santa Cruz do Arari', 14, 'PA'),
(2525, 'Santa Isabel do Pará', 14, 'PA'),
(2526, 'Santa Luzia do Pará', 14, 'PA'),
(2527, 'Santa Maria das Barreiras', 14, 'PA'),
(2528, 'Santa Maria do Pará', 14, 'PA'),
(2529, 'Santana do Araguaia', 14, 'PA'),
(2530, 'Santarém', 14, 'PA'),
(2531, 'Santarém Novo', 14, 'PA'),
(2532, 'Santo Antônio do Tauá', 14, 'PA'),
(2533, 'São Caetano de Odivelas', 14, 'PA'),
(2534, 'São Domingos do Araguaia', 14, 'PA'),
(2535, 'São Domingos do Capim', 14, 'PA'),
(2536, 'São Félix do Xingu', 14, 'PA'),
(2537, 'São Francisco do Pará', 14, 'PA'),
(2538, 'São Geraldo do Araguaia', 14, 'PA'),
(2539, 'São João da Ponta', 14, 'PA'),
(2540, 'São João de Pirabas', 14, 'PA'),
(2541, 'São João do Araguaia', 14, 'PA'),
(2542, 'São Miguel do Guamá', 14, 'PA'),
(2543, 'São Sebastião da Boa Vista', 14, 'PA'),
(2544, 'Sapucaia', 14, 'PA'),
(2545, 'Senador José Porfírio', 14, 'PA'),
(2546, 'Soure', 14, 'PA'),
(2547, 'Tailândia', 14, 'PA'),
(2548, 'Terra Alta', 14, 'PA'),
(2549, 'Terra Santa', 14, 'PA'),
(2550, 'Tomé-Açu', 14, 'PA'),
(2551, 'Tracuateua', 14, 'PA'),
(2552, 'Trairão', 14, 'PA'),
(2553, 'Tucumã', 14, 'PA'),
(2554, 'Tucuruí', 14, 'PA'),
(2555, 'Ulianópolis', 14, 'PA'),
(2556, 'Uruará', 14, 'PA'),
(2557, 'Vigia', 14, 'PA'),
(2558, 'Viseu', 14, 'PA'),
(2559, 'Vitória do Xingu', 14, 'PA'),
(2560, 'Xinguara', 14, 'PA'),
(2561, 'Água Branca', 15, 'PB'),
(2562, 'Aguiar', 15, 'PB'),
(2563, 'Alagoa Grande', 15, 'PB'),
(2564, 'Alagoa Nova', 15, 'PB'),
(2565, 'Alagoinha', 15, 'PB'),
(2566, 'Alcantil', 15, 'PB'),
(2567, 'Algodão de Jandaíra', 15, 'PB'),
(2568, 'Alhandra', 15, 'PB'),
(2569, 'Amparo', 15, 'PB'),
(2570, 'Aparecida', 15, 'PB'),
(2571, 'Araçagi', 15, 'PB'),
(2572, 'Arara', 15, 'PB'),
(2573, 'Araruna', 15, 'PB'),
(2574, 'Areia', 15, 'PB'),
(2575, 'Areia de Baraúnas', 15, 'PB'),
(2576, 'Areial', 15, 'PB'),
(2577, 'Aroeiras', 15, 'PB'),
(2578, 'Assunção', 15, 'PB'),
(2579, 'Baía da Traição', 15, 'PB'),
(2580, 'Bananeiras', 15, 'PB'),
(2581, 'Baraúna', 15, 'PB'),
(2582, 'Barra de Santa Rosa', 15, 'PB'),
(2583, 'Barra de Santana', 15, 'PB'),
(2584, 'Barra de São Miguel', 15, 'PB'),
(2585, 'Bayeux', 15, 'PB'),
(2586, 'Belém', 15, 'PB'),
(2587, 'Belém do Brejo do Cruz', 15, 'PB'),
(2588, 'Bernardino Batista', 15, 'PB'),
(2589, 'Boa Ventura', 15, 'PB'),
(2590, 'Boa Vista', 15, 'PB'),
(2591, 'Bom Jesus', 15, 'PB'),
(2592, 'Bom Sucesso', 15, 'PB'),
(2593, 'Bonito de Santa Fé', 15, 'PB'),
(2594, 'Boqueirão', 15, 'PB'),
(2595, 'Borborema', 15, 'PB'),
(2596, 'Brejo do Cruz', 15, 'PB'),
(2597, 'Brejo dos Santos', 15, 'PB'),
(2598, 'Caaporã', 15, 'PB'),
(2599, 'Cabaceiras', 15, 'PB'),
(2600, 'Cabedelo', 15, 'PB'),
(2601, 'Cachoeira dos Índios', 15, 'PB'),
(2602, 'Cacimba de Areia', 15, 'PB'),
(2603, 'Cacimba de Dentro', 15, 'PB'),
(2604, 'Cacimbas', 15, 'PB'),
(2605, 'Caiçara', 15, 'PB'),
(2606, 'Cajazeiras', 15, 'PB'),
(2607, 'Cajazeirinhas', 15, 'PB'),
(2608, 'Caldas Brandão', 15, 'PB'),
(2609, 'Camalaú', 15, 'PB'),
(2610, 'Campina Grande', 15, 'PB'),
(2611, 'Campo de Santana', 15, 'PB'),
(2612, 'Capim', 15, 'PB'),
(2613, 'Caraúbas', 15, 'PB'),
(2614, 'Carrapateira', 15, 'PB'),
(2615, 'Casserengue', 15, 'PB'),
(2616, 'Catingueira', 15, 'PB'),
(2617, 'Catolé do Rocha', 15, 'PB'),
(2618, 'Caturité', 15, 'PB'),
(2619, 'Conceição', 15, 'PB'),
(2620, 'Condado', 15, 'PB'),
(2621, 'Conde', 15, 'PB'),
(2622, 'Congo', 15, 'PB'),
(2623, 'Coremas', 15, 'PB'),
(2624, 'Coxixola', 15, 'PB'),
(2625, 'Cruz do Espírito Santo', 15, 'PB'),
(2626, 'Cubati', 15, 'PB'),
(2627, 'Cuité', 15, 'PB'),
(2628, 'Cuité de Mamanguape', 15, 'PB'),
(2629, 'Cuitegi', 15, 'PB'),
(2630, 'Curral de Cima', 15, 'PB'),
(2631, 'Curral Velho', 15, 'PB'),
(2632, 'Damião', 15, 'PB'),
(2633, 'Desterro', 15, 'PB'),
(2634, 'Diamante', 15, 'PB'),
(2635, 'Dona Inês', 15, 'PB'),
(2636, 'Duas Estradas', 15, 'PB'),
(2637, 'Emas', 15, 'PB'),
(2638, 'Esperança', 15, 'PB'),
(2639, 'Fagundes', 15, 'PB'),
(2640, 'Frei Martinho', 15, 'PB'),
(2641, 'Gado Bravo', 15, 'PB'),
(2642, 'Guarabira', 15, 'PB'),
(2643, 'Gurinhém', 15, 'PB'),
(2644, 'Gurjão', 15, 'PB'),
(2645, 'Ibiara', 15, 'PB'),
(2646, 'Igaracy', 15, 'PB'),
(2647, 'Imaculada', 15, 'PB'),
(2648, 'Ingá', 15, 'PB'),
(2649, 'Itabaiana', 15, 'PB'),
(2650, 'Itaporanga', 15, 'PB'),
(2651, 'Itapororoca', 15, 'PB'),
(2652, 'Itatuba', 15, 'PB'),
(2653, 'Jacaraú', 15, 'PB'),
(2654, 'Jericó', 15, 'PB'),
(2655, 'João Pessoa', 15, 'PB'),
(2656, 'Juarez Távora', 15, 'PB'),
(2657, 'Juazeirinho', 15, 'PB'),
(2658, 'Junco do Seridó', 15, 'PB'),
(2659, 'Juripiranga', 15, 'PB'),
(2660, 'Juru', 15, 'PB'),
(2661, 'Lagoa', 15, 'PB'),
(2662, 'Lagoa de Dentro', 15, 'PB'),
(2663, 'Lagoa Seca', 15, 'PB'),
(2664, 'Lastro', 15, 'PB'),
(2665, 'Livramento', 15, 'PB'),
(2666, 'Logradouro', 15, 'PB'),
(2667, 'Lucena', 15, 'PB'),
(2668, 'Mãe d`Água', 15, 'PB'),
(2669, 'Malta', 15, 'PB'),
(2670, 'Mamanguape', 15, 'PB'),
(2671, 'Manaíra', 15, 'PB'),
(2672, 'Marcação', 15, 'PB'),
(2673, 'Mari', 15, 'PB'),
(2674, 'Marizópolis', 15, 'PB'),
(2675, 'Massaranduba', 15, 'PB'),
(2676, 'Mataraca', 15, 'PB'),
(2677, 'Matinhas', 15, 'PB'),
(2678, 'Mato Grosso', 15, 'PB'),
(2679, 'Maturéia', 15, 'PB'),
(2680, 'Mogeiro', 15, 'PB'),
(2681, 'Montadas', 15, 'PB'),
(2682, 'Monte Horebe', 15, 'PB'),
(2683, 'Monteiro', 15, 'PB'),
(2684, 'Mulungu', 15, 'PB'),
(2685, 'Natuba', 15, 'PB'),
(2686, 'Nazarezinho', 15, 'PB'),
(2687, 'Nova Floresta', 15, 'PB'),
(2688, 'Nova Olinda', 15, 'PB'),
(2689, 'Nova Palmeira', 15, 'PB'),
(2690, 'Olho d`Água', 15, 'PB'),
(2691, 'Olivedos', 15, 'PB'),
(2692, 'Ouro Velho', 15, 'PB'),
(2693, 'Parari', 15, 'PB'),
(2694, 'Passagem', 15, 'PB'),
(2695, 'Patos', 15, 'PB'),
(2696, 'Paulista', 15, 'PB'),
(2697, 'Pedra Branca', 15, 'PB'),
(2698, 'Pedra Lavrada', 15, 'PB'),
(2699, 'Pedras de Fogo', 15, 'PB'),
(2700, 'Pedro Régis', 15, 'PB'),
(2701, 'Piancó', 15, 'PB'),
(2702, 'Picuí', 15, 'PB'),
(2703, 'Pilar', 15, 'PB'),
(2704, 'Pilões', 15, 'PB'),
(2705, 'Pilõezinhos', 15, 'PB'),
(2706, 'Pirpirituba', 15, 'PB'),
(2707, 'Pitimbu', 15, 'PB'),
(2708, 'Pocinhos', 15, 'PB'),
(2709, 'Poço Dantas', 15, 'PB'),
(2710, 'Poço de José de Moura', 15, 'PB'),
(2711, 'Pombal', 15, 'PB'),
(2712, 'Prata', 15, 'PB'),
(2713, 'Princesa Isabel', 15, 'PB'),
(2714, 'Puxinanã', 15, 'PB'),
(2715, 'Queimadas', 15, 'PB'),
(2716, 'Quixabá', 15, 'PB'),
(2717, 'Remígio', 15, 'PB'),
(2718, 'Riachão', 15, 'PB'),
(2719, 'Riachão do Bacamarte', 15, 'PB'),
(2720, 'Riachão do Poço', 15, 'PB'),
(2721, 'Riacho de Santo Antônio', 15, 'PB'),
(2722, 'Riacho dos Cavalos', 15, 'PB'),
(2723, 'Rio Tinto', 15, 'PB'),
(2724, 'Salgadinho', 15, 'PB'),
(2725, 'Salgado de São Félix', 15, 'PB'),
(2726, 'Santa Cecília', 15, 'PB'),
(2727, 'Santa Cruz', 15, 'PB'),
(2728, 'Santa Helena', 15, 'PB'),
(2729, 'Santa Inês', 15, 'PB'),
(2730, 'Santa Luzia', 15, 'PB'),
(2731, 'Santa Rita', 15, 'PB'),
(2732, 'Santa Teresinha', 15, 'PB'),
(2733, 'Santana de Mangueira', 15, 'PB'),
(2734, 'Santana dos Garrotes', 15, 'PB'),
(2735, 'Santarém', 15, 'PB'),
(2736, 'Santo André', 15, 'PB'),
(2737, 'São Bentinho', 15, 'PB'),
(2738, 'São Bento', 15, 'PB'),
(2739, 'São Domingos de Pombal', 15, 'PB'),
(2740, 'São Domingos do Cariri', 15, 'PB'),
(2741, 'São Francisco', 15, 'PB'),
(2742, 'São João do Cariri', 15, 'PB'),
(2743, 'São João do Rio do Peixe', 15, 'PB'),
(2744, 'São João do Tigre', 15, 'PB'),
(2745, 'São José da Lagoa Tapada', 15, 'PB'),
(2746, 'São José de Caiana', 15, 'PB'),
(2747, 'São José de Espinharas', 15, 'PB'),
(2748, 'São José de Piranhas', 15, 'PB'),
(2749, 'São José de Princesa', 15, 'PB'),
(2750, 'São José do Bonfim', 15, 'PB'),
(2751, 'São José do Brejo do Cruz', 15, 'PB'),
(2752, 'São José do Sabugi', 15, 'PB'),
(2753, 'São José dos Cordeiros', 15, 'PB'),
(2754, 'São José dos Ramos', 15, 'PB'),
(2755, 'São Mamede', 15, 'PB'),
(2756, 'São Miguel de Taipu', 15, 'PB'),
(2757, 'São Sebastião de Lagoa de Roça', 15, 'PB'),
(2758, 'São Sebastião do Umbuzeiro', 15, 'PB'),
(2759, 'Sapé', 15, 'PB'),
(2760, 'Seridó', 15, 'PB'),
(2761, 'Serra Branca', 15, 'PB'),
(2762, 'Serra da Raiz', 15, 'PB'),
(2763, 'Serra Grande', 15, 'PB'),
(2764, 'Serra Redonda', 15, 'PB'),
(2765, 'Serraria', 15, 'PB'),
(2766, 'Sertãozinho', 15, 'PB'),
(2767, 'Sobrado', 15, 'PB'),
(2768, 'Solânea', 15, 'PB'),
(2769, 'Soledade', 15, 'PB'),
(2770, 'Sossêgo', 15, 'PB'),
(2771, 'Sousa', 15, 'PB'),
(2772, 'Sumé', 15, 'PB'),
(2773, 'Taperoá', 15, 'PB'),
(2774, 'Tavares', 15, 'PB'),
(2775, 'Teixeira', 15, 'PB'),
(2776, 'Tenório', 15, 'PB'),
(2777, 'Triunfo', 15, 'PB'),
(2778, 'Uiraúna', 15, 'PB'),
(2779, 'Umbuzeiro', 15, 'PB'),
(2780, 'Várzea', 15, 'PB'),
(2781, 'Vieirópolis', 15, 'PB'),
(2782, 'Vista Serrana', 15, 'PB'),
(2783, 'Zabelê', 15, 'PB'),
(2784, 'Abatiá', 18, 'PR'),
(2785, 'Adrianópolis', 18, 'PR'),
(2786, 'Agudos do Sul', 18, 'PR'),
(2787, 'Almirante Tamandaré', 18, 'PR'),
(2788, 'Altamira do Paraná', 18, 'PR'),
(2789, 'Alto Paraíso', 18, 'PR'),
(2790, 'Alto Paraná', 18, 'PR'),
(2791, 'Alto Piquiri', 18, 'PR'),
(2792, 'Altônia', 18, 'PR'),
(2793, 'Alvorada do Sul', 18, 'PR'),
(2794, 'Amaporã', 18, 'PR'),
(2795, 'Ampére', 18, 'PR'),
(2796, 'Anahy', 18, 'PR'),
(2797, 'Andirá', 18, 'PR'),
(2798, 'Ângulo', 18, 'PR'),
(2799, 'Antonina', 18, 'PR'),
(2800, 'Antônio Olinto', 18, 'PR'),
(2801, 'Apucarana', 18, 'PR'),
(2802, 'Arapongas', 18, 'PR'),
(2803, 'Arapoti', 18, 'PR'),
(2804, 'Arapuã', 18, 'PR'),
(2805, 'Araruna', 18, 'PR'),
(2806, 'Araucária', 18, 'PR'),
(2807, 'Ariranha do Ivaí', 18, 'PR'),
(2808, 'Assaí', 18, 'PR'),
(2809, 'Assis Chateaubriand', 18, 'PR'),
(2810, 'Astorga', 18, 'PR'),
(2811, 'Atalaia', 18, 'PR'),
(2812, 'Balsa Nova', 18, 'PR'),
(2813, 'Bandeirantes', 18, 'PR'),
(2814, 'Barbosa Ferraz', 18, 'PR'),
(2815, 'Barra do Jacaré', 18, 'PR'),
(2816, 'Barracão', 18, 'PR'),
(2817, 'Bela Vista da Caroba', 18, 'PR'),
(2818, 'Bela Vista do Paraíso', 18, 'PR'),
(2819, 'Bituruna', 18, 'PR'),
(2820, 'Boa Esperança', 18, 'PR'),
(2821, 'Boa Esperança do Iguaçu', 18, 'PR'),
(2822, 'Boa Ventura de São Roque', 18, 'PR'),
(2823, 'Boa Vista da Aparecida', 18, 'PR'),
(2824, 'Bocaiúva do Sul', 18, 'PR'),
(2825, 'Bom Jesus do Sul', 18, 'PR'),
(2826, 'Bom Sucesso', 18, 'PR'),
(2827, 'Bom Sucesso do Sul', 18, 'PR'),
(2828, 'Borrazópolis', 18, 'PR'),
(2829, 'Braganey', 18, 'PR'),
(2830, 'Brasilândia do Sul', 18, 'PR'),
(2831, 'Cafeara', 18, 'PR'),
(2832, 'Cafelândia', 18, 'PR'),
(2833, 'Cafezal do Sul', 18, 'PR'),
(2834, 'Califórnia', 18, 'PR'),
(2835, 'Cambará', 18, 'PR'),
(2836, 'Cambé', 18, 'PR'),
(2837, 'Cambira', 18, 'PR'),
(2838, 'Campina da Lagoa', 18, 'PR'),
(2839, 'Campina do Simão', 18, 'PR'),
(2840, 'Campina Grande do Sul', 18, 'PR'),
(2841, 'Campo Bonito', 18, 'PR'),
(2842, 'Campo do Tenente', 18, 'PR'),
(2843, 'Campo Largo', 18, 'PR'),
(2844, 'Campo Magro', 18, 'PR'),
(2845, 'Campo Mourão', 18, 'PR'),
(2846, 'Cândido de Abreu', 18, 'PR'),
(2847, 'Candói', 18, 'PR'),
(2848, 'Cantagalo', 18, 'PR'),
(2849, 'Capanema', 18, 'PR'),
(2850, 'Capitão Leônidas Marques', 18, 'PR'),
(2851, 'Carambeí', 18, 'PR'),
(2852, 'Carlópolis', 18, 'PR'),
(2853, 'Cascavel', 18, 'PR'),
(2854, 'Castro', 18, 'PR'),
(2855, 'Catanduvas', 18, 'PR'),
(2856, 'Centenário do Sul', 18, 'PR'),
(2857, 'Cerro Azul', 18, 'PR'),
(2858, 'Céu Azul', 18, 'PR'),
(2859, 'Chopinzinho', 18, 'PR'),
(2860, 'Cianorte', 18, 'PR'),
(2861, 'Cidade Gaúcha', 18, 'PR'),
(2862, 'Clevelândia', 18, 'PR'),
(2863, 'Colombo', 18, 'PR'),
(2864, 'Colorado', 18, 'PR'),
(2865, 'Congonhinhas', 18, 'PR'),
(2866, 'Conselheiro Mairinck', 18, 'PR'),
(2867, 'Contenda', 18, 'PR'),
(2868, 'Corbélia', 18, 'PR'),
(2869, 'Cornélio Procópio', 18, 'PR'),
(2870, 'Coronel Domingos Soares', 18, 'PR'),
(2871, 'Coronel Vivida', 18, 'PR'),
(2872, 'Corumbataí do Sul', 18, 'PR'),
(2873, 'Cruz Machado', 18, 'PR'),
(2874, 'Cruzeiro do Iguaçu', 18, 'PR'),
(2875, 'Cruzeiro do Oeste', 18, 'PR'),
(2876, 'Cruzeiro do Sul', 18, 'PR'),
(2877, 'Cruzmaltina', 18, 'PR'),
(2878, 'Curitiba', 18, 'PR'),
(2879, 'Curiúva', 18, 'PR'),
(2880, 'Diamante d`Oeste', 18, 'PR'),
(2881, 'Diamante do Norte', 18, 'PR'),
(2882, 'Diamante do Sul', 18, 'PR'),
(2883, 'Dois Vizinhos', 18, 'PR'),
(2884, 'Douradina', 18, 'PR'),
(2885, 'Doutor Camargo', 18, 'PR'),
(2886, 'Doutor Ulysses', 18, 'PR'),
(2887, 'Enéas Marques', 18, 'PR'),
(2888, 'Engenheiro Beltrão', 18, 'PR'),
(2889, 'Entre Rios do Oeste', 18, 'PR'),
(2890, 'Esperança Nova', 18, 'PR'),
(2891, 'Espigão Alto do Iguaçu', 18, 'PR'),
(2892, 'Farol', 18, 'PR'),
(2893, 'Faxinal', 18, 'PR'),
(2894, 'Fazenda Rio Grande', 18, 'PR'),
(2895, 'Fênix', 18, 'PR'),
(2896, 'Fernandes Pinheiro', 18, 'PR'),
(2897, 'Figueira', 18, 'PR'),
(2898, 'Flor da Serra do Sul', 18, 'PR'),
(2899, 'Floraí', 18, 'PR'),
(2900, 'Floresta', 18, 'PR'),
(2901, 'Florestópolis', 18, 'PR'),
(2902, 'Flórida', 18, 'PR'),
(2903, 'Formosa do Oeste', 18, 'PR'),
(2904, 'Foz do Iguaçu', 18, 'PR'),
(2905, 'Foz do Jordão', 18, 'PR'),
(2906, 'Francisco Alves', 18, 'PR'),
(2907, 'Francisco Beltrão', 18, 'PR'),
(2908, 'General Carneiro', 18, 'PR'),
(2909, 'Godoy Moreira', 18, 'PR'),
(2910, 'Goioerê', 18, 'PR'),
(2911, 'Goioxim', 18, 'PR'),
(2912, 'Grandes Rios', 18, 'PR'),
(2913, 'Guaíra', 18, 'PR'),
(2914, 'Guairaçá', 18, 'PR'),
(2915, 'Guamiranga', 18, 'PR'),
(2916, 'Guapirama', 18, 'PR'),
(2917, 'Guaporema', 18, 'PR'),
(2918, 'Guaraci', 18, 'PR'),
(2919, 'Guaraniaçu', 18, 'PR'),
(2920, 'Guarapuava', 18, 'PR'),
(2921, 'Guaraqueçaba', 18, 'PR'),
(2922, 'Guaratuba', 18, 'PR'),
(2923, 'Honório Serpa', 18, 'PR'),
(2924, 'Ibaiti', 18, 'PR'),
(2925, 'Ibema', 18, 'PR'),
(2926, 'Ibiporã', 18, 'PR'),
(2927, 'Icaraíma', 18, 'PR'),
(2928, 'Iguaraçu', 18, 'PR'),
(2929, 'Iguatu', 18, 'PR'),
(2930, 'Imbaú', 18, 'PR'),
(2931, 'Imbituva', 18, 'PR'),
(2932, 'Inácio Martins', 18, 'PR'),
(2933, 'Inajá', 18, 'PR'),
(2934, 'Indianópolis', 18, 'PR'),
(2935, 'Ipiranga', 18, 'PR'),
(2936, 'Iporã', 18, 'PR'),
(2937, 'Iracema do Oeste', 18, 'PR'),
(2938, 'Irati', 18, 'PR'),
(2939, 'Iretama', 18, 'PR'),
(2940, 'Itaguajé', 18, 'PR'),
(2941, 'Itaipulândia', 18, 'PR'),
(2942, 'Itambaracá', 18, 'PR'),
(2943, 'Itambé', 18, 'PR'),
(2944, 'Itapejara d`Oeste', 18, 'PR'),
(2945, 'Itaperuçu', 18, 'PR'),
(2946, 'Itaúna do Sul', 18, 'PR'),
(2947, 'Ivaí', 18, 'PR'),
(2948, 'Ivaiporã', 18, 'PR'),
(2949, 'Ivaté', 18, 'PR'),
(2950, 'Ivatuba', 18, 'PR'),
(2951, 'Jaboti', 18, 'PR'),
(2952, 'Jacarezinho', 18, 'PR'),
(2953, 'Jaguapitã', 18, 'PR'),
(2954, 'Jaguariaíva', 18, 'PR'),
(2955, 'Jandaia do Sul', 18, 'PR'),
(2956, 'Janiópolis', 18, 'PR'),
(2957, 'Japira', 18, 'PR'),
(2958, 'Japurá', 18, 'PR'),
(2959, 'Jardim Alegre', 18, 'PR'),
(2960, 'Jardim Olinda', 18, 'PR'),
(2961, 'Jataizinho', 18, 'PR'),
(2962, 'Jesuítas', 18, 'PR'),
(2963, 'Joaquim Távora', 18, 'PR'),
(2964, 'Jundiaí do Sul', 18, 'PR'),
(2965, 'Juranda', 18, 'PR'),
(2966, 'Jussara', 18, 'PR'),
(2967, 'Kaloré', 18, 'PR'),
(2968, 'Lapa', 18, 'PR'),
(2969, 'Laranjal', 18, 'PR'),
(2970, 'Laranjeiras do Sul', 18, 'PR'),
(2971, 'Leópolis', 18, 'PR'),
(2972, 'Lidianópolis', 18, 'PR'),
(2973, 'Lindoeste', 18, 'PR'),
(2974, 'Loanda', 18, 'PR'),
(2975, 'Lobato', 18, 'PR'),
(2976, 'Londrina', 18, 'PR'),
(2977, 'Luiziana', 18, 'PR'),
(2978, 'Lunardelli', 18, 'PR'),
(2979, 'Lupionópolis', 18, 'PR'),
(2980, 'Mallet', 18, 'PR'),
(2981, 'Mamborê', 18, 'PR'),
(2982, 'Mandaguaçu', 18, 'PR'),
(2983, 'Mandaguari', 18, 'PR'),
(2984, 'Mandirituba', 18, 'PR'),
(2985, 'Manfrinópolis', 18, 'PR'),
(2986, 'Mangueirinha', 18, 'PR'),
(2987, 'Manoel Ribas', 18, 'PR'),
(2988, 'Marechal Cândido Rondon', 18, 'PR'),
(2989, 'Maria Helena', 18, 'PR'),
(2990, 'Marialva', 18, 'PR'),
(2991, 'Marilândia do Sul', 18, 'PR'),
(2992, 'Marilena', 18, 'PR'),
(2993, 'Mariluz', 18, 'PR'),
(2994, 'Maringá', 18, 'PR'),
(2995, 'Mariópolis', 18, 'PR'),
(2996, 'Maripá', 18, 'PR'),
(2997, 'Marmeleiro', 18, 'PR'),
(2998, 'Marquinho', 18, 'PR'),
(2999, 'Marumbi', 18, 'PR'),
(3000, 'Matelândia', 18, 'PR'),
(3001, 'Matinhos', 18, 'PR'),
(3002, 'Mato Rico', 18, 'PR'),
(3003, 'Mauá da Serra', 18, 'PR'),
(3004, 'Medianeira', 18, 'PR'),
(3005, 'Mercedes', 18, 'PR'),
(3006, 'Mirador', 18, 'PR'),
(3007, 'Miraselva', 18, 'PR'),
(3008, 'Missal', 18, 'PR'),
(3009, 'Moreira Sales', 18, 'PR'),
(3010, 'Morretes', 18, 'PR'),
(3011, 'Munhoz de Melo', 18, 'PR'),
(3012, 'Nossa Senhora das Graças', 18, 'PR'),
(3013, 'Nova Aliança do Ivaí', 18, 'PR'),
(3014, 'Nova América da Colina', 18, 'PR'),
(3015, 'Nova Aurora', 18, 'PR'),
(3016, 'Nova Cantu', 18, 'PR'),
(3017, 'Nova Esperança', 18, 'PR'),
(3018, 'Nova Esperança do Sudoeste', 18, 'PR'),
(3019, 'Nova Fátima', 18, 'PR'),
(3020, 'Nova Laranjeiras', 18, 'PR'),
(3021, 'Nova Londrina', 18, 'PR'),
(3022, 'Nova Olímpia', 18, 'PR'),
(3023, 'Nova Prata do Iguaçu', 18, 'PR'),
(3024, 'Nova Santa Bárbara', 18, 'PR'),
(3025, 'Nova Santa Rosa', 18, 'PR'),
(3026, 'Nova Tebas', 18, 'PR'),
(3027, 'Novo Itacolomi', 18, 'PR'),
(3028, 'Ortigueira', 18, 'PR'),
(3029, 'Ourizona', 18, 'PR'),
(3030, 'Ouro Verde do Oeste', 18, 'PR'),
(3031, 'Paiçandu', 18, 'PR'),
(3032, 'Palmas', 18, 'PR'),
(3033, 'Palmeira', 18, 'PR'),
(3034, 'Palmital', 18, 'PR'),
(3035, 'Palotina', 18, 'PR'),
(3036, 'Paraíso do Norte', 18, 'PR'),
(3037, 'Paranacity', 18, 'PR'),
(3038, 'Paranaguá', 18, 'PR'),
(3039, 'Paranapoema', 18, 'PR'),
(3040, 'Paranavaí', 18, 'PR'),
(3041, 'Pato Bragado', 18, 'PR'),
(3042, 'Pato Branco', 18, 'PR'),
(3043, 'Paula Freitas', 18, 'PR'),
(3044, 'Paulo Frontin', 18, 'PR'),
(3045, 'Peabiru', 18, 'PR'),
(3046, 'Perobal', 18, 'PR'),
(3047, 'Pérola', 18, 'PR'),
(3048, 'Pérola d`Oeste', 18, 'PR'),
(3049, 'Piên', 18, 'PR'),
(3050, 'Pinhais', 18, 'PR'),
(3051, 'Pinhal de São Bento', 18, 'PR'),
(3052, 'Pinhalão', 18, 'PR'),
(3053, 'Pinhão', 18, 'PR'),
(3054, 'Piraí do Sul', 18, 'PR'),
(3055, 'Piraquara', 18, 'PR'),
(3056, 'Pitanga', 18, 'PR'),
(3057, 'Pitangueiras', 18, 'PR'),
(3058, 'Planaltina do Paraná', 18, 'PR'),
(3059, 'Planalto', 18, 'PR'),
(3060, 'Ponta Grossa', 18, 'PR'),
(3061, 'Pontal do Paraná', 18, 'PR'),
(3062, 'Porecatu', 18, 'PR'),
(3063, 'Porto Amazonas', 18, 'PR'),
(3064, 'Porto Barreiro', 18, 'PR'),
(3065, 'Porto Rico', 18, 'PR'),
(3066, 'Porto Vitória', 18, 'PR'),
(3067, 'Prado Ferreira', 18, 'PR'),
(3068, 'Pranchita', 18, 'PR'),
(3069, 'Presidente Castelo Branco', 18, 'PR'),
(3070, 'Primeiro de Maio', 18, 'PR'),
(3071, 'Prudentópolis', 18, 'PR'),
(3072, 'Quarto Centenário', 18, 'PR'),
(3073, 'Quatiguá', 18, 'PR'),
(3074, 'Quatro Barras', 18, 'PR'),
(3075, 'Quatro Pontes', 18, 'PR'),
(3076, 'Quedas do Iguaçu', 18, 'PR'),
(3077, 'Querência do Norte', 18, 'PR'),
(3078, 'Quinta do Sol', 18, 'PR'),
(3079, 'Quitandinha', 18, 'PR'),
(3080, 'Ramilândia', 18, 'PR'),
(3081, 'Rancho Alegre', 18, 'PR'),
(3082, 'Rancho Alegre d`Oeste', 18, 'PR'),
(3083, 'Realeza', 18, 'PR'),
(3084, 'Rebouças', 18, 'PR'),
(3085, 'Renascença', 18, 'PR'),
(3086, 'Reserva', 18, 'PR'),
(3087, 'Reserva do Iguaçu', 18, 'PR'),
(3088, 'Ribeirão Claro', 18, 'PR'),
(3089, 'Ribeirão do Pinhal', 18, 'PR'),
(3090, 'Rio Azul', 18, 'PR'),
(3091, 'Rio Bom', 18, 'PR'),
(3092, 'Rio Bonito do Iguaçu', 18, 'PR'),
(3093, 'Rio Branco do Ivaí', 18, 'PR'),
(3094, 'Rio Branco do Sul', 18, 'PR'),
(3095, 'Rio Negro', 18, 'PR'),
(3096, 'Rolândia', 18, 'PR'),
(3097, 'Roncador', 18, 'PR'),
(3098, 'Rondon', 18, 'PR'),
(3099, 'Rosário do Ivaí', 18, 'PR'),
(3100, 'Sabáudia', 18, 'PR'),
(3101, 'Salgado Filho', 18, 'PR'),
(3102, 'Salto do Itararé', 18, 'PR'),
(3103, 'Salto do Lontra', 18, 'PR'),
(3104, 'Santa Amélia', 18, 'PR'),
(3105, 'Santa Cecília do Pavão', 18, 'PR'),
(3106, 'Santa Cruz de Monte Castelo', 18, 'PR'),
(3107, 'Santa Fé', 18, 'PR'),
(3108, 'Santa Helena', 18, 'PR'),
(3109, 'Santa Inês', 18, 'PR'),
(3110, 'Santa Isabel do Ivaí', 18, 'PR'),
(3111, 'Santa Izabel do Oeste', 18, 'PR'),
(3112, 'Santa Lúcia', 18, 'PR'),
(3113, 'Santa Maria do Oeste', 18, 'PR'),
(3114, 'Santa Mariana', 18, 'PR'),
(3115, 'Santa Mônica', 18, 'PR'),
(3116, 'Santa Tereza do Oeste', 18, 'PR'),
(3117, 'Santa Terezinha de Itaipu', 18, 'PR'),
(3118, 'Santana do Itararé', 18, 'PR'),
(3119, 'Santo Antônio da Platina', 18, 'PR'),
(3120, 'Santo Antônio do Caiuá', 18, 'PR'),
(3121, 'Santo Antônio do Paraíso', 18, 'PR'),
(3122, 'Santo Antônio do Sudoeste', 18, 'PR'),
(3123, 'Santo Inácio', 18, 'PR'),
(3124, 'São Carlos do Ivaí', 18, 'PR'),
(3125, 'São Jerônimo da Serra', 18, 'PR'),
(3126, 'São João', 18, 'PR'),
(3127, 'São João do Caiuá', 18, 'PR'),
(3128, 'São João do Ivaí', 18, 'PR'),
(3129, 'São João do Triunfo', 18, 'PR'),
(3130, 'São Jorge d`Oeste', 18, 'PR'),
(3131, 'São Jorge do Ivaí', 18, 'PR'),
(3132, 'São Jorge do Patrocínio', 18, 'PR'),
(3133, 'São José da Boa Vista', 18, 'PR'),
(3134, 'São José das Palmeiras', 18, 'PR'),
(3135, 'São José dos Pinhais', 18, 'PR'),
(3136, 'São Manoel do Paraná', 18, 'PR'),
(3137, 'São Mateus do Sul', 18, 'PR'),
(3138, 'São Miguel do Iguaçu', 18, 'PR'),
(3139, 'São Pedro do Iguaçu', 18, 'PR'),
(3140, 'São Pedro do Ivaí', 18, 'PR'),
(3141, 'São Pedro do Paraná', 18, 'PR'),
(3142, 'São Sebastião da Amoreira', 18, 'PR'),
(3143, 'São Tomé', 18, 'PR'),
(3144, 'Sapopema', 18, 'PR'),
(3145, 'Sarandi', 18, 'PR'),
(3146, 'Saudade do Iguaçu', 18, 'PR'),
(3147, 'Sengés', 18, 'PR'),
(3148, 'Serranópolis do Iguaçu', 18, 'PR'),
(3149, 'Sertaneja', 18, 'PR'),
(3150, 'Sertanópolis', 18, 'PR'),
(3151, 'Siqueira Campos', 18, 'PR'),
(3152, 'Sulina', 18, 'PR'),
(3153, 'Tamarana', 18, 'PR'),
(3154, 'Tamboara', 18, 'PR'),
(3155, 'Tapejara', 18, 'PR'),
(3156, 'Tapira', 18, 'PR'),
(3157, 'Teixeira Soares', 18, 'PR'),
(3158, 'Telêmaco Borba', 18, 'PR'),
(3159, 'Terra Boa', 18, 'PR'),
(3160, 'Terra Rica', 18, 'PR'),
(3161, 'Terra Roxa', 18, 'PR'),
(3162, 'Tibagi', 18, 'PR'),
(3163, 'Tijucas do Sul', 18, 'PR'),
(3164, 'Toledo', 18, 'PR'),
(3165, 'Tomazina', 18, 'PR'),
(3166, 'Três Barras do Paraná', 18, 'PR'),
(3167, 'Tunas do Paraná', 18, 'PR'),
(3168, 'Tuneiras do Oeste', 18, 'PR'),
(3169, 'Tupãssi', 18, 'PR'),
(3170, 'Turvo', 18, 'PR'),
(3171, 'Ubiratã', 18, 'PR'),
(3172, 'Umuarama', 18, 'PR'),
(3173, 'União da Vitória', 18, 'PR'),
(3174, 'Uniflor', 18, 'PR'),
(3175, 'Uraí', 18, 'PR'),
(3176, 'Ventania', 18, 'PR'),
(3177, 'Vera Cruz do Oeste', 18, 'PR'),
(3178, 'Verê', 18, 'PR'),
(3179, 'Virmond', 18, 'PR'),
(3180, 'Vitorino', 18, 'PR'),
(3181, 'Wenceslau Braz', 18, 'PR'),
(3182, 'Xambrê', 18, 'PR'),
(3183, 'Abreu e Lima', 16, 'PE'),
(3184, 'Afogados da Ingazeira', 16, 'PE'),
(3185, 'Afrânio', 16, 'PE'),
(3186, 'Agrestina', 16, 'PE'),
(3187, 'Água Preta', 16, 'PE'),
(3188, 'Águas Belas', 16, 'PE'),
(3189, 'Alagoinha', 16, 'PE'),
(3190, 'Aliança', 16, 'PE'),
(3191, 'Altinho', 16, 'PE'),
(3192, 'Amaraji', 16, 'PE'),
(3193, 'Angelim', 16, 'PE'),
(3194, 'Araçoiaba', 16, 'PE'),
(3195, 'Araripina', 16, 'PE'),
(3196, 'Arcoverde', 16, 'PE'),
(3197, 'Barra de Guabiraba', 16, 'PE'),
(3198, 'Barreiros', 16, 'PE'),
(3199, 'Belém de Maria', 16, 'PE'),
(3200, 'Belém de São Francisco', 16, 'PE'),
(3201, 'Belo Jardim', 16, 'PE'),
(3202, 'Betânia', 16, 'PE'),
(3203, 'Bezerros', 16, 'PE'),
(3204, 'Bodocó', 16, 'PE'),
(3205, 'Bom Conselho', 16, 'PE'),
(3206, 'Bom Jardim', 16, 'PE'),
(3207, 'Bonito', 16, 'PE'),
(3208, 'Brejão', 16, 'PE'),
(3209, 'Brejinho', 16, 'PE'),
(3210, 'Brejo da Madre de Deus', 16, 'PE'),
(3211, 'Buenos Aires', 16, 'PE'),
(3212, 'Buíque', 16, 'PE'),
(3213, 'Cabo de Santo Agostinho', 16, 'PE'),
(3214, 'Cabrobó', 16, 'PE'),
(3215, 'Cachoeirinha', 16, 'PE'),
(3216, 'Caetés', 16, 'PE'),
(3217, 'Calçado', 16, 'PE'),
(3218, 'Calumbi', 16, 'PE'),
(3219, 'Camaragibe', 16, 'PE'),
(3220, 'Camocim de São Félix', 16, 'PE'),
(3221, 'Camutanga', 16, 'PE'),
(3222, 'Canhotinho', 16, 'PE'),
(3223, 'Capoeiras', 16, 'PE'),
(3224, 'Carnaíba', 16, 'PE'),
(3225, 'Carnaubeira da Penha', 16, 'PE'),
(3226, 'Carpina', 16, 'PE'),
(3227, 'Caruaru', 16, 'PE'),
(3228, 'Casinhas', 16, 'PE'),
(3229, 'Catende', 16, 'PE'),
(3230, 'Cedro', 16, 'PE'),
(3231, 'Chã de Alegria', 16, 'PE'),
(3232, 'Chã Grande', 16, 'PE'),
(3233, 'Condado', 16, 'PE'),
(3234, 'Correntes', 16, 'PE'),
(3235, 'Cortês', 16, 'PE'),
(3236, 'Cumaru', 16, 'PE');
INSERT INTO `cidade` (`id`, `nome`, `estado`, `uf`) VALUES
(3237, 'Cupira', 16, 'PE'),
(3238, 'Custódia', 16, 'PE'),
(3239, 'Dormentes', 16, 'PE'),
(3240, 'Escada', 16, 'PE'),
(3241, 'Exu', 16, 'PE'),
(3242, 'Feira Nova', 16, 'PE'),
(3243, 'Fernando de Noronha', 16, 'PE'),
(3244, 'Ferreiros', 16, 'PE'),
(3245, 'Flores', 16, 'PE'),
(3246, 'Floresta', 16, 'PE'),
(3247, 'Frei Miguelinho', 16, 'PE'),
(3248, 'Gameleira', 16, 'PE'),
(3249, 'Garanhuns', 16, 'PE'),
(3250, 'Glória do Goitá', 16, 'PE'),
(3251, 'Goiana', 16, 'PE'),
(3252, 'Granito', 16, 'PE'),
(3253, 'Gravatá', 16, 'PE'),
(3254, 'Iati', 16, 'PE'),
(3255, 'Ibimirim', 16, 'PE'),
(3256, 'Ibirajuba', 16, 'PE'),
(3257, 'Igarassu', 16, 'PE'),
(3258, 'Iguaraci', 16, 'PE'),
(3259, 'Ilha de Itamaracá', 16, 'PE'),
(3260, 'Inajá', 16, 'PE'),
(3261, 'Ingazeira', 16, 'PE'),
(3262, 'Ipojuca', 16, 'PE'),
(3263, 'Ipubi', 16, 'PE'),
(3264, 'Itacuruba', 16, 'PE'),
(3265, 'Itaíba', 16, 'PE'),
(3266, 'Itambé', 16, 'PE'),
(3267, 'Itapetim', 16, 'PE'),
(3268, 'Itapissuma', 16, 'PE'),
(3269, 'Itaquitinga', 16, 'PE'),
(3270, 'Jaboatão dos Guararapes', 16, 'PE'),
(3271, 'Jaqueira', 16, 'PE'),
(3272, 'Jataúba', 16, 'PE'),
(3273, 'Jatobá', 16, 'PE'),
(3274, 'João Alfredo', 16, 'PE'),
(3275, 'Joaquim Nabuco', 16, 'PE'),
(3276, 'Jucati', 16, 'PE'),
(3277, 'Jupi', 16, 'PE'),
(3278, 'Jurema', 16, 'PE'),
(3279, 'Lagoa do Carro', 16, 'PE'),
(3280, 'Lagoa do Itaenga', 16, 'PE'),
(3281, 'Lagoa do Ouro', 16, 'PE'),
(3282, 'Lagoa dos Gatos', 16, 'PE'),
(3283, 'Lagoa Grande', 16, 'PE'),
(3284, 'Lajedo', 16, 'PE'),
(3285, 'Limoeiro', 16, 'PE'),
(3286, 'Macaparana', 16, 'PE'),
(3287, 'Machados', 16, 'PE'),
(3288, 'Manari', 16, 'PE'),
(3289, 'Maraial', 16, 'PE'),
(3290, 'Mirandiba', 16, 'PE'),
(3291, 'Moreilândia', 16, 'PE'),
(3292, 'Moreno', 16, 'PE'),
(3293, 'Nazaré da Mata', 16, 'PE'),
(3294, 'Olinda', 16, 'PE'),
(3295, 'Orobó', 16, 'PE'),
(3296, 'Orocó', 16, 'PE'),
(3297, 'Ouricuri', 16, 'PE'),
(3298, 'Palmares', 16, 'PE'),
(3299, 'Palmeirina', 16, 'PE'),
(3300, 'Panelas', 16, 'PE'),
(3301, 'Paranatama', 16, 'PE'),
(3302, 'Parnamirim', 16, 'PE'),
(3303, 'Passira', 16, 'PE'),
(3304, 'Paudalho', 16, 'PE'),
(3305, 'Paulista', 16, 'PE'),
(3306, 'Pedra', 16, 'PE'),
(3307, 'Pesqueira', 16, 'PE'),
(3308, 'Petrolândia', 16, 'PE'),
(3309, 'Petrolina', 16, 'PE'),
(3310, 'Poção', 16, 'PE'),
(3311, 'Pombos', 16, 'PE'),
(3312, 'Primavera', 16, 'PE'),
(3313, 'Quipapá', 16, 'PE'),
(3314, 'Quixaba', 16, 'PE'),
(3315, 'Recife', 16, 'PE'),
(3316, 'Riacho das Almas', 16, 'PE'),
(3317, 'Ribeirão', 16, 'PE'),
(3318, 'Rio Formoso', 16, 'PE'),
(3319, 'Sairé', 16, 'PE'),
(3320, 'Salgadinho', 16, 'PE'),
(3321, 'Salgueiro', 16, 'PE'),
(3322, 'Saloá', 16, 'PE'),
(3323, 'Sanharó', 16, 'PE'),
(3324, 'Santa Cruz', 16, 'PE'),
(3325, 'Santa Cruz da Baixa Verde', 16, 'PE'),
(3326, 'Santa Cruz do Capibaribe', 16, 'PE'),
(3327, 'Santa Filomena', 16, 'PE'),
(3328, 'Santa Maria da Boa Vista', 16, 'PE'),
(3329, 'Santa Maria do Cambucá', 16, 'PE'),
(3330, 'Santa Terezinha', 16, 'PE'),
(3331, 'São Benedito do Sul', 16, 'PE'),
(3332, 'São Bento do Una', 16, 'PE'),
(3333, 'São Caitano', 16, 'PE'),
(3334, 'São João', 16, 'PE'),
(3335, 'São Joaquim do Monte', 16, 'PE'),
(3336, 'São José da Coroa Grande', 16, 'PE'),
(3337, 'São José do Belmonte', 16, 'PE'),
(3338, 'São José do Egito', 16, 'PE'),
(3339, 'São Lourenço da Mata', 16, 'PE'),
(3340, 'São Vicente Ferrer', 16, 'PE'),
(3341, 'Serra Talhada', 16, 'PE'),
(3342, 'Serrita', 16, 'PE'),
(3343, 'Sertânia', 16, 'PE'),
(3344, 'Sirinhaém', 16, 'PE'),
(3345, 'Solidão', 16, 'PE'),
(3346, 'Surubim', 16, 'PE'),
(3347, 'Tabira', 16, 'PE'),
(3348, 'Tacaimbó', 16, 'PE'),
(3349, 'Tacaratu', 16, 'PE'),
(3350, 'Tamandaré', 16, 'PE'),
(3351, 'Taquaritinga do Norte', 16, 'PE'),
(3352, 'Terezinha', 16, 'PE'),
(3353, 'Terra Nova', 16, 'PE'),
(3354, 'Timbaúba', 16, 'PE'),
(3355, 'Toritama', 16, 'PE'),
(3356, 'Tracunhaém', 16, 'PE'),
(3357, 'Trindade', 16, 'PE'),
(3358, 'Triunfo', 16, 'PE'),
(3359, 'Tupanatinga', 16, 'PE'),
(3360, 'Tuparetama', 16, 'PE'),
(3361, 'Venturosa', 16, 'PE'),
(3362, 'Verdejante', 16, 'PE'),
(3363, 'Vertente do Lério', 16, 'PE'),
(3364, 'Vertentes', 16, 'PE'),
(3365, 'Vicência', 16, 'PE'),
(3366, 'Vitória de Santo Antão', 16, 'PE'),
(3367, 'Xexéu', 16, 'PE'),
(3368, 'Acauã', 17, 'PI'),
(3369, 'Agricolândia', 17, 'PI'),
(3370, 'Água Branca', 17, 'PI'),
(3371, 'Alagoinha do Piauí', 17, 'PI'),
(3372, 'Alegrete do Piauí', 17, 'PI'),
(3373, 'Alto Longá', 17, 'PI'),
(3374, 'Altos', 17, 'PI'),
(3375, 'Alvorada do Gurguéia', 17, 'PI'),
(3376, 'Amarante', 17, 'PI'),
(3377, 'Angical do Piauí', 17, 'PI'),
(3378, 'Anísio de Abreu', 17, 'PI'),
(3379, 'Antônio Almeida', 17, 'PI'),
(3380, 'Aroazes', 17, 'PI'),
(3381, 'Aroeiras do Itaim', 17, 'PI'),
(3382, 'Arraial', 17, 'PI'),
(3383, 'Assunção do Piauí', 17, 'PI'),
(3384, 'Avelino Lopes', 17, 'PI'),
(3385, 'Baixa Grande do Ribeiro', 17, 'PI'),
(3386, 'Barra d`Alcântara', 17, 'PI'),
(3387, 'Barras', 17, 'PI'),
(3388, 'Barreiras do Piauí', 17, 'PI'),
(3389, 'Barro Duro', 17, 'PI'),
(3390, 'Batalha', 17, 'PI'),
(3391, 'Bela Vista do Piauí', 17, 'PI'),
(3392, 'Belém do Piauí', 17, 'PI'),
(3393, 'Beneditinos', 17, 'PI'),
(3394, 'Bertolínia', 17, 'PI'),
(3395, 'Betânia do Piauí', 17, 'PI'),
(3396, 'Boa Hora', 17, 'PI'),
(3397, 'Bocaina', 17, 'PI'),
(3398, 'Bom Jesus', 17, 'PI'),
(3399, 'Bom Princípio do Piauí', 17, 'PI'),
(3400, 'Bonfim do Piauí', 17, 'PI'),
(3401, 'Boqueirão do Piauí', 17, 'PI'),
(3402, 'Brasileira', 17, 'PI'),
(3403, 'Brejo do Piauí', 17, 'PI'),
(3404, 'Buriti dos Lopes', 17, 'PI'),
(3405, 'Buriti dos Montes', 17, 'PI'),
(3406, 'Cabeceiras do Piauí', 17, 'PI'),
(3407, 'Cajazeiras do Piauí', 17, 'PI'),
(3408, 'Cajueiro da Praia', 17, 'PI'),
(3409, 'Caldeirão Grande do Piauí', 17, 'PI'),
(3410, 'Campinas do Piauí', 17, 'PI'),
(3411, 'Campo Alegre do Fidalgo', 17, 'PI'),
(3412, 'Campo Grande do Piauí', 17, 'PI'),
(3413, 'Campo Largo do Piauí', 17, 'PI'),
(3414, 'Campo Maior', 17, 'PI'),
(3415, 'Canavieira', 17, 'PI'),
(3416, 'Canto do Buriti', 17, 'PI'),
(3417, 'Capitão de Campos', 17, 'PI'),
(3418, 'Capitão Gervásio Oliveira', 17, 'PI'),
(3419, 'Caracol', 17, 'PI'),
(3420, 'Caraúbas do Piauí', 17, 'PI'),
(3421, 'Caridade do Piauí', 17, 'PI'),
(3422, 'Castelo do Piauí', 17, 'PI'),
(3423, 'Caxingó', 17, 'PI'),
(3424, 'Cocal', 17, 'PI'),
(3425, 'Cocal de Telha', 17, 'PI'),
(3426, 'Cocal dos Alves', 17, 'PI'),
(3427, 'Coivaras', 17, 'PI'),
(3428, 'Colônia do Gurguéia', 17, 'PI'),
(3429, 'Colônia do Piauí', 17, 'PI'),
(3430, 'Conceição do Canindé', 17, 'PI'),
(3431, 'Coronel José Dias', 17, 'PI'),
(3432, 'Corrente', 17, 'PI'),
(3433, 'Cristalândia do Piauí', 17, 'PI'),
(3434, 'Cristino Castro', 17, 'PI'),
(3435, 'Curimatá', 17, 'PI'),
(3436, 'Currais', 17, 'PI'),
(3437, 'Curral Novo do Piauí', 17, 'PI'),
(3438, 'Curralinhos', 17, 'PI'),
(3439, 'Demerval Lobão', 17, 'PI'),
(3440, 'Dirceu Arcoverde', 17, 'PI'),
(3441, 'Dom Expedito Lopes', 17, 'PI'),
(3442, 'Dom Inocêncio', 17, 'PI'),
(3443, 'Domingos Mourão', 17, 'PI'),
(3444, 'Elesbão Veloso', 17, 'PI'),
(3445, 'Eliseu Martins', 17, 'PI'),
(3446, 'Esperantina', 17, 'PI'),
(3447, 'Fartura do Piauí', 17, 'PI'),
(3448, 'Flores do Piauí', 17, 'PI'),
(3449, 'Floresta do Piauí', 17, 'PI'),
(3450, 'Floriano', 17, 'PI'),
(3451, 'Francinópolis', 17, 'PI'),
(3452, 'Francisco Ayres', 17, 'PI'),
(3453, 'Francisco Macedo', 17, 'PI'),
(3454, 'Francisco Santos', 17, 'PI'),
(3455, 'Fronteiras', 17, 'PI'),
(3456, 'Geminiano', 17, 'PI'),
(3457, 'Gilbués', 17, 'PI'),
(3458, 'Guadalupe', 17, 'PI'),
(3459, 'Guaribas', 17, 'PI'),
(3460, 'Hugo Napoleão', 17, 'PI'),
(3461, 'Ilha Grande', 17, 'PI'),
(3462, 'Inhuma', 17, 'PI'),
(3463, 'Ipiranga do Piauí', 17, 'PI'),
(3464, 'Isaías Coelho', 17, 'PI'),
(3465, 'Itainópolis', 17, 'PI'),
(3466, 'Itaueira', 17, 'PI'),
(3467, 'Jacobina do Piauí', 17, 'PI'),
(3468, 'Jaicós', 17, 'PI'),
(3469, 'Jardim do Mulato', 17, 'PI'),
(3470, 'Jatobá do Piauí', 17, 'PI'),
(3471, 'Jerumenha', 17, 'PI'),
(3472, 'João Costa', 17, 'PI'),
(3473, 'Joaquim Pires', 17, 'PI'),
(3474, 'Joca Marques', 17, 'PI'),
(3475, 'José de Freitas', 17, 'PI'),
(3476, 'Juazeiro do Piauí', 17, 'PI'),
(3477, 'Júlio Borges', 17, 'PI'),
(3478, 'Jurema', 17, 'PI'),
(3479, 'Lagoa Alegre', 17, 'PI'),
(3480, 'Lagoa de São Francisco', 17, 'PI'),
(3481, 'Lagoa do Barro do Piauí', 17, 'PI'),
(3482, 'Lagoa do Piauí', 17, 'PI'),
(3483, 'Lagoa do Sítio', 17, 'PI'),
(3484, 'Lagoinha do Piauí', 17, 'PI'),
(3485, 'Landri Sales', 17, 'PI'),
(3486, 'Luís Correia', 17, 'PI'),
(3487, 'Luzilândia', 17, 'PI'),
(3488, 'Madeiro', 17, 'PI'),
(3489, 'Manoel Emídio', 17, 'PI'),
(3490, 'Marcolândia', 17, 'PI'),
(3491, 'Marcos Parente', 17, 'PI'),
(3492, 'Massapê do Piauí', 17, 'PI'),
(3493, 'Matias Olímpio', 17, 'PI'),
(3494, 'Miguel Alves', 17, 'PI'),
(3495, 'Miguel Leão', 17, 'PI'),
(3496, 'Milton Brandão', 17, 'PI'),
(3497, 'Monsenhor Gil', 17, 'PI'),
(3498, 'Monsenhor Hipólito', 17, 'PI'),
(3499, 'Monte Alegre do Piauí', 17, 'PI'),
(3500, 'Morro Cabeça no Tempo', 17, 'PI'),
(3501, 'Morro do Chapéu do Piauí', 17, 'PI'),
(3502, 'Murici dos Portelas', 17, 'PI'),
(3503, 'Nazaré do Piauí', 17, 'PI'),
(3504, 'Nossa Senhora de Nazaré', 17, 'PI'),
(3505, 'Nossa Senhora dos Remédios', 17, 'PI'),
(3506, 'Nova Santa Rita', 17, 'PI'),
(3507, 'Novo Oriente do Piauí', 17, 'PI'),
(3508, 'Novo Santo Antônio', 17, 'PI'),
(3509, 'Oeiras', 17, 'PI'),
(3510, 'Olho d`Água do Piauí', 17, 'PI'),
(3511, 'Padre Marcos', 17, 'PI'),
(3512, 'Paes Landim', 17, 'PI'),
(3513, 'Pajeú do Piauí', 17, 'PI'),
(3514, 'Palmeira do Piauí', 17, 'PI'),
(3515, 'Palmeirais', 17, 'PI'),
(3516, 'Paquetá', 17, 'PI'),
(3517, 'Parnaguá', 17, 'PI'),
(3518, 'Parnaíba', 17, 'PI'),
(3519, 'Passagem Franca do Piauí', 17, 'PI'),
(3520, 'Patos do Piauí', 17, 'PI'),
(3521, 'Pau d`Arco do Piauí', 17, 'PI'),
(3522, 'Paulistana', 17, 'PI'),
(3523, 'Pavussu', 17, 'PI'),
(3524, 'Pedro II', 17, 'PI'),
(3525, 'Pedro Laurentino', 17, 'PI'),
(3526, 'Picos', 17, 'PI'),
(3527, 'Pimenteiras', 17, 'PI'),
(3528, 'Pio IX', 17, 'PI'),
(3529, 'Piracuruca', 17, 'PI'),
(3530, 'Piripiri', 17, 'PI'),
(3531, 'Porto', 17, 'PI'),
(3532, 'Porto Alegre do Piauí', 17, 'PI'),
(3533, 'Prata do Piauí', 17, 'PI'),
(3534, 'Queimada Nova', 17, 'PI'),
(3535, 'Redenção do Gurguéia', 17, 'PI'),
(3536, 'Regeneração', 17, 'PI'),
(3537, 'Riacho Frio', 17, 'PI'),
(3538, 'Ribeira do Piauí', 17, 'PI'),
(3539, 'Ribeiro Gonçalves', 17, 'PI'),
(3540, 'Rio Grande do Piauí', 17, 'PI'),
(3541, 'Santa Cruz do Piauí', 17, 'PI'),
(3542, 'Santa Cruz dos Milagres', 17, 'PI'),
(3543, 'Santa Filomena', 17, 'PI'),
(3544, 'Santa Luz', 17, 'PI'),
(3545, 'Santa Rosa do Piauí', 17, 'PI'),
(3546, 'Santana do Piauí', 17, 'PI'),
(3547, 'Santo Antônio de Lisboa', 17, 'PI'),
(3548, 'Santo Antônio dos Milagres', 17, 'PI'),
(3549, 'Santo Inácio do Piauí', 17, 'PI'),
(3550, 'São Braz do Piauí', 17, 'PI'),
(3551, 'São Félix do Piauí', 17, 'PI'),
(3552, 'São Francisco de Assis do Piauí', 17, 'PI'),
(3553, 'São Francisco do Piauí', 17, 'PI'),
(3554, 'São Gonçalo do Gurguéia', 17, 'PI'),
(3555, 'São Gonçalo do Piauí', 17, 'PI'),
(3556, 'São João da Canabrava', 17, 'PI'),
(3557, 'São João da Fronteira', 17, 'PI'),
(3558, 'São João da Serra', 17, 'PI'),
(3559, 'São João da Varjota', 17, 'PI'),
(3560, 'São João do Arraial', 17, 'PI'),
(3561, 'São João do Piauí', 17, 'PI'),
(3562, 'São José do Divino', 17, 'PI'),
(3563, 'São José do Peixe', 17, 'PI'),
(3564, 'São José do Piauí', 17, 'PI'),
(3565, 'São Julião', 17, 'PI'),
(3566, 'São Lourenço do Piauí', 17, 'PI'),
(3567, 'São Luis do Piauí', 17, 'PI'),
(3568, 'São Miguel da Baixa Grande', 17, 'PI'),
(3569, 'São Miguel do Fidalgo', 17, 'PI'),
(3570, 'São Miguel do Tapuio', 17, 'PI'),
(3571, 'São Pedro do Piauí', 17, 'PI'),
(3572, 'São Raimundo Nonato', 17, 'PI'),
(3573, 'Sebastião Barros', 17, 'PI'),
(3574, 'Sebastião Leal', 17, 'PI'),
(3575, 'Sigefredo Pacheco', 17, 'PI'),
(3576, 'Simões', 17, 'PI'),
(3577, 'Simplício Mendes', 17, 'PI'),
(3578, 'Socorro do Piauí', 17, 'PI'),
(3579, 'Sussuapara', 17, 'PI'),
(3580, 'Tamboril do Piauí', 17, 'PI'),
(3581, 'Tanque do Piauí', 17, 'PI'),
(3582, 'Teresina', 17, 'PI'),
(3583, 'União', 17, 'PI'),
(3584, 'Uruçuí', 17, 'PI'),
(3585, 'Valença do Piauí', 17, 'PI'),
(3586, 'Várzea Branca', 17, 'PI'),
(3587, 'Várzea Grande', 17, 'PI'),
(3588, 'Vera Mendes', 17, 'PI'),
(3589, 'Vila Nova do Piauí', 17, 'PI'),
(3590, 'Wall Ferraz', 17, 'PI'),
(3591, 'Angra dos Reis', 19, 'RJ'),
(3592, 'Aperibé', 19, 'RJ'),
(3593, 'Araruama', 19, 'RJ'),
(3594, 'Areal', 19, 'RJ'),
(3595, 'Armação dos Búzios', 19, 'RJ'),
(3596, 'Arraial do Cabo', 19, 'RJ'),
(3597, 'Barra do Piraí', 19, 'RJ'),
(3598, 'Barra Mansa', 19, 'RJ'),
(3599, 'Belford Roxo', 19, 'RJ'),
(3600, 'Bom Jardim', 19, 'RJ'),
(3601, 'Bom Jesus do Itabapoana', 19, 'RJ'),
(3602, 'Cabo Frio', 19, 'RJ'),
(3603, 'Cachoeiras de Macacu', 19, 'RJ'),
(3604, 'Cambuci', 19, 'RJ'),
(3605, 'Campos dos Goytacazes', 19, 'RJ'),
(3606, 'Cantagalo', 19, 'RJ'),
(3607, 'Carapebus', 19, 'RJ'),
(3608, 'Cardoso Moreira', 19, 'RJ'),
(3609, 'Carmo', 19, 'RJ'),
(3610, 'Casimiro de Abreu', 19, 'RJ'),
(3611, 'Comendador Levy Gasparian', 19, 'RJ'),
(3612, 'Conceição de Macabu', 19, 'RJ'),
(3613, 'Cordeiro', 19, 'RJ'),
(3614, 'Duas Barras', 19, 'RJ'),
(3615, 'Duque de Caxias', 19, 'RJ'),
(3616, 'Engenheiro Paulo de Frontin', 19, 'RJ'),
(3617, 'Guapimirim', 19, 'RJ'),
(3618, 'Iguaba Grande', 19, 'RJ'),
(3619, 'Itaboraí', 19, 'RJ'),
(3620, 'Itaguaí', 19, 'RJ'),
(3621, 'Italva', 19, 'RJ'),
(3622, 'Itaocara', 19, 'RJ'),
(3623, 'Itaperuna', 19, 'RJ'),
(3624, 'Itatiaia', 19, 'RJ'),
(3625, 'Japeri', 19, 'RJ'),
(3626, 'Laje do Muriaé', 19, 'RJ'),
(3627, 'Macaé', 19, 'RJ'),
(3628, 'Macuco', 19, 'RJ'),
(3629, 'Magé', 19, 'RJ'),
(3630, 'Mangaratiba', 19, 'RJ'),
(3631, 'Maricá', 19, 'RJ'),
(3632, 'Mendes', 19, 'RJ'),
(3633, 'Mesquita', 19, 'RJ'),
(3634, 'Miguel Pereira', 19, 'RJ'),
(3635, 'Miracema', 19, 'RJ'),
(3636, 'Natividade', 19, 'RJ'),
(3637, 'Nilópolis', 19, 'RJ'),
(3638, 'Niterói', 19, 'RJ'),
(3639, 'Nova Friburgo', 19, 'RJ'),
(3640, 'Nova Iguaçu', 19, 'RJ'),
(3641, 'Paracambi', 19, 'RJ'),
(3642, 'Paraíba do Sul', 19, 'RJ'),
(3643, 'Parati', 19, 'RJ'),
(3644, 'Paty do Alferes', 19, 'RJ'),
(3645, 'Petrópolis', 19, 'RJ'),
(3646, 'Pinheiral', 19, 'RJ'),
(3647, 'Piraí', 19, 'RJ'),
(3648, 'Porciúncula', 19, 'RJ'),
(3649, 'Porto Real', 19, 'RJ'),
(3650, 'Quatis', 19, 'RJ'),
(3651, 'Queimados', 19, 'RJ'),
(3652, 'Quissamã', 19, 'RJ'),
(3653, 'Resende', 19, 'RJ'),
(3654, 'Rio Bonito', 19, 'RJ'),
(3655, 'Rio Claro', 19, 'RJ'),
(3656, 'Rio das Flores', 19, 'RJ'),
(3657, 'Rio das Ostras', 19, 'RJ'),
(3658, 'Rio de Janeiro', 19, 'RJ'),
(3659, 'Santa Maria Madalena', 19, 'RJ'),
(3660, 'Santo Antônio de Pádua', 19, 'RJ'),
(3661, 'São Fidélis', 19, 'RJ'),
(3662, 'São Francisco de Itabapoana', 19, 'RJ'),
(3663, 'São Gonçalo', 19, 'RJ'),
(3664, 'São João da Barra', 19, 'RJ'),
(3665, 'São João de Meriti', 19, 'RJ'),
(3666, 'São José de Ubá', 19, 'RJ'),
(3667, 'São José do Vale do Rio Pret', 19, 'RJ'),
(3668, 'São Pedro da Aldeia', 19, 'RJ'),
(3669, 'São Sebastião do Alto', 19, 'RJ'),
(3670, 'Sapucaia', 19, 'RJ'),
(3671, 'Saquarema', 19, 'RJ'),
(3672, 'Seropédica', 19, 'RJ'),
(3673, 'Silva Jardim', 19, 'RJ'),
(3674, 'Sumidouro', 19, 'RJ'),
(3675, 'Tanguá', 19, 'RJ'),
(3676, 'Teresópolis', 19, 'RJ'),
(3677, 'Trajano de Morais', 19, 'RJ'),
(3678, 'Três Rios', 19, 'RJ'),
(3679, 'Valença', 19, 'RJ'),
(3680, 'Varre-Sai', 19, 'RJ'),
(3681, 'Vassouras', 19, 'RJ'),
(3682, 'Volta Redonda', 19, 'RJ'),
(3683, 'Acari', 20, 'RN'),
(3684, 'Açu', 20, 'RN'),
(3685, 'Afonso Bezerra', 20, 'RN'),
(3686, 'Água Nova', 20, 'RN'),
(3687, 'Alexandria', 20, 'RN'),
(3688, 'Almino Afonso', 20, 'RN'),
(3689, 'Alto do Rodrigues', 20, 'RN'),
(3690, 'Angicos', 20, 'RN'),
(3691, 'Antônio Martins', 20, 'RN'),
(3692, 'Apodi', 20, 'RN'),
(3693, 'Areia Branca', 20, 'RN'),
(3694, 'Arês', 20, 'RN'),
(3695, 'Augusto Severo', 20, 'RN'),
(3696, 'Baía Formosa', 20, 'RN'),
(3697, 'Baraúna', 20, 'RN'),
(3698, 'Barcelona', 20, 'RN'),
(3699, 'Bento Fernandes', 20, 'RN'),
(3700, 'Bodó', 20, 'RN'),
(3701, 'Bom Jesus', 20, 'RN'),
(3702, 'Brejinho', 20, 'RN'),
(3703, 'Caiçara do Norte', 20, 'RN'),
(3704, 'Caiçara do Rio do Vento', 20, 'RN'),
(3705, 'Caicó', 20, 'RN'),
(3706, 'Campo Redondo', 20, 'RN'),
(3707, 'Canguaretama', 20, 'RN'),
(3708, 'Caraúbas', 20, 'RN'),
(3709, 'Carnaúba dos Dantas', 20, 'RN'),
(3710, 'Carnaubais', 20, 'RN'),
(3711, 'Ceará-Mirim', 20, 'RN'),
(3712, 'Cerro Corá', 20, 'RN'),
(3713, 'Coronel Ezequiel', 20, 'RN'),
(3714, 'Coronel João Pessoa', 20, 'RN'),
(3715, 'Cruzeta', 20, 'RN'),
(3716, 'Currais Novos', 20, 'RN'),
(3717, 'Doutor Severiano', 20, 'RN'),
(3718, 'Encanto', 20, 'RN'),
(3719, 'Equador', 20, 'RN'),
(3720, 'Espírito Santo', 20, 'RN'),
(3721, 'Extremoz', 20, 'RN'),
(3722, 'Felipe Guerra', 20, 'RN'),
(3723, 'Fernando Pedroza', 20, 'RN'),
(3724, 'Florânia', 20, 'RN'),
(3725, 'Francisco Dantas', 20, 'RN'),
(3726, 'Frutuoso Gomes', 20, 'RN'),
(3727, 'Galinhos', 20, 'RN'),
(3728, 'Goianinha', 20, 'RN'),
(3729, 'Governador Dix-Sept Rosado', 20, 'RN'),
(3730, 'Grossos', 20, 'RN'),
(3731, 'Guamaré', 20, 'RN'),
(3732, 'Ielmo Marinho', 20, 'RN'),
(3733, 'Ipanguaçu', 20, 'RN'),
(3734, 'Ipueira', 20, 'RN'),
(3735, 'Itajá', 20, 'RN'),
(3736, 'Itaú', 20, 'RN'),
(3737, 'Jaçanã', 20, 'RN'),
(3738, 'Jandaíra', 20, 'RN'),
(3739, 'Janduís', 20, 'RN'),
(3740, 'Januário Cicco', 20, 'RN'),
(3741, 'Japi', 20, 'RN'),
(3742, 'Jardim de Angicos', 20, 'RN'),
(3743, 'Jardim de Piranhas', 20, 'RN'),
(3744, 'Jardim do Seridó', 20, 'RN'),
(3745, 'João Câmara', 20, 'RN'),
(3746, 'João Dias', 20, 'RN'),
(3747, 'José da Penha', 20, 'RN'),
(3748, 'Jucurutu', 20, 'RN'),
(3749, 'Jundiá', 20, 'RN'),
(3750, 'Lagoa d`Anta', 20, 'RN'),
(3751, 'Lagoa de Pedras', 20, 'RN'),
(3752, 'Lagoa de Velhos', 20, 'RN'),
(3753, 'Lagoa Nova', 20, 'RN'),
(3754, 'Lagoa Salgada', 20, 'RN'),
(3755, 'Lajes', 20, 'RN'),
(3756, 'Lajes Pintadas', 20, 'RN'),
(3757, 'Lucrécia', 20, 'RN'),
(3758, 'Luís Gomes', 20, 'RN'),
(3759, 'Macaíba', 20, 'RN'),
(3760, 'Macau', 20, 'RN'),
(3761, 'Major Sales', 20, 'RN'),
(3762, 'Marcelino Vieira', 20, 'RN'),
(3763, 'Martins', 20, 'RN'),
(3764, 'Maxaranguape', 20, 'RN'),
(3765, 'Messias Targino', 20, 'RN'),
(3766, 'Montanhas', 20, 'RN'),
(3767, 'Monte Alegre', 20, 'RN'),
(3768, 'Monte das Gameleiras', 20, 'RN'),
(3769, 'Mossoró', 20, 'RN'),
(3770, 'Natal', 20, 'RN'),
(3771, 'Nísia Floresta', 20, 'RN'),
(3772, 'Nova Cruz', 20, 'RN'),
(3773, 'Olho-d`Água do Borges', 20, 'RN'),
(3774, 'Ouro Branco', 20, 'RN'),
(3775, 'Paraná', 20, 'RN'),
(3776, 'Paraú', 20, 'RN'),
(3777, 'Parazinho', 20, 'RN'),
(3778, 'Parelhas', 20, 'RN'),
(3779, 'Parnamirim', 20, 'RN'),
(3780, 'Passa e Fica', 20, 'RN'),
(3781, 'Passagem', 20, 'RN'),
(3782, 'Patu', 20, 'RN'),
(3783, 'Pau dos Ferros', 20, 'RN'),
(3784, 'Pedra Grande', 20, 'RN'),
(3785, 'Pedra Preta', 20, 'RN'),
(3786, 'Pedro Avelino', 20, 'RN'),
(3787, 'Pedro Velho', 20, 'RN'),
(3788, 'Pendências', 20, 'RN'),
(3789, 'Pilões', 20, 'RN'),
(3790, 'Poço Branco', 20, 'RN'),
(3791, 'Portalegre', 20, 'RN'),
(3792, 'Porto do Mangue', 20, 'RN'),
(3793, 'Presidente Juscelino', 20, 'RN'),
(3794, 'Pureza', 20, 'RN'),
(3795, 'Rafael Fernandes', 20, 'RN'),
(3796, 'Rafael Godeiro', 20, 'RN'),
(3797, 'Riacho da Cruz', 20, 'RN'),
(3798, 'Riacho de Santana', 20, 'RN'),
(3799, 'Riachuelo', 20, 'RN'),
(3800, 'Rio do Fogo', 20, 'RN'),
(3801, 'Rodolfo Fernandes', 20, 'RN'),
(3802, 'Ruy Barbosa', 20, 'RN'),
(3803, 'Santa Cruz', 20, 'RN'),
(3804, 'Santa Maria', 20, 'RN'),
(3805, 'Santana do Matos', 20, 'RN'),
(3806, 'Santana do Seridó', 20, 'RN'),
(3807, 'Santo Antônio', 20, 'RN'),
(3808, 'São Bento do Norte', 20, 'RN'),
(3809, 'São Bento do Trairí', 20, 'RN'),
(3810, 'São Fernando', 20, 'RN'),
(3811, 'São Francisco do Oeste', 20, 'RN'),
(3812, 'São Gonçalo do Amarante', 20, 'RN'),
(3813, 'São João do Sabugi', 20, 'RN'),
(3814, 'São José de Mipibu', 20, 'RN'),
(3815, 'São José do Campestre', 20, 'RN'),
(3816, 'São José do Seridó', 20, 'RN'),
(3817, 'São Miguel', 20, 'RN'),
(3818, 'São Miguel do Gostoso', 20, 'RN'),
(3819, 'São Paulo do Potengi', 20, 'RN'),
(3820, 'São Pedro', 20, 'RN'),
(3821, 'São Rafael', 20, 'RN'),
(3822, 'São Tomé', 20, 'RN'),
(3823, 'São Vicente', 20, 'RN'),
(3824, 'Senador Elói de Souza', 20, 'RN'),
(3825, 'Senador Georgino Avelino', 20, 'RN'),
(3826, 'Serra de São Bento', 20, 'RN'),
(3827, 'Serra do Mel', 20, 'RN'),
(3828, 'Serra Negra do Norte', 20, 'RN'),
(3829, 'Serrinha', 20, 'RN'),
(3830, 'Serrinha dos Pintos', 20, 'RN'),
(3831, 'Severiano Melo', 20, 'RN'),
(3832, 'Sítio Novo', 20, 'RN'),
(3833, 'Taboleiro Grande', 20, 'RN'),
(3834, 'Taipu', 20, 'RN'),
(3835, 'Tangará', 20, 'RN'),
(3836, 'Tenente Ananias', 20, 'RN'),
(3837, 'Tenente Laurentino Cruz', 20, 'RN'),
(3838, 'Tibau', 20, 'RN'),
(3839, 'Tibau do Sul', 20, 'RN'),
(3840, 'Timbaúba dos Batistas', 20, 'RN'),
(3841, 'Touros', 20, 'RN'),
(3842, 'Triunfo Potiguar', 20, 'RN'),
(3843, 'Umarizal', 20, 'RN'),
(3844, 'Upanema', 20, 'RN'),
(3845, 'Várzea', 20, 'RN'),
(3846, 'Venha-Ver', 20, 'RN'),
(3847, 'Vera Cruz', 20, 'RN'),
(3848, 'Viçosa', 20, 'RN'),
(3849, 'Vila Flor', 20, 'RN'),
(3850, 'Aceguá', 23, 'RS'),
(3851, 'Água Santa', 23, 'RS'),
(3852, 'Agudo', 23, 'RS'),
(3853, 'Ajuricaba', 23, 'RS'),
(3854, 'Alecrim', 23, 'RS'),
(3855, 'Alegrete', 23, 'RS'),
(3856, 'Alegria', 23, 'RS'),
(3857, 'Almirante Tamandaré do Sul', 23, 'RS'),
(3858, 'Alpestre', 23, 'RS'),
(3859, 'Alto Alegre', 23, 'RS'),
(3860, 'Alto Feliz', 23, 'RS'),
(3861, 'Alvorada', 23, 'RS'),
(3862, 'Amaral Ferrador', 23, 'RS'),
(3863, 'Ametista do Sul', 23, 'RS'),
(3864, 'André da Rocha', 23, 'RS'),
(3865, 'Anta Gorda', 23, 'RS'),
(3866, 'Antônio Prado', 23, 'RS'),
(3867, 'Arambaré', 23, 'RS'),
(3868, 'Araricá', 23, 'RS'),
(3869, 'Aratiba', 23, 'RS'),
(3870, 'Arroio do Meio', 23, 'RS'),
(3871, 'Arroio do Padre', 23, 'RS'),
(3872, 'Arroio do Sal', 23, 'RS'),
(3873, 'Arroio do Tigre', 23, 'RS'),
(3874, 'Arroio dos Ratos', 23, 'RS'),
(3875, 'Arroio Grande', 23, 'RS'),
(3876, 'Arvorezinha', 23, 'RS'),
(3877, 'Augusto Pestana', 23, 'RS'),
(3878, 'Áurea', 23, 'RS'),
(3879, 'Bagé', 23, 'RS'),
(3880, 'Balneário Pinhal', 23, 'RS'),
(3881, 'Barão', 23, 'RS'),
(3882, 'Barão de Cotegipe', 23, 'RS'),
(3883, 'Barão do Triunfo', 23, 'RS'),
(3884, 'Barra do Guarita', 23, 'RS'),
(3885, 'Barra do Quaraí', 23, 'RS'),
(3886, 'Barra do Ribeiro', 23, 'RS'),
(3887, 'Barra do Rio Azul', 23, 'RS'),
(3888, 'Barra Funda', 23, 'RS'),
(3889, 'Barracão', 23, 'RS'),
(3890, 'Barros Cassal', 23, 'RS'),
(3891, 'Benjamin Constant do Sul', 23, 'RS'),
(3892, 'Bento Gonçalves', 23, 'RS'),
(3893, 'Boa Vista das Missões', 23, 'RS'),
(3894, 'Boa Vista do Buricá', 23, 'RS'),
(3895, 'Boa Vista do Cadeado', 23, 'RS'),
(3896, 'Boa Vista do Incra', 23, 'RS'),
(3897, 'Boa Vista do Sul', 23, 'RS'),
(3898, 'Bom Jesus', 23, 'RS'),
(3899, 'Bom Princípio', 23, 'RS'),
(3900, 'Bom Progresso', 23, 'RS'),
(3901, 'Bom Retiro do Sul', 23, 'RS'),
(3902, 'Boqueirão do Leão', 23, 'RS'),
(3903, 'Bossoroca', 23, 'RS'),
(3904, 'Bozano', 23, 'RS'),
(3905, 'Braga', 23, 'RS'),
(3906, 'Brochier', 23, 'RS'),
(3907, 'Butiá', 23, 'RS'),
(3908, 'Caçapava do Sul', 23, 'RS'),
(3909, 'Cacequi', 23, 'RS'),
(3910, 'Cachoeira do Sul', 23, 'RS'),
(3911, 'Cachoeirinha', 23, 'RS'),
(3912, 'Cacique Doble', 23, 'RS'),
(3913, 'Caibaté', 23, 'RS'),
(3914, 'Caiçara', 23, 'RS'),
(3915, 'Camaquã', 23, 'RS'),
(3916, 'Camargo', 23, 'RS'),
(3917, 'Cambará do Sul', 23, 'RS'),
(3918, 'Campestre da Serra', 23, 'RS'),
(3919, 'Campina das Missões', 23, 'RS'),
(3920, 'Campinas do Sul', 23, 'RS'),
(3921, 'Campo Bom', 23, 'RS'),
(3922, 'Campo Novo', 23, 'RS'),
(3923, 'Campos Borges', 23, 'RS'),
(3924, 'Candelária', 23, 'RS'),
(3925, 'Cândido Godói', 23, 'RS'),
(3926, 'Candiota', 23, 'RS'),
(3927, 'Canela', 23, 'RS'),
(3928, 'Canguçu', 23, 'RS'),
(3929, 'Canoas', 23, 'RS'),
(3930, 'Canudos do Vale', 23, 'RS'),
(3931, 'Capão Bonito do Sul', 23, 'RS'),
(3932, 'Capão da Canoa', 23, 'RS'),
(3933, 'Capão do Cipó', 23, 'RS'),
(3934, 'Capão do Leão', 23, 'RS'),
(3935, 'Capela de Santana', 23, 'RS'),
(3936, 'Capitão', 23, 'RS'),
(3937, 'Capivari do Sul', 23, 'RS'),
(3938, 'Caraá', 23, 'RS'),
(3939, 'Carazinho', 23, 'RS'),
(3940, 'Carlos Barbosa', 23, 'RS'),
(3941, 'Carlos Gomes', 23, 'RS'),
(3942, 'Casca', 23, 'RS'),
(3943, 'Caseiros', 23, 'RS'),
(3944, 'Catuípe', 23, 'RS'),
(3945, 'Caxias do Sul', 23, 'RS'),
(3946, 'Centenário', 23, 'RS'),
(3947, 'Cerrito', 23, 'RS'),
(3948, 'Cerro Branco', 23, 'RS'),
(3949, 'Cerro Grande', 23, 'RS'),
(3950, 'Cerro Grande do Sul', 23, 'RS'),
(3951, 'Cerro Largo', 23, 'RS'),
(3952, 'Chapada', 23, 'RS'),
(3953, 'Charqueadas', 23, 'RS'),
(3954, 'Charrua', 23, 'RS'),
(3955, 'Chiapeta', 23, 'RS'),
(3956, 'Chuí', 23, 'RS'),
(3957, 'Chuvisca', 23, 'RS'),
(3958, 'Cidreira', 23, 'RS'),
(3959, 'Ciríaco', 23, 'RS'),
(3960, 'Colinas', 23, 'RS'),
(3961, 'Colorado', 23, 'RS'),
(3962, 'Condor', 23, 'RS'),
(3963, 'Constantina', 23, 'RS'),
(3964, 'Coqueiro Baixo', 23, 'RS'),
(3965, 'Coqueiros do Sul', 23, 'RS'),
(3966, 'Coronel Barros', 23, 'RS'),
(3967, 'Coronel Bicaco', 23, 'RS'),
(3968, 'Coronel Pilar', 23, 'RS'),
(3969, 'Cotiporã', 23, 'RS'),
(3970, 'Coxilha', 23, 'RS'),
(3971, 'Crissiumal', 23, 'RS'),
(3972, 'Cristal', 23, 'RS'),
(3973, 'Cristal do Sul', 23, 'RS'),
(3974, 'Cruz Alta', 23, 'RS'),
(3975, 'Cruzaltense', 23, 'RS'),
(3976, 'Cruzeiro do Sul', 23, 'RS'),
(3977, 'David Canabarro', 23, 'RS'),
(3978, 'Derrubadas', 23, 'RS'),
(3979, 'Dezesseis de Novembro', 23, 'RS'),
(3980, 'Dilermando de Aguiar', 23, 'RS'),
(3981, 'Dois Irmãos', 23, 'RS'),
(3982, 'Dois Irmãos das Missões', 23, 'RS'),
(3983, 'Dois Lajeados', 23, 'RS'),
(3984, 'Dom Feliciano', 23, 'RS'),
(3985, 'Dom Pedrito', 23, 'RS'),
(3986, 'Dom Pedro de Alcântara', 23, 'RS'),
(3987, 'Dona Francisca', 23, 'RS'),
(3988, 'Doutor Maurício Cardoso', 23, 'RS'),
(3989, 'Doutor Ricardo', 23, 'RS'),
(3990, 'Eldorado do Sul', 23, 'RS'),
(3991, 'Encantado', 23, 'RS'),
(3992, 'Encruzilhada do Sul', 23, 'RS'),
(3993, 'Engenho Velho', 23, 'RS'),
(3994, 'Entre Rios do Sul', 23, 'RS'),
(3995, 'Entre-Ijuís', 23, 'RS'),
(3996, 'Erebango', 23, 'RS'),
(3997, 'Erechim', 23, 'RS'),
(3998, 'Ernestina', 23, 'RS'),
(3999, 'Erval Grande', 23, 'RS'),
(4000, 'Erval Seco', 23, 'RS'),
(4001, 'Esmeralda', 23, 'RS'),
(4002, 'Esperança do Sul', 23, 'RS'),
(4003, 'Espumoso', 23, 'RS'),
(4004, 'Estação', 23, 'RS'),
(4005, 'Estância Velha', 23, 'RS'),
(4006, 'Esteio', 23, 'RS'),
(4007, 'Estrela', 23, 'RS'),
(4008, 'Estrela Velha', 23, 'RS'),
(4009, 'Eugênio de Castro', 23, 'RS'),
(4010, 'Fagundes Varela', 23, 'RS'),
(4011, 'Farroupilha', 23, 'RS'),
(4012, 'Faxinal do Soturno', 23, 'RS'),
(4013, 'Faxinalzinho', 23, 'RS'),
(4014, 'Fazenda Vilanova', 23, 'RS'),
(4015, 'Feliz', 23, 'RS'),
(4016, 'Flores da Cunha', 23, 'RS'),
(4017, 'Floriano Peixoto', 23, 'RS'),
(4018, 'Fontoura Xavier', 23, 'RS'),
(4019, 'Formigueiro', 23, 'RS'),
(4020, 'Forquetinha', 23, 'RS'),
(4021, 'Fortaleza dos Valos', 23, 'RS'),
(4022, 'Frederico Westphalen', 23, 'RS'),
(4023, 'Garibaldi', 23, 'RS'),
(4024, 'Garruchos', 23, 'RS'),
(4025, 'Gaurama', 23, 'RS'),
(4026, 'General Câmara', 23, 'RS'),
(4027, 'Gentil', 23, 'RS'),
(4028, 'Getúlio Vargas', 23, 'RS'),
(4029, 'Giruá', 23, 'RS'),
(4030, 'Glorinha', 23, 'RS'),
(4031, 'Gramado', 23, 'RS'),
(4032, 'Gramado dos Loureiros', 23, 'RS'),
(4033, 'Gramado Xavier', 23, 'RS'),
(4034, 'Gravataí', 23, 'RS'),
(4035, 'Guabiju', 23, 'RS'),
(4036, 'Guaíba', 23, 'RS'),
(4037, 'Guaporé', 23, 'RS'),
(4038, 'Guarani das Missões', 23, 'RS'),
(4039, 'Harmonia', 23, 'RS'),
(4040, 'Herval', 23, 'RS'),
(4041, 'Herveiras', 23, 'RS'),
(4042, 'Horizontina', 23, 'RS'),
(4043, 'Hulha Negra', 23, 'RS'),
(4044, 'Humaitá', 23, 'RS'),
(4045, 'Ibarama', 23, 'RS'),
(4046, 'Ibiaçá', 23, 'RS'),
(4047, 'Ibiraiaras', 23, 'RS'),
(4048, 'Ibirapuitã', 23, 'RS'),
(4049, 'Ibirubá', 23, 'RS'),
(4050, 'Igrejinha', 23, 'RS'),
(4051, 'Ijuí', 23, 'RS'),
(4052, 'Ilópolis', 23, 'RS'),
(4053, 'Imbé', 23, 'RS'),
(4054, 'Imigrante', 23, 'RS'),
(4055, 'Independência', 23, 'RS'),
(4056, 'Inhacorá', 23, 'RS'),
(4057, 'Ipê', 23, 'RS'),
(4058, 'Ipiranga do Sul', 23, 'RS'),
(4059, 'Iraí', 23, 'RS'),
(4060, 'Itaara', 23, 'RS'),
(4061, 'Itacurubi', 23, 'RS'),
(4062, 'Itapuca', 23, 'RS'),
(4063, 'Itaqui', 23, 'RS'),
(4064, 'Itati', 23, 'RS'),
(4065, 'Itatiba do Sul', 23, 'RS'),
(4066, 'Ivorá', 23, 'RS'),
(4067, 'Ivoti', 23, 'RS'),
(4068, 'Jaboticaba', 23, 'RS'),
(4069, 'Jacuizinho', 23, 'RS'),
(4070, 'Jacutinga', 23, 'RS'),
(4071, 'Jaguarão', 23, 'RS'),
(4072, 'Jaguari', 23, 'RS'),
(4073, 'Jaquirana', 23, 'RS'),
(4074, 'Jari', 23, 'RS'),
(4075, 'Jóia', 23, 'RS'),
(4076, 'Júlio de Castilhos', 23, 'RS'),
(4077, 'Lagoa Bonita do Sul', 23, 'RS'),
(4078, 'Lagoa dos Três Cantos', 23, 'RS'),
(4079, 'Lagoa Vermelha', 23, 'RS'),
(4080, 'Lagoão', 23, 'RS'),
(4081, 'Lajeado', 23, 'RS'),
(4082, 'Lajeado do Bugre', 23, 'RS'),
(4083, 'Lavras do Sul', 23, 'RS'),
(4084, 'Liberato Salzano', 23, 'RS'),
(4085, 'Lindolfo Collor', 23, 'RS'),
(4086, 'Linha Nova', 23, 'RS'),
(4087, 'Maçambara', 23, 'RS'),
(4088, 'Machadinho', 23, 'RS'),
(4089, 'Mampituba', 23, 'RS'),
(4090, 'Manoel Viana', 23, 'RS'),
(4091, 'Maquiné', 23, 'RS'),
(4092, 'Maratá', 23, 'RS'),
(4093, 'Marau', 23, 'RS'),
(4094, 'Marcelino Ramos', 23, 'RS'),
(4095, 'Mariana Pimentel', 23, 'RS'),
(4096, 'Mariano Moro', 23, 'RS'),
(4097, 'Marques de Souza', 23, 'RS'),
(4098, 'Mata', 23, 'RS'),
(4099, 'Mato Castelhano', 23, 'RS'),
(4100, 'Mato Leitão', 23, 'RS'),
(4101, 'Mato Queimado', 23, 'RS'),
(4102, 'Maximiliano de Almeida', 23, 'RS'),
(4103, 'Minas do Leão', 23, 'RS'),
(4104, 'Miraguaí', 23, 'RS'),
(4105, 'Montauri', 23, 'RS'),
(4106, 'Monte Alegre dos Campos', 23, 'RS'),
(4107, 'Monte Belo do Sul', 23, 'RS'),
(4108, 'Montenegro', 23, 'RS'),
(4109, 'Mormaço', 23, 'RS'),
(4110, 'Morrinhos do Sul', 23, 'RS'),
(4111, 'Morro Redondo', 23, 'RS'),
(4112, 'Morro Reuter', 23, 'RS'),
(4113, 'Mostardas', 23, 'RS'),
(4114, 'Muçum', 23, 'RS'),
(4115, 'Muitos Capões', 23, 'RS'),
(4116, 'Muliterno', 23, 'RS'),
(4117, 'Não-Me-Toque', 23, 'RS'),
(4118, 'Nicolau Vergueiro', 23, 'RS'),
(4119, 'Nonoai', 23, 'RS'),
(4120, 'Nova Alvorada', 23, 'RS'),
(4121, 'Nova Araçá', 23, 'RS'),
(4122, 'Nova Bassano', 23, 'RS'),
(4123, 'Nova Boa Vista', 23, 'RS'),
(4124, 'Nova Bréscia', 23, 'RS'),
(4125, 'Nova Candelária', 23, 'RS'),
(4126, 'Nova Esperança do Sul', 23, 'RS'),
(4127, 'Nova Hartz', 23, 'RS'),
(4128, 'Nova Pádua', 23, 'RS'),
(4129, 'Nova Palma', 23, 'RS'),
(4130, 'Nova Petrópolis', 23, 'RS'),
(4131, 'Nova Prata', 23, 'RS'),
(4132, 'Nova Ramada', 23, 'RS'),
(4133, 'Nova Roma do Sul', 23, 'RS'),
(4134, 'Nova Santa Rita', 23, 'RS'),
(4135, 'Novo Barreiro', 23, 'RS'),
(4136, 'Novo Cabrais', 23, 'RS'),
(4137, 'Novo Hamburgo', 23, 'RS'),
(4138, 'Novo Machado', 23, 'RS'),
(4139, 'Novo Tiradentes', 23, 'RS'),
(4140, 'Novo Xingu', 23, 'RS'),
(4141, 'Osório', 23, 'RS'),
(4142, 'Paim Filho', 23, 'RS'),
(4143, 'Palmares do Sul', 23, 'RS'),
(4144, 'Palmeira das Missões', 23, 'RS'),
(4145, 'Palmitinho', 23, 'RS'),
(4146, 'Panambi', 23, 'RS'),
(4147, 'Pantano Grande', 23, 'RS'),
(4148, 'Paraí', 23, 'RS'),
(4149, 'Paraíso do Sul', 23, 'RS'),
(4150, 'Pareci Novo', 23, 'RS'),
(4151, 'Parobé', 23, 'RS'),
(4152, 'Passa Sete', 23, 'RS'),
(4153, 'Passo do Sobrado', 23, 'RS'),
(4154, 'Passo Fundo', 23, 'RS'),
(4155, 'Paulo Bento', 23, 'RS'),
(4156, 'Paverama', 23, 'RS'),
(4157, 'Pedras Altas', 23, 'RS'),
(4158, 'Pedro Osório', 23, 'RS'),
(4159, 'Pejuçara', 23, 'RS'),
(4160, 'Pelotas', 23, 'RS'),
(4161, 'Picada Café', 23, 'RS'),
(4162, 'Pinhal', 23, 'RS'),
(4163, 'Pinhal da Serra', 23, 'RS'),
(4164, 'Pinhal Grande', 23, 'RS'),
(4165, 'Pinheirinho do Vale', 23, 'RS'),
(4166, 'Pinheiro Machado', 23, 'RS'),
(4167, 'Pirapó', 23, 'RS'),
(4168, 'Piratini', 23, 'RS'),
(4169, 'Planalto', 23, 'RS'),
(4170, 'Poço das Antas', 23, 'RS'),
(4171, 'Pontão', 23, 'RS'),
(4172, 'Ponte Preta', 23, 'RS'),
(4173, 'Portão', 23, 'RS'),
(4174, 'Porto Alegre', 23, 'RS'),
(4175, 'Porto Lucena', 23, 'RS'),
(4176, 'Porto Mauá', 23, 'RS'),
(4177, 'Porto Vera Cruz', 23, 'RS'),
(4178, 'Porto Xavier', 23, 'RS'),
(4179, 'Pouso Novo', 23, 'RS'),
(4180, 'Presidente Lucena', 23, 'RS'),
(4181, 'Progresso', 23, 'RS'),
(4182, 'Protásio Alves', 23, 'RS'),
(4183, 'Putinga', 23, 'RS'),
(4184, 'Quaraí', 23, 'RS'),
(4185, 'Quatro Irmãos', 23, 'RS'),
(4186, 'Quevedos', 23, 'RS'),
(4187, 'Quinze de Novembro', 23, 'RS'),
(4188, 'Redentora', 23, 'RS'),
(4189, 'Relvado', 23, 'RS'),
(4190, 'Restinga Seca', 23, 'RS'),
(4191, 'Rio dos Índios', 23, 'RS'),
(4192, 'Rio Grande', 23, 'RS'),
(4193, 'Rio Pardo', 23, 'RS'),
(4194, 'Riozinho', 23, 'RS'),
(4195, 'Roca Sales', 23, 'RS'),
(4196, 'Rodeio Bonito', 23, 'RS'),
(4197, 'Rolador', 23, 'RS'),
(4198, 'Rolante', 23, 'RS'),
(4199, 'Ronda Alta', 23, 'RS'),
(4200, 'Rondinha', 23, 'RS'),
(4201, 'Roque Gonzales', 23, 'RS'),
(4202, 'Rosário do Sul', 23, 'RS'),
(4203, 'Sagrada Família', 23, 'RS'),
(4204, 'Saldanha Marinho', 23, 'RS'),
(4205, 'Salto do Jacuí', 23, 'RS'),
(4206, 'Salvador das Missões', 23, 'RS'),
(4207, 'Salvador do Sul', 23, 'RS'),
(4208, 'Sananduva', 23, 'RS'),
(4209, 'Santa Bárbara do Sul', 23, 'RS'),
(4210, 'Santa Cecília do Sul', 23, 'RS'),
(4211, 'Santa Clara do Sul', 23, 'RS'),
(4212, 'Santa Cruz do Sul', 23, 'RS'),
(4213, 'Santa Margarida do Sul', 23, 'RS'),
(4214, 'Santa Maria', 23, 'RS'),
(4215, 'Santa Maria do Herval', 23, 'RS'),
(4216, 'Santa Rosa', 23, 'RS'),
(4217, 'Santa Tereza', 23, 'RS'),
(4218, 'Santa Vitória do Palmar', 23, 'RS'),
(4219, 'Santana da Boa Vista', 23, 'RS'),
(4220, 'Santana do Livramento', 23, 'RS'),
(4221, 'Santiago', 23, 'RS'),
(4222, 'Santo Ângelo', 23, 'RS'),
(4223, 'Santo Antônio da Patrulha', 23, 'RS'),
(4224, 'Santo Antônio das Missões', 23, 'RS'),
(4225, 'Santo Antônio do Palma', 23, 'RS'),
(4226, 'Santo Antônio do Planalto', 23, 'RS'),
(4227, 'Santo Augusto', 23, 'RS'),
(4228, 'Santo Cristo', 23, 'RS'),
(4229, 'Santo Expedito do Sul', 23, 'RS'),
(4230, 'São Borja', 23, 'RS'),
(4231, 'São Domingos do Sul', 23, 'RS'),
(4232, 'São Francisco de Assis', 23, 'RS'),
(4233, 'São Francisco de Paula', 23, 'RS'),
(4234, 'São Gabriel', 23, 'RS'),
(4235, 'São Jerônimo', 23, 'RS'),
(4236, 'São João da Urtiga', 23, 'RS'),
(4237, 'São João do Polêsine', 23, 'RS'),
(4238, 'São Jorge', 23, 'RS'),
(4239, 'São José das Missões', 23, 'RS'),
(4240, 'São José do Herval', 23, 'RS'),
(4241, 'São José do Hortêncio', 23, 'RS'),
(4242, 'São José do Inhacorá', 23, 'RS'),
(4243, 'São José do Norte', 23, 'RS'),
(4244, 'São José do Ouro', 23, 'RS'),
(4245, 'São José do Sul', 23, 'RS'),
(4246, 'São José dos Ausentes', 23, 'RS'),
(4247, 'São Leopoldo', 23, 'RS'),
(4248, 'São Lourenço do Sul', 23, 'RS'),
(4249, 'São Luiz Gonzaga', 23, 'RS'),
(4250, 'São Marcos', 23, 'RS'),
(4251, 'São Martinho', 23, 'RS'),
(4252, 'São Martinho da Serra', 23, 'RS'),
(4253, 'São Miguel das Missões', 23, 'RS'),
(4254, 'São Nicolau', 23, 'RS'),
(4255, 'São Paulo das Missões', 23, 'RS'),
(4256, 'São Pedro da Serra', 23, 'RS'),
(4257, 'São Pedro das Missões', 23, 'RS'),
(4258, 'São Pedro do Butiá', 23, 'RS'),
(4259, 'São Pedro do Sul', 23, 'RS'),
(4260, 'São Sebastião do Caí', 23, 'RS'),
(4261, 'São Sepé', 23, 'RS'),
(4262, 'São Valentim', 23, 'RS'),
(4263, 'São Valentim do Sul', 23, 'RS'),
(4264, 'São Valério do Sul', 23, 'RS'),
(4265, 'São Vendelino', 23, 'RS'),
(4266, 'São Vicente do Sul', 23, 'RS'),
(4267, 'Sapiranga', 23, 'RS'),
(4268, 'Sapucaia do Sul', 23, 'RS'),
(4269, 'Sarandi', 23, 'RS'),
(4270, 'Seberi', 23, 'RS'),
(4271, 'Sede Nova', 23, 'RS'),
(4272, 'Segredo', 23, 'RS'),
(4273, 'Selbach', 23, 'RS'),
(4274, 'Senador Salgado Filho', 23, 'RS'),
(4275, 'Sentinela do Sul', 23, 'RS'),
(4276, 'Serafina Corrêa', 23, 'RS'),
(4277, 'Sério', 23, 'RS'),
(4278, 'Sertão', 23, 'RS'),
(4279, 'Sertão Santana', 23, 'RS'),
(4280, 'Sete de Setembro', 23, 'RS'),
(4281, 'Severiano de Almeida', 23, 'RS'),
(4282, 'Silveira Martins', 23, 'RS'),
(4283, 'Sinimbu', 23, 'RS'),
(4284, 'Sobradinho', 23, 'RS'),
(4285, 'Soledade', 23, 'RS'),
(4286, 'Tabaí', 23, 'RS'),
(4287, 'Tapejara', 23, 'RS'),
(4288, 'Tapera', 23, 'RS'),
(4289, 'Tapes', 23, 'RS'),
(4290, 'Taquara', 23, 'RS'),
(4291, 'Taquari', 23, 'RS'),
(4292, 'Taquaruçu do Sul', 23, 'RS'),
(4293, 'Tavares', 23, 'RS'),
(4294, 'Tenente Portela', 23, 'RS'),
(4295, 'Terra de Areia', 23, 'RS'),
(4296, 'Teutônia', 23, 'RS'),
(4297, 'Tio Hugo', 23, 'RS'),
(4298, 'Tiradentes do Sul', 23, 'RS'),
(4299, 'Toropi', 23, 'RS'),
(4300, 'Torres', 23, 'RS'),
(4301, 'Tramandaí', 23, 'RS'),
(4302, 'Travesseiro', 23, 'RS'),
(4303, 'Três Arroios', 23, 'RS'),
(4304, 'Três Cachoeiras', 23, 'RS'),
(4305, 'Três Coroas', 23, 'RS'),
(4306, 'Três de Maio', 23, 'RS'),
(4307, 'Três Forquilhas', 23, 'RS'),
(4308, 'Três Palmeiras', 23, 'RS'),
(4309, 'Três Passos', 23, 'RS'),
(4310, 'Trindade do Sul', 23, 'RS'),
(4311, 'Triunfo', 23, 'RS'),
(4312, 'Tucunduva', 23, 'RS'),
(4313, 'Tunas', 23, 'RS'),
(4314, 'Tupanci do Sul', 23, 'RS'),
(4315, 'Tupanciretã', 23, 'RS'),
(4316, 'Tupandi', 23, 'RS'),
(4317, 'Tuparendi', 23, 'RS'),
(4318, 'Turuçu', 23, 'RS'),
(4319, 'Ubiretama', 23, 'RS'),
(4320, 'União da Serra', 23, 'RS'),
(4321, 'Unistalda', 23, 'RS'),
(4322, 'Uruguaiana', 23, 'RS'),
(4323, 'Vacaria', 23, 'RS'),
(4324, 'Vale do Sol', 23, 'RS'),
(4325, 'Vale Real', 23, 'RS'),
(4326, 'Vale Verde', 23, 'RS'),
(4327, 'Vanini', 23, 'RS'),
(4328, 'Venâncio Aires', 23, 'RS'),
(4329, 'Vera Cruz', 23, 'RS'),
(4330, 'Veranópolis', 23, 'RS'),
(4331, 'Vespasiano Correa', 23, 'RS'),
(4332, 'Viadutos', 23, 'RS'),
(4333, 'Viamão', 23, 'RS'),
(4334, 'Vicente Dutra', 23, 'RS'),
(4335, 'Victor Graeff', 23, 'RS'),
(4336, 'Vila Flores', 23, 'RS'),
(4337, 'Vila Lângaro', 23, 'RS'),
(4338, 'Vila Maria', 23, 'RS'),
(4339, 'Vila Nova do Sul', 23, 'RS'),
(4340, 'Vista Alegre', 23, 'RS'),
(4341, 'Vista Alegre do Prata', 23, 'RS'),
(4342, 'Vista Gaúcha', 23, 'RS'),
(4343, 'Vitória das Missões', 23, 'RS'),
(4344, 'Westfália', 23, 'RS'),
(4345, 'Xangri-lá', 23, 'RS'),
(4346, 'Alta Floresta d`Oeste', 21, 'RO'),
(4347, 'Alto Alegre dos Parecis', 21, 'RO'),
(4348, 'Alto Paraíso', 21, 'RO'),
(4349, 'Alvorada d`Oeste', 21, 'RO'),
(4350, 'Ariquemes', 21, 'RO'),
(4351, 'Buritis', 21, 'RO'),
(4352, 'Cabixi', 21, 'RO'),
(4353, 'Cacaulândia', 21, 'RO'),
(4354, 'Cacoal', 21, 'RO'),
(4355, 'Campo Novo de Rondônia', 21, 'RO'),
(4356, 'Candeias do Jamari', 21, 'RO'),
(4357, 'Castanheiras', 21, 'RO'),
(4358, 'Cerejeiras', 21, 'RO'),
(4359, 'Chupinguaia', 21, 'RO'),
(4360, 'Colorado do Oeste', 21, 'RO'),
(4361, 'Corumbiara', 21, 'RO'),
(4362, 'Costa Marques', 21, 'RO'),
(4363, 'Cujubim', 21, 'RO'),
(4364, 'Espigão d`Oeste', 21, 'RO'),
(4365, 'Governador Jorge Teixeira', 21, 'RO'),
(4366, 'Guajará-Mirim', 21, 'RO'),
(4367, 'Itapuã do Oeste', 21, 'RO'),
(4368, 'Jaru', 21, 'RO'),
(4369, 'Ji-Paraná', 21, 'RO'),
(4370, 'Machadinho d`Oeste', 21, 'RO'),
(4371, 'Ministro Andreazza', 21, 'RO'),
(4372, 'Mirante da Serra', 21, 'RO'),
(4373, 'Monte Negro', 21, 'RO'),
(4374, 'Nova Brasilândia d`Oeste', 21, 'RO'),
(4375, 'Nova Mamoré', 21, 'RO'),
(4376, 'Nova União', 21, 'RO'),
(4377, 'Novo Horizonte do Oeste', 21, 'RO'),
(4378, 'Ouro Preto do Oeste', 21, 'RO'),
(4379, 'Parecis', 21, 'RO'),
(4380, 'Pimenta Bueno', 21, 'RO'),
(4381, 'Pimenteiras do Oeste', 21, 'RO'),
(4382, 'Porto Velho', 21, 'RO'),
(4383, 'Presidente Médici', 21, 'RO'),
(4384, 'Primavera de Rondônia', 21, 'RO'),
(4385, 'Rio Crespo', 21, 'RO'),
(4386, 'Rolim de Moura', 21, 'RO'),
(4387, 'Santa Luzia d`Oeste', 21, 'RO'),
(4388, 'São Felipe d`Oeste', 21, 'RO'),
(4389, 'São Francisco do Guaporé', 21, 'RO'),
(4390, 'São Miguel do Guaporé', 21, 'RO'),
(4391, 'Seringueiras', 21, 'RO'),
(4392, 'Teixeirópolis', 21, 'RO'),
(4393, 'Theobroma', 21, 'RO'),
(4394, 'Urupá', 21, 'RO'),
(4395, 'Vale do Anari', 21, 'RO'),
(4396, 'Vale do Paraíso', 21, 'RO'),
(4397, 'Vilhena', 21, 'RO'),
(4398, 'Alto Alegre', 22, 'RR'),
(4399, 'Amajari', 22, 'RR'),
(4400, 'Boa Vista', 22, 'RR'),
(4401, 'Bonfim', 22, 'RR'),
(4402, 'Cantá', 22, 'RR'),
(4403, 'Caracaraí', 22, 'RR'),
(4404, 'Caroebe', 22, 'RR'),
(4405, 'Iracema', 22, 'RR'),
(4406, 'Mucajaí', 22, 'RR'),
(4407, 'Normandia', 22, 'RR'),
(4408, 'Pacaraima', 22, 'RR'),
(4409, 'Rorainópolis', 22, 'RR'),
(4410, 'São João da Baliza', 22, 'RR'),
(4411, 'São Luiz', 22, 'RR'),
(4412, 'Uiramutã', 22, 'RR'),
(4413, 'Abdon Batista', 24, 'SC'),
(4414, 'Abelardo Luz', 24, 'SC'),
(4415, 'Agrolândia', 24, 'SC'),
(4416, 'Agronômica', 24, 'SC'),
(4417, 'Água Doce', 24, 'SC'),
(4418, 'Águas de Chapecó', 24, 'SC'),
(4419, 'Águas Frias', 24, 'SC'),
(4420, 'Águas Mornas', 24, 'SC'),
(4421, 'Alfredo Wagner', 24, 'SC'),
(4422, 'Alto Bela Vista', 24, 'SC'),
(4423, 'Anchieta', 24, 'SC'),
(4424, 'Angelina', 24, 'SC'),
(4425, 'Anita Garibaldi', 24, 'SC'),
(4426, 'Anitápolis', 24, 'SC'),
(4427, 'Antônio Carlos', 24, 'SC'),
(4428, 'Apiúna', 24, 'SC'),
(4429, 'Arabutã', 24, 'SC'),
(4430, 'Araquari', 24, 'SC'),
(4431, 'Araranguá', 24, 'SC'),
(4432, 'Armazém', 24, 'SC'),
(4433, 'Arroio Trinta', 24, 'SC'),
(4434, 'Arvoredo', 24, 'SC'),
(4435, 'Ascurra', 24, 'SC'),
(4436, 'Atalanta', 24, 'SC'),
(4437, 'Aurora', 24, 'SC'),
(4438, 'Balneário Arroio do Silva', 24, 'SC'),
(4439, 'Balneário Barra do Sul', 24, 'SC'),
(4440, 'Balneário Camboriú', 24, 'SC'),
(4441, 'Balneário Gaivota', 24, 'SC'),
(4442, 'Bandeirante', 24, 'SC'),
(4443, 'Barra Bonita', 24, 'SC'),
(4444, 'Barra Velha', 24, 'SC'),
(4445, 'Bela Vista do Toldo', 24, 'SC'),
(4446, 'Belmonte', 24, 'SC'),
(4447, 'Benedito Novo', 24, 'SC'),
(4448, 'Biguaçu', 24, 'SC'),
(4449, 'Blumenau', 24, 'SC'),
(4450, 'Bocaina do Sul', 24, 'SC'),
(4451, 'Bom Jardim da Serra', 24, 'SC'),
(4452, 'Bom Jesus', 24, 'SC'),
(4453, 'Bom Jesus do Oeste', 24, 'SC'),
(4454, 'Bom Retiro', 24, 'SC'),
(4455, 'Bombinhas', 24, 'SC'),
(4456, 'Botuverá', 24, 'SC'),
(4457, 'Braço do Norte', 24, 'SC'),
(4458, 'Braço do Trombudo', 24, 'SC'),
(4459, 'Brunópolis', 24, 'SC'),
(4460, 'Brusque', 24, 'SC'),
(4461, 'Caçador', 24, 'SC'),
(4462, 'Caibi', 24, 'SC'),
(4463, 'Calmon', 24, 'SC'),
(4464, 'Camboriú', 24, 'SC'),
(4465, 'Campo Alegre', 24, 'SC'),
(4466, 'Campo Belo do Sul', 24, 'SC'),
(4467, 'Campo Erê', 24, 'SC'),
(4468, 'Campos Novos', 24, 'SC'),
(4469, 'Canelinha', 24, 'SC'),
(4470, 'Canoinhas', 24, 'SC'),
(4471, 'Capão Alto', 24, 'SC'),
(4472, 'Capinzal', 24, 'SC'),
(4473, 'Capivari de Baixo', 24, 'SC'),
(4474, 'Catanduvas', 24, 'SC'),
(4475, 'Caxambu do Sul', 24, 'SC'),
(4476, 'Celso Ramos', 24, 'SC'),
(4477, 'Cerro Negro', 24, 'SC'),
(4478, 'Chapadão do Lageado', 24, 'SC'),
(4479, 'Chapecó', 24, 'SC'),
(4480, 'Cocal do Sul', 24, 'SC'),
(4481, 'Concórdia', 24, 'SC'),
(4482, 'Cordilheira Alta', 24, 'SC'),
(4483, 'Coronel Freitas', 24, 'SC'),
(4484, 'Coronel Martins', 24, 'SC'),
(4485, 'Correia Pinto', 24, 'SC'),
(4486, 'Corupá', 24, 'SC'),
(4487, 'Criciúma', 24, 'SC'),
(4488, 'Cunha Porã', 24, 'SC'),
(4489, 'Cunhataí', 24, 'SC'),
(4490, 'Curitibanos', 24, 'SC'),
(4491, 'Descanso', 24, 'SC'),
(4492, 'Dionísio Cerqueira', 24, 'SC'),
(4493, 'Dona Emma', 24, 'SC'),
(4494, 'Doutor Pedrinho', 24, 'SC'),
(4495, 'Entre Rios', 24, 'SC'),
(4496, 'Ermo', 24, 'SC'),
(4497, 'Erval Velho', 24, 'SC'),
(4498, 'Faxinal dos Guedes', 24, 'SC'),
(4499, 'Flor do Sertão', 24, 'SC'),
(4500, 'Florianópolis', 24, 'SC'),
(4501, 'Formosa do Sul', 24, 'SC'),
(4502, 'Forquilhinha', 24, 'SC'),
(4503, 'Fraiburgo', 24, 'SC'),
(4504, 'Frei Rogério', 24, 'SC'),
(4505, 'Galvão', 24, 'SC'),
(4506, 'Garopaba', 24, 'SC'),
(4507, 'Garuva', 24, 'SC'),
(4508, 'Gaspar', 24, 'SC'),
(4509, 'Governador Celso Ramos', 24, 'SC'),
(4510, 'Grão Pará', 24, 'SC'),
(4511, 'Gravatal', 24, 'SC'),
(4512, 'Guabiruba', 24, 'SC'),
(4513, 'Guaraciaba', 24, 'SC'),
(4514, 'Guaramirim', 24, 'SC'),
(4515, 'Guarujá do Sul', 24, 'SC'),
(4516, 'Guatambú', 24, 'SC'),
(4517, 'Herval d`Oeste', 24, 'SC'),
(4518, 'Ibiam', 24, 'SC'),
(4519, 'Ibicaré', 24, 'SC'),
(4520, 'Ibirama', 24, 'SC'),
(4521, 'Içara', 24, 'SC'),
(4522, 'Ilhota', 24, 'SC'),
(4523, 'Imaruí', 24, 'SC'),
(4524, 'Imbituba', 24, 'SC'),
(4525, 'Imbuia', 24, 'SC'),
(4526, 'Indaial', 24, 'SC'),
(4527, 'Iomerê', 24, 'SC'),
(4528, 'Ipira', 24, 'SC'),
(4529, 'Iporã do Oeste', 24, 'SC'),
(4530, 'Ipuaçu', 24, 'SC'),
(4531, 'Ipumirim', 24, 'SC'),
(4532, 'Iraceminha', 24, 'SC'),
(4533, 'Irani', 24, 'SC'),
(4534, 'Irati', 24, 'SC'),
(4535, 'Irineópolis', 24, 'SC'),
(4536, 'Itá', 24, 'SC'),
(4537, 'Itaiópolis', 24, 'SC'),
(4538, 'Itajaí', 24, 'SC'),
(4539, 'Itapema', 24, 'SC'),
(4540, 'Itapiranga', 24, 'SC'),
(4541, 'Itapoá', 24, 'SC'),
(4542, 'Ituporanga', 24, 'SC'),
(4543, 'Jaborá', 24, 'SC'),
(4544, 'Jacinto Machado', 24, 'SC'),
(4545, 'Jaguaruna', 24, 'SC'),
(4546, 'Jaraguá do Sul', 24, 'SC'),
(4547, 'Jardinópolis', 24, 'SC'),
(4548, 'Joaçaba', 24, 'SC'),
(4549, 'Joinville', 24, 'SC'),
(4550, 'José Boiteux', 24, 'SC'),
(4551, 'Jupiá', 24, 'SC'),
(4552, 'Lacerdópolis', 24, 'SC'),
(4553, 'Lages', 24, 'SC'),
(4554, 'Laguna', 24, 'SC'),
(4555, 'Lajeado Grande', 24, 'SC'),
(4556, 'Laurentino', 24, 'SC'),
(4557, 'Lauro Muller', 24, 'SC'),
(4558, 'Lebon Régis', 24, 'SC'),
(4559, 'Leoberto Leal', 24, 'SC'),
(4560, 'Lindóia do Sul', 24, 'SC'),
(4561, 'Lontras', 24, 'SC'),
(4562, 'Luiz Alves', 24, 'SC'),
(4563, 'Luzerna', 24, 'SC'),
(4564, 'Macieira', 24, 'SC'),
(4565, 'Mafra', 24, 'SC'),
(4566, 'Major Gercino', 24, 'SC'),
(4567, 'Major Vieira', 24, 'SC'),
(4568, 'Maracajá', 24, 'SC'),
(4569, 'Maravilha', 24, 'SC'),
(4570, 'Marema', 24, 'SC'),
(4571, 'Massaranduba', 24, 'SC'),
(4572, 'Matos Costa', 24, 'SC'),
(4573, 'Meleiro', 24, 'SC'),
(4574, 'Mirim Doce', 24, 'SC'),
(4575, 'Modelo', 24, 'SC'),
(4576, 'Mondaí', 24, 'SC'),
(4577, 'Monte Carlo', 24, 'SC'),
(4578, 'Monte Castelo', 24, 'SC'),
(4579, 'Morro da Fumaça', 24, 'SC'),
(4580, 'Morro Grande', 24, 'SC'),
(4581, 'Navegantes', 24, 'SC'),
(4582, 'Nova Erechim', 24, 'SC'),
(4583, 'Nova Itaberaba', 24, 'SC'),
(4584, 'Nova Trento', 24, 'SC'),
(4585, 'Nova Veneza', 24, 'SC'),
(4586, 'Novo Horizonte', 24, 'SC'),
(4587, 'Orleans', 24, 'SC'),
(4588, 'Otacílio Costa', 24, 'SC'),
(4589, 'Ouro', 24, 'SC'),
(4590, 'Ouro Verde', 24, 'SC'),
(4591, 'Paial', 24, 'SC'),
(4592, 'Painel', 24, 'SC'),
(4593, 'Palhoça', 24, 'SC'),
(4594, 'Palma Sola', 24, 'SC'),
(4595, 'Palmeira', 24, 'SC'),
(4596, 'Palmitos', 24, 'SC'),
(4597, 'Papanduva', 24, 'SC'),
(4598, 'Paraíso', 24, 'SC'),
(4599, 'Passo de Torres', 24, 'SC'),
(4600, 'Passos Maia', 24, 'SC'),
(4601, 'Paulo Lopes', 24, 'SC'),
(4602, 'Pedras Grandes', 24, 'SC'),
(4603, 'Penha', 24, 'SC'),
(4604, 'Peritiba', 24, 'SC'),
(4605, 'Petrolândia', 24, 'SC'),
(4606, 'Piçarras', 24, 'SC'),
(4607, 'Pinhalzinho', 24, 'SC'),
(4608, 'Pinheiro Preto', 24, 'SC'),
(4609, 'Piratuba', 24, 'SC'),
(4610, 'Planalto Alegre', 24, 'SC'),
(4611, 'Pomerode', 24, 'SC'),
(4612, 'Ponte Alta', 24, 'SC'),
(4613, 'Ponte Alta do Norte', 24, 'SC'),
(4614, 'Ponte Serrada', 24, 'SC'),
(4615, 'Porto Belo', 24, 'SC'),
(4616, 'Porto União', 24, 'SC'),
(4617, 'Pouso Redondo', 24, 'SC'),
(4618, 'Praia Grande', 24, 'SC'),
(4619, 'Presidente Castelo Branco', 24, 'SC'),
(4620, 'Presidente Getúlio', 24, 'SC'),
(4621, 'Presidente Nereu', 24, 'SC'),
(4622, 'Princesa', 24, 'SC'),
(4623, 'Quilombo', 24, 'SC'),
(4624, 'Rancho Queimado', 24, 'SC'),
(4625, 'Rio das Antas', 24, 'SC'),
(4626, 'Rio do Campo', 24, 'SC'),
(4627, 'Rio do Oeste', 24, 'SC'),
(4628, 'Rio do Sul', 24, 'SC'),
(4629, 'Rio dos Cedros', 24, 'SC'),
(4630, 'Rio Fortuna', 24, 'SC'),
(4631, 'Rio Negrinho', 24, 'SC'),
(4632, 'Rio Rufino', 24, 'SC'),
(4633, 'Riqueza', 24, 'SC'),
(4634, 'Rodeio', 24, 'SC'),
(4635, 'Romelândia', 24, 'SC'),
(4636, 'Salete', 24, 'SC'),
(4637, 'Saltinho', 24, 'SC'),
(4638, 'Salto Veloso', 24, 'SC'),
(4639, 'Sangão', 24, 'SC'),
(4640, 'Santa Cecília', 24, 'SC'),
(4641, 'Santa Helena', 24, 'SC'),
(4642, 'Santa Rosa de Lima', 24, 'SC'),
(4643, 'Santa Rosa do Sul', 24, 'SC'),
(4644, 'Santa Terezinha', 24, 'SC'),
(4645, 'Santa Terezinha do Progresso', 24, 'SC'),
(4646, 'Santiago do Sul', 24, 'SC'),
(4647, 'Santo Amaro da Imperatriz', 24, 'SC'),
(4648, 'São Bento do Sul', 24, 'SC'),
(4649, 'São Bernardino', 24, 'SC'),
(4650, 'São Bonifácio', 24, 'SC'),
(4651, 'São Carlos', 24, 'SC'),
(4652, 'São Cristovão do Sul', 24, 'SC'),
(4653, 'São Domingos', 24, 'SC'),
(4654, 'São Francisco do Sul', 24, 'SC'),
(4655, 'São João Batista', 24, 'SC'),
(4656, 'São João do Itaperiú', 24, 'SC'),
(4657, 'São João do Oeste', 24, 'SC'),
(4658, 'São João do Sul', 24, 'SC'),
(4659, 'São Joaquim', 24, 'SC'),
(4660, 'São José', 24, 'SC'),
(4661, 'São José do Cedro', 24, 'SC'),
(4662, 'São José do Cerrito', 24, 'SC'),
(4663, 'São Lourenço do Oeste', 24, 'SC'),
(4664, 'São Ludgero', 24, 'SC'),
(4665, 'São Martinho', 24, 'SC'),
(4666, 'São Miguel da Boa Vista', 24, 'SC'),
(4667, 'São Miguel do Oeste', 24, 'SC'),
(4668, 'São Pedro de Alcântara', 24, 'SC'),
(4669, 'Saudades', 24, 'SC'),
(4670, 'Schroeder', 24, 'SC'),
(4671, 'Seara', 24, 'SC'),
(4672, 'Serra Alta', 24, 'SC'),
(4673, 'Siderópolis', 24, 'SC'),
(4674, 'Sombrio', 24, 'SC'),
(4675, 'Sul Brasil', 24, 'SC'),
(4676, 'Taió', 24, 'SC'),
(4677, 'Tangará', 24, 'SC'),
(4678, 'Tigrinhos', 24, 'SC'),
(4679, 'Tijucas', 24, 'SC'),
(4680, 'Timbé do Sul', 24, 'SC'),
(4681, 'Timbó', 24, 'SC'),
(4682, 'Timbó Grande', 24, 'SC'),
(4683, 'Três Barras', 24, 'SC'),
(4684, 'Treviso', 24, 'SC'),
(4685, 'Treze de Maio', 24, 'SC'),
(4686, 'Treze Tílias', 24, 'SC'),
(4687, 'Trombudo Central', 24, 'SC'),
(4688, 'Tubarão', 24, 'SC'),
(4689, 'Tunápolis', 24, 'SC'),
(4690, 'Turvo', 24, 'SC'),
(4691, 'União do Oeste', 24, 'SC'),
(4692, 'Urubici', 24, 'SC'),
(4693, 'Urupema', 24, 'SC'),
(4694, 'Urussanga', 24, 'SC'),
(4695, 'Vargeão', 24, 'SC'),
(4696, 'Vargem', 24, 'SC'),
(4697, 'Vargem Bonita', 24, 'SC'),
(4698, 'Vidal Ramos', 24, 'SC'),
(4699, 'Videira', 24, 'SC'),
(4700, 'Vitor Meireles', 24, 'SC'),
(4701, 'Witmarsum', 24, 'SC'),
(4702, 'Xanxerê', 24, 'SC'),
(4703, 'Xavantina', 24, 'SC'),
(4704, 'Xaxim', 24, 'SC'),
(4705, 'Zortéa', 24, 'SC'),
(4706, 'Adamantina', 26, 'SP'),
(4707, 'Adolfo', 26, 'SP'),
(4708, 'Aguaí', 26, 'SP'),
(4709, 'Águas da Prata', 26, 'SP'),
(4710, 'Águas de Lindóia', 26, 'SP'),
(4711, 'Águas de Santa Bárbara', 26, 'SP'),
(4712, 'Águas de São Pedro', 26, 'SP'),
(4713, 'Agudos', 26, 'SP'),
(4714, 'Alambari', 26, 'SP'),
(4715, 'Alfredo Marcondes', 26, 'SP'),
(4716, 'Altair', 26, 'SP'),
(4717, 'Altinópolis', 26, 'SP'),
(4718, 'Alto Alegre', 26, 'SP'),
(4719, 'Alumínio', 26, 'SP'),
(4720, 'Álvares Florence', 26, 'SP'),
(4721, 'Álvares Machado', 26, 'SP'),
(4722, 'Álvaro de Carvalho', 26, 'SP'),
(4723, 'Alvinlândia', 26, 'SP'),
(4724, 'Americana', 26, 'SP'),
(4725, 'Américo Brasiliense', 26, 'SP'),
(4726, 'Américo de Campos', 26, 'SP'),
(4727, 'Amparo', 26, 'SP'),
(4728, 'Analândia', 26, 'SP'),
(4729, 'Andradina', 26, 'SP'),
(4730, 'Angatuba', 26, 'SP'),
(4731, 'Anhembi', 26, 'SP'),
(4732, 'Anhumas', 26, 'SP'),
(4733, 'Aparecida', 26, 'SP'),
(4734, 'Aparecida d`Oeste', 26, 'SP'),
(4735, 'Apiaí', 26, 'SP'),
(4736, 'Araçariguama', 26, 'SP'),
(4737, 'Araçatuba', 26, 'SP'),
(4738, 'Araçoiaba da Serra', 26, 'SP'),
(4739, 'Aramina', 26, 'SP'),
(4740, 'Arandu', 26, 'SP'),
(4741, 'Arapeí', 26, 'SP'),
(4742, 'Araraquara', 26, 'SP'),
(4743, 'Araras', 26, 'SP'),
(4744, 'Arco-Íris', 26, 'SP'),
(4745, 'Arealva', 26, 'SP'),
(4746, 'Areias', 26, 'SP'),
(4747, 'Areiópolis', 26, 'SP'),
(4748, 'Ariranha', 26, 'SP'),
(4749, 'Artur Nogueira', 26, 'SP'),
(4750, 'Arujá', 26, 'SP'),
(4751, 'Aspásia', 26, 'SP'),
(4752, 'Assis', 26, 'SP'),
(4753, 'Atibaia', 26, 'SP'),
(4754, 'Auriflama', 26, 'SP'),
(4755, 'Avaí', 26, 'SP'),
(4756, 'Avanhandava', 26, 'SP'),
(4757, 'Avaré', 26, 'SP'),
(4758, 'Bady Bassitt', 26, 'SP'),
(4759, 'Balbinos', 26, 'SP'),
(4760, 'Bálsamo', 26, 'SP'),
(4761, 'Bananal', 26, 'SP'),
(4762, 'Barão de Antonina', 26, 'SP'),
(4763, 'Barbosa', 26, 'SP'),
(4764, 'Bariri', 26, 'SP'),
(4765, 'Barra Bonita', 26, 'SP'),
(4766, 'Barra do Chapéu', 26, 'SP'),
(4767, 'Barra do Turvo', 26, 'SP'),
(4768, 'Barretos', 26, 'SP'),
(4769, 'Barrinha', 26, 'SP'),
(4770, 'Barueri', 26, 'SP'),
(4771, 'Bastos', 26, 'SP'),
(4772, 'Batatais', 26, 'SP'),
(4773, 'Bauru', 26, 'SP'),
(4774, 'Bebedouro', 26, 'SP'),
(4775, 'Bento de Abreu', 26, 'SP'),
(4776, 'Bernardino de Campos', 26, 'SP'),
(4777, 'Bertioga', 26, 'SP'),
(4778, 'Bilac', 26, 'SP'),
(4779, 'Birigui', 26, 'SP'),
(4780, 'Biritiba-Mirim', 26, 'SP'),
(4781, 'Boa Esperança do Sul', 26, 'SP'),
(4782, 'Bocaina', 26, 'SP'),
(4783, 'Bofete', 26, 'SP'),
(4784, 'Boituva', 26, 'SP'),
(4785, 'Bom Jesus dos Perdões', 26, 'SP'),
(4786, 'Bom Sucesso de Itararé', 26, 'SP'),
(4787, 'Borá', 26, 'SP'),
(4788, 'Boracéia', 26, 'SP'),
(4789, 'Borborema', 26, 'SP'),
(4790, 'Borebi', 26, 'SP'),
(4791, 'Botucatu', 26, 'SP'),
(4792, 'Bragança Paulista', 26, 'SP'),
(4793, 'Braúna', 26, 'SP'),
(4794, 'Brejo Alegre', 26, 'SP'),
(4795, 'Brodowski', 26, 'SP'),
(4796, 'Brotas', 26, 'SP'),
(4797, 'Buri', 26, 'SP'),
(4798, 'Buritama', 26, 'SP'),
(4799, 'Buritizal', 26, 'SP'),
(4800, 'Cabrália Paulista', 26, 'SP'),
(4801, 'Cabreúva', 26, 'SP'),
(4802, 'Caçapava', 26, 'SP'),
(4803, 'Cachoeira Paulista', 26, 'SP'),
(4804, 'Caconde', 26, 'SP');
INSERT INTO `cidade` (`id`, `nome`, `estado`, `uf`) VALUES
(4805, 'Cafelândia', 26, 'SP'),
(4806, 'Caiabu', 26, 'SP'),
(4807, 'Caieiras', 26, 'SP'),
(4808, 'Caiuá', 26, 'SP'),
(4809, 'Cajamar', 26, 'SP'),
(4810, 'Cajati', 26, 'SP'),
(4811, 'Cajobi', 26, 'SP'),
(4812, 'Cajuru', 26, 'SP'),
(4813, 'Campina do Monte Alegre', 26, 'SP'),
(4814, 'Campinas', 26, 'SP'),
(4815, 'Campo Limpo Paulista', 26, 'SP'),
(4816, 'Campos do Jordão', 26, 'SP'),
(4817, 'Campos Novos Paulista', 26, 'SP'),
(4818, 'Cananéia', 26, 'SP'),
(4819, 'Canas', 26, 'SP'),
(4820, 'Cândido Mota', 26, 'SP'),
(4821, 'Cândido Rodrigues', 26, 'SP'),
(4822, 'Canitar', 26, 'SP'),
(4823, 'Capão Bonito', 26, 'SP'),
(4824, 'Capela do Alto', 26, 'SP'),
(4825, 'Capivari', 26, 'SP'),
(4826, 'Caraguatatuba', 26, 'SP'),
(4827, 'Carapicuíba', 26, 'SP'),
(4828, 'Cardoso', 26, 'SP'),
(4829, 'Casa Branca', 26, 'SP'),
(4830, 'Cássia dos Coqueiros', 26, 'SP'),
(4831, 'Castilho', 26, 'SP'),
(4832, 'Catanduva', 26, 'SP'),
(4833, 'Catiguá', 26, 'SP'),
(4834, 'Cedral', 26, 'SP'),
(4835, 'Cerqueira César', 26, 'SP'),
(4836, 'Cerquilho', 26, 'SP'),
(4837, 'Cesário Lange', 26, 'SP'),
(4838, 'Charqueada', 26, 'SP'),
(4839, 'Chavantes', 26, 'SP'),
(4840, 'Clementina', 26, 'SP'),
(4841, 'Colina', 26, 'SP'),
(4842, 'Colômbia', 26, 'SP'),
(4843, 'Conchal', 26, 'SP'),
(4844, 'Conchas', 26, 'SP'),
(4845, 'Cordeirópolis', 26, 'SP'),
(4846, 'Coroados', 26, 'SP'),
(4847, 'Coronel Macedo', 26, 'SP'),
(4848, 'Corumbataí', 26, 'SP'),
(4849, 'Cosmópolis', 26, 'SP'),
(4850, 'Cosmorama', 26, 'SP'),
(4851, 'Cotia', 26, 'SP'),
(4852, 'Cravinhos', 26, 'SP'),
(4853, 'Cristais Paulista', 26, 'SP'),
(4854, 'Cruzália', 26, 'SP'),
(4855, 'Cruzeiro', 26, 'SP'),
(4856, 'Cubatão', 26, 'SP'),
(4857, 'Cunha', 26, 'SP'),
(4858, 'Descalvado', 26, 'SP'),
(4859, 'Diadema', 26, 'SP'),
(4860, 'Dirce Reis', 26, 'SP'),
(4861, 'Divinolândia', 26, 'SP'),
(4862, 'Dobrada', 26, 'SP'),
(4863, 'Dois Córregos', 26, 'SP'),
(4864, 'Dolcinópolis', 26, 'SP'),
(4865, 'Dourado', 26, 'SP'),
(4866, 'Dracena', 26, 'SP'),
(4867, 'Duartina', 26, 'SP'),
(4868, 'Dumont', 26, 'SP'),
(4869, 'Echaporã', 26, 'SP'),
(4870, 'Eldorado', 26, 'SP'),
(4871, 'Elias Fausto', 26, 'SP'),
(4872, 'Elisiário', 26, 'SP'),
(4873, 'Embaúba', 26, 'SP'),
(4874, 'Embu', 26, 'SP'),
(4875, 'Embu-Guaçu', 26, 'SP'),
(4876, 'Emilianópolis', 26, 'SP'),
(4877, 'Engenheiro Coelho', 26, 'SP'),
(4878, 'Espírito Santo do Pinhal', 26, 'SP'),
(4879, 'Espírito Santo do Turvo', 26, 'SP'),
(4880, 'Estiva Gerbi', 26, 'SP'),
(4881, 'Estrela d`Oeste', 26, 'SP'),
(4882, 'Estrela do Norte', 26, 'SP'),
(4883, 'Euclides da Cunha Paulista', 26, 'SP'),
(4884, 'Fartura', 26, 'SP'),
(4885, 'Fernando Prestes', 26, 'SP'),
(4886, 'Fernandópolis', 26, 'SP'),
(4887, 'Fernão', 26, 'SP'),
(4888, 'Ferraz de Vasconcelos', 26, 'SP'),
(4889, 'Flora Rica', 26, 'SP'),
(4890, 'Floreal', 26, 'SP'),
(4891, 'Flórida Paulista', 26, 'SP'),
(4892, 'Florínia', 26, 'SP'),
(4893, 'Franca', 26, 'SP'),
(4894, 'Francisco Morato', 26, 'SP'),
(4895, 'Franco da Rocha', 26, 'SP'),
(4896, 'Gabriel Monteiro', 26, 'SP'),
(4897, 'Gália', 26, 'SP'),
(4898, 'Garça', 26, 'SP'),
(4899, 'Gastão Vidigal', 26, 'SP'),
(4900, 'Gavião Peixoto', 26, 'SP'),
(4901, 'General Salgado', 26, 'SP'),
(4902, 'Getulina', 26, 'SP'),
(4903, 'Glicério', 26, 'SP'),
(4904, 'Guaiçara', 26, 'SP'),
(4905, 'Guaimbê', 26, 'SP'),
(4906, 'Guaíra', 26, 'SP'),
(4907, 'Guapiaçu', 26, 'SP'),
(4908, 'Guapiara', 26, 'SP'),
(4909, 'Guará', 26, 'SP'),
(4910, 'Guaraçaí', 26, 'SP'),
(4911, 'Guaraci', 26, 'SP'),
(4912, 'Guarani d`Oeste', 26, 'SP'),
(4913, 'Guarantã', 26, 'SP'),
(4914, 'Guararapes', 26, 'SP'),
(4915, 'Guararema', 26, 'SP'),
(4916, 'Guaratinguetá', 26, 'SP'),
(4917, 'Guareí', 26, 'SP'),
(4918, 'Guariba', 26, 'SP'),
(4919, 'Guarujá', 26, 'SP'),
(4920, 'Guarulhos', 26, 'SP'),
(4921, 'Guatapará', 26, 'SP'),
(4922, 'Guzolândia', 26, 'SP'),
(4923, 'Herculândia', 26, 'SP'),
(4924, 'Holambra', 26, 'SP'),
(4925, 'Hortolândia', 26, 'SP'),
(4926, 'Iacanga', 26, 'SP'),
(4927, 'Iacri', 26, 'SP'),
(4928, 'Iaras', 26, 'SP'),
(4929, 'Ibaté', 26, 'SP'),
(4930, 'Ibirá', 26, 'SP'),
(4931, 'Ibirarema', 26, 'SP'),
(4932, 'Ibitinga', 26, 'SP'),
(4933, 'Ibiúna', 26, 'SP'),
(4934, 'Icém', 26, 'SP'),
(4935, 'Iepê', 26, 'SP'),
(4936, 'Igaraçu do Tietê', 26, 'SP'),
(4937, 'Igarapava', 26, 'SP'),
(4938, 'Igaratá', 26, 'SP'),
(4939, 'Iguape', 26, 'SP'),
(4940, 'Ilha Comprida', 26, 'SP'),
(4941, 'Ilha Solteira', 26, 'SP'),
(4942, 'Ilhabela', 26, 'SP'),
(4943, 'Indaiatuba', 26, 'SP'),
(4944, 'Indiana', 26, 'SP'),
(4945, 'Indiaporã', 26, 'SP'),
(4946, 'Inúbia Paulista', 26, 'SP'),
(4947, 'Ipaussu', 26, 'SP'),
(4948, 'Iperó', 26, 'SP'),
(4949, 'Ipeúna', 26, 'SP'),
(4950, 'Ipiguá', 26, 'SP'),
(4951, 'Iporanga', 26, 'SP'),
(4952, 'Ipuã', 26, 'SP'),
(4953, 'Iracemápolis', 26, 'SP'),
(4954, 'Irapuã', 26, 'SP'),
(4955, 'Irapuru', 26, 'SP'),
(4956, 'Itaberá', 26, 'SP'),
(4957, 'Itaí', 26, 'SP'),
(4958, 'Itajobi', 26, 'SP'),
(4959, 'Itaju', 26, 'SP'),
(4960, 'Itanhaém', 26, 'SP'),
(4961, 'Itaóca', 26, 'SP'),
(4962, 'Itapecerica da Serra', 26, 'SP'),
(4963, 'Itapetininga', 26, 'SP'),
(4964, 'Itapeva', 26, 'SP'),
(4965, 'Itapevi', 26, 'SP'),
(4966, 'Itapira', 26, 'SP'),
(4967, 'Itapirapuã Paulista', 26, 'SP'),
(4968, 'Itápolis', 26, 'SP'),
(4969, 'Itaporanga', 26, 'SP'),
(4970, 'Itapuí', 26, 'SP'),
(4971, 'Itapura', 26, 'SP'),
(4972, 'Itaquaquecetuba', 26, 'SP'),
(4973, 'Itararé', 26, 'SP'),
(4974, 'Itariri', 26, 'SP'),
(4975, 'Itatiba', 26, 'SP'),
(4976, 'Itatinga', 26, 'SP'),
(4977, 'Itirapina', 26, 'SP'),
(4978, 'Itirapuã', 26, 'SP'),
(4979, 'Itobi', 26, 'SP'),
(4980, 'Itu', 26, 'SP'),
(4981, 'Itupeva', 26, 'SP'),
(4982, 'Ituverava', 26, 'SP'),
(4983, 'Jaborandi', 26, 'SP'),
(4984, 'Jaboticabal', 26, 'SP'),
(4985, 'Jacareí', 26, 'SP'),
(4986, 'Jaci', 26, 'SP'),
(4987, 'Jacupiranga', 26, 'SP'),
(4988, 'Jaguariúna', 26, 'SP'),
(4989, 'Jales', 26, 'SP'),
(4990, 'Jambeiro', 26, 'SP'),
(4991, 'Jandira', 26, 'SP'),
(4992, 'Jardinópolis', 26, 'SP'),
(4993, 'Jarinu', 26, 'SP'),
(4994, 'Jaú', 26, 'SP'),
(4995, 'Jeriquara', 26, 'SP'),
(4996, 'Joanópolis', 26, 'SP'),
(4997, 'João Ramalho', 26, 'SP'),
(4998, 'José Bonifácio', 26, 'SP'),
(4999, 'Júlio Mesquita', 26, 'SP'),
(5000, 'Jumirim', 26, 'SP'),
(5001, 'Jundiaí', 26, 'SP'),
(5002, 'Junqueirópolis', 26, 'SP'),
(5003, 'Juquiá', 26, 'SP'),
(5004, 'Juquitiba', 26, 'SP'),
(5005, 'Lagoinha', 26, 'SP'),
(5006, 'Laranjal Paulista', 26, 'SP'),
(5007, 'Lavínia', 26, 'SP'),
(5008, 'Lavrinhas', 26, 'SP'),
(5009, 'Leme', 26, 'SP'),
(5010, 'Lençóis Paulista', 26, 'SP'),
(5011, 'Limeira', 26, 'SP'),
(5012, 'Lindóia', 26, 'SP'),
(5013, 'Lins', 26, 'SP'),
(5014, 'Lorena', 26, 'SP'),
(5015, 'Lourdes', 26, 'SP'),
(5016, 'Louveira', 26, 'SP'),
(5017, 'Lucélia', 26, 'SP'),
(5018, 'Lucianópolis', 26, 'SP'),
(5019, 'Luís Antônio', 26, 'SP'),
(5020, 'Luiziânia', 26, 'SP'),
(5021, 'Lupércio', 26, 'SP'),
(5022, 'Lutécia', 26, 'SP'),
(5023, 'Macatuba', 26, 'SP'),
(5024, 'Macaubal', 26, 'SP'),
(5025, 'Macedônia', 26, 'SP'),
(5026, 'Magda', 26, 'SP'),
(5027, 'Mairinque', 26, 'SP'),
(5028, 'Mairiporã', 26, 'SP'),
(5029, 'Manduri', 26, 'SP'),
(5030, 'Marabá Paulista', 26, 'SP'),
(5031, 'Maracaí', 26, 'SP'),
(5032, 'Marapoama', 26, 'SP'),
(5033, 'Mariápolis', 26, 'SP'),
(5034, 'Marília', 26, 'SP'),
(5035, 'Marinópolis', 26, 'SP'),
(5036, 'Martinópolis', 26, 'SP'),
(5037, 'Matão', 26, 'SP'),
(5038, 'Mauá', 26, 'SP'),
(5039, 'Mendonça', 26, 'SP'),
(5040, 'Meridiano', 26, 'SP'),
(5041, 'Mesópolis', 26, 'SP'),
(5042, 'Miguelópolis', 26, 'SP'),
(5043, 'Mineiros do Tietê', 26, 'SP'),
(5044, 'Mira Estrela', 26, 'SP'),
(5045, 'Miracatu', 26, 'SP'),
(5046, 'Mirandópolis', 26, 'SP'),
(5047, 'Mirante do Paranapanema', 26, 'SP'),
(5048, 'Mirassol', 26, 'SP'),
(5049, 'Mirassolândia', 26, 'SP'),
(5050, 'Mococa', 26, 'SP'),
(5051, 'Mogi das Cruzes', 26, 'SP'),
(5052, 'Mogi Guaçu', 26, 'SP'),
(5053, 'Moji Mirim', 26, 'SP'),
(5054, 'Mombuca', 26, 'SP'),
(5055, 'Monções', 26, 'SP'),
(5056, 'Mongaguá', 26, 'SP'),
(5057, 'Monte Alegre do Sul', 26, 'SP'),
(5058, 'Monte Alto', 26, 'SP'),
(5059, 'Monte Aprazível', 26, 'SP'),
(5060, 'Monte Azul Paulista', 26, 'SP'),
(5061, 'Monte Castelo', 26, 'SP'),
(5062, 'Monte Mor', 26, 'SP'),
(5063, 'Monteiro Lobato', 26, 'SP'),
(5064, 'Morro Agudo', 26, 'SP'),
(5065, 'Morungaba', 26, 'SP'),
(5066, 'Motuca', 26, 'SP'),
(5067, 'Murutinga do Sul', 26, 'SP'),
(5068, 'Nantes', 26, 'SP'),
(5069, 'Narandiba', 26, 'SP'),
(5070, 'Natividade da Serra', 26, 'SP'),
(5071, 'Nazaré Paulista', 26, 'SP'),
(5072, 'Neves Paulista', 26, 'SP'),
(5073, 'Nhandeara', 26, 'SP'),
(5074, 'Nipoã', 26, 'SP'),
(5075, 'Nova Aliança', 26, 'SP'),
(5076, 'Nova Campina', 26, 'SP'),
(5077, 'Nova Canaã Paulista', 26, 'SP'),
(5078, 'Nova Castilho', 26, 'SP'),
(5079, 'Nova Europa', 26, 'SP'),
(5080, 'Nova Granada', 26, 'SP'),
(5081, 'Nova Guataporanga', 26, 'SP'),
(5082, 'Nova Independência', 26, 'SP'),
(5083, 'Nova Luzitânia', 26, 'SP'),
(5084, 'Nova Odessa', 26, 'SP'),
(5085, 'Novais', 26, 'SP'),
(5086, 'Novo Horizonte', 26, 'SP'),
(5087, 'Nuporanga', 26, 'SP'),
(5088, 'Ocauçu', 26, 'SP'),
(5089, 'Óleo', 26, 'SP'),
(5090, 'Olímpia', 26, 'SP'),
(5091, 'Onda Verde', 26, 'SP'),
(5092, 'Oriente', 26, 'SP'),
(5093, 'Orindiúva', 26, 'SP'),
(5094, 'Orlândia', 26, 'SP'),
(5095, 'Osasco', 26, 'SP'),
(5096, 'Oscar Bressane', 26, 'SP'),
(5097, 'Osvaldo Cruz', 26, 'SP'),
(5098, 'Ourinhos', 26, 'SP'),
(5099, 'Ouro Verde', 26, 'SP'),
(5100, 'Ouroeste', 26, 'SP'),
(5101, 'Pacaembu', 26, 'SP'),
(5102, 'Palestina', 26, 'SP'),
(5103, 'Palmares Paulista', 26, 'SP'),
(5104, 'Palmeira d`Oeste', 26, 'SP'),
(5105, 'Palmital', 26, 'SP'),
(5106, 'Panorama', 26, 'SP'),
(5107, 'Paraguaçu Paulista', 26, 'SP'),
(5108, 'Paraibuna', 26, 'SP'),
(5109, 'Paraíso', 26, 'SP'),
(5110, 'Paranapanema', 26, 'SP'),
(5111, 'Paranapuã', 26, 'SP'),
(5112, 'Parapuã', 26, 'SP'),
(5113, 'Pardinho', 26, 'SP'),
(5114, 'Pariquera-Açu', 26, 'SP'),
(5115, 'Parisi', 26, 'SP'),
(5116, 'Patrocínio Paulista', 26, 'SP'),
(5117, 'Paulicéia', 26, 'SP'),
(5118, 'Paulínia', 26, 'SP'),
(5119, 'Paulistânia', 26, 'SP'),
(5120, 'Paulo de Faria', 26, 'SP'),
(5121, 'Pederneiras', 26, 'SP'),
(5122, 'Pedra Bela', 26, 'SP'),
(5123, 'Pedranópolis', 26, 'SP'),
(5124, 'Pedregulho', 26, 'SP'),
(5125, 'Pedreira', 26, 'SP'),
(5126, 'Pedrinhas Paulista', 26, 'SP'),
(5127, 'Pedro de Toledo', 26, 'SP'),
(5128, 'Penápolis', 26, 'SP'),
(5129, 'Pereira Barreto', 26, 'SP'),
(5130, 'Pereiras', 26, 'SP'),
(5131, 'Peruíbe', 26, 'SP'),
(5132, 'Piacatu', 26, 'SP'),
(5133, 'Piedade', 26, 'SP'),
(5134, 'Pilar do Sul', 26, 'SP'),
(5135, 'Pindamonhangaba', 26, 'SP'),
(5136, 'Pindorama', 26, 'SP'),
(5137, 'Pinhalzinho', 26, 'SP'),
(5138, 'Piquerobi', 26, 'SP'),
(5139, 'Piquete', 26, 'SP'),
(5140, 'Piracaia', 26, 'SP'),
(5141, 'Piracicaba', 26, 'SP'),
(5142, 'Piraju', 26, 'SP'),
(5143, 'Pirajuí', 26, 'SP'),
(5144, 'Pirangi', 26, 'SP'),
(5145, 'Pirapora do Bom Jesus', 26, 'SP'),
(5146, 'Pirapozinho', 26, 'SP'),
(5147, 'Pirassununga', 26, 'SP'),
(5148, 'Piratininga', 26, 'SP'),
(5149, 'Pitangueiras', 26, 'SP'),
(5150, 'Planalto', 26, 'SP'),
(5151, 'Platina', 26, 'SP'),
(5152, 'Poá', 26, 'SP'),
(5153, 'Poloni', 26, 'SP'),
(5154, 'Pompéia', 26, 'SP'),
(5155, 'Pongaí', 26, 'SP'),
(5156, 'Pontal', 26, 'SP'),
(5157, 'Pontalinda', 26, 'SP'),
(5158, 'Pontes Gestal', 26, 'SP'),
(5159, 'Populina', 26, 'SP'),
(5160, 'Porangaba', 26, 'SP'),
(5161, 'Porto Feliz', 26, 'SP'),
(5162, 'Porto Ferreira', 26, 'SP'),
(5163, 'Potim', 26, 'SP'),
(5164, 'Potirendaba', 26, 'SP'),
(5165, 'Pracinha', 26, 'SP'),
(5166, 'Pradópolis', 26, 'SP'),
(5167, 'Praia Grande', 26, 'SP'),
(5168, 'Pratânia', 26, 'SP'),
(5169, 'Presidente Alves', 26, 'SP'),
(5170, 'Presidente Bernardes', 26, 'SP'),
(5171, 'Presidente Epitácio', 26, 'SP'),
(5172, 'Presidente Prudente', 26, 'SP'),
(5173, 'Presidente Venceslau', 26, 'SP'),
(5174, 'Promissão', 26, 'SP'),
(5175, 'Quadra', 26, 'SP'),
(5176, 'Quatá', 26, 'SP'),
(5177, 'Queiroz', 26, 'SP'),
(5178, 'Queluz', 26, 'SP'),
(5179, 'Quintana', 26, 'SP'),
(5180, 'Rafard', 26, 'SP'),
(5181, 'Rancharia', 26, 'SP'),
(5182, 'Redenção da Serra', 26, 'SP'),
(5183, 'Regente Feijó', 26, 'SP'),
(5184, 'Reginópolis', 26, 'SP'),
(5185, 'Registro', 26, 'SP'),
(5186, 'Restinga', 26, 'SP'),
(5187, 'Ribeira', 26, 'SP'),
(5188, 'Ribeirão Bonito', 26, 'SP'),
(5189, 'Ribeirão Branco', 26, 'SP'),
(5190, 'Ribeirão Corrente', 26, 'SP'),
(5191, 'Ribeirão do Sul', 26, 'SP'),
(5192, 'Ribeirão dos Índios', 26, 'SP'),
(5193, 'Ribeirão Grande', 26, 'SP'),
(5194, 'Ribeirão Pires', 26, 'SP'),
(5195, 'Ribeirão Preto', 26, 'SP'),
(5196, 'Rifaina', 26, 'SP'),
(5197, 'Rincão', 26, 'SP'),
(5198, 'Rinópolis', 26, 'SP'),
(5199, 'Rio Claro', 26, 'SP'),
(5200, 'Rio das Pedras', 26, 'SP'),
(5201, 'Rio Grande da Serra', 26, 'SP'),
(5202, 'Riolândia', 26, 'SP'),
(5203, 'Riversul', 26, 'SP'),
(5204, 'Rosana', 26, 'SP'),
(5205, 'Roseira', 26, 'SP'),
(5206, 'Rubiácea', 26, 'SP'),
(5207, 'Rubinéia', 26, 'SP'),
(5208, 'Sabino', 26, 'SP'),
(5209, 'Sagres', 26, 'SP'),
(5210, 'Sales', 26, 'SP'),
(5211, 'Sales Oliveira', 26, 'SP'),
(5212, 'Salesópolis', 26, 'SP'),
(5213, 'Salmourão', 26, 'SP'),
(5214, 'Saltinho', 26, 'SP'),
(5215, 'Salto', 26, 'SP'),
(5216, 'Salto de Pirapora', 26, 'SP'),
(5217, 'Salto Grande', 26, 'SP'),
(5218, 'Sandovalina', 26, 'SP'),
(5219, 'Santa Adélia', 26, 'SP'),
(5220, 'Santa Albertina', 26, 'SP'),
(5221, 'Santa Bárbara d`Oeste', 26, 'SP'),
(5222, 'Santa Branca', 26, 'SP'),
(5223, 'Santa Clara d`Oeste', 26, 'SP'),
(5224, 'Santa Cruz da Conceição', 26, 'SP'),
(5225, 'Santa Cruz da Esperança', 26, 'SP'),
(5226, 'Santa Cruz das Palmeiras', 26, 'SP'),
(5227, 'Santa Cruz do Rio Pardo', 26, 'SP'),
(5228, 'Santa Ernestina', 26, 'SP'),
(5229, 'Santa Fé do Sul', 26, 'SP'),
(5230, 'Santa Gertrudes', 26, 'SP'),
(5231, 'Santa Isabel', 26, 'SP'),
(5232, 'Santa Lúcia', 26, 'SP'),
(5233, 'Santa Maria da Serra', 26, 'SP'),
(5234, 'Santa Mercedes', 26, 'SP'),
(5235, 'Santa Rita d`Oeste', 26, 'SP'),
(5236, 'Santa Rita do Passa Quatro', 26, 'SP'),
(5237, 'Santa Rosa de Viterbo', 26, 'SP'),
(5238, 'Santa Salete', 26, 'SP'),
(5239, 'Santana da Ponte Pensa', 26, 'SP'),
(5240, 'Santana de Parnaíba', 26, 'SP'),
(5241, 'Santo Anastácio', 26, 'SP'),
(5242, 'Santo André', 26, 'SP'),
(5243, 'Santo Antônio da Alegria', 26, 'SP'),
(5244, 'Santo Antônio de Posse', 26, 'SP'),
(5245, 'Santo Antônio do Aracanguá', 26, 'SP'),
(5246, 'Santo Antônio do Jardim', 26, 'SP'),
(5247, 'Santo Antônio do Pinhal', 26, 'SP'),
(5248, 'Santo Expedito', 26, 'SP'),
(5249, 'Santópolis do Aguapeí', 26, 'SP'),
(5250, 'Santos', 26, 'SP'),
(5251, 'São Bento do Sapucaí', 26, 'SP'),
(5252, 'São Bernardo do Campo', 26, 'SP'),
(5253, 'São Caetano do Sul', 26, 'SP'),
(5254, 'São Carlos', 26, 'SP'),
(5255, 'São Francisco', 26, 'SP'),
(5256, 'São João da Boa Vista', 26, 'SP'),
(5257, 'São João das Duas Pontes', 26, 'SP'),
(5258, 'São João de Iracema', 26, 'SP'),
(5259, 'São João do Pau d`Alho', 26, 'SP'),
(5260, 'São Joaquim da Barra', 26, 'SP'),
(5261, 'São José da Bela Vista', 26, 'SP'),
(5262, 'São José do Barreiro', 26, 'SP'),
(5263, 'São José do Rio Pardo', 26, 'SP'),
(5264, 'São José do Rio Preto', 26, 'SP'),
(5265, 'São José dos Campos', 26, 'SP'),
(5266, 'São Lourenço da Serra', 26, 'SP'),
(5267, 'São Luís do Paraitinga', 26, 'SP'),
(5268, 'São Manuel', 26, 'SP'),
(5269, 'São Miguel Arcanjo', 26, 'SP'),
(5270, 'São Paulo', 26, 'SP'),
(5271, 'São Pedro', 26, 'SP'),
(5272, 'São Pedro do Turvo', 26, 'SP'),
(5273, 'São Roque', 26, 'SP'),
(5274, 'São Sebastião', 26, 'SP'),
(5275, 'São Sebastião da Grama', 26, 'SP'),
(5276, 'São Simão', 26, 'SP'),
(5277, 'São Vicente', 26, 'SP'),
(5278, 'Sarapuí', 26, 'SP'),
(5279, 'Sarutaiá', 26, 'SP'),
(5280, 'Sebastianópolis do Sul', 26, 'SP'),
(5281, 'Serra Azul', 26, 'SP'),
(5282, 'Serra Negra', 26, 'SP'),
(5283, 'Serrana', 26, 'SP'),
(5284, 'Sertãozinho', 26, 'SP'),
(5285, 'Sete Barras', 26, 'SP'),
(5286, 'Severínia', 26, 'SP'),
(5287, 'Silveiras', 26, 'SP'),
(5288, 'Socorro', 26, 'SP'),
(5289, 'Sorocaba', 26, 'SP'),
(5290, 'Sud Mennucci', 26, 'SP'),
(5291, 'Sumaré', 26, 'SP'),
(5292, 'Suzanápolis', 26, 'SP'),
(5293, 'Suzano', 26, 'SP'),
(5294, 'Tabapuã', 26, 'SP'),
(5295, 'Tabatinga', 26, 'SP'),
(5296, 'Taboão da Serra', 26, 'SP'),
(5297, 'Taciba', 26, 'SP'),
(5298, 'Taguaí', 26, 'SP'),
(5299, 'Taiaçu', 26, 'SP'),
(5300, 'Taiúva', 26, 'SP'),
(5301, 'Tambaú', 26, 'SP'),
(5302, 'Tanabi', 26, 'SP'),
(5303, 'Tapiraí', 26, 'SP'),
(5304, 'Tapiratiba', 26, 'SP'),
(5305, 'Taquaral', 26, 'SP'),
(5306, 'Taquaritinga', 26, 'SP'),
(5307, 'Taquarituba', 26, 'SP'),
(5308, 'Taquarivaí', 26, 'SP'),
(5309, 'Tarabai', 26, 'SP'),
(5310, 'Tarumã', 26, 'SP'),
(5311, 'Tatuí', 26, 'SP'),
(5312, 'Taubaté', 26, 'SP'),
(5313, 'Tejupá', 26, 'SP'),
(5314, 'Teodoro Sampaio', 26, 'SP'),
(5315, 'Terra Roxa', 26, 'SP'),
(5316, 'Tietê', 26, 'SP'),
(5317, 'Timburi', 26, 'SP'),
(5318, 'Torre de Pedra', 26, 'SP'),
(5319, 'Torrinha', 26, 'SP'),
(5320, 'Trabiju', 26, 'SP'),
(5321, 'Tremembé', 26, 'SP'),
(5322, 'Três Fronteiras', 26, 'SP'),
(5323, 'Tuiuti', 26, 'SP'),
(5324, 'Tupã', 26, 'SP'),
(5325, 'Tupi Paulista', 26, 'SP'),
(5326, 'Turiúba', 26, 'SP'),
(5327, 'Turmalina', 26, 'SP'),
(5328, 'Ubarana', 26, 'SP'),
(5329, 'Ubatuba', 26, 'SP'),
(5330, 'Ubirajara', 26, 'SP'),
(5331, 'Uchoa', 26, 'SP'),
(5332, 'União Paulista', 26, 'SP'),
(5333, 'Urânia', 26, 'SP'),
(5334, 'Uru', 26, 'SP'),
(5335, 'Urupês', 26, 'SP'),
(5336, 'Valentim Gentil', 26, 'SP'),
(5337, 'Valinhos', 26, 'SP'),
(5338, 'Valparaíso', 26, 'SP'),
(5339, 'Vargem', 26, 'SP'),
(5340, 'Vargem Grande do Sul', 26, 'SP'),
(5341, 'Vargem Grande Paulista', 26, 'SP'),
(5342, 'Várzea Paulista', 26, 'SP'),
(5343, 'Vera Cruz', 26, 'SP'),
(5344, 'Vinhedo', 26, 'SP'),
(5345, 'Viradouro', 26, 'SP'),
(5346, 'Vista Alegre do Alto', 26, 'SP'),
(5347, 'Vitória Brasil', 26, 'SP'),
(5348, 'Votorantim', 26, 'SP'),
(5349, 'Votuporanga', 26, 'SP'),
(5350, 'Zacarias', 26, 'SP'),
(5351, 'Amparo de São Francisco', 25, 'SE'),
(5352, 'Aquidabã', 25, 'SE'),
(5353, 'Aracaju', 25, 'SE'),
(5354, 'Arauá', 25, 'SE'),
(5355, 'Areia Branca', 25, 'SE'),
(5356, 'Barra dos Coqueiros', 25, 'SE'),
(5357, 'Boquim', 25, 'SE'),
(5358, 'Brejo Grande', 25, 'SE'),
(5359, 'Campo do Brito', 25, 'SE'),
(5360, 'Canhoba', 25, 'SE'),
(5361, 'Canindé de São Francisco', 25, 'SE'),
(5362, 'Capela', 25, 'SE'),
(5363, 'Carira', 25, 'SE'),
(5364, 'Carmópolis', 25, 'SE'),
(5365, 'Cedro de São João', 25, 'SE'),
(5366, 'Cristinápolis', 25, 'SE'),
(5367, 'Cumbe', 25, 'SE'),
(5368, 'Divina Pastora', 25, 'SE'),
(5369, 'Estância', 25, 'SE'),
(5370, 'Feira Nova', 25, 'SE'),
(5371, 'Frei Paulo', 25, 'SE'),
(5372, 'Gararu', 25, 'SE'),
(5373, 'General Maynard', 25, 'SE'),
(5374, 'Gracho Cardoso', 25, 'SE'),
(5375, 'Ilha das Flores', 25, 'SE'),
(5376, 'Indiaroba', 25, 'SE'),
(5377, 'Itabaiana', 25, 'SE'),
(5378, 'Itabaianinha', 25, 'SE'),
(5379, 'Itabi', 25, 'SE'),
(5380, 'Itaporanga d`Ajuda', 25, 'SE'),
(5381, 'Japaratuba', 25, 'SE'),
(5382, 'Japoatã', 25, 'SE'),
(5383, 'Lagarto', 25, 'SE'),
(5384, 'Laranjeiras', 25, 'SE'),
(5385, 'Macambira', 25, 'SE'),
(5386, 'Malhada dos Bois', 25, 'SE'),
(5387, 'Malhador', 25, 'SE'),
(5388, 'Maruim', 25, 'SE'),
(5389, 'Moita Bonita', 25, 'SE'),
(5390, 'Monte Alegre de Sergipe', 25, 'SE'),
(5391, 'Muribeca', 25, 'SE'),
(5392, 'Neópolis', 25, 'SE'),
(5393, 'Nossa Senhora Aparecida', 25, 'SE'),
(5394, 'Nossa Senhora da Glória', 25, 'SE'),
(5395, 'Nossa Senhora das Dores', 25, 'SE'),
(5396, 'Nossa Senhora de Lourdes', 25, 'SE'),
(5397, 'Nossa Senhora do Socorro', 25, 'SE'),
(5398, 'Pacatuba', 25, 'SE'),
(5399, 'Pedra Mole', 25, 'SE'),
(5400, 'Pedrinhas', 25, 'SE'),
(5401, 'Pinhão', 25, 'SE'),
(5402, 'Pirambu', 25, 'SE'),
(5403, 'Poço Redondo', 25, 'SE'),
(5404, 'Poço Verde', 25, 'SE'),
(5405, 'Porto da Folha', 25, 'SE'),
(5406, 'Propriá', 25, 'SE'),
(5407, 'Riachão do Dantas', 25, 'SE'),
(5408, 'Riachuelo', 25, 'SE'),
(5409, 'Ribeirópolis', 25, 'SE'),
(5410, 'Rosário do Catete', 25, 'SE'),
(5411, 'Salgado', 25, 'SE'),
(5412, 'Santa Luzia do Itanhy', 25, 'SE'),
(5413, 'Santa Rosa de Lima', 25, 'SE'),
(5414, 'Santana do São Francisco', 25, 'SE'),
(5415, 'Santo Amaro das Brotas', 25, 'SE'),
(5416, 'São Cristóvão', 25, 'SE'),
(5417, 'São Domingos', 25, 'SE'),
(5418, 'São Francisco', 25, 'SE'),
(5419, 'São Miguel do Aleixo', 25, 'SE'),
(5420, 'Simão Dias', 25, 'SE'),
(5421, 'Siriri', 25, 'SE'),
(5422, 'Telha', 25, 'SE'),
(5423, 'Tobias Barreto', 25, 'SE'),
(5424, 'Tomar do Geru', 25, 'SE'),
(5425, 'Umbaúba', 25, 'SE'),
(5426, 'Abreulândia', 27, 'TO'),
(5427, 'Aguiarnópolis', 27, 'TO'),
(5428, 'Aliança do Tocantins', 27, 'TO'),
(5429, 'Almas', 27, 'TO'),
(5430, 'Alvorada', 27, 'TO'),
(5431, 'Ananás', 27, 'TO'),
(5432, 'Angico', 27, 'TO'),
(5433, 'Aparecida do Rio Negro', 27, 'TO'),
(5434, 'Aragominas', 27, 'TO'),
(5435, 'Araguacema', 27, 'TO'),
(5436, 'Araguaçu', 27, 'TO'),
(5437, 'Araguaína', 27, 'TO'),
(5438, 'Araguanã', 27, 'TO'),
(5439, 'Araguatins', 27, 'TO'),
(5440, 'Arapoema', 27, 'TO'),
(5441, 'Arraias', 27, 'TO'),
(5442, 'Augustinópolis', 27, 'TO'),
(5443, 'Aurora do Tocantins', 27, 'TO'),
(5444, 'Axixá do Tocantins', 27, 'TO'),
(5445, 'Babaçulândia', 27, 'TO'),
(5446, 'Bandeirantes do Tocantins', 27, 'TO'),
(5447, 'Barra do Ouro', 27, 'TO'),
(5448, 'Barrolândia', 27, 'TO'),
(5449, 'Bernardo Sayão', 27, 'TO'),
(5450, 'Bom Jesus do Tocantins', 27, 'TO'),
(5451, 'Brasilândia do Tocantins', 27, 'TO'),
(5452, 'Brejinho de Nazaré', 27, 'TO'),
(5453, 'Buriti do Tocantins', 27, 'TO'),
(5454, 'Cachoeirinha', 27, 'TO'),
(5455, 'Campos Lindos', 27, 'TO'),
(5456, 'Cariri do Tocantins', 27, 'TO'),
(5457, 'Carmolândia', 27, 'TO'),
(5458, 'Carrasco Bonito', 27, 'TO'),
(5459, 'Caseara', 27, 'TO'),
(5460, 'Centenário', 27, 'TO'),
(5461, 'Chapada da Natividade', 27, 'TO'),
(5462, 'Chapada de Areia', 27, 'TO'),
(5463, 'Colinas do Tocantins', 27, 'TO'),
(5464, 'Colméia', 27, 'TO'),
(5465, 'Combinado', 27, 'TO'),
(5466, 'Conceição do Tocantins', 27, 'TO'),
(5467, 'Couto de Magalhães', 27, 'TO'),
(5468, 'Cristalândia', 27, 'TO'),
(5469, 'Crixás do Tocantins', 27, 'TO'),
(5470, 'Darcinópolis', 27, 'TO'),
(5471, 'Dianópolis', 27, 'TO'),
(5472, 'Divinópolis do Tocantins', 27, 'TO'),
(5473, 'Dois Irmãos do Tocantins', 27, 'TO'),
(5474, 'Dueré', 27, 'TO'),
(5475, 'Esperantina', 27, 'TO'),
(5476, 'Fátima', 27, 'TO'),
(5477, 'Figueirópolis', 27, 'TO'),
(5478, 'Filadélfia', 27, 'TO'),
(5479, 'Formoso do Araguaia', 27, 'TO'),
(5480, 'Fortaleza do Tabocão', 27, 'TO'),
(5481, 'Goianorte', 27, 'TO'),
(5482, 'Goiatins', 27, 'TO'),
(5483, 'Guaraí', 27, 'TO'),
(5484, 'Gurupi', 27, 'TO'),
(5485, 'Ipueiras', 27, 'TO'),
(5486, 'Itacajá', 27, 'TO'),
(5487, 'Itaguatins', 27, 'TO'),
(5488, 'Itapiratins', 27, 'TO'),
(5489, 'Itaporã do Tocantins', 27, 'TO'),
(5490, 'Jaú do Tocantins', 27, 'TO'),
(5491, 'Juarina', 27, 'TO'),
(5492, 'Lagoa da Confusão', 27, 'TO'),
(5493, 'Lagoa do Tocantins', 27, 'TO'),
(5494, 'Lajeado', 27, 'TO'),
(5495, 'Lavandeira', 27, 'TO'),
(5496, 'Lizarda', 27, 'TO'),
(5497, 'Luzinópolis', 27, 'TO'),
(5498, 'Marianópolis do Tocantins', 27, 'TO'),
(5499, 'Mateiros', 27, 'TO'),
(5500, 'Maurilândia do Tocantins', 27, 'TO'),
(5501, 'Miracema do Tocantins', 27, 'TO'),
(5502, 'Miranorte', 27, 'TO'),
(5503, 'Monte do Carmo', 27, 'TO'),
(5504, 'Monte Santo do Tocantins', 27, 'TO'),
(5505, 'Muricilândia', 27, 'TO'),
(5506, 'Natividade', 27, 'TO'),
(5507, 'Nazaré', 27, 'TO'),
(5508, 'Nova Olinda', 27, 'TO'),
(5509, 'Nova Rosalândia', 27, 'TO'),
(5510, 'Novo Acordo', 27, 'TO'),
(5511, 'Novo Alegre', 27, 'TO'),
(5512, 'Novo Jardim', 27, 'TO'),
(5513, 'Oliveira de Fátima', 27, 'TO'),
(5514, 'Palmas', 27, 'TO'),
(5515, 'Palmeirante', 27, 'TO'),
(5516, 'Palmeiras do Tocantins', 27, 'TO'),
(5517, 'Palmeirópolis', 27, 'TO'),
(5518, 'Paraíso do Tocantins', 27, 'TO'),
(5519, 'Paranã', 27, 'TO'),
(5520, 'Pau d`Arco', 27, 'TO'),
(5521, 'Pedro Afonso', 27, 'TO'),
(5522, 'Peixe', 27, 'TO'),
(5523, 'Pequizeiro', 27, 'TO'),
(5524, 'Pindorama do Tocantins', 27, 'TO'),
(5525, 'Piraquê', 27, 'TO'),
(5526, 'Pium', 27, 'TO'),
(5527, 'Ponte Alta do Bom Jesus', 27, 'TO'),
(5528, 'Ponte Alta do Tocantins', 27, 'TO'),
(5529, 'Porto Alegre do Tocantins', 27, 'TO'),
(5530, 'Porto Nacional', 27, 'TO'),
(5531, 'Praia Norte', 27, 'TO'),
(5532, 'Presidente Kennedy', 27, 'TO'),
(5533, 'Pugmil', 27, 'TO'),
(5534, 'Recursolândia', 27, 'TO'),
(5535, 'Riachinho', 27, 'TO'),
(5536, 'Rio da Conceição', 27, 'TO'),
(5537, 'Rio dos Bois', 27, 'TO'),
(5538, 'Rio Sono', 27, 'TO'),
(5539, 'Sampaio', 27, 'TO'),
(5540, 'Sandolândia', 27, 'TO'),
(5541, 'Santa Fé do Araguaia', 27, 'TO'),
(5542, 'Santa Maria do Tocantins', 27, 'TO'),
(5543, 'Santa Rita do Tocantins', 27, 'TO'),
(5544, 'Santa Rosa do Tocantins', 27, 'TO'),
(5545, 'Santa Tereza do Tocantins', 27, 'TO'),
(5546, 'Santa Terezinha do Tocantins', 27, 'TO'),
(5547, 'São Bento do Tocantins', 27, 'TO'),
(5548, 'São Félix do Tocantins', 27, 'TO'),
(5549, 'São Miguel do Tocantins', 27, 'TO'),
(5550, 'São Salvador do Tocantins', 27, 'TO'),
(5551, 'São Sebastião do Tocantins', 27, 'TO'),
(5552, 'São Valério da Natividade', 27, 'TO'),
(5553, 'Silvanópolis', 27, 'TO'),
(5554, 'Sítio Novo do Tocantins', 27, 'TO'),
(5555, 'Sucupira', 27, 'TO'),
(5556, 'Taguatinga', 27, 'TO'),
(5557, 'Taipas do Tocantins', 27, 'TO'),
(5558, 'Talismã', 27, 'TO'),
(5559, 'Tocantínia', 27, 'TO'),
(5560, 'Tocantinópolis', 27, 'TO'),
(5561, 'Tupirama', 27, 'TO'),
(5562, 'Tupiratins', 27, 'TO'),
(5563, 'Wanderlândia', 27, 'TO'),
(5564, 'Xambioá', 27, 'TO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados`
--

CREATE TABLE `classificados` (
  `id` int(11) NOT NULL,
  `data_alteracao` int(11) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `cadastro` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cod_interno` varchar(100) DEFAULT NULL,
  `categoria_id` varchar(100) DEFAULT NULL,
  `categoria_titulo` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `bairro_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `cep` varchar(100) DEFAULT NULL,
  `valor` double DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `anuncio_vencimento` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_bairros`
--

CREATE TABLE `classificados_bairros` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_bairros`
--

INSERT INTO `classificados_bairros` (`id`, `codigo`, `bairro`, `cidade`, `estado`) VALUES
(3, '154218244948336', 'Centro', 'Pato Branco', 'PR'),
(8, '154223020136127', 'Centro', 'Vitorino', 'PR'),
(45, '161082195583203', 'Centro', 'Itu', 'SP'),
(38, '160867040276885', 'Centro', 'Chapecó', 'SC'),
(39, '160867041691598', 'Industrial', 'Pato Branco', 'PR'),
(40, '160867042383943', 'Planalto', 'Pato Branco', 'PR'),
(41, '160867253464192', 'Centro', 'Mariópolis', 'PR'),
(42, '160867320116070', 'Centro', 'São Paulo', 'SP'),
(43, '160867337526060', 'São Francisco', 'Pato Branco', 'PR'),
(44, '160867343875436', 'Industrial', 'Francisco Beltrão', 'PR'),
(46, '161082702988378', 'Fragata', 'Pelotas', 'RS');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_categorias`
--

CREATE TABLE `classificados_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_categorias`
--

INSERT INTO `classificados_categorias` (`id`, `codigo`, `titulo`, `ativo`) VALUES
(1136, '161068068419574', 'Categoria 1', 1),
(1137, '161068069199118', 'Categoria 2', 0),
(1138, '161068069661701', 'Categoria 3', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_cidades`
--

CREATE TABLE `classificados_cidades` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `principal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_cidades`
--

INSERT INTO `classificados_cidades` (`id`, `codigo`, `cidade`, `estado`, `principal`) VALUES
(7493, '160867328053424', 'Chapecó', 'SC', 0),
(7490, '160867039360086', 'Pato Branco', 'PR', 0),
(7498, '161082702960212', 'Pelotas', 'RS', 0),
(7492, '160867320199910', 'São Paulo', 'SP', 0),
(7497, '161082194264315', 'Itu', 'SP', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_detalhes`
--

CREATE TABLE `classificados_detalhes` (
  `id` int(11) NOT NULL,
  `destino_voltar` varchar(255) DEFAULT NULL,
  `font_codigo` varchar(100) DEFAULT NULL,
  `font_family` varchar(100) DEFAULT NULL,
  `botao_codigo_ped` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_detalhes`
--

INSERT INTO `classificados_detalhes` (`id`, `destino_voltar`, `font_codigo`, `font_family`, `botao_codigo_ped`) VALUES
(1, '', '160624656673837', 'Kastelov Intelo Regular', '160218454125922');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_favoritos`
--

CREATE TABLE `classificados_favoritos` (
  `id` int(11) NOT NULL,
  `sessao` varchar(255) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_favoritos`
--

INSERT INTO `classificados_favoritos` (`id`, `sessao`, `codigo`) VALUES
(19, '161092657268486', '161074912819621'),
(18, '161092657268486', '161082722612481'),
(17, '161092657268486', '161068099990306');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_grupos`
--

CREATE TABLE `classificados_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `tipo` int(11) DEFAULT 0,
  `formato` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT 3,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_pagina` int(11) DEFAULT 3,
  `max_itens` int(11) DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `busca_pagina` varchar(255) DEFAULT NULL,
  `font` varchar(100) DEFAULT NULL,
  `font_family` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_grupos_imagens`
--

CREATE TABLE `classificados_grupos_imagens` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_grupos_imagens`
--

INSERT INTO `classificados_grupos_imagens` (`id`, `codigo`, `imagem`) VALUES
(2, '161068495810848', '4-[15-01-21][01-29-37].jpg'),
(3, '161068495810848', '3-[15-01-21][10-59-32].jpg'),
(4, '162200096660526', '4-[27-05-21][15-54-48].jpg'),
(5, '162200096660526', '4-[27-05-21][15-55-40].jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_grupos_sel`
--

CREATE TABLE `classificados_grupos_sel` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `anuncio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_imagem`
--

CREATE TABLE `classificados_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_imagem`
--

INSERT INTO `classificados_imagem` (`id`, `codigo`, `imagem`) VALUES
(179, '160639992394709', '4548-IMG-1920-[26-11-20][12-15-06].jpg'),
(180, '160639992394709', '4548-IMG-1919-[26-11-20][12-15-07].jpg'),
(181, '160639992394709', '4548-IMG-1923-[26-11-20][12-15-08].jpg'),
(182, '160639992394709', '4548-IMG-1926-[26-11-20][12-15-10].jpg'),
(183, '160639992394709', '4548-IMG-1945-[26-11-20][12-15-11].jpg'),
(184, '160639992394709', 'S-B-FACHADA-EF-web-[26-11-20][12-15-15].jpg'),
(185, '1606399923947091', 'Sem-titulo-[26-11-20][12-23-04].jpg'),
(186, '1606399923947091', '4548-IMG-1920-[26-11-20][12-23-06].jpg'),
(187, '1606399923947091', '4548-IMG-1919-[26-11-20][12-23-08].jpg'),
(188, '1606399923947091', '4548-IMG-1923-[26-11-20][12-23-09].jpg'),
(189, '1606399923947091', '4548-IMG-1926-[26-11-20][12-23-11].jpg'),
(190, '160639992394704', 'Sem-titulo2-[26-11-20][12-24-57].jpg'),
(191, '160639992394704', '4548-IMG-1919-[26-11-20][12-24-58].jpg'),
(192, '160639992394704', '4548-IMG-1923-[26-11-20][12-24-59].jpg'),
(193, '160639992394704', '4548-IMG-1926-[26-11-20][12-25-01].jpg'),
(194, '160639992394704', '4548-IMG-1945-[26-11-20][12-25-02].jpg'),
(195, '160639992394708', 'Sem-titulo2-[26-11-20][15-05-40].jpg'),
(196, '160639992394708', '4548-IMG-1920-[26-11-20][15-05-42].jpg'),
(197, '160639992394708', '4548-IMG-1919-[26-11-20][15-05-44].jpg'),
(198, '160639992394708', '4548-IMG-1923-[26-11-20][15-05-45].jpg'),
(199, '160639992394708', '4548-IMG-1926-[26-11-20][15-05-47].jpg'),
(200, '1606399923947096', 'Sem-titulo-[26-11-20][22-13-28].jpg'),
(201, '1606399923947096', '4548-IMG-1920-[26-11-20][22-13-29].jpg'),
(202, '1606399923947096', '4548-IMG-1919-[26-11-20][22-13-30].jpg'),
(203, '1606399923947097', '4548-IMG-1920-[26-11-20][22-14-13].jpg'),
(204, '1606399923947097', '4548-IMG-1919-[26-11-20][22-14-14].jpg'),
(205, '1606399923947097', '4548-IMG-1926-[26-11-20][22-14-15].jpg'),
(206, '1606399923947097', 'S-B-FACHADA-EF-web-[26-11-20][22-14-17].jpg'),
(209, '160867351712887', '160868257235497.jpg'),
(208, '160867351712887', '160868161947480.jpg'),
(210, '160867351712887', '160868347294507.jpg'),
(211, '160874329163502', '160874330346036.jpg'),
(212, '161047448153237', '161047456795911.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_imagem_ordem`
--

CREATE TABLE `classificados_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `classificados_imagem_ordem`
--

INSERT INTO `classificados_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(197, '160639992394709', '179'),
(198, '160639992394709', '179,180'),
(199, '160639992394709', '179,180,181'),
(200, '160639992394709', '179,180,181,182'),
(201, '160639992394709', '179,180,181,182,183'),
(202, '160639992394709', '179,180,181,182,183,184'),
(203, '160639992394709', '184,179,180,181,182,183'),
(204, '1606399923947091', '185'),
(205, '1606399923947091', '185,186'),
(206, '1606399923947091', '185,186,187'),
(207, '1606399923947091', '185,186,187,188'),
(208, '1606399923947091', '185,186,187,188,189'),
(209, '160639992394704', '190'),
(210, '160639992394704', '190,191'),
(211, '160639992394704', '190,191,192'),
(212, '160639992394704', '190,191,192,193'),
(213, '160639992394704', '190,191,192,193,194'),
(214, '160639992394708', '195'),
(215, '160639992394708', '195,196'),
(216, '160639992394708', '195,196,197'),
(217, '160639992394708', '195,196,197,198'),
(218, '160639992394708', '195,196,197,198,199'),
(219, '1606399923947096', '200'),
(220, '1606399923947096', '200,201'),
(221, '1606399923947096', '200,201,202'),
(222, '1606399923947097', '203'),
(223, '1606399923947097', '203,204'),
(224, '1606399923947097', '203,204,205'),
(225, '1606399923947097', '203,204,205,206'),
(226, '1606399923947097', '206,203,204,205'),
(227, '160867351712887', '207'),
(228, '160867351712887', '207,208'),
(229, '160867351712887', '208,207'),
(230, '160867351712887', '207,208'),
(231, '160867351712887', '208,207'),
(232, '160867351712887', '207,208'),
(233, '160867351712887', '207,208,209'),
(234, '160867351712887', '209,208'),
(235, '160867351712887', '208,209'),
(236, '160867351712887', '209,208'),
(237, '160867351712887', '208,209'),
(238, '160867351712887', '209,208'),
(239, '160867351712887', '209,208,210'),
(240, '160867351712887', '210,209,208'),
(241, '160867351712887', '209,208,210'),
(242, '160867351712887', '208,210,209'),
(243, '160867351712887', '209,208,210'),
(244, '160867351712887', '210,209,208'),
(245, '160867351712887', '209,210,208'),
(246, '160867351712887', '210,208,209'),
(247, '160867351712887', '208,209,210'),
(248, '160867351712887', '210,208,209'),
(249, '160867351712887', '208,210,209'),
(250, '160867351712887', '209,208,210'),
(251, '160874329163502', '211'),
(252, '161047448153237', '212');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_marcadagua`
--

CREATE TABLE `classificados_marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_marcadagua`
--

INSERT INTO `classificados_marcadagua` (`id`, `codigo`) VALUES
(1, '161067930596166');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_opcoes`
--

CREATE TABLE `classificados_opcoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `marcador` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_opcoes`
--

INSERT INTO `classificados_opcoes` (`id`, `codigo`, `marcador`, `titulo`) VALUES
(7, '161068323231119', NULL, 'teste22'),
(8, '161068452274077', NULL, 'aaaaaa'),
(14, '161068477310692', '161068400282975', 'Opção 3'),
(13, '161068476620079', '161068398363957', 'Opção 2'),
(12, '161068476216870', '161068398363957', 'Opção 1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_opcoes_marcadores`
--

CREATE TABLE `classificados_opcoes_marcadores` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_opcoes_marcadores`
--

INSERT INTO `classificados_opcoes_marcadores` (`id`, `codigo`, `titulo`) VALUES
(1, '161068398363957', 'Marcador 1'),
(2, '161068400282975', 'Marcador 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_opcoes_sel`
--

CREATE TABLE `classificados_opcoes_sel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `opcional` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_opcoes_sel`
--

INSERT INTO `classificados_opcoes_sel` (`id`, `codigo`, `opcional`) VALUES
(3, '158025628084829', '159379322078576'),
(2, '158025628084829', '159379321637655'),
(4, '159984375348313', '159379321067039'),
(5, '160081052796114', '159379321637655'),
(6, '160081052796114', '159379321067039'),
(7, '160081308868610', '159379321637655'),
(22, '161082722612481', '161068476216870'),
(23, '161082722612481', '161068477310692'),
(13, '161068099990306', '161068476216870'),
(19, '161068099990306', '161068477310692'),
(15, '161074912819621', '161068476620079'),
(18, '161074912819621', '161068477310692'),
(24, '163543247269728', '161068477310692'),
(25, '163543247269728', '161068476620079'),
(26, '163543247269728', '161068476216870');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_pedidos`
--

CREATE TABLE `classificados_pedidos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `cadastro` varchar(100) DEFAULT NULL,
  `plano` varchar(100) DEFAULT NULL,
  `plano_titulo` varchar(255) DEFAULT NULL,
  `plano_valor` double DEFAULT NULL,
  `plano_periodo_meses` int(11) DEFAULT 0,
  `plano_periodo_dias` int(11) DEFAULT 0,
  `plano_limite` int(11) DEFAULT 0,
  `plano_utilizado` int(11) DEFAULT 0,
  `data` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `id_transacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_pedidos`
--

INSERT INTO `classificados_pedidos` (`id`, `codigo`, `cadastro`, `plano`, `plano_titulo`, `plano_valor`, `plano_periodo_meses`, `plano_periodo_dias`, `plano_limite`, `plano_utilizado`, `data`, `status`, `id_transacao`) VALUES
(1, '160874846697105', '160864676595726', '160865975149501', NULL, 15, 3, NULL, 0, 0, 1608748466, 2, NULL),
(2, '161047457824635', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 0, 0, 1610474578, 0, NULL),
(3, '161047470314222', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 0, 0, 1610474703, 1, '457480570-7ae3cd7f-b478-4fd7-8e43-b43925ceb5e1'),
(4, '161065215853459', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 1, 0, 1610652158, 1, '457480570-cd56bbdc-c446-4b5c-8e90-bdf40b56d3a8'),
(6, '161065953623563', '161047438999558', '160865978512730', 'Plano 3', 20, 6, NULL, 3, 2, 1610659536, 2, '457480570-1e9e0550-8768-4072-904e-d44ece169c38'),
(8, '161066913789232', '161047438999558', '1', 'Gratis', 0, 0, 15, 2, 2, 1610669137, 2, NULL),
(9, '161082657421313', '161047438999558', '161067836663506', 'Plano 1', 10, 1, 0, 1, 0, 1610826574, 2, '457480570-0c99359d-bfe5-4b18-b38a-1bb310d90338'),
(10, '161091759560832', '161047438999558', '161067836663506', 'Plano 1', 10, 1, 0, 1, 0, 1610917595, 1, '457480570-685478a5-6e4b-419c-a5ce-85661bcabedc');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_pedidos_utilizacoes`
--

CREATE TABLE `classificados_pedidos_utilizacoes` (
  `id` int(11) NOT NULL,
  `pedido` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `anuncio` varchar(100) DEFAULT NULL,
  `anuncio_ref` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_pedidos_utilizacoes`
--

INSERT INTO `classificados_pedidos_utilizacoes` (`id`, `pedido`, `data`, `anuncio`, `anuncio_ref`) VALUES
(1, '161065953623563', 1610663409, '161047448153237', '1084'),
(2, '161066913789232', 1610669137, '161066830187908', '1085'),
(3, '161066913789232', 1610669205, '161066919686351', '1086'),
(4, '161065953623563', 1610828773, '161082722612481', '4');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_planos`
--

CREATE TABLE `classificados_planos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `meses` int(11) DEFAULT 1,
  `dias` int(11) DEFAULT 0,
  `limite` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `classificados_planos`
--

INSERT INTO `classificados_planos` (`id`, `codigo`, `titulo`, `valor`, `meses`, `dias`, `limite`) VALUES
(1, '1', 'Gratis', 0, 0, 15, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `classificados_videos`
--

CREATE TABLE `classificados_videos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `incorporacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contador`
--

CREATE TABLE `contador` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contador_grupos`
--

CREATE TABLE `contador_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contador_ordem`
--

CREATE TABLE `contador_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `codigo`, `grupo`, `titulo`, `email`) VALUES
(142, '159500552132226', '159434592337144', 'Contato', 'falecom@fabricadosite.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato_grupos`
--

CREATE TABLE `contato_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `tipo_envio` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `contato_grupos`
--

INSERT INTO `contato_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `tipo_envio`, `descricao`, `botao_codigo`, `classes`, `classes_img`) VALUES
(30, '159434592337144', '<div align=\"left\"><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\" kastelov=\"\" intelo=\"\" bold\";=\"\" 24px;\"=\"\" bold\";\"=\"\"><span style=\"font-size: 42px; font-family: &quot;Exol2 Regular&quot;;\">FALE </span><b><span style=\"font-size: 42px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">CONOSCO</span></b></span><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\" kastelov=\"\" intelo=\"\" bold\";=\"\" 24px;\"=\"\" bold\";\"=\"\"></span></div>', 1, 'todos', '', '160693669447745', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato_ordem`
--

CREATE TABLE `contato_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `contato_ordem`
--

INSERT INTO `contato_ordem` (`id`, `grupo`, `data`) VALUES
(39, '159434592337144', '142,143');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudos`
--

CREATE TABLE `conteudos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `bloqueio` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `conteudos`
--

INSERT INTO `conteudos` (`id`, `codigo`, `titulo`, `conteudo`, `bloqueio`) VALUES
(76, '159649081566934', 'Cadastro Efetuado', '<p style=\"text-align:center\"><strong>Cadastro efetuado com sucesso</strong></p>\r\n', 1),
(60, '150432279044656', 'E-mail - Nova mensagem no Pedido', '<p>Voc&ecirc; recebeu uma nova mensagem acesse a &aacute;rea de cliente da loja para ler!</p>\r\n', 1),
(61, '150457686833612', 'E-mail  - Compra Efetuda (cliente)', '<p>Ol&aacute;, recebemos seu pedido com sucesso!</p>\r\n\r\n<p>Voc&ecirc; receber&aacute; um e-mail da nossa equipe logo ap&oacute;s a confirma&ccedil;&atilde;o do pagamento.</p>\r\n', 1),
(54, '146172119158298', 'E-mail - Cadastro Boas Vindas', '<p><span style=\"font-size:14px\">Seja bem-vindo ao&nbsp;nosso website!</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Esperamos que encontre tudo o que voc&ecirc; deseja, com os melhores pre&ccedil;os e condi&ccedil;&otilde;es.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">Em caso de d&uacute;vidas entre em contato com nosso atendimento.</span></p>\r\n', 1),
(55, '146177966276191', 'E-mail - Recuperação de Senha', '<p><strong>Prezado Cliente,&nbsp;</strong></p>\r\n\r\n<p><span style=\"font-size:14px\">Voc&ecirc; solicitou&nbsp;uma nova senha da sua conta atrav&eacute;s de nossa Loja Virtual,&nbsp;</span><br />\r\n<span style=\"font-size:14px\">acesse sua conta com o usu&aacute;rio e senha abaixo:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(56, '149001371567620', 'Pedido Concluido', '<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Obrigado!</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong><span style=\"font-size:18px\">Recebemos seu pedido com sucesso!</span></strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:18px\"><strong>Nossa equipe j&aacute; est&aacute; conferindo seu pedido, aguarde nosso contato por e-mail.</strong></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', 1),
(62, '151686145575257', 'Termos e Política de Uso', '', 1),
(73, '157609094736033', 'E-mail - Alteração de status', '<p>O status do seu pedido foi alterado.</p>\r\n', 1),
(78, '163657934464164', 'E-mail - Envio automático digital', '<p>teste teste</p>', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `conteudos_blocos`
--

CREATE TABLE `conteudos_blocos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT 0,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `imagem_fundo` varchar(255) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `endereco_padrao1` varchar(255) DEFAULT NULL,
  `endereco_padrao2` varchar(255) DEFAULT NULL,
  `endereco1` text DEFAULT NULL,
  `endereco2` text DEFAULT NULL,
  `imagem_fundo_tipo` int(11) DEFAULT 0,
  `botao_codigo1` varchar(100) DEFAULT NULL,
  `botao_codigo2` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL,
  `margem` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `conteudos_blocos`
--

INSERT INTO `conteudos_blocos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `tipo`, `conteudo`, `imagem`, `imagem_fundo`, `posicao`, `endereco_padrao1`, `endereco_padrao2`, `endereco1`, `endereco2`, `imagem_fundo_tipo`, `botao_codigo1`, `botao_codigo2`, `classes`, `classes_img`, `margem`) VALUES
(168, '164339918623271', 'Topo Institucional', 0, 0, '<p align=\"center\"><font color=\"#FFFFFF\"><span style=\"font-size: 42px; font-family: &quot;Exol2 Regular&quot;;\" exol2=\"\" bold\";\"=\"\" regular\";\"=\"\">Sobre o <span style=\"font-family: &quot;Exol2 Bold&quot;;\">Provedor</span></span></font><br></p>', NULL, '', 1, '', '', '', '', 0, '', '', '', '', ''),
(169, '164339933221490', '<div align=\"left\"><span style=\"font-size: 42px; font-family: \"Exol2 Regular\";\" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\">Nossa <span style=\"font-family: \"Exol2 Bold\";\">Empresa</span></span></div>', 2, 0, '<div class=\"elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41396be\" data-id=\"41396be\" data-element_type=\"column\">\r\n			<div class=\"elementor-widget-wrap elementor-element-populated\">\r\n								<div class=\"elementor-element elementor-element-194d461 elementor-widget elementor-widget-text-editor\" data-id=\"194d461\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n				<div class=\"elementor-widget-container\"><span style=\"font-size:26px\"><span dir=\"rtl\"><small><span style=\"font-family:arial,helvetica,sans-serif\">Nossa\r\n internet é 100% Fibra Óptica com valor fixo na fatura. Com Tecnologia \r\nde última geração para você e sua família aproveitar o melhor dos jogos,\r\n filmes em alta resolução, redes sociais e outros recursos da internet</span></small></span></span></div>\r\n				</div>\r\n					</div>\r\n		</div>', 'familia-conectada-fw-[17-08-22][14-41-24].png', NULL, 2, '', '', '', '', 0, '', '', '', '', ''),
(176, '166076568445923', 'Topo Planos', 0, 0, '<p align=\"center\"><font color=\"#FFFFFF\"><span style=\"font-family: &quot;Exol2 Regular&quot;; font-size: 42px;\">Nossos <span style=\"font-family: &quot;Exol2 Bold&quot;;\">Planos</span></span></font><br></p>', NULL, NULL, 1, '', '', '', '', 0, '', '', '', '', ''),
(165, '164329556335865', '<div align=\"left\"><font color=\"#424242\"><span style=\"background-color: transparent;\"><span style=\"font-size: 15px;\">SOBRE</span></span></font></div>', 0, 2, '<p align=\"left\"><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 38px;\"=\"\"><font color=\"#FF9C00\"><span style=\"font-size: 38px; font-family: \" exol2=\"\" regular\";\"=\"\" bold\";\"=\"\"><span style=\"font-size: 42px; font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-size: 48px; font-family: \" exol2=\"\" regular\";\"=\"\"><strong><font color=\"#424242\"><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">CONEXÃO</span></font><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\"> FIBRA ÓPTICA </span><font color=\"#424242\"><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">PARA </span><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">SUA CASA!</span></font></strong></span></span></span></font><br></span></p><div class=\"elementor-element elementor-element-1d22d92 elementor-widget elementor-widget-text-editor\" data-id=\"1d22d92\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n				<div class=\"elementor-widget-container\"><span style=\"font-size:26px\"><span dir=\"rtl\"><small><span style=\"font-family:arial,helvetica,sans-serif\">Nossa\r\n internet é 100% Fibra Óptica com valor fixo na fatura. Com Tecnologia \r\nde última geração para você e sua família aproveitar o melhor dos jogos,\r\n filmes em alta resolução, redes sociais e outros recursos da internet</span></small></span></span></div>\r\n				</div>\r\n				\r\n					\r\n		\r\n				\r\n			\r\n								\r\n				\r\n															', 'familia-conectada-fw-[16-08-22][22-12-53].png', '', 2, '', '', 'institucional', '', 0, '160693689911601', '', '', '', '50'),
(167, '164338290576942', 'Depoimentos', NULL, 0, NULL, 'baner-home-1024x87-fw-[28-01-22][12-15-45].png', NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(170, '164340042126649', 'Topo Serviços', 0, 0, '<p align=\"center\"><font color=\"#003163\"><span style=\"font-size: 42px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">Serviços</span></font><br></p>', NULL, 'fundo-sobre-1-[28-01-22][17-07-08].jpg', 1, '', '', '', '', 0, '', '', '', '', ''),
(171, '164340052740364', '<span style=\"font-family: &quot;Exol2 Regular&quot;; font-size: 32px;\" exol2=\"\" regular\";=\"\" font-size:=\"\" 32px;\"=\"\">O QUE NÓS FAZEMOS?</span><br>', 2, 0, '<p align=\"justify\">“Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac \r\nhabitasse platea dictumst. In tincidunt rutrum ligula, ac cursus arcu \r\nelementum quis. Phasellus consectetur sagittis ex vitae porttitor.”<br>“Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac \r\nhabitasse platea dictumst. In tincidunt rutrum ligula, ac cursus arcu \r\nelementum quis. Phasellus consectetur sagittis ex vitae porttitor.”<br>“Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac \r\nhabitasse platea dictumst. In tincidunt rutrum ligula, ac cursus arcu \r\nelementum quis. Phasellus consectetur sagittis ex vitae porttitor.”<br>“Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac \r\nhabitasse platea dictumst. In tincidunt rutrum ligula, ac cursus arcu \r\nelementum quis. Phasellus consectetur sagittis ex vitae porttitor.”</p>', 'baner-home-1024x87-fw-[28-01-22][17-11-42].png', NULL, 2, '', '', '', '', 0, '', '', '', '', ''),
(172, '164340083258928', '<div align=\"center\"><font color=\"#003163\"><span style=\"font-size: 32px; font-family: &quot;Exol2 Regular&quot;;\" exol2=\"\" regular\";\"=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\">POR QUE ESCOLHER A GENTE?</span></font></div>', 2, 0, '<p align=\"center\"><span style=\"font-size: 16px;\">“Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac \r\nhabitasse platea dictumst. In tincidunt rutrum ligula, ac cursus arcu \r\nelementum quis. Phasellus consectetur sagittis ex vitae porttitor.”</span></p>', NULL, NULL, 1, '', '', '', '', 0, '', '', '', '', ''),
(173, '164340183054360', 'Topo Noticias', 0, 0, '<p align=\"center\"><font color=\"#FFFFFF\"><span style=\"font-family: &quot;Exol2 Regular&quot;; font-size: 42px;\" exol2=\"\" bold\";=\"\" font-size:=\"\" 42px;\"=\"\">Nossas <span style=\"font-family: &quot;Exol2 Bold&quot;;\">Dicas</span></span></font><br></p>', NULL, '', 1, '', '', '', '', 0, '', '', '', '', ''),
(174, '164340235264898', 'Contato', 0, 2, '<p><span style=\"font-size: 32px; font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">CENTRAL DE ATENDIMENTO</span></span><br><span style=\"font-size: 16px;\"><b>Fone: </b>(68) 0 0000-0000<br><b>Email:</b> contato@seuprovedor.com.br<br></span></span><br>Atendimento de Segunda a Sexta das 08:00 as 18:00 Horas<br></p>', NULL, NULL, 4, '', '', 'https://whats.me/5568000000000', '', 0, '164340258675914', '', '', '', ''),
(175, '164340295831867', 'Topo Contato', 0, 0, '<p align=\"center\"><font color=\"#FFFFFF\"><span style=\"font-family: &quot;Exol2 Regular&quot;; font-size: 42px;\" exol2=\"\" bold\";=\"\" font-size:=\"\" 42px;\"=\"\" regular\";=\"\">Entre em <span style=\"font-family: &quot;Exol2 Bold&quot;;\">Contato</span></span></font><br></p>', NULL, '', 1, '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom`
--

CREATE TABLE `cupom` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `desconto_fixo` double DEFAULT NULL,
  `desconto_porc` double DEFAULT NULL,
  `cadastro` int(11) DEFAULT NULL,
  `prefixo` varchar(255) DEFAULT NULL,
  `valor_minimo` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cupom_lista`
--

CREATE TABLE `cupom_lista` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `cupom` varchar(100) DEFAULT NULL,
  `utilizado` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimentos`
--

CREATE TABLE `depoimentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `nome` char(240) DEFAULT NULL,
  `email` char(240) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `bloqueio` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `depoimentos_grupos`
--

CREATE TABLE `depoimentos_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `botao_codigo_env_dep` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `grupo_produtos` varchar(100) DEFAULT NULL,
  `titulo` char(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaques_grupos`
--

CREATE TABLE `destaques_grupos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT 3,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaques_ordem`
--

CREATE TABLE `destaques_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `destaques_ordem`
--

INSERT INTO `destaques_ordem` (`id`, `codigo`, `data`) VALUES
(12, '159434970815143', '2,1,3,4,5,6,7,8,9,10,11'),
(15, '161990783284439', '12,13,14'),
(19, '163295826887444', '17,15,16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `duvidas`
--

CREATE TABLE `duvidas` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `resposta` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `duvidas_grupos`
--

CREATE TABLE `duvidas_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `tipo_menu` int(11) DEFAULT 0,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `duvidas_ordem`
--

CREATE TABLE `duvidas_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enquete`
--

CREATE TABLE `enquete` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `enquete` text DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `imagem` varchar(255) DEFAULT NULL,
  `posicao_img` int(11) DEFAULT 0,
  `botao_titulo` varchar(255) DEFAULT NULL,
  `endereco_padrao` varchar(255) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `posicao_enquete` int(11) DEFAULT 0,
  `botao_codigo_votar` varchar(100) DEFAULT NULL,
  `botao_codigo_img` varchar(100) DEFAULT NULL,
  `botao_codigo_result` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `enquete_resposta`
--

CREATE TABLE `enquete_resposta` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `enquete_codigo` varchar(255) NOT NULL,
  `resposta` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `enquete_resposta`
--

INSERT INTO `enquete_resposta` (`id`, `codigo`, `enquete_codigo`, `resposta`) VALUES
(1, '158529244573731', '158529244166997', 'nada'),
(2, '158529244866351', '158529244166997', 'seila'),
(3, '158529245260614', '158529244166997', 'nada a ver'),
(4, '159439240440531', '159439238414126', 'Por que sim'),
(5, '159439241341597', '159439238414126', 'Não sei do que esta falando'),
(6, '159439242619497', '159439238414126', 'E por que não'),
(7, '159439243220795', '159439238414126', 'To nem ai'),
(9, '159439267284538', '159439266330603', 'Resposta 2'),
(10, '159439267718290', '159439266330603', 'Resposta 3'),
(11, '159441846290527', '159439266330603', 'Resposta 1'),
(13, '159666049818507', '159666046972143', 'Bom'),
(14, '159666050451276', '159666046972143', 'Muito Bom'),
(15, '159666050851545', '159666046972143', 'Perfeito'),
(16, '162204258644485', '162204258273616', 'sadasd');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enquete_voto`
--

CREATE TABLE `enquete_voto` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `codigo_enquete` varchar(100) DEFAULT NULL,
  `codigo_resposta` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `enquete_voto`
--

INSERT INTO `enquete_voto` (`id`, `data`, `codigo_enquete`, `codigo_resposta`, `ip`) VALUES
(38, 1596725594, '159666046972143', '159666050451276', '::1'),
(39, 1606943294, '159666046972143', '159666050451276', '::1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe_grupos`
--

CREATE TABLE `equipe_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe_links`
--

CREATE TABLE `equipe_links` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `ico` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `equipe_links`
--

INSERT INTO `equipe_links` (`id`, `codigo`, `titulo`, `ico`, `link`) VALUES
(1, '159501135093967', 'Facebook', '1-[02-09-20][22-47-59].jpg', 'http://localhost/gerenciadorsites/'),
(3, '159501135093967', 'Instagram', '6-[02-09-20][22-50-05].jpg', 'http://localhost/gerenciadorsites/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe_ordem`
--

CREATE TABLE `equipe_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `uf`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais`
--

CREATE TABLE `filiais` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais_grupos`
--

CREATE TABLE `filiais_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais_imagem`
--

CREATE TABLE `filiais_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais_imagem_legenda`
--

CREATE TABLE `filiais_imagem_legenda` (
  `id` int(11) NOT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `filiais_imagem_legenda`
--

INSERT INTO `filiais_imagem_legenda` (`id`, `id_img`, `legenda`) VALUES
(6, '32', 'bbbbbbbb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais_imagem_ordem`
--

CREATE TABLE `filiais_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `filiais_imagem_ordem`
--

INSERT INTO `filiais_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(39, '159467171656866', '32'),
(40, '159467171656866', '32,33'),
(41, '159467171656866', '33,32'),
(42, '159467171656866', '32,33'),
(43, '159674104718133', '34'),
(44, '159674104718133', '34,35'),
(45, '159674104718133', '34,35,36'),
(46, '159674104718133', '34,35,36,37'),
(47, '159674104718133', '34,35,36,37,38'),
(48, '159674104718133', '34,35,36,37,38,39'),
(49, '159674077638372', '40'),
(50, '159674077638372', '40,41'),
(51, '159674077638372', '40,41,42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filiais_ordem`
--

CREATE TABLE `filiais_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `fotos`
--

INSERT INTO `fotos` (`id`, `codigo`, `categoria`, `titulo`, `previa`, `conteudo`, `ordem`) VALUES
(26, '158563131481344', '158499041979107', '222Album 1', 'teste222', '<p>asdasddd</p>\r\n', NULL),
(27, '159440478147253', '158499041979107', 'teste', 'sss', '<p>ss</p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_categorias`
--

CREATE TABLE `fotos_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_grupos`
--

CREATE TABLE `fotos_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `mostrar_categorias` int(11) DEFAULT 0,
  `ordem` varchar(100) DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT 3,
  `max_itens` int(11) DEFAULT 0,
  `tipo_menu` int(11) DEFAULT 0,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_imagem`
--

CREATE TABLE `fotos_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `fotos_imagem`
--

INSERT INTO `fotos_imagem` (`id`, `codigo`, `imagem`) VALUES
(15, '158563131481344', 'linda-arvore-excelente-vista-walpaper-[31-03-20][02-08-41].jpg'),
(13, '158563131481344', 'walpaper-tre-arvore-09-[31-03-20][02-08-39].jpg'),
(14, '158563131481344', 'outono-arvores-walpaper-[31-03-20][02-08-40].jpg'),
(17, '158563131481344', '4-[10-07-20][14-42-47].jpg'),
(18, '158563131481344', '5-[10-07-20][14-42-48].jpg'),
(19, '158563131481344', '6-[10-07-20][14-42-49].jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_imagem_legenda`
--

CREATE TABLE `fotos_imagem_legenda` (
  `id` int(11) NOT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `fotos_imagem_legenda`
--

INSERT INTO `fotos_imagem_legenda` (`id`, `id_img`, `legenda`) VALUES
(5, '8', 'fghfghjfghjfghjhfg'),
(6, '14', ''),
(7, '29', 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_imagem_ordem`
--

CREATE TABLE `fotos_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `fotos_imagem_ordem`
--

INSERT INTO `fotos_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(11, '158499043043960', '6'),
(12, '158499043043960', '6,7'),
(13, '158499043043960', '6,7,8'),
(14, '158499043043960', '6,7,8,9'),
(15, '158499043043960', '6,7,8,9,10'),
(16, '158499043043960', '6,7,8,9,10,11'),
(17, '158499043043960', '6,7,8,9,10,11,12'),
(18, '158499043043960', '6,8,7,9,10,11,12'),
(19, '158499043043960', '8,6,7,9,10,11,12'),
(20, '158563131481344', '13'),
(21, '158563131481344', '13,14'),
(22, '158563131481344', '13,14,15'),
(23, '158563131481344', '14,13,15'),
(24, '158563131481344', '15,14,13'),
(25, '158563131481344', '15,14,13,16'),
(26, '158563131481344', '15,14,13,16,17'),
(27, '158563131481344', '15,14,13,16,17,18'),
(28, '158563131481344', '15,14,13,16,17,18,19'),
(29, '159441082730886', '20'),
(30, '159441082730886', '20,21'),
(31, '159441082730886', '20,21,22'),
(32, '159441082730886', '20,21,22,23'),
(33, '159441082730886', '20,21,22,23,24'),
(34, '159441082730886', '21,20,22,23,24'),
(35, '159674968476134', '25'),
(36, '159674968476134', '25,26'),
(37, '159674968476134', '25,26,27'),
(38, '159674968476134', '25,26,27,28'),
(39, '159676600529409', '29'),
(40, '159676600529409', '29,30'),
(41, '159676600529409', '29,30,31'),
(42, '159676600529409', '29,30,31,32'),
(43, '159676600529409', '29,30,31,32,33'),
(44, '159676945575461', '34'),
(45, '159676945575461', '34,35'),
(46, '159676945575461', '34,35,36'),
(47, '159676945575461', '34,35,36,37');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_marcadagua`
--

CREATE TABLE `fotos_marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `fotos_marcadagua`
--

INSERT INTO `fotos_marcadagua` (`id`, `codigo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_ordem`
--

CREATE TABLE `fotos_ordem` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `fotos_ordem`
--

INSERT INTO `fotos_ordem` (`id`, `categoria`, `data`) VALUES
(17, '158499041979107', '24'),
(18, '158499041979107', '24,25'),
(19, '158499041979107', '25,24'),
(20, '158499041979107', '24,25'),
(21, '158499041979107', '24,25,26'),
(22, '158499041979107', '24,25,26,27'),
(23, '158499041979107', '27,26'),
(24, '159440768612087', '28'),
(25, '159440768066250', '29'),
(26, '159440768612087', '28,30'),
(27, '159440768612087', '30,28'),
(28, '159674962557012', '31'),
(29, '159674963467186', '32'),
(30, '159674962557012', '31,33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `frete`
--

CREATE TABLE `frete` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `titulo_exibicao` varchar(255) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `acrescimo_fixo` double DEFAULT 0,
  `acrescimo_porc` double DEFAULT 0,
  `ativo` int(11) DEFAULT NULL,
  `gratis_acima_de` double DEFAULT NULL,
  `estado_tipo_AC` int(11) DEFAULT NULL,
  `estado_fixo_AC` double DEFAULT NULL,
  `estado_tipo_AL` int(11) DEFAULT NULL,
  `estado_fixo_AL` double DEFAULT NULL,
  `estado_tipo_AP` int(11) DEFAULT NULL,
  `estado_fixo_AP` double DEFAULT NULL,
  `estado_tipo_AM` int(11) DEFAULT NULL,
  `estado_fixo_AM` double DEFAULT NULL,
  `estado_tipo_BA` int(11) DEFAULT NULL,
  `estado_fixo_BA` double DEFAULT NULL,
  `estado_tipo_CE` int(11) DEFAULT NULL,
  `estado_fixo_CE` double DEFAULT NULL,
  `estado_tipo_DF` int(11) DEFAULT NULL,
  `estado_fixo_DF` double DEFAULT NULL,
  `estado_tipo_ES` int(11) DEFAULT NULL,
  `estado_fixo_ES` double DEFAULT NULL,
  `estado_tipo_GO` int(11) DEFAULT NULL,
  `estado_fixo_GO` double DEFAULT NULL,
  `estado_tipo_MA` int(11) DEFAULT NULL,
  `estado_fixo_MA` double DEFAULT NULL,
  `estado_tipo_MT` int(11) DEFAULT NULL,
  `estado_fixo_MT` double DEFAULT NULL,
  `estado_tipo_MS` int(11) DEFAULT NULL,
  `estado_fixo_MS` double DEFAULT NULL,
  `estado_tipo_MG` int(11) DEFAULT NULL,
  `estado_fixo_MG` double DEFAULT NULL,
  `estado_tipo_PA` int(11) DEFAULT NULL,
  `estado_fixo_PA` double DEFAULT NULL,
  `estado_tipo_PB` int(11) DEFAULT NULL,
  `estado_fixo_PB` double DEFAULT NULL,
  `estado_tipo_PR` int(11) DEFAULT NULL,
  `estado_fixo_PR` double DEFAULT NULL,
  `estado_tipo_PE` int(11) DEFAULT NULL,
  `estado_fixo_PE` double DEFAULT NULL,
  `estado_tipo_PI` int(11) DEFAULT NULL,
  `estado_fixo_PI` double DEFAULT NULL,
  `estado_tipo_RJ` int(11) DEFAULT NULL,
  `estado_fixo_RJ` double DEFAULT NULL,
  `estado_tipo_RN` int(11) DEFAULT NULL,
  `estado_fixo_RN` double DEFAULT NULL,
  `estado_tipo_RS` int(11) DEFAULT NULL,
  `estado_fixo_RS` double DEFAULT NULL,
  `estado_tipo_RO` int(11) DEFAULT NULL,
  `estado_fixo_RO` double DEFAULT NULL,
  `estado_tipo_RR` int(11) DEFAULT NULL,
  `estado_fixo_RR` double DEFAULT NULL,
  `estado_tipo_SC` int(11) DEFAULT NULL,
  `estado_fixo_SC` double DEFAULT NULL,
  `estado_tipo_SP` int(11) DEFAULT NULL,
  `estado_fixo_SP` double DEFAULT NULL,
  `estado_tipo_SE` int(11) DEFAULT NULL,
  `estado_fixo_SE` double DEFAULT NULL,
  `estado_tipo_TO` int(11) DEFAULT NULL,
  `estado_fixo_TO` double DEFAULT NULL,
  `proximidade_cidade` varchar(255) DEFAULT NULL,
  `proximidade_estado` varchar(10) DEFAULT NULL,
  `melhor_envio_id` varchar(255) DEFAULT NULL,
  `melhor_envio_secret` varchar(255) DEFAULT NULL,
  `melhor_envio_code` text DEFAULT NULL,
  `melhor_envio_token` text DEFAULT NULL,
  `melhor_envio_token_r` text DEFAULT NULL,
  `melhor_envio_token_fixo` text DEFAULT NULL,
  `melhor_envio_token_validade` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `frete`
--

INSERT INTO `frete` (`id`, `titulo`, `titulo_exibicao`, `cep`, `acrescimo_fixo`, `acrescimo_porc`, `ativo`, `gratis_acima_de`, `estado_tipo_AC`, `estado_fixo_AC`, `estado_tipo_AL`, `estado_fixo_AL`, `estado_tipo_AP`, `estado_fixo_AP`, `estado_tipo_AM`, `estado_fixo_AM`, `estado_tipo_BA`, `estado_fixo_BA`, `estado_tipo_CE`, `estado_fixo_CE`, `estado_tipo_DF`, `estado_fixo_DF`, `estado_tipo_ES`, `estado_fixo_ES`, `estado_tipo_GO`, `estado_fixo_GO`, `estado_tipo_MA`, `estado_fixo_MA`, `estado_tipo_MT`, `estado_fixo_MT`, `estado_tipo_MS`, `estado_fixo_MS`, `estado_tipo_MG`, `estado_fixo_MG`, `estado_tipo_PA`, `estado_fixo_PA`, `estado_tipo_PB`, `estado_fixo_PB`, `estado_tipo_PR`, `estado_fixo_PR`, `estado_tipo_PE`, `estado_fixo_PE`, `estado_tipo_PI`, `estado_fixo_PI`, `estado_tipo_RJ`, `estado_fixo_RJ`, `estado_tipo_RN`, `estado_fixo_RN`, `estado_tipo_RS`, `estado_fixo_RS`, `estado_tipo_RO`, `estado_fixo_RO`, `estado_tipo_RR`, `estado_fixo_RR`, `estado_tipo_SC`, `estado_fixo_SC`, `estado_tipo_SP`, `estado_fixo_SP`, `estado_tipo_SE`, `estado_fixo_SE`, `estado_tipo_TO`, `estado_fixo_TO`, `proximidade_cidade`, `proximidade_estado`, `melhor_envio_id`, `melhor_envio_secret`, `melhor_envio_code`, `melhor_envio_token`, `melhor_envio_token_r`, `melhor_envio_token_fixo`, `melhor_envio_token_validade`) VALUES
(1, 'Correios PAC', 'Correios Pac', '69960000', 0, 0, 0, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Correios Sedex', 'Correios Sedex', '69960000', 0, 0, 0, 10000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Retirar no Local', 'Retirar no local', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Transportadora Padrão', 'Transportadora Padrão', '', 10, 15, 1, 100000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Melhor Envio', 'Melhor Envio', '69960000', 0, 0, 0, 400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6214', 'CrXiVZ3IAEovjHS2hxgjRPGnxtgIHU11ZK6QyZUI', '', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI3YzM4ODA3MjIwNWI3MzFkNWQ0OTRkYjBmMGMwMzEzZjViZmIwYTExYTQwYzMzMzY1NzJjZGJlYjIyY2RiYTQyZjRhZTNjYWExODY3ODkxIn0.eyJhdWQiOiIxMTcyIiwianRpIjoiMjdjMzg4MDcyMjA1YjczMWQ1ZDQ5NGRiMGYwYzAzMTNmNWJmYjBhMTFhNDBjMzMzNjU3MmNkYmViMjJjZGJhNDJmNGFlM2NhYTE4Njc4OTEiLCJpYXQiOjE2MTA0OTI1MzcsIm5iZiI6MTYxMDQ5MjUzNywiZXhwIjoxNjEzMDg0NTM3LCJzdWIiOiI0N2IzMzhhMC02M2Q3LTQwYWItODlmYS04ZmEzZjY4ZDc0Y2QiLCJzY29wZXMiOlsiZWNvbW1lcmNlLXNoaXBwaW5nIl19.NfdyfSi_v9csts1N37FvORWfa9fWg9q_4Jo1IRvwgLur31mtNj89Xeq-OHXdH6nrlFybl4V8JHESSGbyLIu9sY2lHCA1zYs0n8m9t4AVYa5epVoRqgESkT_dlnjy6IM_dwYvSbeRWDi0KdWjzdhPNv65Ye9cJJmsEIudZFBSJEDHT10vG76TxQCNd3akuVCl2rgWfzgJz2kZqOEV8H7oEQEfCxv_2rFtry010Ge2rT6N56duqovHdI9EnGMxp0gObGaotLFl_PZW-hx0DDn2bHHu1x5_5Ih0NpgEpvpYUKa9QEbEaDJPV0WPJhFofT9rKuuuPhT8M40HUUzWUPrnRIZkRhnTgvyaJB_X76DPKdkUeAXjfHn_uvQez6JzGzxP31aYUO-ADaZ0iM5zRpiMV-DrVeiyldvI-V0sko5yBIEP_YQDzO9iTX5kPLOcahWNW_s6hc9I3K6yuCBsqjRW2CnWR3MNQUDZKShC640G_wjWTCNe6Auiqj5OHu29ucXN3V8eovYyNSic9elq9A-mWF-5OXN0xzvr-U2h4zSwsoVRAtsgzKneByPBjvK_76jGVV_sKizg2SmQgfr5hw1ilkr04ZT5rlLcty7fjJrkCz6qCfMjWSP90HGs3hcSvtuRg6G53Z_-r19BSmxT0eYPStuJuUflTbF_lxnh-X-XR98', 'def502008c8b97c8af7bd4c43473ce55615a588c537a9cbfa9e5616b878791818d7c9cd6cca4723e50361d9dd128b13213fcac6f25501147ed780f760d4fae716bc4689285a9f73c4a5200a0940366efbaf9c68cd50aaf46e83ea3057c5bb7ad464e3a7e025f430de90f084670883a862616f36403fef9b2e856ad0d6b0a577a6337d465c795e95998d16721d1cf75172982f913f6e820c8a78a072c0f46a9208265cf9550677f7c33f2ee0ee61e9bee8275570214ed9b4cb45ad711e8881648492b183452a90b6bc4eff7867ec9f2cf56c9e0858306c31ce4a9e4743e8dee45085810f4c20e8ea835c2f204fae71e3dcc92666f4ed56d32d92d012b682125a0d0703598b3676aa15c4b07b3f6a1c7c0844bb1db2b3f7f45ee9bde8e0bacbe13f70b1587d69298a7948416517c8eb2b7a606915489b92946fbfe0e55ee29bb954ecb9da321962e870bc94f35381c3f02a9db89b77f6471245a5d466d306ee791e9cb3ad6f5f70c39ee05f6b940c151b430ee5fba1fac2a02482369c528ae5c97cf5ec1984f837d5d2a0d03f529faf5dcee6593700aa2e48ad2a737c053', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBkYjhjYWY1YTFlMTZiNWMwYTE3OWY1MDVhZmRmNDhkOGU2MzI4ZDdlNDFkNWMzMDY0NzExYjdkZTVlOWJiNmRiMmRmYTBhMzQ1NGM3ODYxIn0.eyJhdWQiOiIxIiwianRpIjoiMGRiOGNhZjVhMWUxNmI1YzBhMTc5ZjUwNWFmZGY0OGQ4ZTYzMjhkN2U0MWQ1YzMwNjQ3MTFiN2RlNWU5YmI2ZGIyZGZhMGEzNDU0Yzc4NjEiLCJpYXQiOjE2Mzc2ODIxMjUsIm5iZiI6MTYzNzY4MjEyNSwiZXhwIjoxNjY5MjE4MTI1LCJzdWIiOiI4N2QxYzc3NC1iMmFhLTRlYTktYjdmOC03ODk4ZDczMTJmZmMiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLWRlc3Ryb3kiLCJwcm9kdWN0cy13cml0ZSIsInB1cmNoYXNlcy1yZWFkIiwic2hpcHBpbmctY2FsY3VsYXRlIiwic2hpcHBpbmctY2FuY2VsIiwic2hpcHBpbmctY2hlY2tvdXQiLCJzaGlwcGluZy1jb21wYW5pZXMiLCJzaGlwcGluZy1nZW5lcmF0ZSIsInNoaXBwaW5nLXByZXZpZXciLCJzaGlwcGluZy1wcmludCIsInNoaXBwaW5nLXNoYXJlIiwic2hpcHBpbmctdHJhY2tpbmciLCJlY29tbWVyY2Utc2hpcHBpbmciLCJ0cmFuc2FjdGlvbnMtcmVhZCIsInVzZXJzLXJlYWQiLCJ1c2Vycy13cml0ZSIsIndlYmhvb2tzLXJlYWQiLCJ3ZWJob29rcy13cml0ZSJdfQ.Zs4jn6G_x9WI_aMK1Ph1yl6qfoBN9miDIeb2H9JXOzYgwEsExygnCICHvjI22Iprw5a_I_NHnld4JhiJ3m3ghzBBg7lMruHIdFYCB8G1RI0DBPl5uaOrcLhaS-g5WWIx8M7TgZK9IPMeMGBCfWOfOl-dJBP9CdjLZSzG6safAqa9x1EGTzbwXW6J32v844QyxkFumjJ_kKpGHqbI1Ps5SKtFWTBqpmNvXW1LWoEwKwCCStyGwFGs4MkH5wn6c4LIcpsSPcylvMi4Y6HnnJjJiN5RVLjqk8jjroh5onO_U5Isdx9_j8aeqa5UujmZBV3kF5Vafip0QyF4hi65fgmA5YF2a54ZVzqObMtH-vu3VREAUhFa-nDyRoQ_eimA1eJprOj1asakuMSlRYJSCjlFE6IAs-mx_HIQXhVJmpjUT3k9w2EmSfvypGh7bM9iFmFbTO-lDsJufxhhsgXjqCEirVVvx5lmY8hRKMj2b3g1_vF48_V6FYq-_xfyrWfCxzkRTyLghoiXqz1MLVGnNaOv-_lsYHEP99Iw4OW5Yk0Og7Tt1r7uSRKqzIeA8V_8ZQfgHg-dj_M0iQ99owQSMNW7BYSbeKv6w7eGA0AEmt4M6GbPqyEqvs0m7lt_jEO_K8MpUE8JzVWjr9bBfI3PlSSNS4U2QSQGuyamYGY9mpoFq4Q', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem`
--

CREATE TABLE `garagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `categoria_cod` varchar(100) DEFAULT NULL,
  `categoria_nome` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `marca_cod` varchar(100) DEFAULT NULL,
  `marca_nome` varchar(255) DEFAULT NULL,
  `modelo_cod` varchar(100) DEFAULT NULL,
  `modelo_nome` varchar(255) DEFAULT NULL,
  `cor_cod` varchar(100) DEFAULT NULL,
  `cor_nome` varchar(255) DEFAULT NULL,
  `combustivel_cod` varchar(100) DEFAULT NULL,
  `combustivel_nome` varchar(255) DEFAULT NULL,
  `transmissao_cod` varchar(100) DEFAULT NULL,
  `transmissao_nome` varchar(255) DEFAULT NULL,
  `motor_cod` varchar(100) DEFAULT NULL,
  `motor_nome` varchar(255) DEFAULT NULL,
  `ano_fab` varchar(100) DEFAULT NULL,
  `ano_modelo` varchar(100) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `km` varchar(100) DEFAULT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem`
--

INSERT INTO `garagem` (`id`, `codigo`, `ref`, `tipo`, `categoria_cod`, `categoria_nome`, `titulo`, `destaque`, `marca_cod`, `marca_nome`, `modelo_cod`, `modelo_nome`, `cor_cod`, `cor_nome`, `combustivel_cod`, `combustivel_nome`, `transmissao_cod`, `transmissao_nome`, `motor_cod`, `motor_nome`, `ano_fab`, `ano_modelo`, `obs`, `km`, `placa`, `valor`, `status`) VALUES
(178, '163682431439758', '151910', 'novo', '156710289467380', 'Carros', 'CHEVROLET ONIX JOY 1.0', 1, '155794603092856', 'Chevrolet', '155794759752913', 'ONIX', '155794832670518', 'Preto', '155794805988440', 'Flex', '155795042098934', 'Manual', '155855811669777', '1.4', '2016', '2016', '', '55,0000', '', 56000, 1),
(177, '163657765335813', '5641616', 'novo', '156710289467380', 'Carros', 'VOLKSWAGEN GOLF 1.0L', 1, '155794631486482', 'Volkswagem', '155794746571282', 'GOLF', '155794837584283', 'Vermelho', '155794805988440', 'Flex', '155795042098934', 'Manual', '155855783729135', '1.0', '2021', '2021', '', '0', 'OVW-3987', 45000, 1),
(176, '163657686346290', '651515', 'novo', '156710286835469', 'Pickups', '2021 FIAT TORO ENDURANCE MT5', 1, '155794610252349', 'Fiat', '155844829133135', 'Bravo T-Jet', '155794835259233', 'Prata', '155794804340386', 'Gasolina', '155795042639172', 'Automática', '155855785558862', '2.2', '2021', '2019', '', '0', '', 65000.8, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_categorias`
--

CREATE TABLE `garagem_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_categorias`
--

INSERT INTO `garagem_categorias` (`id`, `codigo`, `titulo`) VALUES
(29, '156751887938498', 'Suvs'),
(28, '156710299580999', 'Vans'),
(27, '156710289467380', 'Carros'),
(26, '156710286835469', 'Pickups');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_combustivel`
--

CREATE TABLE `garagem_combustivel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_combustivel`
--

INSERT INTO `garagem_combustivel` (`id`, `codigo`, `titulo`) VALUES
(9, '155794806717520', 'Diesel'),
(8, '155794805988440', 'Flex'),
(7, '155794804340386', 'Gasolina'),
(10, '155794807447466', 'Etanol');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_cores`
--

CREATE TABLE `garagem_cores` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_cores`
--

INSERT INTO `garagem_cores` (`id`, `codigo`, `titulo`) VALUES
(15, '155794834844035', 'Dourado'),
(14, '155794834256991', 'Cinza'),
(13, '155794832670518', 'Preto'),
(12, '155794832295804', 'Branco'),
(16, '155794835259233', 'Prata'),
(17, '155794837584283', 'Vermelho'),
(18, '155794837897195', 'Azul');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_detalhes`
--

CREATE TABLE `garagem_detalhes` (
  `id` int(11) NOT NULL,
  `destino_form` varchar(255) DEFAULT NULL,
  `destino_voltar` varchar(255) DEFAULT NULL,
  `formato_pg` int(11) DEFAULT 1,
  `font_codigo` varchar(100) DEFAULT NULL,
  `font_family` varchar(100) DEFAULT NULL,
  `whats_destino` varchar(100) DEFAULT NULL,
  `botao_codigo_ped` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_detalhes`
--

INSERT INTO `garagem_detalhes` (`id`, `destino_form`, `destino_voltar`, `formato_pg`, `font_codigo`, `font_family`, `whats_destino`, `botao_codigo_ped`) VALUES
(1, 'alvanisio@gmail.com', '', 1, '163285999581791', 'Exol2 Regular', '46991203707', '160218454125922');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_grupos`
--

CREATE TABLE `garagem_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `tipo` int(11) DEFAULT 0,
  `formato` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT 3,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_pagina` int(11) DEFAULT 3,
  `max_itens` int(11) DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `busca_pagina` varchar(255) DEFAULT NULL,
  `font` varchar(100) DEFAULT NULL,
  `font_family` text DEFAULT NULL,
  `bt_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL,
  `novo_usado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_grupos`
--

INSERT INTO `garagem_grupos` (`id`, `codigo`, `titulo`, `tipo`, `formato`, `itens_por_linha`, `mostrar_titulo`, `itens_por_pagina`, `max_itens`, `categoria`, `slogan`, `busca_pagina`, `font`, `font_family`, `bt_codigo`, `classes`, `classes_img`, `novo_usado`) VALUES
(22, '163657674628384', '<span style=\"font-size: 36px;\"><span style=\"font-size: 38px;\" exol2=\"\" bold\";\"=\"\">Destaques</span><span style=\"font-size: 38px;\"> da Semana</span></span>', 3, 1, 3, 1, 6, 0, '0', '', 'criacaodesites', '163285999581791', 'Exol2 Regular', NULL, '', '', 'novo'),
(23, '163657828090973', '<span style=\"font-size: 38px;\">Confira nosso estoque</span>', 1, 1, 3, 1, 10, 0, '0', '', 'criacaodesites', '163285999581791', 'Exol2 Regular', NULL, '', '', 'usado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_grupos_imagens`
--

CREATE TABLE `garagem_grupos_imagens` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_grupos_imagens`
--

INSERT INTO `garagem_grupos_imagens` (`id`, `codigo`, `imagem`) VALUES
(29, '163527097231140', 'caro-[27-10-21][15-52-54].jpg'),
(30, '163527097231140', 'baner-topo-[27-10-21][18-57-47].png'),
(31, '163537424278282', 'baner-topo-[27-10-21][19-37-47].png'),
(33, '163537424278282', 'L20-Triton-Sport-2021-HPE-S-3-[27-10-21][22-27-39].jpg'),
(34, '163657620213591', 'novo-onix-premier-20-[10-11-21][17-33-27].jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_grupos_sel`
--

CREATE TABLE `garagem_grupos_sel` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_imagem`
--

CREATE TABLE `garagem_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `garagem_imagem`
--

INSERT INTO `garagem_imagem` (`id`, `codigo`, `imagem`) VALUES
(996, '163657686346290', 'fiatoro-[10-11-21][17-42-31].jpg'),
(997, '163657765335813', 'golfrente1-[10-11-21][17-56-23].webp'),
(998, '163682431439758', 'chevrolet-onix-2016-cinza-57c7bd3b3ef-[13-11-21][14-30-19].png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_imagem_legenda`
--

CREATE TABLE `garagem_imagem_legenda` (
  `id` int(11) NOT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_imagem_ordem`
--

CREATE TABLE `garagem_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `garagem_imagem_ordem`
--

INSERT INTO `garagem_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(1, '163538013797706', '983'),
(2, '163538018912449', '984'),
(3, '163538022581716', '985'),
(4, '163538022581716', '985,986'),
(5, '163557070275560', '987'),
(6, '163538013797706', '983,988'),
(7, '163538013797706', '983,988,989'),
(8, '163538013797706', '983,988,989,990'),
(9, '163538013797706', '983,988,989,990,991'),
(10, '163538013797706', '983,988,989,990,991,992'),
(11, '163538013797706', '983,988,989,990,991,992,993'),
(12, '163538013797706', '983,988,989,990,991,992,993,994'),
(13, '163538013797706', '983,988,989,990,991,992,993,994,995'),
(14, '163657686346290', '996'),
(15, '163657765335813', '997'),
(16, '163682431439758', '998');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_marcas`
--

CREATE TABLE `garagem_marcas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_marcas`
--

INSERT INTO `garagem_marcas` (`id`, `codigo`, `titulo`, `imagem`) VALUES
(8, '155794610252349', 'Fiat', 'fiat-[15-05-19][15-48-45].png'),
(7, '155794603092856', 'Chevrolet', 'chevrolet-[15-05-19][15-47-20].png'),
(9, '155794614452125', 'Ford', 'ford-[15-05-19][15-49-08].png'),
(10, '155794616695667', 'Honda', 'hondacaro-[15-05-19][15-49-29].png'),
(11, '155794619081073', 'Hyundai', 'hyundai-[15-05-19][15-49-56].png'),
(12, '155794622691860', 'Lexus', 'landrover-[15-05-19][15-50-29].png'),
(13, '155794624785112', 'Mitsubishi', 'mitsubishi-[15-05-19][15-50-50].png'),
(14, '155794626597378', 'Peugeot', 'peugeot-[15-05-19][15-51-08].png'),
(15, '155794629426100', 'Toyota', 'toyota-[15-05-19][15-51-37].png'),
(16, '155794631486482', 'Volkswagem', 'volkswagem-[15-05-19][15-51-57].png'),
(17, '155844620833412', 'Bmw', 'bmw-[21-05-19][10-44-14].jpg'),
(18, '155870429123733', 'Renault', 'renault-[24-05-19][10-25-49].jpg'),
(19, '155870533159242', 'Yamaha', 'logo-yamaha-[24-05-19][10-42-31].jpg'),
(20, '155896573856558', 'Citroen', '1-citroen-logo-[27-05-19][11-02-34].jpg'),
(21, '156751135761778', 'Audi', 'WhatsAp-Image-2019-09-03-at-08-54-13-[03-09-19][08-54-37].jpeg'),
(22, '156751903264799', 'Chery', NULL),
(23, '156751927196062', 'Chrysler', NULL),
(24, '156779042934091', 'Jac', NULL),
(25, '156779056677064', 'Jeep', NULL),
(26, '156779155060525', 'Kia', NULL),
(27, '156779182947223', 'Lifan', NULL),
(28, '156779338996283', 'Land Rover', NULL),
(29, '156779871836878', 'Mercedes', NULL),
(30, '156779986413420', 'Nissan', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_modelos`
--

CREATE TABLE `garagem_modelos` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_modelos`
--

INSERT INTO `garagem_modelos` (`id`, `marca`, `codigo`, `titulo`) VALUES
(6, '155794603092856', '155794726675704', 'CELTA'),
(7, '155794603092856', '155794728012363', 'CORSA HATCH'),
(8, '155794610252349', '155794730118233', 'PALIO'),
(9, '155794616695667', '155794735656123', 'CIVIC'),
(10, '155794610252349', '155794736774960', 'MILLE'),
(11, '155794614452125', '155794739087420', 'FIESTA'),
(12, '155794614452125', '155794740945732', 'FOCUS'),
(13, '155794614452125', '155794741776033', 'KA'),
(14, '155794629426100', '155794742885383', 'COROLLA'),
(15, '155794631486482', '155794744657677', 'FOX'),
(16, '155794631486482', '155794745594534', 'GOL'),
(17, '155794631486482', '155794746571282', 'GOLF'),
(18, '155794631486482', '155794747257223', 'JETTA'),
(19, '155794631486482', '155794747846723', 'POLO'),
(20, '155794603092856', '155794750369375', 'MONTANA'),
(21, '155794610252349', '155794752936325', 'STRADA'),
(22, '155794614452125', '155794755912888', 'ECOSPORT'),
(23, '155794629426100', '155794757327841', 'HILUX'),
(24, '155794631486482', '155794758138995', 'SAVEIRO'),
(25, '155794603092856', '155794758976097', 'VECTRA'),
(26, '155794603092856', '155794759752913', 'ONIX'),
(28, '155794603092856', '155844097215846', 'ONIX'),
(29, '155794603092856', '155844521591861', 'S-10 CD'),
(30, '155794603092856', '155844545628653', 'BLAZER 2.4 ADVANTAGE'),
(31, '155844620833412', '155844626912611', '540'),
(32, '155794631486482', '155844702351595', 'Passat 2.0 TSI'),
(33, '155794603092856', '155844762736587', 'Cruze Lt Aut.'),
(34, '155794603092856', '155844786144027', 'Cruze Lt Aut.'),
(35, '155794610252349', '155844829133135', 'Bravo T-Jet'),
(36, '155794603092856', '155844860585551', 'Celta LT'),
(37, '155794614452125', '155854805053049', 'ECOSPORT'),
(38, '155794631486482', '155854845736670', 'POLO 1.6 MI'),
(39, '155794603092856', '155855235517995', 'Montana 1.4 Conquest'),
(40, '155794603092856', '155855237024916', 'Montana 1.4 Conquest'),
(41, '155794610252349', '155855575528548', 'Uno Fire Economy'),
(42, '155794610252349', '155855576714874', 'Uno Vivace'),
(43, '155794610252349', '155855578565176', 'Uno Fire Economy'),
(44, '155794631486482', '155855659277789', 'Fusca 1600 - Itamar - Série Luxo II'),
(45, '155794603092856', '155855699520556', 'Veículo de Colecionador - Opala Comodoro 4.1'),
(46, '155794603092856', '155855871898267', 'Meriva 1.8 Maxx'),
(47, '155794603092856', '155855877491926', 'Meriva 1.8 Maxx'),
(48, '155794610252349', '155861910364795', 'IDEA 1.4 ELX'),
(49, '155794603092856', '155863453252527', 'Corsa Sedan 1.4'),
(50, '155794631486482', '155863548791382', 'Parati 1.8 Confortiline'),
(51, '155870429123733', '155870437673386', 'Clio'),
(52, '155794610252349', '155870490521555', 'Doblo'),
(53, '155870533159242', '155870538056012', 'Fazer 150 ED'),
(55, '155896573856558', '155896589144970', 'C3 1.5 Tendance'),
(56, '155794610252349', '156027949844979', 'LINEA ABSOLUT 1.9 DUALOGIC'),
(58, '155794614452125', '156097482352583', 'New Fiesta 1.5 SE'),
(61, '155794624785112', '163545372794682', 'L200');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_motor`
--

CREATE TABLE `garagem_motor` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_motor`
--

INSERT INTO `garagem_motor` (`id`, `codigo`, `titulo`) VALUES
(24, '155855785195406', '2.0'),
(22, '155855783729135', '1.0'),
(25, '155855785558862', '2.2'),
(26, '155855811669777', '1.4'),
(27, '155855880363755', '4.1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_opcionais`
--

CREATE TABLE `garagem_opcionais` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_opcionais`
--

INSERT INTO `garagem_opcionais` (`id`, `codigo`, `titulo`) VALUES
(26, '155795985942083', 'DESEMBAÇADOR TRASEIRO'),
(25, '155795985142010', 'TRAVAS ELÉTRICAS'),
(24, '155795984185226', 'BANCO DO MOTORISTA COM AJUSTE DE ALTURA'),
(23, '155795982980778', 'ALARME'),
(27, '155795986579204', 'PORTA-COPOS'),
(28, '155795987224164', 'AR QUENTE'),
(29, '155795987916350', 'DIREÇÃO HIDRÁULICA'),
(30, '155795988515210', 'LIMPADOR TRASEIRO'),
(31, '155795989039487', 'VIDROS ELÉTRICOS'),
(32, '155795989886687', 'ENCOSTO DE CABEÇA TRASEIRO'),
(33, '155795991438361', 'RODAS DE LIGA LEVE'),
(34, '155796002185645', 'AR CONDICIONADO'),
(35, '155796002749571', 'AIR BAG DUPLO'),
(36, '155796004089989', 'BANCOS DE COURO'),
(37, '155796004898523', 'FREIO ABS'),
(39, '155844522994892', '4X4'),
(40, '155844663595749', 'banco com regulagem elétrica'),
(41, '155844693337033', 'Park Assist'),
(42, '155844697218526', 'Botão Start Stop'),
(43, '155844704082227', 'Farol de Xenon'),
(44, '155855599425174', 'Multimídia'),
(45, '155855600246546', 'Camera de ré'),
(46, '155896822142026', 'CD e sistema de som'),
(47, '155896823265879', 'sensor de estacionamento'),
(48, '155896826425643', 'Direção Elétrica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_opcionais_sel`
--

CREATE TABLE `garagem_opcionais_sel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `opcional` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_opcionais_sel`
--

INSERT INTO `garagem_opcionais_sel` (`id`, `codigo`, `opcional`) VALUES
(3, '155796404693781', '155795987916350'),
(2, '155796404693781', '155795982980778'),
(4, '155796404693781', '155795985142010'),
(5, '155796404693781', '155795991438361'),
(6, '155805360575688', '155795985142010'),
(7, '155805360575688', '155795984185226'),
(8, '155805360575688', '155795982980778'),
(9, '155805360575688', '155795986579204'),
(10, '155805360575688', '155795987916350'),
(11, '155805360575688', '155795988515210'),
(12, '155805360575688', '155795989039487'),
(13, '155805360575688', '155795989886687'),
(14, '155805360575688', '155795991438361'),
(15, '155805360575688', '155796002185645'),
(16, '155805360575688', '155796004089989'),
(17, '155805360575688', '155796004898523'),
(18, '155805384284806', '155795987224164'),
(19, '155805384284806', '155795987916350'),
(20, '155805384284806', '155795988515210'),
(21, '155807863561044', '155796004898523'),
(22, '155832314262407', '155795985942083'),
(23, '155832314262407', '155795984185226'),
(24, '155832314262407', '155795987224164'),
(25, '155832314262407', '155795987916350'),
(26, '155832314262407', '155795988515210'),
(27, '155832314262407', '155795991438361'),
(28, '155832314262407', '155796002749571'),
(29, '155844131944279', '155795985942083'),
(30, '155844131944279', '155795985142010'),
(31, '155844131944279', '155795984185226'),
(32, '155844131944279', '155795982980778'),
(33, '155844131944279', '155795986579204'),
(34, '155844131944279', '155795987224164'),
(35, '155844131944279', '155795987916350'),
(36, '155844131944279', '155795988515210'),
(37, '155844131944279', '155795989039487'),
(38, '155844131944279', '155795989886687'),
(39, '155844131944279', '155796002185645'),
(40, '155844131944279', '155796002749571'),
(41, '155844131944279', '155796004089989'),
(42, '155844131944279', '155796004898523'),
(43, '155844470682380', '155795985942083'),
(44, '155844470682380', '155795985142010'),
(45, '155844470682380', '155795984185226'),
(46, '155844470682380', '155795982980778'),
(47, '155844470682380', '155795986579204'),
(48, '155844470682380', '155795987224164'),
(49, '155844470682380', '155795987916350'),
(50, '155844470682380', '155795988515210'),
(51, '155844470682380', '155795989039487'),
(52, '155844470682380', '155795989886687'),
(53, '155844470682380', '155796002185645'),
(54, '155844470682380', '155796002749571'),
(55, '155844470682380', '155796004898523'),
(56, '155844516246342', '155795985142010'),
(57, '155844516246342', '155795982980778'),
(58, '155844516246342', '155795986579204'),
(59, '155844516246342', '155795987224164'),
(60, '155844516246342', '155795987916350'),
(61, '155844516246342', '155795989039487'),
(62, '155844516246342', '155796002185645'),
(63, '155844516246342', '155796002749571'),
(64, '155844516246342', '155796004898523'),
(65, '155844516246342', '155844522994892'),
(66, '155844548094103', '155795985942083'),
(67, '155844548094103', '155795985142010'),
(68, '155844548094103', '155795984185226'),
(69, '155844548094103', '155795982980778'),
(70, '155844548094103', '155795986579204'),
(71, '155844548094103', '155795987224164'),
(72, '155844548094103', '155795987916350'),
(73, '155844548094103', '155795988515210'),
(74, '155844548094103', '155795989886687'),
(75, '155844548094103', '155795991438361'),
(76, '155844548094103', '155796002185645'),
(77, '155844548094103', '155796004898523'),
(78, '155844628865643', '155795985942083'),
(79, '155844628865643', '155795985142010'),
(80, '155844628865643', '155795984185226'),
(81, '155844628865643', '155795982980778'),
(82, '155844628865643', '155795986579204'),
(83, '155844628865643', '155795987224164'),
(84, '155844628865643', '155795987916350'),
(85, '155844628865643', '155795989039487'),
(86, '155844628865643', '155795989886687'),
(87, '155844628865643', '155795991438361'),
(88, '155844628865643', '155796002185645'),
(89, '155844628865643', '155796002749571'),
(90, '155844628865643', '155796004089989'),
(91, '155844628865643', '155796004898523'),
(92, '155844708395243', '155795985942083'),
(93, '155844708395243', '155795985142010'),
(94, '155844708395243', '155795984185226'),
(95, '155844708395243', '155795982980778'),
(96, '155844708395243', '155795986579204'),
(97, '155844708395243', '155795987224164'),
(98, '155844708395243', '155795987916350'),
(99, '155844708395243', '155795989039487'),
(100, '155844708395243', '155795989886687'),
(101, '155844708395243', '155795991438361'),
(102, '155844708395243', '155796002185645'),
(103, '155844708395243', '155796002749571'),
(104, '155844708395243', '155796004089989'),
(105, '155844708395243', '155796004898523'),
(106, '155844708395243', '155844663595749'),
(107, '155844708395243', '155844693337033'),
(108, '155844708395243', '155844697218526'),
(109, '155844708395243', '155844704082227'),
(124, '155844787559009', '155795985942083'),
(125, '155844787559009', '155795985142010'),
(126, '155844787559009', '155795984185226'),
(127, '155844787559009', '155795982980778'),
(128, '155844787559009', '155795986579204'),
(129, '155844787559009', '155795987224164'),
(130, '155844787559009', '155795987916350'),
(131, '155844787559009', '155795989039487'),
(132, '155844787559009', '155795989886687'),
(133, '155844787559009', '155795991438361'),
(134, '155844787559009', '155796002185645'),
(135, '155844787559009', '155796002749571'),
(136, '155844787559009', '155796004898523'),
(137, '155844830776460', '155795985942083'),
(138, '155844830776460', '155795985142010'),
(139, '155844830776460', '155795984185226'),
(140, '155844830776460', '155795982980778'),
(141, '155844830776460', '155795986579204'),
(142, '155844830776460', '155795987224164'),
(143, '155844830776460', '155795987916350'),
(144, '155844830776460', '155795988515210'),
(145, '155844830776460', '155795989039487'),
(146, '155844830776460', '155795989886687'),
(147, '155844830776460', '155795991438361'),
(148, '155844830776460', '155796002185645'),
(149, '155844830776460', '155796002749571'),
(150, '155844830776460', '155796004898523'),
(151, '155844861494087', '155795985942083'),
(152, '155844861494087', '155795985142010'),
(153, '155844861494087', '155795984185226'),
(154, '155844861494087', '155795982980778'),
(155, '155844861494087', '155795986579204'),
(156, '155844861494087', '155795987224164'),
(157, '155844861494087', '155795987916350'),
(158, '155844861494087', '155795988515210'),
(159, '155844861494087', '155795989039487'),
(160, '155844861494087', '155795989886687'),
(161, '155844861494087', '155796002185645'),
(162, '155844861494087', '155796004898523'),
(163, '155854806749468', '155795985942083'),
(164, '155854806749468', '155795985142010'),
(165, '155854806749468', '155795984185226'),
(166, '155854806749468', '155795982980778'),
(167, '155854806749468', '155795986579204'),
(168, '155854806749468', '155795987224164'),
(169, '155854806749468', '155795987916350'),
(170, '155854806749468', '155795988515210'),
(171, '155854806749468', '155795989039487'),
(172, '155854806749468', '155795989886687'),
(173, '155854806749468', '155796002185645'),
(174, '155854806749468', '155796002749571'),
(175, '155854806749468', '155796004898523'),
(176, '155855269023204', '155795982980778'),
(177, '155855269023204', '155795986579204'),
(178, '155855269023204', '155795987224164'),
(179, '155855269023204', '155795987916350'),
(180, '155855269023204', '155795988515210'),
(181, '155855269023204', '155795989039487'),
(182, '155855269023204', '155795989886687'),
(183, '155855238647029', '155795985142010'),
(184, '155855238647029', '155795982980778'),
(185, '155855238647029', '155795986579204'),
(186, '155855238647029', '155795987224164'),
(187, '155855238647029', '155795987916350'),
(188, '155855238647029', '155795989039487'),
(189, '155855238647029', '155796002185645'),
(190, '155855251894818', '155795985142010'),
(191, '155855251894818', '155795987224164'),
(192, '155855251894818', '155795987916350'),
(193, '155854870268947', '155795985142010'),
(194, '155854870268947', '155795982980778'),
(195, '155854870268947', '155795987224164'),
(196, '155854870268947', '155795988515210'),
(197, '155854870268947', '155795989039487'),
(198, '155854886739172', '155795985142010'),
(199, '155854886739172', '155795982980778'),
(200, '155854886739172', '155795986579204'),
(201, '155854886739172', '155795987224164'),
(202, '155854886739172', '155795987916350'),
(203, '155854846682606', '155795985142010'),
(204, '155854846682606', '155795982980778'),
(205, '155854846682606', '155795986579204'),
(206, '155854846682606', '155795987224164'),
(207, '155854846682606', '155795987916350'),
(208, '155854846682606', '155795988515210'),
(209, '155854846682606', '155795989039487'),
(210, '155854846682606', '155795989886687'),
(211, '155854846682606', '155796002185645'),
(212, '155855322551370', '155795985142010'),
(213, '155855322551370', '155795984185226'),
(214, '155855322551370', '155795982980778'),
(215, '155855322551370', '155795986579204'),
(216, '155855322551370', '155795987224164'),
(217, '155855322551370', '155795987916350'),
(218, '155855322551370', '155795989039487'),
(219, '155855322551370', '155795991438361'),
(220, '155855322551370', '155796002185645'),
(221, '155855322551370', '155796004898523'),
(222, '155855322551370', '155844522994892'),
(223, '155855356588658', '155795985942083'),
(224, '155855356588658', '155795985142010'),
(225, '155855356588658', '155795984185226'),
(226, '155855356588658', '155795982980778'),
(227, '155855356588658', '155795986579204'),
(228, '155855356588658', '155795987224164'),
(229, '155855356588658', '155795987916350'),
(230, '155855356588658', '155795988515210'),
(231, '155855356588658', '155795989039487'),
(232, '155855356588658', '155795989886687'),
(233, '155855356588658', '155796002185645'),
(234, '155855356588658', '155796002749571'),
(235, '155855356588658', '155796004898523'),
(236, '155855382736987', '155795985142010'),
(237, '155855382736987', '155795982980778'),
(238, '155855382736987', '155795986579204'),
(239, '155855382736987', '155795987224164'),
(240, '155855382736987', '155795987916350'),
(241, '155855382736987', '155795989039487'),
(242, '155855447511016', '155795985142010'),
(243, '155855447511016', '155795982980778'),
(244, '155855447511016', '155795986579204'),
(245, '155855447511016', '155795987224164'),
(246, '155855447511016', '155795987916350'),
(247, '155855466049922', '155795985942083'),
(248, '155855466049922', '155795985142010'),
(249, '155855466049922', '155795982980778'),
(250, '155855466049922', '155795986579204'),
(251, '155855466049922', '155795987224164'),
(252, '155855466049922', '155795987916350'),
(253, '155855466049922', '155795988515210'),
(254, '155855466049922', '155795989039487'),
(255, '155855466049922', '155795989886687'),
(256, '155855466049922', '155796002185645'),
(257, '155855466049922', '155796002749571'),
(258, '155855466049922', '155796004898523'),
(259, '155855483213182', '155795985142010'),
(260, '155855483213182', '155795982980778'),
(261, '155855483213182', '155795986579204'),
(262, '155855483213182', '155795987224164'),
(263, '155855483213182', '155795987916350'),
(264, '155855483213182', '155795989039487'),
(265, '155855483213182', '155795991438361'),
(266, '155855483213182', '155796002185645'),
(267, '155855483213182', '155796002749571'),
(268, '155855483213182', '155796004898523'),
(269, '155855483213182', '155844663595749'),
(270, '155855549812214', '155795982980778'),
(271, '155855549812214', '155795986579204'),
(272, '155855549812214', '155795987224164'),
(273, '155855580856913', '155795982980778'),
(274, '155855580856913', '155795986579204'),
(275, '155855580856913', '155795987224164'),
(276, '155855600949863', '155795985942083'),
(277, '155855600949863', '155795985142010'),
(278, '155855600949863', '155795982980778'),
(279, '155855600949863', '155795986579204'),
(280, '155855600949863', '155795987224164'),
(281, '155855600949863', '155795987916350'),
(282, '155855600949863', '155795988515210'),
(283, '155855600949863', '155795989886687'),
(284, '155855600949863', '155796002185645'),
(285, '155855600949863', '155796004898523'),
(286, '155855600949863', '155855599425174'),
(287, '155855600949863', '155855600246546'),
(288, '155855619288822', '155795985942083'),
(289, '155855619288822', '155795985142010'),
(290, '155855619288822', '155795982980778'),
(291, '155855619288822', '155795986579204'),
(292, '155855619288822', '155795987224164'),
(293, '155855619288822', '155795987916350'),
(294, '155855619288822', '155795988515210'),
(295, '155855619288822', '155795989039487'),
(296, '155855619288822', '155795989886687'),
(297, '155855660161535', '155795985942083'),
(298, '155855660161535', '155795987224164'),
(299, '155855702464511', '155795985142010'),
(300, '155855702464511', '155795982980778'),
(301, '155855702464511', '155795986579204'),
(302, '155855702464511', '155795987224164'),
(303, '155855702464511', '155795987916350'),
(304, '155855702464511', '155795988515210'),
(305, '155855702464511', '155795989039487'),
(306, '155855702464511', '155795989886687'),
(307, '155855702464511', '155795991438361'),
(308, '155855702464511', '155796002185645'),
(309, '155855726668072', '155795985942083'),
(310, '155855726668072', '155795985142010'),
(311, '155855726668072', '155795982980778'),
(312, '155855726668072', '155795986579204'),
(313, '155855726668072', '155795987224164'),
(314, '155855726668072', '155795987916350'),
(315, '155855726668072', '155795988515210'),
(316, '155855726668072', '155795989886687'),
(317, '155855726668072', '155795991438361'),
(318, '155855817393379', '155795985942083'),
(319, '155855817393379', '155795985142010'),
(320, '155855817393379', '155795982980778'),
(321, '155855817393379', '155795986579204'),
(322, '155855817393379', '155795987224164'),
(323, '155855817393379', '155795988515210'),
(324, '155855817393379', '155795989039487'),
(325, '155855817393379', '155796002185645'),
(326, '155855817393379', '155796002749571'),
(327, '155855817393379', '155844663595749'),
(328, '155855840347814', '155795982980778'),
(329, '155855840347814', '155795986579204'),
(330, '155855840347814', '155795987224164'),
(331, '155855880063905', '155795985942083'),
(332, '155855880063905', '155795985142010'),
(333, '155855880063905', '155795982980778'),
(334, '155855880063905', '155795986579204'),
(335, '155855880063905', '155795987224164'),
(336, '155855880063905', '155795987916350'),
(337, '155855880063905', '155795988515210'),
(338, '155855880063905', '155795989039487'),
(339, '155855880063905', '155795989886687'),
(340, '155855880063905', '155795991438361'),
(341, '155855880063905', '155796002185645'),
(342, '155855880063905', '155796002749571'),
(343, '155861870629594', '155795985142010'),
(344, '155861870629594', '155795986579204'),
(345, '155861870629594', '155795987224164'),
(346, '155861911522465', '155795985942083'),
(347, '155861911522465', '155795985142010'),
(348, '155861911522465', '155795982980778'),
(349, '155861911522465', '155795986579204'),
(350, '155861911522465', '155795987224164'),
(351, '155861911522465', '155795987916350'),
(352, '155861911522465', '155795989039487'),
(353, '155861911522465', '155795989886687'),
(354, '155861911522465', '155795991438361'),
(355, '155861911522465', '155796002185645'),
(356, '155863392757473', '155795985142010'),
(357, '155863392757473', '155795982980778'),
(358, '155863392757473', '155795986579204'),
(359, '155863392757473', '155795987224164'),
(360, '155863392757473', '155795987916350'),
(361, '155863392757473', '155795988515210'),
(362, '155863392757473', '155795989039487'),
(363, '155863392757473', '155796002185645'),
(364, '155863432018757', '155795985942083'),
(365, '155863432018757', '155795985142010'),
(366, '155863432018757', '155795984185226'),
(367, '155863432018757', '155795982980778'),
(368, '155863432018757', '155795986579204'),
(369, '155863432018757', '155795987224164'),
(370, '155863432018757', '155795987916350'),
(371, '155863432018757', '155795988515210'),
(372, '155863432018757', '155795989039487'),
(373, '155863432018757', '155795989886687'),
(374, '155863432018757', '155796002185645'),
(375, '155863489978762', '155795985142010'),
(376, '155863489978762', '155795982980778'),
(377, '155863489978762', '155795986579204'),
(378, '155863489978762', '155795987224164'),
(379, '155863489978762', '155795987916350'),
(380, '155863489978762', '155795988515210'),
(381, '155863489978762', '155795989039487'),
(382, '155863489978762', '155795991438361'),
(383, '155863489978762', '155796002185645'),
(384, '155863528813492', '155795985142010'),
(385, '155863528813492', '155795982980778'),
(386, '155863528813492', '155795986579204'),
(387, '155863528813492', '155795987224164'),
(388, '155863528813492', '155795987916350'),
(389, '155863528813492', '155795988515210'),
(390, '155863528813492', '155795989039487'),
(391, '155863528813492', '155795991438361'),
(392, '155863528813492', '155796002185645'),
(393, '155863549711695', '155795985142010'),
(394, '155863549711695', '155795986579204'),
(395, '155863549711695', '155795987224164'),
(396, '155863549711695', '155795987916350'),
(397, '155863549711695', '155795991438361'),
(401, '155870477847335', '155795985142010'),
(402, '155870477847335', '155795982980778'),
(403, '155870477847335', '155795987224164'),
(404, '155870491465295', '155795985942083'),
(405, '155870491465295', '155795985142010'),
(406, '155870491465295', '155795982980778'),
(407, '155870491465295', '155795986579204'),
(408, '155870491465295', '155795987224164'),
(409, '155870491465295', '155795987916350'),
(410, '155870491465295', '155795988515210'),
(411, '155870491465295', '155795989039487'),
(412, '155870491465295', '155795989886687'),
(413, '155870491465295', '155796002185645'),
(414, '155870491465295', '155796002749571'),
(415, '155871643279818', '155795985942083'),
(416, '155871643279818', '155795985142010'),
(417, '155871643279818', '155795984185226'),
(418, '155871643279818', '155795982980778'),
(419, '155871643279818', '155795986579204'),
(420, '155871643279818', '155795987224164'),
(421, '155871643279818', '155795987916350'),
(422, '155871643279818', '155795989039487'),
(423, '155871643279818', '155795989886687'),
(424, '155871643279818', '155795991438361'),
(425, '155871643279818', '155796002185645'),
(426, '155871643279818', '155796002749571'),
(427, '155871643279818', '155796004898523'),
(428, '155871776252747', '155795985942083'),
(429, '155871776252747', '155795985142010'),
(430, '155871776252747', '155795982980778'),
(431, '155871776252747', '155795986579204'),
(432, '155871776252747', '155795987224164'),
(433, '155871776252747', '155795987916350'),
(434, '155871776252747', '155795988515210'),
(435, '155871776252747', '155795989039487'),
(436, '155871776252747', '155795989886687'),
(437, '155871776252747', '155795991438361'),
(438, '155871776252747', '155796002185645'),
(439, '155871776252747', '155796002749571'),
(440, '155871776252747', '155796004898523'),
(441, '155871851242348', '155795985942083'),
(442, '155871851242348', '155795985142010'),
(443, '155871851242348', '155795982980778'),
(444, '155871851242348', '155795986579204'),
(445, '155871851242348', '155795987224164'),
(446, '155871851242348', '155795987916350'),
(447, '155871851242348', '155795989039487'),
(448, '155871851242348', '155795989886687'),
(449, '155871851242348', '155795991438361'),
(450, '155871851242348', '155796002185645'),
(451, '155871851242348', '155796002749571'),
(452, '155871851242348', '155796004089989'),
(453, '155871851242348', '155796004898523'),
(454, '155896593750195', '155795985942083'),
(455, '155896593750195', '155795985142010'),
(456, '155896593750195', '155795984185226'),
(457, '155896593750195', '155795982980778'),
(458, '155896593750195', '155795986579204'),
(459, '155896593750195', '155795987224164'),
(470, '155896593750195', '155896823265879'),
(461, '155896593750195', '155795988515210'),
(462, '155896593750195', '155795989039487'),
(463, '155896593750195', '155795989886687'),
(464, '155896593750195', '155795991438361'),
(465, '155896593750195', '155796002185645'),
(466, '155896593750195', '155796002749571'),
(469, '155896593750195', '155896822142026'),
(468, '155896593750195', '155796004898523'),
(471, '155896593750195', '155896826425643'),
(472, '155914829874689', '155795985942083'),
(473, '155914829874689', '155795985142010'),
(474, '155914829874689', '155795982980778'),
(475, '155914829874689', '155795986579204'),
(476, '155914829874689', '155795987224164'),
(477, '155914829874689', '155795987916350'),
(478, '155914829874689', '155795988515210'),
(479, '155914829874689', '155795989039487'),
(480, '155914829874689', '155796002185645'),
(481, '155914829874689', '155796002749571'),
(482, '155914829874689', '155796004898523'),
(483, '155914829874689', '155896822142026'),
(484, '155914829874689', '155896826425643'),
(485, '156027835718868', '155795985942083'),
(486, '156027835718868', '155795985142010'),
(487, '156027835718868', '155795984185226'),
(488, '156027835718868', '155795982980778'),
(489, '156027835718868', '155795986579204'),
(490, '156027835718868', '155795987224164'),
(491, '156027835718868', '155795987916350'),
(492, '156027835718868', '155795989039487'),
(493, '156027835718868', '155795989886687'),
(494, '156027835718868', '155795991438361'),
(495, '156027835718868', '155796002185645'),
(496, '156027835718868', '155796002749571'),
(497, '156027835718868', '155796004898523'),
(498, '156027835718868', '155896822142026'),
(499, '156027835718868', '155896823265879'),
(500, '156027835718868', '155896826425643'),
(501, '156097493699152', '155795985942083'),
(502, '156097493699152', '155795985142010'),
(503, '156097493699152', '155795984185226'),
(504, '156097493699152', '155795982980778'),
(505, '156097493699152', '155795986579204'),
(506, '156097493699152', '155795987224164'),
(507, '156097493699152', '155795987916350'),
(508, '156097493699152', '155795988515210'),
(509, '156097493699152', '155795989039487'),
(510, '156097493699152', '155795989886687'),
(511, '156097493699152', '155795991438361'),
(512, '156097493699152', '155796002185645'),
(513, '156097493699152', '155796002749571'),
(514, '156097493699152', '155796004898523'),
(515, '156097493699152', '155896822142026'),
(516, '156097493699152', '155896823265879'),
(517, '156097545592296', '155795985942083'),
(518, '156097545592296', '155795985142010'),
(519, '156097545592296', '155795982980778'),
(520, '156097545592296', '155795987224164'),
(521, '156097545592296', '155795987916350'),
(522, '156097545592296', '155795988515210'),
(523, '156097545592296', '155795989039487'),
(524, '156097545592296', '155795989886687'),
(525, '156097545592296', '155796002185645'),
(526, '156097545592296', '155796002749571'),
(527, '156097545592296', '155796004898523'),
(528, '156097545592296', '155855599425174'),
(529, '156097545592296', '155896822142026'),
(530, '156199235165238', '155795985142010'),
(531, '156199235165238', '155795982980778'),
(532, '156199235165238', '155795986579204'),
(533, '156199235165238', '155795987224164'),
(534, '156199235165238', '155795987916350'),
(535, '156199235165238', '155795988515210'),
(536, '156199235165238', '155795989039487'),
(537, '156199235165238', '155795989886687'),
(538, '156199235165238', '155796002185645'),
(539, '156199235165238', '155796002749571'),
(540, '156199235165238', '155796004898523'),
(541, '156199235165238', '155896826425643'),
(542, '156241711311302', '155795985142010'),
(543, '156241711311302', '155795984185226'),
(544, '156241711311302', '155795982980778'),
(545, '156241711311302', '155795986579204'),
(546, '156241711311302', '155795987224164'),
(547, '156241711311302', '155795987916350'),
(548, '156241711311302', '155795989039487'),
(549, '156241711311302', '155796002185645'),
(550, '156241711311302', '155796002749571'),
(551, '156241711311302', '155796004898523'),
(552, '156241711311302', '155855599425174'),
(553, '156241711311302', '155896822142026'),
(554, '156241711311302', '155896826425643'),
(555, '156261926184137', '155795985942083'),
(556, '156261926184137', '155795985142010'),
(557, '156261926184137', '155795984185226'),
(558, '156261926184137', '155795982980778'),
(559, '156261926184137', '155795986579204'),
(560, '156261926184137', '155795987224164'),
(561, '156261926184137', '155795987916350'),
(562, '156261926184137', '155795988515210'),
(563, '156261926184137', '155795989039487'),
(564, '156261926184137', '155795989886687'),
(565, '156261926184137', '155795991438361'),
(566, '156261926184137', '155796002185645'),
(567, '156261926184137', '155796002749571'),
(568, '156261926184137', '155796004089989'),
(569, '156261926184137', '155796004898523'),
(570, '156261926184137', '155896822142026'),
(571, '156261926184137', '155896823265879'),
(572, '156261926184137', '155896826425643'),
(573, '163538013797706', '155844522994892'),
(574, '163538018912449', '155795987224164'),
(575, '163538018912449', '155795989039487'),
(576, '163538018912449', '155795991438361'),
(577, '163538018912449', '155796002749571'),
(578, '163538018912449', '155844522994892'),
(579, '163538013797706', '155795989039487'),
(580, '163538013797706', '155796004898523'),
(581, '163657686346290', '155795985142010'),
(582, '163657686346290', '155795982980778'),
(583, '163657686346290', '155795986579204'),
(584, '163657686346290', '155795987224164'),
(585, '163657686346290', '155795989039487'),
(586, '163657686346290', '155795991438361'),
(587, '163657686346290', '155796002185645'),
(588, '163657686346290', '155796002749571'),
(589, '163657686346290', '155796004089989'),
(590, '163657686346290', '155796004898523'),
(591, '163657686346290', '155844522994892'),
(592, '163657686346290', '155844663595749'),
(593, '163657686346290', '155855600246546'),
(594, '163657686346290', '155896826425643'),
(595, '163657765335813', '155795985942083'),
(596, '163657765335813', '155795985142010'),
(597, '163657765335813', '155795984185226'),
(598, '163657765335813', '155795982980778'),
(599, '163657765335813', '155795986579204'),
(600, '163657765335813', '155795987916350'),
(601, '163657765335813', '155795988515210'),
(602, '163657765335813', '155795989039487'),
(603, '163657765335813', '155795989886687'),
(604, '163657765335813', '155795991438361'),
(605, '163657765335813', '155796002185645'),
(606, '163657765335813', '155796002749571'),
(607, '163657765335813', '155796004089989'),
(608, '163657765335813', '155796004898523'),
(609, '163657765335813', '155844704082227'),
(610, '163657765335813', '155855599425174'),
(611, '163657765335813', '155855600246546'),
(612, '163657765335813', '155896823265879'),
(613, '163657765335813', '155896826425643'),
(614, '163682431439758', '155795985942083'),
(615, '163682431439758', '155795987224164'),
(616, '163682431439758', '155795987916350'),
(617, '163682431439758', '155795989039487'),
(618, '163682431439758', '155795989886687'),
(619, '163682431439758', '155795991438361'),
(620, '163682431439758', '155796002749571'),
(621, '163682431439758', '155796004089989'),
(622, '163682431439758', '155796004898523'),
(623, '163682431439758', '155844693337033'),
(624, '163682431439758', '155844704082227'),
(625, '163682431439758', '155855600246546'),
(626, '163682431439758', '155896823265879');

-- --------------------------------------------------------

--
-- Estrutura para tabela `garagem_transmissao`
--

CREATE TABLE `garagem_transmissao` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `garagem_transmissao`
--

INSERT INTO `garagem_transmissao` (`id`, `codigo`, `titulo`) VALUES
(21, '155795042639172', 'Automática'),
(20, '155795042098934', 'Manual');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imagem`
--

INSERT INTO `imagem` (`id`, `codigo`, `titulo`, `imagem`) VALUES
(39, '147193111415927', 'Favicon', '1-[16-08-22][23-37-47].png'),
(77, '159432484772768', 'Logo - Rodapé', 'logo-rodape-fw-[16-08-22][22-24-12].png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem_enviadas`
--

CREATE TABLE `imagem_enviadas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `imagem` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `data_alteracao` int(11) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `cadastro` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cod_interno` varchar(100) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `categoria_titulo` varchar(255) DEFAULT NULL,
  `tipo_id` varchar(100) DEFAULT NULL,
  `tipo_titulo` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `cep` varchar(100) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `area_util` varchar(255) DEFAULT NULL,
  `area_total` varchar(255) DEFAULT NULL,
  `iptu` double DEFAULT NULL,
  `condominio` double DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `suites` int(11) DEFAULT NULL,
  `garagem` int(11) DEFAULT NULL,
  `banheiros` int(11) DEFAULT NULL,
  `salas` int(11) DEFAULT NULL,
  `cozinhas` int(11) DEFAULT NULL,
  `churrasqueira` int(11) DEFAULT NULL,
  `lavanderias` int(11) DEFAULT NULL,
  `destaque` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `anuncio_vencimento` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_bairros`
--

CREATE TABLE `imoveis_bairros` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_bairros`
--

INSERT INTO `imoveis_bairros` (`id`, `codigo`, `bairro`, `cidade`, `estado`) VALUES
(3, '154218244948336', 'Centro', 'Pato Branco', 'PR'),
(8, '154223020136127', 'Centro', 'Vitorino', 'PR'),
(37, '160642422815780', 'Bairro Passo dos Fortes', 'Chapecó', 'SC'),
(38, '160867040276885', 'Centro', 'Chapecó', 'SC'),
(39, '160867041691598', 'Industrial', 'Pato Branco', 'PR'),
(40, '160867042383943', 'Planalto', 'Pato Branco', 'PR'),
(41, '160867253464192', 'Centro', 'Mariópolis', 'PR'),
(42, '160867320116070', 'Centro', 'São Paulo', 'SP'),
(43, '160867337526060', 'São Francisco', 'Pato Branco', 'PR'),
(44, '160867343875436', 'Industrial', 'Francisco Beltrão', 'PR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_categorias`
--

CREATE TABLE `imoveis_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_categorias`
--

INSERT INTO `imoveis_categorias` (`id`, `codigo`, `titulo`, `ativo`) VALUES
(1132, '5280', 'Locação', 1),
(1131, '5279', 'Venda', 1),
(1133, '6666', 'Permuta', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_cidades`
--

CREATE TABLE `imoveis_cidades` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `principal` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_cidades`
--

INSERT INTO `imoveis_cidades` (`id`, `codigo`, `cidade`, `estado`, `principal`) VALUES
(7490, '160867039360086', 'Pato Branco', 'PR', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_detalhes`
--

CREATE TABLE `imoveis_detalhes` (
  `id` int(11) NOT NULL,
  `destino_form` varchar(255) DEFAULT NULL,
  `destino_voltar` varchar(255) DEFAULT NULL,
  `formato_pg` int(11) DEFAULT 1,
  `font_codigo` varchar(100) DEFAULT NULL,
  `font_family` varchar(100) DEFAULT NULL,
  `whats_destino` varchar(100) DEFAULT NULL,
  `botao_codigo_ped` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_detalhes`
--

INSERT INTO `imoveis_detalhes` (`id`, `destino_form`, `destino_voltar`, `formato_pg`, `font_codigo`, `font_family`, `whats_destino`, `botao_codigo_ped`) VALUES
(1, 'alvanisio@gmail.com', 'imoveis', 1, '160624656673837', 'Kastelov Intelo Regular', '46991203707', '160218454125922');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_favoritos`
--

CREATE TABLE `imoveis_favoritos` (
  `id` int(11) NOT NULL,
  `sessao` varchar(255) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_favoritos`
--

INSERT INTO `imoveis_favoritos` (`id`, `sessao`, `codigo`) VALUES
(12, '160927170217649', '1606399923947096'),
(10, '160815405935687', '1606399923947097'),
(13, '160927170217649', '160639992394704');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_grupos`
--

CREATE TABLE `imoveis_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `tipo` int(11) DEFAULT 0,
  `formato` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT 3,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_pagina` int(11) DEFAULT 3,
  `max_itens` int(11) DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `busca_pagina` varchar(255) DEFAULT NULL,
  `font` varchar(100) DEFAULT NULL,
  `font_family` text DEFAULT NULL,
  `bt_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_grupos_imagens`
--

CREATE TABLE `imoveis_grupos_imagens` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_grupos_imagens`
--

INSERT INTO `imoveis_grupos_imagens` (`id`, `codigo`, `imagem`) VALUES
(2, '160080980351881', '8-[28-09-20][15-31-44].jpg'),
(3, '160080980351881', '3-[28-09-20][15-33-10].jpg'),
(4, '160126212863623', '3-[28-09-20][15-55-16].jpg'),
(5, '160126212863623', '9-[28-09-20][15-55-21].jpg'),
(24, '160209124881658', '4-[08-01-21][19-38-49].jpg'),
(25, '160209124881658', '6-[08-01-21][19-39-00].jpg'),
(26, '162766727766744', '526-por-que-investir-em-fundos-imobiliarios-[30-07-21][15-19-40].jpg'),
(27, '162766727766744', '2683-voce-sabe-o-que-e-o-habite-se-entenda-e-veja-qual-a-sua-funcao-[30-07-21][15-20-24].jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_grupos_sel`
--

CREATE TABLE `imoveis_grupos_sel` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `imovel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_imagem`
--

CREATE TABLE `imoveis_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_imagem`
--

INSERT INTO `imoveis_imagem` (`id`, `codigo`, `imagem`) VALUES
(209, '160867351712887', '160868257235497.jpg'),
(208, '160867351712887', '160868161947480.jpg'),
(210, '160867351712887', '160868347294507.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_imagem_legenda`
--

CREATE TABLE `imoveis_imagem_legenda` (
  `id` int(11) NOT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `imoveis_imagem_legenda`
--

INSERT INTO `imoveis_imagem_legenda` (`id`, `id_img`, `legenda`) VALUES
(3, '146', 'Banheiro'),
(4, '147', 'bbbbbb'),
(5, '148', 'nnnnnnnnnnttttttt');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_imagem_ordem`
--

CREATE TABLE `imoveis_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `imoveis_imagem_ordem`
--

INSERT INTO `imoveis_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(227, '160867351712887', '207'),
(228, '160867351712887', '207,208'),
(229, '160867351712887', '208,207'),
(230, '160867351712887', '207,208'),
(231, '160867351712887', '208,207'),
(232, '160867351712887', '207,208'),
(233, '160867351712887', '207,208,209'),
(234, '160867351712887', '209,208'),
(235, '160867351712887', '208,209'),
(236, '160867351712887', '209,208'),
(237, '160867351712887', '208,209'),
(238, '160867351712887', '209,208'),
(239, '160867351712887', '209,208,210'),
(240, '160867351712887', '210,209,208'),
(241, '160867351712887', '209,208,210'),
(242, '160867351712887', '208,210,209'),
(243, '160867351712887', '209,208,210'),
(244, '160867351712887', '210,209,208'),
(245, '160867351712887', '209,210,208'),
(246, '160867351712887', '210,208,209'),
(247, '160867351712887', '208,209,210'),
(248, '160867351712887', '210,208,209'),
(249, '160867351712887', '208,210,209'),
(250, '160867351712887', '209,208,210');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_marcadagua`
--

CREATE TABLE `imoveis_marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_marcadagua`
--

INSERT INTO `imoveis_marcadagua` (`id`, `codigo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_opcoes`
--

CREATE TABLE `imoveis_opcoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_opcoes_sel`
--

CREATE TABLE `imoveis_opcoes_sel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `opcional` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_opcoes_sel`
--

INSERT INTO `imoveis_opcoes_sel` (`id`, `codigo`, `opcional`) VALUES
(3, '158025628084829', '159379322078576'),
(2, '158025628084829', '159379321637655'),
(4, '159984375348313', '159379321067039'),
(5, '160081052796114', '159379321637655'),
(6, '160081052796114', '159379321067039'),
(7, '160081308868610', '159379321637655');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_pedidos`
--

CREATE TABLE `imoveis_pedidos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `cadastro` varchar(100) DEFAULT NULL,
  `plano` varchar(100) DEFAULT NULL,
  `plano_titulo` varchar(255) DEFAULT NULL,
  `plano_valor` double DEFAULT NULL,
  `plano_periodo_meses` int(11) DEFAULT 0,
  `plano_periodo_dias` int(11) DEFAULT 0,
  `plano_limite` int(11) DEFAULT 0,
  `plano_utilizado` int(11) DEFAULT 0,
  `data` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `id_transacao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_pedidos`
--

INSERT INTO `imoveis_pedidos` (`id`, `codigo`, `cadastro`, `plano`, `plano_titulo`, `plano_valor`, `plano_periodo_meses`, `plano_periodo_dias`, `plano_limite`, `plano_utilizado`, `data`, `status`, `id_transacao`) VALUES
(1, '160874846697105', '160864676595726', '160865975149501', NULL, 15, 3, NULL, 0, 0, 1608748466, 2, NULL),
(2, '161047457824635', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 0, 0, 1610474578, 0, NULL),
(3, '161047470314222', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 0, 0, 1610474703, 1, '457480570-7ae3cd7f-b478-4fd7-8e43-b43925ceb5e1'),
(4, '161065215853459', '161047438999558', '160865907827504', NULL, 10, 1, NULL, 1, 0, 1610652158, 1, '457480570-cd56bbdc-c446-4b5c-8e90-bdf40b56d3a8'),
(6, '161065953623563', '161047438999558', '160865978512730', 'Plano 3', 20, 6, NULL, 3, 1, 1610659536, 2, '457480570-1e9e0550-8768-4072-904e-d44ece169c38'),
(8, '161066913789232', '161047438999558', '1', 'Gratis', 0, 0, 15, 2, 2, 1610669137, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_pedidos_utilizacoes`
--

CREATE TABLE `imoveis_pedidos_utilizacoes` (
  `id` int(11) NOT NULL,
  `pedido` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `imovel` varchar(100) DEFAULT NULL,
  `imovel_ref` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_pedidos_utilizacoes`
--

INSERT INTO `imoveis_pedidos_utilizacoes` (`id`, `pedido`, `data`, `imovel`, `imovel_ref`) VALUES
(1, '161065953623563', 1610663409, '161047448153237', '1084'),
(2, '161066913789232', 1610669137, '161066830187908', '1085'),
(3, '161066913789232', 1610669205, '161066919686351', '1086');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_planos`
--

CREATE TABLE `imoveis_planos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `meses` int(11) DEFAULT 1,
  `dias` int(11) DEFAULT 0,
  `limite` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_planos`
--

INSERT INTO `imoveis_planos` (`id`, `codigo`, `titulo`, `valor`, `meses`, `dias`, `limite`) VALUES
(1, '1', 'Gratis', 0, 0, 15, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis_tipos`
--

CREATE TABLE `imoveis_tipos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `imoveis_tipos`
--

INSERT INTO `imoveis_tipos` (`id`, `codigo`, `titulo`) VALUES
(8160, '3810', 'Barracão'),
(8159, '3698', 'Casa'),
(8158, '3699', 'Sobrado'),
(8157, '3697', 'Apartamento'),
(8155, '3706', 'Cobertura'),
(8154, '3707', 'Kitinete'),
(8153, '3708', 'Prédio'),
(8152, '3710', 'Chácara'),
(8150, '3711', 'Sala Comercial'),
(8151, '3709', 'Terreno'),
(8149, '3712', 'Área Rural'),
(8148, '3713', 'Casa em Condomí­nio'),
(8164, '158144821845586', 'Fazenda');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_blocos`
--

CREATE TABLE `layout_blocos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `colunas` int(11) DEFAULT 1,
  `full` int(11) DEFAULT 0,
  `formato` varchar(100) DEFAULT '12',
  `coluna1` varchar(100) DEFAULT NULL,
  `coluna2` varchar(100) DEFAULT NULL,
  `coluna3` varchar(100) DEFAULT NULL,
  `coluna4` varchar(100) DEFAULT NULL,
  `coluna5` varchar(100) DEFAULT NULL,
  `coluna6` varchar(100) DEFAULT NULL,
  `coluna7` varchar(100) DEFAULT NULL,
  `coluna8` varchar(100) DEFAULT NULL,
  `coluna9` varchar(100) DEFAULT NULL,
  `coluna10` varchar(100) DEFAULT NULL,
  `coluna11` varchar(100) DEFAULT NULL,
  `coluna12` varchar(100) DEFAULT NULL,
  `cor_fundo` varchar(100) DEFAULT '#fff',
  `img_fundo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_blocos`
--

INSERT INTO `layout_blocos` (`id`, `codigo`, `pagina`, `colunas`, `full`, `formato`, `coluna1`, `coluna2`, `coluna3`, `coluna4`, `coluna5`, `coluna6`, `coluna7`, `coluna8`, `coluna9`, `coluna10`, `coluna11`, `coluna12`, `cor_fundo`, `img_fundo`) VALUES
(71, '163285982453933', '163243615935451', 1, 1, '12', '160590239782504', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(72, '163286306381875', '163243615935451', 1, 1, '12', '161705545943312', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(73, '163287163197791', '163243615935451', 1, 1, '12', '159421755016280', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', ''),
(74, '163287892952267', '163243615935451', 1, 0, '12', '163414603355927', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ff8000', NULL),
(75, '163292776873039', '163243615935451', 1, 0, '12', '164329556335865', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#f7f7f7', ''),
(76, '163293380949231', '163243615935451', 1, 0, '12', '164329476972748', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(77, '163295839062589', '163243615935451', 1, 0, '12', '164329914672355', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'rgba(255,255,255,0)', ''),
(78, '164338069512936', '163243615935451', 2, 1, '8_4', '159434592337144', '164340235264898', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#121212', 'fundo-rodape-[16-08-22][23-34-05].jpg'),
(79, '164338302321854', '163243615935451', 1, 0, '12', '164338024156971', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', ''),
(80, '164338330719114', '163243615935451', 1, 0, '12', '164338327162013', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(81, '164338469298064', '163243615935451', 1, 0, '12', '164338440472283', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(82, '164339911477941', '164339903870536', 1, 1, '12', '160590239782504', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(83, '164339913069619', '164339903870536', 1, 1, '12', '161705545943312', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(84, '164339924968626', '164339903870536', 1, 1, '12', '164339918623271', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(85, '164339939544149', '164339903870536', 1, 0, '12', '164339933221490', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(86, '164339958785398', '164339903870536', 1, 0, '12', '164329914672355', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'rgba(255,255,255,0)', 'fundo-cta-1-[28-01-22][16-54-56].jpg'),
(87, '164339961890585', '164339903870536', 1, 0, '12', '164338024156971', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(95, '164340153169188', '164340149253198', 1, 1, '12', '160590239782504', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(96, '164340156453651', '164340149253198', 1, 1, '12', '161705545943312', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(97, '164340166244016', '164340149253198', 1, 0, '12', '164340160574772', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(98, '164340190246916', '164340149253198', 1, 1, '12', '164340183054360', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(99, '164340201092157', '164340198076375', 1, 1, '12', '160590239782504', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(100, '164340203498049', '164340198076375', 1, 1, '12', '161705545943312', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(101, '164340207528279', '164340198076375', 1, 0, '12', '159434592337144', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'rgba(255,255,255,0)', 'fundo-contato-1-[28-01-22][17-35-14].jpg'),
(102, '164340214488952', '164340198076375', 2, 0, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#fff', NULL),
(103, '164340223588132', '164340198076375', 2, 0, '6_6', '164340235264898', '164340220520837', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(104, '164340304940312', '164340198076375', 1, 1, '12', '164340295831867', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'rgba(255,255,255,0)', ''),
(105, '166076582137822', '166076580033637', 1, 1, '12', '160590239782504', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(106, '166076584413802', '166076580033637', 1, 1, '12', '161705545943312', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ffffff', NULL),
(107, '166076592370830', '166076580033637', 1, 0, '12', '163414603355927', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '#ff8000', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_blocos_ordem`
--

CREATE TABLE `layout_blocos_ordem` (
  `id` int(11) NOT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_blocos_ordem`
--

INSERT INTO `layout_blocos_ordem` (`id`, `pagina`, `data`) VALUES
(84, '162766723375634', '51,52,54,55,53'),
(44, '161705139083772', '6,7,15,20,22,28,23,21'),
(18, '162010318936028', '13,5,9,10,11,12,14'),
(75, '162023880255702', '29,30,33,36,37,31,50'),
(43, '161705139083772', '6,7,15,20,24,22,23,21,28'),
(41, '162018469380983', '25,26,27'),
(42, '162018469380983', '25,27,26'),
(63, '162212713064322', '38,39,40,41,42'),
(64, '162212713064322', '38,39,40,42,41'),
(67, '162214489846268', '43,44,45'),
(68, '162214489846268', '45,43,44'),
(73, '162214740420204', '46,47,48,49'),
(74, '162214740420204', '46,47,49,48'),
(83, '162766723375634', '51,52,54,53,55'),
(88, '162766805171533', '56,57,58,59'),
(89, '162766805171533', '56,59,57,58'),
(151, '162767178718780', '60,63,90,62'),
(150, '162767178718780', '60,61,62,63,90'),
(99, '162767251387966', '65,64,66'),
(98, '162767251387966', '64,65,66'),
(102, '163009329736429', '67,68,69'),
(103, '163009329736429', '67,69,68'),
(104, '163243549545707', '70'),
(196, '163243615935451', '71,73,76,77,74,75,79,80,81,78,72'),
(195, '163243615935451', '71,73,76,77,74,75,80,79,81,78,72'),
(136, '163302771766872', '78,80,81,82,83,84,79'),
(135, '163302771766872', '78,80,81,82,83,79,84'),
(154, '163344585130595', '85,88,87,89,91,86'),
(153, '163344585130595', '85,87,89,91,86,88'),
(152, '163344585130595', '85,87,89,86,88,91'),
(155, '163344585130595', '85,88,87,91,89,86'),
(170, '163414566925478', '92,93,96,98,97,95,94'),
(169, '163414566925478', '92,93,96,98,97,94,95'),
(168, '163414566925478', '92,93,96,97,94,95,98'),
(171, '163414566925478', '92,93,95,96,98,97,94'),
(172, '163414566925478', '92,93,95,98,96,97,94'),
(194, '163243615935451', '71,73,76,77,74,75,79,80,81,78,72'),
(179, '163543264811856', '99,100,101,102,103'),
(180, '163543264811856', '103,99,100,101,102'),
(183, '163744786356189', '104,105,106'),
(184, '163744786356189', '104,106,105'),
(193, '163243615935451', '71,73,76,77,74,75,79,80,78,72,81'),
(197, '163243615935451', '71,73,76,75,77,74,79,80,81,78,72'),
(213, '164339903870536', '82,84,85,86,87,83'),
(212, '164339903870536', '82,84,86,85,87,83'),
(211, '164339903870536', '82,84,86,85,83,87'),
(214, '164339903870536', '82,84,85,87,86,83'),
(228, '164340026740302', '88,90,91,92,93,94,89'),
(227, '164340026740302', '88,90,91,92,93,89,94'),
(233, '164340149253198', '95,96,97,98'),
(234, '164340149253198', '95,98,96,97'),
(235, '164340149253198', '95,98,97,96'),
(247, '164340198076375', '99,104,103,101,100,102'),
(246, '164340198076375', '99,104,100,103,101,102'),
(245, '164340198076375', '99,100,103,101,102,104'),
(248, '164340198076375', '99,104,101,103,100,102'),
(249, '163243615935451', '71,73,76,75,74,79,77,80,81,78,72'),
(250, '163243615935451', '71,73,76,75,74,79,80,77,81,78,72'),
(253, '166076580033637', '105,106,107'),
(254, '166076580033637', '105,107,106');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_botoes`
--

CREATE TABLE `layout_botoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `borda` int(11) DEFAULT 1,
  `borda_radius` int(11) DEFAULT 0,
  `imagem_fundo` varchar(255) DEFAULT NULL,
  `cor_fundo` varchar(100) DEFAULT NULL,
  `cor_borda` varchar(100) DEFAULT NULL,
  `cor_texto` varchar(100) DEFAULT NULL,
  `cor_sel_fundo` varchar(100) DEFAULT NULL,
  `cor_sel_borda` varchar(100) DEFAULT NULL,
  `cor_sel_texto` varchar(100) DEFAULT NULL,
  `padding_top` varchar(20) DEFAULT NULL,
  `padding_left` varchar(20) DEFAULT NULL,
  `padding_right` varchar(20) DEFAULT NULL,
  `padding_bottom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_botoes`
--

INSERT INTO `layout_botoes` (`id`, `codigo`, `titulo`, `texto`, `borda`, `borda_radius`, `imagem_fundo`, `cor_fundo`, `cor_borda`, `cor_texto`, `cor_sel_fundo`, `cor_sel_borda`, `cor_sel_texto`, `padding_top`, `padding_left`, `padding_right`, `padding_bottom`) VALUES
(1, '160218454125922', 'Botão Padrão', '<div style=\"\"><span style=\"font-family: \" kastelov=\"\" intelo=\"\" bold\";=\"\" font-size:=\"\" 18px;\"=\"\" open=\"\" sans\";=\"\" 16px;\"=\"\">Enviar</span></div>', 1, 3, '', '#000000', '#000000', '#ffffff', '#333333', '#000000', '#ffffff', '7', '20', '20', '7'),
(10, '160692822052753', 'Cadastrar', '<p style=\"text-align: center; \"><span style=\"font-size: 15px;\" open=\"\" sans\";\"=\"\"><b>CADASTRAR</b></span></p>', 0, 4, NULL, '#000000', '#4d2424', '#ffffff', '#591919', '#ffffff', '#d9b1b1', '8', '20', '20', '10'),
(11, '160693669447745', 'Enviar', '<p style=\"text-align: center; \"><b><span style=\"font-size: 14px; font-family: &quot;Exol2 Regular&quot;;\" exol2=\"\" regular\";\"=\"\">ENVIAR</span></b></p>', 0, 100, NULL, '#ff8000', 'rgba(0,0,0,0)', '#ffffff', '#5e5e5e', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15'),
(12, '160693689911601', 'Assine agora', '<p style=\"text-align: center; \"><b><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\">ASSINE AGORA </span><br></b></p>', 0, 100, NULL, '#ff8000', 'rgba(255,255,255,0)', '#ffffff', '#5e5e5e', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15'),
(13, '160694312533901', 'Votar', '<p style=\"text-align: center; \"><b><span style=\"font-size: 15px;\">Votar</span></b></p>', 1, 0, NULL, '#000000', '#000000', '#ffffff', '#000000', '#000000', '#ffffff', '7', '15', '15', '7'),
(14, '160694317744131', 'Resultados', '<p style=\"text-align: center; \"><b><span style=\"font-size: 15px;\">Resultados</span></b></p>', 1, 0, NULL, '#000000', '#000000', '#ffffff', '#000000', '#000000', '#ffffff', '7', '15', '15', '7'),
(15, '160701712229103', 'Finalizar Cadastro', '<p style=\"text-align: center; \"><b>Finalizar Cadastro</b></p>', 0, 2, NULL, '#000000', '#000000', '#ffffff', '#000000', '#000000', '#ffffff', '7', '20', '20', '7'),
(17, '160701999128854', 'Comprar', '<p style=\"text-align: center; \"><b style=\"\"><font style=\"\" color=\"#ffffff\"><span style=\"font-size: 15px; font-family: \"Exol2 Regular\";\">COMPRAR</span></font></b></p>', 2, 100, 'fundo-botao-[29-09-21][16-01-40].jpg', '#028702', '#ffffff', '#ffffff', '#000000', '#7ad960', '#ffffff', '10', '45', '45', '10'),
(18, '160702407554476', 'Voltar', '<p style=\"text-align: center; \"><b><span style=\"font-family: &quot;Exol2 Regular&quot;;\">VOLTAR</span></b></p>', 0, 100, NULL, '#cd1b3b', 'rgba(0,0,0,0)', '#ffffff', '#24245a', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15'),
(19, '160702629766519', 'Salvar', '<p style=\"text-align: center; \"><b><span style=\"font-family: \"Exol2 Regular\"; font-size: 15px;\">SALVAR</span></b></p>', 2, 100, 'fundo-botao-[29-09-21][18-05-31].jpg', '#ffffff', '#ffffff', '#ffffff', '#000000', '#00d96d', '#ffffff', '10', '45', '45', '10'),
(22, '161992439636173', 'fale conosco - topo', '<p style=\"text-align: center; font-size: 14px;\"><b>fale conosco</b></p>', 1, 4, NULL, '#ffffff', '#49c5b6', '#49c5b6', '#49c5b6', '#49c5b6', '#ffffff', '5', '10', '10', '5'),
(23, '162334940221649', 'Concordar', '<p style=\"text-align: center; \"><b>Concordo</b></p>', 0, 100, NULL, '#ff8000', 'rgba(0,0,0,0)', '#ffffff', '#383838', 'rgba(0,0,0,0)', '#ffffff', '10', '40', '40', '10'),
(24, '163036112150204', 'Contratar', '<p style=\"text-align: center; \"><b><span style=\"font-family: &quot;Exol2 Regular&quot;;\">CONTRATAR</span></b></p>', 2, 100, '', '#2b2b2b', 'rgba(34,133,9,0)', '#ffffff', '#ffffff', 'rgba(34,133,9,0)', '#ff8000', '10', '40', '40', '10'),
(25, '163304328728455', 'SOLICITAR ORÇAMENTO', '<p style=\"text-align: center; \"><b><span style=\"font-family: \"Exol2 Regular\";\">SOLICITAR ORÇAMENTO</span><br></b></p>', 3, 100, '', '#25255d', 'rgba(255,255,255,0)', '#ffffff', '#cd1b3b', 'rgba(46,217,104,0)', '#ffffff', '10', '45', '45', '10'),
(26, '164329328589036', 'Solicite um Orçamento', '<p style=\"text-align: center; \"><b>SOLICITE UM ORÇAMENTO<br></b></p>', 0, 50, NULL, '#000000', '#000000', '#ffffff', '#000000', '#000000', '#ffffff', '10', '40', '40', '10'),
(27, '164329931691972', 'FALAR COM O CONTADOR', '<p style=\"text-align: center; \"><b><span style=\"font-family: &quot;Exol2 Regular&quot;;\">FALAR COM O CONTADOR</span><br></b></p>', 0, 100, NULL, '#cd1b3c', 'rgba(0,0,0,0)', '#ffffff', '#23235c', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15'),
(28, '164338225857189', 'ENVIAR DEPOIMENTO', '<p style=\"text-align: center; \"><b><span style=\"font-family: &quot;Exol2 Regular&quot;;\" exol2=\"\" regular\";\"=\"\">ENVIAR DEPOIMENTO</span><br></b></p>', 0, 100, NULL, '#cd1b3c', 'rgba(0,0,0,0)', '#ffffff', '#24245a', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15'),
(29, '164340258675914', 'ATENDIMENTO VIA WHATSAPP', '<p style=\"text-align: center; \"><b><i class=\"fab fa-whatsapp\"></i> <span style=\"font-family: &quot;Exol2 Regular&quot;;\">ATENDIMENTO VIA WHATSAPP</span><br></b></p>', 0, 100, NULL, '#00d96d', 'rgba(0,0,0,0)', '#ffffff', '#19b366', 'rgba(0,0,0,0)', '#ffffff', '15', '45', '45', '15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_cores`
--

CREATE TABLE `layout_cores` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_cores`
--

INSERT INTO `layout_cores` (`id`, `titulo`, `cor`) VALUES
(1, 'Fundo', '#ffffff'),
(2, 'Textos', '#000000'),
(3, 'Links', '#000000'),
(4, 'Botão Padrão Selecionado Fundo', '#333'),
(5, 'Botão Padrão Selecionado Texto', '#ffffff'),
(6, 'Botão Padrão Fundo', '#000000'),
(7, 'Botão Padrão Texto', '#ffffff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_cores_sel`
--

CREATE TABLE `layout_cores_sel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_cores_sel`
--

INSERT INTO `layout_cores_sel` (`id`, `codigo`, `titulo`, `pagina`, `cor`) VALUES
(92, '1', 'Fundo', '163243615935451', '#ffffff'),
(93, '2', 'Textos', '163243615935451', '#000000'),
(94, '3', 'Links', '163243615935451', '#000000'),
(95, '4', 'Botão Padrão Selecionado Fundo', '163243615935451', '#333'),
(96, '5', 'Botão Padrão Selecionado Texto', '163243615935451', '#ffffff'),
(97, '6', 'Botão Padrão Fundo', '163243615935451', '#000000'),
(98, '7', 'Botão Padrão Texto', '163243615935451', '#ffffff'),
(99, '1', 'Fundo', '164339903870536', '#ffffff'),
(100, '2', 'Textos', '164339903870536', '#000000'),
(101, '3', 'Links', '164339903870536', '#000000'),
(102, '4', 'Botão Padrão Selecionado Fundo', '164339903870536', '#333'),
(103, '5', 'Botão Padrão Selecionado Texto', '164339903870536', '#ffffff'),
(104, '6', 'Botão Padrão Fundo', '164339903870536', '#000000'),
(105, '7', 'Botão Padrão Texto', '164339903870536', '#ffffff'),
(113, '1', 'Fundo', '164340149253198', '#ffffff'),
(114, '2', 'Textos', '164340149253198', '#000000'),
(115, '3', 'Links', '164340149253198', '#000000'),
(116, '4', 'Botão Padrão Selecionado Fundo', '164340149253198', '#333'),
(117, '5', 'Botão Padrão Selecionado Texto', '164340149253198', '#ffffff'),
(118, '6', 'Botão Padrão Fundo', '164340149253198', '#000000'),
(119, '7', 'Botão Padrão Texto', '164340149253198', '#ffffff'),
(120, '1', 'Fundo', '164340198076375', '#ffffff'),
(121, '2', 'Textos', '164340198076375', '#000000'),
(122, '3', 'Links', '164340198076375', '#000000'),
(123, '4', 'Botão Padrão Selecionado Fundo', '164340198076375', '#333'),
(124, '5', 'Botão Padrão Selecionado Texto', '164340198076375', '#ffffff'),
(125, '6', 'Botão Padrão Fundo', '164340198076375', '#000000'),
(126, '7', 'Botão Padrão Texto', '164340198076375', '#ffffff'),
(127, '1', 'Fundo', '166076580033637', '#ffffff'),
(128, '2', 'Textos', '166076580033637', '#000000'),
(129, '3', 'Links', '166076580033637', '#000000'),
(130, '4', 'Botão Padrão Selecionado Fundo', '166076580033637', '#333'),
(131, '5', 'Botão Padrão Selecionado Texto', '166076580033637', '#ffffff'),
(132, '6', 'Botão Padrão Fundo', '166076580033637', '#000000'),
(133, '7', 'Botão Padrão Texto', '166076580033637', '#ffffff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_css`
--

CREATE TABLE `layout_css` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `classe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_css`
--

INSERT INTO `layout_css` (`id`, `codigo`, `titulo`, `conteudo`, `classe`) VALUES
(1, '162162983418777', 'Sombra 1', 'text-shadow: 2px 2px 4px #000000;', 'pers_1621629834'),
(5, '162163003829483', 'Cantos arredondados 1', 'border-radius:1px;', 'pers_1621630038'),
(6, '162163004696492', 'Cantos arredondados 2', 'border-radius:2px;', 'pers_1621630046'),
(7, '162205861427853', 'Cantos arredondados 3', 'border-radius:3px;', 'pers_1622058614'),
(8, '162205862756221', 'Cantos arredondados 4', 'border-radius:4px;', 'pers_1622058627'),
(9, '162205864397114', 'Cantos arredondados 5', 'border-radius:5px;', 'pers_1622058643'),
(10, '162205866673522', 'Cantos arredondados 10', 'border-radius:10px;', 'pers_1622058666'),
(11, '162213993984348', 'teste', 'color:red !important;\r\nborder-radius:20px !important;\r\nfont-size:18px !important;', 'pers_1622139939'),
(12, '163292846351403', 'Zoom Imagem', '.container {\r\n  position: relative;\r\n  border: 1px solid #000;\r\n  overflow: hidden;\r\n  width: 400px;\r\n  margin: 100px;\r\n}\r\n.container img {\r\n  max-width: 100%;\r\n  -moz-transition: all 0.5s;\r\n  -webkit-transition: all 0.5s;\r\n  transition: all 0.5s;\r\n}\r\n.container:hover img {\r\n  -moz-transform: scale(1.2);\r\n  -webkit-transform: scale(1.2);\r\n  transform: scale(1.2);\r\n}', 'pers_1632928463');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_fontes`
--

CREATE TABLE `layout_fontes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `arquivo` varchar(255) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `fixo` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_fontes`
--

INSERT INTO `layout_fontes` (`id`, `codigo`, `titulo`, `family`, `endereco`, `arquivo`, `tipo`, `fixo`) VALUES
(15, '160617751126243', 'Roboto', 'Roboto', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(17, '160617870287642', 'Castoro', 'Castoro', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(18, '160617879416236', 'Nerko One', 'Nerko One', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Nerko+One&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(19, '160617884664262', 'Open Sans', 'Open Sans', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(20, '160617890983373', 'Montserrat', 'Montserrat', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(21, '160617959472343', 'Lato', 'Lato', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(24, '160618013419588', 'Ubuntu', 'Ubuntu', '<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">\r\n<link href=\"https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap\" rel=\"stylesheet\">', '', 'css', 0),
(26, '160618091018197', 'Courier', 'courier', NULL, NULL, 'css', 1),
(27, '160618094135988', 'Arial', 'Arial', NULL, NULL, 'css', 1),
(28, '160618096918781', 'Helvetica', 'Helvetica', NULL, NULL, 'css', 1),
(29, '160618111855104', 'Times New Roman', 'Times New Roman', NULL, NULL, 'css', 1),
(30, '160618115451530', 'Lucida Console', 'Lucida Console', NULL, NULL, 'css', 1),
(31, '160618122276302', 'Courier New', 'Courier New', NULL, NULL, 'css', 1),
(32, '160624656673837', 'Kastelov Intelo Regular', 'Kastelov Intelo Regular', '', 'Kastelov-Intelo-Regular-[24-11-20][19-46-40].otf', 'arquivo', 0),
(33, '160640135061590', 'Kastelov Intelo Bold', 'Kastelov Intelo Bold', '', 'Kastelov-Intelo-ExtraBold-[26-11-20][12-38-16].otf', 'arquivo', 0),
(34, '163285999581791', 'Exol2', 'Exol2 Regular', '', 'Exo2-Regular-[28-09-21][17-13-28].otf', 'arquivo', 0),
(35, '163286002385363', 'Exol2 Bold', 'Exol2 Bold', '', 'Exo2-ExtraBold-[28-09-21][17-13-53].otf', 'arquivo', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_itens`
--

CREATE TABLE `layout_itens` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_itens`
--

INSERT INTO `layout_itens` (`id`, `codigo`, `tipo`, `titulo`) VALUES
(118, '164340220520837', 'widgets', 'Widgets - Mapa'),
(119, '164340235264898', 'conteudos_blocos', 'Conteúdos em blocos - Contato'),
(114, '164340083258928', 'conteudos_blocos', 'Conteúdos em blocos - POR QUE ESCOLHER A GENTE?'),
(88, '163414603355927', 'planos', 'Planos - PLANOS DE INTERNET FIBRA ÓPTICA'),
(12, '161990956612589', 'topo', 'Topo - Institucional 2'),
(75, '163293361147298', 'produtos', 'Produtos - Produtos Destaques'),
(116, '164340160574772', 'postagens', 'Postagens - Noticias'),
(117, '164340183054360', 'conteudos_blocos', 'Conteúdos em blocos - Topo Noticias'),
(21, '161705545943312', 'rodape', 'Rodapé - Principal'),
(120, '164340295831867', 'conteudos_blocos', 'Conteúdos em blocos - Topo Contato'),
(25, '159423504627111', 'cadastro_email', 'Cadastro E-mail - Cadastre-se'),
(84, '163344602686281', 'produtos', 'Produtos - Lista'),
(28, '159647710291537', 'cadastro', 'Cadastro - Cadastro'),
(29, '159434592337144', 'contato', 'Contato - FALE CONOSCO'),
(30, '159421755016280', 'banner', 'Banners - Banners Principais'),
(31, '160590239782504', 'topo', 'Topo - Principal'),
(32, '5', 'fotos', 'Galeria de Fotos - Conteúdo'),
(33, '4', 'cadastro_fixo', 'Cadastro - Conteúdo'),
(34, '3', 'blog_fixo', 'Blog - Conteúdo'),
(35, '2', 'produto_fixo', 'Produtos - Conteúdo'),
(102, '164329476972748', 'caracteristicas', 'Características - BENEFÍCIOS'),
(103, '164329556335865', 'conteudos_blocos', 'Conteúdos em blocos - SOBRE'),
(107, '164338290576942', 'conteudos_blocos', 'Conteúdos em blocos - Depoimentos'),
(109, '164338440472283', 'postagens', 'Postagens - Notícias e Dicas'),
(110, '164339918623271', 'conteudos_blocos', 'Conteúdos em blocos - Topo Institucional'),
(111, '164339933221490', 'conteudos_blocos', 'Conteúdos em blocos - Nossa Empresa'),
(112, '164340042126649', 'conteudos_blocos', 'Conteúdos em blocos - Topo Serviços'),
(113, '164340052740364', 'conteudos_blocos', 'Conteúdos em blocos - O QUE NÓS FAZEMOS?'),
(97, '163657828090973', 'garagem', 'Garagem - Confira nosso estoque'),
(96, '163657674628384', 'garagem', 'Garagem - Destaques da Semana'),
(121, '166076568445923', 'conteudos_blocos', 'Conteúdos em blocos - Topo Planos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_itens_cores`
--

CREATE TABLE `layout_itens_cores` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_itens_cores`
--

INSERT INTO `layout_itens_cores` (`id`, `tipo`, `titulo`, `cor`) VALUES
(1, 'acordeon', 'Fundo', '#fff'),
(2, 'acordeon', 'Texto', '#000'),
(5, 'blocos', 'Fundo', '#fff'),
(6, 'blocos', 'Texto', '#000'),
(7, 'blocos', 'Titulo', '#000'),
(10, 'cadastro_email', 'Fundo', '#f2f2f2'),
(11, 'cadastro_email', 'Textos', '#000'),
(16, 'cadastro_fone', 'Fundo', '#f2f2f2'),
(17, 'cadastro_fone', 'Texto', '#000'),
(22, 'caracteristicas', 'Fundo', '#fff'),
(23, 'caracteristicas', 'Textos', '#000'),
(24, 'contador', 'Fundo', '#fff'),
(25, 'contador', 'Textos', '#000'),
(26, 'contato', 'Fundo', '#f2f2f2'),
(27, 'contato', 'Textos', '#000'),
(30, 'depoimentos', 'Fundo', '#fff'),
(31, 'depoimentos', 'Texto', '#000'),
(34, 'duvidas', 'Fundo', '#fff'),
(35, 'duvidas', 'Texto', '#000'),
(36, 'enquete', 'Fundo', '#fff'),
(37, 'enquete', 'Textos', '#000'),
(38, 'equipe', 'Fundo', '#fff'),
(39, 'equipe', 'Textos', '#000'),
(40, 'fotos', 'Fundo', '#f2f2f2'),
(41, 'fotos', 'Textos', '#000'),
(42, 'parceiros', 'Fundo', '#fff'),
(43, 'parceiros', 'Textos', '#000'),
(44, 'planos', 'Fundo', '#fff'),
(45, 'planos', 'Textos', '#000'),
(46, 'postagens', 'Fundo', '#fff'),
(47, 'postagens', 'Textos', '#000'),
(48, 'produtos', 'Fundo', '#f2f2f2'),
(49, 'produtos', 'Textos', '#000'),
(50, 'revistajornal', 'Fundo', '#fff'),
(51, 'revistajornal', 'Textos', '#000'),
(52, 'servicos', 'Fundo', '#fff'),
(53, 'servicos', 'Textos', '#000'),
(54, 'filiais', 'Fundo', '#fff'),
(55, 'filiais', 'Textos', '#000'),
(56, 'videos', 'Fundo', '#fff'),
(57, 'videos', 'Textos', '#000'),
(58, 'widgets', 'Fundo', '#fff'),
(59, 'widgets', 'Titulo', '#000'),
(60, 'cadastro', 'Fundo', '#fff'),
(61, 'cadastro', 'Textos', '#000'),
(62, 'banner', 'Fundo', '#fff'),
(63, 'destaques', 'Fundo', '#fff'),
(64, 'Destaques', 'Textos', '#000'),
(65, 'destaques', 'Titulo Imagem', '#fff'),
(66, 'destaques', 'Fundo Titulo Imagem', 'rgba(0,0,0,0.60)'),
(67, 'postagens', 'Prévia', '#666'),
(68, 'postagens', 'Paginação Fundo', '#333'),
(69, 'postagens', 'Paginação Texto', '#fff'),
(70, 'postagens', 'Paginação Fundo Selecionado', '#000'),
(71, 'postagens', 'Paginação Texto Selecionado', '#fff'),
(72, 'postagens', 'Titulo', '#000'),
(73, 'postagens', 'Fundo Titulo', 'rgba(0.0.0.0,6);'),
(74, 'postagens', 'Categorias', '#333'),
(75, 'postagens', 'Categorias Selecionado', '#999'),
(76, 'planos', 'Itens inclusos', '#000'),
(77, 'planos', 'Itens não inclusos', '#999'),
(80, 'planos', 'Fundo Quadro', '#fff'),
(82, 'planos', 'Valor', '#333'),
(83, 'depoimentos', 'Setas e Paginador', '#666'),
(84, 'depoimentos', 'Nome', '#666'),
(85, 'depoimentos', 'Depoimento', '#000'),
(88, 'duvidas', 'Perguntas Fundo', '#f2f2f2'),
(89, 'duvidas', 'Perguntas Itens', '#333'),
(90, 'enquete', 'Pergunta', '#333'),
(91, 'enquete', 'Respostas', '#000'),
(92, 'enquete', 'Fundo enquete', '#eee'),
(95, 'videos', 'Fundo Categorias', '#eee'),
(96, 'videos', 'Categorias Texto', '#000'),
(97, 'fotos', 'Categorias Fundo', '#ddd'),
(98, 'fotos', 'Categorias Textos', '#000'),
(99, 'produtos', 'Categorias Borda', '#ccc'),
(100, 'produtos', 'Categorias Fundo', '#fff'),
(101, 'produtos', 'Categorias Itens', '#666'),
(102, 'produtos', 'Categorias subitens', '#000'),
(103, 'produtos', 'Destaques borda', '#ccc'),
(104, 'produtos', 'Destaques fundo', '#fff'),
(105, 'produtos', 'Destaques Titulo', '#000'),
(106, 'produtos', 'Destaques valor falso', '#666'),
(107, 'produtos', 'Destaques Valor', '#5c9e0d'),
(112, 'produtos', 'Destaques separador valor', '#f2f2f2'),
(113, 'produtos', 'Destaques sob-consulta', '#666'),
(114, 'produtos', 'Paginação Fundo', '#000'),
(115, 'produtos', 'Paginação texto', '#fff'),
(116, 'produtos', 'Paginação selecionado Fundo', '#fff'),
(117, 'produtos', 'Paginação selecionado texto', '#000'),
(118, 'produtos', 'Categorias Itens Selecionados', '#000'),
(119, 'rastreamento', 'Fundo', '#fff'),
(120, 'rastreamento', 'Textos', '#000'),
(123, 'imoveis', 'Fundo', '#fff'),
(124, 'imoveis', 'Texto', '#000'),
(125, 'imoveis', 'Quadro borda', '#eee'),
(126, 'imoveis', 'Quadro fundo', '#fff'),
(127, 'imoveis', 'Quadro titulo', '#333'),
(128, 'imoveis', 'Quadro valor fundo', '#000'),
(129, 'imoveis', 'Quadro valor texto', '#fff'),
(130, 'imoveis', 'Quadro texto', '#000'),
(131, 'imoveis', 'Itens quadro fundo', '#fff'),
(132, 'imoveis', 'Itens quadro texto', '#666'),
(133, 'imoveis', 'Itens Quadro Borda', '#f2f2f2'),
(134, 'imoveis_detalhes1', 'Fundo', '#000'),
(135, 'imoveis_detalhes1', 'Textos', '#000'),
(136, 'imoveis_detalhes1', 'Bordas', '#e6e6e6'),
(137, 'imoveis_detalhes1', 'Similares fundo', '#f2f2f2'),
(138, 'imoveis_detalhes1', 'Similares titulo', '#666'),
(139, 'imoveis_detalhes1', 'Similares Item fundo', '#ddd'),
(140, 'imoveis_detalhes1', 'Similares item borda', '#ccc'),
(141, 'imoveis_detalhes1', 'Similares item titulo', '#000'),
(142, 'imoveis_detalhes1', 'Similares item descrição', '#000'),
(143, 'imoveis_detalhes1', 'Similares item icos', '#666'),
(144, 'imoveis_detalhes1', 'Similares item valor fundo', '#000'),
(145, 'imoveis_detalhes1', 'Similares item valor texto', '#fff'),
(146, 'imoveis', 'Slogan', '#fff'),
(147, 'imoveis', 'Busca fundo', 'rgba(0.0.0.0,6);'),
(148, 'imoveis', 'Busca fundo abas', 'rgba(0.0.0.0,4);'),
(149, 'imoveis', 'Busca texto abas', '#fff'),
(150, 'imoveis', 'Busca textos', '#fff'),
(151, 'imoveis', 'Busca botão fundo', '#fff'),
(152, 'imoveis', 'Busca botão texto', '#000'),
(153, 'imoveis', 'Busca botão borda', '#ccc'),
(154, 'imoveis', 'Paginação - fundo', '#000'),
(155, 'imoveis', 'Paginação - texto', '#fff'),
(156, 'imoveis', 'Paginação selecionado - fundo', '#fff'),
(157, 'imoveis', 'Paginação selecionado - texto', '#000'),
(158, 'postagens', 'Fundo Quadro', '#fff'),
(159, 'postagens', 'Ler Mais', '#000'),
(160, 'imoveis_detalhes2', 'Fundo', '#f2f2f2'),
(161, 'imoveis_detalhes2', 'Categoria Fundo', '#000'),
(162, 'imoveis_detalhes2', 'Categoria Texto', '#fff'),
(163, 'imoveis_detalhes2', 'Quadros Fundo', '#fff'),
(164, 'imoveis_detalhes2', 'Titulo', '#000'),
(165, 'imoveis_detalhes2', 'Textos', '#666'),
(166, 'imoveis_detalhes2', 'Valor Fundo', '#000'),
(167, 'imoveis_detalhes2', 'Valor Texto', '#ffff'),
(168, 'imoveis_detalhes2', 'Itens Valor', '#000'),
(169, 'imoveis_detalhes2', 'Botão Info Fundo', '#000'),
(170, 'imoveis_detalhes2', 'Botão Info Texto', '#fff'),
(172, 'imoveis_detalhes2', 'Similares itens valor', '#000'),
(173, 'imoveis_detalhes2', 'Similares itens texto', '#0091F8'),
(174, 'imoveis_detalhes2', 'Similares quadro fundo', '#fff'),
(175, 'imoveis_detalhes2', 'Similares quadro borda', '#fff'),
(176, 'imoveis_detalhes2', 'Similares textos', '#000'),
(177, 'imoveis_detalhes2', 'Similares titulo', '#000'),
(178, 'imoveis_detalhes2', 'Similares categoria fundo', '#000'),
(179, 'imoveis_detalhes2', 'Similares categoria texto', '#fff'),
(180, 'imoveis_detalhes2', 'Similares valor fundo', '#000'),
(181, 'imoveis_detalhes2', 'Similares valor texto', '#fff'),
(182, 'imoveis_detalhes2', 'Similares botão fundo', '#076EB9'),
(183, 'imoveis_detalhes2', 'Similares botão texto', '#fff'),
(184, 'classificados', 'Fundo', '#fff'),
(185, 'classificados', 'Texto', '#000'),
(186, 'classificados', 'Quadro borda', '#eee'),
(187, 'classificados', 'Quadro fundo', '#fff'),
(188, 'classificados', 'Quadro titulo', '#333'),
(189, 'classificados', 'Quadro valor fundo', '#000'),
(190, 'classificados', 'Quadro valor texto', '#fff'),
(191, 'classificados', 'Quadro texto', '#000'),
(192, 'classificados', 'Itens quadro fundo', '#fff'),
(193, 'classificados', 'Itens quadro texto', '#666'),
(194, 'classificados', 'Itens Quadro Borda', '#f2f2f2'),
(195, 'classificados', 'Slogan', '#fff'),
(196, 'classificados', 'Busca fundo', 'rgba(0.0.0.0,6);'),
(197, 'classificados', 'Busca fundo abas', 'rgba(0.0.0.0,4);'),
(198, 'classificados', 'Busca texto abas', '#fff'),
(199, 'classificados', 'Busca textos', '#fff'),
(200, 'classificados', 'Busca botão fundo', '#fff'),
(201, 'classificados', 'Busca botão texto', '#000'),
(202, 'classificados', 'Busca botão borda', '#ccc'),
(203, 'classificados', 'Paginação - fundo', '#000'),
(204, 'classificados', 'Paginação - texto', '#000'),
(205, 'classificados', 'Paginação selecionado - fundo', '#fff'),
(206, 'classificados', 'Paginação selecionado - texto', '#000'),
(207, 'classificados_detalhes', 'Fundo', '#f2f2f2'),
(208, 'classificados_detalhes', 'Categoria Fundo', '#000'),
(209, 'classificados_detalhes', 'Categoria Texto', '#fff'),
(210, 'classificados_detalhes', 'Quadros Fundo', '#fff'),
(211, 'classificados_detalhes', 'Titulo', '#000'),
(212, 'classificados_detalhes', 'Textos', '#000'),
(213, 'classificados_detalhes', 'Valor Fundo', '#000'),
(214, 'classificados_detalhes', 'Valor Texto', '#fff'),
(215, 'classificados_detalhes', 'Itens Valor', '#000'),
(216, 'classificados_detalhes', 'Botão Info Fundo', '#000'),
(217, 'classificados_detalhes', 'Botão Info Texto', '#fff'),
(218, 'classificados_detalhes', 'Similares itens valor', '#000'),
(219, 'classificados_detalhes', 'Similares itens texto', '#0091F8'),
(220, 'classificados_detalhes', 'Similares quadro fundo', '#fff'),
(221, 'classificados_detalhes', 'Similares quadro borda', '#fff'),
(222, 'classificados_detalhes', 'Similares textos', '#000'),
(223, 'classificados_detalhes', 'Similares titulo', '#000'),
(224, 'classificados_detalhes', 'Similares categoria fundo', '#000'),
(225, 'classificados_detalhes', 'Similares categoria texto', '#fff'),
(226, 'classificados_detalhes', 'Similares valor fundo', '#000'),
(227, 'classificados_detalhes', 'Similares valor texto', '#fff'),
(228, 'classificados_detalhes', 'Similares botão fundo', '#076EB9'),
(229, 'classificados_detalhes', 'Similares botão texto', '#fff'),
(230, 'classificados', 'Opções fundo', '#fff'),
(231, 'classificados', 'Opções texto', '#000'),
(232, 'classificados', 'Opções selecionado fundo', '#000'),
(233, 'classificados', 'Opções selecionado texto', '#fff'),
(234, 'acordeon', 'Fundo Botão', '#000'),
(235, 'acordeon', 'Texto Botão', '#fff'),
(236, 'garagem', 'Fundo', '#fff'),
(237, 'garagem', 'Texto', '#000'),
(260, 'garagem', 'Busca fundo', 'rgba(0.0.0.0,6);'),
(263, 'garagem', 'Busca textos', '#fff'),
(264, 'garagem', 'Busca botão fundo', '#fff'),
(265, 'garagem', 'Busca botão texto', '#000'),
(267, 'garagem', 'Paginação - fundo', '#000'),
(268, 'garagem', 'Paginação - texto', '#fff'),
(269, 'garagem', 'Paginação selecionado - fundo', '#fff'),
(270, 'garagem', 'Paginação selecionado - texto', '#000'),
(271, 'garagem_detalhes', 'Fundo', '#f2f2f2'),
(272, 'garagem_detalhes', 'Categoria Fundo', '#000'),
(273, 'garagem_detalhes', 'Categoria Texto', '#fff'),
(274, 'garagem_detalhes', 'Quadros Fundo', '#fff'),
(275, 'garagem_detalhes', 'Titulo', '#000'),
(276, 'garagem_detalhes', 'Textos', '#666'),
(277, 'garagem_detalhes', 'Valor Fundo', '#000'),
(278, 'garagem_detalhes', 'Valor Texto', '#ffff'),
(279, 'garagem_detalhes', 'Itens Valor', '#000'),
(280, 'garagem_detalhes', 'Botão Info Fundo', '#000'),
(281, 'garagem_detalhes', 'Botão Info Texto', '#fff'),
(282, 'garagem_detalhes', 'Similares itens valor', '#000'),
(283, 'garagem_detalhes', 'Similares itens texto', '#0091F8'),
(284, 'garagem_detalhes', 'Similares quadro fundo', '#fff'),
(285, 'garagem_detalhes', 'Similares quadro borda', '#fff'),
(286, 'garagem_detalhes', 'Similares textos', '#000'),
(287, 'garagem_detalhes', 'Similares titulo', '#000'),
(288, 'garagem_detalhes', 'Similares categoria fundo', '#000'),
(289, 'garagem_detalhes', 'Similares categoria texto', '#fff'),
(290, 'garagem_detalhes', 'Similares valor fundo', '#000'),
(291, 'garagem_detalhes', 'Similares valor texto', '#fff'),
(292, 'garagem_detalhes', 'Similares botão fundo', '#076EB9'),
(293, 'garagem_detalhes', 'Similares botão texto', '#fff'),
(294, 'audios', 'Fundo', '#fff'),
(295, 'audios', 'Textos', '#000'),
(296, 'audios', 'Categorias Fundo', '#eee'),
(297, 'audios', 'Categorias Texto', '#000'),
(298, 'audios', 'Categorias Bt Fundo', '#000'),
(299, 'audios', 'Categorias Bt Texto', '#fff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_itens_cores_sel`
--

CREATE TABLE `layout_itens_cores_sel` (
  `id` int(11) NOT NULL,
  `item_codigo` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `cor_id` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_itens_cores_sel`
--

INSERT INTO `layout_itens_cores_sel` (`id`, `item_codigo`, `tipo`, `cor_id`, `titulo`, `cor`) VALUES
(28, '159423504627111', 'cadastro_email', '10', 'Fundo', 'rgba(1,16,57,0)'),
(29, '159423504627111', 'cadastro_email', '11', 'Textos', '#ffffff'),
(60, '159434592337144', 'contato', '26', 'Fundo', 'rgba(0,20,68,0)'),
(61, '159434592337144', 'contato', '27', 'Textos', '#ffffff'),
(148, '159466891685482', 'servicos', '52', 'Fundo', '#fff'),
(149, '159466891685482', 'servicos', '53', 'Textos', '#000'),
(150, '159466892078097', 'servicos', '52', 'Fundo', '#fff'),
(151, '159466892078097', 'servicos', '53', 'Textos', '#000'),
(152, '159466898692060', 'servicos', '52', 'Fundo', '#fff'),
(153, '159466898692060', 'servicos', '53', 'Textos', '#000'),
(183, '159467946197300', 'widgets', '58', 'Fundo', '#fff'),
(184, '159467946197300', 'widgets', '59', 'Titulo', '#000'),
(185, '159467964319973', 'widgets', '58', 'Fundo', '#fff'),
(186, '159467964319973', 'widgets', '59', 'Titulo', '#000'),
(187, '159467976820909', 'widgets', '58', 'Fundo', '#fff'),
(188, '159467976820909', 'widgets', '59', 'Titulo', '#000'),
(189, '159421755016280', 'banner', '62', 'Fundo', '#ffffff'),
(257, '159605074072887', 'produtos', '48', 'Fundo', '#f2f2f2'),
(258, '159605074072887', 'produtos', '49', 'Textos', '#000000'),
(266, '159647710291537', 'cadastro', '60', 'Fundo', '#eeeeee'),
(267, '159647710291537', 'cadastro', '61', 'Textos', '#666666'),
(305, '159605074072887', 'produtos', '99', 'Categorias Borda', '#cccccc'),
(306, '159605074072887', 'produtos', '100', 'Categorias Fundo', '#ffffff'),
(307, '159605074072887', 'produtos', '101', 'Categorias Itens', '#666666'),
(308, '159605074072887', 'produtos', '102', 'Categorias subitens', '#333333'),
(309, '159605074072887', 'produtos', '103', 'Destaques borda', '#cccccc'),
(310, '159605074072887', 'produtos', '104', 'Destaques fundo', '#ffffff'),
(311, '159605074072887', 'produtos', '105', 'Destaques Titulo', '#000000'),
(312, '159605074072887', 'produtos', '106', 'Destaques valor falso', '#666666'),
(313, '159605074072887', 'produtos', '107', 'Destaques Valor', '#5c9e0d'),
(318, '159605074072887', 'produtos', '112', 'Destaques separador valor', '#f2f2f2'),
(319, '159605074072887', 'produtos', '113', 'Destaques sob-consulta', '#666666'),
(320, '159605074072887', 'produtos', '114', 'Paginação Fundo', '#000000'),
(321, '159605074072887', 'produtos', '116', 'Paginação selecionado Fundo', '#ffffff'),
(322, '159605074072887', 'produtos', '117', 'Paginação selecionado texto', '#000000'),
(323, '159605074072887', 'produtos', '115', 'Paginação texto', '#ffffff'),
(324, '159718845988688', 'produtos', '99', 'Categorias Borda', '#cccccc'),
(325, '159718845988688', 'produtos', '100', 'Categorias Fundo', '#ffffff'),
(326, '159718845988688', 'produtos', '101', 'Categorias Itens', '#666666'),
(327, '159718845988688', 'produtos', '102', 'Categorias subitens', '#000000'),
(328, '159718845988688', 'produtos', '103', 'Destaques borda', '#cccccc'),
(333, '159718845988688', 'produtos', '104', 'Destaques fundo', '#ffffff'),
(334, '159718845988688', 'produtos', '112', 'Destaques separador valor', '#f2f2f2'),
(335, '159718845988688', 'produtos', '113', 'Destaques sob-consulta', '#666666'),
(336, '159718845988688', 'produtos', '105', 'Destaques Titulo', '#000000'),
(337, '159718845988688', 'produtos', '107', 'Destaques Valor', '#5c9e0d'),
(338, '159718845988688', 'produtos', '106', 'Destaques valor falso', '#666666'),
(339, '159718845988688', 'produtos', '48', 'Fundo', '#ffffff'),
(340, '159718845988688', 'produtos', '114', 'Paginação Fundo', '#000000'),
(341, '159718845988688', 'produtos', '116', 'Paginação selecionado Fundo', '#ffffff'),
(342, '159718845988688', 'produtos', '117', 'Paginação selecionado texto', '#000000'),
(343, '159718845988688', 'produtos', '115', 'Paginação texto', '#ffffff'),
(344, '159718845988688', 'produtos', '49', 'Textos', '#000000'),
(345, '159718845988688', 'produtos', '118', 'Categorias Itens Selecionados', '#000'),
(346, '159605074072887', 'produtos', '118', 'Categorias Itens Selecionados', '#000'),
(415, 'imoveis_detalhes_1', 'imoveis_detalhes', '136', 'Bordas', '#c6c6c6'),
(416, 'imoveis_detalhes_1', 'imoveis_detalhes', '134', 'Fundo', '#ffffff'),
(417, 'imoveis_detalhes_1', 'imoveis_detalhes', '135', 'Textos', '#000000'),
(418, 'imoveis_detalhes_1', 'imoveis_detalhes', '137', 'Fundo Similares', '#f2f2f2'),
(419, 'imoveis_detalhes_1', 'imoveis_detalhes', '138', 'Titulo Similares', '#666666'),
(420, 'imoveis_detalhes_1', 'imoveis_detalhes', '140', 'Similares item borda', '#cccccc'),
(421, 'imoveis_detalhes_1', 'imoveis_detalhes', '142', 'Similares item descrição', '#000000'),
(422, 'imoveis_detalhes_1', 'imoveis_detalhes', '139', 'Similares Item fundo', '#ffffff'),
(423, 'imoveis_detalhes_1', 'imoveis_detalhes', '143', 'Similares item icos', '#666666'),
(424, 'imoveis_detalhes_1', 'imoveis_detalhes', '141', 'Similares item titulo', '#000000'),
(425, 'imoveis_detalhes_1', 'imoveis_detalhes', '144', 'Similares item valor fundo', '#000000'),
(426, 'imoveis_detalhes_1', 'imoveis_detalhes', '145', 'Similares item valor texto', '#ffffff'),
(662, 'imoveis_detalhes_2', 'imoveis_detalhes', '136', 'Bordas', '#e6e6e6'),
(663, 'imoveis_detalhes_2', 'imoveis_detalhes', '134', 'Fundo', '#eeeeee'),
(664, 'imoveis_detalhes_2', 'imoveis_detalhes', '137', 'Similares fundo', '#f2f2f2'),
(665, 'imoveis_detalhes_2', 'imoveis_detalhes', '140', 'Similares item borda', '#cccccc'),
(666, 'imoveis_detalhes_2', 'imoveis_detalhes', '142', 'Similares item descrição', '#000000'),
(667, 'imoveis_detalhes_2', 'imoveis_detalhes', '139', 'Similares Item fundo', '#dddddd'),
(668, 'imoveis_detalhes_2', 'imoveis_detalhes', '143', 'Similares item icos', '#666666'),
(669, 'imoveis_detalhes_2', 'imoveis_detalhes', '141', 'Similares item titulo', '#000000'),
(670, 'imoveis_detalhes_2', 'imoveis_detalhes', '144', 'Similares item valor fundo', '#000000'),
(671, 'imoveis_detalhes_2', 'imoveis_detalhes', '145', 'Similares item valor texto', '#ffffff'),
(672, 'imoveis_detalhes_2', 'imoveis_detalhes', '138', 'Similares titulo', '#666666'),
(673, 'imoveis_detalhes_2', 'imoveis_detalhes', '135', 'Textos', '#000000'),
(674, 'imoveis_detalhes2', 'imoveis_detalhes2', '160', 'Fundo', '#f2f2f2'),
(675, 'imoveis_detalhes2', 'imoveis_detalhes2', '161', 'Categoria Fundo', '#0091f8'),
(676, 'imoveis_detalhes2', 'imoveis_detalhes2', '162', 'Categoria Texto', '#ffffff'),
(677, 'imoveis_detalhes2', 'imoveis_detalhes2', '163', 'Quadros Fundo', '#ffffff'),
(678, 'imoveis_detalhes2', 'imoveis_detalhes2', '165', 'Textos', '#666666'),
(679, 'imoveis_detalhes2', 'imoveis_detalhes2', '164', 'Titulo', '#000000'),
(680, 'imoveis_detalhes2', 'imoveis_detalhes2', '166', 'Valor Fundo', '#000000'),
(681, 'imoveis_detalhes2', 'imoveis_detalhes2', '167', 'Valor Texto', '#ffffff'),
(682, 'imoveis_detalhes2', 'imoveis_detalhes2', '168', 'Itens Valor', '#0091f8'),
(683, 'imoveis_detalhes2', 'imoveis_detalhes2', '170', 'Botão Info Texto', '#ffffff'),
(684, 'imoveis_detalhes2', 'imoveis_detalhes2', '169', 'Botão Info Fundo', '#0091f8'),
(698, 'imoveis_detalhes2', 'imoveis_detalhes2', '182', 'Similares botão fundo', '#076eb9'),
(699, 'imoveis_detalhes2', 'imoveis_detalhes2', '183', 'Similares botão texto', '#ffffff'),
(700, 'imoveis_detalhes2', 'imoveis_detalhes2', '178', 'Similares categoria fundo', '#000000'),
(701, 'imoveis_detalhes2', 'imoveis_detalhes2', '179', 'Similares categoria texto', '#ffffff'),
(702, 'imoveis_detalhes2', 'imoveis_detalhes2', '173', 'Similares itens texto', '#0091f8'),
(703, 'imoveis_detalhes2', 'imoveis_detalhes2', '172', 'Similares itens valor', '#000000'),
(704, 'imoveis_detalhes2', 'imoveis_detalhes2', '175', 'Similares quadro borda', 'rgba(255,255,255,0)'),
(705, 'imoveis_detalhes2', 'imoveis_detalhes2', '174', 'Similares quadro fundo', '#ffffff'),
(706, 'imoveis_detalhes2', 'imoveis_detalhes2', '176', 'Similares textos', '#000000'),
(707, 'imoveis_detalhes2', 'imoveis_detalhes2', '177', 'Similares titulo', '#000000'),
(708, 'imoveis_detalhes2', 'imoveis_detalhes2', '180', 'Similares valor fundo', '#000000'),
(709, 'imoveis_detalhes2', 'imoveis_detalhes2', '181', 'Similares valor texto', '#ffffff'),
(733, 'classificados_detalhes', 'classificados_detalhes', '216', 'Botão Info Fundo', '#000'),
(734, 'classificados_detalhes', 'classificados_detalhes', '217', 'Botão Info Texto', '#fff'),
(735, 'classificados_detalhes', 'classificados_detalhes', '208', 'Categoria Fundo', '#000'),
(736, 'classificados_detalhes', 'classificados_detalhes', '209', 'Categoria Texto', '#fff'),
(737, 'classificados_detalhes', 'classificados_detalhes', '207', 'Fundo', '#f2f2f2'),
(738, 'classificados_detalhes', 'classificados_detalhes', '215', 'Itens Valor', '#000'),
(739, 'classificados_detalhes', 'classificados_detalhes', '210', 'Quadros Fundo', '#fff'),
(740, 'classificados_detalhes', 'classificados_detalhes', '228', 'Similares botão fundo', '#076EB9'),
(741, 'classificados_detalhes', 'classificados_detalhes', '229', 'Similares botão texto', '#fff'),
(742, 'classificados_detalhes', 'classificados_detalhes', '224', 'Similares categoria fundo', '#000'),
(743, 'classificados_detalhes', 'classificados_detalhes', '225', 'Similares categoria texto', '#fff'),
(744, 'classificados_detalhes', 'classificados_detalhes', '219', 'Similares itens texto', '#0091F8'),
(745, 'classificados_detalhes', 'classificados_detalhes', '218', 'Similares itens valor', '#000'),
(746, 'classificados_detalhes', 'classificados_detalhes', '221', 'Similares quadro borda', '#fff'),
(747, 'classificados_detalhes', 'classificados_detalhes', '220', 'Similares quadro fundo', '#fff'),
(748, 'classificados_detalhes', 'classificados_detalhes', '222', 'Similares textos', '#000'),
(749, 'classificados_detalhes', 'classificados_detalhes', '223', 'Similares titulo', '#000'),
(750, 'classificados_detalhes', 'classificados_detalhes', '226', 'Similares valor fundo', '#000'),
(751, 'classificados_detalhes', 'classificados_detalhes', '227', 'Similares valor texto', '#fff'),
(752, 'classificados_detalhes', 'classificados_detalhes', '212', 'Textos', '#000'),
(753, 'classificados_detalhes', 'classificados_detalhes', '211', 'Titulo', '#000'),
(754, 'classificados_detalhes', 'classificados_detalhes', '213', 'Valor Fundo', '#000'),
(755, 'classificados_detalhes', 'classificados_detalhes', '214', 'Valor Texto', '#fff'),
(887, '162008664772003', 'blocos', '5', 'Fundo', '#fff'),
(888, '162008664772003', 'blocos', '6', 'Texto', '#000'),
(889, '162008664772003', 'blocos', '7', 'Titulo', '#000'),
(890, '162008723166517', 'blocos', '5', 'Fundo', '#fff'),
(891, '162008723166517', 'blocos', '6', 'Texto', '#000'),
(892, '162008723166517', 'blocos', '7', 'Titulo', '#000'),
(893, '162008725023200', 'blocos', '5', 'Fundo', '#fff'),
(894, '162008725023200', 'blocos', '6', 'Texto', '#000'),
(895, '162008725023200', 'blocos', '7', 'Titulo', '#000'),
(896, '162008767771089', 'blocos', '5', 'Fundo', '#fff'),
(897, '162008767771089', 'blocos', '6', 'Texto', '#000'),
(898, '162008767771089', 'blocos', '7', 'Titulo', '#000'),
(1117, 'imoveis_detalhes1', 'imoveis_detalhes1', '136', 'Bordas', '#e6e6e6'),
(1118, 'imoveis_detalhes1', 'imoveis_detalhes1', '134', 'Fundo', '#ffffff'),
(1119, 'imoveis_detalhes1', 'imoveis_detalhes1', '137', 'Similares fundo', '#f2f2f2'),
(1120, 'imoveis_detalhes1', 'imoveis_detalhes1', '140', 'Similares item borda', '#cccccc'),
(1121, 'imoveis_detalhes1', 'imoveis_detalhes1', '142', 'Similares item descrição', '#000000'),
(1122, 'imoveis_detalhes1', 'imoveis_detalhes1', '139', 'Similares Item fundo', '#ffffff'),
(1123, 'imoveis_detalhes1', 'imoveis_detalhes1', '143', 'Similares item icos', '#666666'),
(1124, 'imoveis_detalhes1', 'imoveis_detalhes1', '141', 'Similares item titulo', '#000000'),
(1125, 'imoveis_detalhes1', 'imoveis_detalhes1', '144', 'Similares item valor fundo', '#000000'),
(1126, 'imoveis_detalhes1', 'imoveis_detalhes1', '145', 'Similares item valor texto', '#ffffff'),
(1127, 'imoveis_detalhes1', 'imoveis_detalhes1', '138', 'Similares titulo', '#666666'),
(1128, 'imoveis_detalhes1', 'imoveis_detalhes1', '135', 'Textos', '#000000'),
(1150, '163293361147298', 'produtos', '99', 'Categorias Borda', '#2ca339'),
(1151, '163293361147298', 'produtos', '100', 'Categorias Fundo', '#ffffff'),
(1152, '163293361147298', 'produtos', '101', 'Categorias Itens', '#666666'),
(1153, '163293361147298', 'produtos', '118', 'Categorias Itens Selecionados', '#000000'),
(1154, '163293361147298', 'produtos', '102', 'Categorias subitens', '#000000'),
(1155, '163293361147298', 'produtos', '103', 'Destaques borda', '#ededed'),
(1156, '163293361147298', 'produtos', '104', 'Destaques fundo', '#ffffff'),
(1157, '163293361147298', 'produtos', '112', 'Destaques separador valor', '#2ca339'),
(1158, '163293361147298', 'produtos', '113', 'Destaques sob-consulta', '#2ca339'),
(1159, '163293361147298', 'produtos', '105', 'Destaques Titulo', '#000000'),
(1160, '163293361147298', 'produtos', '107', 'Destaques Valor', '#5c9e0d'),
(1161, '163293361147298', 'produtos', '106', 'Destaques valor falso', '#666666'),
(1162, '163293361147298', 'produtos', '48', 'Fundo', '#ffffff'),
(1163, '163293361147298', 'produtos', '114', 'Paginação Fundo', '#2ca339'),
(1164, '163293361147298', 'produtos', '116', 'Paginação selecionado Fundo', '#1e8729'),
(1165, '163293361147298', 'produtos', '117', 'Paginação selecionado texto', '#000000'),
(1166, '163293361147298', 'produtos', '115', 'Paginação texto', '#ffffff'),
(1167, '163293361147298', 'produtos', '49', 'Textos', '#000000'),
(1184, '163344602686281', 'produtos', '99', 'Categorias Borda', '#cccccc'),
(1185, '163344602686281', 'produtos', '100', 'Categorias Fundo', '#ffffff'),
(1186, '163344602686281', 'produtos', '101', 'Categorias Itens', '#666666'),
(1187, '163344602686281', 'produtos', '118', 'Categorias Itens Selecionados', '#000000'),
(1188, '163344602686281', 'produtos', '102', 'Categorias subitens', '#000000'),
(1189, '163344602686281', 'produtos', '103', 'Destaques borda', '#cccccc'),
(1190, '163344602686281', 'produtos', '104', 'Destaques fundo', '#ffffff'),
(1191, '163344602686281', 'produtos', '112', 'Destaques separador valor', '#f2f2f2'),
(1192, '163344602686281', 'produtos', '113', 'Destaques sob-consulta', '#666666'),
(1193, '163344602686281', 'produtos', '105', 'Destaques Titulo', '#000000'),
(1194, '163344602686281', 'produtos', '107', 'Destaques Valor', '#5c9e0d'),
(1195, '163344602686281', 'produtos', '106', 'Destaques valor falso', '#666666'),
(1196, '163344602686281', 'produtos', '48', 'Fundo', '#ffffff'),
(1197, '163344602686281', 'produtos', '114', 'Paginação Fundo', '#21106b'),
(1198, '163344602686281', 'produtos', '116', 'Paginação selecionado Fundo', '#ffffff'),
(1199, '163344602686281', 'produtos', '117', 'Paginação selecionado texto', '#000000'),
(1200, '163344602686281', 'produtos', '115', 'Paginação texto', '#ffffff'),
(1201, '163344602686281', 'produtos', '49', 'Textos', '#000000'),
(1207, '163414603355927', 'planos', '44', 'Fundo', '#ff8000'),
(1208, '163414603355927', 'planos', '80', 'Fundo Quadro', '#f8f8f8'),
(1209, '163414603355927', 'planos', '76', 'Itens inclusos', '#5f5f5f'),
(1210, '163414603355927', 'planos', '77', 'Itens não inclusos', '#b1b1b1'),
(1211, '163414603355927', 'planos', '45', 'Textos', '#6f6f6f'),
(1212, '163414603355927', 'planos', '82', 'Valor', '#ff8000'),
(1238, '163657674628384', 'garagem', '264', 'Busca botão fundo', '#ffffff'),
(1239, '163657674628384', 'garagem', '265', 'Busca botão texto', '#000000'),
(1240, '163657674628384', 'garagem', '260', 'Busca fundo', 'rgba(0,0,0,1)'),
(1241, '163657674628384', 'garagem', '263', 'Busca textos', '#ffffff'),
(1242, '163657674628384', 'garagem', '236', 'Fundo', '#ede8e8'),
(1243, '163657674628384', 'garagem', '267', 'Paginação - fundo', '#000000'),
(1244, '163657674628384', 'garagem', '268', 'Paginação - texto', '#ffffff'),
(1245, '163657674628384', 'garagem', '269', 'Paginação selecionado - fundo', '#ffffff'),
(1246, '163657674628384', 'garagem', '270', 'Paginação selecionado - texto', '#000000'),
(1247, '163657674628384', 'garagem', '237', 'Texto', '#000000'),
(1248, '163657828090973', 'garagem', '264', 'Busca botão fundo', '#fff'),
(1249, '163657828090973', 'garagem', '265', 'Busca botão texto', '#000'),
(1250, '163657828090973', 'garagem', '260', 'Busca fundo', 'rgba(0.0.0.0,6);'),
(1251, '163657828090973', 'garagem', '263', 'Busca textos', '#fff'),
(1252, '163657828090973', 'garagem', '236', 'Fundo', '#fff'),
(1253, '163657828090973', 'garagem', '267', 'Paginação - fundo', '#000'),
(1254, '163657828090973', 'garagem', '268', 'Paginação - texto', '#fff'),
(1255, '163657828090973', 'garagem', '269', 'Paginação selecionado - fundo', '#fff'),
(1256, '163657828090973', 'garagem', '270', 'Paginação selecionado - texto', '#000'),
(1257, '163657828090973', 'garagem', '237', 'Texto', '#000'),
(1265, '164329476972748', 'caracteristicas', '22', 'Fundo', '#ffffff'),
(1266, '164329476972748', 'caracteristicas', '23', 'Textos', '#272727'),
(1267, '164329556335865', 'blocos', '5', 'Fundo', 'rgba(255,255,255,0)'),
(1268, '164329556335865', 'blocos', '6', 'Texto', '#000000'),
(1269, '164329556335865', 'blocos', '7', 'Titulo', '#000000'),
(1279, '164338290576942', 'blocos', '5', 'Fundo', '#fff'),
(1280, '164338290576942', 'blocos', '6', 'Texto', '#000'),
(1281, '164338290576942', 'blocos', '7', 'Titulo', '#000'),
(1284, '164338440472283', 'postagens', '74', 'Categorias', '#333333'),
(1285, '164338440472283', 'postagens', '75', 'Categorias Selecionado', '#999999'),
(1286, '164338440472283', 'postagens', '46', 'Fundo', '#ffffff'),
(1287, '164338440472283', 'postagens', '158', 'Fundo Quadro', '#ffffff'),
(1288, '164338440472283', 'postagens', '73', 'Fundo Titulo', 'rgba(35,35,35,0.73)'),
(1289, '164338440472283', 'postagens', '159', 'Ler Mais', '#cd1b3c'),
(1290, '164338440472283', 'postagens', '68', 'Paginação Fundo', '#cd1b3c'),
(1291, '164338440472283', 'postagens', '70', 'Paginação Fundo Selecionado', '#24245a'),
(1292, '164338440472283', 'postagens', '69', 'Paginação Texto', '#ffffff'),
(1293, '164338440472283', 'postagens', '71', 'Paginação Texto Selecionado', '#ffffff'),
(1294, '164338440472283', 'postagens', '67', 'Prévia', '#666666'),
(1295, '164338440472283', 'postagens', '47', 'Textos', '#24245a'),
(1296, '164338440472283', 'postagens', '72', 'Titulo', '#ffffff'),
(1297, '164339918623271', 'blocos', '5', 'Fundo', '#ff8000'),
(1298, '164339918623271', 'blocos', '6', 'Texto', '#ffffff'),
(1299, '164339918623271', 'blocos', '7', 'Titulo', '#ffffff'),
(1300, '164339933221490', 'blocos', '5', 'Fundo', '#fff'),
(1301, '164339933221490', 'blocos', '6', 'Texto', '#000'),
(1302, '164339933221490', 'blocos', '7', 'Titulo', '#000'),
(1303, '164340042126649', 'blocos', '5', 'Fundo', '#fff'),
(1304, '164340042126649', 'blocos', '6', 'Texto', '#000'),
(1305, '164340042126649', 'blocos', '7', 'Titulo', '#000'),
(1306, '164340052740364', 'blocos', '5', 'Fundo', '#fff'),
(1307, '164340052740364', 'blocos', '6', 'Texto', '#000'),
(1308, '164340052740364', 'blocos', '7', 'Titulo', '#000'),
(1309, '164340083258928', 'blocos', '5', 'Fundo', '#fff'),
(1310, '164340083258928', 'blocos', '6', 'Texto', '#000'),
(1311, '164340083258928', 'blocos', '7', 'Titulo', '#000'),
(1314, '164340160574772', 'postagens', '74', 'Categorias', '#333333'),
(1315, '164340160574772', 'postagens', '75', 'Categorias Selecionado', '#999999'),
(1316, '164340160574772', 'postagens', '46', 'Fundo', '#ffffff'),
(1317, '164340160574772', 'postagens', '158', 'Fundo Quadro', '#ffffff'),
(1318, '164340160574772', 'postagens', '73', 'Fundo Titulo', 'rgba(0,0,0,1)'),
(1319, '164340160574772', 'postagens', '159', 'Ler Mais', '#000000'),
(1320, '164340160574772', 'postagens', '68', 'Paginação Fundo', '#333333'),
(1321, '164340160574772', 'postagens', '70', 'Paginação Fundo Selecionado', '#000000'),
(1322, '164340160574772', 'postagens', '69', 'Paginação Texto', '#ffffff'),
(1323, '164340160574772', 'postagens', '71', 'Paginação Texto Selecionado', '#ffffff'),
(1324, '164340160574772', 'postagens', '67', 'Prévia', '#666666'),
(1325, '164340160574772', 'postagens', '47', 'Textos', '#000000'),
(1326, '164340160574772', 'postagens', '72', 'Titulo', '#000000'),
(1327, '164340183054360', 'blocos', '5', 'Fundo', '#ff8000'),
(1328, '164340183054360', 'blocos', '6', 'Texto', '#000000'),
(1329, '164340183054360', 'blocos', '7', 'Titulo', '#000000'),
(1330, '164340220520837', 'widgets', '58', 'Fundo', '#ffffff'),
(1331, '164340220520837', 'widgets', '59', 'Titulo', '#000000'),
(1332, '164340235264898', 'blocos', '5', 'Fundo', 'rgba(255,255,255,0)'),
(1333, '164340235264898', 'blocos', '6', 'Texto', '#ffffff'),
(1334, '164340235264898', 'blocos', '7', 'Titulo', '#ffffff'),
(1335, '164340295831867', 'blocos', '5', 'Fundo', '#ff8000'),
(1336, '164340295831867', 'blocos', '6', 'Texto', '#000000'),
(1337, '164340295831867', 'blocos', '7', 'Titulo', '#000000'),
(1338, '166076568445923', 'blocos', '5', 'Fundo', '#ff8000'),
(1339, '166076568445923', 'blocos', '6', 'Texto', '#000000'),
(1340, '166076568445923', 'blocos', '7', 'Titulo', '#000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_menu`
--

CREATE TABLE `layout_menu` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `visivel` int(11) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_menu`
--

INSERT INTO `layout_menu` (`id`, `codigo`, `topo_codigo`, `titulo`, `categoria`, `endereco`, `imagem`, `banner`, `visivel`, `icone`) VALUES
(127, '161705441877115', '160590239782504', 'INICIO', '', 'index', NULL, NULL, 0, ''),
(120, '160590255426541', '160590239782504', 'CONTATO', '', 'contato', NULL, NULL, 0, ''),
(173, '164329210330734', '160590239782504', 'O PROVEDOR', '', 'sobre', NULL, NULL, 0, ''),
(174, '164329216118940', '160590239782504', 'PLANOS', '', 'planos', NULL, NULL, 0, ''),
(175, '164329218372095', '160590239782504', 'BLOG', '', 'noticias', NULL, NULL, 0, ''),
(176, '166069607495647', '160590239782504', 'CENTRAL DO CLIENTE', '', '#', NULL, NULL, NULL, '<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>'),
(177, '166069623998387', '160590239782504', 'ASSINE JÁ', '', '#', NULL, NULL, NULL, '<i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_menu_ordem`
--

CREATE TABLE `layout_menu_ordem` (
  `id` int(11) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `id_pai` int(11) NOT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_menu_ordem`
--

INSERT INTO `layout_menu_ordem` (`id`, `topo_codigo`, `id_pai`, `data`) VALUES
(279, '160590239782504', 0, '127,173,174,177,175,120,176');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_menu_rodape`
--

CREATE TABLE `layout_menu_rodape` (
  `id` int(11) NOT NULL,
  `rodape_codigo` varchar(100) DEFAULT NULL,
  `codigo` varchar(100) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `visivel` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_menu_rodape`
--

INSERT INTO `layout_menu_rodape` (`id`, `rodape_codigo`, `codigo`, `titulo`, `endereco`, `visivel`) VALUES
(25, '161705545943312', '161705547125660', 'NOTÍCIAS', 'noticias', 0),
(26, '161705545943312', '161712987797360', 'INICIO', 'index', 0),
(28, '161705545943312', '161712998223137', 'CONTATO', 'contato', 0),
(29, '161705545943312', '161713009570809', 'SERVIÇOS', 'servicos', 0),
(30, '161705545943312', '161713011242824', 'INSTITUCIONAL', 'institucional', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_menu_rodape_ordem`
--

CREATE TABLE `layout_menu_rodape_ordem` (
  `id` int(11) NOT NULL,
  `rodape_codigo` varchar(100) DEFAULT NULL,
  `id_pai` int(11) NOT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_menu_rodape_ordem`
--

INSERT INTO `layout_menu_rodape_ordem` (`id`, `rodape_codigo`, `id_pai`, `data`) VALUES
(72, '161705545943312', 0, '26,30,29,25,28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_paginas`
--

CREATE TABLE `layout_paginas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `chave` varchar(255) DEFAULT NULL,
  `meta_titulo` varchar(255) DEFAULT NULL,
  `meta_descricao` text DEFAULT NULL,
  `bloqueio` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_paginas`
--

INSERT INTO `layout_paginas` (`id`, `codigo`, `titulo`, `chave`, `meta_titulo`, `meta_descricao`, `bloqueio`, `status`) VALUES
(80, '164339903870536', 'Sobre', 'sobre', 'Sobre - Seu Site', 'Site Pronto para Contabilidade', 0, 1),
(84, '166076580033637', 'Planos', 'planos', 'Planos - Seu Provedor', 'Descrição do Seu Site', 0, 1),
(74, '163243615935451', 'Principal', 'index', 'Site para Provedor de Interner', 'Descrição do Site', 0, 1),
(82, '164340149253198', 'Notícias', 'noticias', 'Nosso Blog | Sua empresa', 'Descrição da Pagina', 1, 1),
(83, '164340198076375', 'Contato', 'contato', 'Contato - Sua Empresa', 'Titulo da Pagina, Tags, Metas', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_rodapes`
--

CREATE TABLE `layout_rodapes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `imagem_fundo` varchar(255) DEFAULT NULL,
  `font_codigo` varchar(100) DEFAULT NULL,
  `font_family` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fone1` varchar(100) DEFAULT NULL,
  `fone2` varchar(100) DEFAULT NULL,
  `endereco1` varchar(255) DEFAULT NULL,
  `endereco2` varchar(255) DEFAULT NULL,
  `copy` text DEFAULT NULL,
  `mostrar_aviso` int(11) DEFAULT 0,
  `botao_aviso` varchar(100) DEFAULT NULL,
  `aviso_conteudo` text DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `mostrar_whats` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_rodapes`
--

INSERT INTO `layout_rodapes` (`id`, `codigo`, `titulo`, `modelo`, `imagem_fundo`, `font_codigo`, `font_family`, `email`, `fone1`, `fone2`, `endereco1`, `endereco2`, `copy`, `mostrar_aviso`, `botao_aviso`, `aviso_conteudo`, `whatsapp`, `mostrar_whats`) VALUES
(7, '161705545943312', 'Principal', '3', 'fundo-rodape-[16-08-22][22-23-21].jpg', '163285999581791', 'Exol2 Regular', 'contato@suaempresa.com.br', '(00) 0 0000-0000', '(00) 0 0000-0000', 'Rua 7 de Setembro', 'Feijó-Acre', 'Copyright © 2022. Todos os direitos reservados SUA EMPRESA é totalmente proibida a copia do conteúdo deste site sem autorização.', 1, '162334940221649', '<p>Nós usamos cookies e outras tecnologias semelhantes para melhorar a sua experiência em nossos serviços, personalizar publicidade e recomendar conteúdo de seu interesse. Ao utilizar nossos serviços, você concorda com os termos.<br></p>', '68999019270', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_rodapes_cores`
--

CREATE TABLE `layout_rodapes_cores` (
  `id` int(11) NOT NULL,
  `rodape_modelo` int(11) DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_rodapes_cores`
--

INSERT INTO `layout_rodapes_cores` (`id`, `rodape_modelo`, `titulo`, `cor`) VALUES
(1, 1, 'Copyright - texto', '#fff'),
(2, 1, 'Copyright - Fundo', '#000'),
(5, 1, 'Fundo', '#333'),
(6, 1, 'Textos', '#fff'),
(7, 2, 'Copyright - texto', '#fff'),
(8, 2, 'Copyright - Fundo', '#000'),
(9, 2, 'Fundo', '#333'),
(10, 2, 'Textos', '#fff'),
(11, 3, 'Copyright - texto', '#fff'),
(12, 3, 'Copyright - Fundo', '#000'),
(13, 3, 'Fundo', '#333'),
(14, 3, 'Textos', '#fff'),
(15, 4, 'Fundo', '#000'),
(16, 4, 'Textos', '#fff'),
(17, 4, 'Copyright', '#ccc'),
(18, 1, 'Aviso Fundo', '#000'),
(19, 2, 'Aviso Fundo', '#000'),
(20, 3, 'Aviso Fundo', '#000'),
(21, 1, 'Aviso Texto', '#fff'),
(22, 2, 'Aviso Texto', '#fff'),
(23, 3, 'Aviso Texto', '#fff'),
(24, 4, 'Aviso Texto', '#fff'),
(25, 4, 'Aviso Fundo', '#000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_rodapes_cores_sel`
--

CREATE TABLE `layout_rodapes_cores_sel` (
  `id` int(11) NOT NULL,
  `rodape_codigo` varchar(100) DEFAULT NULL,
  `rodape_modelo` int(11) DEFAULT NULL,
  `cor_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_rodapes_cores_sel`
--

INSERT INTO `layout_rodapes_cores_sel` (`id`, `rodape_codigo`, `rodape_modelo`, `cor_id`, `titulo`, `cor`) VALUES
(44, '161705545943312', 1, 2, 'Copyright - Fundo', '#000'),
(45, '161705545943312', 1, 1, 'Copyright - texto', '#fff'),
(46, '161705545943312', 1, 5, 'Fundo', '#333'),
(47, '161705545943312', 1, 6, 'Textos', '#fff'),
(48, '161705545943312', 2, 8, 'Copyright - Fundo', '#000000'),
(49, '161705545943312', 2, 7, 'Copyright - texto', '#ffffff'),
(50, '161705545943312', 2, 9, 'Fundo', '#333333'),
(51, '161705545943312', 2, 10, 'Textos', '#ffffff'),
(52, '161705545943312', 3, 12, 'Copyright - Fundo', '#1a1a1a'),
(53, '161705545943312', 3, 11, 'Copyright - texto', '#ffffff'),
(54, '161705545943312', 3, 13, 'Fundo', '#ffffff'),
(55, '161705545943312', 3, 14, 'Textos', '#ffffff'),
(64, '161705545943312', 3, 20, 'Aviso Fundo', 'rgba(0,0,0,0.9)'),
(65, '161705545943312', 3, 23, 'Aviso Texto', '#ffffff'),
(66, '161705545943312', 1, 18, 'Aviso Fundo', '#000'),
(67, '161705545943312', 1, 21, 'Aviso Texto', '#fff'),
(68, '161705545943312', 1, 26, 'Aviso botão fundo', '#fff'),
(69, '161705545943312', 1, 30, 'Aviso botão texto', '#000'),
(70, '161705545943312', 2, 19, 'Aviso Fundo', '#000000'),
(71, '161705545943312', 2, 22, 'Aviso Texto', '#ffffff'),
(72, '161705545943312', 2, 27, 'Aviso botão fundo', '#ffffff'),
(73, '161705545943312', 2, 31, 'Aviso botão texto', '#000000'),
(74, '161705545943312', 3, 28, 'Aviso botão fundo', '#ffffff'),
(75, '161705545943312', 3, 32, 'Aviso botão texto', '#000000'),
(76, '161705545943312', 4, 25, 'Aviso Fundo', '#000'),
(77, '161705545943312', 4, 24, 'Aviso Texto', '#fff'),
(78, '161705545943312', 4, 29, 'Aviso botão fundo', '#fff'),
(79, '161705545943312', 4, 33, 'Aviso botão texto', '#000'),
(80, '161705545943312', 4, 17, 'Copyright', '#ccc'),
(81, '161705545943312', 4, 15, 'Fundo', '#000'),
(82, '161705545943312', 4, 16, 'Textos', '#fff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_rodapes_modelos`
--

CREATE TABLE `layout_rodapes_modelos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_rodapes_modelos`
--

INSERT INTO `layout_rodapes_modelos` (`id`, `codigo`, `titulo`) VALUES
(6, '3', 'Principal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos`
--

CREATE TABLE `layout_topos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `busca_pagina` varchar(255) DEFAULT NULL,
  `menu_fonte` varchar(255) DEFAULT NULL,
  `menu_fonte_family` varchar(255) DEFAULT NULL,
  `menu_fonte_tam` varchar(100) DEFAULT NULL,
  `textos_fonte` varchar(255) DEFAULT NULL,
  `textos_fonte_family` varchar(255) DEFAULT NULL,
  `textos_fonte_tam` int(11) DEFAULT 12,
  `fundo` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `posicao` int(11) DEFAULT 0,
  `fone1` varchar(100) DEFAULT NULL,
  `fone2` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_topos`
--

INSERT INTO `layout_topos` (`id`, `codigo`, `titulo`, `modelo`, `busca_pagina`, `menu_fonte`, `menu_fonte_family`, `menu_fonte_tam`, `textos_fonte`, `textos_fonte_family`, `textos_fonte_tam`, `fundo`, `logo`, `posicao`, `fone1`, `fone2`, `email`) VALUES
(4, '160590239782504', 'Principal', '7', '', '163285999581791', 'Exol2 Regular', '14', '163285999581791', 'Exol2 Regular', 14, '', 'logo-fw-[16-08-22][21-26-46].png', 0, '(68) 0 0000-0000', '(68) 0 0000-0000', 'contato@seuprovedor.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_botoes`
--

CREATE TABLE `layout_topos_botoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `ativo` int(11) DEFAULT 1,
  `botao_codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_topos_botoes`
--

INSERT INTO `layout_topos_botoes` (`id`, `codigo`, `topo_codigo`, `titulo`, `endereco`, `ativo`, `botao_codigo`) VALUES
(28, '161992299395870', '161991373733857', 'fale conosco', 'faleconosco', 1, '161992439636173'),
(29, '161992300055836', '161991373733857', 'quero meu site', '', 1, '161992439636173');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_botoes_ordem`
--

CREATE TABLE `layout_topos_botoes_ordem` (
  `id` int(11) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_topos_botoes_ordem`
--

INSERT INTO `layout_topos_botoes_ordem` (`id`, `topo_codigo`, `data`) VALUES
(65, '161991373733857', '28,29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_cores`
--

CREATE TABLE `layout_topos_cores` (
  `id` int(11) NOT NULL,
  `topo_modelo` int(11) DEFAULT NULL,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_topos_cores`
--

INSERT INTO `layout_topos_cores` (`id`, `topo_modelo`, `titulo`, `cor`) VALUES
(99, 2, 'Faixa contatos - fundo', '#000000'),
(98, 2, 'Faixa contatos - texto', '#ffffff'),
(62, 1, 'Menu - Sub - Links', '#000000'),
(61, 1, 'Menu - Sub - Fundo', '#ffffff'),
(76, 1, 'Fundo', '#ffffff'),
(77, 1, 'Busca bordas', '#cccccc'),
(78, 1, 'Busca Texto', '#000000'),
(56, 1, 'Menu texto', '#ffffff'),
(54, 1, 'Menu fundo', '#0189ff'),
(85, 1, 'Faixa contatos - fundo', '#000000'),
(86, 1, 'Faixa contatos - texto', '#ffffff'),
(97, 2, 'Busca fundo', '#ffffff'),
(96, 2, 'Busca bordas', '#cccccc'),
(87, 1, 'Busca fundo', '#ffffff'),
(88, 1, 'Textos', '#666666'),
(89, 1, 'Icones', '#0189ff'),
(90, 1, 'Menu - Sub - Titulo', '#666666'),
(95, 2, 'Busca Texto', '#000000'),
(91, 1, 'Menu - Sub - Marcas - Fundo', '#dddddd'),
(92, 1, 'Menu - Sub - Marcas - Texto', '#000000'),
(93, 1, 'Menu - Selecionado', '#999999'),
(94, 1, 'Menu - Sub - Fundo - Bordas', '#dddddd'),
(100, 2, 'Fundo', '#ffffff'),
(101, 2, 'Icones', '#0189ff'),
(102, 2, 'Menu - Selecionado', '#999999'),
(103, 2, 'Menu - Sub - Fundo', '#ffffff'),
(104, 2, 'Menu - Sub - Fundo - Bordas', '#dddddd'),
(105, 2, 'Menu - Sub - Links', '#000000'),
(106, 2, 'Menu - Sub - Marcas - Fundo', '#dddddd'),
(107, 2, 'Menu - Sub - Marcas - Texto', '#000000'),
(108, 2, 'Menu - Sub - Titulo', '#666666'),
(109, 2, 'Menu fundo', '#0189ff'),
(110, 2, 'Menu texto', '#ffffff'),
(111, 2, 'Textos', '#000000'),
(112, 3, 'Fundo', '#ffffff'),
(113, 3, 'Logo - Fundo', '#eeeeee'),
(114, 3, 'Menu - Bt Inicial - Ico', '#ffffff'),
(115, 3, 'Menu - Bt Inicial - Fundo', '#0189ff'),
(116, 3, 'Menu - Bt Inicial - borda', '#ffffff'),
(117, 3, 'Menu - Fundo', '#0189ff'),
(118, 3, 'Menu - Borda', '#ffffff'),
(119, 3, 'Menu - Texto', '#ffffff'),
(267, 8, 'Textos', '#fff'),
(122, 3, 'Textos', '#333333'),
(123, 3, 'Menu - Sub - Fundo', '#ffffff'),
(124, 3, 'Menu - Sub - Texto', '#666666'),
(125, 3, 'Menu - Sub - Selecionado - Texto', '#ffffff'),
(126, 3, 'Menu - Sub - Selecionado - Fund', '#542121'),
(127, 3, 'Menu - Selecionado', '#cccccc'),
(128, 3, 'Menu Responsivo - Fundo', 'rgba(10,0,0,0.71)'),
(129, 3, 'Menu Responsivo - Links', '#ffffff'),
(130, 4, 'Fundo', '#f2f2f2'),
(131, 4, 'Icones', '#0189ff'),
(132, 4, 'Textos', '#000000'),
(133, 4, 'Linha', '#cccccc'),
(134, 4, 'Menu - Fundo', 'rgba(255,255,255,0)'),
(135, 4, 'Menu - Texto', '#000000'),
(136, 4, 'Menu - Selecionado - Fundo', '#000000'),
(137, 4, 'Menu - Selecionado - Tex', '#ffffff'),
(138, 4, 'Menu - Sub - Fundo', '#ffffff'),
(139, 4, 'Menu - Sub - Texto', '#000000'),
(140, 4, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.83)'),
(141, 4, 'Menu - Responsivo - Texto', '#ffffff'),
(142, 5, 'Fundo', '#dddddd'),
(143, 5, 'Faixa Superior - Fundo', '#333333'),
(144, 5, 'Faixa Superior - Texto', '#ffffff'),
(145, 5, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(146, 5, 'Menu - Texto', '#000000'),
(147, 5, 'Linha', '#000000'),
(148, 5, 'Menu - Fundo', '#0189ff'),
(157, 5, 'Fundo', '#ffffff'),
(150, 5, 'Menu - Selecionado - Fundo', '#000000'),
(151, 5, 'Menu - Selecionado - Texto', '#ffffff'),
(152, 5, 'Menu - Sub - Fundo', '#ffffff'),
(153, 5, 'Menu - Sub - Texto', '#000000'),
(154, 5, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.46)'),
(155, 5, 'Menu - Responsivo - Texto', '#ffffff'),
(156, 5, 'Menu - Responsivo - Ico', '#000000'),
(158, 6, 'Textos', '#999999'),
(159, 6, 'Menu - Barra', '#000000'),
(160, 6, 'Menu - Texto', '#ffffff'),
(161, 6, 'Icos', '#666666'),
(162, 6, 'Busca - Borda', '#d1bdbd'),
(163, 6, 'Busca - Texto', '#cca2a2'),
(164, 6, 'Busca - Fundo', '#ffffff'),
(165, 6, 'Icos - Bordas', '#cccccc'),
(166, 6, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.56)'),
(167, 6, 'Menu - Responsivo - Texto', '#ffffff'),
(168, 6, 'Menu - Selecionado - Texto', '#b54949'),
(169, 6, 'Menu - Sub - Fundo', '#ffffff'),
(170, 6, 'Menu - Sub - Texto', '#000000'),
(171, 6, 'Menu - Responsivo - Ico', '#ffffff'),
(255, 8, 'Fundo descendo', '#000'),
(256, 9, 'Fundo descendo', '#666'),
(254, 7, 'Fundo descendo', '#333'),
(253, 6, 'Fundo descendo a pagina', '#000'),
(251, 11, 'Textos', '#000'),
(252, 6, 'Fundo', '#333'),
(182, 6, 'Menu - Selecionado - Fundo', '#000000'),
(183, 7, 'Fundo', '#282828'),
(184, 7, 'Menu - Texto', '#ffffff'),
(185, 7, 'Menu - Selecionado - Fundo', '#000000'),
(186, 7, 'Menu - Selecionado - Texto', '#cccccc'),
(187, 7, 'Menu - Sub - Fundo', '#ffffff'),
(188, 7, 'Menu - Sub - Texto', '#000000'),
(189, 7, 'Menu - Responsivo - Fundo', '#000000'),
(190, 7, 'Menu - Responsivo - Texto', '#ffffff'),
(191, 8, 'Fundo', '#ffffff'),
(192, 8, 'Faixa Superior - Fundo', '#333333'),
(193, 8, 'Faixa Superior - Texto', '#ffffff'),
(194, 8, 'Menu - Texto', '#000000'),
(195, 8, 'Menu - Sub - Fundo', '#ffffff'),
(196, 8, 'Menu - Sub - Texto', '#000000'),
(197, 8, 'Menu - Fundo', 'rgba(255,255,255,0)'),
(198, 8, 'Menu - Selecionado - Fundo', 'rgba(255,255,255,0)'),
(199, 8, 'Menu - Selecionado - Bord', '#7a3535'),
(200, 8, 'Menu - Selecionado - Texto', '#000000'),
(201, 8, 'Menu Responsivo - Fundo', '#000000'),
(202, 8, 'Menu Responsivo - Texto', '#ffffff'),
(203, 9, 'Fundo', '#27183b'),
(204, 9, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(205, 9, 'Menu - Texto', '#ffffff'),
(206, 9, 'Menu - Selecionado - Fundo', 'rgba(0,0,0,0)'),
(207, 9, 'Menu - Selecionado - Texto', '#cccccc'),
(208, 9, 'Menu - Selecionado - Borda', '#ffffff'),
(209, 9, 'Menu - Sub - Fundo', '#ffffff'),
(210, 9, 'Menu - Sub - Texto', '#000000'),
(211, 9, 'Menu - Responsivo - Fundo', '#000000'),
(212, 9, 'Menu - Responsivo - Texto', '#ffffff'),
(213, 10, 'Fundo', 'rgba(0,0,0,0.24)'),
(214, 10, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(215, 10, 'Menu - Responsivo - Fundo', '#000000'),
(218, 10, 'Menu - Selecionado - Fundo', 'rgba(0,0,0,0.65)'),
(219, 10, 'Menu - Selecionado - Texto', '#ffffff'),
(220, 10, 'Menu - Sub - Fundo', 'rgba(0,0,0,0.51)'),
(221, 10, 'Menu - Sub - Texto', '#ffffff'),
(222, 10, 'Menu - Texto', '#ffffff'),
(223, 10, 'Menu - Responsivo - Texto', '#ffffff'),
(224, 10, 'Fundo ao decer', 'rgba(0,0,0,0.85)'),
(225, 10, 'Fundo - Responsivo', '#000000'),
(248, 11, 'Menu Responsivo Texto', '#fff'),
(250, 5, 'Borda Menu', '#ccc'),
(249, 11, 'Menu Responsivo Fundo', '#999'),
(247, 11, 'Menu Responsivo Ico', '#000'),
(246, 11, 'Sub-menu Fundo', '#fff'),
(244, 11, 'Menu Selecionado Fundo', '#ccc'),
(245, 11, 'Menu Selecionado Texto', '#000'),
(243, 11, 'Busca Fundo', '#fff'),
(242, 11, 'Busca Texto', '#999'),
(241, 11, 'Borda Busca', '#eee'),
(237, 11, 'Fundo', '#fff'),
(238, 11, 'Fundo Menu', '#333'),
(239, 11, 'Menu Texto', '#fff'),
(240, 11, 'Sub-menu Texto', '#fff'),
(257, 12, 'Fundo', '#fff'),
(258, 12, 'Fundo Menu', '#012325'),
(259, 12, 'Menu Texto', '#fff'),
(260, 12, 'Textos', '#000'),
(261, 12, 'Icones', '#666'),
(262, 12, 'Menu Texto Selecionado', '#000'),
(263, 12, 'Menu Responsivo Texto', '#fff'),
(264, 12, 'Menu Responsivo Texto Selecionado', '#fff'),
(265, 12, 'Menu Responsivo Fundo', '#000'),
(266, 12, 'Responsivo Icone Menu', '#000'),
(268, 7, 'Faixa superior - fundo', '#f2f2f2'),
(269, 7, 'Faixa superior - texto', '#000'),
(300, 13, 'Fundo descendo', '#333'),
(301, 13, 'Fundo', '#282828'),
(302, 13, 'Menu - Texto', '#ffffff'),
(303, 13, 'Menu - Selecionado - Fundo', '#000000'),
(304, 13, 'Menu - Selecionado - Texto', '#cccccc'),
(305, 13, 'Menu - Sub - Fundo', '#ffffff'),
(306, 13, 'Menu - Sub - Texto', '#000000'),
(307, 13, 'Menu - Responsivo - Fundo', '#000000'),
(308, 13, 'Menu - Responsivo - Texto', '#ffffff'),
(309, 13, 'Faixa superior - fundo', '#f2f2f2'),
(310, 13, 'Faixa superior - texto', '#000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_cores_sel`
--

CREATE TABLE `layout_topos_cores_sel` (
  `id` int(11) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `topo_modelo` int(11) DEFAULT NULL,
  `cor_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `cor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_topos_cores_sel`
--

INSERT INTO `layout_topos_cores_sel` (`id`, `topo_codigo`, `topo_modelo`, `cor_id`, `titulo`, `cor`) VALUES
(321, '160590239782504', 1, 78, 'Busca Texto', '#000000'),
(322, '160590239782504', 1, 77, 'Busca bordas', '#cccccc'),
(323, '160590239782504', 1, 87, 'Busca fundo', '#ffffff'),
(324, '160590239782504', 1, 85, 'Faixa contatos - fundo', '#000000'),
(325, '160590239782504', 1, 86, 'Faixa contatos - texto', '#ffffff'),
(326, '160590239782504', 1, 76, 'Fundo', 'rgba(0,0,0,0.29)'),
(327, '160590239782504', 1, 89, 'Icones', '#0189ff'),
(328, '160590239782504', 1, 93, 'Menu - Selecionado', '#999999'),
(329, '160590239782504', 1, 61, 'Menu - Sub - Fundo', '#ffffff'),
(330, '160590239782504', 1, 94, 'Menu - Sub - Fundo - Bordas', '#dddddd'),
(331, '160590239782504', 1, 62, 'Menu - Sub - Links', '#000000'),
(332, '160590239782504', 1, 91, 'Menu - Sub - Marcas - Fundo', '#dddddd'),
(333, '160590239782504', 1, 92, 'Menu - Sub - Marcas - Texto', '#000000'),
(334, '160590239782504', 1, 90, 'Menu - Sub - Titulo', '#666666'),
(335, '160590239782504', 1, 54, 'Menu fundo', '#0189ff'),
(336, '160590239782504', 1, 56, 'Menu texto', '#ffffff'),
(337, '160590239782504', 1, 88, 'Textos', '#ffffff'),
(338, '160590239782504', 2, 95, 'Busca Texto', '#000000'),
(339, '160590239782504', 2, 96, 'Busca bordas', '#cccccc'),
(340, '160590239782504', 2, 97, 'Busca fundo', '#ffffff'),
(341, '160590239782504', 2, 99, 'Faixa contatos - fundo', 'rgba(0,0,0,0.55)'),
(342, '160590239782504', 2, 98, 'Faixa contatos - texto', '#ffffff'),
(343, '160590239782504', 2, 100, 'Fundo', 'rgba(255,255,255,0.39)'),
(344, '160590239782504', 2, 101, 'Icones', '#0189ff'),
(345, '160590239782504', 2, 102, 'Menu - Selecionado', '#999999'),
(346, '160590239782504', 2, 103, 'Menu - Sub - Fundo', '#ffffff'),
(347, '160590239782504', 2, 104, 'Menu - Sub - Fundo - Bordas', '#dddddd'),
(348, '160590239782504', 2, 105, 'Menu - Sub - Links', '#000000'),
(349, '160590239782504', 2, 106, 'Menu - Sub - Marcas - Fundo', '#dddddd'),
(350, '160590239782504', 2, 107, 'Menu - Sub - Marcas - Texto', '#000000'),
(351, '160590239782504', 2, 108, 'Menu - Sub - Titulo', '#666666'),
(352, '160590239782504', 2, 109, 'Menu fundo', '#0189ff'),
(353, '160590239782504', 2, 110, 'Menu texto', '#ffffff'),
(354, '160590239782504', 2, 111, 'Textos', '#000000'),
(355, '160590239782504', 3, 112, 'Fundo', 'rgba(0,0,0,0.36)'),
(358, '160590239782504', 3, 113, 'Logo - Fundo', 'rgba(0,0,0,0.58)'),
(359, '160590239782504', 3, 118, 'Menu - Borda', '#ffffff'),
(360, '160590239782504', 3, 115, 'Menu - Bt Inicial - Fundo', '#0189ff'),
(361, '160590239782504', 3, 114, 'Menu - Bt Inicial - Ico', '#ffffff'),
(362, '160590239782504', 3, 116, 'Menu - Bt Inicial - borda', '#ffffff'),
(363, '160590239782504', 3, 117, 'Menu - Fundo', '#0189ff'),
(364, '160590239782504', 3, 127, 'Menu - Selecionado', '#cccccc'),
(365, '160590239782504', 3, 123, 'Menu - Sub - Fundo', '#ffffff'),
(366, '160590239782504', 3, 126, 'Menu - Sub - Selecionado - Fund', '#542121'),
(367, '160590239782504', 3, 125, 'Menu - Sub - Selecionado - Texto', '#ffffff'),
(368, '160590239782504', 3, 124, 'Menu - Sub - Texto', '#666666'),
(369, '160590239782504', 3, 119, 'Menu - Texto', '#ffffff'),
(370, '160590239782504', 3, 128, 'Menu Responsivo - Fundo', 'rgba(10,0,0,0.71)'),
(371, '160590239782504', 3, 129, 'Menu Responsivo - Links', '#ffffff'),
(372, '160590239782504', 3, 122, 'Textos', '#ffffff'),
(373, '160590239782504', 5, 250, 'Borda Menu', '#cccccc'),
(374, '160590239782504', 5, 143, 'Faixa Superior - Fundo', '#333333'),
(375, '160590239782504', 5, 144, 'Faixa Superior - Texto', '#ffffff'),
(376, '160590239782504', 5, 142, 'Fundo', 'rgba(0,0,0,0.46)'),
(377, '160590239782504', 5, 157, 'Fundo', '#000000'),
(378, '160590239782504', 5, 147, 'Linha', '#000000'),
(379, '160590239782504', 5, 145, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(380, '160590239782504', 5, 148, 'Menu - Fundo', '#0189ff'),
(381, '160590239782504', 5, 154, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.46)'),
(382, '160590239782504', 5, 156, 'Menu - Responsivo - Ico', '#ffffff'),
(383, '160590239782504', 5, 155, 'Menu - Responsivo - Texto', '#ffffff'),
(384, '160590239782504', 5, 150, 'Menu - Selecionado - Fundo', '#000000'),
(385, '160590239782504', 5, 151, 'Menu - Selecionado - Texto', '#ffffff'),
(386, '160590239782504', 5, 152, 'Menu - Sub - Fundo', '#ffffff'),
(387, '160590239782504', 5, 153, 'Menu - Sub - Texto', '#000000'),
(388, '160590239782504', 5, 146, 'Menu - Texto', '#ffffff'),
(389, '160590239782504', 6, 162, 'Busca - Borda', '#d1bdbd'),
(390, '160590239782504', 6, 164, 'Busca - Fundo', '#ffffff'),
(391, '160590239782504', 6, 163, 'Busca - Texto', '#cca2a2'),
(392, '160590239782504', 6, 252, 'Fundo', 'rgba(0,0,0,0.61)'),
(393, '160590239782504', 6, 253, 'Fundo descendo a pagina', '#000000'),
(394, '160590239782504', 6, 161, 'Icos', '#ffffff'),
(395, '160590239782504', 6, 165, 'Icos - Bordas', '#cccccc'),
(396, '160590239782504', 6, 159, 'Menu - Barra', '#000000'),
(397, '160590239782504', 6, 166, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.56)'),
(398, '160590239782504', 6, 171, 'Menu - Responsivo - Ico', '#ffffff'),
(399, '160590239782504', 6, 167, 'Menu - Responsivo - Texto', '#ffffff'),
(400, '160590239782504', 6, 182, 'Menu - Selecionado - Fundo', '#000000'),
(401, '160590239782504', 6, 168, 'Menu - Selecionado - Texto', '#b54949'),
(402, '160590239782504', 6, 169, 'Menu - Sub - Fundo', '#ffffff'),
(403, '160590239782504', 6, 170, 'Menu - Sub - Texto', '#000000'),
(404, '160590239782504', 6, 160, 'Menu - Texto', '#ffffff'),
(405, '160590239782504', 6, 158, 'Textos', '#ffffff'),
(406, '160590239782504', 7, 183, 'Fundo', 'rgba(255,255,255,0.56)'),
(407, '160590239782504', 7, 254, 'Fundo descendo', '#ffffff'),
(408, '160590239782504', 7, 189, 'Menu - Responsivo - Fundo', '#ff8000'),
(409, '160590239782504', 7, 190, 'Menu - Responsivo - Texto', '#3b3b3b'),
(410, '160590239782504', 7, 185, 'Menu - Selecionado - Fundo', '#ff8000'),
(411, '160590239782504', 7, 186, 'Menu - Selecionado - Texto', '#ffffff'),
(412, '160590239782504', 7, 187, 'Menu - Sub - Fundo', '#ff8000'),
(413, '160590239782504', 7, 188, 'Menu - Sub - Texto', '#ffffff'),
(414, '160590239782504', 7, 184, 'Menu - Texto', '#2c2c2c'),
(415, '160590239782504', 8, 192, 'Faixa Superior - Fundo', '#cd1b3c'),
(416, '160590239782504', 8, 193, 'Faixa Superior - Texto', '#ffffff'),
(417, '160590239782504', 8, 191, 'Fundo', 'rgba(255,255,255,0.37)'),
(418, '160590239782504', 8, 255, 'Fundo descendo', '#ffffff'),
(419, '160590239782504', 8, 197, 'Menu - Fundo', 'rgba(255,255,255,0)'),
(420, '160590239782504', 8, 199, 'Menu - Selecionado - Bord', '#ffffff'),
(421, '160590239782504', 8, 198, 'Menu - Selecionado - Fundo', 'rgba(255,255,255,0)'),
(422, '160590239782504', 8, 200, 'Menu - Selecionado - Texto', '#ffffff'),
(423, '160590239782504', 8, 195, 'Menu - Sub - Fundo', '#ffffff'),
(424, '160590239782504', 8, 196, 'Menu - Sub - Texto', '#ffffff'),
(425, '160590239782504', 8, 194, 'Menu - Texto', '#ffffff'),
(426, '160590239782504', 8, 201, 'Menu Responsivo - Fundo', '#000000'),
(427, '160590239782504', 8, 202, 'Menu Responsivo - Texto', '#ffffff'),
(428, '160590239782504', 9, 203, 'Fundo', 'rgba(255,255,255,0.31)'),
(429, '160590239782504', 9, 256, 'Fundo descendo', '#ffffff'),
(430, '160590239782504', 9, 204, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(431, '160590239782504', 9, 211, 'Menu - Responsivo - Fundo', '#ffffff'),
(432, '160590239782504', 9, 212, 'Menu - Responsivo - Texto', '#cd1b3c'),
(433, '160590239782504', 9, 208, 'Menu - Selecionado - Borda', '#cd1b3c'),
(434, '160590239782504', 9, 206, 'Menu - Selecionado - Fundo', 'rgba(0,0,0,0)'),
(435, '160590239782504', 9, 207, 'Menu - Selecionado - Texto', '#cd1b3c'),
(436, '160590239782504', 9, 209, 'Menu - Sub - Fundo', '#ffffff'),
(437, '160590239782504', 9, 210, 'Menu - Sub - Texto', '#000000'),
(438, '160590239782504', 9, 205, 'Menu - Texto', '#1a1a1a'),
(439, '160590239782504', 10, 213, 'Fundo', 'rgba(0,0,0,0.24)'),
(440, '160590239782504', 10, 225, 'Fundo - Responsivo', '#000000'),
(441, '160590239782504', 10, 224, 'Fundo ao decer', 'rgba(0,0,0,0.85)'),
(442, '160590239782504', 10, 214, 'Menu - Fundo', 'rgba(0,0,0,0)'),
(443, '160590239782504', 10, 215, 'Menu - Responsivo - Fundo', '#000000'),
(444, '160590239782504', 10, 223, 'Menu - Responsivo - Texto', '#ffffff'),
(445, '160590239782504', 10, 218, 'Menu - Selecionado - Fundo', 'rgba(0,0,0,0.65)'),
(446, '160590239782504', 10, 219, 'Menu - Selecionado - Texto', '#ffffff'),
(447, '160590239782504', 10, 220, 'Menu - Sub - Fundo', 'rgba(0,0,0,0.51)'),
(448, '160590239782504', 10, 221, 'Menu - Sub - Texto', '#ffffff'),
(449, '160590239782504', 10, 222, 'Menu - Texto', '#ffffff'),
(450, '160590239782504', 11, 241, 'Borda Busca', '#eeeeee'),
(451, '160590239782504', 11, 243, 'Busca Fundo', '#ffffff'),
(452, '160590239782504', 11, 242, 'Busca Texto', '#999999'),
(453, '160590239782504', 11, 237, 'Fundo', 'rgba(0,0,0,0.63)'),
(454, '160590239782504', 11, 238, 'Fundo Menu', '#333333'),
(455, '160590239782504', 11, 249, 'Menu Responsivo Fundo', '#999999'),
(456, '160590239782504', 11, 247, 'Menu Responsivo Ico', '#000000'),
(457, '160590239782504', 11, 248, 'Menu Responsivo Texto', '#ffffff'),
(458, '160590239782504', 11, 244, 'Menu Selecionado Fundo', '#cccccc'),
(459, '160590239782504', 11, 245, 'Menu Selecionado Texto', '#000000'),
(460, '160590239782504', 11, 239, 'Menu Texto', '#ffffff'),
(461, '160590239782504', 11, 246, 'Sub-menu Fundo', '#ffffff'),
(462, '160590239782504', 11, 240, 'Sub-menu Texto', '#ffffff'),
(463, '160590239782504', 11, 251, 'Textos', '#ffffff'),
(464, '160590239782504', 12, 257, 'Fundo', 'rgba(0,0,0,0.56)'),
(465, '160590239782504', 12, 258, 'Fundo Menu', '#012325'),
(466, '160590239782504', 12, 259, 'Menu Texto', '#ffffff'),
(467, '160590239782504', 12, 260, 'Textos', '#ffffff'),
(468, '160590239782504', 12, 261, 'Icones', '#0091f8'),
(469, '160590239782504', 12, 262, 'Menu Texto Selecionado', '#0091f8'),
(470, '160590239782504', 12, 263, 'Menu Responsivo Texto', '#ffffff'),
(471, '160590239782504', 12, 264, 'Menu Responsivo Texto Selecionado', '#ffffff'),
(472, '160590239782504', 12, 265, 'Menu Responsivo Fundo', '#000000'),
(473, '160590239782504', 12, 266, 'Responsivo Icone Menu', '#000000'),
(474, '160590239782504', 4, 130, 'Fundo', 'rgba(0,0,0,0.29)'),
(475, '160590239782504', 4, 131, 'Icones', '#ffffff'),
(476, '160590239782504', 4, 133, 'Linha', '#cccccc'),
(477, '160590239782504', 4, 134, 'Menu - Fundo', 'rgba(255,255,255,0)'),
(478, '160590239782504', 4, 140, 'Menu - Responsivo - Fundo', 'rgba(0,0,0,0.83)'),
(479, '160590239782504', 4, 141, 'Menu - Responsivo - Texto', '#ffffff'),
(480, '160590239782504', 4, 136, 'Menu - Selecionado - Fundo', '#000000'),
(481, '160590239782504', 4, 137, 'Menu - Selecionado - Tex', '#ffffff'),
(482, '160590239782504', 4, 138, 'Menu - Sub - Fundo', '#ffffff'),
(483, '160590239782504', 4, 139, 'Menu - Sub - Texto', '#000000'),
(484, '160590239782504', 4, 135, 'Menu - Texto', '#ffffff'),
(485, '160590239782504', 4, 132, 'Textos', '#ffffff'),
(520, '160590239782504', 8, 267, 'Textos', '#ffffff'),
(902, '160590239782504', 13, 309, 'Faixa superior - fundo', '#f2f2f2'),
(903, '160590239782504', 13, 310, 'Faixa superior - texto', '#000'),
(904, '160590239782504', 13, 301, 'Fundo', '#282828'),
(905, '160590239782504', 13, 300, 'Fundo descendo', '#333'),
(906, '160590239782504', 13, 307, 'Menu - Responsivo - Fundo', '#000000'),
(907, '160590239782504', 13, 308, 'Menu - Responsivo - Texto', '#ffffff'),
(908, '160590239782504', 13, 303, 'Menu - Selecionado - Fundo', '#000000'),
(909, '160590239782504', 13, 304, 'Menu - Selecionado - Texto', '#cccccc'),
(910, '160590239782504', 13, 305, 'Menu - Sub - Fundo', '#ffffff'),
(911, '160590239782504', 13, 306, 'Menu - Sub - Texto', '#000000'),
(912, '160590239782504', 13, 302, 'Menu - Texto', '#ffffff'),
(913, '160590239782504', 7, 268, 'Faixa superior - fundo', '#ff8000'),
(914, '160590239782504', 7, 269, 'Faixa superior - texto', '#ffffff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_icones`
--

CREATE TABLE `layout_topos_icones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `ativo` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_topos_icones`
--

INSERT INTO `layout_topos_icones` (`id`, `codigo`, `topo_codigo`, `titulo`, `endereco`, `icone`, `ativo`) VALUES
(1, '160987483663215', '160590239782504', 'teste 2222222', 'index/minhaconta2', '<i class=\'fab fa-accessible-icon\'></i>', 1),
(20, '161990574644878', '161990399855993', 'Whatsapp', '#', '<i class=\"fab fa-whatsapp\"></i>', 1),
(21, '161990578850160', '161990399855993', 'INstagram', '#', '<i class=\"fab fa-instagram\"></i>', 1),
(22, '161990580248575', '161990399855993', 'Facebook', '#', '<i class=\"fab fa-facebook-square\"></i>', 1),
(23, '161990582461853', '161990399855993', 'Fone', 'tel:11111111111', '<i class=\"fas fa-phone\"></i>', 1),
(24, '161991002482555', '161990956612589', 'Whatsapp', '#', '<i class=\"fab fa-whatsapp\"></i>', 1),
(25, '161991003461638', '161990956612589', 'Instagram', '#', '<i class=\"fab fa-instagram\"></i>', 1),
(26, '161991005536026', '161990956612589', 'Facebook', '#', '<i class=\"fab fa-facebook-square\"></i>', 1),
(32, '163658152849476', '163658063445717', 'Nosso Estoque', 'estoque', '<i class=\"fa fa-car\" aria-hidden=\"true\"></i>', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_icones_ordem`
--

CREATE TABLE `layout_topos_icones_ordem` (
  `id` int(11) NOT NULL,
  `topo_codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `layout_topos_icones_ordem`
--

INSERT INTO `layout_topos_icones_ordem` (`id`, `topo_codigo`, `data`) VALUES
(52, '161990399855993', '23,22,21,20'),
(56, '161990956612589', '24,26,25'),
(64, '163658063445717', '32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `layout_topos_modelos`
--

CREATE TABLE `layout_topos_modelos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `layout_topos_modelos`
--

INSERT INTO `layout_topos_modelos` (`id`, `codigo`, `titulo`) VALUES
(7, '7', 'Principal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcadagua`
--

CREATE TABLE `marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `preencher` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `marcas`
--

INSERT INTO `marcas` (`id`, `codigo`, `titulo`, `imagem`) VALUES
(84, '163293392491232', 'M2 Sites', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `autor` varchar(240) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `amigavel` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`id`, `codigo`, `categoria`, `data`, `titulo`, `autor`, `previa`, `conteudo`, `amigavel`) VALUES
(33, '166075760641946', '164338461956985', 1660757520, 'Como escolher um roteador? Veja seis dicas para comprar o modelo ideal', '160641192045582', 'Saiba o que considerar em um novo modelo para escolher a opção certa', '<div class=\"mc-column content-text active-extra-styles active-capital-letter\" data-block-type=\"unstyled\" data-block-weight=\"76\" data-block-id=\"1\"> <p class=\"content-text__container theme-color-primary-first-letter\" data-track-category=\"Link no Texto\" data-track-links=\"\"> Ter um bom roteador Wi-Fi é bastante importante para aproveitar a Internet na sua casa. Marcas como <a href=\"https://www.techtudo.com.br/tudo-sobre/tp-link.html\">TP-Link</a>, <a href=\"https://www.techtudo.com.br/tudo-sobre/d-link.html\">D-Link</a>, <a href=\"http://www.techtudo.com.br/tudo-sobre/multilaser.html\">Multilaser</a> e <a href=\"https://www.techtudo.com.br/tudo-sobre/intelbras.html\">Intelbras</a>,\r\n entre outras, oferecem diferentes tipos de produtos, que podem ser \r\nideais dependendo de como serão utilizados. Entre as opções de roteador \r\nno Brasil estão modelos de menor velocidade, mas suficientes para \r\nespaços menores, dispositivos com muitas antenas, interessantes em casas\r\n com muitas pessoas e até tops de linha com <a href=\"https://www.techtudo.com.br/noticias/2019/09/wi-fi-6-agora-e-oficial-veja-detalhes-do-novo-padrao-de-rede-sem-fio.ghtml\">Wi-Fi 6</a> ou <a href=\"https://www.techtudo.com.br/noticias/2020/05/roteador-mesh-vale-a-pena-veja-pros-e-contras-da-tecnologia-wi-fi.ghtml\">rede Mesh</a>. </p> </div>  <div class=\"mc-column content-text active-extra-styles \" data-block-type=\"unstyled\" data-block-weight=\"38\" data-block-id=\"2\"> <p class=\"content-text__container \" data-track-category=\"Link no Texto\" data-track-links=\"\"> E, na hora de comprar, é importante considerar suas especificações e entender o que combina mais com a sua Internet. O <strong>TechTudo</strong> separou a seguir seis dicas para ajudar você a escolher o roteador ideal para sua casa. </p></div><p></p>', 'como-escolher-um-roteador-veja-seis-dicas-para-comprar-modelo-ideal'),
(31, '166075729910217', '164338461956985', 1660757220, 'Principais problemas geradores de sinal de internet baixo em alguns cômodos.', '160641192045582', 'É  uma das principais causas de problemas de conectividade para os usuários de WI-FI. Os motivos são: roteador danificado, instalado de forma incorreta ou até mesmo com softwares desatualizados.', '<p><strong>- PROBLEMA NO ROTEADOR</strong></p>\r\n\r\n<p>É&nbsp; uma das principais causas de problemas de conectividade para os \r\nusuários de WI-FI. Os motivos são: roteador danificado, instalado de \r\nforma incorreta ou até mesmo com softwares desatualizados.</p>\r\n\r\n<p>O primeiro passo é verificar se seu roteador está conectado \r\ncorretamente, verifique se todos os cabos estão colocados e todas as \r\nluzes do aparelho estão ligadas ou piscando, caso contrário reset o \r\naparelho e espere em torno de 10 segundos para ligar novamente.</p>\r\n\r\n<p>Se você estar seguro que sua internet está funcionando e mesmo assim \r\ncontinuar lenta em alguns pontos da sua casa. O problema pode estar \r\nsendo ocasionado pelo posicionamento do roteador.&nbsp; Verifique se seu \r\nroteador estar posicionado na região central da sua casa, afastado de \r\naparelhos que possa ocasionar interferência no sinal.</p>\r\n\r\n<p>Caso isso não resolva a situação e você estar ciente que a velocidade\r\n da internet contratada é boa e não existe problemas com computadores, \r\ncelulares, tablets e outros hardwares. O motivo pode estar sendo \r\nocasionado por uma dificuldade de o sinal estar chegando em todos pontos\r\n da casa.</p>\r\n\r\n<p>Nesse caso, o essencial é trocar o roteador por outro com uma \r\nfrequência mais potente, ou utilizar um roteador secundário que passar \r\nrepetir o sinal.<br>&nbsp; <br><strong>OBSTÁCULOS FÍSICOS</strong></p>\r\n\r\n<p>Outro ponto importante a se considerar no posicionamento do roteador,\r\n é levar em consideração que janelas, paredes, portas, móveis podem \r\nprejudicar na qualidade do sinal em alguns cômodos, pois as ondas \r\neletromagnéticas possuem enfraquecimento a se propagar em ambientes com \r\nmuitos materiais físicos.</p>\r\n\r\n<p>O vidro pode ser também um grande vilão da propagação do sinal \r\nwireless devido ao alto índice de refração. Entretanto deve se evitar \r\ntranspor o sinal por barreiras de vidraça, portas e janelas de vidro. \r\nOcasionando uma a frequência de propagação mais lenta.</p>\r\n\r\n<p>No entanto, se for planejar sua casa ou até mesmo um escritório leve \r\nem consideração o material utilizado na construção, pois irá fazer total\r\n diferença na propagação do sinal de internet.</p>\r\n\r\n<p>Uma dica para amenizar essa situação é afastar o dispositivo de \r\nWi-fi, o mais longe possível para que as ondas se propagam de forma mais\r\n livre sobre o ambiente, alguns roteadores possuem antenas e vale apenas\r\n troca o seu posicionamento para minimizar a interferência. <br></p><p></p>', 'principais-problemas-geradores-de-sinal-de-internet-baixo-em-alguns-comodos'),
(32, '166075749338863', '164338461956985', 1660757460, '5 dicas para navegar na internet com mais segurança', '160641192045582', 'Com estas simples sugestões, você aumentará consideravelmente a sua segurança digital', '<p>Com a rápida popularização da internet, incontáveis pessoas em todo o\r\n mundo precisam desta ferramenta para cumprir suas tarefas diárias - \r\nsejam pessoais ou profissionais. Pensando nisso, a <strong>Compaq </strong>separou 5 dicas básicas, que podem ser seguidas por aqueles que precisam se conectar na rede mundial de computadores.</p>\r\n<p>Para oferecer um conteúdo diferenciado <strong>para o leitor do Mundo Conectado</strong>, usarei as 5 dicas da <strong>Compaq</strong>,\r\n mas com observações alternativas. E, claro, quem quiser ler exatamente \r\ndo jeito que a empresa distribuiu, sinta-se livre para ler <a href=\"https://www.acidadeon.com/game-on/NOT,0,0,1722075,confira-cinco-dicas-para-usar-a-internet-com-mais-seguranca.aspx\" rel=\"nofollow\" target=\"_blank\"><strong>neste link</strong></a> na integra.</p>\r\n<p>Confira a lista abaixo:</p>\r\n<p style=\"margin-left: 40px;\"><strong>1.Instalar softwares originais e confiáveis</strong></p>\r\n<p style=\"margin-left: 40px;\">A importância de utilizar softwares \r\nlegítimos no seu computador é muito maior do que parece. Claro, \r\npirataria é crime e não tem justificativa; essa prática é a responsável \r\npor prejuízos astronômicos em empresas que precisam de um bom retorno de\r\n vendas para continuarem ativas.</p>\r\n<p style=\"margin-left: 40px;\">Porém, utilizar programas de procedência \r\nduvidosa pode ser igualmente danoso para o usuário. Ao \"piratear\" um \r\naplicativo, como um jogo, você nunca terá certeza se os dados do seu \r\ncomputador estarão seguros novamente. Afinal, para quebrar a proteção \r\nencontrada no software, foi necessário um trabalho de engenharia reversa\r\n ordenado por uma pessoa e/ou grupo de indivíduos.</p>\r\n<p style=\"margin-left: 40px;\">Sendo algo ilegal, não dá para contar com a\r\n \"boa fé\" desses desconhecidos. Suportes técnicos não existirão, e o seu\r\n dispositivo estará vulnerável para diversos níveis de invasões \r\ncibernéticas. Em alguns casos é necessário até mesmo desligar o seu \r\nantivírus, para que o produto rode sem os mecanismos de proteção... E, \r\naproveitando esse gancho, podemos partir para o próximo tópico:</p>\r\n<p style=\"margin-left: 40px;\"><strong>2.Ter um antivírus ideal para o perfil do usuário</strong></p>\r\n<p style=\"margin-left: 40px;\">Continuando da dica anterior, ter um \r\nantivírus adequado é muito mais do que utilizar o mais barato - ou mesmo\r\n o mais caro. Uma escolha incorreta pode causar danos irreversíveis para\r\n a sua segurança digital. É fundamental analisar todas as ferramentas \r\noferecidas pelo software de proteção, para assim escolher o mais correto\r\n para o seu uso no dia a dia.<br>\r\n<br>\r\nLembrando que as necessidades de quem trabalha diariamente no \r\ncomputador, e as de uma pessoa que usa apenas para assistir vídeos ou \r\nmesmo jogar, são totalmente diferentes. Tudo isso deve ser levado em \r\nconta.</p><p></p>', 'dicas-para-navegar-na-internet-com-mais-seguranca');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_autores`
--

CREATE TABLE `noticia_autores` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_autores`
--

INSERT INTO `noticia_autores` (`id`, `codigo`, `nome`, `imagem`, `descricao`) VALUES
(12, '160641192045582', 'Administrador', NULL, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_categorias`
--

CREATE TABLE `noticia_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_categorias`
--

INSERT INTO `noticia_categorias` (`id`, `codigo`, `titulo`) VALUES
(49, '164338461956985', 'Dicas'),
(48, '164338461457525', 'Notícias');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_destaque`
--

CREATE TABLE `noticia_destaque` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_detalhes`
--

CREATE TABLE `noticia_detalhes` (
  `id` int(11) NOT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_detalhes`
--

INSERT INTO `noticia_detalhes` (`id`, `botao_codigo`) VALUES
(1, '160702407554476');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_grupos`
--

CREATE TABLE `noticia_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `itens_por_linha` int(11) DEFAULT NULL,
  `formato` int(11) DEFAULT 1,
  `mostrar_titulo` int(11) DEFAULT 0,
  `mostrar_categorias` int(11) DEFAULT 0,
  `itens_por_pagina` int(11) DEFAULT 3,
  `marcados` int(11) DEFAULT 1,
  `max_itens` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `mostrar_banners` int(11) DEFAULT 0,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `font` varchar(100) DEFAULT NULL,
  `font_family` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_grupos`
--

INSERT INTO `noticia_grupos` (`id`, `codigo`, `titulo`, `itens_por_linha`, `formato`, `mostrar_titulo`, `mostrar_categorias`, `itens_por_pagina`, `marcados`, `max_itens`, `categoria`, `mostrar_banners`, `botao_codigo`, `font`, `font_family`, `classes`, `classes_img`) VALUES
(1, '164338440472283', '<div align=\"center\"><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\"><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\"><font color=\"#424242\"><span style=\"font-family: &quot;Exol2 Bold&quot;; font-size: 42px;\">Notícias e Dicas</span></font><br></span><span style=\"font-family: \" exol2=\"\" bold\";=\"\" font-size:=\"\" 42px;\"=\"\" bold\";\"=\"\"></span></span></div>', 3, 2, 1, 0, 3, 1, 200000, '0', 0, '160218454125922', '163285999581791', 'Exol2 Regular', '', ''),
(2, '164340160574772', 'Noticias', 2, 3, 0, 2, 10, 0, 50000, '0', 2, '160218454125922', '160618094135988', 'Arial', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_grupos_sel`
--

CREATE TABLE `noticia_grupos_sel` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `noticia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_grupos_sel`
--

INSERT INTO `noticia_grupos_sel` (`id`, `grupo`, `noticia`) VALUES
(4, '159464169932659', '159464357690724'),
(5, '159464169932659', '159465600939256'),
(6, '159536219643524', '159533871631363'),
(7, '159536219643524', '159533858670334'),
(8, '160632472343142', '159533813626865'),
(9, '160632472343142', '160641200610053'),
(10, '160632472343142', '160642278499501'),
(11, '160632472343142', '160642313265062'),
(12, '164338440472283', '164338466688987'),
(13, '164338440472283', '164338502388890'),
(14, '164338440472283', '164338510653880'),
(15, '164340160574772', '164338510653880'),
(16, '164340160574772', '164338502388890'),
(17, '164340160574772', '164338466688987'),
(18, '164338440472283', '166075729910217'),
(19, '164340160574772', '166075729910217'),
(20, '164338440472283', '166075749338863'),
(21, '164340160574772', '166075749338863'),
(22, '164338440472283', '166075760641946'),
(23, '164340160574772', '166075760641946');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_imagem`
--

CREATE TABLE `noticia_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_imagem`
--

INSERT INTO `noticia_imagem` (`id`, `codigo`, `imagem`) VALUES
(69, '166075760641946', 'a-[17-08-22][14-33-45].webp'),
(68, '166075749338863', 'internet-[17-08-22][14-31-41].jpg'),
(67, '166075729910217', 'internet-fw-[02-08-2][15-06-34]-[17-08-22][14-28-34].jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_imagem_legenda`
--

CREATE TABLE `noticia_imagem_legenda` (
  `id` int(11) NOT NULL,
  `id_img` varchar(100) DEFAULT NULL,
  `legenda` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_imagem_legenda`
--

INSERT INTO `noticia_imagem_legenda` (`id`, `id_img`, `legenda`) VALUES
(2, '40', 'rrrrr'),
(3, '58', 'Legenda 1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_imagem_ordem`
--

CREATE TABLE `noticia_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_imagem_ordem`
--

INSERT INTO `noticia_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(1, '157669245994679', '29'),
(2, '158027407512994', '30'),
(3, '158027414654901', '31'),
(4, '158027424681308', '32'),
(5, '158027424681308', '32,33'),
(6, '158498264774568', '34'),
(7, '159449575923106', '35'),
(8, '159449575923106', '35,36'),
(9, '159449575923106', '35,36,37'),
(10, '159449575923106', '35,36,37,38'),
(11, '159449575923106', '35,36,37,38,39'),
(12, '159449575923106', '36,35,37,38,39'),
(13, '159449575923106', '38,36,35,37,39'),
(14, '159464357690724', '40'),
(15, '159464357690724', '40,41'),
(16, '159464357690724', '40,41,42'),
(17, '159464357690724', '40,41,42,43'),
(18, '159464357690724', '41,40,42,43'),
(19, '159464357690724', '42,41,43'),
(20, '159464357690724', '42,41,43,44'),
(21, '159464357690724', '42,41,43,44,45'),
(22, '159464357690724', '42,41,43,44,45,46'),
(23, '159464357690724', '42,41,43,44,45,46,47'),
(24, '159464357690724', '42,41,43,44,45,46,47,48'),
(25, '159533813626865', '49'),
(26, '159533821185704', '50'),
(27, '159533829183192', '51'),
(28, '159533842273038', '52'),
(29, '159533845940722', '53'),
(30, '159533849727653', '54'),
(31, '159533852571763', '55'),
(32, '159533858670334', '56'),
(33, '159533863538240', '57'),
(34, '159533871631363', '58'),
(35, '159533875625623', '59'),
(36, '159533871631363', '58,60'),
(37, '160641200610053', '61'),
(38, '160642278499501', '62'),
(39, '160642313265062', '63'),
(40, '164338466688987', '64'),
(41, '164338502388890', '65'),
(42, '164338510653880', '66'),
(43, '166075729910217', '67'),
(44, '166075749338863', '68'),
(45, '166075760641946', '69');

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia_marcadagua`
--

CREATE TABLE `noticia_marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `noticia_marcadagua`
--

INSERT INTO `noticia_marcadagua` (`id`, `codigo`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `desconto_fixo` double DEFAULT NULL,
  `desconto_porc` double DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `email_pagseguro` varchar(255) DEFAULT NULL,
  `token_retorno_pagseguro` text DEFAULT NULL,
  `mercadopago_client_id` varchar(255) DEFAULT NULL,
  `mercadopago_client_secret` varchar(255) DEFAULT NULL,
  `mercadopago_public_key` text DEFAULT NULL,
  `mercadopago_access_token` text DEFAULT NULL,
  `deposito_dados` text DEFAULT NULL,
  `paypal_conta` varchar(255) DEFAULT NULL,
  `paypal_clienteid` text DEFAULT NULL,
  `paypal_clientesecret` text DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cielo_clientId` text DEFAULT NULL,
  `cielo_clientSecret` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `titulo`, `desconto_fixo`, `desconto_porc`, `ativo`, `email_pagseguro`, `token_retorno_pagseguro`, `mercadopago_client_id`, `mercadopago_client_secret`, `mercadopago_public_key`, `mercadopago_access_token`, `deposito_dados`, `paypal_conta`, `paypal_clienteid`, `paypal_clientesecret`, `cidade`, `estado`, `cielo_clientId`, `cielo_clientSecret`) VALUES
(1, 'PagSeguro', 0, 0, 1, '', '', '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Depósito Bancário', 5, 0, 0, '', '', '', '', NULL, NULL, 'Banco: 364 - Gerencianet S.A. \r\nAgência: 0001 \r\nConta: 35042-7 \r\nCNPJ: 09.252.194/0001-97 \r\nMR COMERCIO DIGITAL EIRELI\r\nMétodo: TED ou DOC \r\nTipo de Conta*: Conta de pagamento ou Conta corrente \r\n\r\n*Preferencialmente utilize a conta de pagamento.\r\nNesta forma de pagamento você precisa nos enviar o comprovante de pagamento para contato@m2sites.com.br para que possa receber o produto.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'MercadoPago', 0, 0, 0, '', '', '4103641964162705', 'J3Qnb9MMxp7f2ZEVsSKw5aOt8VgAvnFL', 'APP_USR-3eb52051-e4b5-4332-810b-a5efd4f7600b', 'APP_USR-4103641964162705-041914-928562ae620fdd6b39b747c46ca27a9e-697891231', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Paypal', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sb-l04ev3130776@business.example.com', '', '', NULL, NULL, NULL, NULL),
(6, 'Cielo', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', ''),
(5, 'Pagar na Retirada', 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'PIX', 0, 0, 0, NULL, NULL, '4103641964162705', 'J3Qnb9MMxp7f2ZEVsSKw5aOt8VgAvnFL', 'APP_USR-3eb52051-e4b5-4332-810b-a5efd4f7600b', 'APP_USR-4103641964162705-041914-928562ae620fdd6b39b747c46ca27a9e-697891231', NULL, NULL, NULL, NULL, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros_grupos`
--

CREATE TABLE `parceiros_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros_ordem`
--

CREATE TABLE `parceiros_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_loja`
--

CREATE TABLE `pedido_loja` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `cadastro` varchar(255) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `vencimento` int(11) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `cupom` varchar(255) DEFAULT NULL,
  `cupom_promocao` varchar(255) DEFAULT NULL,
  `cupom_desconto_fixo` double DEFAULT 0,
  `cupom_desconto_porc` double DEFAULT 0,
  `cep_destino` varchar(100) DEFAULT NULL,
  `frete` varchar(255) DEFAULT NULL,
  `frete_titulo` varchar(255) DEFAULT NULL,
  `frete_valor` double DEFAULT 0,
  `frete_obs` text DEFAULT NULL,
  `frete_balcao` varchar(255) DEFAULT NULL,
  `valor_produtos` double DEFAULT 0,
  `valor_produtos_desc` double DEFAULT 0,
  `valor_total` double DEFAULT 0,
  `valor_pago` double DEFAULT 0,
  `forma_pagamento` varchar(255) DEFAULT NULL,
  `forma_pagamento_desc_fixo` double DEFAULT 0,
  `forma_pagamento_desc_porc` double DEFAULT 0,
  `id_transacao` varchar(255) DEFAULT NULL,
  `link_boleto` text DEFAULT NULL,
  `codigo_envio` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `comprovante` varchar(255) DEFAULT NULL,
  `confirmacao` int(11) DEFAULT 0,
  `link_cielo` text DEFAULT NULL,
  `pix_qrcode` text DEFAULT NULL,
  `pix_chave` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pedido_loja`
--

INSERT INTO `pedido_loja` (`id`, `codigo`, `cadastro`, `data`, `vencimento`, `ip`, `cupom`, `cupom_promocao`, `cupom_desconto_fixo`, `cupom_desconto_porc`, `cep_destino`, `frete`, `frete_titulo`, `frete_valor`, `frete_obs`, `frete_balcao`, `valor_produtos`, `valor_produtos_desc`, `valor_total`, `valor_pago`, `forma_pagamento`, `forma_pagamento_desc_fixo`, `forma_pagamento_desc_porc`, `id_transacao`, `link_boleto`, `codigo_envio`, `status`, `comprovante`, `confirmacao`, `link_cielo`, `pix_qrcode`, `pix_chave`) VALUES
(1, '159968810397238', '159968824445796', 1599688203, 1599861098, '::1', NULL, NULL, 0, 0, '85501-320', '3', 'Retirar no local', 0, NULL, NULL, 3.33, 0, 3.33, 0, '4', 0, 0, '', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(2, '159975882661066', NULL, 1599761623, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(3, '160148172626000', '160148600353594', 1601484155, 1601659385, '::1', NULL, NULL, 0, 0, '85501-320', '1', 'Correios Pac', 21, NULL, NULL, 3.33, 0, 24.33, 0, '18', 0, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(4, '160701505043576', '160702674427498', 1607026908, 1607201230, '::1', NULL, NULL, 0, 0, '85501-320', '3', 'Retirar no local', 0, NULL, NULL, 3.33, 0, 3.33, 0, '2', 0, 0, NULL, NULL, NULL, 7, NULL, 0, NULL, NULL, NULL),
(5, '161047346425030', '161047438999558', 1610474880, 1610561301, '177.220.178.140', NULL, NULL, 0, 0, '85501-320', '1', 'Correios Pac', 21, NULL, NULL, 3.33, 0, 24.33, 0, '1', 0, 0, 'CDEBD645FBFB01D224DFCFAA4242C654', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(6, '161047490818729', '161047438999558', 1610474946, 1610647769, '177.220.178.140', NULL, NULL, 0, 0, '85501-320', '3', 'Retirar no local', 0, NULL, NULL, 3.33, 0, 3.33, 0, '3', 0, 0, '457480570-724c288f-f4fb-4250-8237-b0b361257644', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(7, '161047507447232', NULL, 1610475187, NULL, '179.95.59.143', NULL, NULL, 0, 0, '85501-260', '3', 'Retirar no local', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(8, '161047895235793', '161047983977452', 1610479620, 1610566409, '179.95.59.143', NULL, NULL, 0, 0, '72145-602', '1', 'Correios Pac', 58.1, NULL, NULL, 3.33, 0, 61.43, 0, '1', 0, 0, 'C18ED974E2E211E004C9BFADD6AD9B0A', NULL, NULL, 7, NULL, 0, NULL, NULL, NULL),
(9, '161048001688066', '161047983977452', 1610480097, 1610566891, '179.95.59.143', NULL, NULL, 0, 0, '72145-602', '3', 'Retirar no local', 0, NULL, NULL, 3.33, 0, 3.33, 0, '1', 0, 0, '1A9088E83C3C565334617F8E8B6CC491', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(10, '161055630722184', NULL, 1610557390, NULL, '177.220.178.140', NULL, NULL, 0, 0, '85501-320', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(11, '161056901017951', NULL, 1610569022, NULL, '::1', NULL, NULL, 0, 0, '85501-320', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(12, '161057229028002', NULL, 1610573130, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(13, '161058162348880', NULL, 1610581994, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(14, '161058580910277', NULL, 1610585823, NULL, '::1', '458EOLOE4H', 'Promoção de Natal', 5, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(15, '161058653010540', NULL, 1610586536, NULL, '::1', 'XJALA6V8MV', 'Promoção de Natal', 5, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(16, '161058878827854', NULL, 1610588804, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(17, '161059002490493', '161047438999558', 1610590032, 1610770822, '::1', '458EOLOE4H', 'Promoção de Natal', 5, 0, '85501320', '5_3', 'Melhor Envio - .Package', 21.92, 'Pacote:<br>Largura: 20<br>Altura: 12<br>Comprimento:22<br>Peso: 1.50', NULL, 16.65, 10, 28.57, 0, '2', 5, 0, NULL, NULL, '444444444444', 5, NULL, 0, NULL, NULL, NULL),
(18, '161059802669334', '161047438999558', 1610598105, 1610770999, '::1', NULL, NULL, 0, 0, NULL, '', 'Grafica 1', 2, NULL, '161059816852662', 3.33, 5, 0.33, 0, '2', 5, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(19, '161059820231036', '161047438999558', 1610598261, 1610771113, '::1', NULL, NULL, 0, 0, '85501320', '26', 'Pato Branco - PR', 10, '', NULL, 13.32, 5, 18.32, 0, '2', 5, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(20, '161229239340427', NULL, 1612294214, NULL, '::1', NULL, NULL, 0, 0, '85501320', '1', 'Correios Pac', 21, '', NULL, 0, 0, 0, 0, '6', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(21, '161229561387214', '161047438999558', 1612295622, 1612468666, '187.95.111.75', NULL, NULL, 0, 0, '85501320', '2', 'Correios Sedex', 21, '', NULL, 3.33, 0, 24.33, 0, '6', 0, 0, '70882a4d-c83f-42f9-92da-634ce353685b', NULL, NULL, 1, NULL, 0, 'https://cieloecommerce.cielo.com.br/transactionalvnext/order/buynow/70882a4d-c83f-42f9-92da-634ce353685b', NULL, NULL),
(22, '161719245181591', '161719611447348', 1617193190, 1617369542, '::1', NULL, NULL, 0, 0, '85501320', '1', 'Correios Pac', 21, '', NULL, 20, 5, 36, 0, '2', 5, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(23, '162018162253080', '162018250038968', 1620182547, 1620355354, '::1', NULL, NULL, 0, 0, '85501320', '1', 'Correios Pac', 21, '', NULL, 90, 0, 111, 0, '2', 0, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(24, '162257528576332', NULL, 1622575391, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(25, '162568385851330', NULL, 1625683947, NULL, '::1', NULL, NULL, 0, 0, '85501-320', '3', 'Retirar no local', 0, '', NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(26, '162568404171292', NULL, 1625684045, NULL, '::1', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(27, '163036106358271', '162266363434923', 1630364006, 1630538368, '::1', NULL, NULL, 0, 0, '85601010', '99999', 'Frete Gratis', 0, '', NULL, 110, 0, 110, 0, '2', 0, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(28, '163292807828981', '163294967885360', 1632934561, 1633123316, '189.10.45.20', NULL, NULL, 0, 0, '69960000', '99999', 'Frete Gratis', 0, '', NULL, 59, 5, 54, 0, '2', 5, 0, NULL, NULL, NULL, 7, NULL, 0, NULL, NULL, NULL),
(29, '163293506597019', NULL, 1632936793, NULL, '138.204.27.27', NULL, NULL, 0, 0, '85501-320', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(30, '163294036242428', NULL, 1632940593, NULL, '189.10.45.20', NULL, NULL, 0, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(31, '163295555839960', NULL, 1632956678, NULL, '189.10.45.20', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(32, '163304596237421', NULL, 1633046751, NULL, '177.53.160.152', NULL, NULL, 0, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(33, '163344258444221', NULL, 1633442635, NULL, '177.10.87.10', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(34, '163387838189068', NULL, 1633878749, NULL, '187.111.204.160', NULL, NULL, 0, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(35, '163435901249723', NULL, 1634359026, NULL, '45.177.138.112', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(36, '163475870051516', NULL, 1634758750, NULL, '168.228.93.173', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(37, '163516324736377', NULL, 1635163290, NULL, '177.53.162.207', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(38, '163526696956479', NULL, 1635267034, NULL, '45.188.242.77', NULL, NULL, 0, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(39, '163543134327592', '163294967885360', 1635431385, 1635604434, '179.254.217.74', NULL, NULL, 0, 0, '69960000', '99999', 'Frete Gratis', 0, '', NULL, 89.9, 5, 84.9, 0, '2', 5, 0, NULL, NULL, NULL, 7, NULL, 0, NULL, NULL, NULL),
(40, '163582466681702', NULL, 1635825243, NULL, '170.81.20.83', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(41, '163587167143739', NULL, 1635871716, NULL, '170.81.20.83', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(42, '163636442756628', NULL, 1636364487, NULL, '187.106.81.204', NULL, NULL, 0, 0, NULL, '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(43, '163657285791649', '163657975030789', 1636575298, 1636754423, '187.95.111.119', NULL, NULL, 0, 0, '85501320', '99999', 'Frete Gratis', 0, '', NULL, 1, 0, 1, 0, '2', 0, 0, NULL, NULL, '', 6, NULL, 0, NULL, NULL, NULL),
(44, '163657584960299', NULL, 1636575882, NULL, '189.10.45.20', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(45, '163660189643724', NULL, 1636601924, NULL, '138.121.21.106', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(46, '163671505365815', NULL, 1636715119, NULL, '177.223.98.219', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(47, '163671685147815', NULL, 1636716895, NULL, '168.228.165.189', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(48, '163672216558681', NULL, 1636722174, NULL, '138.121.23.6', NULL, NULL, 0, 0, '37620-000', '99999', 'Frete Gratis', 0, '', NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(49, '163683835083758', NULL, 1636839018, NULL, '138.121.21.6', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, '8', 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(50, '163698570897546', '163294967885360', 1636986179, 1637159128, '189.10.45.20', NULL, NULL, 0, 0, '69960000', '99999', 'Frete Gratis', 0, '', NULL, 1, 5, -4, 0, '2', 5, 0, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, NULL),
(51, '163727632175298', NULL, 1637276407, NULL, '45.191.205.74', NULL, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(52, '163767735156037', NULL, 1637678219, NULL, '189.10.45.20', NULL, NULL, 0, 0, '69960-000', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(53, '163768180762015', NULL, 1637681863, NULL, '189.10.45.20', NULL, NULL, 0, 0, '69960-000', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(54, '163769524454488', NULL, 1637695387, NULL, '187.95.111.119', NULL, NULL, 0, 0, '85501320', '5_1', 'Melhor Envio - PAC', 68.8, 'Pacote:<br>Largura: 11<br>Altura: 10<br>Comprimento:16<br>Peso: 1.00', NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL),
(55, '163769932714297', NULL, 1637699333, NULL, '189.10.45.20', NULL, NULL, 0, 0, '69960-000', '', '', 0, NULL, NULL, 0, 0, 0, 0, NULL, 0, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_loja_carrinho`
--

CREATE TABLE `pedido_loja_carrinho` (
  `id` int(11) NOT NULL,
  `sessao` varchar(100) DEFAULT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `produto_titulo` varchar(255) DEFAULT NULL,
  `produto_subtitulo` varchar(255) DEFAULT NULL,
  `produto_valor` double DEFAULT NULL,
  `tamanho` varchar(255) DEFAULT NULL,
  `tamanho_titulo` varchar(255) DEFAULT NULL,
  `tamanho_valor` double DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `cor_titulo` varchar(255) DEFAULT NULL,
  `cor_valor` double DEFAULT NULL,
  `variacao` varchar(255) DEFAULT NULL,
  `variacao_titulo` varchar(255) DEFAULT NULL,
  `variacao_valor` double DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor_arte` double DEFAULT NULL,
  `valor_total` double DEFAULT NULL,
  `reserva_estoque` int(11) DEFAULT 1,
  `tipoarte` int(11) DEFAULT NULL,
  `modelo_codigo` varchar(255) DEFAULT NULL,
  `dados_arte` text DEFAULT NULL,
  `arquivo_arte` varchar(255) DEFAULT NULL,
  `arte_acabamento` varchar(255) DEFAULT NULL,
  `tipo_envio` int(11) DEFAULT NULL,
  `tam_largura` varchar(255) DEFAULT NULL,
  `tam_altura` varchar(255) DEFAULT NULL,
  `plano` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pedido_loja_carrinho`
--

INSERT INTO `pedido_loja_carrinho` (`id`, `sessao`, `produto`, `produto_titulo`, `produto_subtitulo`, `produto_valor`, `tamanho`, `tamanho_titulo`, `tamanho_valor`, `cor`, `cor_titulo`, `cor_valor`, `variacao`, `variacao_titulo`, `variacao_valor`, `quantidade`, `valor_arte`, `valor_total`, `reserva_estoque`, `tipoarte`, `modelo_codigo`, `dados_arte`, `arquivo_arte`, `arte_acabamento`, `tipo_envio`, `tam_largura`, `tam_altura`, `plano`) VALUES
(3, '159975882661066', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(2, '159968810397238', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(4, '160148172626000', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(5, '160701505043576', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 0, 0, '', '', '', '', 0, '', '', 0),
(6, '161047346425030', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(7, '161047490818729', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(8, '161047507447232', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(9, '161047895235793', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 0, 0, '', '', '', '', 0, '', '', 0),
(10, '161048001688066', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(12, '161055630722184', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(13, '161055630722184', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(14, '161056901017951', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(17, '161057229028002', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 4, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(22, '161058162348880', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(19, '161057229028002', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 3, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(23, '161058162348880', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(24, '161058162348880', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(25, '161058580910277', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(26, '161058580910277', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(28, '161058653010540', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 4, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(29, '161058878827854', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(30, '161058878827854', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(31, '161059002490493', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 2, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(32, '161059002490493', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 3, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(33, '161059802669334', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 1, '', '', 0),
(34, '161059820231036', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 3, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(35, '161059820231036', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(36, '161229239340427', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(37, '161229561387214', '159950637023728', 'teste', '', 3.33, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 3.33, 1, 0, '', '', '', '', 0, '', '', 0),
(38, '161719245181591', '161719301811507', 'Camiseta', 'Algodão ', 20, '161719309820536', 'G', 0, '161719287792587', 'Branco', 0, '-', '', 0, 1, 0, 20, 1, 0, '', '', '', '', 0, '', '', 0),
(39, '162018162253080', '161719413270352', 'Boné', '', 90, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 90, 1, 0, '', '', '', '', 0, '', '', 0),
(40, '162257528576332', '161719323585483', 'Oculos de sol', '', 199.99, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 199.99, 1, 0, '', '', '', '', 0, '', '', 0),
(41, '162568385851330', '161719408581817', 'Boné cata ovo', '', 2.99, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 2.99, 1, 0, '', '', '', '', 0, '', '', 0),
(42, '162568404171292', '161719413270352', 'Boné', '', 90, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 90, 1, 0, '', '', '', '', 0, '', '', 0),
(47, '163036106358271', '163036451579209', 'Produto Digital', '', 100, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 100, 1, 0, '', '', '', '', 0, '', '', 0),
(48, '163036106358271', '161894681011812', 'Plano 1', '', 10, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 10, 1, 0, '', '', '', '', 0, '', '', 1),
(57, '163295555839960', '163293435481495', 'Script Site IPTV Responsivo em PHP', 'Digital ', 59.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 59.9, 1, 0, '', '', '', '', 0, '', '', 0),
(52, '163293506597019', '163293435481495', 'Script Site IPTV Responsivo em PHP', 'Digital ', 59.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 59.9, 1, 0, '', '', '', '', 0, '', '', 0),
(54, '163294036242428', '163293435481495', 'Script Site IPTV Responsivo em PHP', 'Digital ', 59.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 59.9, 1, 0, '', '', '', '', 0, '', '', 0),
(56, '163292807828981', '163293874682633', 'Script Agência de Veículos Responsivo em PHP', 'DIGITAL ', 59, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 59, 0, 0, '', '', '', '', 0, '', '', 0),
(59, '163344258444221', '163293874682633', 'Script Agência de Veículos Responsivo em PHP', 'Digital .ZIP ', 69.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 69.9, 1, 0, '', '', '', '', 0, '', '', 0),
(63, '163475870051516', '163293874682633', 'Script Agência de Veículos Responsivo em PHP', 'Digital .ZIP ', 69.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 69.9, 1, 0, '', '', '', '', 0, '', '', 0),
(62, '163435901249723', '163293435481495', 'Script Site IPTV Responsivo em PHP', 'Digital ', 70, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 70, 1, 0, '', '', '', '', 0, '', '', 0),
(64, '163516324736377', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(66, '163543134327592', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 0, 0, '', '', '', '', 0, '', '', 0),
(67, '163582466681702', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(68, '163587167143739', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(70, '163657285791649', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 3, '', '', 0),
(71, '163657584960299', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 3, '', '', 0),
(73, '163660189643724', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 3, '', '', 0),
(74, '163671505365815', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(75, '163671685147815', '163309894783938', 'Script Site Imobiliária Php Responsivo.', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(76, '163672216558681', '163553904516940', 'Site Institucional em PHP Responsivo', 'Digital ', 150, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 150, 1, 0, '', '', '', '', 0, '', '', 0),
(77, '163683835083758', '163553904516940', 'Site Institucional em PHP Responsivo', 'Digital ', 150, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 150, 1, 0, '', '', '', '', 0, '', '', 0),
(78, '163698570897546', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 3, '', '', 0),
(79, '163727632175298', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(80, '163767735156037', '163312149445469', 'Script Site para Rádio Online em PHP', 'Digital .ZIP ', 89.9, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 89.9, 1, 0, '', '', '', '', 0, '', '', 0),
(86, '163769524454488', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 0, '', '', 0),
(87, '163769932714297', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 0, '', '', 0),
(84, '163768180762015', '163657491612557', 'Produto teste', '', 1, '-', '', 0, '-', '', 0, '-', '', 0, 1, 0, 1, 1, 0, '', '', '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_loja_mensagens`
--

CREATE TABLE `pedido_loja_mensagens` (
  `id` int(11) NOT NULL,
  `pedido` varchar(100) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `anexo` varchar(255) DEFAULT NULL,
  `lida` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pedido_loja_mensagens`
--

INSERT INTO `pedido_loja_mensagens` (`id`, `pedido`, `usuario`, `data`, `msg`, `anexo`, `lida`) VALUES
(5, '163657285791649', '1', 1636581671, 'Ta aqui o teu arquivo digital\r\n\r\nhttps:m2sites.com.br/arquivoficticio.zip', NULL, 1),
(6, '163657285791649', '1', 1636581942, 'Ta aqui o teu arquivo digital\r\n\r\nhttps://m2sites.com.br/arquivoficticio.zip', NULL, 0),
(7, '163657285791649', '1', 1636582505, 'Ta aqui o teu arquivo digital\r\n\r\nhttps://m2sites.com.br/arquivoficticio.zip', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_loja_status`
--

CREATE TABLE `pedido_loja_status` (
  `id` int(11) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `pedido_loja_status`
--

INSERT INTO `pedido_loja_status` (`id`, `codigo`, `ordem`, `status`) VALUES
(1, 0, 0, 'Incompleto'),
(2, 1, 1, 'Aguardando Pagamento'),
(3, 4, 2, 'Pagamento Confirmado'),
(4, 3, 3, 'Verificação de arquivos'),
(5, 12, 4, 'Arquivo com problema'),
(6, 14, 5, 'Criando/Alterando arte'),
(7, 13, 6, 'Em produção'),
(8, 5, 7, 'Expedição'),
(9, 8, 8, 'Em transporte'),
(10, 9, 9, 'Disponível para retirada'),
(11, 6, 10, 'Material entregue'),
(12, 7, 11, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `img_fundo` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `planos`
--

INSERT INTO `planos` (`id`, `grupo`, `codigo`, `titulo`, `valor`, `endereco`, `img_fundo`, `tipo`) VALUES
(127, '163414603355927', '163414609593870', '<span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 22px;\"=\"\"><span style=\"font-size: 40px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\" regular\";\"=\"\">70 MEGA</span><span style=\"font-family: \" exol2=\"\" bold\";\"=\"\"><br>INTERNET FIBRA ÓPTICA</span></span><br>', 67, '#', NULL, 0),
(130, '163414603355927', '164337939033104', '<span style=\"font-family: \"><span style=\"font-size: 40px; font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" bold\";\"=\"\">120 MEGA</span><span style=\"font-family: \"><br>INTERNET FIBRA ÓPTICA</span></span><span style=\"font-size: 18px;\"></span><br>', 77.99, '#', NULL, 0),
(131, '163414603355927', '164337957135457', '<span style=\"font-family: \"><span style=\"font-size: 40px; font-family: &quot;Exol2 Bold&quot;;\">250 MEGA</span><span style=\"font-family: \"><br>INTERNET FIBRA ÓPTICA</span></span><span style=\"font-size: 18px;\"></span><br>', 99.99, '#', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos_grupos`
--

CREATE TABLE `planos_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 0,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `plano_titulo` int(11) DEFAULT 1,
  `plano_itens` int(11) DEFAULT 1,
  `plano_valor` int(11) DEFAULT 1,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `planos_grupos`
--

INSERT INTO `planos_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `itens_por_linha`, `descricao`, `botao_codigo`, `plano_titulo`, `plano_itens`, `plano_valor`, `classes`, `classes_img`) VALUES
(3, '163414603355927', '<h2 class=\"titulo_padrao\" style=\"border-color: rgb(0, 0, 102) !important; font-size: 48px;\"><font color=\"#424242\"><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-family: \" exol2=\"\" regular\";\"=\"\"><font color=\"#FFFFFF\"><span style=\"font-family: &quot;Exol2 Regular&quot;;\">PLANOS DE INTERNET</span></font><span style=\"font-family: &quot;Exol2 Regular&quot;;\"> </span></span><font color=\"#FFFFFF\"><span style=\"font-family: &quot;Exol2 Bold&quot;;\" exol2=\"\" regular\";\"=\"\" bold\";\"=\"\">FIBRA ÓPTICA</span></font></span></font></h2><p align=\"center\"></p>', 1, 3, '<p><font color=\"#FFFFFF\">Muito mais qualidade e velocidade para sua casa					</font></p>', '160693689911601', 1, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos_itens`
--

CREATE TABLE `planos_itens` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `planos_itens`
--

INSERT INTO `planos_itens` (`id`, `codigo`, `titulo`, `tipo`) VALUES
(140, '159596975880934', 'AAAAAAAAAAAAAAAA', 0),
(139, '159596700262979', 'Item 3', 1),
(138, '159596700262979', 'Item 2', 1),
(137, '159596700262979', 'Item 1', 1),
(136, '159596695535947', 'item 3', 0),
(135, '159596695535947', 'item 2', 0),
(134, '159596695535947', 'item 1', 1),
(131, '159464005847190', 'tyeste', 1),
(130, '159442239070849', 'gole', 1),
(128, '159442236626955', 'bebida', 0),
(127, '159442236626955', 'Perereca', 1),
(141, '161894681011812', 'Item 1', 1),
(142, '161894681011812', 'Item 2', 1),
(143, '161894687854387', 'Item 1', 1),
(144, '161894687854387', 'Item 2', 1),
(145, '161894687854387', 'Item 3', 1),
(146, '161894690447337', 'Item 1', 1),
(147, '161894690447337', 'Item 2', 1),
(148, '161894690447337', 'Item 3', 1),
(149, '161894690447337', 'Item 4', 1),
(150, '161894690447337', 'Item 5', 1),
(193, '164337939033104', 'Mais velocidade', 1),
(194, '164337939033104', 'Suporte Técnico', 1),
(195, '164337939033104', 'WI-FI Grátis', 1),
(188, '163414609593870', 'Sem Franquia de Dados', 1),
(190, '163414609593870', 'Suporte Técnico', 1),
(191, '163414609593870', 'WI-FI Grátis', 1),
(189, '163414609593870', 'Mais velocidade', 1),
(161, '163414660535895', 'Disco 80 GB SSD', 1),
(162, '163414660535895', 'Domínios 2 Sites', 1),
(163, '163414660535895', 'Domínios 2 Sites', 1),
(164, '163414660535895', 'Contas de E-Mail ILIMITADAS', 1),
(165, '163414660535895', 'SSL e Criador Grátis', 1),
(166, '163414660535895', 'CPU e Memória 1 CPU e 2GB', 1),
(167, '163414660535895', 'PLANO MENSAL', 1),
(168, '163414684311826', 'Disco 160 GB SSD', 1),
(169, '163414684311826', 'Domínios 5 Sites', 1),
(170, '163414684311826', 'Transferência ILIMITADA', 1),
(171, '163414684311826', 'Contas de E-Mail ILIMITADAS', 1),
(172, '163414684311826', 'SSL e Criador Grátis', 1),
(173, '163414684311826', 'CPU e Memória 1 CPU e 3GB', 1),
(174, '163414684311826', 'PLANO MENSAL', 1),
(192, '164337939033104', 'Sem Franquia de Dados', 1),
(199, '164337957135457', 'WI-FI Grátis', 1),
(198, '164337957135457', 'Suporte Técnico', 1),
(197, '164337957135457', 'Mais velocidade', 1),
(196, '164337957135457', 'Sem Franquia de Dados', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos_ordem`
--

CREATE TABLE `planos_ordem` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `planos_ordem`
--

INSERT INTO `planos_ordem` (`id`, `grupo`, `data`) VALUES
(22, '163414603355927', '127,128,129'),
(21, '163414603355927', '127,128'),
(20, '163414603355927', '127'),
(23, '163414603355927', '127,128,129,130'),
(24, '163414603355927', '127,128,129,130,131');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `valor_falso` double DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `largura` varchar(100) DEFAULT NULL,
  `comprimento` varchar(100) DEFAULT NULL,
  `altura` varchar(100) DEFAULT NULL,
  `fretegratis` int(11) DEFAULT NULL,
  `semestoque` int(11) DEFAULT NULL,
  `esconder` int(11) DEFAULT NULL,
  `digital` int(11) DEFAULT 0,
  `digital_entrega` int(11) DEFAULT 0,
  `esconder_valor` int(11) DEFAULT 0,
  `msg_restrito` int(11) DEFAULT NULL,
  `sobconsulta` int(11) DEFAULT 0,
  `formato` varchar(255) DEFAULT NULL,
  `cores` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `revestimento` varchar(255) DEFAULT NULL,
  `acabamento` varchar(255) DEFAULT NULL,
  `producao` varchar(255) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `valor_arte` double DEFAULT NULL,
  `tipo_entrega` int(11) DEFAULT NULL,
  `impresso` int(11) DEFAULT NULL,
  `obrigacaodoanexo` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `codigo`, `marca`, `titulo`, `ref`, `valor`, `valor_falso`, `previa`, `descricao`, `tags`, `peso`, `largura`, `comprimento`, `altura`, `fretegratis`, `semestoque`, `esconder`, `digital`, `digital_entrega`, `esconder_valor`, `msg_restrito`, `sobconsulta`, `formato`, `cores`, `material`, `revestimento`, `acabamento`, `producao`, `tipo`, `valor_arte`, `tipo_entrega`, `impresso`, `obrigacaodoanexo`) VALUES
(16, '163293435481495', '163293392491232', 'Script Site IPTV Responsivo em PHP', 'IPTV01', 70, 0, 'Site Responsivo com Gerenciador de Conteúdos.', '<p align=\"justify\"><b><span style=\"font-size: 15px;\">Site para IPTV&nbsp;</span></b> 100% responsivo em PHP MySQL com painel admin, fácil \r\nedição pelo painel, feito em PHP 5.6 a Superior MySQL, utilizando os \r\nFramework Bootstrap v3.3.7 e Font Awesome 5.7.0 para agiliza maior \r\nperformance de navegação.<br>Compatível com os principais navegadores Google Chrome, Opera, Firefox (Mozilla), Edge, Outros..<br><br><b>Layout Responsivo</b><br>Fácil de Usar<br>Totalmente Editável<br><b>Código Fonte Aberto. </b>( O sistema está todo em código aberto , sendo possível a modificar ou ajustar conforme sua necessidade. )<br><b><br>Demo</b><br><a href=\"https://demo.m2sites.com.br/iptv\" target=\"_blank\">https://demo.m2sites.com.br/iptv</a></p><p align=\"justify\"><b>Gerenciador de Conteúdos<br></b><a href=\"https://demo.m2sites.com.br/iptv/sistema\" target=\"_blank\">https://demo.m2sites.com.br/iptv/sistema</a><br><b>Usuário: </b>admin<br><b>Senha:</b> *****<br><b><br>Garantia de Funcionamento somente para hospedagem com:</b><br><b>REQUISITOS PARA INSTALAÇÃO:</b><br><br>– Servidor Linux com cPanel da (cpanel.com)<br>– PHP 5.6 a Superior<br>– MySQL<br>– Apache<br>– phpMyAdmin<br><br><b>HOSPEDE CONOSCO E GANHE A INSTALAÇÃO GRÁTIS! + 1 MÊS GRÁTIS DE HOSPEDAGEM.</b><br><br><b>Funções do Gerenciador de Conteúdos:</b><br><br></p><p align=\"justify\">Antes de comprar este produto tire todas as suas duvidas conosco.<br><br><b>Produto Digital</b><br>( Produto será enviado automaticamente em seu email ou no painel do cliente após confirmação do pagamento. )<br><br>Por se Tratar de um produto digital não fazemos a devolução do pagamento.<br><br>Este valor não inclui alterações no Script ou Personalizações.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 'Digital', '', '', '', '', '', 0, 0, 0, 0, 0),
(24, '163657491612557', '163293392491232', 'Produto teste', '11111', 1, 2, 'teste', '', NULL, 1000, '10', '10', '10', 0, 1, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0),
(19, '163309894783938', '163293392491232', 'Script Site Imobiliária Php Responsivo.', 'IMOB01-2021', 89.9, 0, 'Site Pronto para Imobiliárias e Corretores', '<p><b>Site para Imobiliária e Corretores de Imóveis 100%</b> Responsivo em PHP \r\nMySQL com painel admin, fácil edição pelo painel, feito em PHP 5.6 a \r\nSuperior MySQL, utilizando os Framework Bootstrap v3.3.7 e Font Awesome \r\n5.7.0 para agiliza maior performance de navegação.<br>Compatível com os principais navegadores Google Chrome, Opera, Firefox (Mozilla), Edge, Outros..<br><br><b>Demo:<br></b><a href=\"https://demo.m2sites.com.br/imobiliaria1/\" target=\"_blank\">https://demo.m2sites.com.br/imobiliaria1/</a><br><br><b>Gerenciador de Conteúdos:</b><br><a href=\"https://demo.m2sites.com.br/imobiliaria1/sistema\" target=\"_blank\">https://demo.m2sites.com.br/imobiliaria1/sistema</a><br><b>Usuário:</b> admin<br><b>Senha:</b> *****<br><br>Layout Responsivo<br>Fácil de Usar<br>Totalmente Editável<br>Código Fonte Aberto. ( O sistema está todo em código aberto , sendo possível a modificar ou ajustar conforme sua necessidade. )<br><br>Antes de comprar teste a versão demonstração.<br>Garantia de Funcionamento somente para hospedagem com:<br><b><br>REQUISITOS PARA INSTALAÇÃO:</b><br><br>– Servidor Linux com cPanel da (cpanel.com)<br>– PHP 5.6 a Superior<br>– MySQL<br>– Apache<br>– phpMyAdmin<br><br><b><span style=\"font-size: 16px;\">Gerenciador de Conteúdos:</span></b><br>- Adicione Banners do Slide<br>- Cadastro de Emails<br>- Configurações: ( E-mail de Contato – Meta Titulo da Pagina e Descrição – <br>- Configurações de SMTP – Logo do Sistema )<br>- Edite Cores e Menu Topo e Rodapé<br>- Cadastro de Imóveis<br>- Cadastro de Clientes<br>- Cadastro de Cidades<br>- Cadastro de Bairros<br>- Cadastro de Tipos ( Ex. Apartamentos, Fazendas etc.. )<br>- Imagens Layout: ( Logo – Banners – Favicon )<br>- Postagens Blog ( Categorias – Autores e Destaques )<br>- Redes Sociais ( Facebook – WhatsApp – Instagram e outras )<br>- Textos e Paginas<br>- Upload de Arquivos ( Gera Link de Arquivos e Imagens )<br>- Permissão de Usuários<br><br>- Exclusivo Neste Script você tem a possibilidade de Escolher 3 Topos Diferentes.<br><br><b>Script Original!</b> Não compre copias ( Produzido por M2 Sites ) <br><br>Adquira já seu Script para Imobiliárias em PHP.<br><br>Antes de comprar este produto tire todas as suas duvidas conosco.<br><br><b>Produto Digital</b><br>Entrega Automática após confirmação do pagamento.<br><br>Por se Tratar de um produto digital não fazemos a devolução do pagamento.<br><br>Este valor não inclui alterações no Script ou Personalizações.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 'Digital .ZIP', '', '', '', '', '', 0, 0, 0, 0, 0),
(23, '163553904516940', '163293392491232', 'Site Institucional em PHP Responsivo', 'INST41548', 150, 0, 'Tema Construção', '<p><b>Site Institucional para qualquer ramo de atividade no tema Construção Civil 100% responsivo</b> em PHP MySQL com painel admin, fácil edição pelo painel, feito em PHP 5.6 a Superior MySQL, utilizando os Framework Bootstrap v3.3.7 e Font Awesome 5.7.0 para agiliza maior performance de navegação.<br>Compatível com os principais navegadores Google Chrome, Opera, Firefox (Mozilla), Edge, Outros..</p><p>Layout Responsivo<br>Fácil de Usar<br>Totalmente Editável<br>Código Fonte Aberto. ( O sistema está todo em código aberto , sendo possível a modificar ou ajustar conforme sua necessidade. )<b><br><br>Demo</b><br><a href=\"https://demo.m2sites.com.br/institucional1\" target=\"_blank\">https://demo.m2sites.com.br/institucional1</a><br><br><b>Gerenciador de Conteúdos</b></p><p><a href=\"https://demo.m2sites.com.br/institucional1/sistema/\" target=\"_blank\">https://demo.m2sites.com.br/institucional1/sistema/</a><br>Usuário: admin<br>Senha: ******<br><br>Antes de comprar teste a versão demonstração.<br>Garantia de Funcionamento somente para hospedagem com:<br><br><b>REQUISITOS PARA INSTALAÇÃO:</b><br><br>– Servidor Linux com cPanel da (cpanel.com)<br>– PHP 5.6 a 7.0<br>– MySQL<br>– Apache<br>– phpMyAdmin<br></p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 'Digital', '', '', '', '', '', 0, 0, 0, 0, 0),
(20, '163312149445469', '0', 'Script Site para Rádio Online em PHP', 'RAD01-2021', 89.9, 0, 'Site Pronto para Rádio em PHP Responsivo.', '<p align=\"justify\"><b><span style=\"font-size: 15px;\">Site para Rádio Online&nbsp;</span></b> 100% responsivo em PHP MySQL com painel admin, fácil \r\nedição pelo painel, feito em PHP 5.6 a Superior MySQL, utilizando os \r\nFramework Bootstrap v3.3.7 e Font Awesome 5.7.0 para agiliza maior \r\nperformance de navegação.<br>Compatível com os principais navegadores Google Chrome, Opera, Firefox (Mozilla), Edge, Outros..<br><br><b>Layout Responsivo</b><br>Fácil de Usar<br>Totalmente Editável<br><b>Código Fonte Aberto. </b>( O sistema está todo em código aberto , sendo possível a modificar ou ajustar conforme sua necessidade. )<br><b><br>Demo</b><br><a href=\"https://demo.m2sites.com.br/webradio\" target=\"_blank\">https://demo.m2sites.com.br/webradio</a></p><p align=\"justify\"><b>Gerenciador de Conteúdos<br></b><a href=\"https://demo.m2sites.com.br/webradio/sistema\" target=\"_blank\">https://demo.m2sites.com.br/webradio/sistema</a><br><b>Usuário: </b>admin<br><b>Senha:</b> *****<br><b><br>Garantia de Funcionamento somente para hospedagem com:</b><br><b>REQUISITOS PARA INSTALAÇÃO:</b><br><br>– Servidor Linux com cPanel da (cpanel.com)<br>– PHP 5.6 a Superior<br>– MySQL<br>– Apache<br>– phpMyAdmin<br><br><b>HOSPEDE CONOSCO E GANHE A INSTALAÇÃO GRÁTIS! + 1 MÊS GRÁTIS DE HOSPEDAGEM.</b><br><br><b>Funções do Gerenciador de Conteúdos</b><br>- Altere Cores<br>- Gerenciador de Conteúdos<br>- Banners ( Anúncios, Principais )<br>- Grade de Programação<br>- Enquete<br>- Mais Tocadas<br>- TV Studio Ao Vivo<br>- Vídeos<br>- Galeria de Fotos<br>- Pedidos Online<br>- Botão WhatsApp Flutuante<br>- Formulário de Contato<br>- Integração com Redes Sociais<br>- Personalize Cores do Player <br>- Player SSL<br>- Blog<br>- Altere Favicon<br>- Altere Logo<br>- Crie paginas ilimitadas<br>- Paginas de Promoção<br></p><p align=\"justify\">Antes de comprar este produto tire todas as suas duvidas conosco.<br><br><b>Produto Digital</b><br>( Produto será enviado automaticamente em seu email ou no painel do cliente após confirmação do pagamento. )<br><br>Por se Tratar de um produto digital não fazemos a devolução do pagamento.<br><br>Este valor não inclui alterações no Script ou Personalizações.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, 1, 0, 0, 0, 'Digital .ZIP', '', '', '', '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_acabamentos`
--

CREATE TABLE `produto_acabamentos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria`
--

CREATE TABLE `produto_categoria` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `id_pai` int(11) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_categoria`
--

INSERT INTO `produto_categoria` (`id`, `codigo`, `id_pai`, `titulo`, `imagem`) VALUES
(1, '161719279966364', 0, 'Sites Institucionais', NULL),
(2, '161719281371827', 0, 'Imobiliárias', NULL),
(3, '161719281617225', 0, 'Agência de Veículos', NULL),
(4, '161719282059724', 0, 'Lojas Virtuais', NULL),
(5, '161719282637249', 0, 'Igrejas', NULL),
(6, '161719283378824', 0, 'Advogados', NULL),
(7, '161719360570753', 0, 'Construtora', NULL),
(8, '163036456129997', 0, 'Sistemas Web', NULL),
(9, '163312161231191', 0, 'Rádio', NULL),
(10, '163312161971467', 0, 'Webradio', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria_ordem`
--

CREATE TABLE `produto_categoria_ordem` (
  `id` int(11) NOT NULL,
  `id_pai` int(11) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_categoria_ordem`
--

INSERT INTO `produto_categoria_ordem` (`id`, `id_pai`, `data`) VALUES
(1, 0, '1'),
(2, 0, '1,2'),
(3, 0, '1,2,3'),
(4, 0, '1,2,3,4'),
(5, 0, '1,2,3,4,5'),
(6, 0, '1,2,3,4,5,6'),
(7, 0, '1,2,3,4,5,6,7'),
(8, 0, '1,2,3,4,5,6,7,8'),
(9, 1, ''),
(10, 2, ''),
(11, 3, ''),
(12, 4, ''),
(13, 5, ''),
(14, 6, ''),
(15, 7, ''),
(16, 8, ''),
(17, 0, '1,2,3,4,5,6,7,8'),
(18, 0, '1,2,3,4,5,6,7,8,9'),
(19, 0, '1,2,3,4,5,6,7,8,9,10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria_sel`
--

CREATE TABLE `produto_categoria_sel` (
  `id` int(11) NOT NULL,
  `produto_codigo` varchar(100) DEFAULT NULL,
  `categoria_codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_categoria_sel`
--

INSERT INTO `produto_categoria_sel` (`id`, `produto_codigo`, `categoria_codigo`) VALUES
(31, '163312149445469', '163312161231191'),
(32, '163312149445469', '163312161971467'),
(30, '163309894783938', '161719281371827'),
(34, '163553904516940', '161719279966364'),
(28, '163293435481495', '161719279966364');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_cor`
--

CREATE TABLE `produto_cor` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_cor_sel`
--

CREATE TABLE `produto_cor_sel` (
  `id` int(11) NOT NULL,
  `produto_codigo` varchar(100) DEFAULT NULL,
  `cor_codigo` varchar(100) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_detalhes`
--

CREATE TABLE `produto_detalhes` (
  `id` int(11) NOT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `botao_codigo_car` varchar(100) DEFAULT NULL,
  `botao_codigo_ped` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_detalhes`
--

INSERT INTO `produto_detalhes` (`id`, `botao_codigo`, `botao_codigo_car`, `botao_codigo_ped`) VALUES
(1, '160701999128854', '160218454125922', '160218454125922');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_entrega_auto`
--

CREATE TABLE `produto_entrega_auto` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `tamanho` varchar(255) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `variacao` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_entrega_auto`
--

INSERT INTO `produto_entrega_auto` (`id`, `produto`, `tamanho`, `cor`, `variacao`, `texto`) VALUES
(3, '163309894783938', '-', '-', '-', 'Obrigado pela Compra:\r\n\r\nSegue o Link para Download do seu Produto.\r\n\r\nhttps:drive.google.com/file/d/1VPGwbBDAXEc3uwkxmNOvXF6jv8Khay2X/view?usp=sharing\r\n\r\nAtenção: Por se tratar de um produto digital não aceitamos devolução.'),
(4, '163293874682633', '-', '-', '-', 'Á M2 Sites agradece pela compra!\r\n\r\nScript Site IPTV Responsivo\r\n\r\nSegue o Link do Script:\r\nhttps:drive.google.com/file/d/1oKCj_IW6RCj8-xYts1jpZIVG3fhaVgDZ/view?usp=sharing'),
(5, '163293435481495', '-', '-', '-', 'Script IPTV Entregue:\r\nObrigado por escolher a M2 Sites\r\n\r\nLink para Download:\r\nhttps:drive.google.com/file/d/1sv8q49fo2fOF1eO_CWYSQGgYrysscCRl/view?usp=sharing'),
(6, '163312149445469', '-', '-', '-', 'Seu Script Chegou!!!!\r\nScript Site Rádio em PHP Responsivo\r\n\r\nLink para download:\r\nhttps:drive.google.com/file/d/1qujTKIgdyFJoDY_t-2av7dA_mUx9_AvC/view?usp=sharing\r\n\r\nObrigado pela compra!'),
(7, '163657491612557', '-', '-', '-', 'Ta aqui o teu arquivo digital\r\n\r\nhttps://m2sites.com.br/arquivoficticio.zip');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_estoque`
--

CREATE TABLE `produto_estoque` (
  `id` int(11) NOT NULL,
  `registro` varchar(100) DEFAULT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `tamanho` varchar(255) DEFAULT NULL,
  `cor` varchar(255) DEFAULT NULL,
  `variacao` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_estoque`
--

INSERT INTO `produto_estoque` (`id`, `registro`, `produto`, `tamanho`, `cor`, `variacao`, `quantidade`) VALUES
(2, '161719314835328', '161719301811507', '161719309820536', '161719287792587', '-', 32);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_estoque_registro`
--

CREATE TABLE `produto_estoque_registro` (
  `id` int(11) NOT NULL,
  `registro` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `quant` int(11) NOT NULL,
  `quant_anterior` int(11) NOT NULL,
  `quant_final` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_estoque_registro`
--

INSERT INTO `produto_estoque_registro` (`id`, `registro`, `data`, `quant`, `quant_anterior`, `quant_final`, `descricao`) VALUES
(2, '161719314835328', 1617193148, 2, 0, 2, 'Registro Manual - Adicionado 2 item(s)'),
(3, '161719314835328', 1617193152, 31, 2, 33, 'Registro Manual - Adicionado 31 item(s)'),
(4, '161719314835328', 1617196742, 1, 33, 32, 'Registro Automatico - Removido 1 item(s) - Reserva Pedido 22 ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_gabaritos`
--

CREATE TABLE `produto_gabaritos` (
  `id` int(11) NOT NULL,
  `produto` varchar(100) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `ico` varchar(255) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_grupos`
--

CREATE TABLE `produto_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `formato` int(11) DEFAULT 1,
  `mostrar_categorias` int(11) DEFAULT 0,
  `mostrar_banners` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT 3,
  `itens_por_pagina` int(11) DEFAULT 8,
  `max_itens` int(11) DEFAULT 0,
  `marcados` int(11) DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_grupos`
--

INSERT INTO `produto_grupos` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `formato`, `mostrar_categorias`, `mostrar_banners`, `itens_por_linha`, `itens_por_pagina`, `max_itens`, `marcados`, `categoria`, `botao_codigo`, `classes`, `classes_img`) VALUES
(7, '163293361147298', '<div align=\"left\"><span style=\"font-family: \" exol2=\"\" regular\";=\"\" font-size:=\"\" 42px;\"=\"\"><span style=\"font-size: 46px; font-family: \" exol2=\"\" regular\";\"=\"\"><span style=\"font-family: &quot;Exol2 Regular&quot;;\">Produtos </span><b><span style=\"font-family: &quot;Exol2 Bold&quot;;\">Destaques</span></b></span><b><span style=\"font-size: 42px; font-family: \" exol2=\"\" regular\";\"=\"\" bold\";\"=\"\"><span style=\"font-size: 46px; font-family: \" exol2=\"\" bold\";\"=\"\" regular\";\"=\"\"></span></span></b><span style=\"font-size: 42px; font-family: \" exol2=\"\" regular\";\"=\"\" bold\";\"=\"\"><span style=\"font-size: 14px; font-family: \" montserrat\";\"=\"\"></span></span></span><br></div>', 1, 2, 0, 0, 4, 6, 0, 1, '0', '160701999128854', '', ''),
(8, '163344602686281', 'Lista', 0, 1, 1, 1, 3, 10, 0, 0, '0', '160701999128854', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_grupos_sel`
--

CREATE TABLE `produto_grupos_sel` (
  `id` int(11) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `produto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_grupos_sel`
--

INSERT INTO `produto_grupos_sel` (`id`, `grupo`, `produto`) VALUES
(1, '159768903795306', '161719265231590'),
(2, '159768903795306', '161719301811507'),
(3, '159768903795306', '161719323585483'),
(4, '159768903795306', '161719334369552'),
(5, '159768903795306', '161719399576177'),
(6, '159768903795306', '161719408581817'),
(7, '159768903795306', '161719413270352'),
(8, '161719428931210', '161719446823911'),
(9, '161719428931210', '161719456359332'),
(10, '159768903795306', '161719456359332'),
(11, '161719428931210', '161719461163444'),
(12, '159768903795306', '163036451579209'),
(13, '163293361147298', '163293435481495'),
(14, '163293361147298', '163293684996986'),
(15, '163293361147298', '163293874682633'),
(16, '163293361147298', '163309894783938'),
(17, '163293361147298', '163312149445469'),
(18, '163293361147298', '163553395426081'),
(19, '163344602686281', '163553395426081'),
(20, '163293361147298', '163553904516940'),
(21, '163344602686281', '163553904516940');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_imagem`
--

CREATE TABLE `produto_imagem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_imagem`
--

INSERT INTO `produto_imagem` (`id`, `codigo`, `imagem`) VALUES
(35, '163553904516940', 'Site-construçao-gerenciador-[29-10-21][17-50-14].jpg'),
(39, '163657491612557', '1-[10-11-21][17-11-38].jpg'),
(27, '163293435481495', 'img1-[01-10-21][13-00-17].jpg'),
(28, '163312149445469', 'img1-[01-10-21][17-52-54].jpg'),
(37, '163553904516940', 'site-construcao-[29-10-21][21-22-54].jpg'),
(23, '163309894783938', 'img1-[01-10-21][11-39-16].jpg'),
(24, '163309894783938', 'img2-[01-10-21][11-39-18].jpg'),
(38, '163553904516940', 'Site-Construçao-Monitor-[29-10-21][21-23-16].jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_imagem_ordem`
--

CREATE TABLE `produto_imagem_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_imagem_ordem`
--

INSERT INTO `produto_imagem_ordem` (`id`, `codigo`, `data`) VALUES
(1, '161719265231590', '1'),
(2, '161719265231590', '1,2'),
(3, '161719265231590', '1,2,3'),
(4, '161719265231590', '1,2,3,4'),
(5, '161719301811507', '5'),
(6, '161719323585483', '6'),
(7, '161719334369552', '7'),
(8, '161719399576177', '8'),
(9, '161719408581817', '9'),
(10, '161719413270352', '10'),
(11, '161719446823911', '11'),
(12, '161719456359332', '12'),
(13, '161719461163444', '13'),
(14, '161719467410311', '14'),
(15, '161719470243472', '15'),
(16, '161719473583291', '16'),
(17, '163293435481495', '17'),
(18, '163293435481495', '17,18'),
(19, '163293684996986', '19'),
(20, '163293435481495', '17,18,20'),
(21, '163293435481495', '20,18'),
(22, '163293435481495', '20,18,21'),
(23, '163293435481495', '21,20,18'),
(24, '163293874682633', '22'),
(25, '163309894783938', '23'),
(26, '163309894783938', '23,24'),
(27, '163293874682633', '22,25'),
(28, '163293874682633', '22,25,26'),
(29, '163293435481495', '21,20,18,27'),
(30, '163312149445469', '28'),
(31, '163553395426081', '29'),
(32, '163553395426081', '29,30'),
(33, '163553395426081', '29,30,31'),
(34, '163553395426081', '29,30,31,32'),
(35, '163553395426081', '31,30,32'),
(36, '163553904516940', '33'),
(37, '163553904516940', '33,34'),
(38, '163553904516940', '33,34,35'),
(39, '163553904516940', '34,33,35'),
(40, '163553904516940', '34,33,35,36'),
(41, '163553904516940', '36,33,35'),
(42, '163553904516940', '36,33,35,37'),
(43, '163553904516940', '37,33,35'),
(44, '163553904516940', '37,33,35,38'),
(45, '163553904516940', '37,38,35'),
(46, '163657491612557', '39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_marcadagua`
--

CREATE TABLE `produto_marcadagua` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_marcadagua`
--

INSERT INTO `produto_marcadagua` (`id`, `codigo`) VALUES
(1, '159768899127066');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_modelos`
--

CREATE TABLE `produto_modelos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_modelos_categorias`
--

CREATE TABLE `produto_modelos_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_modelos_categorias`
--

INSERT INTO `produto_modelos_categorias` (`id`, `codigo`, `titulo`) VALUES
(10, '159856265246227', 'Tipo modelo 1'),
(11, '159856265445598', 'Tipo modelo 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_modelos_sel`
--

CREATE TABLE `produto_modelos_sel` (
  `id` int(11) NOT NULL,
  `produto_codigo` varchar(100) DEFAULT NULL,
  `layout_codigo` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `produto_modelos_sel`
--

INSERT INTO `produto_modelos_sel` (`id`, `produto_codigo`, `layout_codigo`) VALUES
(1, '159856166639817', '159856267135571'),
(2, '159856166639817', '159856270794638');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_tamanho`
--

CREATE TABLE `produto_tamanho` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_tamanho_sel`
--

CREATE TABLE `produto_tamanho_sel` (
  `id` int(11) NOT NULL,
  `produto_codigo` varchar(100) DEFAULT NULL,
  `tamanho_codigo` varchar(100) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_variacao`
--

CREATE TABLE `produto_variacao` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_variacao_sel`
--

CREATE TABLE `produto_variacao_sel` (
  `id` int(11) NOT NULL,
  `produto_codigo` varchar(100) DEFAULT NULL,
  `variacao_codigo` varchar(100) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rastreamento`
--

CREATE TABLE `rastreamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT 0,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `imagem_fundo` varchar(255) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `botao_titulo` varchar(255) DEFAULT NULL,
  `imagem_fundo_tipo` int(11) DEFAULT 0,
  `botao_codigo` varchar(100) DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rastreamento_objetos`
--

CREATE TABLE `rastreamento_objetos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `origem` varchar(255) DEFAULT NULL,
  `destino` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `volumes` int(11) DEFAULT NULL,
  `anexo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rastreamento_objetos_itens`
--

CREATE TABLE `rastreamento_objetos_itens` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `rede_social`
--

CREATE TABLE `rede_social` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` char(200) DEFAULT NULL,
  `endereco` text DEFAULT NULL,
  `imagem` varchar(240) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `rede_social`
--

INSERT INTO `rede_social` (`id`, `codigo`, `titulo`, `endereco`, `imagem`) VALUES
(29, '161712970394804', 'Facebook', 'https://www.facebook.com/fabricadosite', 'face-[06-03-19][15-17-26]-[30-03-21][15-41-53].png'),
(30, '161712973171920', 'Instagram', 'https://instagram.com/fabricadosite', 'insta-[06-03-19][15-15-43]-[30-03-21][15-42-16].png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `rede_social_ordem`
--

CREATE TABLE `rede_social_ordem` (
  `id` int(11) NOT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `rede_social_ordem`
--

INSERT INTO `rede_social_ordem` (`id`, `data`) VALUES
(1, '2'),
(2, '2,3'),
(3, '3,2'),
(4, '2,3'),
(5, '2,3,4'),
(6, '4,3'),
(7, '3,4'),
(8, '3,4,5'),
(9, '3,4,5,6'),
(10, '3,4,5,6,7'),
(11, '3,4,5,6,7,8'),
(12, '3,4,5,6,7,8,9'),
(13, '3,4,5,6,7,8,9,10'),
(14, '3,4,5,6,7,8,9,10,11'),
(15, '3,4,5,6,7,8,9,10,11,12'),
(16, '3,4,5,6,7,8,9,10,11,12,13'),
(17, '3,4,5,6,7,8,9,10,11,12,13,14'),
(18, '9,11,12,14,13'),
(19, '11,12,9,14,13'),
(20, '12,11,9,14,13'),
(21, '11,12,9,14,13'),
(22, '12,11,9,14,13'),
(23, '11,12,9,14,13'),
(24, '11,12,9,14,13,15'),
(25, '9,11,12'),
(26, '9,12,11'),
(27, '9,12,11,16'),
(28, '9,12,11,16,17'),
(29, '9,12,11,16,17,18'),
(30, '18'),
(31, '18,19'),
(32, '19,18'),
(33, '18,19'),
(34, '18,19,20'),
(35, '18,19,20,21'),
(36, '21,20'),
(37, '20,21'),
(38, '20,21,22'),
(39, '20,21,22,23'),
(40, '20,21,22,23,24'),
(41, '20,21,22,23,24,0'),
(42, '20,21,22,23,24,0,0'),
(43, '20,21,22,23,24,0,0,25'),
(44, '20,21,22,23,24,0,0,25,26'),
(45, '20,21,22,23,24,0,0,25,26,27'),
(46, '20,21,22,23,24,0,0,25,26,27,28'),
(47, '27,26'),
(48, '27,26,29'),
(49, '27,26,29,30'),
(50, '27,26,29,30,31'),
(51, '27,26,29,30,31,32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `revistajornal`
--

CREATE TABLE `revistajornal` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `edicao` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `revistajornal_formatos`
--

CREATE TABLE `revistajornal_formatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `pequena_largura` int(11) DEFAULT NULL,
  `pequena_altura` int(11) DEFAULT NULL,
  `grande_largura` int(11) NOT NULL,
  `grande_altura` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `revistajornal_grupos`
--

CREATE TABLE `revistajornal_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `revistajornal_grupos_sel`
--

CREATE TABLE `revistajornal_grupos_sel` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `revistajornal_grupos_sel`
--

INSERT INTO `revistajornal_grupos_sel` (`id`, `codigo`, `grupo`) VALUES
(2, '159466742883576', '159464169932659'),
(5, '159466742883576', '159466720342350'),
(6, '159682231337174', '159682235286345'),
(7, '159682461859114', '159682235286345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `revistajornal_imagem`
--

CREATE TABLE `revistajornal_imagem` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `pagina` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` char(255) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos_grupos`
--

CREATE TABLE `servicos_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos_ordem`
--

CREATE TABLE `servicos_ordem` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `servicos_ordem`
--

INSERT INTO `servicos_ordem` (`id`, `codigo`, `data`) VALUES
(8, '159673552124544', '119,120,121'),
(7, '159673552124544', '119,120'),
(6, '159673552124544', '119'),
(9, '163288271640454', '122');

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `previa` text DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Despejando dados para a tabela `videos`
--

INSERT INTO `videos` (`id`, `codigo`, `categoria`, `titulo`, `previa`, `conteudo`, `ordem`) VALUES
(32, '159674475895915', '159467709398603', 'Video 3', '', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5aB1GuB9L7o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos_categorias`
--

CREATE TABLE `videos_categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estrutura para tabela `videos_grupos`
--

CREATE TABLE `videos_grupos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT 1,
  `itens_por_linha` int(11) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `mostrar_categorias` int(11) DEFAULT 1,
  `mostrar_titulo_video` int(11) DEFAULT 1,
  `tipo_menu` int(11) DEFAULT 0,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `widgets`
--

CREATE TABLE `widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` char(100) DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `mostrar_titulo` int(11) DEFAULT NULL,
  `conteudo` text DEFAULT NULL,
  `enquadramento` int(11) DEFAULT 1,
  `classes` text DEFAULT NULL,
  `classes_img` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `widgets`
--

INSERT INTO `widgets` (`id`, `codigo`, `titulo`, `mostrar_titulo`, `conteudo`, `enquadramento`, `classes`, `classes_img`) VALUES
(1009, '164340220520837', 'Mapa', 0, 'Jmx0O2lmcmFtZSBzcmM9JnF1b3Q7aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS9tYXBzL2VtYmVkP3BiPSExbTE4ITFtMTIhMW0zITFkMTI1ODMzLjIyODgzMzk3Mzg5ITJkLTM1LjkzMDgxMDIyMjgzMjA1ITNkLTkuNzQxNjIwMDEwNzM3MzQhMm0zITFmMCEyZjAhM2YwITNtMiExaTEwMjQhMmk3NjghNGYxMy4xITNtMyExbTIhMXMweDcwMTUzOTc5ZTVlM2I5ZCUzQTB4MjA5M2YwYzEwYzE5N2ZkOCEyc01hbC4lMjBEZW9kb3JvJTJDJTIwQUwlMkMlMjA1NzE2MC0wMDAhNWUwITNtMiExc3B0LUJSITJzYnIhNHYxNjQzNDAyMTk3MTc0ITVtMiExc3B0LUJSITJzYnImcXVvdDsgd2lkdGg9JnF1b3Q7NjAwJnF1b3Q7IGhlaWdodD0mcXVvdDs0NTAmcXVvdDsgc3R5bGU9JnF1b3Q7Ym9yZGVyOjA7JnF1b3Q7IGFsbG93ZnVsbHNjcmVlbj0mcXVvdDsmcXVvdDsgbG9hZGluZz0mcXVvdDtsYXp5JnF1b3Q7Jmd0OyZsdDsvaWZyYW1lJmd0Ow==', 0, '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acordeon`
--
ALTER TABLE `acordeon`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `acordeon_grupos`
--
ALTER TABLE `acordeon_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `acordeon_ordem`
--
ALTER TABLE `acordeon_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm_config`
--
ALTER TABLE `adm_config`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm_setores`
--
ALTER TABLE `adm_setores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm_setores_ordem`
--
ALTER TABLE `adm_setores_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm_setores_perfil`
--
ALTER TABLE `adm_setores_perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adm_setores_usuario`
--
ALTER TABLE `adm_setores_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_1` (`setor`,`usuario`);

--
-- Índices de tabela `adm_usuario`
--
ALTER TABLE `adm_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `audios_categorias`
--
ALTER TABLE `audios_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `audios_grupos`
--
ALTER TABLE `audios_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `balcoes`
--
ALTER TABLE `balcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners_grupos`
--
ALTER TABLE `banners_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banners_ordem`
--
ALTER TABLE `banners_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_comentarios`
--
ALTER TABLE `cadastro_comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_detalhes`
--
ALTER TABLE `cadastro_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_email`
--
ALTER TABLE `cadastro_email`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_email_grupos`
--
ALTER TABLE `cadastro_email_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_fone`
--
ALTER TABLE `cadastro_fone`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_fone_grupos`
--
ALTER TABLE `cadastro_fone_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_grupos`
--
ALTER TABLE `cadastro_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `caracteristicas_grupos`
--
ALTER TABLE `caracteristicas_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `caracteristicas_ordem`
--
ALTER TABLE `caracteristicas_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Cidade_estado` (`estado`);

--
-- Índices de tabela `classificados`
--
ALTER TABLE `classificados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_bairros`
--
ALTER TABLE `classificados_bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_categorias`
--
ALTER TABLE `classificados_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_cidades`
--
ALTER TABLE `classificados_cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_detalhes`
--
ALTER TABLE `classificados_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_favoritos`
--
ALTER TABLE `classificados_favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_grupos`
--
ALTER TABLE `classificados_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_grupos_imagens`
--
ALTER TABLE `classificados_grupos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_grupos_sel`
--
ALTER TABLE `classificados_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_imagem`
--
ALTER TABLE `classificados_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_imagem_ordem`
--
ALTER TABLE `classificados_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_marcadagua`
--
ALTER TABLE `classificados_marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_opcoes`
--
ALTER TABLE `classificados_opcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_opcoes_marcadores`
--
ALTER TABLE `classificados_opcoes_marcadores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_opcoes_sel`
--
ALTER TABLE `classificados_opcoes_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_pedidos`
--
ALTER TABLE `classificados_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_pedidos_utilizacoes`
--
ALTER TABLE `classificados_pedidos_utilizacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_planos`
--
ALTER TABLE `classificados_planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `classificados_videos`
--
ALTER TABLE `classificados_videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contador_grupos`
--
ALTER TABLE `contador_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contador_ordem`
--
ALTER TABLE `contador_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato_grupos`
--
ALTER TABLE `contato_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato_ordem`
--
ALTER TABLE `contato_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conteudos`
--
ALTER TABLE `conteudos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conteudos_blocos`
--
ALTER TABLE `conteudos_blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cupom`
--
ALTER TABLE `cupom`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cupom_lista`
--
ALTER TABLE `cupom_lista`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depoimentos_grupos`
--
ALTER TABLE `depoimentos_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaques_grupos`
--
ALTER TABLE `destaques_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaques_ordem`
--
ALTER TABLE `destaques_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `duvidas_grupos`
--
ALTER TABLE `duvidas_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `duvidas_ordem`
--
ALTER TABLE `duvidas_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enquete`
--
ALTER TABLE `enquete`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enquete_resposta`
--
ALTER TABLE `enquete_resposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enquete_voto`
--
ALTER TABLE `enquete_voto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipe_grupos`
--
ALTER TABLE `equipe_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipe_links`
--
ALTER TABLE `equipe_links`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipe_ordem`
--
ALTER TABLE `equipe_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais_grupos`
--
ALTER TABLE `filiais_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais_imagem`
--
ALTER TABLE `filiais_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais_imagem_legenda`
--
ALTER TABLE `filiais_imagem_legenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais_imagem_ordem`
--
ALTER TABLE `filiais_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filiais_ordem`
--
ALTER TABLE `filiais_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_categorias`
--
ALTER TABLE `fotos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_grupos`
--
ALTER TABLE `fotos_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_imagem`
--
ALTER TABLE `fotos_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_imagem_legenda`
--
ALTER TABLE `fotos_imagem_legenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_imagem_ordem`
--
ALTER TABLE `fotos_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_marcadagua`
--
ALTER TABLE `fotos_marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_ordem`
--
ALTER TABLE `fotos_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `frete`
--
ALTER TABLE `frete`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem`
--
ALTER TABLE `garagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_categorias`
--
ALTER TABLE `garagem_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_combustivel`
--
ALTER TABLE `garagem_combustivel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_cores`
--
ALTER TABLE `garagem_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_detalhes`
--
ALTER TABLE `garagem_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_grupos`
--
ALTER TABLE `garagem_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_grupos_imagens`
--
ALTER TABLE `garagem_grupos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_grupos_sel`
--
ALTER TABLE `garagem_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_imagem`
--
ALTER TABLE `garagem_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_imagem_legenda`
--
ALTER TABLE `garagem_imagem_legenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_imagem_ordem`
--
ALTER TABLE `garagem_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_marcas`
--
ALTER TABLE `garagem_marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_modelos`
--
ALTER TABLE `garagem_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_motor`
--
ALTER TABLE `garagem_motor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_opcionais`
--
ALTER TABLE `garagem_opcionais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_opcionais_sel`
--
ALTER TABLE `garagem_opcionais_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `garagem_transmissao`
--
ALTER TABLE `garagem_transmissao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imagem_enviadas`
--
ALTER TABLE `imagem_enviadas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_bairros`
--
ALTER TABLE `imoveis_bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_categorias`
--
ALTER TABLE `imoveis_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_cidades`
--
ALTER TABLE `imoveis_cidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_detalhes`
--
ALTER TABLE `imoveis_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_favoritos`
--
ALTER TABLE `imoveis_favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_grupos`
--
ALTER TABLE `imoveis_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_grupos_imagens`
--
ALTER TABLE `imoveis_grupos_imagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_grupos_sel`
--
ALTER TABLE `imoveis_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_imagem`
--
ALTER TABLE `imoveis_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_imagem_legenda`
--
ALTER TABLE `imoveis_imagem_legenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_imagem_ordem`
--
ALTER TABLE `imoveis_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_marcadagua`
--
ALTER TABLE `imoveis_marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_opcoes`
--
ALTER TABLE `imoveis_opcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_opcoes_sel`
--
ALTER TABLE `imoveis_opcoes_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_pedidos`
--
ALTER TABLE `imoveis_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_pedidos_utilizacoes`
--
ALTER TABLE `imoveis_pedidos_utilizacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_planos`
--
ALTER TABLE `imoveis_planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis_tipos`
--
ALTER TABLE `imoveis_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_blocos`
--
ALTER TABLE `layout_blocos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_blocos_ordem`
--
ALTER TABLE `layout_blocos_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_botoes`
--
ALTER TABLE `layout_botoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_cores`
--
ALTER TABLE `layout_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_cores_sel`
--
ALTER TABLE `layout_cores_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_css`
--
ALTER TABLE `layout_css`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_fontes`
--
ALTER TABLE `layout_fontes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_itens`
--
ALTER TABLE `layout_itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_itens_cores`
--
ALTER TABLE `layout_itens_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_itens_cores_sel`
--
ALTER TABLE `layout_itens_cores_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_menu`
--
ALTER TABLE `layout_menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_menu_ordem`
--
ALTER TABLE `layout_menu_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_menu_rodape`
--
ALTER TABLE `layout_menu_rodape`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_menu_rodape_ordem`
--
ALTER TABLE `layout_menu_rodape_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_paginas`
--
ALTER TABLE `layout_paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_rodapes`
--
ALTER TABLE `layout_rodapes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_rodapes_cores`
--
ALTER TABLE `layout_rodapes_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_rodapes_cores_sel`
--
ALTER TABLE `layout_rodapes_cores_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_rodapes_modelos`
--
ALTER TABLE `layout_rodapes_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos`
--
ALTER TABLE `layout_topos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_botoes`
--
ALTER TABLE `layout_topos_botoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_botoes_ordem`
--
ALTER TABLE `layout_topos_botoes_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_cores`
--
ALTER TABLE `layout_topos_cores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_cores_sel`
--
ALTER TABLE `layout_topos_cores_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_icones`
--
ALTER TABLE `layout_topos_icones`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_icones_ordem`
--
ALTER TABLE `layout_topos_icones_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `layout_topos_modelos`
--
ALTER TABLE `layout_topos_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `marcadagua`
--
ALTER TABLE `marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_autores`
--
ALTER TABLE `noticia_autores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_categorias`
--
ALTER TABLE `noticia_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_destaque`
--
ALTER TABLE `noticia_destaque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_detalhes`
--
ALTER TABLE `noticia_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_grupos`
--
ALTER TABLE `noticia_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_grupos_sel`
--
ALTER TABLE `noticia_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_imagem`
--
ALTER TABLE `noticia_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_imagem_legenda`
--
ALTER TABLE `noticia_imagem_legenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_imagem_ordem`
--
ALTER TABLE `noticia_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia_marcadagua`
--
ALTER TABLE `noticia_marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `parceiros_grupos`
--
ALTER TABLE `parceiros_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `parceiros_ordem`
--
ALTER TABLE `parceiros_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedido_loja`
--
ALTER TABLE `pedido_loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedido_loja_carrinho`
--
ALTER TABLE `pedido_loja_carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedido_loja_mensagens`
--
ALTER TABLE `pedido_loja_mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedido_loja_status`
--
ALTER TABLE `pedido_loja_status`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos_grupos`
--
ALTER TABLE `planos_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos_itens`
--
ALTER TABLE `planos_itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos_ordem`
--
ALTER TABLE `planos_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_acabamentos`
--
ALTER TABLE `produto_acabamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_categoria_ordem`
--
ALTER TABLE `produto_categoria_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_categoria_sel`
--
ALTER TABLE `produto_categoria_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_cor`
--
ALTER TABLE `produto_cor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_cor_sel`
--
ALTER TABLE `produto_cor_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_detalhes`
--
ALTER TABLE `produto_detalhes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_entrega_auto`
--
ALTER TABLE `produto_entrega_auto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_estoque`
--
ALTER TABLE `produto_estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_estoque_registro`
--
ALTER TABLE `produto_estoque_registro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_gabaritos`
--
ALTER TABLE `produto_gabaritos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_grupos`
--
ALTER TABLE `produto_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_grupos_sel`
--
ALTER TABLE `produto_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_imagem`
--
ALTER TABLE `produto_imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_imagem_ordem`
--
ALTER TABLE `produto_imagem_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_marcadagua`
--
ALTER TABLE `produto_marcadagua`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_modelos`
--
ALTER TABLE `produto_modelos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_modelos_categorias`
--
ALTER TABLE `produto_modelos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_modelos_sel`
--
ALTER TABLE `produto_modelos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_tamanho`
--
ALTER TABLE `produto_tamanho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_tamanho_sel`
--
ALTER TABLE `produto_tamanho_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_variacao`
--
ALTER TABLE `produto_variacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto_variacao_sel`
--
ALTER TABLE `produto_variacao_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rastreamento`
--
ALTER TABLE `rastreamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rastreamento_objetos`
--
ALTER TABLE `rastreamento_objetos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rastreamento_objetos_itens`
--
ALTER TABLE `rastreamento_objetos_itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rede_social`
--
ALTER TABLE `rede_social`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `rede_social_ordem`
--
ALTER TABLE `rede_social_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `revistajornal`
--
ALTER TABLE `revistajornal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `revistajornal_formatos`
--
ALTER TABLE `revistajornal_formatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `revistajornal_grupos`
--
ALTER TABLE `revistajornal_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `revistajornal_grupos_sel`
--
ALTER TABLE `revistajornal_grupos_sel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `revistajornal_imagem`
--
ALTER TABLE `revistajornal_imagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_1` (`codigo`,`pagina`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servicos_grupos`
--
ALTER TABLE `servicos_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servicos_ordem`
--
ALTER TABLE `servicos_ordem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos_categorias`
--
ALTER TABLE `videos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `videos_grupos`
--
ALTER TABLE `videos_grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acordeon`
--
ALTER TABLE `acordeon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de tabela `acordeon_grupos`
--
ALTER TABLE `acordeon_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `acordeon_ordem`
--
ALTER TABLE `acordeon_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `adm_config`
--
ALTER TABLE `adm_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `adm_setores`
--
ALTER TABLE `adm_setores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de tabela `adm_setores_ordem`
--
ALTER TABLE `adm_setores_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT de tabela `adm_setores_perfil`
--
ALTER TABLE `adm_setores_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT de tabela `adm_setores_usuario`
--
ALTER TABLE `adm_setores_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=602;

--
-- AUTO_INCREMENT de tabela `adm_usuario`
--
ALTER TABLE `adm_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `audios_categorias`
--
ALTER TABLE `audios_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `audios_grupos`
--
ALTER TABLE `audios_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `balcoes`
--
ALTER TABLE `balcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT de tabela `banners_grupos`
--
ALTER TABLE `banners_grupos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `banners_ordem`
--
ALTER TABLE `banners_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `cadastro_comentarios`
--
ALTER TABLE `cadastro_comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cadastro_detalhes`
--
ALTER TABLE `cadastro_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastro_email`
--
ALTER TABLE `cadastro_email`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cadastro_email_grupos`
--
ALTER TABLE `cadastro_email_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cadastro_fone`
--
ALTER TABLE `cadastro_fone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cadastro_fone_grupos`
--
ALTER TABLE `cadastro_fone_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cadastro_grupos`
--
ALTER TABLE `cadastro_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT de tabela `caracteristicas_grupos`
--
ALTER TABLE `caracteristicas_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `caracteristicas_ordem`
--
ALTER TABLE `caracteristicas_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5565;

--
-- AUTO_INCREMENT de tabela `classificados`
--
ALTER TABLE `classificados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `classificados_bairros`
--
ALTER TABLE `classificados_bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `classificados_categorias`
--
ALTER TABLE `classificados_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1139;

--
-- AUTO_INCREMENT de tabela `classificados_cidades`
--
ALTER TABLE `classificados_cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7499;

--
-- AUTO_INCREMENT de tabela `classificados_detalhes`
--
ALTER TABLE `classificados_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `classificados_favoritos`
--
ALTER TABLE `classificados_favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `classificados_grupos`
--
ALTER TABLE `classificados_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `classificados_grupos_imagens`
--
ALTER TABLE `classificados_grupos_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `classificados_grupos_sel`
--
ALTER TABLE `classificados_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `classificados_imagem`
--
ALTER TABLE `classificados_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT de tabela `classificados_imagem_ordem`
--
ALTER TABLE `classificados_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT de tabela `classificados_marcadagua`
--
ALTER TABLE `classificados_marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `classificados_opcoes`
--
ALTER TABLE `classificados_opcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `classificados_opcoes_marcadores`
--
ALTER TABLE `classificados_opcoes_marcadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `classificados_opcoes_sel`
--
ALTER TABLE `classificados_opcoes_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `classificados_pedidos`
--
ALTER TABLE `classificados_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `classificados_pedidos_utilizacoes`
--
ALTER TABLE `classificados_pedidos_utilizacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `classificados_planos`
--
ALTER TABLE `classificados_planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `classificados_videos`
--
ALTER TABLE `classificados_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de tabela `contador_grupos`
--
ALTER TABLE `contador_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contador_ordem`
--
ALTER TABLE `contador_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de tabela `contato_grupos`
--
ALTER TABLE `contato_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `contato_ordem`
--
ALTER TABLE `contato_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `conteudos`
--
ALTER TABLE `conteudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `conteudos_blocos`
--
ALTER TABLE `conteudos_blocos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT de tabela `cupom`
--
ALTER TABLE `cupom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `cupom_lista`
--
ALTER TABLE `cupom_lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT de tabela `depoimentos`
--
ALTER TABLE `depoimentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `depoimentos_grupos`
--
ALTER TABLE `depoimentos_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `destaques_grupos`
--
ALTER TABLE `destaques_grupos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `destaques_ordem`
--
ALTER TABLE `destaques_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de tabela `duvidas_grupos`
--
ALTER TABLE `duvidas_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `duvidas_ordem`
--
ALTER TABLE `duvidas_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `enquete`
--
ALTER TABLE `enquete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `enquete_resposta`
--
ALTER TABLE `enquete_resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `enquete_voto`
--
ALTER TABLE `enquete_voto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `equipe_grupos`
--
ALTER TABLE `equipe_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipe_links`
--
ALTER TABLE `equipe_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `equipe_ordem`
--
ALTER TABLE `equipe_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `filiais_grupos`
--
ALTER TABLE `filiais_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filiais_imagem`
--
ALTER TABLE `filiais_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `filiais_imagem_legenda`
--
ALTER TABLE `filiais_imagem_legenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `filiais_imagem_ordem`
--
ALTER TABLE `filiais_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `filiais_ordem`
--
ALTER TABLE `filiais_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `fotos_categorias`
--
ALTER TABLE `fotos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `fotos_grupos`
--
ALTER TABLE `fotos_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos_imagem`
--
ALTER TABLE `fotos_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `fotos_imagem_legenda`
--
ALTER TABLE `fotos_imagem_legenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fotos_imagem_ordem`
--
ALTER TABLE `fotos_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `fotos_marcadagua`
--
ALTER TABLE `fotos_marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fotos_ordem`
--
ALTER TABLE `fotos_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `frete`
--
ALTER TABLE `frete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `garagem`
--
ALTER TABLE `garagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de tabela `garagem_categorias`
--
ALTER TABLE `garagem_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `garagem_combustivel`
--
ALTER TABLE `garagem_combustivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `garagem_cores`
--
ALTER TABLE `garagem_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `garagem_detalhes`
--
ALTER TABLE `garagem_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `garagem_grupos`
--
ALTER TABLE `garagem_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `garagem_grupos_imagens`
--
ALTER TABLE `garagem_grupos_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `garagem_grupos_sel`
--
ALTER TABLE `garagem_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `garagem_imagem`
--
ALTER TABLE `garagem_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=999;

--
-- AUTO_INCREMENT de tabela `garagem_imagem_legenda`
--
ALTER TABLE `garagem_imagem_legenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `garagem_imagem_ordem`
--
ALTER TABLE `garagem_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `garagem_marcas`
--
ALTER TABLE `garagem_marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `garagem_modelos`
--
ALTER TABLE `garagem_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `garagem_motor`
--
ALTER TABLE `garagem_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `garagem_opcionais`
--
ALTER TABLE `garagem_opcionais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `garagem_opcionais_sel`
--
ALTER TABLE `garagem_opcionais_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=627;

--
-- AUTO_INCREMENT de tabela `garagem_transmissao`
--
ALTER TABLE `garagem_transmissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `imagem_enviadas`
--
ALTER TABLE `imagem_enviadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT de tabela `imoveis_bairros`
--
ALTER TABLE `imoveis_bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `imoveis_categorias`
--
ALTER TABLE `imoveis_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1134;

--
-- AUTO_INCREMENT de tabela `imoveis_cidades`
--
ALTER TABLE `imoveis_cidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7495;

--
-- AUTO_INCREMENT de tabela `imoveis_detalhes`
--
ALTER TABLE `imoveis_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imoveis_favoritos`
--
ALTER TABLE `imoveis_favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `imoveis_grupos`
--
ALTER TABLE `imoveis_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imoveis_grupos_imagens`
--
ALTER TABLE `imoveis_grupos_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `imoveis_grupos_sel`
--
ALTER TABLE `imoveis_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imoveis_imagem`
--
ALTER TABLE `imoveis_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT de tabela `imoveis_imagem_legenda`
--
ALTER TABLE `imoveis_imagem_legenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `imoveis_imagem_ordem`
--
ALTER TABLE `imoveis_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT de tabela `imoveis_marcadagua`
--
ALTER TABLE `imoveis_marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imoveis_opcoes`
--
ALTER TABLE `imoveis_opcoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `imoveis_opcoes_sel`
--
ALTER TABLE `imoveis_opcoes_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `imoveis_pedidos`
--
ALTER TABLE `imoveis_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `imoveis_pedidos_utilizacoes`
--
ALTER TABLE `imoveis_pedidos_utilizacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `imoveis_planos`
--
ALTER TABLE `imoveis_planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imoveis_tipos`
--
ALTER TABLE `imoveis_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8165;

--
-- AUTO_INCREMENT de tabela `layout_blocos`
--
ALTER TABLE `layout_blocos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de tabela `layout_blocos_ordem`
--
ALTER TABLE `layout_blocos_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT de tabela `layout_botoes`
--
ALTER TABLE `layout_botoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `layout_cores`
--
ALTER TABLE `layout_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `layout_cores_sel`
--
ALTER TABLE `layout_cores_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT de tabela `layout_css`
--
ALTER TABLE `layout_css`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `layout_fontes`
--
ALTER TABLE `layout_fontes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `layout_itens`
--
ALTER TABLE `layout_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de tabela `layout_itens_cores`
--
ALTER TABLE `layout_itens_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT de tabela `layout_itens_cores_sel`
--
ALTER TABLE `layout_itens_cores_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1341;

--
-- AUTO_INCREMENT de tabela `layout_menu`
--
ALTER TABLE `layout_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de tabela `layout_menu_ordem`
--
ALTER TABLE `layout_menu_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT de tabela `layout_menu_rodape`
--
ALTER TABLE `layout_menu_rodape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `layout_menu_rodape_ordem`
--
ALTER TABLE `layout_menu_rodape_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `layout_paginas`
--
ALTER TABLE `layout_paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `layout_rodapes`
--
ALTER TABLE `layout_rodapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `layout_rodapes_cores`
--
ALTER TABLE `layout_rodapes_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `layout_rodapes_cores_sel`
--
ALTER TABLE `layout_rodapes_cores_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `layout_rodapes_modelos`
--
ALTER TABLE `layout_rodapes_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `layout_topos`
--
ALTER TABLE `layout_topos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `layout_topos_botoes`
--
ALTER TABLE `layout_topos_botoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `layout_topos_botoes_ordem`
--
ALTER TABLE `layout_topos_botoes_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `layout_topos_cores`
--
ALTER TABLE `layout_topos_cores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT de tabela `layout_topos_cores_sel`
--
ALTER TABLE `layout_topos_cores_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=915;

--
-- AUTO_INCREMENT de tabela `layout_topos_icones`
--
ALTER TABLE `layout_topos_icones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `layout_topos_icones_ordem`
--
ALTER TABLE `layout_topos_icones_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `layout_topos_modelos`
--
ALTER TABLE `layout_topos_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `marcadagua`
--
ALTER TABLE `marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `noticia_autores`
--
ALTER TABLE `noticia_autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `noticia_categorias`
--
ALTER TABLE `noticia_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `noticia_destaque`
--
ALTER TABLE `noticia_destaque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticia_detalhes`
--
ALTER TABLE `noticia_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticia_grupos`
--
ALTER TABLE `noticia_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `noticia_grupos_sel`
--
ALTER TABLE `noticia_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `noticia_imagem`
--
ALTER TABLE `noticia_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de tabela `noticia_imagem_legenda`
--
ALTER TABLE `noticia_imagem_legenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `noticia_imagem_ordem`
--
ALTER TABLE `noticia_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `noticia_marcadagua`
--
ALTER TABLE `noticia_marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `parceiros_grupos`
--
ALTER TABLE `parceiros_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `parceiros_ordem`
--
ALTER TABLE `parceiros_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `pedido_loja`
--
ALTER TABLE `pedido_loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `pedido_loja_carrinho`
--
ALTER TABLE `pedido_loja_carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de tabela `pedido_loja_mensagens`
--
ALTER TABLE `pedido_loja_mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pedido_loja_status`
--
ALTER TABLE `pedido_loja_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de tabela `planos_grupos`
--
ALTER TABLE `planos_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `planos_itens`
--
ALTER TABLE `planos_itens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT de tabela `planos_ordem`
--
ALTER TABLE `planos_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `produto_acabamentos`
--
ALTER TABLE `produto_acabamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produto_categoria_ordem`
--
ALTER TABLE `produto_categoria_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produto_categoria_sel`
--
ALTER TABLE `produto_categoria_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `produto_cor`
--
ALTER TABLE `produto_cor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `produto_cor_sel`
--
ALTER TABLE `produto_cor_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto_detalhes`
--
ALTER TABLE `produto_detalhes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto_entrega_auto`
--
ALTER TABLE `produto_entrega_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produto_estoque`
--
ALTER TABLE `produto_estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto_estoque_registro`
--
ALTER TABLE `produto_estoque_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto_gabaritos`
--
ALTER TABLE `produto_gabaritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto_grupos`
--
ALTER TABLE `produto_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produto_grupos_sel`
--
ALTER TABLE `produto_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `produto_imagem`
--
ALTER TABLE `produto_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `produto_imagem_ordem`
--
ALTER TABLE `produto_imagem_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `produto_marcadagua`
--
ALTER TABLE `produto_marcadagua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto_modelos`
--
ALTER TABLE `produto_modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produto_modelos_categorias`
--
ALTER TABLE `produto_modelos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produto_modelos_sel`
--
ALTER TABLE `produto_modelos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto_tamanho`
--
ALTER TABLE `produto_tamanho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `produto_tamanho_sel`
--
ALTER TABLE `produto_tamanho_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `produto_variacao`
--
ALTER TABLE `produto_variacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto_variacao_sel`
--
ALTER TABLE `produto_variacao_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `rastreamento`
--
ALTER TABLE `rastreamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de tabela `rastreamento_objetos`
--
ALTER TABLE `rastreamento_objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rastreamento_objetos_itens`
--
ALTER TABLE `rastreamento_objetos_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rede_social`
--
ALTER TABLE `rede_social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `rede_social_ordem`
--
ALTER TABLE `rede_social_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `revistajornal`
--
ALTER TABLE `revistajornal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `revistajornal_formatos`
--
ALTER TABLE `revistajornal_formatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `revistajornal_grupos`
--
ALTER TABLE `revistajornal_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `revistajornal_grupos_sel`
--
ALTER TABLE `revistajornal_grupos_sel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `revistajornal_imagem`
--
ALTER TABLE `revistajornal_imagem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de tabela `servicos_grupos`
--
ALTER TABLE `servicos_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servicos_ordem`
--
ALTER TABLE `servicos_ordem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `videos_categorias`
--
ALTER TABLE `videos_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `videos_grupos`
--
ALTER TABLE `videos_grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
