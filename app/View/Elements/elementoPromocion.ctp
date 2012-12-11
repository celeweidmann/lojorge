<ul class="nav nav-tabs">
    <li class="active">
        <?php echo $this->Html->link('Promociones', array('controller'=>'promocions', 'action'=>'index')); ?>
    </li>
</ul>
    <div id="CarouselPromocion" class="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
                                    
            <div class="active item">
                
                <?php echo $this->Html->image("promociones/promocionesPrincipal.png", 
                                                array(  'class'  => 'img-polaroid', 
                                                        'height' => '200', 
                                                        'width'  => '300',
                                                        'url'    => array(  'controller'=> 'promocions',
                                                                            'action'    => 'index')));?>
                <h4> <p>¡Disfruta las promo!</p></h4>                   
           </div>
           
           <?php $promocions = $this->requestAction(array('controller'=>'promocions', 'action' => 'getPromociones')); ?>
           
           <?php foreach ($promocions as $promocion):?>
                <div class="item">
                    <?php echo $this->Html->image("promociones/".$promocion['Promocion']['id'].".jpg", 
                                                   array(   'class' => 'img-polaroid',
                                                            'height' => '200', 
                                                            'width'=>'300',
                                                            'url'   => array(   'controller'=>'promocions',
                                                                                'action'    =>'view', 
                                                                                $promocion['Promocion']['id']) )); ?>                                               
                    <h5> <p class="text-info"><?php echo $promocion['Promocion']['titulo'];?></p></h5>
               </div>
               
                                   
            <?php endforeach ?>
                               
            </div>
            <a class="carousel-control left" href="#CarouselPromocion" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#CarouselPromocion" data-slide="next">&rsaquo;</a>
    </div>