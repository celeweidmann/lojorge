<?php
    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min'));
    echo $this -> Html -> css(array( 'bootstrap-image-gallery.min', 'estilo', ));

?>

<div id="content" >
  
    <div class="row">
        <div class="span9">
            <h2>Contáctenos</h2>
            <em><p class="muted">Hace tu reserva</p></em>
        </div>
    </div>
    <div class="row">
        <div class="span9">
            <div class="span4">            
            <?php
                echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false')));
            ?>
            
            <form class="form-vertical">
                
              
                <?php
                 echo $this->Form->input( 'nombre', array('value'=>'',  'type'=>'text', 'class'=>'span3',
                                            'placeholder' => 'Aqui su nombre',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           ));
               
                 echo $this->Form->input( 'email', array('value'=>'',  'type'=>'email', 'class'=>'required span3',
                                            'placeholder' => 'Aqui su dirección de correo',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) ));
            
                 echo $this->Form->input('consulta', array(
                                            'options' => array('Cabaña','Náutica'),
                                            'class' => 'span3 ',  
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                        ));
            
                 echo $this->Form->input( 'mensaje', array(
                                            'value'=>'', 'type'=>'textarea', 'rows'=>'6', 'class'=>'span3',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            ));
                ?>

                <button type="submit" class="btn">Enviar
                <?php
                    echo $this->Form->end();
                ?>
                </button>
            </form>
            
         </div>

        <div class="span4">
            <h4>Cabañas</h4>
        <div class="row">
            <div class="span1" style="text-align: right">
                <img class="icono" src ="img/iconos/telefono1.png"/>
            </div>
            <div class="span3">
                 (+54) (0342) 495 0480</br>
                 (+54) (0342) 155 326489          
            </div>
        </div>
            <div class="row">
            <div class="span1" style="text-align: right">
                <i class="icon-envelope"></i></br>
            </div>
            <div class="span3">
                 complejolojorgesv@gmail.com<br>
                complejolojorge@live.com.ar </br> 
            </div>
        </div>
        <div class="row">
            <div class="span1" style="text-align: right">
               <img class="icono" src ="img/iconos/direccion1.png"/></br>
            </div>
            <div class="span3">
                 Antártida Argentina y Panamá - Sauce Viejo - Santa Fe.
            </div>
        </div>
        <hr>
        </div>
                <div class="span4">
            <h4>Almacén Náutico</h4>
        <div class="row">
            <div class="span1" style="text-align: right">
                <img class="icono" src ="img/iconos/telefono1.png"/>
            </div>
            <div class="span3">
                 (+54) (0342) 495 0480</br>
                 (+54) (0342) 155 326489          
            </div>
        </div>
        <div class="row">
            <div class="span1" style="text-align: right">
                <i class="icon-envelope"></i></br>
            </div>
            <div class="span3">
                lojorge_pesca@hotmail.com.ar </br>
            </div>
        </div>
         <div class="row">
            <div class="span1" style="text-align: right">
               <img class="icono" src ="img/iconos/direccion1.png"/></br>
            </div>
            <div class="span3">
                 Ubicado sobre Ruta 11,( Altura Km 446) entre calles Mendoza y Entre Ríos (a pasos de la Forestal Sauce Viejo).
            </div>
        </div>
        </div>
        </div>

    
    </div>
</div>