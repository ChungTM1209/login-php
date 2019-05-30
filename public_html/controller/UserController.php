<?php

namespace Controller;

use Model\DBConnection;

use Model\User;
use Model\UserTable;


class UserController
{
	public $userTable;

	public function __construct()
	{
		$connection = new DBConnection("mysql:host=localhost;dbname=ecommage", "ChungTM1209", "Vod@nh1209");
		$this->userTable = new UserTable($connection->connect());
	}

	public function register($user)
	{

		$this->userTable->create($user);
	}
}
