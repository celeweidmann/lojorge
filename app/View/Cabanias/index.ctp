<head>
<?php
    echo $this->Html->meta('icon');

    echo $this -> Html -> script(array( 'load-image.min', 'bootstrap-image-gallery.min'));
    echo $this -> Html -> css(array('bootstrap-image-gallery.min',  'estilo',  ));

?>
</head>
<div class="row">
            
<!-- Descripción cabañas -->
            
    <div class="span9">
        <h2>Cabañas</h2>
        
        <p>
        Las cabañas se encuentran situadas  en un entorno natural de añosa arboleda de algarrobos y talas, a pasos del río Coronda.</br>
        Equipadas con las comodidades de una cuidada hotelería, poseen capacidad de 2 hasta 5-6 personas.</br>
        Para que su estadía sea placentera contamos con las siguientes Comodidades y Servicios:
        
        </p>
    </div>
    <div class="span1"></div>
    <div class="span3">
        <h4>Comodidades</h4>
        <ul class="unstyled">
            <li><img class="icono" src="img/iconos/televisor.png" />  TV.  D.V.D. TV. Pública Digital</li>                                    
            <li><img class="icono" src ="img/iconos/heladera.png"/>  Heladera c/ freezer</li>                                                             
            <li><img class="icono" src ="img/iconos/vajilla.png"/>  Juego de vajilla completa</li>                                                   
            <li><img class="icono" src ="img/iconos/aireAcondicionado.png"/>  Aire acondicionado Frío-calor</li>                                            
            <li><img class="icono" src ="img/iconos/ventilador.png"/>  Ventiladores de techo</li>                                                          
            <li><img class="icono" src ="img/iconos/microondas.png"/>  Horno microondas</li>
            <li><img class="icono" src ="img/iconos/cama.png"/>  Somier matrimonial y de una plaza</li>
            <li><img class="icono" src ="img/iconos/fuego.png"/>  Asador  p/ cada cabaña.</li>   

        </ul>
    </div>
    <div class="span1"></div>
    <div class="span3">
        <h4>Servicios</h4>
        <ul class="unstyled">
            <li><img class="icono" src ="img/iconos/wifi.png"/>  Internet móvil</li>                                                                                               
            <li><img class="icono" src ="img/iconos/ropaCama.png"/>  Sábanas y abrigo de cama</li> 
            <li><img class="icono" src ="img/iconos/mucama.png"/>  Servicio de mucama (optativo)</li>  
            <li><img class="icono" src ="img/iconos/cafe.png"/>  Desayuno</li>
            <li><img class="icono" src ="img/iconos/pileta.png"/>  Piletas con solárium</li>
        </ul>
    </div>
    <div class="span1"></div>
    <div class="span8">
            <p><em><b>Recuerde:</b> no aceptamos mascotas.</em> <img class="icono" src ="img/iconos/perro.png"/></p> 

    </div>

</div>

<div class="span9">
<div class="container-fluid">
    <div id="gallery" data-toggle="modal-gallery" data-target="#modal-gallery">
        <a href="img/cabanias/cabania1.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania1-p.jpg" /></a>
        <a href="img/cabanias/cabania2.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania2-p.jpg" /></a>
        <a href="img/cabanias/cabania3.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania3-p.jpg" /></a>
        <a href="img/cabanias/cabania4.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania4-p.jpg" /></a>
        <a href="img/cabanias/cabania5.jpg" title="Cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/cabania5-p.jpg" /></a>
        <a href="img/cabanias/desayuno1.jpg" title="Desayuno" rel="gallery"><img class="pequeña" src="img/cabanias/desayuno1-p.jpg" /></a>
        <a href="img/cabanias/desayuno2.jpg" title="Desayuno" rel="gallery"><img class="pequeña" src="img/cabanias/desayuno2-p.jpg" /></a>
        <a href="img/cabanias/desayuno3.jpg" title="Desayuno" rel="gallery"><img class="pequeña" src="img/cabanias/desayuno3-p.jpg" /></a>
        <a href="img/cabanias/interior1.jpg" title="Interior cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/interior1-p.jpg" /></a>
        <a href="img/cabanias/interior2.jpg" title="Interior cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/interior2-p.jpg" /></a>
        <a href="img/cabanias/interior3.jpg" title="Interior cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/interior3-p.jpg" /></a>
        <a href="img/cabanias/interior4.jpg" title="Interior cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/interior4-p.jpg" /></a>
        <a href="img/cabanias/interior5.jpg" title="Interior cabaña" rel="gallery"><img class="pequeña" src="img/cabanias/interior5-p.jpg" /></a>
        <a href="img/cabanias/parque1.jpg" title="Parque" rel="gallery"><img class="pequeña" src="img/cabanias/parque1-p.jpg" /></a>
        <a href="img/cabanias/parque2.jpg" title="Parque" rel="gallery"><img class="pequeña" src="img/cabanias/parque2-p.jpg" /></a>
        <a href="img/cabanias/parque3.jpg" title="Parque" rel="gallery"><img class="pequeña" src="img/cabanias/parque3-p.jpg" /></a>
        <a href="img/cabanias/pileta1.jpg" title="Piletas" rel="gallery"><img class="pequeña" src="img/cabanias/pileta1-p.jpg" /></a>
        <a href="img/cabanias/pileta2.jpg" title="Piletas" rel="gallery"><img class="pequeña" src="img/cabanias/pileta2-p.jpg" /></a>
        <a href="img/cabanias/pileta3.jpg" title="Piletas" rel="gallery"><img class="pequeña" src="img/cabanias/pileta3-p.jpg" /></a>
        <a href="img/cabanias/pileta4.jpg" title="Piletas" rel="gallery"><img class="pequeña" src="img/cabanias/pileta4-p.jpg" /></a>
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

    

