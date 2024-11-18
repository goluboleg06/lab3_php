<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('title');
            $table->integer('employees');
            $table->string('industry');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
}
