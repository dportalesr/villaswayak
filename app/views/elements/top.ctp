<?php
$wide = (isset($wide) && $wide) || (!isset($wide)) ? 'wide':'';

if(isset($header)){
	if(!$header){
		$header = '';
	
	} elseif(is_string($header)) {
		$header = $html->div('sectionHdr',$header);
	
	} elseif(is_array($header)) {
		$text = $header['text'];
		unset($header['text']);
		$header = $html->div('sectionHdr',$html->link($text,$header));
	}
} else {
	$header = '';//$html->div('sectionHdr',$_ts);
}

echo
	$html->div('content'.$wide),
	$html->div('pad'),
	$header;
?>