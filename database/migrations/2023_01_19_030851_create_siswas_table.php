<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer("angkatan");
            $table->integer("absen");
            $table->string("kelas");
            $table->date("tanggal_lahir");
            $table->string("tempat_lahir");
            $table->string("nama_siswa");
            $table->string("jurusan");
            $table->boolean("kelamin");
            $table->integer("nisn")->unique();
            $table->integer("nis")->unique();
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
        Schema::dropIfExists('siswas');
    }
}
