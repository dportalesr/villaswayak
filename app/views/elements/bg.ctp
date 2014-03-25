<?php
if(is_c('inicio',$this)){
	echo $this->element('showcase',array('data'=>$carrusel,'id'=>'bg_showcase','opts'=>array('nav'=>false,'fullscreen'=>true)));
} else {
	if(is_c('desarrollo',$this) && in_array($this->params['action'], array('amenidades','departamentos')))
		$bg = $this->params['action'];
	else
		$bg = $this->params['controller'];
	
	echo $html->div('',$html->image('bg_'.$bg.'.jpg',array('alt'=>'bg_'.$bg.'.jpg')),array('id'=>'bg_showcase'));
}
?>
