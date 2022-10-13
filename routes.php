<?php


$controllers = array('pages'=>['home','error'],'timesheet'=>['myTimesheet','addTimesheet']) ; 



function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; 
                        break ;

        case "timesheet" :  require_once("models/log.php");
                            $controller = new TimesheetController() ; break ;

       
    }
    $controller->{$action}(); 
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action) ;
    }else{
        call('page','error') ;
    }
}else
{    call('page','error') ;}
?>