<style>
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
    font-family : 'Segoe UI Semibold' ;
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
    align : center ;
}

.filbar {
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
.filbar ul{
    list-style: none;
    padding : 0 ;
    margin : 0 ;
    position: absolute;
    top : 0;
}
.filbar li{
    display : inline-block ;
}
.filbar li .fuser{
    position: absolute;
    top : 0;
    width: 33.33%;
    background: #FFFFFF;
    border-style : solid ;
    border-width: 1px;
    border-color : #545454 ;
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
        <ul>
        <li><div class = "fuser">
            <img src="user.png" height ="25" width="25" />
        </div></li>
        <li><div class = "fpoject"> </div></li>
        <li><div class = "fteam"> </div></li>
        </ul>
    </div>

   
    </body>
</html>