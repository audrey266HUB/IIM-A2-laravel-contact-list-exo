<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( table: 'contacts', function (Blueprint $table) {
            $table->string( column: 'name', length: 255);
            $table->string( column: 'tel', length: 255);
            $table->string( column: 'mail', length: 255);
            $table->bigIncrements( column:'id');
          
         $table->unsignedBigInteger(column: 'user_id');
         $table->foreign( columns: 'user_id')
               ->references( columns: 'id')->on( table: 'users')
               ->onDelete( action: 'cascade');

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
        Schema::dropIfExists('contacts');
    }
}
