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
            $log_month_row = Log::get($staff_id,$month,$year);
            require_once('./views/timesheet/timesheet.php');
        }

        public function myTimesheetDetail()
        {
            $staff_id = $_GET['staff_id'];
            $month = $_GET['m'];
            $year = $_GET['y'];
            $ts_id = $_GET['TS_ID'];
            $ldate = $_GET['ldate'] ;
            $log_detail = log_detail::get($staff_id,$month,$year,$ldate,$ldate_old); 
            $log_list = log_detail::getAll($staff_id,$month,$year);
            $staff_row = Staff::get($staff_id);
            $log_month_row = Log::get($staff_id,$month,$year);
            
            $manday_old = $log_detail->manday;
            require_once('./views/timesheet/timesheetdetail.php');
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
        
        public function updateTimesheet()
        {
             $detail = $_GET['DOS'];
             $ldate = $_GET['DOD'];
             $manday_new = $_GET['MANDAY'];
             $manday_old = $_GET['manday_old'];
             $note =  $_GET['NOTE'];
             $staff_id = $_GET['staff_id'];
             $manday = $manday_new - $manday_old;
             

             log_detail::update($detail,$manday_new,$note,$staff_id,$ldate,$manday);
             TimesheetController::myTimesheet();
        }

        public function deleteTimesheet(){
             $detail = $_GET['DOS'];
             $ldate = $_GET['DOD'];
             $manday = $_GET['MANDAY']; 
             $note =  $_GET['NOTE'];
             $staff_id = $_GET['staff_id'];
             $month = $_GET['m'];
             $year = $_GET['y'];

             log_detail::delete($staff_id,$month,$year,$ldate,$manday);
             TimesheetController::myTimesheet();
        }
    }
?>