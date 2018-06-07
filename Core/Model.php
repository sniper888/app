<?php

namespace Core;

use PDO;
use App\Config;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model {

    private static $_models = array();
    private $_attributes = array();
    private $sql;

    public function __construct() {
        
    }

    public function __set($var, $val) {
        $this->_attributes[$var] = $val;
    }

    public function __get($var) {
        if (isset($this->_attributes[$var])) {
            return $this->_attributes[$var];
        } else {
            return null;
        }
    }

    public static function model($className = null) {
        if ($className == null)
            $className = get_called_class();
        if (isset(self::$_models[$className]))
            return self::$_models[$className];
        else {
            $model = self::$_models[$className] = new $className(null);
            return $model;
        }
    }

    public function sql($sql) {
        $this->sql = $sql;
        return $this;
    }

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB() {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }

    public static function getPrimaryKey() {
        $db = static::getDB();
        $stmt = $db->query("SHOW KEYS FROM " . static::tableName() . " WHERE Key_name = 'PRIMARY' ");
        return $stmt->fetchColumn(4);
    }

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public function findAll($limit = null) {
        $db = static::getDB();
        if (empty($this->sql)) {
            $this->sql = 'SELECT * FROM ' . static::tableName();
        }
        if ($limit != null) {
            $this->sql .= ' limit ' . $limit;
        }
        $stmt = $db->query($this->sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            $class = get_called_class();
            $result = new $class;

            foreach ($row as $k => $v) {
                $result->$k = $v;
            }

            $results[] = $result;
        }
        return $results;
    }

    /**
     * Get one the users as an associative array 
     *
     * @return array
     */
    public function findOne() {
        $db = static::getDB();
        $stmt = $db->query($this->sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach ($row as $k => $v) {
            $this->$k = $v;
        }
        return $this;
    }

    /**
     * Get one the users as an associative array 
     *
     * @return array
     */
    public function findByPk($pk) {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM ' . static::tableName());
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $k => $v) {
            $this->$k = $v;
        }
        return $this;
    }

}
