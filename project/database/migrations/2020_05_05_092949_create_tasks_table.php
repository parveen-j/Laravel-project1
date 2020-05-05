<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('project_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->integer('days')->unsigned()->nullable();
            $table->integer('hours')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('project');
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('tasks');
    }
}
