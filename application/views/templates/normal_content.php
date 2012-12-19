<!-- Normal content: Stuff that's not going to be put in the left or right column. -->
<?php foreach($company_info as $company_info_data): ?>
<div id="normalcontent">
    <h3><strong>Quienes somos</strong></h3>
	<div class="contentarea">
        	
                <!-- Normal content area start -->
                <!-- company photo "about us"-->
                    <p>
                        <?php echo $company_info_data['about_us']; ?>
                    </p>
                
	<!-- Normal content area end -->
	</div>
</div>
<?php endforeach; ?>