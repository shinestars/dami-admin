<?php
$callback=isset($_GET['jsonpcallback'])?$_GET['jsonpcallback']: "";
//$callback=$_GET['callback'];默认是callback
 $users=[
  	['name'=>'tom','role'=>'admin'],['name'=>'jerry','role'=>'user']
  ];
if($callback!=''){
  //jsonp_callback(json_encode($users));
   //echo json_encode($users);
   echo $callback.'('.json_encode($users).')';
}else{

    echo json_encode($users);
}

