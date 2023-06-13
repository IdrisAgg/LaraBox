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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("date");
            $table->string("horaire");
            $table->foreignId("item_id")->nullable()->constrained("items","id")->onDelete("cascade");
            $table->foreignId("resto_id")->constrained("restaurents","id")->onDelete("cascade");
            $table->foreignId("user_id")->constrained("users","id")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
