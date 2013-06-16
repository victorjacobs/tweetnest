<?php
	// PONGSOCKET TWEET ARCHIVE
	// DB class
	// By Andy Graulund
	// <electricnet@gmail.com>

    require_once "class.mysqldriver.php";
    require_once "class.postgresdriver.php";

	class DB {

        static function checkDatabaseAvailability() {
            $avEngines = array();

            if (function_exists("pg_connect")) {
                $avEngines[] = "postgres";
            }

            if (function_exists("mysql_connect") || function_exists("mysqli_connect")) {
                $avEngines[] = "mysql";
            }

            return $avEngines;
        }

        static function openConnection($args) {
        // TODO: clean this
            switch ($args["engine"]) {
                case "mysql":
                    return new MySQLDriver($args);
                    break;

                case "postgres":

                    break;

                default:
                    throw new Exception("Illegal database engine: " . $args["engine"]);
            }
        }
    }