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
                    'rule' => 'notEmpty',
                    'required' => true,
                    'message' => 'Debe ingresar un título para la promoción.',
                ),
                'descripcion' => array(
                    'rule'      => 'notEmpty',
                    'required'  => true,
                    'message'   => 'Debe ingresar una descripción a la promoción.' 
                ),
                'fecha' => array(
                    'rule'      => 'date',
                    'allowEmpty'=> false,
                    'message'   => 'Debe ingresar una fecha para la promoción.'
                ),
                 'foto' => array(
                    'rule'      => 'notEmpty',
                    'required'  => true,
                    'message'   => 'Debe ingresar una foto para la promoción.'
                ),
            );
}
    
    



?>