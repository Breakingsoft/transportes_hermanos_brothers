<div class="divider1"></div>
<div id="codes">
    <?php echo Form::open('codes/add')?>
        <div id="codes_title">
           <table> 
            <tr>
                <th>ceeb code</th>
                <th>High School Name</th>
            </tr>
           <?php foreach($ceeb_codes as $ceeb_codes_data): ?>
            <tr>
                <td>
                    <?php echo $ceeb_codes_data['ceeb_code']?>
                </td>
                <td>
                    <?php echo $ceeb_codes_data['high_school_name']?>
                </td>
                <td>
                    <?php echo Form::open('codes/edit/'.$ceeb_codes_data['ceeb_code'])?>
                        <?php echo Form::button('edit_button', 'edit')?>
                    <?php echo Form::close()?>
                </td>
                <td>
                    <?php echo Form::open('codes/delete/'.$ceeb_codes_data['ceeb_code'])?>
                        <?php echo Form::button('delete_button', 'X')?>
                    <?php echo Form::close()?>
                </td>
            </tr>
           <?php endforeach; ?>
           </table> 
        </div>
    <div id="add_new_code">
        <?php echo Form::button('add_ceeb_code', 'Add')?>
    </div>
    <?php echo Form::close();?>
        <?php echo Form::open('codes/lookup') ?>
        <?php echo Form::button('lookup_button','Lookup') ?>
        <?php echo Form::close() ?>
</div>