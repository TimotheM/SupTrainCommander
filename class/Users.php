<?php

    namespace SupTrainCommander;

    class Users{

        /* ********************
			== VAR Users
		   ******************** */
        private static $_id;
        private static $_lastname;
        private static $_firstname;
        private static $_email;
        private static $_password;
        private static $_avatar;
        private static $_facebook;
        private static $_google;
        private static $_uid;
        private static $_line;
        private static $_postalCode;
        private static $_city;
        private static $_enable;
        private static $_coin;
        private static $_nbrPath;

        /* ************************
			== CONSTRUCT Users
		   ************************ */
        public function __construct($id, $lastname, $firstname, $email, $password, $avatar, $facebook, $google, $uid, $line, $postalCode, $city, $enable, $coin, $nbrPath) {
            // id
            if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
            // lastname
            self::$_lastname = $lastname;
            // firstname
            self::$_firstname = $firstname;
            // email
            self::$_email = $email;
            // password
            self::$_password = $password;
            // avatar
            self::$_avatar = $avatar;
            // facebook
            self::$_facebook = $facebook;
            // google
            self::$_google = $google;
            // uid
            self::$_uid = $uid;
            // line
            self::$_line = $line;
            // postalCode
            self::$_postalCode = $postalCode;
            // city
            self::$_city = $city;
            // enable
            self::$_enable = $enable;
            // coin
            self::$_coin = $coin;
            // nbrPath
            self::$_nbrPath = $nbrPath;
        }

        /* ********************
			== GET TmpTravel
		   ******************** */
        // id
        public static function getId() { return self::$_id; }
        // lastname
        public static function getLastname() { return self::$_lastname; }
        // firstname
        public static function getFirstname() { return self::$_firstname; }
        // email
        public static function getEmail() { return self::$_email; }
        // password
        public static function getPassword() { return self::$_password; }
        // avatar
        public static function getAvatar() { return self::$_avatar; }
        // facebook
        public static function getFacebook() { return self::$_facebook; }
        // google
        public static function getGoogle() { return self::$_google; }
        // uid
        public static function getUid() { return self::$_uid; }
        // line
        public static function getLine() { return self::$_line; }
        // postalCode
        public static function getPostalCode() { return self::$_postalCode; }
        // city
        public static function getCity() { return self::$_city; }
        // enable
        public static function getEnable() { return self::$_enable; }
        // coin
        public static function getCoin() { return self::$_coin; }
        // nbrPath
        public static function getNbrPath() { return self::$_nbrPath; }

        /* ********************
			== SET TmpTravel
		   ******************** */
        // id
        public static function setId($id) { self::$_id = $id; }
        // lastname
        public static function setLastname($lastname) { self::$_lastname = $lastname; }
        // firstname
        public static function setFirstname($firstname) { self::$_firstname = $firstname; }
        // email
        public static function setEmail($email) { self::$_email = $email; }
        // password
        public static function setPassword($password) { self::$_password = $password; }
        // avatar
        public static function setAvatar($avatar) { self::$_avatar = $avatar; }
        // facebook
        public static function setFacebook($facebook) { self::$_facebook = $facebook; }
        // google
        public static function setGoogle($google) { self::$_google = $google; }
        // uid
        public static function setUid($uid) { self::$_uid = $uid; }
        // line
        public static function setLine($line) { self::$_line = $line; }
        // postalCode
        public static function setPostalCode($postalCode) { self::$_postalCode = $postalCode; }
        // city
        public static function setCity($city) { self::$_city = $city; }
        // enable
        public static function setEnable($enable) { self::$_enable = $enable; }
        // coin
        public static function setCoin($coin) { self::$_coin = $coin; }
        // nbrPath
        public static function setNbrPath($nbrPath) { self::$_nbrPath = $nbrPath; }

        /* ************************
			== METHODES Users
		   ************************ */
    }