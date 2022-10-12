<?php
    class TimesheetController
    {
        public function timesheet()
        {   
            //echo "eye";
            $log_list = log::getAll();

            require_once('views/timesheet/timesheet.php'); }
        
    }
?>