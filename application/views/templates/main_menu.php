<div id="menu">
    <ul>
       <li><a href="<?php echo URL::base(); ?>static/index">Inicio</a></li>
       <li><a href="<?php echo URL::base(); ?>static/nuestros_servicios">Nuestros Servicios</a></li>
       <li><a href="<?php echo URL::base(); ?>static/mudanzas">Mudanzas que brindamos</a></li>
       <li><a href="<?php echo URL::base(); ?>static/nuestra_flotilla">Nuestra flotilla</a></li>
       <li><a href="<?php echo URL::base(); ?>static/sugerencia_mudanza">Sugerencias en su mudanza</a></li>
       <li><a href="<?php echo URL::base(); ?>static/gallery">Portafolio de clientes</a></li>
       <li><a href="<?php echo URL::base(); ?>static/contact">Turismo</a></li>
       <li><a href="<?php echo URL::base(); ?>static/contact">Contactanos</a></li>
         <?php if(Cookie::get('role')=='unknown') { ?>
            <li><a href="<?php echo URL::base().'static/user_login'; ?>">Iniciar sesión</a></li>
         <?php } else {?>
            <li><a href="<?php echo URL::base().'static/user_logout'; ?>">Cerrar sesión</a></li>
         <?php } ?>  
    </ul>
</div>

<div id="menubottom"></div>