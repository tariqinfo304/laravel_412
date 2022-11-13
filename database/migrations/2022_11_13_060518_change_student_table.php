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
        Schema::table("student",function(Blueprint $table){

            $table->string("name","255")->change();
            $table->renameColumn('age', 'person_age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("student",function(Blueprint $table){

            $table->string("name","50")->change();
            $table->renameColumn('person_age', 'age');
        });
    }
};
