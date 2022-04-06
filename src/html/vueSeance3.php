<?php

namespace game\html;

use game\models\Game;

class vueSeance3
{
    public function getQuestion1(){
        $fin = microtime(true);
        echo $fin-$début."secondes" ;
        
        $début = microtime(true);
        $sceance34 = Game::select('*')->where('name','like','Mario%')->get();
        foreach ($sceance34 as $info){
        
            $r = $info->character;
            $nb = $r->count();
            if($nb >= 3) {
                echo'nom du jeu : '.$info->name."<br>";
                foreach ($r as $value) {
                    echo ' Nom des personnages : ' . $value->name . "<br>";
                }
            }
        }
        
       
        
    }

    public function getQuestion2(){
        $fin = microtime(true);
        echo $fin-$début."secondes" ;

    $sceancePartie21 = Game::select('*')->where('name','like','Mario%') ->get();
    $sceancePartie22 = Game::select('*')->where('name','like','Mario%') ->get();
    $sceancePartie23 = Game::select('*')->where('name','like','Mario%') ->get();
        Game::table('name', function (Blueprint $table) {
        $table->index([DB::raw('(ARRAY[column1, column2])')], 'the_index')->algorithm('btree');
        
        });
//pas d'index mais le principe est compris
    }

}