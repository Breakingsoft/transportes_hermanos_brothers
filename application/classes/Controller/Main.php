<?php defined('SYSPATH') or die('No direct script access.');

 abstract class Controller_Main extends Controller_Template {
 
        public function before(){
            parent::before();

            //obtener la informacion de la compañia
            $company = new Model_companyInfo;
            $get_company_info = $company->get_company_info();
            
             if((Cookie::get('user_name')==NULL)and(Cookie::get('role')==NULL)){
                Cookie::set('user_name','Anónimo');
                Cookie::set('role','unknown');
                
                $this->redirect('static/index');
                
             } 

            //obtener todas las imagenes para el hero
            $file_managed_model = new Model_fileManaged;
            $get_all_images_to_hero = $file_managed_model->get_all_images_to_hero();
            
            //agregamos la informacion de la compañia por medio de una variable global
            View::set_global('company_info', $get_company_info);
            
            $template = View::factory('template')
                    ->bind_global('hero_images', $get_all_images_to_hero);
            
            $this->template->content = $template;
            
            $this->template->stylesheet = array('template', 'nivo-slider', 'slider', 'dark', 'jflow.style');
            
            // Asginamos el archivo javascript
            $this->template->javascript = array('jquery-1.7.1.min','user_validation', 'jquery.nivo.slider','script_slider','jflow.plus.min');
        }
       public function after(){
            //code here
            parent::after();
        }

} // End Template
