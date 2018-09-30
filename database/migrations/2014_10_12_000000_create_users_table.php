<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telepon');
            $table->string('provinsi');
            $table->text('alamat');
            $table->string('password');
            $table->enum('role', ['admin', 'dkp'])->default('dkp');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
          [
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('katakunci'),
            'telepon' => 'NaN',
            'provinsi' => 'NaN',
            'alamat' => 'NaN',
            'role' => 'admin',
          ],
          [
            'name' => 'DKP Jateng',
            'email' => 'jateng@mail.com',
            'password' => bcrypt('katakunci'),
            'telepon' => '123-456-789',
            'provinsi' => 'Jawa Tengah',
            'alamat' => 'Alamat DKP Jawa Tengah',
            'role' => 'dkp',
          ]
        ]);
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
