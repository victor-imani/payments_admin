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
        Schema::create('bill_infos_tables', function (Blueprint $table) {
            $table->id();
            $table->string("brand_name");
            $table->string("brand_logo")->default((null));
            $table->integer("due")->default(0);
            $table->string("due_info")->default(null);
            $table->integer("brand_id")->default(0);
            $table->date("due_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_infos_tables');
    }
};
