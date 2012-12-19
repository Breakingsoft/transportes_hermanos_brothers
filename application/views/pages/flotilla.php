<div class="divider1"></div>
            <div id="nuestra_flotilla">
                        <div id="gallery_name">
                            <h1>Nuestra flotilla</h1>
                        </div>
                
  <div id="sliderContainer">
     <div id="mySlides">
        <?php $contador = 0; ?>  
        <?php foreach($flotilla as $flotilla_data): ?>
              <div id="slide<?php echo $contador = $contador + 1 ?>" class="slide"> <img src="<?php echo $flotilla_data['uri'].$flotilla_data['file_name']?>" alt="Slide 1 jFlow Plus" />
              <div class="slideContent">
                <h3>Especificaciones</h3>
                <p>Peso: <?php echo $flotilla_data['peso']/1000?> tons., Largo: <?php echo $flotilla_data['largo'] ?> mts., Alto: <?php echo $flotilla_data['alto'] ?> mts.</p>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
          <div id="myController"> 

           <?php foreach($flotilla as $flotilla_data): ?>
              <span class="jFlowControl"></span> 
           <?php endforeach; ?>

          </div>                          
          <div class="jFlowPrev"></div>
          <div class="jFlowNext"></div>
  </div>
                
                
            </div>

            <?php if(Cookie::get('role')== 'Administrador'): ?>
                <div id="add_flotilla">
                    <h2>Agregar unidad</h2>
                        <h3>Peso y medidas</h3>
                    <?php echo Form::open(NULL, array('enctype'=>'multipart/form-data'))?>
                        <div id="agregar_flotilla">
                            <div>
                                <?php echo Form::label('peso','Peso (kilos)') ?>
                            </div>
                            <div>
                                <?php echo Form::input('peso',NULL, array('required' => TRUE)) ?>
                            </div>
                        </div>
                        <div id="agregar_flotilla">
                            <div>
                                <?php echo Form::label('altura', 'Alto (metros)') ?>
                            </div>
                            <div>
                                <?php echo Form::input('altura',NULL, array('required' => TRUE)) ?>
                            </div>
                        </div>
                        <div id="agregar_flotilla">
                            <div>
                                <?php echo Form::label('largo','Largo (metros)') ?>
                            </div>
                            <div>
                                <?php echo Form::input('largo',NULL, array('required' => TRUE)) ?>
                            </div>
                        </div>
                        <div>
                            <?php echo Form::file('vehiculo_imagen', array('required' => TRUE)) ?>
                        </div>
                        <div>
                            <?php echo Form::submit('agregar_unidad_submit','Agregar') ?>
                        </div>
                    <?php echo Form::close() ?>
                </div>
            <?php endif; ?>
