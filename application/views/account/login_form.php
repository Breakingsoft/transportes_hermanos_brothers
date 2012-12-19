<div class="divider1"></div>
<?php

                    echo '<div class="user_login_form">';
                        echo Form::open();
                        echo '<div class="user_name_login">';
                            echo '<div>';
                                echo Form::label('user_name_login','Nombre del usuario: ');
                            echo '</div>';
                            echo '<div>';
                                echo Form::input('user_name_login', NULL, array('required'=>TRUE));
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="password_login">';
                            echo '<div>';
                                echo Form::label('password_login','Contraseña: ');
                            echo '</div>';
                            echo '<div>';
                                echo Form::password('password_login', NULL, array('required'=>TRUE));
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="submit_login">';
                            echo Form::submit('submit_login','Iniciar sesión');
                        echo '</div>';
                    echo '</div>';
                 
?>
