<?php



define('HOST', 'localhost');
define('DBNAME','teste');
define('USER','root');
define('PASSWORD','');

/**
 * 
 */
class Conexao
{
	protected $conectar;
	function __construct()
	{
		$this->ConectDataBase();
	}


	function ConectDataBase()
	{
		try {
			$this->conectar = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASSWORD);
		} catch (Exception $e) {
			print "erro ".$e->getMessage();
			die('Erro na conexao');
		}
	}




}


$teste = new Conexao();
