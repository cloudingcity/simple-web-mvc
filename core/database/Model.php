<?php

namespace Core\database;

class Model
{
    /**
     * Data table name.
     *
     * @var string
     */
    protected $table = '';

    protected static $pdo;

    public static function setPDO(\PDO $pdo)
    {
        self::$pdo = $pdo;
    }

    public function selectAll()
    {
        $statement = self::$pdo->prepare("select * from {$this->table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
//
//    public function insert($table, $parameters)
//    {
//        $sql = sprintf(
//            'INSERT INTO %s (%s) VALUES (%s)',
//            $table,
//            implode(', ', array_keys($parameters)),
//            ':' . implode(', :', array_keys($parameters))
//        );
//
//        try {
//            $statement = $this->pdo->prepare($sql);
//            $statement->execute($parameters);
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//    }


}
