<?php  

namespace App\Core\Database;

use PDO;
use PDOException;


class Connection{

    public static function make($config){

		
		try{

			//return new PDO('mysql:host=127.0.0.1;dbname=todos;port=3306;', 'root', '123'); 	

			return new PDO(

				$config['host']. ";dbname=" .$config['dbname'], 
				$config['dbuser'], 
				$config['pass'], 
				$config['options']

			);	
		
		}catch(PDOException $e){

			die($e->getMessage());

		}

	}

}
