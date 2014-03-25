jQuery(function(){
    
    var pct=0;
    var handle=0;
    
    
    handle=setInterval(function(){
            $(".progressbar:first").reportprogress(++pct);
            if(pct==100){
                    clearInterval(handle);
                    pct=0;
            }
    } ,100);
	
	
	var lessColor = {
		darken: function(col, val){
			col = col.replace(/#/g, '');    //Remove the hash

			var color = new less.tree.Color(col);   //Create a new color object
			var amount = new less.tree.Value(val);      //Create a new amount object
			return less.tree.functions.darken(color, amount).toCSS();
		},
		lighten: function(col, val){
			col = col.replace(/#/g, '');    //Remove the hash

			var color = new less.tree.Color(col);   //Create a new color object
			var amount = new less.tree.Value(val);      //Create a new amount object
			return less.tree.functions.lighten(color, amount).toCSS(); //Get the new color
		}
	}
	
	function setCookie(c_name,value,exdays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;
	}

	function getCookie(c_name){
		var i,x,y,ARRcookies=document.cookie.split(";");
		for (i=0;i<ARRcookies.length;i++){
			x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			x=x.replace(/^\s+|\s+$/g,"");
			if (x==c_name)
			{
			return unescape(y);
			}
		}
	}
	
	if(getCookie('type-layout'))
		changeTo(getCookie('type-layout'));
		
	function changeTo(type){
		$('body').removeClass('fluid').removeClass('fixed').addClass(type);
		setCookie('type-layout', type);
	}
	
	$('.change-to-fixed').click(function(e){ e.preventDefault(); changeTo('fixed'); });
	$('.change-to-fluid').click(function(e){ e.preventDefault(); changeTo('fluid'); });
	
	if(getCookie('color'))
		changeColor(getCookie('color'));
	
	if(jQuery().farbtastic){
		$('.farbtastic-picker').each(function(){
			$(this).farbtastic(function(color){
				setCookie('color', color, 365);
				changeColor(color);
			});
		});
	}
		
	function changeColor(color){
		var style = $('#colorThemeStyle'),
			defaultColor = '#248ad5',
			styleContent = "::-moz-selection {  background: #248ad5;}/* selected text */::selection {  background: #248ad5;}/* selected text */a {  color: #248ad5;}a:hover {  color: #1d6ea9;}body #top {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);}body #top header #menu-bar {  height: 38px;}body #top header #menu-bar > ul {  float: right;}body #top header #menu-bar > ul > li {  border-right: 1px solid #196094;  border-left: 1px solid #288fdb;}body #top header #menu-bar > ul > li > a {  color: #d7eaf8;}body #top header #menu-bar > ul > li > a .note {  color: #248ad5;}body .outside-bt {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);}body .outside-bt:hover {  background: #3696dd;  background: linear-gradient(top, #3696dd, #217fc4 50%, #1d6ea9 51%, #217fc4);}body #page #sidebar .menus > nav > ul > li > a i {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);  border: 1px solid #3696dd;  text-shadow: 2px 2px 0 #1d71ae, -2px -2px 0 #1d71ae;  color: #c6e1f5;}body #page #sidebar .menus > nav > ul > li > a:hover span {  background: #3696dd;  background: linear-gradient(top, #3696dd, #217fc4 50%, #1d6ea9 51%, #217fc4);}body #page #sidebar .menus > nav > ul > li.with-submenu.active:after {  color: #248ad5;}body #page #sidebar .menus > nav > ul > li nav {  display: none;}body #page #sidebar .menus > nav > ul > li nav ul li:hover {  border-bottom-color: #248ad5;}body #page #sidebar .menus > nav > ul > li nav ul li:hover a {  background: #248ad5;  background: linear-gradient(top, #248ad5, #196094);}body #page #sidebar .menus > nav > ul > li nav ul li:hover a:before {  color: #124368;}body #page #content #content-top .quick-actions {  float: right;}body #page #content #content-top .quick-actions > ul > li {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);  border-left: 1px solid #4ba1e1;  border-right: 1px solid #196094;}body #page #content #content-top .quick-actions > ul > li:hover {  background: #3696dd;  background: linear-gradient(top, #3696dd, #217fc4 50%, #1d6ea9 51%, #217fc4);}body #page #content #pane > header .breadcrumbs ul li.alt a {  color: #248ad5;}body #page #content #pane #pane-content .widget > header > i {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);  text-shadow: 2px 2px 0 #1d71ae, -2px -2px 0 #1d71ae;  color: #c6e1f5;}body #page #content #pane #pane-content .widget > header .collapse-bt:hover {  background: #1d6ea9;  background: linear-gradient(top, #1e73b2, #1e73b2 49%, #196094 51%);}body #page #content #pane #pane-content .widget > header nav.buttons ul li.active {  background: #175a8b;  background: linear-gradient(top, #175a8b, #144c75);}body .search-button {  background: #248ad5;  background: linear-gradient(left top, #248ad5, #1d6ea9);}body .search-button:hover {  background: linear-gradient(left top, #3696dd, #207cbf);}body .feedback ul li.informative {  color: #196094;}body .feedback ul li.informative a {  color: #124368;}.window-modal .bt-close {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);}.fc-event-skin {  background-color: #248ad5;  border-color: #1d6ea9;  text-shadow: 0 1px 0 #1d6ea9;}.ui-widget .ui-widget-header {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);  border-color: #248ad5;}.ui-widget.ui-datepicker .ui-datepicker-calendar tbody a {  color: #1d6ea9;}.ui-widget.ui-datepicker .ui-datepicker-calendar tbody .ui-datepicker-current-day a {  border-color: #1d6ea9 !important;  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);}.chzn-container .chzn-results .active-result.highlighted {  background: #248ad5;  background-image: linear-gradient(top, #4ba1e1, #248ad5);}.bt-alt span {  background: #134971;  border: 1px solid #196094;  background-image: linear-gradient(top, #1a659c, #134971);}#top-scroller {  background: #248ad5;  background: linear-gradient(top, #1d71ae, #1a6298 51%, #248ad5, #1d71ae 50%);  border: 1px solid #15517e;}.bt {  border: 1px solid #1a6298;  border-bottom: 3px solid #15517e;  background: #196094;  background: linear-gradient(#1e73b2, #1e73b2 49%, #196094 51%);}.bt:hover {  border-bottom: 3px solid #196094;  background: #1d6ea9;  background: linear-gradient(#2282c8, #2282c8 49%, #1d6ea9 51%);}.footer-table {  background: #248ad5;  background-image: linear-gradient(top, #248ad5, #207cbf);}.footer-table .dataTables_paginate a,.footer-table .paginate a {  border-left: 1px solid #1d6ea9;}.progressbar .progress {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d71ae 50%, #1a6298 51%, #1d71ae);}.msg-box.informative {  background: #248ad5;  background: linear-gradient(top, #248ad5, #1d6ea9);  color: #fafcfe;  border: 1px solid #196094;}.footer-table {  background: #248ad5;  background-image: linear-gradient(top, #248ad5, #207cbf);}.footer-table .dataTables_paginate a,.footer-table .paginate a {  border-left: 1px solid #1d6ea9;}.sorticon {  color: #248ad5;}th:hover .sorticon {  color: #196094;}.pagination li.active a {  background: #248ad5;}";
		
		if(!style[0]){
			style = $('<style id="colorThemeStyle"></style>');
			$('body').append(style);
		}
		
		styleContent = styleContent.replace(new RegExp(defaultColor, 'g'), color);
		
		for(var i = 1; i <= 60; i++){
			styleContent = styleContent.replace(new RegExp(lessColor.darken(defaultColor, i), 'g'), lessColor.darken(color, i));
		}
		for(var i = 1; i <= 60; i++){
			styleContent = styleContent.replace(new RegExp(lessColor.lighten(defaultColor, i), 'g'), lessColor.lighten(color, i));
		}
		style.html(PrefixFree.prefixCSS(styleContent));
	}
});