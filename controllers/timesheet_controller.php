<?php
    class TimesheetController
    {
        public function mytimesheet(){
            require_once('./views/timesheet/timesheet.php'); 
        }
        public function timesheet()
        {   
            
            $log_list = log::getAll();
            echo "eye";
            require_once('./views/timesheet/timesheet.php'); 
        }
        
    }
?>