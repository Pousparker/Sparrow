<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/23/2019
 * Time: 1:57 AM
 */

namespace App\Model;

use App\Http\Config;
class DB
{
    private static $instance = null;
    private static $connstr = null;
    public static $query = null;
    public static $table = null;

    private function __construct(){}

    public function table($table) {
        self::$instance = new Self;
        self::$table = $table;
        self::$connstr = mysqli_connect(Config::HOSTNAME, Config::USERNAME, Config::PASSWORD, Config::DATABASE);
        self::$query = "select * from " . self::$table;

        return self::$instance;
    }

    public function where($field, $operator, $value)
    {
        self::$query .= " where {$field} {$operator} '{$value}'";
        return $this;
    }

    public function andWhere($field, $operator, $value)
    {
        self::$query .= " and {$field} {$operator} '{$value}'";
        return $this;

    }

    public function get()
    {
        self::$query = mysqli_query(self::$connstr, self::$query);
        $result = [];
        while($res = mysqli_fetch_assoc(self::$query)){
            array_push($result, $res);
        }

        return $result;
    }

    public function insert(array $fields, array $records)
    {
        $fields = implode(",", $fields);
        $records = implode("','", $records);

        self::$query = "insert into " . self::$table ." ({$fields}) values ('{$records}')";

        self::$query = mysqli_query(self::$connstr, self::$query);
//        echo self::$query;
//        return;
    }


    public function delete($fields,$records)
    {
        self::$query = "delete from " . self::$table . " where {$fields} = {$records}";
//            print self::$query;
//            return;
        self::$query = mysqli_query(self::$connstr, self::$query);
    }

    public function update($field,$record,$id)
    {
        self::$query = "update " . self::$table . " set {$field} = '{$record}'" . " where " . self::$table . ". ID = {$id}";
        self::$query = mysqli_query(self::$connstr, self::$query);
    }
}
