<?php

class Tournament extends \Eloquent
{

    public function seasons()
    {
        return $this->hasMany('Season');
    }

}
