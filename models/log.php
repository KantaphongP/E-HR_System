<?php class log{
    public $ts_id;
    public $status_id;
    public $staff_id;
    public $ldate;  
    public $manday;
    public $detail;


    public function __constuct($ts_id,$status_id,$staff_id,$ldate,$manday,$detail)
    {   $this->ts_id = $ts_id; 
        $this->status_id = $status_id; 
        $this->staff_id = $staff_id;
        $this->ldate = $ldate;
        $this->manday = $manday;
        $this->detail = $detail;
       
    }

    public static function getAll()
    {
        //echo "eye";
        $logList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM `log` NATURAL JOIN log_detail";
        $result=$conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {   
            $ts_id = $my_row['TS_ID'];
            $status_id = $my_row['STATUS_ID'];  
            $staff_id = $my_row['STAFF_ID'];
            $ldate = $my_row['LDATE'];
            $manday = $my_row['MANDAY']; 
            $detail =  $my_row['DETAIL'];
            //echo 'eye';
            //echo $ts_id;
            echo $detail;
            
            $logList[] = new log($ts_id,$status_id,$staff_id,$ldate,$manday,$detail);
        }
    
        require("connection_close.php");

        return $logList;
    }
} 
?>