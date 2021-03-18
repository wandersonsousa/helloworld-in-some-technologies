<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function helloWorld()
	{
		return view('hello_world');
	}
}
