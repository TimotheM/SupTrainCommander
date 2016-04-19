<?php

    namespace SupTrainCommander;

    class Travel{

        /* ********************
			== VAR Travel
		   ******************** */
        private static $_id;
        private static $_initDeparture;
        private static $_initArrived;
        private static $_time;
        private static $_price;
        private static $_users;
        private static $_pay;

        /* *********************
			== CONSTRUCT Travel
		   ********************* */
        public function __construct($id, $initDeparture, $initArrived, $time, $price, $users, $pay) {
            // id
            if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
            // initDeparture
            self::$_initDeparture = $initDeparture;
            // initArrived
            self::$_initArrived = $initArrived;
            // time
            self::$_time = $time;
            // price
            self::$_price = $price;
            // users
            self::$_users = $users;
            // pay
            self::$_pay = $pay;
        }

        /* ********************
			== GET Travel
		   ******************** */
        // id
        public static function getId() { return self::$_id; }
        // initDeparture
        public static function getInitDeparture() { return self::$_initDeparture; }
        // initArrived
        public static function getInitArrived() { return self::$_initArrived; }
        // time
        public static function getTime() { return self::$_time; }
        // price
        public static function getPrice() { return self::$_price; }
        // users
        public static function getUsers() { return self::$_users; }
        // pay
        public static function getPay() { return self::$_pay; }

        /* ********************
			== SET Travel
		   ******************** */
        // id
        public static function setId($id) { self::$_id = $id; }
        // initDeparture
        public static function setInitDeparture($initDeparture) { self::$_initDeparture = $initDeparture; }
        // initArrived
        public static function setInitArrived($initArrived) { self::$_initArrived = $initArrived; }
        // time
        public static function setTime($time) { self::$_time = $time; }
        // price
        public static function setPrice($price) { self::$_price = $price; }
        // users
        public static function setUsers($users) { self::$_users = $users; }
        // pay
        public static function setPay($pay) { self::$_pay = $pay; }

        /* **********************
			== METHODES Travel
		   ********************** */
    }