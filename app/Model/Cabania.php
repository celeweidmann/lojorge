<?php
App::uses('AppModel', 'Model');
/**
 * 
 */
class Cabania extends AppModel {
    
    var $name = 'Cabania'; 
	
    
    /**
    * Validation rules
    *
    * @var array
    */
    public $validate = array(

                'descripcion' => array(
                    'notempty' => array(
                        'rule' =>  array('notempty') 
                    ),
                ),
            );
}
    
    



?>