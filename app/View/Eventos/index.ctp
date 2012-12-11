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
                     <h3><?php echo $evento['Evento']['titulo']; ?></h3>
                    <div class="span3">
                       
                        <?php echo $this->Html->image("eventos/".$evento['Evento']['id'].".jpg", array('height' => '100', 'width'=>'200', 'class' => 'img-polaroid'))?>
                        
    
                    </div>
                    <div class="span4">
                       <dl >
                         <dt>Fecha</dt> 
                         <dd> <?php echo $evento['Evento']['fecha'];?></dd>
                         <dt>Lugar</dt>
                         <dd> <?php echo $evento['Evento']['lugar'];?></dd>
                      </dl>
                      <p><a class="btn" href="<?php echo $evento['Evento']['link'] ?>">+ info &raquo;</a></p> 
                    </div>
                    <div class="span7">
                    <h4>Descripción: </h4>
                    
                    <blockquote>
                    <p style="text-align:justify">
                         <?php echo $evento['Evento']['descripcion']; ?>
                    </p></blockquote>
                    </div>
               </div>
             <?php endforeach; ?>
        <?php endif;?>

    </div>

</div>