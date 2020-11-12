<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $priorities = ['general', 'low', 'moderate', 'high'];

        Schema::create('tasks', function (Blueprint $table) use ($priorities) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('completed')->default(false);
            $table->enum('priority', $priorities)->nullable();
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

