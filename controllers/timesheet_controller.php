<?php
    class TimesheetController
    {
        public function timesheet()
        {   
            //echo "eye";
            $log_list = log::getAll();
            echo $log_list->ldate;
            require_once('./views/timesheet/tmesheet.php'); }
        
    }
?>