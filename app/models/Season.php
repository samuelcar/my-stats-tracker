<?php

class Season extends \Eloquent
{

    public function games()
    {
        return $this->hasMany('Game');
    }

    public function tournament()
    {
        return $this->belongsTo('Tournament');
    }
    
    public function teams()
    {
        return $this->belongsToMany('Team');
    }

}
