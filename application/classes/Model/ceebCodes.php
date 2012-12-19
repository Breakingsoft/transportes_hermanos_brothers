<?php

class Model_ceebCodes {
    
    public $_ceeb_codes_tabla = 'ceeb_codes';
    public $columns = array('ceeb_code', 'high_school_name', 'city', 'state', 'zip');
    
    public function add_ceeb_code($values){
        if((int)$this->get_count_ceeb_code($values[0])==0){
            $add_ceeb_code = DB::insert($this->_ceeb_codes_tabla, $this->columns)
                ->values($values)
                ->execute();
            return $add_ceeb_code;
        }
    }
    
    public function add_ceeb_code_simplest($values){
        if((int)$this->get_count_ceeb_code($values[0])==0){
            $columas = array('ceeb_code','high_school_name');
            $add_ceeb_code = DB::insert($this->_ceeb_codes_tabla, $columas)
                ->values($values)
                ->execute();
            return $add_ceeb_code;
        }
    }
    
    public function add_ceeb_code_by_associative_array($sheetData_index){
        
        $array = array();
        
        foreach($sheetData_index as $sheetData_value => $value){
            if($value != NULL){
                $array[]=$value;
            }
        }
        
        $this->add_ceeb_code($array);
    }

    public function edit_ceeb_code($code,$values){
        $edit_ceeb_code = DB::update($this->_ceeb_codes_tabla)
                ->set($values)
                ->where('ceeb_code', '=', $code)
                ->execute();
        return $edit_ceeb_code;
    }
    
    public function delete_ceeb_code($ceeb_code){
        $delete_ceeb_code = DB::delete($this->_ceeb_codes_tabla)
                ->where('ceeb_code', '=', $ceeb_code)
                ->execute();
        return $delete_ceeb_code;
    }
    
    public function get_ceeb_code($ceeb_code){
        $get_ceeb_code = DB::select()
                ->from($this->_ceeb_codes_tabla)
                ->where('ceeb_code', '=', $ceeb_code)
                ->execute()
                ->as_array();
        return $get_ceeb_code;
    }
    
    public function get_count_ceeb_code($ceeb_code){
        $get_count_ceeb_code = DB::select(DB::expr('COUNT(*) AS ceeb_code_count'))
                ->from($this->_ceeb_codes_tabla)
                ->where('ceeb_code','=', $ceeb_code)
                ->execute();
        return $get_count_ceeb_code->get('ceeb_code_count');
    }
    
    public function get_all_ceeb_code(){
        $get_all_ceeb_code = DB::select()
                ->from($this->_ceeb_codes_tabla)
                ->execute()
                ->as_array();
        return $get_all_ceeb_code;
    }
    
    public function get_all_cities(){
        $get_all_cities = DB::select('city')
                ->distinct('city')
                ->from($this->_ceeb_codes_tabla)
                ->execute()
                ->as_array();
        return $get_all_cities;
    }
    
    public function get_all_schools(){
        $get_all_schools = DB::select('high_school_name')
                ->distinct('high_school_name')
                ->from($this->_ceeb_codes_tabla)
                ->execute()
                ->as_array();
        return $get_all_schools;
    }
    
    public function filter($ceeb_code, $high_school_name, $city, $zip){
        if(!empty($ceeb_code) and empty($high_school_name) and empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and !empty($high_school_name) and empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->and_where('high_school_name', '=', $high_school_name)
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and !empty($high_school_name) and !empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->and_where('high_school_name', '=', $high_school_name)
                    ->and_where('city', '=', $city)
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and !empty($high_school_name) and !empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->and_where('high_school_name', '=', $high_school_name)
                    ->and_where('city', '=', $city)
                    ->and_where('zip', 'like', $zip.'%')
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and !empty($high_school_name) and empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('high_school_name', '=', $high_school_name)
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and !empty($high_school_name) and !empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('high_school_name', '=', $high_school_name)
                    ->and_where('city', '=', $city)
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and !empty($high_school_name) and !empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('high_school_name', '=', $high_school_name)
                    ->and_where('city', '=', $city)
                    ->and_where('zip', 'like', $zip.'%')
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and !empty($high_school_name) and empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('high_school_name', '=', $high_school_name)
                    ->and_where('zip', 'like', $zip.'%')
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and empty($high_school_name) and !empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where('city', '=', $city)
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and empty($high_school_name) and !empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->and_where('city', '=', $city)
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and !empty($high_school_name) and !empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where ('high_school_name', '=', $high_school_name)
                    ->and_where('city', '=', $city)
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and empty($high_school_name) and !empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where('city', '=', $city)
                    ->and_where('zip', 'like', $zip.'%')
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and empty($high_school_name) and empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where('zip', 'like', $zip.'%')
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and empty($high_school_name) and empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where('zip', 'like', $zip.'%')
                    ->and_where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->execute();
            return $filter;
            
        }elseif(!empty($ceeb_code) and !empty($high_school_name) and empty($city) and !empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->where('zip', 'like', $zip.'%')
                    ->and_where ('ceeb_code', 'like', $ceeb_code.'%')
                    ->and_where ('high_school_name', '=', $high_school_name)
                    ->execute();
            return $filter;
            
        }elseif(empty($ceeb_code) and empty($high_school_name) and empty($city) and empty($zip)){
            
            $filter = DB::select()
                    ->from($this->_ceeb_codes_tabla)
                    ->execute();
            return $filter;
            
        }
    }
}