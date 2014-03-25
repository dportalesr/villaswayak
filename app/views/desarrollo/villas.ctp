<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('section_nav'),
		$html->link('Villas Jaal-Há',array('controller'=>'desarrollo','action'=>'jaal_ha'),array('id'=>'jaal_ha','class'=>$visible == 'jaal_ha' ? 'selected' : '')),
		$html->link('Villas Naay-Há',array('controller'=>'desarrollo','action'=>'naay_ha'),array('id'=>'naay_ha','class'=>$visible == 'naay_ha' ? 'selected' : '')),
	'</div>',
	$html->div('sections clear'),
		$this->element('details/desarrollo/jaal_ha',array('album'=>$albums['jaal_ha'],'visible'=>$visible == 'jaal_ha')),
		$this->element('details/desarrollo/naay_ha',array('album'=>$albums['naay_ha'],'visible'=>$visible == 'naay_ha')),
	'</div>';
	$moo->scroll(array('column1','column2'));
	$moo->addEvent('.section_nav > a','click','myScrolls.each(function(el){ el.refresh.delay(100,el); });',array('css'=>1));
?>
</div>
</div><!-- .content -->