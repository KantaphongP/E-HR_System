<?php
    class TimesheetController
    {

        public function myTimesheet()
        {
            $staff_id = $_GET['staff_id'];
            $log_list = log::getAll($staff_id);
            require_once('./views/timesheet/timesheet.php');
        }
        
        public function addTimesheet()
        {
             $detail = $_GET['DOS'];
             $manday = $_GET['MANDAY'];
             $note =  $_GET['NOTE'];
             $staff_id = $_GET['staff_id'];

             log::addTimesheetDetail($detail,$manday,$note,$staff_id);
             TimesheetController::myTimesheet();
        }
    }
?>