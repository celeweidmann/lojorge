<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min', 'main'));
    echo $this -> Html -> css(array( 'estilo',  'bootstrap-image-gallery.min' ));

?>
</head>
<div class="row">
            
<!-- Descripción cabañas -->
            
    <div class="span8">
        <h2>Cabañas</h2>
        
        <p>
        Las cabañas se encuentran situadas  en un entorno natural de añosa arboleda de algarrobos y talas, a pasos del río Coronda.
        Equipadas con las comodidades de una cuidada hotelería.
        Para que su estadía sea placentera contamos con las siguientes Comodidades y Servicios
        
        Capacidad de 2 hasta 5-6 personas
        </p>
    </div>
    <div class="span4">
        <p>Comodidades</p>
        <ul>
            <li>TV.  D.V.D. TV. Pública Digital</li>
            <li>Internet móvil</li>                                        
            <li>Heladera c/ freezer</li>                                                             
            <li>Juego de vajilla completa</li>                                                   
            <li>Aire acondicionado Frío-calor</li>                                            
            <li>Ventiladores de techo</li>                                                          
            <li>Horno microondas</li>
            <li>Somier  matrimonial y de una plaza</li>
            <li>Asador  p/ cada cabaña.</li>   

        </ul>
    </div>
        <div class="span4">
        <p>Servicios</p>
        <ul>
            <li>Internet móvil</li>                                                                                               
            <li>Sábanas y abrigo de cama</li> 
            <li>Servicio de mucama (optativo)</li>  
            <li>Desayuno</li>
            <li>Piletas con solárium</li>
        </ul>
    </div>
</div>

<div class="span8">
<div class="container-fluid">
    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
        <a href="img/cabanias/cabania1.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania1.jpg" /></a>
        <a href="img/cabanias/cabania2.jpg" title="Pileta" rel="gallery"><img class="pequeña" src="img/cabanias/cabania2.jpg" /></a>
        <a href="img/cabanias/cabania3.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania3.jpg" /></a>
        <a href="img/cabanias/desayuno1.jpg" title="Desayuno" rel="gallery"><img class="pequeña" src="img/cabanias/desayuno1.jpg" /></a>
        <a href="img/cabanias/desayuno2.jpg" title="Desayuno" rel="gallery"><img class="pequeña" src="img/cabanias/desayuno2.jpg" /></a>
    </div>
</div>

<!-- modal-gallery is the modal dialog used for the image gallery -->

<div id="modal-gallery" class="modal modal-gallery hide fade" tabindex="-1">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h3 class="modal-title"></h3>
    </div>
    <div class="modal-body"><div class="modal-image"></div></div>
    <div class="modal-footer">
        <a class="btn modal-download" target="_blank">
            <i class="icon-download"></i>
            <span>Descargar</span>
        </a>
        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000">
            <i class="icon-play icon-white"></i>
            <span>Slideshow</span>
        </a>
        <a class="btn btn-info modal-prev">
            <i class="icon-arrow-left icon-white"></i>
            <span>Anterior</span>
        </a>
        <a class="btn btn-primary modal-next">
            <span>Siguiente</span>
            <i class="icon-arrow-right icon-white"></i>
        </a>
    </div>

</div>
</div>

    
