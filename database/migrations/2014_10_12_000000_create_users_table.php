<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->integer('type');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

      //$data = array("name" => "Ramón Guaicara Spluguez", "age" =>"57", "type"=>"1", "email"=>"ramon.guaicara@sbcglobal.net", "email_verified_at" => "ramon.guaicara@sbcglobal.net","password"=>Crypt::encryptString('Noen3._2023'));
      $password = '$2y$10$pqYKfc.LSHnmaqfduiTTfOYag59pI3F2ROKO/y8w5s90q2g4.b.2m';
      $data = array("name" => "Ramón Guaicara Spluguez", "age" =>"57", "type"=>"1", "email"=>"ramon.guaicara@sbcglobal.net", "email_verified_at" => "ramon.guaicara@sbcglobal.net","password"=>$password);
       User::create($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
