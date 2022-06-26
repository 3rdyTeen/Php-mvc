<?php

class Register extends Controller
{
	
	function index()
	{
		$data['errors'] = [];

		$user = new User();

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if($user->validate($_POST))
			{
				$_POST['dob'] = $_POST['month']." ".$_POST['day'].", ".$_POST['year'];
				$_POST['role'] = "user";
				$_POST['gender'] = $_POST['gender'] != "Select" ? $_POST['gender'] : '';
				$_POST['created_at'] = date("Y-m-d H:i:s");
				$_POST['updated_at'] = date("Y-m-d H:i:s");
				$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

				$user->insert($_POST);
				
				message("Your profile was successfuly created. Please login");
				redirect('login');

			}

		}

		$data['errors'] = $user->errors;
		$data['title'] = "Register";

		$this->view('register', $data);
		
	}
}