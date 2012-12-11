<div id="content" >
  
    <div class="row">

        <div class="span8 offset1">
            
            <?php
                echo $this->Form->create('Promocions',array('url' => array('controller' => 'promocions', 'action' => 'add')));
            ?>  
            
            <form class="form-vertical">
                
              
                <?php
                 echo $this->Form->input( 'titulo', array('value' => '',  'type' => 'text', 'class' => 'span6',
                                            'placeholder' => 'Título de la Promoción.',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           ));
           
                 echo $this->Form->input('fecha', array( 'value' => '', 'type' => 'date', 'class' => 'span2 ',  
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                        ));
            
                 echo $this->Form->input( 'descripcion', array('value' => '',  'type' => 'textarea', 'class' => 'span6', 'row'=> '6',
                                            'placeholder' => 'Descripción del evento',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) ));
                
                 echo $this->Form->input( 'foto', array('value' => '', 'type'=> 'text', 'class'=>'span6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            ));
                
                 echo $this->Form->file('archivo', array('class' => 'span6', 'type' => 'file', 'label' => FALSE, 'placeholder' => __('Archivo')));
                ?>

                <button type="submit" class="btn">Crear Promoción
                <?php
                    echo $this->Form->end();
                ?>
                </button>
            </form>

        </div>

    
    </div>
</div>