<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
	?>
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans|Merriweather:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc4SZNsw2T3hbVv4mM_MX_fYpWBD2qQcU&sensor=true&libraries=weather"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script type="text/javascript" src="/js/common.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo-container">
				<img alt="La Página del Clima" src="/img/logo.png">
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
			<div id="footer-menu-container">
				<a class="footer-menu" href="javascript:void(0);">T&eacute;rminos y condiciones</a><a class="footer-menu" href="javascript:void(0);">Contacto</a><span class="footer-menu">Copiright &copy; 2013 - La p&aacute;gina del clima</span>
			</div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<!-- Script block loaded at the bottom -->
	<?php echo $this->fetch('scriptBottom'); ?>
	<!-- Script block loaded at the bottom -->
	<!-- <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41771850-1', 'lapaginadelclima.com.ar');
	  ga('send', 'pageview');

	</script>-->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  var pluginUrl =
		  '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
		_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	  _gaq.push(['_setAccount', 'UA-41771850-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>