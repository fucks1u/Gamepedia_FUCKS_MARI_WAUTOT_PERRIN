<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use game\models\Game;
use game\models\Company;
use game\controller\Controller;

require __DIR__ .'/vendor/autoload.php'; //utilsation du chemin pour les require
require __DIR__ .'/src/conf/conf.php';

boot_eloquent(__DIR__ . '/src/conf/conf.ini');

$c = new \Slim\Container(['settings'=>[
    'displayErrorDetails'=>true
]]);

$app = new \Slim\App($c);


/*
 */
$app->get('/', function (Request $request, Response $response, array $args) {
    $c = new Controller($this);
    return $c->getIndex($request,$response,$args);
});

$app->get('/seance1', function (Request $request, Response $response, array $args) {
    $c = new Controller($this);
    return $c->getSeance1($request,$response,$args);
});

$app->get('/seance2', function (Request $request, Response $response, array $args) {
    $c = new Controller($this);
    return $c->getSeance2($request,$response,$args);
});

$app->get('/seance3', function (Request $request, Response $response, array $args) {
    $c = new Controller($this);
    return $c->getSeance3($request,$response,$args);
});


$app->get('/seance4', function (Request $request, Response $response, array $args) {
    $c = new Controller($this);
    return $c->getSeance4($request,$response,$args);
});






$app->run();

/*
 * a faire : aspect visuel de la page d'acceuil
 */

