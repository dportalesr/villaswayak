<div class="sidebar">
<div class="pad" id="sidebar_pad">
<?php
if(is_c('events',$this)){
	echo $html->tag('h2','Comunidad Wayak','title');
	if($items){
		echo $html->tag('ul',null,'bulleted');
	
		foreach($items as $item){
			$slug = $item['Event']['slug'];
			$nombre = $item['Event']['nombre'];
			$selected = isset($this->passedArgs[0]) && $slug == $this->passedArgs[0] ? 'selected' : '';
			echo $html->tag('li',$html->link($nombre,array('controller'=>Inflector::tableize('event'),'action'=>'ver','id'=>$slug)),$selected);
		}
	
		echo '</ul>';
	}

	echo $this->element('pages',array('nextprev'=>1));

	/*
	if(isset($item) && $item){
		echo $html->div('nav');
		
		if(isset($related['prev']) && $related['prev'])
			echo $html->link('Siguiente',array('controller'=>'events','action'=>'ver','id'=>$related['prev'][$_m[0]]['slug']),array('class'=>'next'));
		
		if(isset($related['next']) && $related['next'])
			echo $html->link('Anterior',array('controller'=>'events','action'=>'ver','id'=>$related['next'][$_m[0]]['slug']),array('class'=>'prev'));
		
		echo '</div>';
	}
	*/

}

if(is_c('contacto',$this)){
	echo
		$html->para(null,'Carr. Progreso - Telchac Km 25.5<br/>San Benito, Yucatán, México.'),
		$html->para(null,'+52 (999) 9381687'),
		$html->para(null,$util->ofuscar('info@villaswayak.com')),
		$html->div('','',array('id'=>'mapa')),

		$html->script('http://maps.google.com/maps/api/js?sensor=false'),
		$moo->buffer('var latLong = new google.maps.LatLng(21.325968,-89.421984);
		var map = new google.maps.Map(document.getElementById("mapa"), { zoom: 15, center: latLong, mapTypeId: google.maps.MapTypeId.SATELLITE });
		var beachMarker = new google.maps.Marker({
			position: latLong,
			map: map,
			icon: "/img/marker.png"
		});');
}
//echo $html->div('banners',$this->element('banners'),array('id'=>'banners')), $moo->showcase('banners',array('nav'=>'out'));
?>
</div>
</div>