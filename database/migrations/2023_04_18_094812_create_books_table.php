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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->string('genre')->nullable();
            $table->text('description')->nullable();
            $table->string('isbn')->nullable();
            $table->text('image')->nullable();
            $table->date('published')->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => BooksSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
