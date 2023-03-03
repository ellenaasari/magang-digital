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
        Schema::create('data_magangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nis')->references('nis')->on('users');
            $table->foreignId('magang_id')->constrained('magangs');
            $table->boolean('is_accepted')->default(false);
            $table->timestamps();
        });
        // Schema::create('daftars', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('nis');
        //     $table->foreign('nis')->references('nis')->on('users');
        //     $table->foreignId('extracurricular_id')->constrained('extracurriculars');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_magang');
    }
};
