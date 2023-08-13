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
        Schema::disableForeignKeyConstraints();
        Schema::table('notifications', function (Blueprint $table) {

            $table->dropForeign(['invite_id']);
            $table->dropColumn('invite_id');
            // $table->renameColumn('invite_id','event_user_id');
            $table->foreignId('event_user_id')->constrained('event_user');

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notifications', function (Blueprint $table) {
            //
        });
    }
};
