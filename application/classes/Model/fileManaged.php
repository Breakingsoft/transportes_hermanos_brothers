<?php

class Model_fileManaged {
    
    public $_file_managed = 'file_managed';
    
    public function add_file($file_data){
        $file_managed_columns = array('type', 'file_name', 'uri', 'gid', 'as_hero');
        $new_file = DB::insert($this->_file_managed, $file_managed_columns)
                ->values($file_data);
        $new_file->execute();
        return $new_file;
    }
    
    public function get_file_by_type($type){
        if($this->file_exist_by_type($type)==1){
            $get_company_logo = DB::select()
                    ->from($this->_file_managed)
                    ->execute()
                    ->as_array();
            return $get_company_logo;
        }else{
            return array();
        }
    }
    
    public function get_logo_id($type){
        if($this->file_exist_by_type($type)==1){
            $get_company_logo_id = DB::select(DB::expr('fid AS file_id'))
                    ->from($this->_file_managed)
                    ->where('type', '=', $type)
                    ->execute();
            return $get_company_logo_id->get('file_id');
        }else{
            return array();
        }
    }
    
    public function file_exist_by_type($type){
        $file_exist = DB::select(DB::expr('COUNT(*) AS count_file'))
                ->from($this->_file_managed);
        return $file_exist->execute()->get(('count_file'));
    }
    
    public function update_file($file_data){
        $update_file = DB::update($this->_file_managed)
                ->set(array('type'=>$file_data['type'],
                            'file_name'=>$file_data['file_name'],))
                ->where('file_name','=',$file_data['file_name'])
                ->execute();
        return $update_file;
    }
    
    public function get_all_images_by_gallery($gid){
        $get_all_images_by_gallery = DB::select()
                ->from($this->_file_managed)
                ->where('gid','=',$gid)
                ->and_where('type', '=', 'Cliente')
                ->execute()
                ->as_array();
        return $get_all_images_by_gallery;
    }
    
    public function get_all_images_to_hero(){
        $get_all_images_to_hero = DB::select()
                ->from($this->_file_managed)
                ->where('as_hero','=','Y')
                ->execute()
                ->as_array();
        return $get_all_images_to_hero;
    }
    
    public function get_last_fid(){
        $get_last_fid = DB::select(DB::expr('max(fid)'))
                ->from($this->_file_managed)
                ->execute()
                ->as_array();
        return $get_last_fid;
    }
    
}