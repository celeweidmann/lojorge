<?php
class EventosController extends AppController {
    var $name = 'Eventos';
    var $helpers = array('Html', 'Form');
    
    
    public function index()
    {
         $this->set('eventos', $this->Evento->find('all'));
    }
    
    public function view($id = null){
        $this -> Evento -> id = $id;
        $this -> set('eventos', $this -> Evento -> read());
        
    }
}
    
?>