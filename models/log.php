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

        public static function get($STAFF_ID,$MONTH,$YEAR){
            if((int)$MONTH < 10){
                $MONTH = '0'.$MONTH;
            }
        
            $TS_ID = substr($YEAR,0,4).substr($MONTH,0,2).substr($STAFF_ID,0,1).substr($STAFF_ID,3,2);
            require("connection_connect.php");
            $sql="SELECT * FROM `log` NATURAL JOIN `status` WHERE log.TS_ID = '$TS_ID'";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $TS_ID = $my_row['TS_ID'];
            $STATUS_ID = $my_row['STATUS_ID'];
            $STAFF_ID = $my_row['STAFF_ID'];
            $TOTAL_MANDAY = $my_row['TOTAL_MANDAY'];
            $STATUS_NAME = $my_row['STATUS_NAME'];
            
            echo $TOTAL_MANDAY;
            echo $STATUS_NAME;
            require("connection_close.php");
            return new Log($TS_ID,$STATUS_ID,$STAFF_ID,$TOTAL_MANDAY,$STATUS_NAME);

        }
}
?>