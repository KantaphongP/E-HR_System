<?php
    class TimesheetController
    {
        public function timesheet()
        {   
            
            $log_list = log::getAll();
            require_once('./views/timesheet/timesheet.php');
        }
        
        public function addTimesheet()
        {
             $detail = $_GET['DOS'];
             $manday = $_GET['MANDAY'];
             $note =  $_GET['NOTE'];

             log::addTimesheetDetail($detail,$manday,$note);
             TimesheetController::timesheet();
        }
    }
?>