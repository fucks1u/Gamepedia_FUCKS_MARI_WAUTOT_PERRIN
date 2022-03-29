<?php

namespace game\html;

class vueSeance1{

    public function getQuestion1($l){
        echo "<h2>Question 1 :</h2>";
        foreach ($l as $info)
        {
            echo $info->name."<br>";
        }
    }

    public function getQuestion2($l){
        echo "<h2>Question 2 :</h2>";
        foreach ($l as $info)
        {
            echo $info->id . " " . $info->name."<br>";
        }
    }

    public function getQuestion3($l){
        echo "<h2>Question 3 :</h2>";
        foreach ($l as $info)
        {
            echo $info->id . " " . $info->name."<br>";
        }
    }

    public function getQuestion4($l){
        echo "<h2>Question 4 :</h2>";
        foreach ($l as $info)
        {
            echo $info->name."<br>";
        }
    }
    public function getQuestion5($l){
        echo "<h2>Question 5 :</h2>";
//        foreach ($l as $info)
//        {
//            echo $info."<br>";
//        }
        echo "<p>Aucune solution pour cette question, cependant vous pouvez regarder dans le code (class: Controller L33) pour visualiser notre solution incomplète.</p>";
    }

}