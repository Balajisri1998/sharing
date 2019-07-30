<?php

	/*
		Description : Class for register model
		Authour : Balaji P
		created Date : 30-07-2019
		Updated Date : 30-07-2019
	*/
	
	class registermodel
	{
		var $userPermission='Permission';
		function _initial($request){
			
			if(isset($request['fname']))
			{
				$file = fopen("user.csv", "a");
				$data = array($request['fname'],$request['lname'],$request['mailid'],$request['mobileno'],$request['address']);
				fputcsv($file, $data);
				$csv = array();

				if (($file = fopen('user.csv', 'r')) === false)
				{
					throw new Exception('There was an error loading the CSV file.');
				}
				else
				{
					while (($all = fgetcsv($file, 1000)) !== false)
					{
						$csv[] = $all;
					}

					fclose($file);
				}
				$countOfCsvData = count($csv);
				$permission = $_COOKIE[$this->userPermission];

				$returndata = array();
				for ($i=1; $i <$countOfCsvData ; $i++) { 
					for ($j=0; $j < $permission ; $j++) { 
						$returndata[$i-1][$j] = $csv[$i][$j]; 
					}
				}
					
				return $returndata;
			}
			else 
				return 1;
		}
	}

?>