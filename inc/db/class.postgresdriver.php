<?php
/**
 * Created by JetBrains PhpStorm.
 * User: victor
 * Date: 16/06/13
 * Time: 18:51
 * To change this template use File | Settings | File Templates.
 */
class PostgresDriver implements IGenericDriver
{

    public function query($query, $result = MYSQLI_STORE_RESULT)
    {
        // TODO: Implement query() method.
    }

    public function fetch($result = NULL)
    {
        // TODO: Implement fetch() method.
    }

    function numRows($result = NULL)
    {
        // TODO: Implement numRows() method.
    }

    public function insertID()
    {
        // TODO: Implement insertID() method.
    }

    public function error()
    {
        // TODO: Implement error() method.
    }

    public function s($str)
    {
        // TODO: Implement s() method.
    }

    public function clientVersion()
    {
        // TODO: Implement clientVersion() method.
    }

    public function serverVersion()
    {
        // TODO: Implement serverVersion() method.
    }
}
