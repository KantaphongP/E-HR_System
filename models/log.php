<?php class log{
    public $ts_id;
    public $status_id;
    public $staff_id;
    public $ldate;  
    public $manday;
    public $detail;


    public function __construct($ts_id,$status_id,$staff_id,$ldate,$manday,$detail)
    {  
        $this->ts_id = $ts_id; 
        $this->status_id = $status_id; 
        $this->staff_id = $staff_id;
        $this->ldate = $ldate;
        $this->manday = $manday;
        $this->detail = $detail;
       
    }

    public static function getAll()
    {
        
        $user_id1 = 'STF01';
        $user_id2 = 'STF02';
        $user_id3 = 'STF03';
        $logList=[];
        require("connection_connect.php");
        
        

        $sql="SELECT * FROM `log` NATURAL JOIN log_detail WHERE log.STAFF_ID = '$user_id2'";
        $result=$conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {   
            $ts_id = $my_row['TS_ID'];
            $status_id = $my_row['STATUS_ID'];  
            $staff_id = $my_row['STAFF_ID'];
            $ldate = $my_row['LDATE'];
            $manday = $my_row['MANDAY']; 
            $detail =  $my_row['DETAIL'];
            $logList[] = new log($ts_id,$status_id,$staff_id,$ldate,$manday,$detail);
           // echo $logList[0]->ldate;
           
        }
        
         require("connection_close.php");

        return $logList;
    }

    public static function addTimesheetDetail($DETAIL,$MANDAY,$NOTE)
     {
        require("connection_connect.php");
        $LDATE = '2022-04-12';
        $STAFF_ID = 'STF02';
        $TS_ID = substr($LDATE,0,4).substr($LDATE,5,2).substr($STAFF_ID,0,1).substr($STAFF_ID,3,2);
        $sql = "SELECT count(`TS_ID`) AS check_id FROM `log` WHERE TS_ID = '$TS_ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $check = $my_row['check_id'];
        
        if($check==0){
               $sql = "INSERT INTO `log`(`TS_ID`, `STATUS_ID`, `STAFF_ID`) VALUES ('$TS_ID','0','$STAFF_ID')";
               $result = $conn->query($sql);

               $sql = "INSERT INTO `log_detail`(`TS_ID`, `LDATE`, `MANDAY`, `DETAIL`) VALUES ('$TS_ID','$LDATE','$MANDAY','$DETAIL')";
               $result = $conn->query($sql);
        }

        else{   
            $sql = "INSERT INTO `log_detail`(`TS_ID`, `LDATE`, `MANDAY`, `DETAIL`) VALUES ('$TS_ID','$LDATE','$MANDAY','$DETAIL')";
            $result = $conn->query($sql);
         }
        
        
        /*
        ldate -> ค่าที่กรอกวันที่ตอนเพิ่มทามชีท
        $TS_ID=substr($ldate,0,4).substr($ldate,5,2).substr($staff_id,0,1).substr($staff_id,3,2);
        */
        require("connection_close.php");
        return  ;
     }
} 
?>