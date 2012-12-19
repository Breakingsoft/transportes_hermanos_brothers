<div class="divider1"></div>
<div id="gallery">
    <div id="gallery_form">
        <div id="gallery_name">
            <h1>Nuestros clientes</h1>
        </div>
                        <div id="slideshow">	 
                            <ul class="slides">
                                <?php foreach($get_images as $get_images_data): ?>
                                      <li><img src="<?php echo $get_images_data['uri'].$get_images_data['file_name']?>"></li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="arrow previous"></span>
                                <span class="arrow next"></span>
                        </div>      
    </div>
</div>