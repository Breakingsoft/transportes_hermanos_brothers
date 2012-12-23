<div class="divider1"></div>
<div class="add_company_info_form">

    <?php echo Form::open(NULL, array('enctype'=>'multipart/form-data'));
            echo '<div id="company_name_title">';
                echo '<h1>Agregar informacion de la compañía</h1>';
                echo '<span>Favor llenar el siguiente formulario</span>';
            echo '</div>';
            echo '<div id="company_name_info_form" class="new_company_field">';
                echo '<div>';
                    echo Form::label('name','Nombre de la compañía:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('name', NULL, array('required' => TRUE, 'class'=>'label_info_form'));
                echo '</div>';
            echo '</div>';
    
            echo '<div id="company_id" class="new_company_field">';
                echo '<div>';
                    echo Form::label('company_id','Cédula jurídica:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('company_id', NULL, array('required' => TRUE, 'class'=>'label_info_form'));
                echo '</div>';
            echo '</div>';
    
            echo '<div id="about_us" class="new_company_field">';
                echo '<div>';
                    echo Form::label('about_us','Quienes somos:');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('about_us', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
          
            echo '<div id="Mudanzas_field" class="new_company_field">';
                echo '<div>';
                    echo Form::label('mudanzas','Mudanzas que brindamos:');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('mudanzas', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="sugerencia_mudanza_field" class="new_company_field">';
                echo '<div>';
                    echo Form::label('sugerencia_mudanza','Sugerencia de mudanzas:');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('sugerencia_mudanza', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="our_service_field" class="new_company_field">';
                echo '<div>';
                    echo Form::label('our_service','Servicio que ofrecemos:');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('our_service', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="address" class="new_company_field">';
                echo '<div>';
                    echo Form::label('address','Dirección:');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('address', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="turismo_info" class="new_company_field">';
                echo '<div>';
                    echo Form::label('turismo','Servicio de turismo');
                echo '</div>';
                echo '<div>';
                    echo Form::textarea('turismo_info', NULL, array('required' => TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="phones" class="new_company_field">';
                echo '<div id="phone_1">';
                    echo '<div>';
                        echo Form::label('telefono_1','Teléfono 1:');
                    echo '</div>';
                    echo '<div>';
                        echo Form::input('phone_1');
                    echo '</div>';
                echo '</div>';
                echo '<div id="phone_2" class="new_company_field">';
                    echo '<div>';
                        echo Form::label('phone_2','Teléfono 2:');
                    echo '</div>';
                    echo '<div>';
                        echo Form::input('phone_2');
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            
            echo '<div id="emails" class="new_company_field">';
                echo '<div id="email_1">';
                    echo '<div>';
                        echo Form::label('email_1','Correo electrónico 1:');
                    echo '</div>';
                    echo '<div>';
                        echo Form::input('email_1');
                    echo '</div>';
                echo '</div>';
                echo '<div id="email_2" class="new_company_field">';
                    echo '<div>';
                        echo Form::label('email_2','Correo electrónico 2:');
                    echo '</div>';
                    echo '<div>';
                        echo Form::input('email_2');
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            
            echo '<div id="logo" class="new_company_field">';
                echo Form::label('logo', 'Logo: ');
                echo Form::file('logo_image',array('required'=>TRUE));
            echo '</div>';
            
            echo '<div id="submit_add_company_info" class="new_company_field">';
                echo Form::submit('submit_add_company_info','Agregar');
            echo '</div>';
            
        echo Form::close();
    ?>
    
</div>