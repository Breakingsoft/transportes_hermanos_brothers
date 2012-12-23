<div class="divider1"></div>
<div class="delete_image_form">

      <h1>Borrar imagen</h1>
        
        <?php echo Form::open('static/delete_image'); ?>
            
                        <?php  $imagenes = array();
                           foreach ($images as $images_index){
                            foreach ($images_index as $images_data){
                                $imagenes[$images_data]=$images_data;
                            }
                          }
                           
                           /* abrimos un nuevo formulario para poder eliminar la imagen seleccionada */
                           echo Form::open('static/delete_image');
                           echo '<div id="imagen_eliminar">';
                           echo Form::select('images', $imagenes);
                           echo '<br>';
                           echo '<br>';
                           echo '<div>';
                           // este tag "img" recibirá el source por medio de jQuery
                           echo '<img>';
                           echo '</div>';
                           echo '</div>';
                           echo '<br>';
                          ?>
      
                    <div class="delete_image_submit">
                        <?php echo Form::submit('delete_image_submint','Eliminar'); ?>
                    </div>   
        
        <?php echo Form::close(); ?>
</div>
