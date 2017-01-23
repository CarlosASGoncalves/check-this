<?php 

namespace App\Core\Database;

use PDO;

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo  = $pdo;
	}

	//public function selectAll($table, $intoClass){ //parameter $intoClass used to name class for PDO Mapping
	
	public function selectAll($table){

		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		//return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass); //Mapp PDO object to Task Class

		return $statement->fetchAll(PDO::FETCH_CLASS);

	}

	public function insertUser($table, $parameters)
	{

		$sql = sprintf(

			'insert into %s (%s) values (%s)',

			$table,

			implode(', ', array_keys($parameters)),

			':' . implode(', :', array_keys($parameters))

			//can also parse parameters with funtion that do so:
			/*
			 * array_map(function ($param) {
			 *
			 * 	return ":{$param}"
			 *
			 * }, array_keys($parameters);
			 * */

		);

		try {

			$statement = $this->pdo->prepare($sql);

			$statement->execute($parameters);

		}catch(Exception $e){

//			die('Whoops, something went wrong.');

			die($e->getMessage());
		}

	}

	public function insertFile($table, $parameters)
    {

        $sql = sprintf(

            'insert into %s (%s) values (%s)',

            $table,

            implode(', ', array_keys($parameters)),

            ':' . implode(', :', array_keys($parameters))

        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

//            die('Whoops, something went wrong.');

			die($e->getMessage());
        }

    }


    public function selectFiles( $table, $parameters )
    {
        $sql = sprintf(

            'select %s from %s',

            implode(', ', $parameters),

            $table

        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die('Whoops, something went wrong.');

//			die($e->getMessage());

        }

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function deleteFile( $table, $parameters)
    {

        $sql = sprintf(

            "delete from %s where id = %s",

            $table,

            ':' . implode(', :', array_keys($parameters))

        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        }catch(Exception $e){

//            die('Whoops, something went wrong.');

            die($e->getMessage());
        }

    }

    public function selectUsersLogin($table, $user_pass, $user_name, $user_email)
    {

        $sql = "SELECT * FROM {$table} WHERE user_name = :user_name or user_email = :user_email LIMIT 1";

        try
        {
            $statement = $this->pdo->prepare($sql);

            $statement->bindParam(':user_name', $user_name, PDO::PARAM_STR, 60);

            $statement->bindParam(':user_email', $user_email, PDO::PARAM_STR, 60);

            $statement->execute();

            return $statement;

        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function selectUser($table, $user_id)
    {

        $sql = "SELECT * FROM {$table} WHERE user_id = :user_id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(":user_id"=>$user_id));

        return $statement->fetch(PDO::FETCH_ASSOC);

    }

}

