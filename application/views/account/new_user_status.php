<div class="divider1"></div>
<div id="status_user_registration">
    <?php if(is_array($new_user)){
        foreach ($new_user as $new_user_info):
            
                echo '<div id="new_user_info">'; 
                echo Form::label('name','User name: ').$new_user_info['user_name'].'</br>';
                echo Form::label('first_name','First name: ').$new_user_info['first_name'].'</br>';
                echo Form::label('last_name','Last name: ').$new_user_info['last_name'].'</br>';
                echo Form::label('phone','Phone: ').$new_user_info['phone'].'</br>';
                echo '</div>';
                
        endforeach;
        
          }else{
                echo '<div class="mensaje_error_usuario_ya_existe">';
                echo $new_user;
                echo '</div>';
          } 
    ?>
</div>