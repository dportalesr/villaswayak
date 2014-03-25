<?php
$desc = _dec($item['Eventportada']['descripcion']);

echo
	$this->element('top',array('wide'=>false)),
	$html->div('detail'),
		$html->tag('h1',$item[$_m[0]]['nombre'],array('class'=>'title')),
		//$html->para('date',$util->fdate('s',$item[$_m[0]]['created'])),
		
		$html->div('clear'),
			$html->div('clear'),
				$util->th($item,$_m[0],array(
					'w'=>360,
					'class'=>'portada Centro pulsembox',
					'url'=>true,
					'atts'=>array('title'=>strip_tags($desc),'name'=>$desc)
				)),
				$html->div('desc tmce',$item[$_m[0]]['descripcion'].''),
			'</div>',
			$this->element('inlinegallery',array('data'=>$item[$_m[0].'img'],'model'=>$_m[0].'img', 'skip'=>true)),
		'</div>',
		$html->div('hide');

		foreach($item[$_m[0].'img'] as $img){
			$desc = _dec($img['descripcion']);
			echo $html->link('','/'.$img['src'],array('class'=>'pulsembox','rel'=>'roller','title'=>strip_tags($desc),'name'=>$desc));
		}

		echo '</div>',
	
		$this->element('facebook',array('mode'=>'v')),
		/*
		$this->element('slider',array('model'=>$_m[0].'img','data'=>$item[$_m[0].'img'],'skip'=>true)),
		$this->element('comments'),
		*/
	'</div>';
?>
</div>
</div><!-- content -->
<?php echo $this->element('sidebar'); ?>