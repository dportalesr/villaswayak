<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" itemscope itemtype="http://schema.org/<?=ucfirst($og_for_layout['itemtype'])?>">
<head>
<title><?=$sitename_for_layout.($title_for_layout ? ' | '.$title_for_layout : '')?></title>

<!-- Mobile viewport optimization h5bp.com/ad -->

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$description_for_layout?>" />
<meta name="keywords" content="<?=$keywords_for_layout?>" />
<meta name="Title" content="<?=$sitename_for_layout?>" />
<meta name="Author" content="Pulsem" />
<meta name="Generator" content="daetherius" />
<meta name="Language" content="Spanish" /> 
<meta name="Robots" content="Index" />

<meta property="og:title" content="<?=$og_for_layout['title']?>" />
<meta property="og:description" content="<?=$og_for_layout['description']?>" />
<meta property="og:type" content="<?=$og_for_layout['type']?>" />
<meta property="og:url" content="<?=$og_for_layout['url']?>" />
<meta property="og:image" content="<?=$og_for_layout['image']?>" />
<meta property="og:site_name" content="<?=$og_for_layout['site_name']?>" />

<meta itemprop="name" content="<?=$og_for_layout['title']?>" />
<meta itemprop="description" content="<?=$og_for_layout['description']?>" />
<meta itemprop="image" content="<?=$og_for_layout['image']?>" />

<?=$html->css(array('generic','main','pulsembox','mooshowcase','mooscroll'))?> 
</head>
<?php
echo
	$html->tag('body',null,'c_'.$this->params['controller'].' a_'.$this->params['action']),
	$html->div('wrap',null,array('id'=>'wrap')),
		$this->element('bg'),
		$html->div('',$html->div('outside','',array('id'=>'outside')),array('id'=>'white_strap')),
		$html->div(null,null,array('id'=>'nofooter')),
			$html->div(null,null,array('id'=>'header')),
				$html->tag('h1',$html->link($sitename_for_layout,'/',array('title'=>$sitename_for_layout)),array('id'=>'logo')),
				$html->div('social'),
					$html->link('facebook',Configure::read('Site.fb'),array('target'=>'_blank','rel'=>'nofollow','class'=>'ico_facebook')),
					$html->link('twitter',Configure::read('Site.tw'),array('target'=>'_blank','rel'=>'nofollow','class'=>'ico_twitter')),
					//$html->link('skype','#http://',array('target'=>'_blank','rel'=>'nofollow')),
				'</div>',
				$this->element('menu');
				if(in_array($this->params['controller'], array('contacto','events')))
				{
					echo $this->element('tweets');
				}
				echo
			'</div>',
			$html->div(null,$content_for_layout.'',array('id'=>'body', 'class'=>$sub_for_layout)),
			$html->div(null,'',array('id'=>'cleaner')),
		'</div><!-- #nofooter -->',
		$this->element('footer'),
	'</div>';
?>
  <script src="//ajax.googleapis.com/ajax/libs/mootools/1.3.2/mootools-yui-compressed.js"></script>
  <script>window.MooTools || document.write('<script src="/js/moo13.js"><\/script>')</script>
  <script type="text/javascript">$("wrap").setStyles({"opacity":0,"visibility":"visible"});</script>
<?php
	$onLoad = '';
	$sidebar_height = '';

	if(is_c(array('desarrollo','palm'),$this)){
		$moo->addEvent('.section_nav a','click','$$(".section_nav a").removeClass("selected");this.addClass("selected");$$(".sections > div").addClass("hide"); $("layer_"+this.get("id")).removeClass("hide");',array('prevent'=>true,'css'=>true));
		$onLoad = '$("outside").set("tween",{duration:1200,unit:"%"}).tween("left",0);';

	}elseif(is_c('events',$this)){
		$sidebar_height = '$("sidebar_pad").setStyle("height",$("body").getFirst(".content").getStyle("height"));';
	}
	
	$moo->buffer('window.addEvent("load", function() {
		'.$sidebar_height.'
		$("wrap").fade(1);

		$$("#menu > li > a").each(function(el){
			var bgSpan = el.getElement("span.bg");
			var oncomplete = function(){};
			var li_submenu = el.getNext(".submenu");
			var li = el.getParent();

			if(li_submenu!=null){
				var fadeFx = new Fx.Tween(li_submenu,{ property:"opacity", link:"cancel", transition:"pow:in:out", duration:600 }).set(0);
				li.store("fadeFx",fadeFx);
				
				oncomplete = function(){
					this.retrieve("fadeFx").start(this.getStyle("opacity").toInt() ? 0 : 1);
				}.bind(li_submenu);
			}

			if(!bgSpan.getParent(".mSelected"))
				bgSpan.setStyle("top",-74);

			li.store("bgFx",new Fx.Tween(bgSpan,{
				property:"top",
				transition:"pow:in:out",
				link:"cancel",
				duration:350
			}));

			li.addEvents({
				"mouseenter":function(e){
					li.addClass("bgFx");
					this.retrieve("bgFx").start(0);

				}.bind(li),
				"mouseleave":function(e){
					if(!this.hasClass("mSelected")){
						this.retrieve("bgFx").start(-74).chain(function(){ this.removeClass("bgFx"); }.bind(this));
					}

				}.bind(li)
			});
			
			if(li.hasClass("mSelected") && li_submenu != null){
				li.retrieve("fadeFx").start(1);
			}
		});
		'.$onLoad.' });
	');
	
	echo
		$html->script(array('moo13m','utils','pulsembox','mooshowcase','iscroll','mooscroller')),
		$scripts_for_layout,
		$moo->writeBuffer(array('onDomReady'=>false)),
		$html->tag('noscript',$html->tag('style','#wrap { visibility:visible } #outside { left:0; }',array('type'=>'text/css'))),
		//$this->element('gfont',array('fonts'=>array('Cantarell','Droid+Serif'))),
	'';
?>
<script type="text/javascript">
/* G+ */ window.___gcfg = {lang: "es-419"};(function(){var po=document.createElement("script");po.type="text/javascript";po.async=true;po.src="https://apis.google.com/js/plusone.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po,s);})();
//* Analytics */ var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</body></html>