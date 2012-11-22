<?php
    echo $this -> Html -> script(array('load-image.min', 'bootstrap-image-gallery.min'));
    echo $this -> Html -> css(array( 'bootstrap-image-gallery.min', 'estilo', ));

?>

<div id="content" >
  
    <div class="row">

        <div class="span4">

            <form class="form-vertical">
        
                <label>Nombre</label>
                <input type="text" class="span3" placeholder="Aqui su nombre">
                
                <label>Email</label>
                <input type="email" class="span3" placeholder="Aqui su dirección de correo">
                
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Cabañas
                </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Almacén Náutico
                </label>
                
                              
                <label>Mensaje</label>
                <textarea rows=6 class="input-xlarge">
                </textarea> 
                <label class="checkbox">
                    <input type="checkbox"> Enviar copia a mi email
                </label><br>
                
                <button type="submit" class="btn">Enviar</button>
            </form>
            <address>
                <strong>Contacto</strong><br>
                Teléfono: (0342) 495 0480<br>
                Celular: (0342) 155 326489<br>
                Email: complejolojorge@live.com.ar
            </address>
            
        </div>
        <div class="span5">
            <?php  echo $googleMapV3->map();
            ?>
        </div>
    
    </div>
</div>