<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function(BluePrint $tabla) {
            $tabla->id();
            $tabla->string('titulo');
            $tabla->string('text');
            $tabla->timestamps();
});
}

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
