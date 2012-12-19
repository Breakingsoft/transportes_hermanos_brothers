<div class="divider1"></div>
<div id="edit_ceeb_code_form">
    <?php echo Form::open()?>
    <table>
        <?php foreach($ceeb_code as $ceeb_code_data): ?>
        <tr>
            <td>Ceeb Code:</td>
            <td><?php echo Form::input('ceeb_code', $ceeb_code_data['ceeb_code'])?>
        </tr>
        <tr>
            <td>High School Name:</td>
            <td><?php echo Form::input('high_school_name',$ceeb_code_data['high_school_name'])?>
        </tr>
        <?php endforeach; ?>    
    </table>
    <div id="edit_code">
        <?php echo Form::button('edit_code', 'Edit')?>
    </div>
    
    <?php echo Form::close()?>
</div>
