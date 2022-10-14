<?php
    class TimesheetController
    {

        public function myTimesheet()
        {
            $staff_id = $_GET['staff_id'];
            $month = $_GET['m'];
            $year = $_GET['y'];
            $log_list = log_detail::getAll($staff_id,$month,$year);
            $staff_row = Staff::get($staff_id);
            // echo $staff_row->S_FNAME;
            // echo $staff_row->S_LNAME;
            require_once('./views/timesheet/timesheet.php');
        }
        
        public function addTimesheet()
        {
             $detail = $_GET['DOS'];
             $ldate = $_GET['DOD'];
             $manday = $_GET['MANDAY'];
             $note =  $_GET['NOTE'];
             $staff_id = $_GET['staff_id'];

             log_detail::addTimesheetDetail($detail,$manday,$note,$staff_id,$ldate);
             TimesheetController::myTimesheet();
        }
    }
?>