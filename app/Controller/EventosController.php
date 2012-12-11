<?php
class EventosController extends AppController {
    var $name = 'Eventos';
    var $helpers = array('Html', 'Form');
    
    
    public function index()
    {
        //$this->Evento->recursive = 2;
        $this->set('eventos', $this->Evento->find('all'));
    }
    
    public function view($id = null){
        $this -> Evento -> id = $id;
        $this -> set('eventos', $this -> Evento -> read());
        
    }
    
    public function add(){
        if(!empty($this->data)){
            $this->Evento->create();
            if($this->Evento->save($this->data)){
                //$this->Session->setFlash('El evento ha sido guardado.');
                $this->Session->setFlash('<div class="alert alert-success"> El evento ha sido creado con éxito. </div>');
                $this->redirect(array('action'=>'index'), null, true);
            } else {
                $this->Session->setFlash('El evento no ha podido ser guardado.');
            }
        }
    }
    
    public function getEventos(){
         // Si la petición fue realizada por medio de requestAction
        if(isset($this->params['requested'])) { 
            return $this->Evento->find('all');
        }
    }
}
    
?>