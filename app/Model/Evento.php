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
                'rule' => 'notEmpty',
                'required' => 'true',
                'message' => 'Debe ingresar un título al evento.',
            ),
            
            'descripcion' => array(
                'rule'      => 'notEmpty',
                'required'=> 'true',
                'message'   => 'Debe ingresar una descripción al evento.'
            ),
            
            'fecha' => array(
                'rule'      => 'date',
                'allowEmpty'=> false,
                'message'   => 'Debe ingresar una fecha para el evento.'
            ),
            
            'lugar' => array(
                'rule'      => 'notEmpty',
                'required'  => 'true',
                'message'   => 'Debe ingresar un lugar para el evento.'
            ),
            
             'link' => array(
                'rule'      => 'url',
                'message'   => 'Puede ingresar una dirección que posea más información sobre el evento.',
                'allowEmpty' => true
            ),
    );

}
    

?>