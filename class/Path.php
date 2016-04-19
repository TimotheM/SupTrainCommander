<?php

	namespace SupTrainCommander;

	class Path{

		/* ********************
			== VAR Path
		   ******************** */
		private static $_id;
		private static $_cityDeparture;
		private static $_datetimeDeparture;
		private static $_cityArrived;
		private static $_datetimeArrived;
		private static $_train;

		/* ********************
			== CONSTRUCT Path
		   ******************** */
		public function __construct($id, $cityDeparture, $datetimeDeparture, $cityArrived, $datetimeArrived, $train) {
			// id
			if ($id != "") { self::$_id = $id; } else { self::$_id = ""; }
			// cityDeparture
			self::$_cityDeparture = $cityDeparture;
			// datetimeDeparture
			if ($datetimeDeparture != "") { self::$_datetimeDeparture = $datetimeDeparture; } else { self::$_datetimeDeparture = time(); }
			// cityArrived
			self::$_cityArrived = $cityArrived;
			// datetimeArrived
			if ($datetimeArrived != "") { self::$_dateTimeArrived = $datetimeArrived; } else { self::$_dateTimeArrived = time(); }
			// train
			self::$_train = $train;
		}

		/* ********************
			== GET Path
		   ******************** */
		// id
		public static function getId() { return self::$_id; }
		// cityDeparture
		public static function getCityDeparture() { return self::$_cityDeparture; }
		// datetimeDeparture
		public static function getDatetimeDeparture() { return self::$_datetimeDeparture; }
		// cityArrived
		public static function getCityArrived() { return self::$_cityArrived; }
		// datetimeArrived
		public static function getDatetimeArrived() { return self::$_datetimeArrived; }
		// train
		public static function getTrain() { return self::$_train; }

		/* ********************
			== SET Path
		   ******************** */
		// id
		public static function setId($id) { self::$_id = $id; }
		// cityDeparture
		public static function setCityDeparture($cityDeparture) { self::$_cityDeparture = $cityDeparture; }
		// datetimeDeparture
		public static function setDatetimeDeparture($datetimeDeparture) { self::$_datetimeDeparture = $datetimeDeparture; }
		// cityArrived
		public static function setCityArrived($cityArrived) { self::$_cityArrived = $cityArrived; }
		// datetimeArrived
		public static function setDatetimeArrived($datetimeArrived) { self::$_datetimeArrived = $datetimeArrived; }
		// train
		public static function setTrain($train) { self::$_train = $train; }

		/* ********************
			== METHODES Path
		   ******************** */
	}