<?php
echo
	$this->element('top',array('wide'=>false)),
	$html->div('form'),
		$html->div('title irregular','Ubicado '.$html->tag('span','en la').' playa '.$html->tag('span','más bella').'<br>'.$html->tag('span','de la').' costa yucateca'),
		$html->para('note','Te invitamos a programar una cita'),

		$form->create('Contact',array('id'=>'ContactForm','url'=>'/contacto/enviar','inputDefaults'=>array('label'=>false))),
		$form->input('mail',array('div'=>'hide')),
		$html->div('subform'),
			$form->input('nombre',array('placeholder'=>'NOMBRE')),
			$form->input('email',array('placeholder'=>'E-MAIL')),
			$form->input('telefono',array('placeholder'=>'TELÉFONO')),
			$form->input('mensaje',array('placeholder'=>'MENSAJE','rows'=>9,'cols'=>35)),
			$form->submit('Enviar'),
			$html->para('leydatos','Sus datos serán usados de acuerdo a los términos de la '.$html->link('Ley Federal de Protección de Datos Personales','http://dof.gob.mx/nota_detalle.php?codigo=5150631&fecha=05/07/2010',array('target'=>'_blank','rel'=>'nofollow'))),
			//$this->Captcha->input(),
		'</div>',
		$form->end(),
	'</div>',

	$moo->ajaxform('ContactForm');
	$moo->placeholder(array('color'=>'#a4a4a4'));
?>
</div>
</div><!-- .content -->
<?php echo $this->element('sidebar'); ?>