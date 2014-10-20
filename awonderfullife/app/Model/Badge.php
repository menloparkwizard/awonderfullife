<?php
App::uses('AppModel', 'Model');
/**
 * Badge Model
 *
 */
class Badge extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idbadges';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

}
