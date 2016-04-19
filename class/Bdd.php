<?php

    namespace SupTrainCommander;

    class Bdd{

        /* ********************
			== VAR Bdd
		   ******************** */
        private static $_hote;
        private static $_database;
        private static $_login;
        private static $_password;
        private static $_options;

        /* ************************
			== CONSTRUCT Bdd
		   ************************ */
        public function __construct($h = "localhost", $d = "databse", $l = "root", $p = "") {
            self::$_hote = $h;
            self::$_database = $d;
            self::$_login = $l;
            self::$_password = $p;
            self::$_options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ];
        }

        /* ************************
			== METHODES Bdd
		   ************************ */
        public static function connect() {
            $bdd = new PDO('mysql:host='.self::$_hote.';dbname='.self::$_database.'', ''.self::$_login.'',''.self::$_password.'', self::$_options);
            return $bdd;
        }
    }