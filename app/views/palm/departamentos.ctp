<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('nav'),
		$html->link('Pentgarden',array('controller'=>'palm','action'=>'pentgarden')),
		$html->link('Departamentos',array('controller'=>'palm','action'=>'departamentos')),
		$html->link('Penthouse',array('controller'=>'palm','action'=>'penthouse')),
	'</div>',
	$html->div('sections clear'),
		$this->element('details/departamentos',array('album'=>$albums['departamentos'],'visible'=>$visible == 'departamentos')),
		$this->element('details/penthouse',array('album'=>$albums['penthouse'],'visible'=>$visible == 'penthouse')),
	'</div>';
?>
</div>
</div><!-- .content -->