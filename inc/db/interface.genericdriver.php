<?php
/**
 * Created by JetBrains PhpStorm.
 * User: victor
 * Date: 16/06/13
 * Time: 18:52
 * To change this template use File | Settings | File Templates.
 */
interface IGenericDriver
{
    public function query($query, $result = MYSQLI_STORE_RESULT);
    public function fetch($result = NULL);
    function numRows($result = NULL);
    public function insertID();
    public function error();
    public function s($str);
    public function clientVersion();
    public function serverVersion();
}