<?php

class Model_contactUs {
    public $tabla = 'contact_us';
    public $columnas = array('asunto', 'mensaje', 'id_usuario', 'nombre', 'email', 'fecha');
    
    public function get_all_messages(){
        $get_all_messages = DB::select()
                ->from($this->tabla)
                ->execute()
                ->as_array();
        return $get_all_messages;
    }
    
    public function add_new_message($valores){
        $add_new_message = DB::insert($this->tabla, $this->columnas)
                ->values($valores)
                ->execute();
        return $add_new_message;
    }
   
}
