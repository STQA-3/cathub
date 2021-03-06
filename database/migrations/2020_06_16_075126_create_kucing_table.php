<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKucingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kucing', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kucing');
            $table->string('jenis_kelamin');
            $table->longText('deskripsi');
            $table->boolean('is_adopted');
            $table->boolean('is_approved');
            
            $table->softDeletes();
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
        Schema::dropIfExists('kucing');
    }
}
