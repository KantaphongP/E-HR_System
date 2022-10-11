<style>
body{
    font-family : 'Segoe UI Semibold' ;
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
.navbar a{
    position: absolute;
    top : 30% ;
    font-size : 18px;
    color : #477295 ; 
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
    justify-content :space-evenly ;
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
    border-style: solid;
    border-width: 0 1px 0 0;
    border-color: #545454;
}
.filbar .user .ublock{
    display : flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.filbar .user .icon{
    margin: 5 25 0 25;
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
    width: 33.33%;
    display : flex ;
    justify-content: space-evenly;
    font-size : 20px;
    color : #477295 ; 
}
.filbar .project .pblock{
    display : flex;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}
.filbar .team{
    width: 33.33%;
    display : flex ;
    justify-content: space-evenly;
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
    margin: 2%;
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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background: #FFFFFF;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
.sum {
    display : flex;
    position: fixed;
    bottom: 2%;
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
.total {
    width : 45%;
    display : flex ;
    border-style: solid;
    border-width: 0 1px 0 0;
    border-color: #545454;
}
.status {
    width : 35%;
    display : flex;
    border-style: solid;
    border-width: 0 1px 0 0;
    border-color: #545454;
}
.submit {
    width : 20%;
    display : flex ; 
    
}
</style>
<html>
    <header>
        <title>My Timesheet</title>
    </header>
    <body style="background-color:BED2E5;">

    <div class="navbar">
        <a>My Timesheet</a>
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
                <a>Bussakorn Palatorn</a><br>
                </div>
            <div class="pos" >
                <a>Functional</a>
            </div></div></div>
        </div>
        <div class = "project">
            <div class ="pblock">
                <div class="ptitle">
                <a>Project : </a>
                </div>
                <div class="pproject">
                <a> Derndao BTH</a>
                </div>
            </div>
        </div>
        <div class = "team"> 
            <div class ="tblock">
                <div class="ttitle">
                <a>Team : </a>
                </div>
                <div class="tteam">
                <a> Functional</a>
                </div>
            </div>
        </div>
    </div>
    <div class ="calendar">
        <div class="cal">
            <div class ="month">
            <div><button><img src="leftarrow.png" height ="25" width="25" /></button></div>
            <div><a>October</a></div>
            <div><button><img src="rightarrow.png" height ="25" width="25" /></button></div>
            </div>
            <div class ="func">
                <button>Insert Log <img src="insert.png" height ="15" width="15" margin="0 0 0 1%"/></button>
            </div>
            <div class ="table" style="position: relative";>
            <table style="width: 100%">
                <tr>
                    <th>Date</th>
                    <th>Mandays</th>
                    <th>Details Of Service</th>
                    <th>Detail</th>
                    <th>Edit</th>
                </tr>
            </table>
            </div>
        </div>
        <div class="sum">
            <div class="total">
                <div class ="tt">
                    <a>Total Mandays : <a>
                </div>
            </div>
            <div class="status">
                <div class ="tt">
                    <a>Status : <a>
                </div>
            </div>
            <div class="submit">
                <div class ="tt">
                    <button>submit</button>
                </div>
            </div>
        </div>
    </div>
    
    </body>
</html>