<?php

class Model_user {
    
    public $_user = 'user';
    
    public function get_user_info_by_id($uid){
        $user_info = DB::select()
                ->from($this->_user)
                ->where('id', '=', $uid)
                ->execute()
                ->as_array();
        
        return $user_info;
    }
    
     public function get_user_info_by_name($name){
        $user_info = DB::select()
                ->from($this->_user)
                ->where('user_name', '=', $name)
                ->execute()
                ->as_array();
        
        return $user_info;
    }
    
    public function create_new_user($name, $password, $first_name, $last_name, $phone, $email, $role){
        
        $usuario_existe = $this->user_exist($name);
        
        if ($usuario_existe == 1){
            
            return 'Usuario ya existe';
            
        } else {
            
            $data_encrypt = Encrypt::instance();
            $email = $data_encrypt->encode($email);
            $password = $data_encrypt->encode($password);
        
            $new_user = DB::insert($this->_user, array('user_name', 'password', 'first_name', 'last_name', 'phone','email','role'))
                    ->values(array($name, $password, $first_name, $last_name, $phone, $email, $role))
                    ->execute();

            return $new_user;
        }
    }
    
    public function user_exist($name){
        $user = DB::select(DB::expr('COUNT(*) AS usuario'))
                ->from($this->_user)
                ->where('user_name', '=', $name);
    
        return $user->execute()->get('usuario');
        
    }
    
    public function get_user_info($name){
        if($this->user_exist($name)==1){
            $user = DB::select()
                    ->from($this->_user)
                    ->join('role')
                    ->on('role.id', '=', $this->_user.'.'.'role')
                    ->where('user_name', '=', $name)
                    ->execute()
                    ->as_array();
            return $user;
        }else{
            'user does not exist';
        }
    }
    
    public function delete_user($name){
        $user = DB::delete($this->_user)
                ->where('user_name', '=', $name)
                ->execute();
        return $user;
    }
    
    public function get_all_users(){
        $user = DB::select('user_name')
                ->from($this->_user)
                ->execute();
        return $user;
    }
    
    public function get_name_and_email($user_name){
        $user = DB::select('uid', 'user_name', 'email')
                ->from($this->_user)
                ->where('user_name', '=', $user_name)
                ->execute()
                ->as_array();
        return $user;
    }
    
}

