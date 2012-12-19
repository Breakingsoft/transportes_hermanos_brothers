<div class="divider1"></div>
<div id="delete_user_form">
    <?php echo Form::open() ?>
        <div id="delete_user_title">
            <h1>
                Eliminar usuario
            </h1>
        </div>
        <div id="delete_user_select">
            <?php echo Form::label('users', 'Users:');
                  foreach($user_options as $user_options_index){
                      foreach ($user_options_index as $user_options_value) {
                          $user_value[$user_options_value] = $user_options_value;
                      }
                  }
                  echo Form::select('users', $user_value); 
                  echo '<div id="delete_user_submit_button">';
                    echo Form::submit('delete_user_submit', 'Eliminar');
                  echo '</div>';?>
        </div>
    <?php echo Form::close() ?>
</div>