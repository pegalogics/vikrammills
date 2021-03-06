<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateCustomersTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('customers', function (Blueprint $table) {
//             $table->bigIncrements('id');
//             $table->string('name');
//             $table->string('email')->unique();
//             $table->string('password');
//             $table->string('address')->nullable();
//             $table->string('phone')->nullable();
//             $table->string('city')->nullable();
//             $table->string('state')->nullable();
//             $table->string('zip')->nullable();
//             $table->string('country')->nullable();
//             $table->string('ip')->nullable();
//             $table->string('status')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('customers');
//     }
// }
