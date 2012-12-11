<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array( 'load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'bootstrap.min','estilo', 'bootstrap-responsive.min', 'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
<!-- Descripción cabañas -->
            
    <div class="span8">
        
        <h3><?php echo $eventos['Evento']['titulo']; ?></h3>
        <div class="span3">
                       
            <?php echo $this->Html->image("eventos/".$eventos['Evento']['id'].".jpg", array('height' => '100', 'width'=>'200', 'class' => 'img-polaroid'))?>
        </div>
        <div class="span4">
            <dl >
                <dt>Fecha</dt> 
                    <dd> <?php echo $eventos['Evento']['fecha'];?></dd>
                <dt>Lugar</dt>
                    <dd> <?php echo $eventos['Evento']['lugar'];?></dd>
            </dl>
            <p><a class="btn" href="<?php echo $eventos['Evento']['link'] ?>">+ info &raquo;</a></p> 
        </div>
        <div class="span7">
            <h4>Descripción: </h4>        
            <blockquote>
                <p style="text-align:justify">
                <?php echo $eventos['Evento']['descripcion']; ?>
                </p>
            </blockquote>
        </div>
    </div>
</div>