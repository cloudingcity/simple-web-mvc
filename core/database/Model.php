<?php

namespace Core\database;

class Model
{
    /**
     * PDO instance.
     *
     * @var \PDO
     */
    protected static $pdo;

    /**
     * Data table name.
     *
     * @var string
     */
    protected $table = '';

    /**
     * Query of select.
     *
     * @var array
     */
    protected $select;

    /**
     * Query of where.
     *
     * @var array
     */
    protected $where;

    /**
     * Query of order.
     *
     * @var array
     */
    protected $order;

    /**
     * Query of limit.
     *
     * @var array
     */
    protected $limit;

    /**
     * Set PDO instance.
     *
     * @param \PDO $pdo
     */
    public static function setPDO(\PDO $pdo)
    {
        static::$pdo = $pdo;
    }

    /**
     * New model instance and set query of select.
     *
     * @param array ...$columns
     * @return static
     */
    public static function select(...$columns)
    {
        $model = new static;
        $model->select = $columns;

        return $model;
    }

    /**
     * Set query of where.
     *
     * @param array ...$conditions
     * @return $this
     */
    public function where(...$conditions)
    {
        $this->where = $conditions;

        return $this;
    }

    /**
     * Set query of order.
     *
     * @param $column
     * @param $direction
     * @return $this
     */
    public function order($column, $direction)
    {
        $this->order = [$column, $direction];

        return $this;
    }

    /**
     * Set query of limit.
     *
     * @param array ...$limit
     * @return $this
     */
    public function limit(...$limit)
    {
        $this->limit =  $limit;

        return $this;
    }

    /**
     * Execute query and get data.
     *
     * @return array
     */
    public function get()
    {
        $sql = '';

        if ($this->select) {
            $sql = sprintf(
                'SELECT %s FROM %s',
                implode(',', $this->select),
                $this->table
            );
        }

        if ($this->where) {
            $wheres = array_map(function ($condition) {
                return implode(' ', $condition);
            }, $this->where);

            $sql .= sprintf(
                ' WHERE %s',
                implode(' AND ', $wheres)
            );
        }

        if ($this->order) {
            $sql .= sprintf(
                ' ORDER BY %s',
                implode(' ', $this->order)
            );
        }

        if ($this->limit) {
            $sql .= sprintf(
                ' LIMIT %s',
                implode(',', $this->limit)
            );
        }

        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Get all data from table.
     *
     * @return array
     */
    public static function all()
    {
        $model = new static;
        $sql = 'SELECT * FROM ' . $model->table;
        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_CLASS);
    }

    /**
     * Create data to table.
     *
     * @param $datas
     */
    public static function create($datas)
    {
        $model = new static;
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $model->table,
            implode(', ', array_keys($datas)),
            ':' . implode(', :', array_keys($datas))
        );
        $statement = static::$pdo->prepare($sql);
        $statement->execute($datas);
    }

}
