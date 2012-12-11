<?php
class PromocionsController extends AppController {
    var $name = 'Promocions';
    var $helpers = array('Html', 'Form');
    
    
      public function index()
    {
       $this->set('promocions', $this->Promocion->find('all'));
    }
    
    public function view($id = null){
        $this -> Promocion -> id = $id;
        $this -> set('promocions', $this -> Promocion -> read());
        
    }
    
    public function add(){
        if(!empty($this -> data)){
            $this -> Promocion -> create();
            if($this -> Promocion -> save($this -> data)){
                $this -> Session -> setFlash('<div class="alert alert-success"> La promoción ha sido creada con éxito. </div>');
                $this -> redirect(array('action' => 'index'), null, true);
            } else {
                $this -> Session -> setFlash('La promoción no ha podido ser guardado.');
            }
        }
    }
    
    public function getPromociones(){
         // Si la petición fue realizada por medio de requestAction
        if(isset($this -> params['requested'])) { 
            return $this -> Promocion -> find('all');
        }
    }
}
    
?>