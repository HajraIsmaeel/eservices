<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use App\Http\Controllers\AddcompanyController;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcompanies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->mediumText('image')->nullable();
            $table->string('address');
            $table->bigInteger('contact');
            $table->string('website');
            $table->string('email');     
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
        Schema::dropIfExists('addcompanies');
    }
};
