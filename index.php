<?php
// No direct access.
defined('_JEXEC') or die;
if(!defined('DS')){
   define('DS',DIRECTORY_SEPARATOR);
}
/*  
require_once(dirname(__file__) . DS . 'framework' . DS . 'helper.cache.php');
$this->cache = new GKTemplateCache($this);
$this->cache->registerCache(); 
$this->cache->registerJSCompression();	 
*/
require('libs/detectmobilebrowser.php');
$params = JFactory::getApplication()->getTemplate(true)->params; 
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;

unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js']);
unset($doc->_scripts[$this->baseurl.'/media/jui/js/bootstrap.min.js']);
unset($doc->_scripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js']);
unset($doc->_scripts[$this->baseurl.'/media/system/js/caption.js']);

$this->addFavicon($this->baseurl.'/images/favicon.ico');
/*$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.css');*/
echo '<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,900" rel="stylesheet">';
$doc->addStyleSheet('templates/'.$this->template.'/css/bootstrap.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/style.min.css');

$doc->addScript($this->baseurl.'/media/jui/js/jquery.min.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-noconflict.js');
$doc->addScript($this->baseurl.'/media/jui/js/jquery-migrate.min.js');
  
$doc->addScript('templates/'.$this->template.'/js/bootstrap.min.js');
$doc->addScript('templates/'.$this->template.'/js/main.min.js');

if(isset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']))
	{
	unset($doc->_scripts[$this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js']);
	$doc->addScript($this->baseurl.'/media/com_properties/prettyPhoto_compressed_316/js/jquery.prettyPhoto.js');
	} 
$doc->setGenerator('SOS');
/*if (JRequest::getInt('Itemid') == 101 )
{
    $doc->addCustomTag('<link rel="canonical" href="https://www.sos.com.ar"/> ');
    if(JRequest::getVar('option')!='com_properties')
    {
    $doc->addCustomTag('<meta property="og:type" content="website" /> ');
    $doc->addCustomTag('<meta property="og:url" content="'.JURI::current().'" />');
    $doc->addCustomTag('<meta property="og:title" content="Alquileres en Monte Hermoso." />');
    $doc->addCustomTag('<meta property="og:image" content="http://www.montehermosoalquila.com.ar/images/MonteHermosoAlquila.png" />');
    $doc->addCustomTag('<meta property="og:description" content="Alquiler de Departamentos y Casas en Monte Hermoso, Buenos Aires, Argentina." />');
    }
}*/
?><!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="icon" type="image/png" href="<?php echo $this->baseurl.'/images/red-sos-favicon.png'?>">-->
    <link rel="shortcut icon" href="<?php echo $this->baseurl.'/images/favicon.ico'?>">
    <link rel="apple-touch-icon" href="<?php echo $this->baseurl.'/images/red-sos-favicon.png'?>">
	<jdoc:include type="head" />
<?php	/*
<script type="text/javascript">
jQuery(window).on('load',  function() {
	jQuery("#dimensions").html(jQuery( window ).width());
	});			
jQuery( window ).resize(function() {
	jQuery("#dimensions").html(jQuery( window ).width());
});
//	note	360	//	fame	320	//	core	320
</script>
*/?>
<!--[if lt IE 9]>
      <script src="<?php echo 'templates/'.$this->template.'/js/html5shiv.min.js'; ?>"></script>
      <script src="<?php echo 'templates/'.$this->template.'/js/respond.min.js'; ?>"></script>
<![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">


</head>
<?php if(!$detectmobilebrowser){$detectmobilebrowserBody='nomobilebrowserbody';}else{$detectmobilebrowserBody='mobilebrowserbody';}?>
<body class="<?php echo $detectmobilebrowserBody;?>">
 <?php if (JRequest::getInt('Itemid') == 101 ) : ?>
<?php endif; ?> 
<div id="dimensions" style="position:fixed; z-index:99999000; background-color:#fff;"></div>
    <header id="header" class="header">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">                    
                    <div class="col-xs-12">
                       <div class="toprightmenu">
                            <ul class="toprightmenulist">
                                <li><a class="sugerencias" href="./realizar-sugerencias.html">Realizar sugerencias</a></li>
                                <li class="dropdown datos-menu"><a class="datos" href="./datos-utiles/documentacion-necesaria.html">Datos útiles</a>                            
<!--
                                    <ul class="dropdown-menu datos-submenu">
                                        <li class="item-106"><a href="./datos-utiles/documentacion-necesaria.html">Documentación necesaria</a></li>
                                        <li class="item-107"><a href="/datos-utiles/revision-de-vehiculo.html">Revisión de vehículo</a></li>
                                        <li class="item-108"><a href="datos-utiles/hogar.html">Hogar</a></li>
                                        <li class="item-108"><a href="datos-utiles/nautica.html">Náutica</a></li>
                                    </ul>
-->                           
                            </li>
                                <li><a class="consulta" href="./consulta-de-servicios.html">Consulta de servicios</a></li>   
                            </ul>                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="logo"></a>
                </div>                
                <div class="collapse navbar-collapse navbar-right">
                	<jdoc:include type="modules" name="navmenu" style="none" />                
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->                
</header><!--/header-->

<?php if (JRequest::getInt('Itemid') == 101 ) : 
require('home_carousel.php');
endif; ?>

<?php if (JRequest::getInt('Itemid') == 101 ) : 
require('home_canales.php');
endif; ?>

<?php if (JRequest::getInt('Itemid') == 101 ) : 
require('asistencia_sugerencias.php');
endif; ?>

<?php if (JRequest::getInt('Itemid') == 101 ) : 
require('home_app.php');
endif; ?>

<?php if ($this->countModules('topsearch')) : ?>
<div class="position_topsearch">
		<jdoc:include type="modules" name="topsearch" style="xhtml" />
</div>
<?php endif; ?>
<?php if ($this->countModules('topfeatured')) : ?>
<div class="position_topfeatured">
	<div class="container">
		<jdoc:include type="modules" name="topfeatured" style="xhtml" />
	</div>
</div>
<?php endif; ?>

<jdoc:include type="message" />
<div class="container main_container">       
<?php if ($this->countModules('left')) { ?>
<div class="position_left">
	<div class="container">
		<jdoc:include type="modules" name="left" style="xhtml" />
	</div>
</div>
<?php } ?>
<?php 
		if ($this->countModules('left')) {
		$showLeft = true;
		}else{
		$showLeft = false;
		}
		if ($this->countModules('right')) {
		$showRight = true;
		}else{
		$showRight = false;
		}
		$contentClass = 'col-md-12';
		if($showRight)
			{
			$contentClass = 'col-xs-12 col-sm-8  col-md-9';
			}
		if($showLeft)
			{
			$contentClass = 'col-xs-12 col-sm-8  col-md-9';
			}	
?>
<?php if (JRequest::getInt('Itemid') == 101 ) : ?>
<?php else : ?>
<div class="main_content <?php echo $contentClass;?>">
	<div class="position_component">	
			<jdoc:include type="component" />
 	</div>
</div>  
<?php endif; ?>
<?php if ($this->countModules('right')) { ?>
	<div class="sidebar sidebar-right col-xs-12 col-sm-4  col-md-3 ">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
<?php 	}?>
</div>    <!--	container	-->    

<div class="footer-v1">
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
            		<div class="copyright">
                        <p>S.O.S Red de Asistencia Todos los derechos reservados</p>
                        <div class="desarrollo" style="text-align: center;">Desarrollado por: <a class="link_desarrollo gruppoit" href="http://www.gruppoit.com" target="_blank">Gruppoit</a>
                        </div>								
					</div>
                </div>                               
            </div>
        </div> 
    </div><!--/footer-->
</div>    
<jdoc:include type="modules" name="sidebar" style="xhtml" />    
<jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
<jdoc:include type="modules" name="footer" style="none" />
<!--
<script type="text/javascript" src="<?php echo 'templates/'.$this->template.'/js/main.min.js'; ?>"></script>
<script src="<?php echo $this->baseurl.'/media/jui/js/jquery.min.js'; ?>" type="text/javascript"></script> 
-->
<?php require('analyticstracking.php');?>
</body>
</html>