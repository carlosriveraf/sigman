<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        }); */
        Schema::create('users', function (Blueprint $table) {
            $table->string('DNI', 8)->collation('utf8mb4_unicode_ci');
            $table->string('password')->collation('utf8mb4_unicode_ci');
            $table->rememberToken();
            $table->string('apellidoPaterno', 30)->collation('utf8mb4_unicode_ci');
            $table->string('apellidoMaterno', 30)->collation('utf8mb4_unicode_ci');
            $table->string('nombres', 40);
            $table->date('fechaNacimiento');
            $table->char('sexo', 1)->collation('utf8mb4_unicode_ci');
            $table->string('telefono', 7)->collation('utf8mb4_unicode_ci');
            $table->string('celular', 9)->collation('utf8mb4_unicode_ci');
            $table->string('email')->collation('utf8mb4_unicode_ci');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('direccion')->collation('utf8mb4_unicode_ci');
            $table->timestamps();

            $table->primary('DNI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
