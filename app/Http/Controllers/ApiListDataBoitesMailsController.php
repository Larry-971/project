<?php namespace App\Http\Controllers;

		use Session;
		use Request;
		use DB;
		use CRUDBooster;

		class ApiListDataBoitesMailsController extends \crocodicstudio\crudbooster\controllers\ApiController {

		    function __construct() {    
				$this->table       = "boites_mails";        
				$this->permalink   = "list_data_boites_mails";    
				$this->method_type = "get";    
		    }
		

		    public function hook_before(&$postdata) {
		        //This method will be execute before run the main process

		    }

		    public function hook_query(&$query) {
		        //This method is to customize the sql query
				if($type == 'password'){
					$type == 'text';
				}
		
		    }

		    public function hook_after($postdata,&$result) {
		        //This method will be execute after run the main process
				
		
		    }

		}