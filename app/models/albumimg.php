<?php
class Albumimg extends AppModel {
	var $name = 'Albumimg';
	var $actsAs = array('File'=>array('portada'=>'album_id','fields'=>array('src'=>array('strict'=>'(Recomendado) 800 x 600 px.'))),'Ordenable'=>array('group'=>true));
	var $belongsTo = array(
		'Album' => array(
			'className'=>'Album',
			'counterCache' => true
		)
	);
}
?>