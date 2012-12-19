<div class="divider1"></div>
<div id="sugerencia_mudanza">
    <?php foreach ($sugerencia_mudanza as $sugerencia_mudanza_data): ?>
        <div id="sugerencia_mudanza_title">
            <h4>Sugerencias en su mudanza</h4>
        </div>
        <p><?php echo Form::textarea('sugerencia_mudanza',$sugerencia_mudanza_data['sugerencia_mudanza'], array('disabled'=>'disabled'))?></p>
    <?php endforeach; ?>
</div>

