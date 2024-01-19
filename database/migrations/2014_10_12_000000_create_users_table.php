<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->string('password');
            $table->string('foto')->default('default.png');
            $table->enum('level', ['asisten', 'mahasiswa', 'admin'])->default('mahasiswa');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->nim = '20024014052';
        $user->nama = 'Imam Ashari. s';
        $user->email = 'mr.krab2811@gmail.com';
        $user->no_hp = '085254254252565';
        $user->password = bcrypt('12345');
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
