<?php

namespace game\html;

class vueSeance2 {
    public function getQuestion1($l){
        echo "<h2>Question 1 :</h2>";
        echo "NOM DU JEU : " . $l->name;
        $r = $l->character()->get();
        echo "<br> <br> PERSOS : <br>";
        foreach($r as $value){
            echo 'id : ' . $value->id . ' name : ' .$value->name . ' deck : ' . $value->deck ."<br>" ;
        }
    }

    public function getQuestion2($l){
        echo "<h2>Question 2 :</h2>";
        foreach ($l as $info) {
            echo 'Nom du jeu : ' . $info->name . "<br>";
            $r = $info->character;
            foreach ($r as $value) {
                echo ' Nom du personnage : ' . $value->name . "<br>";
            }
        }
    }

    public function getQuestion3($l){
        echo "<h2>Question 3 :</h2>";
        foreach ($l as $info) {
            echo 'Nom de la compagnie : ' . $info->name . $info->id. "<br>";
            $r = $info->game_developpers() ->get();
            foreach ($r as $value){
                $name =$value->name;
                echo ' Nom des jeux : ' . $name ."<br>" ;
            }
        }
    }


}