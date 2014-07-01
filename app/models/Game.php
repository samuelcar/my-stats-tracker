<?php

class Game extends \Eloquent
{

    public function homeTeam()
    {
        return $this->belongsTo('Team', 'team_home');
    }

    public function awayTeam()
    {
        return $this->belongsTo('Team', 'team_away');
    }

    public function season()
    {
        return $this->belongsTo('Season');
    }

}
