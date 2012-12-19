<?php

class Model_role {
    public $_role = 'role';
    
    public function add_role($role_name){
        $new_role = DB::insert($this->_role, array('name'))
                ->values(array($role_name))
                ->execute();
        return $new_role;
    }
    
    public function get_role(){
        $get_role = DB::select('name')
                ->from($this->_role)
                ->execute()
                ->as_array();
        return $get_role;
    }
    
    public function get_role_name($role_id){
        $get_role = DB::select(DB::expr('name as role_name'))
                ->from($this->_role)
                ->where('id','=',$role_id)
                ->execute()
                ->get('role_name');
        return $get_role;
    }
    
    public function get_role_id($name){
        $get_role_id = DB::select(DB::expr('id as role_id'))
                ->from($this->_role)
                ->where('name','=',$name);
        return $get_role_id->execute()->get('role_id');
    }
    
}