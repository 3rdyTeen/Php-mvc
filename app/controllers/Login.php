<?php

class Login extends Controller
{
	
	function index()
	{
		$data['errors'] = [];
		$user = new User();

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$res = $user->findOne([
				'email'=>$_POST['email']
			]);

			if($res)
			{
				if(password_verify($_POST['password'], $res->password))
				{
					Auth::authenticate($res);
					redirect('home');
					
				}else{
					$data['errors']['login'] = "Wrong Password";
				}
			}else
			{
				$data['errors']['login'] = "The email did not exist.";
			}

		}
		$data['title'] = "Login";
		$this->view('login', $data);
	}
}