<?php 

/**
 * users model
 */
class User extends Model
{
	
	public $errors = [];
	protected $table = "users";

	protected $allowedColumns = [

		'firstname',
		'lastname',
		'email',
		'dob',
		'gender',
		'password',
		'role',
		'created_at',
		'updated_at',
		  
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['firstname']))
		{
			$this->errors['firstname'] = "A first name is required";
		}else
		if(!preg_match("/^[a-zA-Z ]+$/", trim($data['firstname'])))
		{
			$this->errors['firstname'] = "first name can only have letters";
		}
		

		if(empty($data['lastname']))
		{
			$this->errors['lastname'] = "A last name is required";
		}else
		if(!preg_match("/^[a-zA-Z ]+$/", trim($data['lastname'])))
		{
			$this->errors['lastname'] = "last name can only have letters";
		}

		//check email
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}else
		if($this->where(['email'=>$data['email']]))
		{
			$this->errors['email'] = "That email already exists";
		}

		if(empty($data['password']))
		{
			$this->errors['password'] = "A password is required";
		}

		if($data['password'] !== $data['password2'])
		{
			$this->errors['password'] = "Passwords do not match";
		}

		if($data['month'] == "Month" || $data['day'] == "Day" || $data['year'] == "Year")
		{
			$this->errors['dob'] = "The Birthday is not valid!";
		}
		
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}


	public function edit_validate($data,$id)
	{
		$this->errors = [];

		if(empty($data['firstname']))
		{
			$this->errors['firstname'] = "A first name is required";
		}else
		if(!preg_match("/^[a-zA-Z ]+$/", trim($data['firstname'])))
		{
			$this->errors['firstname'] = "first name can only have letters";
		}
		

		if(empty($data['lastname']))
		{
			$this->errors['lastname'] = "A last name is required";
		}else
		if(!preg_match("/^[a-zA-Z ]+$/", trim($data['lastname'])))
		{
			$this->errors['lastname'] = "last name can only have letters";
		}

		//check email
		if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->errors['email'] = "Email is not valid";
		}else
		if($results = $this->where(['email'=>$data['email']]))
		{
			foreach ($results as $result) {
				if($id != $result->id)
					$this->errors['email'] = "That email already exists";
			}
			
		}
		
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}


}