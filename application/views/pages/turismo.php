<div class="divider1"></div>
<div id="turismo">
    <?php foreach ($turismo_info as $turismo_info_data): ?>
        <div id="sugerencia_mudanza_title">
            <h4>Servicio de turismo</h4>
        </div>
        <p><?php echo Form::textarea('sugerencia_mudanza',$turismo_info_data['turismo_info'], array('disabled'=>'disabled'))?></p>
    <?php endforeach; ?>
</div>

