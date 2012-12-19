<div class="divider1"></div>
<div class="new_gallery_form">
        <h1>Nueva imagen</h1>
        <?php echo Form::open(NULL, array('enctype'=>'multipart/form-data')); ?>
            
            <?php if(Cookie::get('role')== 'Administrador'){ ?>
                    <div class="gallery_image">
                        <?php echo Form::label('image_gallery','Imagen: '); ?>
                        <?php echo Form::File('new_image',array('required'=>TRUE)); ?>
                        <?php echo Form::label('new_image','opción: '); ?>
                        <?php echo Form::select('image_options', array('Cliente'=> 'Cliente', 'Hero' => 'Hero')); ?>
                    </div>
                    <div class="gallery_image_submit">
                        <?php echo Form::submit('image_gallery_submit','Guardar'); ?>
                    </div>
            <?php }else{?>
                    <div class="gallery_image">
                        <?php echo Form::label('image_gallery','Imagen: '); ?>
                        <?php echo Form::File('new_image'); ?>
                    </div>
                    <div class="gallery_image_submit">
                        <?php echo Form::submit('image_gallery_submit','Guardar'); ?>
                    </div>   
            <?php } ?>
        
        <?php echo Form::close(); ?>
</div>
