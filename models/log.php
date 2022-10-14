<?php class Log{
public $TS_ID;
public $STATUS_ID;
public $STAFF_ID;
public $TOTAL_MANDAY;
public $STATUS_NAME;

        public function __construct($TS_ID,$STATUS_ID,$STAFF_ID,$TOTAL_MANDAY,$STATUS_NAME)
        {
            $this->TS_ID = $TS_ID;
            $this->STATUS_ID = $STATUS_ID;
            $this->STAFF_ID = $STAFF_ID;
            $this->TOTAL_MANDAY = $TOTAL_MANDAY;
            $this->STATUS_NAME = $STATUS_NAME;

        }

        public static function get(){


        }
}
?>