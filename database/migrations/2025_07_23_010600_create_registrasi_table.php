<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

Schema::create('registrasi', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('nama_bisnis');
    $table->string('no_telpon');
    $table->text('Addres');
    $table->timestamps();
});
