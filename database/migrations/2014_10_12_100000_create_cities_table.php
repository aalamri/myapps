<?php
/**
 * Created by PhpStorm.
 * User: aalamri
 * Date: 1/31/18
 * Time: 9:58 AM
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

    public function up()
    {
        Schema::create('cities', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->unique();
            $table->integer('country_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('cities');
    }
}
