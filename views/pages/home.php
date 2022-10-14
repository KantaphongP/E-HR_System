<style>
body{
    font-family : 'Segoe UI Semibold' ;
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
.allapp{
    display : flex ;
    justify-content :flex-start ;
    position: fixed ;
    top: 16%;
    width: 100%;
    height: 84%;
    left: 0px;
    background: #FFFFFF;
}
.mytimesheet {
    border :solid;
    border-width : 1 px;
    width: 20%;
    height: 20%;
    left: 0px;
    background: #FFFFFF;
    cursor : pointer;
}

</style>
<html>
    <header>
        <title>My Timesheet</title>
    </header>
    <body style="background-color:BED2E5;">

    <div class="navbar">
        <div class="appli">
                <a style="margin : 0 0 0 1%">Home</a>
        </div>
        <ul>
            <li><button class="button"><img src="search.png" height ="25" width="25" /></li>
            <li><button class="button"><img src="notification.png" height ="25" width="25" /></button></li>
            <li><button class="button"><img src="user.png" height ="25" width="25" /></button></li>
        </ul>
    </div>
    <div class = "appname">
        <a>My Home</a>
    </div>
    <div class="allapp">
        <div class="mytimesheet">
            <a href =?controller=timesheet&action=myTimesheet&staff_id=STF01>My Timesheet</a>
            <button class="mybutton" id="mybutton" >My Timesheet</button>
        </div>
    </div>
    <script>
        const date = new Date();
        var m =date.getMonth()+1 ;
        var y =date.getFullYear() ;
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
        
        //document.querySelector(".mytimesheet p").innerHTML = m;
        //document.querySelector(".mytimesheet h").innerHTML = y;
        }
        document.querySelector(".mybutton").addEventListener("click", () => {
            href ='?controller=timesheet&action=myTimesheet&staff_id=STF02';
            location.href = this.href+'&m='+m +'&y='+y ;
        });
        renderCalendar();
    </script>
    </body>
</html>