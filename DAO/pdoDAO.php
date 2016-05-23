<?php
include_once 'IDAO.php';


class pdoDAO implements IDAO {

    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = '';
    const MYSQL_DB_NAME = 'loja';

    public function __construct() {
        
    }

    public function atualizar($obj) {
        
    }

    public function excluir($id) {
        
    }

    public function listar() {
        try {

            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);


            $result = $conn->query("SELECT id_cliente, nome FROM cliente");

            if ($result) {
                while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                    echo $row->id_cliente . " - " . $row->nome . "<br/>";
                }
            }
        } catch (PDOException $exc) {
            echo "Erro ao listar: " . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

    public function salvar($obj) {
        print_r($obj);
        die();
        try {
            $conn = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB_NAME, self::MYSQL_USER, self::MYSQL_PASSWORD);
           
            $conn->exec("INSERT INTO loja.cliente(nome) VALUES('$obj->nome')");
            
        } catch (PDOException $exc) {
            echo "Erro ao inserir cliente:" . $exc->getMessage();
        } finally {
            $conn = null;
        }
    }

//put your code here
}