<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min'));
    echo $this -> Html -> css(array( 'bootstrap-image-gallery.min', 'estilo', ));

?>
</head>
<div class="row">
            
<!-- Descripción cabañas -->
            
    <div class="span9">
        <h2>Almacén Náutico</h2>
        
        <p>
       Cabañas “Lo Jorge” anexó <b>Almacén Náutico, Camping y Pesca “Lo Jorge”</b>, el mismo se encuentra ubicado sobre la <b>Ruta 11</b>, a la Altura del <b>Km 446</b>, 
       entre calles Mendoza y Entre Ríos, a pasos de la Forestal Sauce Viejo.</br></br>
       Aceptamos tarjetas: VISA - MASTER - NATIVA
       </p>
    </div>

    <div class="span9">
        <h4>Servicios</h4>
    
        <div class="row">
        <ul class="unstyled">
        <li class="span3">
            <div class="thumbnail">
                <img src="img/nautica/caniaPescar1.jpg" alt="">
                <h5>Accesorios Naúticos</h5>
                <p>Repuestos náuticos. Las mejores cañas al mejor precio, mucha variedad y los últimos modelo. Conservadoras de chapa.</p>
                <?php echo $this->Html->link('+ info', 'http://www.facebook.com/lojorgo.pesca?fref=ts', array('class'=> 'btn')); ?>                
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail">
                <img src="img/nautica/carpa1.jpg" alt="">
                <h5>Artículos de Camping y Pesca</h5>
                <p>
                   Carpas para 2, 4, 6 personas
                   Navajas, miras para aire comprimido, tablas grabadas, parrillas, jarros de acero inoxidable recubiertos en madera.</p>
                   <?php echo $this->Html->link('+ info', 'http://www.facebook.com/lojorgo.pesca?fref=ts', array('class'=> 'btn')); ?>
            </div>
        </li>
                <li class="span3">
            <div class="thumbnail">
                <img src="img/nautica/canoa2.jpg" alt="">
                <h5>Excursiones de Pesca</h5>
                <p>Incluye: Carnada, Combustible y un guía calificado.<br>
                    $ 1100 con base de 4 pescadores.</br>
                    $ 900 menos de 4 pescadores.</p>
                <?php echo $this->Html->link('+ info', 'http://www.facebook.com/lojorgo.pesca?fref=ts', array('class'=> 'btn')); ?>
            </div>
        </li>
       </ul>
        </div>
    </div>
    
</div>