<?php

namespace game\models;

class Theme extends \Illuminate\Database\Eloquent\Model
{
    protected $table='theme';
    protected $primaryKey='id';

    public function game() {
        return $this->belongsToMany('game\models\Game',
            'game2theme','theme_id','game_id');
    }
}

