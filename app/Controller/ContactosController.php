<?php
App::uses('CakeEmail', 'Network/Email');

class ContactosController extends AppController {

    public $name = 'Contactos';

    public function index(){

       if ($this->request->is('post')) {
                 
            $email = new CakeEmail('gmail');
                   
            if(isset($this->data['Contacto'])){
                
                //Armo el mensaje para enviar al mail.   
                $mensaje = 'Enviado por: '.$this->data['Contacto']['nombre']."\n".
                           'Mail de contacto: '.$this->data['Contacto']['email']."\n".
                           'Consulta: '.$this->data['Contacto']['message'];
                
                //Envia la consulta al mail de cabañas.
                if($this->data['Contacto']['consulta'] == 0){
                    $email->to('celeweidmann@gmail.com');
                } 
                //Envia la consulta al mail de Almacén Náutico
                elseif ($this->data['Contacto']['consulta'] == 1) {
                        $email->to('celeweidmann@hotmail.com');
                } 
     
            }
           
            if ( $email->send($mensaje)){
                 $this->Session->setFlash('<div class="alert alert-success"> Su consulta ha sido enviada con éxito.'.'<br>'.' 
                                            Nos comunicaremos con usted a la brevedad. </div>');
           
            }
        $this->redirect(array('controller' => 'contactos', 'action' => 'index'));

        }

    }

    
     public function contacto(){

        if ($this->request->is('post')) {
                 
            $email = new CakeEmail('gmail');
                   
            if(isset($this->data['Contacto'])){
                
                //Armo el mensaje para enviar al mail.   
                $mensaje = 'Enviado por: '.$this->data['Contacto']['nombre']."\n".
                           'Mail de contacto: '.$this->data['Contacto']['email']."\n".
                           'Consulta: '.$this->data['Contacto']['message'];
                
                //Envia la consulta al mail de cabañas.
                if($this->data['Contacto']['consulta'] == 0){
                    $email->to('celeweidmann@gmail.com');
                } 
                //Envia la consulta al mail de Almacén Náutico
                elseif ($this->data['Contacto']['consulta'] == 1) {
                        $email->to('celeweidmann@hotmail.com');
                } 
     
            }
           
            if ( $email->send($mensaje)){
                 $this->Session->setFlash('<div class="alert alert-success"> Su consulta ha sido enviada con éxito.'.'<br>'.' 
                                            Nos comunicaremos con usted a la brevedad. </div>');
           
            }
        $this->redirect(array('controller' => 'contactos', 'action' => 'contacto'));

        }
     }
     
    public function respuesta() {}

}