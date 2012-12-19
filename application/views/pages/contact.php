<div class="divider1"></div>
<div id="contact_us_form">
    <h1>Contactanos</h1>
    <br>
    <br>
    <div id="contact_us_address">
        <?php foreach($address as $address_data): ?>
            <h4>Dirección</h4></br>
            <?php echo $address_data['address'] ?>
        <?php endforeach; ?>
    </div>
    <div class="divider2"></div>
    <?php echo Form::open(); ?>
        <div id="subject_contact_us">
            <?php if(Cookie::get('role')=='unknown') {?>
                <div>
                    <?php echo Form::label('name','Nombre completo:'); ?>
                </div>
                <div>
                    <?php echo Form::input('name', NULL, array('required'=>TRUE)); ?>
                </div>
                <div>
                    <?php echo Form::label('email','Email:'); ?>
                </div>
                <div>
                    <?php echo Form::input('email', NULL, array('required'=>TRUE)); ?>
                </div>
            <?php } ?>
            <div>
                 <?php echo Form::label('subject','Asunto:'); ?>
            </div>
            <div>
                 <?php echo Form::input('asunto', NULL, array('required'=>TRUE)); ?>
            </div>
        </div>
        <div id="message_contact_us">
            <div>
                <?php echo Form::label('message','Mensaje:'); ?>
            </div>
            <div>
                <?php echo Form::textarea('mensaje', NULL, array('required'=>TRUE)); ?>
            </div>    
        </div>
        <div id="contact_us_submit">
            <?php echo Form::submit('contact_us_submit','Enviar'); ?>
        </div>
    <br>
    <br>
    <?php echo Form::close(); ?>
    <?php if(!empty($messages)): ?>
        <?php if ((Cookie::get('role')=='Administrador')): ?>
         
        <h3>Mensajes</h3>
            <?php foreach($messages as $message): ?>
         <div class="divider2"></div>
            <div id="mensaje">
                <div id="mensaje_fecha">
                        <?php echo Form::label('fecha','Enviado: ') ?>
                        <?php echo cambiarfecha($message['fecha'])?>
                </div>
                <div id="mensaje_nombre_usuario">
                    <?php echo Form::label('nombre','Nombre:') ?>
                    <?php echo $message['nombre']?>
                </div>
                <div id="mensaje_email_usuario">
                        <?php echo Form::label('email','Email:') ?>
                        <?php
                            $decrypted = Encrypt::instance();
                            $data_decrypted = $decrypted->decode($message['email']);
                            echo $data_decrypted;
                        ?>
                </div>
                <div id="mensaje_asunto">
                        <?php echo Form::label('asunto','Asunto:') ?>
                        <?php echo $message['asunto']?>
                </div>
                <div id="mensaje_mensaje">
                    <div>
                        <?php echo Form::label('mensaje','Mensaje:') ?>
                    </div>
                    <div>
                        <?php echo $message['mensaje']?>
                    </div>
               </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif;?>
</div>

<?php function cambiarfecha($fecha){
 list($year,$mes,$dia)=explode("-",$fecha);
 $fecha="$dia-$mes-$year";
 return $fecha;
 }?>