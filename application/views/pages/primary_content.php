<!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
<div class="divider1"></div>
    <?php foreach($company_info as $company_info_data): ?>		
                <div id="primarycontainer">
			<div id="primarycontent">
				<!-- Primary content area start -->
		
		
				<div class="post">
					<h4>Nuestros servicios</h4>
					<div class="contentarea">
						<p><?php echo $company_info_data['our_service']?>.</p>
					</div>
				</div>
                
                
                 <div class="divider2"></div>
                 
				<div class="post">
					<h4>Mudanzas que brindamos</h4>
                                        <div class="contentarea">
                                                <p><?php echo $company_info_data['mudanzas']?>.</p>
                                        </div>
				</div>
		
                <div class="divider2"></div>
		
				<div class="post">
					<h4>Sugerencia en su mudanza</h4>
					<div class="contentarea">
						<p><?php echo $company_info_data['sugerencia_mudanza']?>.</p>
					</div>
				</div>
               
		<div class="divider2"></div>
		
				<div class="post">
					<h4>Más información</h4>
					<div class="contentarea">
                                           <?php  
                                              echo '<div id="phones_company_info">';
                                                echo '<div>';
                                                echo Form::label('phone_1','Telefono(s):').' ';
                                                echo $company_info_data['phone_1'].'</br>';
                                                echo '</div>';
                                                echo '<div>';
                                                echo $company_info_data['phone_2'].'</br>';
                                                echo '</div>';
                                              echo '</div>';

                                              echo '<div id="emails_company_info">';
                                                echo '<div>';
                                                echo Form::label('email_1','Correo(s) electronico(s):').' ';
                                                echo $company_info_data['email_1'].'</br>'; 
                                                echo '</div>';
                                                echo '<div>';
                                                echo $company_info_data['email_2'].'</br>';
                                                echo '</div>';
                                              echo '</div>';
                                           ?>
					</div>
				</div>

				<!-- Primary content area end -->
			</div>
		</div>
<?php endforeach; ?>