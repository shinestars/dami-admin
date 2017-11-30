<?php
//添加一个cors的响应头
header('Access-Control-Allow-Origin:http://localhost:8000');
 $users=[
  	['name'=>'tom2','role'=>'admin'],['name'=>'jerry2','role'=>'user']
  ];


    echo json_encode($users);

