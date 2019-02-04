<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->nullable();
            $table->index(['country_id']);
            $table->string('name',100);
            $table->string('phone',30)->nullable();
            $table->string('fax',30)->nullable();
            $table->string('email',30)->nullable();
            $table->string('province',30)->nullable();
            $table->string('city',30)->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('street_one',100)->nullable();
            $table->string('street_two',100)->nullable();
            $table->string('note',255)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
