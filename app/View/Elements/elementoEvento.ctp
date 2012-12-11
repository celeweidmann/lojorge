<ul class="nav nav-tabs">
    <li class="active">
       
      <?php echo $this->Html->link('Eventos', array('controller'=>'eventos', 'action'=>'index')); ?>
        
    </li>
</ul>

    <div id="CarouselEvento" class="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
                                    
            <div class="active item">

                <?php echo $this->Html->image("eventos/eventosPrincipal.png", 
                                                array(  'class' => 'img-polaroid', 
                                                        'height'=> '200', 
                                                        'width' =>'300',
                                                        'url'   => array(   'controller'=> 'eventos',
                                                                            'action'    => 'index')));?>
                 <h4> <p>Festivales en Sauce</p></h4>                      
           </div>
           
           <?php $eventos = $this->requestAction(array('controller'=>'eventos', 'action' => 'getEventos')); ?>
           
           <?php foreach ($eventos as $evento):?>
                <div class="item">
                    <?php echo $this->Html->image("eventos/".$evento['Evento']['id'].".jpg", 
                                                    array(  'class' => 'img-polaroid',
                                                            'height'=> '200', 
                                                            'width' =>'300',
                                                            'url'   => array(   'controller'=>'eventos',
                                                                                'action'    =>'view', 
                                                                                $evento['Evento']['id']) )); ?>                                              
                    <h5> <p class="text-info"><?php echo $evento['Evento']['titulo'];?></p></h5>
                </div>
                                    
            <?php endforeach ?>
                               
            </div>
            <a class="carousel-control left" href="#CarouselEvento" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#CarouselEvento" data-slide="next">&rsaquo;</a>
    </div>
