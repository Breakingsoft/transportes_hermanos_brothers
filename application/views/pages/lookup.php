<div class="divider1"></div>
<div id="lookup">
    <?php echo Form::open() ?>
    <h1>Lookup</h1>
    <div id="ceeb_code_lookup">
        <div>
            <?php echo Form::label('ceeb_code_lookup','CEEB code:')?>    
            <?php echo Form::input('ceeb_code_lookup')?>
        </div>    
        <div>
            <?php echo Form::label('high_school_name_lookup','High school name:')?>    
            <?php  $schools_select = array();
                           foreach ($schools as $schools_index){
                            foreach ($schools_index as $schools_data){
                                $schools_select[$schools_data]=$schools_data;
                            }
                          }
                           echo Form::select('school_lookup', array_merge(array(''=>''), $schools_select), NULL);
             ?>
        </div>
        <div>
            <?php echo Form::label('city_lookup','City:')?>        
            <?php  $cities_select = array();
                           foreach ($cities as $cities_index){
                            foreach ($cities_index as $cities_data){
                                $cities_select[$cities_data]=$cities_data;
                            }
                          }
                           echo Form::select('city_lookup',  array_merge(array(''=>''),$cities_select), NULL);
             ?>
        </div>    
        <div>
            <?php echo Form::label('zip_lookup','Zip:')?> 
            <?php echo Form::input('zip_lookup')?>
        </div>
    </div>
    
    <table>
        <tr>
            <th>Ceeb Code</th>
            <th>High School Name</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
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
                    <?php echo $ceeb_codes_data['city']?>
                </td>
                <td>
                    <?php echo $ceeb_codes_data['state']?>
                </td>
                <td>
                    <?php echo (int)$ceeb_codes_data['zip']?>
                </td>
            </tr>
           <?php endforeach; ?>
    </table>
    <div id="lookup_button"><?php echo Form::button('filter','Filter')?></div>
    <?php echo Form::close() ?>
</div>
