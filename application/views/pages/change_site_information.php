<div class="divider1"></div>
<div class="change_company_info_form">
    
    <h1>Cambiar información de la compañía</h1>
    <?php foreach ($company_info_change_site_information as $site_information_data): ?>
    <?php echo Form::open(NULL, array('enctype'=>'multipart/form-data'));
    
            echo '<div id="company_name_info_form" class="new_company_field">';
                echo '<div>';
                echo Form::label('name','Nombre de la compañía:');
                echo '</div>';
                echo '<div>';
                echo Form::input('name', $site_information_data['name'], array('required' => TRUE));
                echo '</div>';
            echo '</div>';
    
            echo '<div id="company_id" class="new_company_field">';
                echo '<div>';
                echo Form::label('company_id','Cédula:');
                echo '</div>';
                echo '<div>';
                echo Form::input('company_id', $site_information_data['id'], array('required'=> TRUE));
                echo '</div>';
            echo '</div>';
    
            echo '<div id="about_us" class="new_company_field">';
                echo '<div>';
                echo Form::label('about_us','Quienes somos:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('about_us', $site_information_data['about_us'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
          
            echo '<div id="mision" class="new_company_field">';
                echo '<div>';
                echo Form::label('mudanzas','Mudanzas que brindamos:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('mudanzas', $site_information_data['mudanzas'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="vision" class="new_company_field">';
                echo '<div>';
                echo Form::label('sugerencia_mudanza','Sugerencias en su mudanza:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('sugerencia_mudanza', $site_information_data['sugerencia_mudanza'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="our_service_field" class="new_company_field">';
                echo '<div>';
                echo Form::label('our_service','Servicio que ofrecemos:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('our_service', $site_information_data['our_service'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="address" class="new_company_field">';
                echo '<div>';
                echo Form::label('address','Dirección:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('address', $site_information_data['address'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
            
             echo '<div id="turismo_field" class="new_company_field">';
                echo '<div>';
                echo Form::label('turismo','Servicio de turismo:');
                echo '</div>';
                echo '<div>';
                echo Form::textarea('turismo_info', $site_information_data['turismo_info'], array('required'=>TRUE));
                echo '</div>';
            echo '</div>';
            
            echo '<div id="phones" class="new_company_field">';
                echo '<div id="phone_1">';
                echo '<div>';
                    echo Form::label('telefono_1','Phone 1:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('phone_1', $site_information_data['phone_1'], NULL);
                echo '</div>';
                echo '</div>';
                echo '<div id="phone_2">';
                echo '<div>';
                    echo Form::label('phone_2','Phone 2:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('phone_2', $site_information_data['phone_2'], NULL);
                echo '</div>';
                echo '</div>';
            echo '</div>';
            
            echo '<div id="emails" class="new_company_field">';
                echo '<div id="email_1">';
                echo '<div>';
                    echo Form::label('email_1','Email 1:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('email_1', $site_information_data['email_1'], NULL);
                echo '</div>';
                echo '</div>';
                echo '<div id="email_2">';
                echo '<div>';
                    echo Form::label('email_2','Email 2:');
                echo '</div>';
                echo '<div>';
                    echo Form::input('email_2', $site_information_data['email_2'], NULL);
                echo '</div>';
                echo '</div>';
            echo '</div>';
            
            echo '<div id="logo" class="new_company_field">';
                echo '<div>';
                echo Form::label('logo', 'Logo: ');
                echo '</div>';
                echo '<div>';
                echo '<img src="'.$site_information_data['uri'].$site_information_data['file_name'].'">';
                echo '</div>';
                echo Form::file('logo_image_update',array('required'=>TRUE));
                echo '</div>';
            
            echo '<div id="submit_change_company_info" class="new_company_field">';
                echo Form::submit('submit_change_company_info','Save');
            echo '</div>';
            
        echo Form::close();
    ?>
    <?php endforeach; ?>
</div>