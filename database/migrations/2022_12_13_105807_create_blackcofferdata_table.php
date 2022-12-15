<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blackcofferdata', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Year');
            $table->integer('Intensity');
            $table->string('Sector');
            $table->string('Topic');
            $table->string('Insight');
            $table->string('url');
            $table->string('Region');
            $table->integer('Start_Year');
            $table->integer('Impact');
            $table->string('Added');
            $table->string('Published');
            $table->string('Country');
            $table->integer('Relevance');
            $table->text('description');
            $table->string('Source');
            $table->text('desc');
            $table->integer('likelihood');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blackcofferdata');
    }
};
