<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_companyInfo {
    
 public $_company_info = 'company_info';
 public $_file_managed = 'file_managed';
    
    public function company_info_exist(){
        $query = DB::select(DB::expr('COUNT(*) AS company_info_exist'))
                ->from($this->_company_info);
        
        return $query->execute()->get('company_info_exist');
                
    }
    
    public function get_company_info(){
        $company_info_exist = $this->company_info_exist();
        
        if ($company_info_exist == 1){
            $company_info = DB::select()
                    ->from($this->_company_info)
                    ->join($this->_file_managed)
                    ->on($this->_company_info.'.'.'logo_image_id', '=',$this->_file_managed.'.'.'fid')
                    ->execute()
                    ->as_array();
            return $company_info;
        } else {
            return array();
        }
        
    }
    
    public function add_company_info($valores){
        
        $data_encrypt = Encrypt::instance();
        $valores['6'] = $data_encrypt->encode($valores['6']);
        $valores['7'] = $data_encrypt->encode($valores['7']);
        
        $columnas = array('name','id', 'mudanzas', 'sugerencia_mudanza', 'phone_1', 'phone_2', 'email_1', 'email_2', 'about_us', 'logo_image_id', 'address', 'our_service');
        $add_company_info = DB::insert($this->_company_info, $columnas)
                ->values($valores)
                ->execute();
        return $add_company_info;
    }
    
    public function update_company_info($valores){
        
        $data_encrypt = Encrypt::instance();
        $valores['email_1'] = $data_encrypt->encode($valores['email_1']);
        $valores['email_2'] = $data_encrypt->encode($valores['email_2']);
        
        $add_company_info = DB::update($this->_company_info)
                ->set(array('name'=>$valores['name'],
                            'id'=>$valores['id'],
                            'mudanzas'=>$valores['mudanzas'],
                            'sugerencia_mudanza'=>$valores['sugerencia_mudanza'],
                            'phone_1'=>$valores['phone_1'],
                            'phone_2'=>$valores['phone_2'],
                            'email_1'=>$valores['email_1'],
                            'email_2'=>$valores['email_2'],
                            'about_us'=>$valores['about_us'],
                            'our_service'=>$valores['our_service'],
                            'address'=>$valores['address']))
                ->execute();
        return $add_company_info;
    }
    
    public function get_nuestros_servicios(){
        return $get_nuestros_servicios = DB::select('our_service')
                ->from($this->_company_info)
                ->execute()
                ->as_array();
    }
    
    public function get_mudanzas(){
        return $get_nuestros_servicios = DB::select('mudanzas')
                ->from($this->_company_info)
                ->execute()
                ->as_array();
    }
    
    public function get_sugerencia_mudanza(){
        return $get_nuestros_servicios = DB::select('sugerencia_mudanza')
                ->from($this->_company_info)
                ->execute()
                ->as_array();
    }
    
    public function get_direccion(){
        return $get_nuestros_servicios = DB::select('address')
                ->from($this->_company_info)
                ->execute()
                ->as_array();
    }
}