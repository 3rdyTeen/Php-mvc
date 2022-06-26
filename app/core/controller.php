<?php

class Controller {

    public function view($path, $data = [])
	{ 
		extract($data);
		if(file_exists("../app/views/" . $path . ".php"))
		{
			require ("../app/views/" . $path . ".php");
		}else{
			echo "could not find view file: ". $filename;
		}
	}

}