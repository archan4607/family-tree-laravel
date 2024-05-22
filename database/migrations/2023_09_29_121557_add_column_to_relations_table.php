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
        Schema::table('relations', function (Blueprint $table) {
            $table->enum('is_request',['0','1'])->comment(' 0 = No, 1 = Yes')->default(0)->after('rel_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('relations', function (Blueprint $table) {
            //
        });
    }
};
