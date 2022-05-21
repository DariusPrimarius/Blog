<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->index('id');
        });
        DB::table('cats')->insert(['name' => 'Adults',]);
        DB::table('cats')->insert(['name' => 'Passions',]);
        DB::table('cats')->insert(['name' => 'Health',]);
        DB::table('cats')->insert(['name' => 'Womans',]);
        DB::table('cats')->insert(['name' => 'Guys',]);
        DB::table('cats')->insert(['name' => 'Technology',]);
        DB::table('cats')->insert(['name' => 'Books',]);
        DB::table('cats')->insert(['name' => 'Movies',]);
        DB::table('cats')->insert(['name' => 'Foodie',]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
};
