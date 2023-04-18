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
        Schema::create('companyprofiles', function (Blueprint $table) {
            $table->string('company_name');
            $table->string('Description');
            $table->string('Job_Type');
            $table->bigInteger('Salary');
            $table->string('Location');
            $table->string('Shift');
            $table->mediumText('Logo')->nullable();
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
        Schema::dropIfExists('companyprofiles');
    }
};
