<div class="divider1"></div>
<div id="our_service">
    <?php foreach ($our_service as $our_service_data): ?>
        <div id="our_service_title">
        <h4>Nuestros servicios</h4>
        </div>
        <p><?php echo Form::textarea('our_service',$our_service_data['our_service'], array('disabled'=>'disabled'))?></p>
    <?php endforeach; ?>
</div>

