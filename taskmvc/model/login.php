<?php

	/*
		Description : Class for login model
		Authour : Balaji P
		created Date : 30-07-2019
		Updated Date : 30-07-2019
	*/
	
	class loginModel
	{
		var $_Auser=array(array('admin1','admin',5),array('admin2','admin',3),array('admin3','admin',0));
		var $_Spermission='';

		function _initial($request){
			if(isset($request['username']) && isset($request['password']))
			{
				$_Iuservalidation = $this->usercheck($request);
				if($_Iuservalidation==1){
					header('location:index.php?model=register');
				}
				else{
					return 'Please enter valid credentials..';
				}
			}
			else{
				return '';
			}

		}

		function usercheck($request)
		{
			$_Iflag = 0;
			$_IcountOfUser = count($this->_Auser);
			for($i=0;$i<$_IcountOfUser;$i++)
			{
				if($this->_Auser[$i][0]==$request['username'])
				{
					if($this->_Auser[$i][1]==$request['password'])
					{
						$_Iflag = 1;
						$this->_Spermission='Permission';
						$_Ivalue=$this->_Auser[$i][2];
						setcookie($this->_Spermission,$_Ivalue,time()+60*60);
					}
				}
			}
			if($_Iflag == 1){
				return 1;
			}
			else{
				return 0;
			}
		}
		
	}
	
	
?>