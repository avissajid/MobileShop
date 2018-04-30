<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model_name');
    
             $table->unsignedInteger('brand_id');

            $table->foreign('brand_id')->references('id')->on('brands');

            
             $table->unsignedInteger('cat_id');

            $table->foreign('cat_id')->references('id')->on('categories');
          
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
        Schema::dropIfExists('model_numbers');
    }
}
