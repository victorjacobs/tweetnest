<?php
/**
 * Created by JetBrains PhpStorm.
 * User: victor
 * Date: 16/06/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */

require_once "interface.genericdriver.php";

class PostgresDriver implements IGenericDriver
{
    private $res;

    public function __construct($args)
    {
        $connectString = "host=" . $args["hostname"] . " dbname=" . $args["database"] . " user=" . $args["username"] .
            " password=" . $args["password"];

        try {
            $this->res = pg_connect($connectString);
        } catch (Exception $e) {
            throw new Exception("Could not connect to the DB: " . $e->getMessage());
        }
    }

    public function query($query, $result = MYSQLI_STORE_RESULT)
    {
        return pg_query($this->res, $query);
    }

    public function fetch($result = NULL)
    {
        return pg_fetch_assoc($result);
    }

    function numRows($result = NULL)
    {
        pg_num_rows($result);
    }

    public function insertID()
    {
        $insert_query = pg_query("SELECT lastval();");
        $insert_row = pg_fetch_row($insert_query);
        return $insert_row[0];
    }

    public function error()
    {
        return pg_last_error($this->res);
    }

    public function s($str)
    {
        return pg_escape_string($this->res, $str);
    }

    public function clientVersion()
    {
        return 42;
    }

    public function serverVersion()
    {
        return 42;
    }
}
