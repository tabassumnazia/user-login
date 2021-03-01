<?php
	session_start();

	if(isset($_POST['submit'])){

		
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		
		if($uname == ""){
			
			header('location: login.php?msg=null_username');

		}
		else if(empty($pass)){
			
			header('location: login.php?msg=null_password');

		}
		else{


			

				  $myfile = fopen("temp.txt","r");
                 while($data = fgets($myfile)){
    	         $test = explode(",",$data);
        
                 if($uname == $test[4] && $pass == $test[6]){
        	    
                 $_SESSION['userid'] = $test[4];
                 $_SESSION['fname'] = $test[0];
                 $_SESSION['lname'] = $test[1];
                 $_SESSION['email'] = $test[3];
                
			
				header('location: home.php');

			}
		}
	}
	       

				//echo "invalid user!please register...";
				header('location: login.php?msg=invalid_user');
			
	

}	
?>