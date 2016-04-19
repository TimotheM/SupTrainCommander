<?php

    namespace SupTrainCommander;

    class TmpTravel{

        /* ********************
			== VAR TmpTravel
		   ******************** */
        private static $_id;
        private static $_travel;
        private static $_path;

        /* ************************
			== CONSTRUCT TmpTravel
		   ************************ */
        public function __construct($id, $travel, $path) {
            // id
            if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
            // travel
            self::$_travel = $travel;
            // path
            self::$_path = $path;
        }

        /* ********************
			== GET TmpTravel
		   ******************** */
        // id
        public static function getId() { return self::$_id; }
        // travel
        public static function getTravel() { return self::$_travel; }
        // path
        public static function getPath() { return self::$_path; }

        /* ********************
			== SET TmpTravel
		   ******************** */
        // id
        public static function setId($id) { self::$_id = $id; }
        // travel
        public static function setTravel($travel) { self::$_travel = $travel; }
        // path
        public static function setPath($path) { self::$_path = $path; }

        /* ************************
			== METHODES TmpTravel
		   ************************ */
    }