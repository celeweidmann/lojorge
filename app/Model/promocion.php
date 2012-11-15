<?php
App::uses('AppModel', 'Model');
/**
 * 
 */
class Promocion extends AppModel {
    
    var $name = 'Promocion'; 
    
  /**
    * Validation rules
    *
    * @var array
    */
    public $validate = array(
                'titulo' => array(
                    'notempty' => array(
                        'rule' => array('notempty'),
                    ),
                ),
                'descripcion' => array(
                    'notempty' => array(
                        'rule' =>  array('notempty') 
                    ),
                ),
            );
}
    
    



?>