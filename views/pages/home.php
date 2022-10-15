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
.navbar p{
    position: absolute;
    top : 35% ;
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
.appname {
    position: fixed ;
    top: 8%;
    width: 100%;
    height: 8%;
    left: 0px;
    background: #BED2E5;
    z-index: 0;
    
}
.appname a {
    position: absolute;
    left: 8%;
    top: 50%; 
    transform: translateY(-50%);

    font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size : 30px;
    font-weight: 400;
    color : #514C4C ; 
}
.allapp{
    display : flex ;
    justify-content :flex-start ;
    position: fixed ;
    top: 16%;
    width: 100%;
    height: 84%;
    left: 0px;
    background: #BED2E5;
}
.mybutton {
  height : 150px;
  width : 150px;
  background-color: #E8E6E6;
  border-radius: 2px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #514C4C;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 18px;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  padding: 16px 20px;
  position: relative;
  text-align: left;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}
.mybutton:hover {
  background-color: #C1CCD8;
  transform: translateY(-2px);
}
@media (min-width: 768px) {
  .mybutton {
    min-width: 150px;
    position: absolute;
    top: 5%;
    left: 5%;
  }
}
.mybutton a {
    position : absolute;
    top : 10%;
}
.mybutton p {
    position : absolute;
    top : 15%;
    color : #7E7C7C;
    font-size: 13;
}
.mybutton2 {
  height : 150px;
  width : 150px;
  background-color: #E8E6E6;
  border-radius: 2px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #514C4C;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 18px;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  padding: 16px 20px;
  position: relative;
  text-align: left;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}
.mybutton2:hover {
  background-color: #C1CCD8;
  transform: translateY(-2px);
}
@media (min-width: 768px) {
  .mybutton2 {
    min-width: 150px;
    position: absolute;
    top: 5%;
    left: 15%;
  }
}
.mybutton2 a {
    position : absolute;
    top : 10%;
}
.mybutton2 p {
    position : absolute;
    top : 15%;
    color : #7E7C7C;
    font-size: 13;
}

.mybutton3 {
  height : 150px;
  width : 150px;
  background-color: #E8E6E6;
  border-radius: 2px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #514C4C;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 18px;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  padding: 16px 20px;
  position: relative;
  text-align: left;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}
.mybutton3:hover {
  background-color: #C1CCD8;
  transform: translateY(-2px);
}
@media (min-width: 768px) {
  .mybutton3 {
    min-width: 150px;
    position: absolute;
    top: 5%;
    left: 25%;
  }
}
.mybutton3 a {
    position : absolute;
    top : 10%;
}
.mybutton3 p {
    position : absolute;
    top : 15%;
    color : #7E7C7C;
    font-size: 13;
}

.mybutton4 {
  height : 150px;
  width : 150px;
  background-color: #E8E6E6;
  border-radius: 2px;
  border: 0;
  box-shadow: rgba(1,60,136,.5) 0 -1px 3px 0 inset,rgba(0,44,97,.1) 0 3px 6px 0;
  box-sizing: border-box;
  color: #514C4C;
  cursor: pointer;
  display: inherit;
  font-family: "Space Grotesk",-apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 18px;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  padding: 16px 20px;
  position: relative;
  text-align: left;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  transition: all .2s cubic-bezier(.22, .61, .36, 1);
}
.mybutton4:hover {
  background-color: #C1CCD8;
  transform: translateY(-2px);
}
@media (min-width: 768px) {
  .mybutton4 {
    min-width: 150px;
    position: absolute;
    top: 5%;
    left: 35%;
  }
}
.mybutton4 a {
    position : absolute;
    top : 10%;
}
.mybutton4 p {
    position : absolute;
    top : 15%;
    color : #7E7C7C;
    font-size: 13;
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
                <button class ="back"><img src="home.png" height ="30" width="30" /></button>
            </div>
            <div class="n">
                <p style="margin : 0 0 0 1%">Home</p>
            </div>
            
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
            <button class="mybutton" role="button" id="mybutton" ><a>My Timesheet</a><p>Work Log</p></button>
        </div>
        <div class="mytimesheet">
            <button class="mybutton2" role="button" id="mybutton" ><a>TS Approve</a><p>Approve</p></button>
        </div>
        <div class="mytimesheet">
            <button class="mybutton3" role="button" id="mybutton" ><a>My Timeoff</a><p>Summary</p></button>
        </div>
        <div class="mytimesheet">
            <button class="mybutton4" role="button" id="mybutton" ><a>Req. Timeoff</a><p>Create</p></button>
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