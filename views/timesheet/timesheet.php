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

   
    </body>
</html>