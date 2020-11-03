<?php
/*permisos de acceso a la base datos*/
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
/*permisos terminados*/
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// POST ingresar formulario
$app->post('/api/calcular/suma/', function(Request $request, Response $response){


$p1=$request->getParam('p1');
$p2=$request->getParam('p2');
 $resultado=$p1+$p2;
  echo $resultado;
  
}); 
$app->post('/api/calcular/resta/', function(Request $request, Response $response){


$p1=$request->getParam('p1');
$p2=$request->getParam('p2');
 $resultado=$p1-$p2;
  echo $resultado;
  
});
$app->post('/api/calcular/multiplica/', function(Request $request, Response $response){


$p1=$request->getParam('p1');
$p2=$request->getParam('p2');
 $resultado=$p1*$p2;
  echo $resultado;
  
}); 
$app->post('/api/calcular/divide/', function(Request $request, Response $response){


$p1=$request->getParam('p1');
$p2=$request->getParam('p2');
 if($p2==0) $resultado="No existe un numero divisible por 0";
 else $resultado=$p1/$p2;
  
  echo $resultado;
  
}); 

