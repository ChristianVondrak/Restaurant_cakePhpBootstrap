<?php 

class Mesa extends AppModel{

    public $belongsTo=array(
        'Mesero'=>array(
            'className'=>'Mesero',
            'foreignKey'=>'mesero_id'
        )
    ); 

    public $hasMany = array(
		'Orden' => array(
			'className' => 'Orden',
			'foreignKey' => 'mesa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);		

    public $validate = array(
        'codigo'=>array(
            'notEmpty'=>array(
                'rule'=>'notBlank'
            ),
            'numeric'=>array(
                'rule'=>'numeric',
                'message'=>'Solo numeros'
            ),
            'unique'=>array(
                'rule'=>'isUnique',
                'message'=>'El codigo de mesa debe ser unico'
            )    
            ),
            'puestos'=>array(
                'notEmpty'=>array(
                    'rule'=>'notBlank'
                ),
                'numeric'=>array(
                    'rule'=>'numeric',
                    'message'=>'Solo numeros'
                )
                ),
            'posicion'=>array(
                'notEmpty'=>array(
                    'rule'=>'notBlank'
                )
            )
                );
}