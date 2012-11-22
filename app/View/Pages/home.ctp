<!-- Fila imagen y promociones -->
<div class="row">
            
    <div class="span8">
        <?php echo $this->Html->image('logolojorge.png', array('alt' => 'Complejo Lojorge'))?>
    </div>

    
    <!-- Fila cabañas, nautica y calendario -->
            
    <div class="span4">
        <h2>Cabañas</h2>
        <p>
          En complejo loJorge contamos con tres cabañas completamente equipadas, un inmeso parque con pileta.
        </p>
      <!--
        <img src="http://lorempixel.com/400/200" />
      -->
         <?php echo $this->Html->image('cabanias/cabania3.jpg', array('height' => '200', 'width'=>'400'))?>
             
         
        <p>
             <?php echo $this->Html->link('+ info', array('controller'=>'cabanias', 'action'=>'index' ), array('class'=>'btn')); ?>
             <?php echo $this->Html->link('reservar', array('controller'=>'contactos', 'action'=>'index' ), array('class'=>'btn')); ?>
        </p>
    </div>

    <div class="span4">
        <h2>Almacén Nático</h2>
        <p>
         En complejo loJorge contamos con tres cabañas completamente equipadas, un inmeso parque con pileta.
        </p>
        <!--
        <img src="http://lorempixel.com/400/200" />
        -->
         <?php echo $this->Html->image('almacenNautica.jpg', array('height' => '200', 'width'=>'400'))?>
        <p>
            <?php echo $this->Html->link('+ info', array('controller'=>'nauticas', 'action'=>'index' ), array('class'=>'btn')); ?>
            <?php echo $this->Html->link('reservar', array('controller'=>'contactos', 'action'=>'index' ), array('class'=>'btn')); ?>
        </p>
    </div>      
            
    <div class="span1">
                
    </div>
   
</div><!-- div class row-->