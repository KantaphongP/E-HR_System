<?php
    class TimesheetController
    {
        public function timesheet()
        {   
            $log_list = log::getAll();

            require_once('views/timesheet/timesheet.php'); }
        
    }
?>