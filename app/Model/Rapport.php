<?php 
class Rapport extends AppModel {

	//public $recursive = 1;
	var $name = 'Rapport';

	public $hasMany = array(
		'Logement' => array(
			'className' => 'Logement',
			'foreignKey' => 'rapportId',
			'dependent'=>true
			),
		'Qualitatif' => array(
			'className'=>'Qualitatif',
			'foreignKey' => 'rapportID',
			'dependent'=>true
			)
		);

	public $belongsTo = array(
		'User'=>array(
			'className'=>'User',
			'foreignKey'=>'userID'
			)
		);


	public $validate = array();
}
?>