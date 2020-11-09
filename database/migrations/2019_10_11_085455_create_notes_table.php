<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('note_type');
            $table->date('applies_to_date');
            $table->integer('users_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->timestamps();
        });
        Schema::create($tableNames['bloodbank'], function (Blueprint $table) {
            $table->bigIncrements('ID_BLOOD');
            $table->string('ID_ADMIN');
            $table->string('STOCK');
            $table->string('USER_BLOODTYPES');
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
        Schema::dropIfExists('notes');
    }
}
