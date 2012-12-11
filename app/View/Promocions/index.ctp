<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'estilo',  'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
    <div class="span9 offset1">
        <h2>Promociones</h2>
         <?php if(empty($promocions)): ?>
            No hay promociones disponibles
        
        <?php else: ?>
         

            <?php foreach ($promocions as $promocion): ?>
                <div class="span8">
                     <h3><?php echo $promocion['Promocion']['titulo']; ?></h3>
                    <div class="span3">
                       
                        <?php echo $this -> Html -> image("promociones/".$promocion['Promocion']['id'].".jpg", array('height' => '100', 'width'=>'200', 'class' => 'img-polaroid'))?>
                        
    
                    </div>
                    <div class="span4">
                       <dl >
                         <dt>Fecha</dt> 
                         <dd> <?php echo $promocion['Promocion']['fecha'];?></dd>
                      </dl>
                      <?php echo $this->Html->link('reservar', array('controller'=>'contactos', 'action'=>'index' ), array('class'=>'btn')); ?>
                    </div>
                    <div class="span7">
                    <h4>Descripción: </h4>
                    
                    <blockquote>
                    <p style="text-align:justify">
                         <?php echo $promocion['Promocion']['descripcion']; ?>
                    </p></blockquote>
                    </div>
               </div>
             <?php endforeach; ?>
        <?php endif;?>

    </div>

</div>