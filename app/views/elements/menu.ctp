<ul id="menu">
<?php
// echo
// 	$html->tag('li',$html->link($html->tag('span', 'Home').
// 	$html->tag('span','','bg'),'/'),array('class'=>$this->params['controller']=='inicio' ? 'mSelected' : ''));

$galleries = array();
$galleries['desarrollo'] = Cache::read('album_desarrollo_gral');
$galleries['palm'] = Cache::read('album_palm_gral');

foreach(Configure::read('Modules') as $cntllr => $mod){
	if(isset($mod['menu']) && $mod['menu']){
		$submenu = '';
		$gallery = '';
		$rootUrl = array();

		if(in_array($cntllr, array('desarrollo','palm'))){
			switch($cntllr){
				case 'desarrollo':
					$rootUrl = array('controller'=>'desarrollo','action'=>'departamentos');
					$submenu = 	$html->tag('li',$html->link('Villas',array('controller'=>'desarrollo','action'=>'jaal_ha')),array('class'=>$sub_for_layout == 'villas' ? 'selected':'')).
											$html->tag('li',$html->link('Xel-Há',array('controller'=>'desarrollo','action'=>'departamentos')),array('class'=>$sub_for_layout == 'departamentos' ? 'selected':'')).
											$html->tag('li',$html->link('Palm',array('controller'=>'desarrollo','action'=>'pentgarden')),array('class'=>$sub_for_layout == 'palm' ? 'selected':'')).
											$html->tag('li',$html->link('Amenidades',array('controller'=>'desarrollo','action'=>'amenidades')),array('class'=>$sub_for_layout == 'amenidades' ? 'selected':''));
								
											if(!empty($galleries['desarrollo']['Albumimg'])){
												$desc = $galleries['desarrollo']['Albumimg'][0]['descripcion'];
												$submenu.= $html->tag('li',$html->link('Galería','/'.$galleries['desarrollo']['Albumimg'][0]['src'],array('class'=>'pulsembox','rel'=>'gallery_desarrollo','name'=>_dec($desc),'title'=>strip_tags($desc))));
											}
				break;

				case 'palm':
					$rootUrl = array('controller'=>'palm','action'=>'niveles');

					if(!empty($galleries['palm']['Albumimg'])){
						$desc = $galleries['palm']['Albumimg'][0]['descripcion'];
						$submenu.= $html->tag('li',$html->link('Galería','/'.$galleries['palm']['Albumimg'][0]['src'],array('class'=>'pulsembox','rel'=>'gallery_palm','name'=>_dec($desc),'title'=>strip_tags($desc))));
					}

				default:
				break;
			}

			$submenu = $html->tag('ul',$submenu,'submenu');

			if(!empty($galleries[$cntllr])){
				foreach ($galleries[$cntllr]['Albumimg'] as $img) {
					$src = '/'.$img['src'];
					$desc = $img['descripcion'];

					$gallery.= $html->link(basename($src),$src,array('class'=>'pulsembox','rel'=>'gallery_'.$cntllr,'name'=>_dec($desc),'title'=>strip_tags($desc)));
				}
			}

			$submenu.= $html->div('hide',$gallery);
		}

		echo
			$html->tag('li',
				$html->link(
					$html->tag('span',$mod['menu']).$html->tag('span','','bg'),
					 array('controller'=>$cntllr,'action'=>'index')
				).$submenu,
				($this->params['controller'] == $cntllr ? 'mSelected' : '').' m'.ucfirst($cntllr)
			);
	}
}
?>
</ul>