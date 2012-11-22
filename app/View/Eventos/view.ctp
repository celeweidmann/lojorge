<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array( 'load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'bootstrap.min','estilo', 'bootstrap-responsive.min', 'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
<!-- Descripción cabañas -->
            
    <div class="span9 offset1">
        <h2> <?php echo $eventos['Evento']['titulo']?></h2>

        <dl>
            <dt>El Evento</dt>
                <dd><?php echo $eventos['Evento']['descripcion']?></dd>
            <dt>Donde</dt>
                <dd><?php echo $eventos['Evento']['lugar']?></dd>
            <dt>Cuando</dt>
                <dd><?php echo $eventos['Evento']['fecha']?></dd>
             <dt>Más info</dt>
                <dd><?php echo $this->Html->link('+ info »', $eventos['Evento']['link'], array('class' => 'btn')); ?></dd>    
                         
                
        </dl>
        
    </div>
</div>