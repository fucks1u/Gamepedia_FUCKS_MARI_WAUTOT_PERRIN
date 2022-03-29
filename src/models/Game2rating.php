<?php

namespace game\models;

class Game2rating extends \Illuminate\Database\Eloquent\Model
{
    protected $table='game_rating';
    protected $primaryKey='id';

    public function rating_board() {
        return $this->belongsTo('game\models\Ratingboard',
            'rating_board_id');
    }
}