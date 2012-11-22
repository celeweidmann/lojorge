<?php
App::uses('CakeEmail', 'Network/Email');

class ContactosController extends AppController {

    public $name = 'Contactos';

    public function index(){

       if ($this->request->is('post')) {
            
            //Creo un nuevo CakeEmail usando la plantilla gmail.     
            $email = new CakeEmail('gmail');
                   
                   
            if(isset($this->data['Contacto'])){

                $this->Contacto->set($this->data);
                
                //Valido los datos del formulario
                if($this->Contacto->validates()){
                                
                    //Armo el mensaje para enviar al mail.   
                    $mensaje = 'Enviado por: '.$this->data['Contacto']['nombre']."\n".
                               'Mail de contacto: '.$this->data['Contacto']['email']."\n".
                               'Consulta: '.$this->data['Contacto']['mensaje'];
                
                    //Envia la consulta al mail de cabañas.
                    if($this->data['Contacto']['consulta'] == 0){
                        $email->to('celeweidmann@gmail.com');
                    } 
                    //Envia la consulta al mail de Almacén Náutico
                    elseif ($this->data['Contacto']['consulta'] == 1) {
                        $email->to('celeweidmann@hotmail.com');
                    } 
             
                    if ( $email->send($mensaje)){
                            //Mensaje indicando que la consulta se ha enviado con éxito.
                            $this->Session->setFlash('<div class="alert alert-success"> Su consulta ha sido enviada con éxito.'.'<br>'.' 
                                            Nos comunicaremos con usted a la brevedad. </div>');
           
                    }
                }
            }
 
        //$this->redirect(array('controller' => 'contactos', 'action' => 'index'));

        }
    }

   

}