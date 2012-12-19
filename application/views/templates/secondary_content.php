<!-- Secondary content: Stuff that goes in the secondary content column (by default, the narrower right column) -->
<div id="secondarycontent">
    <!-- Secondary content area start -->
		
	<!-- HINT: Set any div's class to "box" to encapsulate it in (you guessed it) a box -->
	<div class="box">
            <h4>Usuario</h4>
		<div class="contentarea">
			<?php if(Cookie::get('role')=='unknown'){
                        echo '<div id="current_user_unknown">';
                            echo '<div id="current_user_unknown_name>';
                                echo Form::label('user_name', '');
                                echo Cookie::get('user_name').'</br>';
                            echo '</div>';
                            echo '<div id="user_login_message">Por favor inicie sesión</div>';
                            echo '<a href="'.URL::base().'static/user_login'.'">'.'iniciar sesión'.'</a>';
                        echo '</div>';
                     } elseif ((Cookie::get('role')=='Administrador') or (Cookie::get('role')=='Registered user')){
                        echo '<div id="current_user_registered">';
                            echo '<div id="current_user_registered_name>';
                                echo Form::label('user_name', '');
                                echo Cookie::get('user_name').'</br>';
                                echo Cookie::get('role').'</br>';
                            echo '</div>';
                            echo '<div id="current_user_registered_logout">';
                              echo '<a href="'.URL::base().'static/user_logout'.'">'.'cerrar sesión'.'</a>';
                            echo '</div>';
                        echo '</div>';
                     }
               ?>
		</div>
	</div>
          <div>
                    <?php if(Cookie::get('role')=='Administrador') {?>
            <div class="administative_options">
                    <h4 >Opciones administrativas</h4>
            </div>
                    <?php if (empty($company_info)) { ?>
                        <ul>
                            <li><a href="<?php echo URL::base(); ?>static/register">nuevo usuario</a></li>
                        </ul>
                    <?php } else { ?>
                        <ul>
                            <li><a href="<?php echo URL::base(); ?>static/add_gallery">Nueva imagen</a></li>
                            <li><a href="<?php echo URL::base(); ?>static/register">nuevo usuario</a></li>
                            <li><a href="<?php echo URL::base(); ?>static/change_site_information">Modificar informacion de la compañía</a></li>
                            <li><a href="<?php echo URL::base(); ?>static/delete_user">Eliminar usiario</a></li>
                        </ul>
                        <?php } ?>    
                    <?php } ?>
           
          </div>    
    <!-- Secondary content area end -->
</div>