<div id="content" >
  
    <div class="row">

        <div class="span8 offset1">
            
            <?php
                echo $this->Form->create('Evento',array('url' => array('controller'=>'eventos', 'action'=>'add')));
            ?>
            
            <form class="form-vertical">
                
              
                <?php
                 echo $this->Form->input( 'titulo', array('value'=>'',  'type'=>'text', 'class'=>'span6',
                                            'placeholder' => 'Título del evento.',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           ));
               
           
                 echo $this->Form->input('fecha', array( 'value' =>'', 'type' => 'date', 'class' => 'span2 ',  
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                        ));
            
                 echo $this->Form->input( 'lugar', array( 'value'=>'', 'type'=>'text', 'class'=>'span6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            ));
                                            
                 echo $this->Form->input( 'descripcion', array('value'=>'',  'type'=>'textarea', 'class'=>'span6', 'row'=> '6',
                                            'placeholder' => 'Descripción del evento',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) ));
                
                 echo $this->Form->input( 'link', array('value' => '', 'type' =>'text', 'class' => 'span6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            ));
                 //echo $this->Form->input( 'foto', array('value' => '', 'type'=> 'text', 'class'=>'span6',
                   //                         'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                     //                       ));
                 echo $this->Form->input( 'foto', array('value'=> '', 'type' => 'file', 'class' => 'span6', 'label' => FALSE, 'placeholder' => __('Archivo')));
                ?>

                <button type="submit" class="btn">Crear Evento
                <?php
                    echo $this->Form->end();
                ?>
                </button>
            </form>

        </div>

    
    </div>
</div>