<?php

class Team extends \Eloquent
{
    public function homeGames()
    {
        return $this->hasMany('Game', 'team_home');
    }
    
    public function awayGames()
    {
        return $this->hasMany('Game', 'team_away');
    }
    
    public function seasons()
    {
        return $this->belongsToMany('Season');
    }
}
