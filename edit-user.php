<?php
//添加一个cors的响应头
header('Access-Control-Allow-Origin:http://localhost');
header('Access-Control-Allow-Headers:Content-Type');
 header('Access-Control-Allow-Methods',"POST,PUT,DELETE");
 $users=[
  	['name'=>'tom2','role'=>'admin'],['name'=>'jerry2','role'=>'user']
  ];
  //update   add
$action=$_GET['action'];
$us=json_decode(file_get_contents("php://input"),true);
// "string(28) "{"name":"78","role":"admin"}
	//通过file_get_contents得到参数,再用json_decode解码,设置true是通过键值对的方式解码;
	// $us=$_POST;
if ($action=="add") {
	   try{
	
	array_push($users,$us);
	echo json_encode(['success'=>true,'data'=>$users]);
	}catch(Exception $e) {
	echo json_encode(['success'=>false]);	
	}
}else{
	try{
		for ($i=0; $i < count($users); $i++) { 
			if ($users[$i]['name']==$us['name']) {
				$users[$i]=$us;
				exit(json_encode(['success'=>true,'data'=>$users]));
			}
		}
		echo json_encode(['success'=>false]);
	}catch(Exception $e) {
		echo json_encode(['success'=>false]);	
		}
}





