<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Main{
    
    public function action_index(){
        
        $company_model = new Model_companyInfo;
        $company_info = $company_model->get_company_info();
 
        if (!empty($company_info)){
                           
            $data_encrypt = Encrypt::instance();
            $company_info['0']['email_1'] = $data_encrypt->decode($company_info['0']['email_1']);
            $company_info['0']['email_2'] = $data_encrypt->decode($company_info['0']['email_2']);
            
            $content = View::factory('pages/primary_content')
                        ->bind('company_info', $company_info);
            $this->template->content = $content;
        }else{
            
            if(Cookie::get('role')=='Administrador'){
            
                $content = View::factory('pages/add_company_info');
                $this->template->content = $content;

                if($this->request->method()==Request::POST){
                     if (isset($_POST['name'])){
                        $gallery_model = new Model_gallery;
                        $gallery_exist = $gallery_model->gallery_exist();

                        if ($gallery_exist == 0){
                            $new_gallery = $gallery_model->add_gallery(array(
                                'name'=>'Principal',
                                'created'=>date('M-d-Y')));
                        }

                        $get_gid = $gallery_model->get_gid('Principal');
                                               
                        $save_logo_name = $this->_save_image($_FILES['logo_image'], 180, 180);

                        $add_fileManaged_model = new Model_fileManaged;
                        $file_info = array(
                            'type' => 'logo',
                            'name' => $save_logo_name,
                            'uri'  => URL::base().'media/images/',
                            'gid'  => $get_gid,
                            'as_hero' => 'N',
                        );
                        
                        $add_logo = $add_fileManaged_model->add_file($file_info);
                        
                        $logo_id = $add_fileManaged_model->get_logo_id('logo');

                        $company_info = array($_POST['name'], $_POST['company_id'], $_POST['mudanzas'], $_POST['sugerencia_mudanza'], $_POST['phone_1'], $_POST['phone_2'], $_POST['email_1'], $_POST['email_2'], $_POST['about_us'], $logo_id, $_POST['address'], $_POST['our_service']);
                        $add_company_info_model = new Model_companyInfo;
                        $add_company_info = $add_company_info_model->add_company_info($company_info);
                        
                        $this->redirect('static/index');

                     } 
                 }
             }
         }    
    }
    
     public function action_contact(){
         
         //obtenemos todos los mensajes
        $contactUsModel = new Model_contactUs;
        $get_all_messages = $contactUsModel->get_all_messages();
        $CompanyModel = new Model_companyInfo;
        $get_address = $CompanyModel->get_direccion();
         
        $content = View::factory('pages/contact')
                ->bind('messages', $get_all_messages)
                ->bind('address', $get_address);
        $this->template->content = $content;
        
        if ($this->request->method() == Request::POST){
            
            if ((Cookie::get('role')=='Administrador') or (Cookie::get('role')=='Registered user')){
                $user = new Model_user;
                $valores = $user->get_name_and_email(Cookie::get('user_name'));
                    if(!empty($valores)){
                        foreach ($valores as $valor_index){
                            foreach ($valor_index as $valor => $data){
                                $array[$valor] = $data;
                            }
                        }
                        $add_new_message = $contactUsModel->add_new_message(array($_POST['asunto'], $_POST['mensaje'], NULL, $array['user_name'], $array['email'],  date('Y-m-d')));
                    }
            } else {
                $add_new_message = $contactUsModel->add_new_message(array($_POST['asunto'], $_POST['mensaje'], NULL, $_POST['name'], $_POST['email'], date('Y-m-d')));
            } 
            
            $this->redirect('Static/contact');
        }
    }
    
    public function action_user_logout(){
         Cookie::set('user_name','Anónimo');
         Cookie::set('role','unknown');
         
         $this->redirect('static/index');
     }
     
     public function action_user_login(){
         
         $content = View::factory('account/login_form');
         $this->template->content = $content;
         
         if (isset($_POST['user_name_login'])){
                     $user_model = new Model_user;
                     $user_info = $user_model->get_user_info($_POST['user_name_login']);
                     
                        if(is_array($user_info)){
                               foreach ($user_info as $user_info_index){
                                foreach ($user_info_index as $user_info_data => $value){
                                    if($user_info_data == 'password'){
                                       $password_ecrypted = $value;
                                    }
                                    if ($user_info_data == 'role'){
                                        $user_role = $value;
                                    }
                                }    
                            }
                            
                            $data_encrypt = Encrypt::instance();
                            $user_password = $data_encrypt->decode($password_ecrypted);

                            if($user_password != $_POST['password_login']){
                                $message = array(
                                'type' => 'error',
                                'message' => 'info does not match with our records',
                             );
                                $content = View::factory('account/messages_login')
                                    ->bind('message', $message);
                                $this->template->content = $content;
                            } else {
                                $role_model = new Model_role();
                                $get_role_name = $role_model->get_role_name($user_role);
                                
                                Cookie::set('user_name',$_POST['user_name_login']);
                                Cookie::set('role',$get_role_name);
                                
                                $this->redirect('static/index');
                                
                            }
                                
                        }else{
                            $message = array(
                                'type' => 'error',
                                'message' => $user_info,
                             );
                            $content = View::factory('account/messages_login')
                                    ->bind('message', $message);
                            $this->template->content = $content;
                        }        
                 }   
            }
     
            protected function _save_image($image, $width = NULL, $heigth = NULL) {
                if (
                    ! Upload::valid($image) OR
                    ! Upload::not_empty($image) OR
                    ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
                {
                    return FALSE;
                }

                $directory = DOCROOT.'media/images/';
                
                if ($file = Upload::save($image, NULL, $directory))
                { 
                    $filename = strtolower(Text::random('alnum', 20)).'.jpg';

                    Image::factory($file)
                        ->resize($width, $heigth, Image::NONE)
                        ->save($directory.$filename);

                    // Delete the temporary file
                    unlink($file);

                    return $filename;
                }

                return FALSE;

            }
        
    public function action_register(){
        
        $role_model = new Model_role;
        $get_roles = $role_model->get_role();
        
        $content = View::factory('account/register_form')
                ->bind('get_roles', $get_roles);
        $this->template->content = $content;   
        
        if(isset($_POST['username'])){
            
            $role_model = new Model_role;
            $get_role_id = $role_model->get_role_id($_POST['userrole']);
            
            $user = new Model_user;
            $new_user = $user->create_new_user($_POST['username'], $_POST['password'], $_POST['first_name'], 
                                               $_POST['last_name'], $_POST['phone'], $_POST['email'], $get_role_id);
         
            $content = View::factory('account/new_user_status')
                    ->bind('new_user', $new_user);
            $this->template->content = $content;
        }        
    }
    
    public function action_gallery(){
        
        $gallery_model = new Model_gallery;
        $get_gid = $gallery_model->get_gid('Principal');
        
        $file_managed_model = new Model_fileManaged;
        $get_images = $file_managed_model->get_all_images_by_gallery($get_gid);
        
        $content = View::factory('pages/gallery')
                ->bind('get_images', $get_images);
        $this->template->content = $content;
    }
    
    public function action_add_gallery(){
        $content = View::factory('pages/add_gallery');
        $this->template->content = $content;
        
        if ($this->request->method() == Request::POST){
        
            $gallery_model = new Model_gallery;
            $get_gid = $gallery_model->get_gid('Principal');
            
            if($_POST['image_options']=='Hero'){
                
                $width = 800;
                $height = 330;
                $as_hero = 'Y';

            } else {
                  
                $width = 380;
                $height = 280;
                $as_hero = 'N';
                
            }  
            
            $file = $this->_save_image($_FILES['new_image'], $width, $height);
            
                $file_data = array(
                    'type' => 'cliente',
                    'name' => $file,
                    'uri'  => URL::base().'media/images/',
                    'gid'  =>  $get_gid,
                    'as_hero' => $as_hero,
                );
            
            $file_managed_model = new Model_fileManaged;
            $new_image = $file_managed_model->add_file($file_data);
            
            $this->redirect('static/add_gallery');
            
        }
        
    }
    
    public function action_change_site_information(){
        
        $company_model_change_site_information = new Model_companyInfo;
        $company_info_change_site_information = $company_model_change_site_information->get_company_info();
        
        $data_encrypt = Encrypt::instance();
        $company_info_change_site_information['0']['email_1'] = $data_encrypt->decode($company_info_change_site_information['0']['email_1']);
        $company_info_change_site_information['0']['email_2'] = $data_encrypt->decode($company_info_change_site_information['0']['email_2']);

        $content = View::factory('pages/change_site_information')
                ->bind('company_info_change_site_information',$company_info_change_site_information);
        $this->template->content = $content;
        
        if($this->request->method() == Request::POST){
            
            $logo_name = $this->_save_image($_FILES['logo_image_update'], 180, 180);
            
            $logo_data = array('file_name' => $logo_name,
                               'type' => 'logo');
            
            $file_managed_model = new Model_fileManaged;
            $update_logo = $file_managed_model->update_file($logo_data);
            
            $company_data = array('name'=>$_POST['name'],
                                  'id'=>$_POST['company_id'],
                                  'about_us'=>$_POST['about_us'],
                                  'mudanzas'=>$_POST['mudanzas'],
                                  'sugerencia_mudanza'=>$_POST['sugerencia_mudanza'],
                                  'phone_1'=>$_POST['phone_1'],
                                  'phone_2'=>$_POST['phone_2'],
                                  'email_1'=>$_POST['email_1'],
                                  'email_2'=>$_POST['email_2'],
                                  'address'=>$_POST['address'],
                                  'our_service'=>$_POST['our_service']);
            
            $company_info_model = new Model_companyInfo;
            $update_company_info = $company_info_model->update_company_info($company_data);
            
            $this->redirect('static/index');
            
        }
        
    }
    
    //delete user
    public function action_delete_user(){
        $user_model = new Model_user;
        $delete_user_options = $user_model->get_all_users();
        
        $content = View::factory('account/delete_user')
                ->bind('user_options',$delete_user_options);
        $this->template->content = $content;
        
        if($this->request->method() == Request::POST){
            echo $_POST['users'];
            $user_option = $_POST['users'];
            $delete_user = $user_model->delete_user($user_option);
            $this->redirect('static/delete_user');
        }
        
    }
    
    public function action_nuestros_servicios(){
        $company_info = new Model_companyInfo;
        $get_nuestros_servicios = $company_info->get_nuestros_servicios();
        
        $content = View::factory('pages/our_service')
                ->bind('our_service',$get_nuestros_servicios);
        $this->template->content = $content;
        
    }
    
    public function action_mudanzas(){
        $company_info = new Model_companyInfo;
        $get_mudanzas = $company_info->get_mudanzas();
        
        $content = View::factory('pages/mudanzas')
                ->bind('mudanzas',$get_mudanzas);
        $this->template->content = $content;
        
    }
    
    public function action_sugerencia_mudanza(){
        $company_info = new Model_companyInfo;
        $get_sugerencia_mudanza = $company_info->get_sugerencia_mudanza();
        
        $content = View::factory('pages/sugerencia_mudanza')
                ->bind('sugerencia_mudanza',$get_sugerencia_mudanza);
        $this->template->content = $content;
        
    }
    
    public function action_nuestra_flotilla(){
        $vehiculos = new Model_vehiculo;
        $get_vehicles = $vehiculos->get_vehicles();
        
        $content = View::factory('pages/flotilla')
                ->bind('flotilla',$get_vehicles);
        $this->template->content = $content;
        
                if($this->request->method()==Request::POST){
                    
                    $gallery_model = new Model_gallery;
                    $get_gid = $gallery_model->get_gid('Principal');
                    
                    $save_flotilla_name = $this->_save_image($_FILES['vehiculo_imagen'], 430, 300);

                        $add_fileManaged_model = new Model_fileManaged;
                        $file_info = array(
                            'type' => 'flotilla',
                            'name' => $save_flotilla_name,
                            'uri'  => URL::base().'media/images/',
                            'gid'  => $get_gid,
                            'as_hero' => 'N',
                        );
                        
                        $add_imagen_vehiculo = $add_fileManaged_model->add_file($file_info);
                        
                        $imagen_vehiculo_id = $add_fileManaged_model->get_last_fid();

                        $vehiculo_info = array($_POST['peso'], $_POST['altura'], $_POST['largo'],$imagen_vehiculo_id);
                        $add_vehiculo_info = $vehiculos->add_vehicle($vehiculo_info);
                        
                        $this->redirect('static/nuestra_flotilla');

                 }
        
    }

}