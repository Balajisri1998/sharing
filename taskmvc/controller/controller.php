<?php
	
	/*
		Description : Class for controller
		Authour : Balaji P
		created Date : 30-07-2019
		Updated Date : 30-07-2019
	*/

	class controller{

		/*
			Description : Construct Function to set the default model
			Parameter : NULL
	    */

		function __construct()
		{
			$this->module = 'login';
		}

		/*
			Description : Function to get the model from url and call the getmodel and getview methods
			Parameter : NULL
	    */

		function invoke(){
			
			if($_SERVER['QUERY_STRING']!=''){
				$this->module=$_REQUEST['model'];
			}

			$_data = $this->getModel($this->module);
			
			echo $this->getView($this->module,$_data);
			
		}

		public function getModel($_model)
		{
			require_once('model/'.$_model.'.php');
			$obj = $_model.'Model';
			$model = new $obj;
			return $model->_initial($_REQUEST);
		}

		/*
			Description : Function to include view class 
			Parameter : NULL
	    */

		public function getView($_model,$_data)
		{
			require_once('view/'.$_model.'.php');
			$obj1 = $_model.'View';
			$view = new $obj1;
			return $view->_initial($_data);
		}
	}
?>