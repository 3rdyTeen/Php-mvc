<?php

class Home extends Controller
{
	
	function index()
	{
		$data['title'] = "Home";
		$this->view('index', $data);
	}
}