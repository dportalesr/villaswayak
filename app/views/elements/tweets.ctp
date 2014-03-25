<?php
/*if(($tweets = Cache::read('tweets','twitter'))===false){
	$tweets = json_decode(file_get_contents("http://api.twitter.com/1.1/statuses/user_timeline/villaswayak.json?count=3"),true);
	Cache::write('tweets',$tweets,'twitter');
}

if($tweets && in_array($this->params['controller'], array('contacto','events'))){
	echo
		$html->div('tweets'),
		$html->tag('ul',null,array('id'=>'tweets'));
		foreach ($tweets as $tweet) {
			echo $html->tag('li',$html->para(null,$text->autoLink($tweet['text'],array('target'=>'_blank','rel'=>'nofollow'))).$html->para('date',$html->link($util->fdate('%b %d, %I:%M %P',$tweet['created_at']),'http://twitter.com/villaswayak/statuses/'.$tweet['id_str'],array('target'=>'_blank','rel'=>'nofollow'))),'tweet');
		}
			
	echo '</ul></div>';
	$moo->scroller('tweets',array('fx_delay'=>200));
}*/
?>
<div class='tweets'>
	<ul id='tweets'>
		<li>
			<a class="twitter-timeline" href="https://twitter.com/Villaswayak" data-widget-id="446060887757963264" data-tweet-limit="1" data-chrome="noheader nofooter noborders noscrollbar transparent">Tweets por @Villaswayak</a>
		</li>
	</ul>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

