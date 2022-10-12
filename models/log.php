<?php class log{
    public $ts_id;
    public $status_id;
    public $staff_id;
    public $lead_id;
    public $ldate;  
    public $mandays;
    public $dos;


    public function __constuct($ts_id,$status_id,$staff_id,$lead_id,$ldate,$manday,$dos)
    {   $this->ts_id = $ts_id; 
        $this->status_id = $status_id; 
        $this->staff_id = $staff_id;
        $this->lead_id = $lead_id;
        $this->manday = $manday;
        $this->dos = $dos;
       
    }

    public static function getAll()
    {
        $logList=[];
        require("connection_connect.php");
        $sql="SELECT log.TS_ID,STATUS_ID,STAFF_ID,LEAD_ID,LDATE,MANDAYS,DOS FROM `log` NATURAL JOIN log_detail WHERE log.TS_ID = log_detail.TS_ID";
        $result=$conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {   
            $ts_id = $my_row[TS_ID];
            $status_id = $my_row[STATUS_ID];  
            $staff_id = $my_row[STAFF_ID];
            $lead_id = $my_row[LEAD_ID];
            $ldate = $my_row[LDATE];
            $manday = $my_row[MANDAY]; 
            $dos =  $myrow[DOS];
            $logList[] = new log($ts_id,$status_id,$staff_id,$lead_id,$ldate,$manday,$dos);
        }
        require("connection_close.php");

        return $logList;
    }
} 
?>