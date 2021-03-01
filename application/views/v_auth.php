<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_Auth
{
	public function show_login()
	{
		include "res/courses/login.php";
	}
	public function show_register()
	{
		include "res/courses/register.php";
	}
	public function show_info($data, $owner)
	{
		include "res/courses/account.php";
	}
	public function add_money()
	{
		include "res/courses/add_money.php";
	}
	public function reset_pass()
	{
		include "res/courses/reset_pass.php";
	}
}