<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{	
	public function index()
	{
		$this->data['view'] = 'home/index';

		$this->load_view();
	}
        
        public function profileData()
        {
            // Initialize variables and set to empty strings
             $email="";
             $password="";

            // Validate input and sanitize
if ($_SERVER['REQUEST_METHOD']== "POST") {
   if (empty($_POST["firstName"])) {
      $firstNameErr = "First name is required";
   }
   else {
      $firstName = test_input($_POST["firstName"]);
   }
   if (empty($_POST["lastName"])) {
      $lastNameErr = "Last name is required";
   }
   else {
      $lastName = test_input($_POST["lastName"]);
   }
}

// Sanitize data
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
        }
}


