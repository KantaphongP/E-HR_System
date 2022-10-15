<?php class log_detail{
    public $ts_id;
    public $status_id;
    public $staff_id;
    public $ldate;  
    public $manday;
    public $detail;
    public $note;


    public function __construct($ts_id,$status_id,$staff_id,$ldate,$manday,$detail,$note)
    {  
        $this->ts_id = $ts_id; 
        $this->status_id = $status_id; 
        $this->staff_id = $staff_id;
        $this->ldate = $ldate;
        $this->manday = $manday;
        $this->detail = $detail;
        $this->note = $note;
       
    }

    public static function getAll($staff_id,$month,$year)
    {
        //echo $staff_id;
        if((int)$month < 10){
            $month = '0'.$month;
        }
    
        $TS_ID = substr($year,0,4).substr($month,0,2).substr($staff_id,0,1).substr($staff_id,3,2);
        $logList=[];
        require("connection_connect.php");
        
        $sql="SELECT * FROM `log` NATURAL JOIN log_detail WHERE log.TS_ID = '$TS_ID' ORDER BY log_detail.LDATE";
        $result=$conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {   
            $ts_id = $my_row['TS_ID'];
            $status_id = $my_row['STATUS_ID'];  
            $staff_id = $my_row['STAFF_ID'];
            $ldate = $my_row['LDATE'];
            $manday = $my_row['MANDAY']; 
            $detail =  $my_row['DETAIL'];
            $note = $my_row['NOTE'];
            $logList[] = new log_detail($ts_id,$status_id,$staff_id,$ldate,$manday,$detail,$note);
           
        }
        
         require("connection_close.php");

        return $logList;
    }

    public static function addTimesheetDetail($DETAIL,$MANDAY,$NOTE,$STAFF_ID,$LDATE)
     {
        require("connection_connect.php");
        $TS_ID = substr($LDATE,0,4).substr($LDATE,5,2).substr($STAFF_ID,0,1).substr($STAFF_ID,3,2);
        $sql = "SELECT count(`TS_ID`) AS check_id FROM `log` WHERE TS_ID = '$TS_ID'";
        $result = $conn->query($sql);
        
       
        $m = substr($LDATE,5,2) ;
        $y = substr($LDATE,0,4) ;
        $my_row = $result->fetch_assoc();
        $check = $my_row['check_id'];
        
        if($check==0){
               
               $sql = "INSERT INTO `log`(`TS_ID`, `STATUS_ID`, `STAFF_ID`,`TOTAL_MANDAY`) VALUES ('$TS_ID','0','$STAFF_ID','$MANDAY')";
               $result = $conn->query($sql);

               $sql = "INSERT INTO `log_detail`(`TS_ID`, `LDATE`, `MANDAY`, `DETAIL`,`NOTE`) VALUES ('$TS_ID','$LDATE','$MANDAY','$DETAIL','$NOTE')";
               $result = $conn->query($sql);

               
        }

        else{   
            $sql2 = "SELECT count(TS_ID) AS check_id FROM log_detail WHERE TS_ID = '$TS_ID' and ldate = '$LDATE'";
            $result2 = $conn->query($sql2);
            $my_row = $result2->fetch_assoc();
            $check2 = $my_row['check_id'];

            if($check2==0){
               $sql = "INSERT INTO log_detail(TS_ID, LDATE, MANDAY, DETAIL,NOTE) VALUES ('$TS_ID','$LDATE','$MANDAY','$DETAIL','$NOTE')";
               $result = $conn->query($sql);
               $sql ="UPDATE log SET TOTAL_MANDAY= TOTAL_MANDAY +'$MANDAY' WHERE TS_ID = '$TS_ID'";
               $result = $conn->query($sql);
               echo "<script>
                        window.location.href ='?controller=timesheet&action=myTimesheet&staff_id=$STAFF_ID&m=$m&y=$y';
                    </script>";
           }
           else{
                
                $message = "Duplicate date, You have to change the new date or delete your old detail";
                echo "<script type = 'text/javascript'>alert('$message');
                        window.location.href ='?controller=timesheet&action=myTimesheet&staff_id=$STAFF_ID&m=$m&y=$y';
                    </script>";
           }
        //        if($conn_error){
        //        echo("Error description: " . $mysqli -> error);
        // }

              

         }
        require("connection_close.php");
        return  ;
     }
     
     public static function update($DETAIL,$MANDAY_NEW,$NOTE,$STAFF_ID,$LDATE,$MANDAY){
        require("connection_connect.php");
        $TS_ID = substr($LDATE,0,4).substr($LDATE,5,2).substr($STAFF_ID,0,1).substr($STAFF_ID,3,2);
        $sql ="UPDATE `log_detail` SET `LDATE`='$LDATE',`MANDAY`='$MANDAY_NEW',`DETAIL`='$DETAIL',`NOTE`='$NOTE' WHERE TS_ID = '$TS_ID' and LDATE = '$LDATE'";
        $result = $conn->query($sql);

        //update total_manday log
        $sql ="UPDATE `log` SET `TOTAL_MANDAY`= TOTAL_MANDAY +'$MANDAY' WHERE TS_ID = '$TS_ID'";
        $result = $conn->query($sql);
        
        $m = substr($LDATE,5,2) ;
        $y = substr($LDATE,0,4) ;
        echo "<script>
                        window.location.href ='?controller=timesheet&action=myTimesheet&staff_id=$STAFF_ID&m=$m&y=$y';
                    </script>";

        require("connection_close.php");
        return ;

     }

     public static function get($staff_id,$month,$year,$ldate)
    {
        //echo $staff_id;
        if((int)$month < 10){
            $month = '0'.$month;
        }
    
        $TS_ID = substr($year,0,4).substr($month,0,2).substr($staff_id,0,1).substr($staff_id,3,2);
        $logList=[];
        require("connection_connect.php");
        
        $sql="SELECT * FROM `log` NATURAL JOIN log_detail WHERE log.TS_ID = '$TS_ID' AND log_detail.LDATE = '$ldate' ORDER BY log_detail.LDATE";
        $result=$conn->query($sql); 
        $my_row=$result->fetch_assoc();
            $ts_id = $my_row['TS_ID'];
            $status_id = $my_row['STATUS_ID'];  
            $staff_id = $my_row['STAFF_ID'];
            $ldate = $my_row['LDATE'];
            $manday = $my_row['MANDAY']; 
            $detail =  $my_row['DETAIL'];
            $note = $my_row['NOTE'];
        
         require("connection_close.php");

        return new log_detail($ts_id,$status_id,$staff_id,$ldate,$manday,$detail,$note);
    }

    public static function delete($staff_id,$month,$year,$ldate,$manday){
        if((int)$month < 10){
            $month = '0'.$month;
        }
        $TS_ID = substr($year,0,4).substr($month,0,2).substr($staff_id,0,1).substr($staff_id,3,2);

        require("connection_connect.php");
        $sql="DELETE FROM `log_detail` WHERE  TS_ID = '$TS_ID' AND LDATE = '$ldate'";
        $result=$conn->query($sql); 

        $sql ="UPDATE `log` SET `TOTAL_MANDAY`= TOTAL_MANDAY -'$manday' WHERE TS_ID = '$TS_ID'";
        $result = $conn->query($sql);

        $sql = "SELECT count(`LDATE`) AS check_ldate FROM `log_detail` WHERE TS_ID = '$TS_ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $check_ldate = $my_row['check_ldate'];

        if($check_ldate == 0){
            $sql="DELETE FROM `log` WHERE  TS_ID = '$TS_ID'";
            $result=$conn->query($sql);
        }

        $m = substr($ldate,5,2) ;
        $y = substr($ldate,0,4) ;
        echo "<script>
                        window.location.href ='?controller=timesheet&action=myTimesheet&staff_id=$staff_id&m=$m&y=$y';
                    </script>";

        require("connection_close.php");
        return ;
    }
} 
?>