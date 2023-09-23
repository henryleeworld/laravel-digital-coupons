<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('codes', function (Blueprint $table) {
            $table->foreignId('coupon_id')->constrained();
            $table->unsignedBigInteger('reserved_by_id')->nullable();
            $table->foreign('reserved_by_id')->references('id')->on('users');
            $table->unsignedBigInteger('purchased_by_id')->nullable();
            $table->foreign('purchased_by_id')->references('id')->on('users');
        });
    }
};
