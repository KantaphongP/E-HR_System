<style>
body{
    font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    z-index: -1;
}
.navbar {
    position: fixed ;
    top: 0;
    width: 100%;
    height: 8%;
    left: 0px;
    background: #BED2E5;
    z-index: 0;
}
.navbar p{
    position: absolute;
    top : 30% ;
    left: 5%;
    font-size : 18px;
    color : #477295 ; 
}
.navbar .b{
    position: absolute;
    top: 30%;
}
.navbar ul{
    list-style: none;
    background : #BED2E5 ;
    padding : 0 ;
    margin : 0 ;
    position: absolute;
    top : 30%;
    right: 1%;
}
.navbar li{
    display : inline-block ;
    margin-right : 25px ;
}
.navbar button{
    border : none ;
    background : transparent ; 
    cursor: pointer;
}
.navbar .b button {
    position: absolute;
    left: 60;
}
.navbar .appli{
    display: flex;
    justify-content: flex-start;
}
.appname {
    position: fixed ;
    top: 8%;
    width: 100%;
    height: 8%;
    left: 0px;
    background: #EFF4F9;
    z-index: 0;
    
}
.appname a {
    position: absolute;
    left: 50%;
    top: 50%; 
    transform: translate(-50%, -50%);

    font-size : 30px;
    color : #477295 ; 
}
.filbar {
    display : flex ;
    justify-content :flex-start ;
    position: fixed ;
    top: 16%;
    width: 100%;
    height: 8%;
    left: 0px;
    background: #FFFFFF;
    z-index: 0;
    border-style : solid ;
    border-width: 1px;
    border-color : #545454 ;
}
.filbar .user{
    width: 33.33%;
    display : flex ;
    
}
.filbar .user .ublock{
    display : flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.filbar .user .icon{
    margin: 5 40 0 80;
}
.filbar .user .info{
    display : flex;
    flex-direction: column;
}
.filbar .user .name{
    font-size : 20px;
    color : #477295 ; 
}
.filbar .user .pos{
    font-family : 'Segoe UI Semibold' ;
    font-size : 15px;
    color : #477295 ; 
}
.filbar .project{
    width: 20%;
    display : flex ;
    justify-content: space-evenly;
    font-size: 22px;
    color: #477295;
}
.filbar .project .pblock{
    display : flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.filbar .team{
    width: 20%;
    display : flex ;
    justify-content: space-evenly;
    font-size: 22px;
    color: #477295;
}
.filbar .team .tblock{
    display : flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.calendar {
    position : fixed;
    top : 24% ;
    left: 0;
    width: 100%;
    height : 76% ;
    background-color: #EFF4F9;
    border: solid;
    border-width: 1px;
}
.calendar .cal{
    width: 80%;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.calendar .cal .month{
    display : flex ;
    justify-content: space-evenly;
    font-size: 22px;
    color: #477295;
}
.calendar .cal .month button{
    border : none ;
    background : transparent ; 
    cursor: pointer;
}
.calendar .cal .func{
    display : flex ;
    justify-content: flex-end;
    margin: 0 1% 0 0; 
}
.calendar .cal .func button{
    font-size : 15px;
    color : #2E5575 ; 
    border : none ;
    background : transparent ; 
    cursor: pointer;
}
.month h1{
    font-size : 30px;
}
.pre , .mon , .nex{
    display : flex;
    
}
.table button{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background: #FFFFFF;
  border-color : #AEAEAE;
}
.table .tb th{
    position: sticky;
    top: 0;
    background-color : #AEAEAE;
    text-align:center;
} 
tbody>tr>:nth-child(3){  
    text-align:left;
}
tbody>tr>:nth-child(1){
    width: 15% ;      
    text-align:center;
}
tbody>tr>:nth-child(2){
    width: 15% ;      
    text-align:center;
}
tbody>tr>:nth-child(4){
    width: 15% ;      
    text-align:center;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
.sum {
    display : flex;
    bottom: 0%;
    width: 80%;
    height: 15%;
    background: #FFFFFF;
    border-style: solid;
    border-width: 1px;
    border-color: #545454;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    
}
.summan {
    font-size: 50px;
    font-weight: 500;
    color : #368236;
}
.total {
    width : 45%;
    display : flex ;
    justify-content: center ;
    border-style: solid;
    border-width: 0 1px 0 0;
    border-color: #545454;
}
.tot {
    display: flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.stat {
    display: flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.submit .tt {
    display: flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.total .tt {
    position: relative ;
    margin: 25 50 0 0;
}
.status {
    width : 35%;
    display : flex;
    justify-content: center ;
    border-style: solid;
    border-width: 0 1px 0 0;
    border-color: #545454;
}
.status .tt{
    position: relative ;
    margin : 10 50 0 0;
}
.appr {
    background-color : #9C2500;
    width : 200;
    height : 50;
    border-radius : 30px;
}
.appr a {
    font-size: 20px;
    font-weight: 500;
    color : #fff;
    text-align : center ;
}
.submit {
    width : 20%;
    display : flex ; 
    justify-content: center;
}
.popup {
    background : rgba(0, 0, 0, 0.6);
    width : 100%;
    height : 100%;
    position : absolute;
    top : 0;
    left: 0;
    display: none;
    justify-content : center;
    align-items: center ;
}
.popup-content{
    height : 50%;
    width : 50%;
    background : #fff;
    padding : 20px;
    border-radius: 5px;
    position: relative;
}
.popup2 {
    background : rgba(0, 0, 0, 0.6);
    width : 100%;
    height : 100%;
    position : absolute;
    top : 0;
    left: 0;
    display: flex;
    justify-content : center;
    align-items: center ;
}
.popup2-content{
    height : 50%;
    width : 50%;
    background : #fff;
    padding : 20px;
    border-radius: 5px;
    position: relative;
}

</style>
<html>
    <header>
        <title>My Timesheet</title>
    </header>
    <body style="background-color:BED2E5;">
    <div class="navbar">
        <div class="appli">
            <div class="b">
                <button class ="back"><img src="leftarrow.png" height ="25" width="25" /></button>
            </div>
            <div class="n">
                <p style="margin : 0 0 0 1%">My Timesheet</p>
            </div>
            
        </div>
        <ul>
            <li><button class="button"><img src="search.png" height ="25" width="25" /></li>
            <li><button class="button"><img src="notification.png" height ="25" width="25" /></button></li>
            <li><button class="button"><img src="user.png" height ="25" width="25" /></button></li>
        </ul>
    </div>
    <div class = "appname">
        <a>Timesheet</a>
    </div>
    <div class = "filbar">
        <div class = "user">
            <div class = "ublock">
                <div class = "icon"><img src="user.png" height ="32" width="32" /></div>
                <div class = "info">
                    <div class="name">
                        <?php echo $staff_row->S_FNAME ." ".$staff_row->S_LNAME ?>
                    </div>
                    <div class="pos" >
                        <?php echo $staff_row->TEAM_NAME ?>
                    </div>
                </div>
            </div>
        </div>
        <div class = "project">
            <div class ="pblock">
                <div class="ptitle">
                <a>Project : </a>
                </div>
                <div class="pproject">
                <?php echo $staff_row->PROJ_NAME ?>
                </div>
            </div>
        </div>
        <div class = "team"> 
            <div class ="tblock">
                <div class="ttitle">
                <a>Team : </a>
                </div>
                <div class="tteam">
                <?php echo $staff_row->TEAM_NAME ?>
                </div>
            </div>
        </div>
    </div>
    <div class ="calendar">
        <div class="cal">
            <div class ="month">
                <div class ="pre"><button class ="prev"><img src="leftarrow.png" height ="25" width="25" /></button></div>
                <div class ="mon">
                    <div class ="dt">
                        <h1></h1>
                        <p style="text-align: center;"></p>
                    </div>
                </div>
                <div class ="nex"><button class ="next"><img src="rightarrow.png" height ="25" width="25" /></button></div>
            </div>
            <div class ="func">
                <a></a>
                <button class="button" id="button">Insert Log <img src="insert.png" height ="15" width="15" margin="0 0 0 1%"/></button>
            </div>
            <div class ="table" style="position: relative" id="tablebutton";>
                <div class="tb" style="overflow-y: scroll ;position: relative;height: 400px; border = solid ; boder-width = 1px">
                    <table style="width: 100%">
                    <tr><th>Date</th><th>Mandays</th><th>Details Of Service</th><th>Edit</th></tr>
                    <?php foreach($log_list as $log)
                    {
                    echo "
                    <tr><td>$log->ldate</td>
                    <td>$log->manday</td>
                    <td >$log->detail</td>
                    <td><a href=?controller=timesheet&action=myTimesheetDetail&staff_id=$staff_id&m=$month&y=$year&TS_ID=$log_month_row->TS_ID&ldate=$log->ldate>Edit</a></td>
                    </tr>";
                    }
                    ?>
                </table>
                </div>
            </div>
        </div>
       
    </div>
    <div class="sum">
            <div class="total">
                <div class="tot">
                    <div class ="tt">
                        <a>Total Mandays  </a>                
                    </div>
                    <div class ="summan">
                        <?php echo $log_month_row->TOTAL_MANDAY ?>
                    </div>
                </div>
            </div>
            <div class="status">
                <div class="stat">
                    <div class ="tt">
                        <a>Status  </a>
                    </div>
                    <div class ="appr">
                        <a><?php echo $log_month_row->STATUS_NAME ?><a>
                    </div>
                </div>
            </div>
            <div class="submit">
                <div class ="tt">
                    <button>submit</button>
                </div>
            </div>
            
    </div>
    <div class ="popup">
        <div class="popup-content">
            <button class ="ccbutton" id="ccbutton" >cancel</button>
            <form method="get" action="">
                <div class="head">
                    <h>Insert Work Log</h>
                </div>
                <div class="create">
                
                <p>Date :<input type ="date" name="DOD" id = "DOD" require></p></p>
                <p>Timesheet Information</p>
                <p>Timesheet ID : <?php echo $log_month_row->TS_ID?></p>
                <p>Name : <?php echo $staff_row->S_FNAME." ".$staff_row->S_LNAME?></p>
                <p>Project : <?php echo $staff_row->PROJ_NAME?></p>
                <p>Team : <?php echo $staff_row->TEAM_NAME?></p>

                <p>Details Of Service : <input type ="text" name="DOS" id="DOD" require></p>
                <p>Mandays : <input type ="text" name="MANDAY" id="DOD" require></p>
                <p>Notes : <input type ="text"name="NOTE" id="DOD" require></p>
                
                </div>
                <div class="insertbutton" id ="insertbutton">
                    <input type="hidden" name= "controller" value="timesheet"/>
                    <input type="hidden" name="staff_id" value = "<?php echo $staff_id; ?>"/>
                    <input type="hidden" name="m" value = "<?php echo $month; ?>"/>
                    <input type="hidden" name="y" value = "<?php echo $year; ?>"/>
                    <button class ="insbutton" id="insbutton" type="submit" name="action" value="addTimesheet">insert</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById("button").addEventListener("click", function(){
            document.querySelector(".popup").style.display="flex" ;
        })
        document.getElementById("ccbutton").addEventListener("click", function(){
            document.querySelector(".popup").style.display="none" ;
        })
        
        document.getElementById("insbutton").addEventListener("click", function(){
            document.querySelector(".popup").style.display="none" ;
        })

        const date = new Date();
        var m = "<?php echo $month; ?>" ; 
        var y = "<?php echo $year; ?>" ;
        date.setMonth(m-1) ;
        date.setYear(y) ;
        const renderCalendar = () => {
        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
            ];
        
        document.querySelector(".month h1").innerHTML = months[date.getMonth()];
        document.querySelector(".month p").innerHTML = date.getFullYear() ;
        }

        var datestring = date.getFullYear() +"-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + ("0" + date.getDate()).slice(-2) ;
        DOD.value = datestring
        
        document.querySelector(".back").addEventListener("click", () => {
            href ='?controller=pages&action=home';
            location.href = this.href
        });

        document.querySelector(".prev").addEventListener("click", () => {
            var d = date.setMonth(date.getMonth() - 1);
            if (d = 0) date.setYear(date.getFullYear()-1) ;

            var m =date.getMonth()+1 ;
            var y =date.getFullYear() ;
            href ='?controller=timesheet&action=myTimesheet&staff_id=STF02';
            location.href = this.href+'&m='+m +'&y='+y ;

            renderCalendar();
        });
        document.querySelector(".next").addEventListener("click", () => {
            date.setMonth(date.getMonth() + 1);
            var m =date.getMonth()+1 ;
            var y =date.getFullYear() ;
            href ='?controller=timesheet&action=myTimesheet&staff_id=STF02';
            location.href = this.href+'&m='+m +'&y='+y ;
            renderCalendar();
        });
        document.querySelector(".next").addEventListener("click", () => {
            if (date.getMonth() = 12) date.setYear(date.getFullYear()+1) ;
            renderCalendar();
        });
        document.querySelector(".ccbutton").addEventListener("click", () => {
            var m =date.getMonth()+1 ;
            var y =date.getFullYear() ;
            href ='?controller=timesheet&action=myTimesheet&staff_id=STF02';
            location.href = this.href+'&m='+m +'&y='+y ;
            renderCalendar();
        });
        document.querySelector(".insertbutton").addEventListener("click", () => {
            var m =date.getMonth()+1 ;
            var y =date.getFullYear() ;
            href ='?controller=timesheet&action=myTimesheet&staff_id=STF02';
            location.href = this.href+'&m='+m +'&y='+y ;
            renderCalendar();
        });
        
        


        renderCalendar();
    </script>
    
    </body>
</html>