<?php
class Event extends AppModel {
	var $name = 'Event';
	var $labels = array(
		'eventimg_count'=>'Imágenes'
	);
	var $hasMany = array(
		'Eventimg'=>array(
			'className'=>'Eventimg',
			'dependent'=>true
		)
	);
	var $hasOne = array(
		'Eventportada'=>array(
			'className'=>'Eventimg',
			'foreignKey'=>'event_id',
			'conditions'=>'Eventportada.portada = 1'
		)
	);
}
?>