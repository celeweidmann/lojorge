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
	   <?php //echo $cakeDescription ?>
		<?php //echo $title_for_layout; ?>
		Complejo Lojorge <?php echo ': ' . $title_for_layout; ?> :
	</title>

	<?php
	
        echo $this->Html->meta('icon');

        echo $this->Html->css(array( 'bootstrap.min', 'estilo','bootstrap-responsive.min'));
        
        echo $this->Html->script(array('jquery-1.8.2.min', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	
    <script>
      $(document).ready(function(){
    $('.carousel').carousel({
      interval: 5000
    });
  });
    </script>

</head>

<body>
    <div id="container">
	
	   <!-- header de Cakephp-->	
	   <div id="header">
		
            <!-- Menú de Navegación --> 
            <div class="navbar navbar-fixed-top">

                <div class="navbar-inner">
                       
                    <div class="container">
                            
                    
                        <a class="brand" href="#">
                           <?php echo $this -> Html -> image('iniciop.png');
                               ?>
                            Complejo Lo Jorge
                        </a>
                    
                        <ul class="nav">
                                               
                            <li <?=( $this -> request -> controller == 'pages' && $this->viewVars['page'] == 'home') ? 'class="active"' : 'class=""' ?>>
                                <?php echo $this->Html->link('Principal', array('controller'=>'pages', 'action'=>'display')); ?>
                            </li>
                            <li <?=($this -> request -> controller == 'cabanias'  && $this -> request -> action == 'index') ? 'class="active"' : 'class=""' ?>>      
                                <?php echo $this->Html->link('Cabañas', array('controller'=>'cabanias', 'action'=>'index')); ?>
                            </li>        
                            <li <?=($this -> request -> controller == 'nauticas' && $this -> request -> action == 'index') ? 'class="active"' : 'class=""' ?>>
                                <?php echo $this->Html->link('Almacén Náutico', array('controller'=>'nauticas', 'action'=>'index')); ?>
                              
                            <li <?=($this -> request -> controller == 'contactos' && $this -> request -> action == 'index') ? 'class="active"' : 'class=""' ?>>
                                <?php echo $this->Html->link('Contacto', array('controller'=>'contactos', 'action'=>'index')); ?>
                            </li>
                          
                        </ul>
                
                    </div>
                </div>
            </div>   
        </div> <!-- fin header Cakephp-->
        
 
        
        
		
    <div class="container">
        <div id="principal">
        <div class="row" >
          <div class="span12">
                <div class="row"><!-- div row segundo nivel -->
                    <div class="span9">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>            
                    </div>
                    
                    <div class="span3">
                        <div class="span3">
                            <?php echo $this->element('elementoPromocion'); ?>
                        </div>
                        
                        <div class="span3">
                            <?php echo $this->element('elementoEvento'); ?>
                        </div>
                    
                </div> <!-- div row segundo nivel -->
            </div>
        </div>
    </div>
      </div>
   <div id="footer" >
        <footer class="footer">
            <hr>
            <div class="container">
                <p>
                <img class="icono" src ="img/iconos/direccion1.png"/> Antártida Argentina s/n entre Panamá y Venezuela - Sauce Viejo - Santa Fe - Argentina  |  <img class="icono" src ="img/iconos/telefono1.png"/>  (+54) (342) 495 0480 - (+54) (0342) 155 326489
                </p>
            </div>
        </footer>
    </div>

</div>  
</body>
</html>
