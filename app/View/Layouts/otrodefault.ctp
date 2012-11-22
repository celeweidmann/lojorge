<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<!--<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>-->
		Complejo Lojorge <?php echo ': ' . $title_for_layout; ?> :
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
        echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min'));
        
        echo $this->Html->script(array('jquery-1.8.2.min', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
	<div id="container">
		<div id="header">
			<!--<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
		</div>
		<div id="content">
        
        <!-- Menú de Navegación --> 
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                <a class="brand" href="#">Complejo LoJorge</a>
                    <ul class="nav">
                        <li class="active"><a href="#">Principal</a></li>
                        <li><a href="#cabania">Cabaña</a></li>                  
                        <li><a href="#almacen">Almacén Náutico</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>   

    <div class="container-fluid">
        <div class="row-fluid">
        
            <div class="span9">
            <!--Body content-->
                <div class="span10">
                    <?php echo $this->Html->image('lojorge_canoa.png', array('alt' => 'Complejo Lojorge'))?>
                </div>
            
                    <div class="span1">
                    </div>
                    
                    <div class="span5">
                        <h2>Cabañas</h2>
                        <p>
                            En complejo loJorge contamos con tres cabañas completamente equipadas, un inmeso parque con pileta.
                        </p>
                        <img src="http://lorempixel.com/400/200" />
                        <p><a class="btn" href="#">View details &raquo;</a></p>
                    </div>
        
                    <div class="span5">
                        <h2>Almacén Nático</h2>
                        <p>
                            En complejo loJorge contamos con tres cabañas completamente equipadas, un inmeso parque con pileta.
                        </p>
                        <img src="http://lorempixel.com/400/200" />
                        <p><a class="btn" href="#">View details &raquo;</a></p>
                    </div>      
            
                    <div class="span1">
                
                    </div>
            
            </div>
        
            <div class="span3" style="background-color: #D0E9C6">
            <!--Slidebar content-->
                <div class="span9">
                   <h2>Promo</h2>
                    <p> Cabaña + cabalgata. </p>
                    <img src="http://lorempixel.com/400/200/nature/1" />
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                
                <div class="span9">
                    <h2>Eventos</h2>
                    <p> Fiesta del Pescado Frito </p>
                    <img src="http://lorempixel.com/400/200/nature/1" />
                    <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            
            </div>
        </div>
    </div>



    <!-- Fila imagen y promociones -->
            
            
            
            
    <!-- Fila cabañas, nautica y calendario -->
          
        
     
           
			
		</div>
	
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			
		</div>
	</div>
	
</body>
</html>
