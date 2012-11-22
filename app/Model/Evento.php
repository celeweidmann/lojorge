<?php
App::uses('AppModel', 'Model');
/**
 * 
 */
class Evento extends AppModel {
    
    var $name = 'Evento'; 
    
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