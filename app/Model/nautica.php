<?php
App::uses('AppModel', 'Model');
/**
 * 
 */
class Nautica extends AppModel {
    
    var $name = 'Nautica'; 
    
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