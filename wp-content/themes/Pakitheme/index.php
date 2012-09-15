<?php
/**
 * Pakitheme
 *
 * Esse é um tema criado para o site MagicDogs, do super adestrador de câes, Danilão Pakito Fúria.
 *
 * @package MagicDogs
 * @subpackage Pakitheme
 * @since 0.1
 */
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>MagicDogs Adestramento</title>
    <meta name="robots" content="all" />
    <meta name="keywords" content="magic,dogs,adestramento,cachorro,cão,vila velha,es" />
    <meta name="description" content="Site da empresa MagicDogs, sobre adestramento de cães, com informações sobre a empresa e dicas de como cuidar do seu cachorro." />
    <meta name="Author" content="ViZeke" />

    <link href="<?php bloginfo('template_url'); ?>/Resources/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/Resources/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/Resources/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/Resources/images/md.png" rel="icon" type="image/png" />
</head>
<body style="margin-top: -18px;">
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MagicDogs
 * @subpackage Pakitheme
 * @since 0.1
 */
?>
<div id="topMenu" class="container">
        <ul id="menu" class="borderBottom">
            <li class="logo">
                <img style="height: 50px;" alt="" src="<?php bloginfo('template_url'); ?>/Resources/images/logo2.png"/>
                <!--<ul id="main" class="submenu">
                    <li>Welcome to <b>Create Vimeo-like top navigation</b> tutorial!</li>
                </ul>
                -->
            </li>
            <!--
            <li><a href="#">Help</a>
                <ul id="help" class="submenu borderBottom">
                    <li>
                        <a href="#">General help</a>
                    </li>
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Pages</a></li>
                </ul>
            </li>
            -->
            <li style="float: right;">
                <a href="<?php bloginfo('url'); ?>/wp-login.php">Login</a>
            </li>
            <!--
            <li class="searchContainer removeTableGap" style="float: right;">
                <input type="text" id="searchField" />
                <img id="searchMagnify" src="<?php bloginfo('template_url'); ?>/Resources/images/magnifier.png" alt="Search" onclick="alert('You clicked on search button')" />
                <ul id="search" class="submenu borderBottom">
                    <li><input id="Articles" type="checkbox" />Articles</li>
                    <li><input id="Tutorials" type="checkbox" />Tutorials</li>
                    <li><input id="Reviews" type="checkbox" />Reviews</li>
                    <li><input id="Resources" type="checkbox" />Resources</li>
                </ul>
            </li>
            -->
        </ul>
    <div style="float:none; clear:both; height:30px;"></div>
</div><!-- #topMenu -->

    <div id="frameCarousel">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/Resources/images/cachorro1B.jpg" />
                    <div class="carousel-caption">
                        <h4>
                            Em Breve</h4>
                        <p>
                            Informações Sobre a empresa.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/Resources/images/cachorro2B.jpg" />
                    <div class="carousel-caption">
                        <h4>
                            Em Breve</h4>
                        <p>
                            Dicas de como cuidar do seu melhor amigo. =)
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/Resources/images/cachorro3B.jpg" />
                    <div class="carousel-caption">
                        <h4>
                            Em Breve</h4>
                        <p>
                            Dicas de Adestramento
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img alt="" src="<?php bloginfo('template_url'); ?>/Resources/images/cachorro4B.jpg" />
                    <div class="carousel-caption">
                        <h4>
                            Entre em Contato</h4>
                        <p>
                            Equipe MagicDogs
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <div style="float:none; clear:both; height:20px;"></div>
    
<div id="footerContent" class="container borderTop">
    <div class="row">
        <div class="span4" style="text-align: center;">
            <br/>
            <h4>Contatos: Márcio &amp; Flávia</h4>
            <br/>
            Livre - (27) 3034-9549<br/>
            Oi - (27) 8828-1886<br/>
            Vivo - (27) 9720-8595<br/>
            Tim - (27) 8186-8685<br/>
        </div>
        <div class="span4" style="text-align: center;">
            <br/>
            <h4>Endereço</h4>
            <br/>
            Rua Antenor Lorenzzute 9<br/>
            Nossa Senhora da Penha<br/>
            Vila Velha - ES<br/>
            <a href="https://maps.google.com/maps/ms?msid=203694204055888359586.0004c853e5d63be01bfd6&msa=0&ll=-20.355491,-40.320602&spn=0.003395,0.005681">Mapa</a>
        </div>
        <div class="span4" style="text-align: center;">
            <br/>
            <h4>E-mail</h4>
            <br/>
            contato@magicdogs.com.br
        </div>
    </div>
</div><!-- #content -->

<!-- Carregando scripts -->
<script src="<?php bloginfo('template_url'); ?>/Resources/js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/Resources/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
//Ajustar tamanho do background da imagem.

var carouselOptions = { pause: '', interval: 6000 };

$('#myCarousel').carousel(carouselOptions);

function AdjustBackgroundCarousel(){
    $('#frameCarousel').height($('#myCarousel div.active img').height() + 20);
}

/*Para executar quando a pagina é carregada*/
AdjustBackgroundCarousel();

//Caso a figura ainda não tenha sido carregada quando o ajuste da página acontece, ajusta novamente após ela ser carregada.
$('#myCarousel div.active img').load(function(){
    $('#frameCarousel').height(this.height() + 20);
});

//Ajusta para qualquer ajuste da janela
$(window).resize(function() {
   AdjustBackgroundCarousel();
});

</script>

</body>
</html>
