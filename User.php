<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
	/** Insert a new entry into the database */
	protected function insert()
	{
		$stmt = $dbc->prepare('INSERT INTO users (username, password, email) VALUES (:username, :password, :email)');

		$stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
		$stmt->bindValue(':password',  $this->attributes['password'],  PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);

		$stmt->execute();

		$this->attributes['id'] = self::$dbc->lastInsertId();
	}

	/** Update existing entry in the database */
	protected function update()
	{
		$stmt = $dbc->prepare('UPDATE users SET username = :username, password = :password, email = :email WHERE id = :id');

		$stmt->bindValue(':username', $this->attributes['username'], PDO::PARAM_STR);
		$stmt->bindValue(':password',  $this->attributes['password'],  PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
		$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_STR);

		$stmt->execute();
	}

		/**
		 * Find a single record in the DB based on its id
		 *
		 * @param int $id id of the user entry in the database
		 *
		 * @return User An instance of the User class with attributes array set to values from the database
		 */
		public static function find($id)
		{
			// Get connection to the database
			self::dbConnect();
			
				// @TODO: Create select statement using prepared statements

				// @TODO: Store the result in a variable named $result

				// The following code will set the attributes on the calling object based on the result variable's contents
			$instance = null;
			if ($result) {
				$instance = new static($result);
			}
			return $instance;
		}

		/**
		 * Find all records in a table
		 *
		 * @return User[] Array of instances of the User class with attributes set to values from database
		 */
		public static function all()
		{
			self::dbConnect();

				// @TODO: Learning from the find method, return all the matching records
		}
	}
