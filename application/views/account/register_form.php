<div class="divider1"></div>
<div class="register_form_information">
    <h1>Nuevo usuario</h1>
    <p>Favor llene el siguiente formulario para agregar un nuevo usuario
    </p>
</div>
<div class="user_register_form">
    <?php echo Form::open();?>
        <h2>Formulario para registro de usuarios</h2>
            <fieldset class="user_register_personal_information"><h4>Informacion personal</h4>
                <div class="user_first_name">
                    <div>
                        <?php echo Form::label('first_name', 'Nombre:'); ?>
                    </div>
                    <div>
                        <?php echo Form::input('first_name', NULL, array('maxlength'=>'20','required'=> TRUE));?>
                    </div>
                </div>
                <div class="user_last_name"> 
                    <div>
                        <?php echo Form::label('last_name', 'Primer apellido:'); ?>
                    </div>
                    <div>
                        <?php echo Form::input('last_name', NULL, array('maxlength'=>'20','required'=> TRUE));?>
                    </div>
                </div>
                <div class="user_phone"> 
                    <div>
                        <?php echo Form::label('phone', 'Teléfono:'); ?>
                    </div>
                    <div>
                        <?php echo Form::input('phone', NULL, array('maxlength'=>'10'));?>
                    </div>
                </div>
                <div class="user_email"> 
                    <div>
                        <?php echo Form::label('email', 'E-mail:'); ?>
                    </div>
                    <div>
                        <?php echo Form::input('email', NULL, array('maxlength'=>'27'));?>
                    </div>
                </div>
                
            </fieldset>    
            <fieldset class="user_register_role"> 
                <div class="user_role_section">        
                    <?php echo Form::label('userrole', 'Seleccione el rol de usuario:'); ?>                
                    <?php  $roles = array();
                           foreach ($get_roles as $get_roles_index){
                            foreach ($get_roles_index as $get_roles_data){
                                $roles[$get_roles_data]=$get_roles_data;
                            }
                          }
                           echo '<div>';
                           echo Form::select('userrole', $roles);
                           echo '</div>';
                    ?>
                </div>
            </fieldset>
            <fieldset class="user_register_account">
                <div class="user_name_section">
                    <div>
                        <?php echo Form::label('username', 'Nombre de usuario:'); ?>
                    </div>
                    <div>
                        <?php echo Form::input('username', NULL, array('maxlength'=>'20','required'=> TRUE))?>
                    </div>    
                </div>
                <div class="password_section">
                    <div>
                        <?php echo Form::label('password', 'Contraseña:'); ?>
                    </div>
                    <div>
                        <?php echo Form::password('password', NULL, array('maxlength'=>'25','required'=> TRUE, 'id'=>'password_user_registration'))?>
                    </div>    
                </div>    
                <div class="confirm_password_section">    
                    <div>
                        <?php echo Form::label('password_confirmation', 'Confirmar contraseña:'); ?>
                    </div>
                    <div>
                        <?php echo Form::password('password_confirmation', NULL, array('maxlength'=>'25','required'=> TRUE, 'id'=>'password_confirm_user_registration'))?>
                    </div>    
                </div>
            </fieldset> 
                <div class="submit_section">
                    <?php echo Form::submit('submit_form_registration', 'Crear usuario'); ?>
                </div>  
    <?php echo Form::close(); ?>
</div>