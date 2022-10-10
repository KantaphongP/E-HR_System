<?php class Staff{
    public $STAFF_ID;
    public $S_FNAME;
    public $S_LNAME;
    public $DOB;

    public function __construct($STAFF_ID,$S_FNAME,$S_LNAME,$DOB)
    {
        $this->STAFF_ID = $STAFF_ID;
        $this->S_FNAME  = $S_FNAME;
        $this->S_LNAME  = $S_LNAME;
        $this->DOB      = $DOB;
    }

    public static function getAll()
    {
        $staffList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM staff";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $STAFF_ID = $my_row['STAFF_ID'];
            $S_FNAME = $my_row['S_FNAME'];
            $S_LNAME=$my_row['S_LNAME'];
            $$DOB=$my_row['$DOB'];
            $staffList[] = new Staff($STAFF_ID,$S_FNAME,$S_LNAME,$DOB);
        }
        require("connection_close.php");
        return $staffList;


    }

    public static function get($STAFF_ID)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM staff WHERE STAFF_ID='$STAFF_ID' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $STAFF_ID = $my_row['STAFF_ID'];
        $S_FNAME = $my_row['S_FNAME'];
        $S_LNAME=$my_row['S_LNAME'];
        $DOB=$my_row['DOB'];
        require("connection_close.php");
        return new Staff($STAFF_ID,$S_FNAME,$S_LNAME,$DOB);


    }

}
?>