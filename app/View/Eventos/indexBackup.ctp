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
         

        <table>
            <tr>
                <th>Id</th>
                <th>titulo</th>
                <th>descripcion</th>
            </tr>
        
            <!-- Here is where we loop through our $posts array, printing out post info -->
        
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?php echo $evento['Evento']['id']; ?></td>
                <td>
                    <?php echo $this->Html->link($evento['Evento']['titulo'],
                                array('controller' => 'eventos', 'action' => 'view', $evento['Evento']['id'])); ?>
                </td>
                <td><?php echo $evento['Evento']['descripcion']; ?></td>
            </tr>
            <?php endforeach; ?>
        
        </table>
    </div>

</div>

    
