<?php
App::import('Controller','_base/Imgs');
class EventimgsController extends ImgsController{
	var $name = 'Eventimgs';
	var $uses = array('Eventimg','Event');
}
?>