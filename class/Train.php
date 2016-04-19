<?php

    namespace SuptrainCommander;

    class Train{

        /* ********************
			== VAR Train
		   ******************** */
        private static $_id;
        private static $_name;
        private static $_nameConducteur;
        private static $_country;

        /* ***********************
			== CONSTRUCT Train
		   *********************** */
        public function __construct($id, $name, $nameConducteur, $country) {
            // id
            if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
            // name
            self::$_name = $name;
            // nameConducteur
            self::$_nameConducteur = $nameConducteur;
            // country
            self::$_country = $country;
        }

        /* ********************
			== GET Train
		   ******************** */
        // id
        public static function getId() { return self::$_id; }
        // name
        public static function getName() { return self::$_name; }
        // nameConducteur
        public static function getNameConducteur() { return self::$_nameConducteur; }
        // country
        public static function getCountry() { return self::$_country; }

        /* ********************
			== SET Train
		   ******************** */
        // id
        public static function setId($id) { self::$_id = $id; }
        // name
        public static function setName($name) { self::$_name = $name; }
        // nameConducteur
        public static function setNameConducteur($nameConducteur) { self::$_nameConducteur = $nameConducteur; }
        // country
        public static function setcountry($country) { self::$_country = $country; }

        /* **********************
			== METHODES Train
		   ********************** */
    }