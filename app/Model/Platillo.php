<?php
App::uses('AppModel', 'Model');
/**
 * Platillo Model
 *
 * @property CategoriaPlatillo $CategoriaPlatillo
 * @property Cocinero $Cocinero
 */
class Platillo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

	public $actsAs = array(
		'Upload.Upload'=>array(
			'foto'=>array(
				'fields'=>array(
					'dir'=>'foto_dir'
				),
				'thumbnailMethod'=>'php', 
				'thumbnailSizes'=>array(
					'vga'=>'640x480',
					'thumb'=>'150x150'
				),
				'deleteOnUpdate'=>true,
				'deleteFolderOnDelete'=>true
			)
		)
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descripcion' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'precio' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'FileSize' => array(
				'rule' => array('fileSize', '<=', '10MB'),
				'message' => 'La imagen no puede ser mas grande que 10MB'
			)
		),
		'foto'=>array(
			'uploadError'=>array(
				'rule'=>'uploadError',
				'message'=>'Algo anda mal, intente de nuevo',
				'on'=>'create')
			// ,'isUnderPhpSizeLimit' => array(
			// 	'rule' => 'isUnderPhpSizeLimit',
			// 	'message' => 'File exceeds upload filesize limit'
			// )
			,'isValidMimeType' => array(
				'rule' => array('isValidMimeType', array('image/jpeg','image/jpg', 'image/png')),
				'message' => 'File is not a jpeg or png'
			),
			'isBelowMaxSize' => array(
				'rule' => array('isBelowMaxSize', 5242880),
				'message' => 'File is larger than the maximum filesize'
			),
			'isValidExtension' => array(
				'rule' => array('isValidExtension', array('png', 'jpeg','jpg')),
				'message' => 'File does not have a png, jpg or jpeg extension'
			),
			'checkUniqueName'=>array(
				'rule'=>array('checkUniqueName'),
				'message'=>'La imagen ya se encuentra registrada',
				'on'=>'update'
			)
		),

		'categoria_platillo_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CategoriaPlatillo' => array(
			'className' => 'CategoriaPlatillo',
			'foreignKey' => 'categoria_platillo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	function checkUniqueName($data){
		$isUnique=$this->find('first',array('fields'=>array('Platillo.foto'),'conditions'=>
		array('Platillo.foto'=>$data['foto'])));
		if(!empty($isUnique)){
			return false;
		}else{
			return true;
		}
	}

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cocinero' => array(
			'className' => 'Cocinero',
			'joinTable' => 'cocineros_platillos',
			'foreignKey' => 'platillo_id',
			'associationForeignKey' => 'cocinero_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
