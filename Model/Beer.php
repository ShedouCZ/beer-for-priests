<?php
App::uses('AppModel', 'Model');

class Beer extends AppModel {
	public $displayField = 'name';

	public $order = array('Beer.ord'=>'asc');

}
