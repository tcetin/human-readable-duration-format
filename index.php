<?php

function format_duration($seconds) {
  
if($seconds === 0) return "now";
  
  
  $years = floor($seconds/(3600*24*365));
  $seconds -= $years*(3600*24*365);


  $days = floor($seconds/(3600*24));
  $seconds -= $days * 3600*24;
  
  $hours = floor($seconds/(60*60));
  $seconds -=$hours*60*60;
  
  $minutes = floor($seconds/60);
  $seconds -= $minutes*60;
  
  $values = array(
    ["value"=>$years,"text"=>"year"],
    ["value"=>$days,"text"=>"day"],
    ["value"=>$hours,"text"=>"hour"],
    ["value"=>$minutes,"text"=>"minute"],
    ["value"=>$seconds,"text"=>"second"]
);

  
$result = array();
		
for($i=0;$i<count($values);$i++){
 
  
  if($values[$i]["value"]>0){
      
    if($values[$i]["value"]>1){
         if(count($values)-1===$i){
            $result[]=" and ";
        }
        
    }
      
    $result[]= $values[$i]["value"]." ".$values[$i]["text"];
    if($values[$i]["value"]>1){
      $result[]="s";
    }
    
    if($values[$i]["value"]>1){
    if(count($values)-2!==$i && count($values)-1!==$i){
        $result[]=", ";
    }
    }
  }
  

}
  
  return implode("",$result);
  
  
  
}
