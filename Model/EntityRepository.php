<?php
/**
 * Created by PhpStorm.
 * User: Terezija
 * Date: 25. 10. 2018.
 * Time: 19:27
 */

class EntityRepository
{
    private $conn;

    private $className;

    public function __construct()
    {
        $this->className = str_replace(
            'Repository',
            '',
            get_class($this)
        );

        require_once($this->className . '.php');
        require_once('./Config/Connection.php');

        $connection = new Connection();
        $this->conn = $connection->getConnection();
    }

    private function prepareSql($addOnSql = '')
    {
        $query = "SELECT * FROM " . strtolower($this->className) . $addOnSql;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function getAll()
    {
        $stmt = $this->prepareSql();

        $result = $stmt->fetchAll(PDO::FETCH_CLASS, $this->className);

        return $result;
    }

    public function getById($id)
    {
        $stmt = $this->prepareSql(" WHERE id = $id");


        $result = $stmt->fetchObject($this->className);

        return $result;
    }

}
