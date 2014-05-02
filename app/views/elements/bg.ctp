<?php
if(is_c('inicio',$this)){
	echo $this->element('showcase',array('data'=>$carrusel,'id'=>'bg_showcase','opts'=>array('nav'=>false,'fullscreen'=>true)));
} else {
	if(is_c('desarrollo',$this)){
    switch ($this->params['action']) {
      case 'jaal_ha':
      case 'naay_ha':
        $bg = 'desarrollo';
      break;
      
      case 'departamentos':
      case 'penthouse':
        $bg = 'departamentos';
      break;
      
      case 'pentgarden':
      case 'palm_departamentos':
      case 'palm_penthouse':
        $bg = 'truepalm';
      break;
      
      default:
        $bg = $this->params['action'];
    }
  } else $bg = $this->params['controller'];
	
	echo $html->div('',$html->image('bg_'.$bg.'.jpg',array('alt'=>'bg_'.$bg.'.jpg')),array('id'=>'bg_showcase'));
}
?>
