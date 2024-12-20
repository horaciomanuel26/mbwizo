<?php

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('vc_foto_perfil', 2048)->nullable()->after('profile_photo_path');
            $table->date('dt_data_nascimento')->nullable()->after('vc_foto_perfil');
            $table->text('tl_biografia')->nullable()->after('dt_data_nascimento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['vc_foto_perfil', 'dt_data_nascimento', 'tl_biografia']);
        });
    }
};
