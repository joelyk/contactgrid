<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
     public function up()
     {
         Schema::create('contacts', function (Blueprint $table) {
             $table->id();
             $table->string('first_name');
             $table->string('last_name');
             $table->string('gender');
             $table->string('education_level');
             $table->string('field');
             $table->string('specialization')->nullable();
             $table->string('address');
             $table->string('phone_number');
             $table->string('email');
             $table->integer('age')->nullable();
             $table->string('interests');
             $table->text('career_project');
             $table->string('stage_requirements');
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
        Schema::dropIfExists('contacts');
    }
}
