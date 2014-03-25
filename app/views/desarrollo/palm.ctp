<?php
echo
  $this->element('top',array('wide'=>true)),
  $html->div('section_nav'),
    $html->link('Pentgarden',array('controller'=>'palm','action'=>'pentgarden'),array('id'=>'pentgarden','class'=>$visible == 'pentgarden' ? 'selected' : '')),
    $html->link('2do y 3er nivel',array('controller'=>'palm','action'=>'palm_departamentos'),array('id'=>'departamentos','class'=>$visible == 'palm_departamentos' ? 'selected' : '')),
    $html->link('Penthouse',array('controller'=>'palm','action'=>'palm_penthouse'),array('id'=>'penthouse','class'=>$visible == 'palm_penthouse' ? 'selected' : '')),
  '</div>',
  $html->div('sections clear'),
    $this->element('details/palm/pentgarden',array('album'=>$albums['pentgarden'],'visible'=>$visible == 'pentgarden')),
    $this->element('details/palm/departamentos',array('album'=>$albums['palm_departamentos'],'visible'=>$visible == 'palm_departamentos')),
    $this->element('details/palm/penthouse',array('album'=>$albums['palm_penthouse'],'visible'=>$visible == 'palm_penthouse')),
  '</div>';

  $moo->scroll(array('column1','column2','column3'));
  $moo->addEvent('.section_nav > a','click','myScrolls.each(function(el){ el.refresh.delay(100,el); });',array('css'=>1));
?>
</div>
</div><!-- .content -->