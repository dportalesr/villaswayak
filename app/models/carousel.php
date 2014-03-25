<?php
class Carousel extends AppModel {
	var $name = 'Carousel';
	var $labels = array();
	var $actsAs = array(
		'File'=>array(
			'portada'=>false,
			'fields'=>array('src'=>array('maxsize'=>1048576,'strict'=>'(Ancho mínimo) 1400px'))
		)
	);
}
?>