<div id="header">
    <div id="headercontent">
        <?php foreach($company_info as $company_info_data): ?>
        <div id="logo">
            <img src="<?php echo $company_info_data['uri'].$company_info_data['file_name'];?>" alt="<?php echo $company_info_data['file_name']; ?>">    
        </div>
	<div id="name_and_cedula">
		<h1><?php echo $company_info_data['name'] ?></h1>
		<h2><?php echo 'Cédula jurídica: '.$company_info_data['id'] ?></h2>
        </div>
	<?php endforeach; ?>
    </div>
</div>
                    <!-- mostramos el "main_menu" -->
                    <?php echo View::factory('templates/main_menu') ?>

<div id="headerpic">
    <div class="slider-wrappear theme-dark">
                <div class="ribbon"></div>
                <div id="slider" class="nivoSlider">
                    <?php foreach ($hero_images as $hero_images_data): ?>
                         <img src="<?php echo $hero_images_data['uri'].$hero_images_data['file_name'];?>">
                    <?php endforeach;?>
                </div>    
    </div>
</div>          

<div id="menubottom"></div>
