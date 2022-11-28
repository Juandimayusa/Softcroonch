<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->Collation='utf-8mb4_unicode_ci';

            $table->id();
            $table->string('Nombre');
            $table->string('Email');
            $table->string('Nit');
            $table->string('Telefono');
            $table->string('Direccion');
            
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
