<?php

class Controller_Codes extends Controller_Main {
      
    //Spark practice
    public function action_get_all(){
        
        $ceeb_code = new Model_ceebCodes;
        $get_list_ceeb_codes = $ceeb_code->get_all_ceeb_code();
        
        $content = View::factory('pages/codes')
                ->bind('ceeb_codes',$get_list_ceeb_codes);
        $this->template->content = $content;
        
    }
    
    public function action_add(){
        
        $content = View::factory('pages/add_ceeb_code');
        $this->template->content = $content;
        
        if($this->request->method() == Request::POST){
            
           if(isset($_POST['create_code'])){ 
                $values = array($_POST['ceeb_code'], $_POST['high_school_name']);

                $ceebCodes = new Model_ceebCodes;
                $add_new_code = $ceebCodes->add_ceeb_code_simplest($values);

                $this->redirect('codes');
           }
            
        }
      
    }
    
    public function action_edit(){
        
        $id = (int) $this->request->param('id');
        $codes = new Model_ceebCodes;
        $get_ceeb_code = $codes->get_ceeb_code($id);
        
        $content = View::factory('pages/edit_ceeb_code')
                ->bind('ceeb_code', $get_ceeb_code);
        $this->template->content = $content;
        
        if($this->request->method() == Request::POST){
            if(isset($_POST['edit_code'])){
              $values = array(
                  'high_school_name' => $_POST['high_school_name']);
              
              $codes = new Model_ceebCodes;
              $update_code = $codes->edit_ceeb_code($_POST['ceeb_code'],$values);
              
              $this->redirect('codes');
            }  
        }
    }
    
    public function action_delete(){
        $id = (int) $this->request->param('id');
        $codes = new Model_ceebCodes;
        $get_code = $codes->get_ceeb_code($id);
        
        $content = View::factory('pages/delete_ceeb_code')
                ->bind('ceeb_data', $get_code);
        $this->template->content = $content;
        
        $delete_code = $codes->delete_ceeb_code($id);
        $this->redirect('codes');
    }
    public function action_lookup(){
        
   
            $inputFileType = 'Excel2007';
            $inputFileName = 'media/files/CEEB-DomesticHighSchoolsByState_2.xlsx';

            /**  Create a new Reader of the type defined in $inputFileType  **/
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);

            /**  Define how many rows we want for each "chunk"  **/
            $limit = 99;
            $startRow = 2;

            /**  Loop to read our worksheet in "chunk size" blocks  **/
                //for ($startRow = 2; $startRow <= 1000; $startRow += $chunkSize) {
                    /**  Create a new Instance of our Read Filter, passing in the limits on which rows we want to read  **/
                    $chunkFilter = new chunkReadFilter($startRow,$limit);
                    /**  Tell the Reader that we want to use the new Read Filter that we've just Instantiated  **/
                    $objReader->setReadFilter($chunkFilter);
                    /**  Load only the rows that match our filter from $inputFileName to a PHPExcel Object  **/
                    $objPHPExcel = $objReader->load($inputFileName);

                    //	Do some processing here

                    $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                    foreach ($sheetData as $sheetData_index) {
                        $code = new Model_ceebCodes;
                        $add_code = $code->add_ceeb_code_by_associative_array($sheetData_index);

                   
        }        
                
            //}
        $ceeb_code = new Model_ceebCodes;
        $get_list_ceeb_codes = $ceeb_code->get_all_ceeb_code();
        $get_all_cities = $ceeb_code->get_all_cities();
        $get_all_schools = $ceeb_code->get_all_schools();
        
        $content = View::factory('pages/lookup')
                ->bind('ceeb_codes', $get_list_ceeb_codes)
                ->bind('cities', $get_all_cities)
                ->bind('schools', $get_all_schools);
        $this->template->content = $content;
        
            if($this->request->method() == Request::POST){
                if(isset($_POST['filter'])){
                   
                    $ceeb_code = new Model_ceebCodes;
                    $get_list_ceeb_codes = $ceeb_code->filter($_POST['ceeb_code_lookup'], $_POST['school_lookup'], $_POST['city_lookup'], $_POST['zip_lookup']);
                    $get_all_cities = $ceeb_code->get_all_cities();
                    $get_all_schools = $ceeb_code->get_all_schools();

                    $content = View::factory('pages/lookup')
                            ->bind('ceeb_codes', $get_list_ceeb_codes)
                            ->bind('cities', $get_all_cities)
                            ->bind('schools', $get_all_schools);
                    $this->template->content = $content;
               
                }
            }
        
        }
        
    }


class chunkReadFilter implements PHPExcel_Reader_IReadFilter
{
	private $_startRow = 0;

	private $_endRow = 0;

	/**  We expect a list of the rows that we want to read to be passed into the constructor  */
	public function __construct($startRow, $chunkSize) {
		$this->_startRow	= $startRow;
		$this->_endRow		= $startRow + $chunkSize;
	}

	public function readCell($column, $row, $worksheetName = '') {
		//  Only read the heading row, and the rows that were configured in the constructor
		if (($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) {
			return true;
		}
		return false;
	}
}
