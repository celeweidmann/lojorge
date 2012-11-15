<?php

class Contacto extends AppModel {

    public $name = 'Contacto';

     public $useTable = false; 

    public $validate = array(

        'subject' => 'notEmpty',

        'email' => 'email',
        
        'nombre' => 'notEmpty'

    );

    var $_schema = array(
        'email'     => array('type'=>'string', 'length'=>100),
        'nombre'    => array('type'=>'string', 'length'=>100), 
        'subject'   => array('type'=>'string', 'length'=>100), 
        'message'   => array('type'=>'text'),
        'consulta' => array(),
    );


}

