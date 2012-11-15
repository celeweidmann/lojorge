<?php
    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min'));
    echo $this -> Html -> css(array( 'bootstrap-image-gallery.min', 'estilo', ));

?>

<div id="content" >
  
    <div class="row">

        <div class="span8 offset1">
            
            <?php
                echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false')));
            ?>
            
            <form class="form-vertical">
                
              
                <?php
                 echo $this->Form->input( 'nombre', array('value'=>'',  'type'=>'text', 'class'=>'span3',
                                          'placeholder' => 'Aqui su nombre') );
               
                 echo $this->Form->input( 'email', array('value'=>'',  'type'=>'email', 'class'=>'span3',
                                          'placeholder' => 'Aqui su dirección de correo') );
            
                 echo $this->Form->input('consulta', array(
                                            'options' => array('Cabaña','Náutica'),
                                            'empty' => '(Elija una opción)',
                                            'class' => 'span3 ',
                                        ));
              
                 echo $this->Form->input( 'message', array('value'=>'', 'type'=>'textarea', 'rows'=>'6', 'class'=>'span3'));
                ?>

                <button type="submit" class="btn">Enviar
                <?php
                    echo $this->Form->end();
                ?>
                </button>
            </form>
            <address>
                <strong>Contacto</strong><br>
                Teléfono: (0342) 495 0480<br>
                Celular: (0342) 155 326489<br>
                Email: complejolojorge@live.com.ar
            </address>
            
        </div>

    
    </div>
</div>