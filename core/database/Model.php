<?php

namespace Core\database;

class Model
{
    /**
     * Data table name.
     *
     * @var string
     */
    protected static $table = '';

    /**
     * PDO instance.
     *
     * @var \PDO
     */
    protected static $pdo;


    /**
     * Set PDO instance.
     *
     * @param \PDO $pdo
     */
    public static function setPDO(\PDO $pdo)
    {
        static::$pdo = $pdo;
    }

    public static function select(...$column)
    {

    }

    public static function where(...$a)
    {

    }

    public static function get()
    {
        $sql = 'select * from ' . static::$table;
        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

//    public function selectAll()
//    {
//        $statement = self::$pdo->prepare("select * from {$this->table}");
//
//        $statement->execute();
//
//        return $statement->fetchAll(PDO::FETCH_CLASS);
//    }
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
