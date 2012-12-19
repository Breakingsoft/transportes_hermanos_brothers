<div class="divider1"></div>
<div id="add_ceeb_code_form">
    <?php echo Form::open('codes/add',array('enctype'=>'multipart/form-data')) ?>
    <table>
        <tr>
            <td>CEEB Code</td>
            <td><?php echo Form::input('ceeb_code')?></td>
        </tr>
        <tr>
            <td>High School Name</td>
            <td><?php echo Form::input('high_school_name')?></td>
            <td><?php echo Form::button('look_up_code','Look up code')?></td>
        </tr>
    </table>
    <div id="update_code">
        <?php echo Form::button('create_code', 'Create')?>
    </div>
    <?php echo Form::close() ?>
</div>
