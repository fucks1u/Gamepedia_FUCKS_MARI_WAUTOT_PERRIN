<?php

namespace game\controller;

use game\html\vueIndex;

use game\models\Game;
use game\models\Company;
use game\models\Platform;
use game\html\vueSeance1;
use game\html\vueSeance2;
use game\html\vueSeance3;
use game\html\vueSeance4;
use wishlist\controller\DBException;
use \Psr\Http\Message\ResponseInterface as Response;

class Controller
{
    private $container;

    public function __construct(\Slim\Container $c){
        $this->container = $c;
    }

    public function getIndex($rq, $rs, $args) : Response{
        $v = new vueIndex();
        $rs->getBody()->write($v->render());
        return $rs;
    }

    public function getSeance1($rq,$rs,$args) : Response{
        $liste1 = Game::where('name', 'like', '%Mario%') ->get();
        $liste2 = Company::where('location_country','=', 'Japan') -> get();
        $liste3 = Platform::where('install_base','>=', '10000000') -> get();
        $liste4 = Game::take(442)->skip(21173)->get();
//        $liste5 = Game::paginate(
//            $perPage = 500, $columns = ['*'], $pageName = 'Game'
//        ); Question 5 ne fonctionne pas

        $v = new vueSeance1();
        $rs->getBody()->write($v->getQuestion1($liste1));
        $v->getQuestion2($liste2);
        $v->getQuestion3($liste3);
        $v->getQuestion4($liste4);
        $v->getQuestion5($liste4); //a remplacer par $liste5 quand sa fonctionne
        return $rs;


        /*

         */
    }

    public function getSeance2($rq,$rs,$args)
    {
        $question1 = Game::find(12342);
        $question2 = Game::select('*')->where('name', 'like', 'Mario%')->get();
        $question3 = Company::select('*')->where('name', 'like', '%Sony%')->get();

        $v = new vueSeance2();
        $v->getQuestion1($question1);
        $v->getQuestion2($question2);
        $v->getQuestion3($question3);

        return $rs;
    }

    public function getSeance3($rq,$rs,$args)
    {
        $v = new vueSeance3();
        $v->getQuestion1();
        $v->getQuestion2();
        return $rs;
    }

    public function getSeance4($rq,$rs,$args)
    {
        $v = new vueSeance4();

        $v->getQuestion1();
        return $rs;
    }



}