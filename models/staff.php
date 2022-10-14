<?php class Staff{
    public $STAFF_ID;
    public $S_FNAME;
    public $S_LNAME;
    public $DOB;
    public $TEAM_ID;
    public $TEAM_NAME;
    public $PROJ_ID;
    public $PROJ_NAME;

    public function __construct($STAFF_ID,$S_FNAME,$S_LNAME,$DOB,$TEAM_ID,$TEAM_NAME,$PROJ_ID,$PROJ_NAME)
    {
        $this->STAFF_ID = $STAFF_ID;
        $this->S_FNAME  = $S_FNAME;
        $this->S_LNAME  = $S_LNAME;
        $this->DOB      = $DOB;
        $this->TEAM_ID = $TEAM_ID;
        $this->TEAM_NAME  = $TEAM_NAME;
        $this->PROJ_ID  = $PROJ_ID;
        $this->PROJ_NAME = $PROJ_NAME;

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
            $DOB=$my_row['DOB'];
            $staffList[] = new Staff($STAFF_ID,$S_FNAME,$S_LNAME,$DOB,$TEAM_ID,$TEAM_NAME,$PROJ_ID,$PROJ_NAME);
        }
        require("connection_close.php");
        return $staffList;


    }

    public static function get($STAFF_ID)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM staff NATURAL JOIN stp NATURAL JOIN team NATURAL JOIN project WHERE STAFF_ID='$STAFF_ID' ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $STAFF_ID = $my_row['STAFF_ID'];
        $S_FNAME = $my_row['S_FNAME'];
        $S_LNAME = $my_row['S_LNAME'];
        $DOB = $my_row['DOB'];
        $TEAM_ID = $my_row['TEAM_ID'];
        $TEAM_NAME = $my_row['TEAM_NAME'];
        $PROJ_ID = $my_row['PROJ_ID'];
        $PROJ_NAME = $my_row['PROJ_NAME'];

        require("connection_close.php");
        return new Staff($STAFF_ID,$S_FNAME,$S_LNAME,$DOB,$TEAM_ID,$TEAM_NAME,$PROJ_ID,$PROJ_NAME);


    }

}
?>