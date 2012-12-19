<div class="divider1"></div>
<div id="mudanzas">
    <?php foreach ($mudanzas as $mudanzas_data): ?>
        <div id="mudanzas_title">
               <h4>Mudanzas que brindamos</h4>
        </div>
        <p><?php echo Form::textarea('our_service',$mudanzas_data['mudanzas'], array('disabled'=>'disabled'))?></p>
    <?php endforeach; ?>
</div>

