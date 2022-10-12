<?php
    class TimesheetController
    {
        public function timesheet()
        {   
            
            $log_list = log::getAll();
            echo "eye";
            require_once('./views/timesheet/timesheet.php'); }
        
    }
?>