<?php

namespace Core\database;


class Connection
{
    /**
     * Connection to PDO.
     *
     * @param $config
     * @return \PDO
     */
    public static function make($config)
    {
        try {
            return new \PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['option']
            );
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
