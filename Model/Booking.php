<?php
App::uses('AppModel', 'Model');

class Booking extends AppModel {
	public $displayField = 'name';

	public $dateFields  = array('delivery', 'created');

	public $virtualFields = array(
		'delivery' => "DATE_FORMAT(`Booking`.`delivery`, '%e.%c.%Y')",
		'created' => "DATE_FORMAT(`Booking`.`created`, '%e.%c.%Y')",
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
