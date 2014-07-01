<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tournaments', function($table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->integer('num_teams');
            $table->timestamps();
        });

        Schema::create('seasons', function($table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('finish_date');
            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
            $table->timestamps();
        });
        
        Schema::create('teams', function($table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('abbr', 10);
            $table->string('logo', 255);
            $table->string('location', 255);
            $table->string('website', 255);
            $table->string('twitter', 255);
            $table->timestamps();
        });
        
        Schema::create('games', function($table) {
            $table->increments('id');
            $table->integer('team_home')->unsigned();
            $table->foreign('team_home')->references('id')->on('teams');
            $table->integer('team_away')->unsigned();
            $table->foreign('team_away')->references('id')->on('teams');
            $table->integer('score_home');
            $table->integer('score_away');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('tournaments');
        Schema::drop('seasons');
        Schema::drop('teams');
        Schema::drop('games');
    }

}
