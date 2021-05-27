<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->datetime('match_date');
            $table->unsignedBigInteger('local_team_id');
            $table->foreign('local_team_id')->references('id')->on('teams');   
            $table->integer('local_goal')->nullable();
            $table->unsignedBigInteger('visit_team_id');
            $table->foreign('visit_team_id')->references('id')->on('teams');   
            $table->integer('visit_goal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchs');
    }
}
