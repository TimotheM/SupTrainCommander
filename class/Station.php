<?php

    namespace SupTrainCommander;

    class Station {

        /* ********************
			== VAR Station
		   ******************** */
        private static $_id;
        private static $_name;
        private static $_line;
        private static $_postalCode;
        private static $_city;

        /* ***********************
			== CONSTRUCT Station
		   *********************** */
        public function __construct($id, $name, $line, $postalCode, $city) {
            // id
            if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
            // name
            self::$_name = $name;
            // line
            self::$_line = $line;
            // postalCode
            self::$_postalCode = $postalCode;
            // city
            self::$_city = $city;
        }

        /* ********************
			== GET Station
		   ******************** */
        // id
        public static function getId() { return self::$_id; }
        // name
        public static function getName() { return self::$_name; }
        // line
        public static function getLine() { return self::$_line; }
        // postalCode
        public static function getPostalCode() { return self::$_postalCode; }
        // city
        public static function getCity() { return self::$_city; }

        /* ********************
			== SET Station
		   ******************** */
        // id
        public static function setId($id) { self::$_id = $id; }
        // name
        public static function setName($name) { self::$_name = $name; }
        // line
        public static function setLine($line) { self::$_line = $line; }
        // postalCode
        public static function setPostalCode($postalCode) { self::$_postalCode = $postalCode; }
        // city
        public static function setCity($city) { self::$_city = $city; }

        /* **********************
			== METHODES Station
		   ********************** */
    }