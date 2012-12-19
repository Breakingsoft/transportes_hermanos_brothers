<?php

class Model_Vehiculo{
    protected $_table_name = 'vehiculo';
    
    public function get_vehicles(){
       return $get_vehicles = DB::select()
                    ->from($this->_table_name)
                    ->join('file_managed')
                    ->on('file_managed.fid','=',  $this->_table_name.'.'.'id_picture')
                    ->execute()
                    ->as_array();
    }
    
    public function add_vehicle($values){
        $columns = array('peso', 'alto', 'largo', 'id_picture');
        return $add_vehicle = DB::insert($this->_table_name, $columns)
                ->values($values)
                ->execute();
    }
   
}