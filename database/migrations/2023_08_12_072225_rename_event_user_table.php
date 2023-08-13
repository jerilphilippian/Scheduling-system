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
        Schema::rename('invites','event_user');

        Schema::disableForeignKeyConstraints();
        Schema::table('event_user', function (Blueprint $table) {

            $table->dropForeign('invites_event_id_foreign');
            $table->dropForeign('invites_user_id_foreign');
            // $table->dropColumn('event_id');
            $table->foreignId('event_id')->change()->constrained('events');
            $table->foreignId('user_id')->change()->constrained('users');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('event_user','invites');
    }
};
