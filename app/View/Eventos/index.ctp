<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'estilo',  'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
    <div class="span9 offset1">
        <h2>Eventos</h2>
         <?php if(empty($eventos)): ?>
            No hay eventos disponibles
        
        <?php else: ?>
         

            <?php foreach ($eventos as $evento): ?>
                <div class="span8">
                    
                    <div class="span4">
                        <?php echo $this->Html->image("eventos/".$evento['Evento']['id']."jpg", array('height' => '200', 'width'=>'400'))?>
                        <p><a class="btn" href="#">+ info &raquo;</a></p>
                     
                    </div>
                    <div class="span4">
                    <h3><?php echo $evento['Evento']['titulo']; ?></h3>
                    
                    <h4>Fecha: </h4> 
                    <?php echo $evento['Evento']['fecha'];?>
                
                    <h4>Lugar: </h4>
                    <?php echo $evento['Evento']['lugar'];?>
                    
                    </div>
                    <div class="span7">
                    <h4>Descripción: </h4>
                    <?php echo $evento['Evento']['descripcion']; ?>
                    </div>
               </div>
             <?php endforeach; ?>
        <?php endif;?>

    </div>

</div>