<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array( 'load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'bootstrap.min','estilo', 'bootstrap-responsive.min', 'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
<!-- Promociones -->
            
    <div class="span8">
        
        <h3><?php echo $promocions['Promocion']['titulo']; ?></h3>
        <div class="span3">
                       
            <?php echo $this -> Html -> image("promociones/".$promocions['Promocion']['id'].".jpg", array('height' => '100', 'width'=>'200', 'class' => 'img-polaroid'))?>
        </div>
        <div class="span4">
            <dl >
                <dt>Fecha</dt> 
                    <dd> <?php echo $promocions['Promocion']['fecha'];?></dd>
            </dl>
            <?php echo $this->Html->link('reservar', array('controller'=>'contactos', 'action'=>'index' ), array('class'=>'btn')); ?>
        </div>
        <div class="span7">
            <h4>Descripción: </h4>        
            <blockquote>
                <p style="text-align:justify">
                <?php echo $promocions['Promocion']['descripcion']; ?>
                </p>
            </blockquote>
        </div>
    </div>
</div>