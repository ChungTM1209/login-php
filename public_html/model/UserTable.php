<?php


namespace Model;


class UserTable
{
	public $connection;

	public function __construct($connection)
	{
		$this->connection = $connection;
	}

	public function create($user)
	{
		$sql = "INSERT INTO users(email,password,name,job) VALUES (?,?,?,?)";
		$statement = $this->connection->prepare($sql);
		$statement->bindParam(1, $user->email);
		$statement->bindParam(2, $user->password);
		$statement->bindParam(3, $user->name);
		$statement->bindParam(4, $user->job);
		return $statement->execute();
	}

	public function getAll()
	{
		$sql = "SELECT * FROM users";
		$statement = $this->connection->prepare($sql);
		$statement->execute();

	}
}
