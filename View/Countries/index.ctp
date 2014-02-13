<?php
	$this->Html->script('mapHandler',array('block' => 'scriptBottom'));
        $this->Html->script('markerclusterer',array('block' => 'scriptBottom'));
        $this->Html->script('markerwithlabel',array('block' => 'scriptBottom'));
?>
<div id="leftCol" class="column">
<section>
	<article>
	<h1>Pronóstico en Argentina</h1>
	<div id="map_canvas"></div>
	</article>
</section>
</div>
<div id="centerCol" class="column">
    <br/>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 200px portada clima -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:200px;height:200px"
             data-ad-client="ca-pub-6965617047977932"
             data-ad-slot="1376329157"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        
        
        <br/>
<section>
	<article>
		<h3>Próximamente tendremos mas novedades del clima</h3>
		<p> Estamos preparando mas secciones como detalle por provincia/localidad, mapa de vientos, pronóstico extendido, comparativas de diferentes fuentes de
			pronósticos y muchas mas novedades...
		</p>

		<p>Muchas Gracias,<br/>
		El equipo de La Página del Clima</p>
	</article>
	
	<br/><br/>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 200px solo texto portada clima -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:200px;height:200px"
             data-ad-client="ca-pub-6965617047977932"
             data-ad-slot="2853062358"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
</section>
</div>
<div id="rightCol" class="column">
<div class="publi-container">
<section>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Skyscraper Portada Clima -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:160px;height:600px"
             data-ad-client="ca-pub-6965617047977932"
             data-ad-slot="7422862757"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
</section>
</div>
</div>
<script type="text/javascript">
    markers = <?php echo $climates ?>;
</script>
