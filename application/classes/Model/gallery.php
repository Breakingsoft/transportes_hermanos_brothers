<?php

class Model_gallery{
    public $_gallery = 'gallery';
    
    public function add_gallery($gallery_data){
        $columns = array('name','created');
        $add_gallery = DB::insert($this->_gallery, $columns)
                ->values($gallery_data)
                ->execute();
        return $add_gallery;        
    }
    
    public function gallery_exist(){
        $gallery_exist = DB::select(DB::expr('COUNT(*) AS count_gallery'))
                ->from($this->_gallery);
        return $gallery_exist->execute()->get(('count_gallery'));
    }

    public function get_gid($name){
        $get_gid = DB::select('gid')
                ->from($this->_gallery)
                ->where('name','=',$name)
                ->execute()
                ->as_array();
        return $get_gid;
    }
    
    
}
