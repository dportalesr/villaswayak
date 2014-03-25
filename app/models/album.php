<?php
class Album extends AppModel {
	var $name = 'Album';
	var $labels = array(
		'albumimg_count'=>'Imágenes'
	);
	var $hasMany = array(
		'Albumimg'=>array(
			'className'=>'Albumimg',
			'dependent'=>true
		)
	);
	var $hasOne = array(
		'Albumportada'=>array(
			'className'=>'Albumimg',
			'foreignKey'=>'album_id',
			'conditions'=>'Albumportada.portada = 1'
		)
	);
	var $validate = array();
}
?>