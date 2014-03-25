<?php
App::import('Controller','_base/Unlisteditems');
class EventsController extends UnlisteditemsController{
	var $name = 'Events';
	var $uses = array('Event','Eventimg');
	var $paginate = array('Event'=>array('limit'=>6));

	function ver($id){
	   $items = $this->paginate($this->uses[0],$this->m[0]->find_(null,'paginate'));
	   $this->set(compact('items'));

	   parent::ver($id);
	}
}
?>