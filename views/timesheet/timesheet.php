<style>
.navbar {
    position: fixed ;
    top: 0;
    width: 100%;
    height: 10%;
    left: 0px;
    background: #BED2E5;
    z-index: 0;
}
.navbar ul{
    list-style: none;
    background : #BED2E5 ;
    padding : 0 ;
    margin : 0 ;
    position: absolute;
    top : 10%;
    right: 1%;
}

.navbar li{
    display : inline-block ;
}
.navbar button{
    border : none ;
    background : transparent ; 
    
}

</style>
<html>
    <header>
        <title> My Timesheet </title>
    </header>
    <body>
    <div class="navbar">
        <label><a>My Timesheet</a></label>
        <ul>
            <li><button class="button"> <img src="search.png" height ="25" width="25" /></button></li>
            <li><button class="button"> <img src="notification.png" height ="25" width="25" /></button></li>
            <li><button class="button"> <img src="user.png" height ="25" width="25" /></button></li>
            
        </ul>
    </div>

    
    </body>
</html>