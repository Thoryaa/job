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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobid');
            $table->string('desc');
            $table->unsignedBigInteger('companyid');
            $table->integer('workhour');

           $table->boolean('is_active')->default(0);
            $table->timestamps();
            $table->foreign('companyid')->references('id')->on('companies');
            $table->foreign('jobid')->references('id')->on('job_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
