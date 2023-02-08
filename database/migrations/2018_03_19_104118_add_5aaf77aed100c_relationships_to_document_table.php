<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5aaf77aed100cRelationshipsToDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents', function(Blueprint $table) {
            if (!Schema::hasColumn('documents', 'property_id')) {
                $table->integer('property_id')->unsigned()->nullable();
                $table->foreign('property_id', '132512_5aaf7734be04b')->references('id')->on('properties')->onDelete('cascade');
                }
                if (!Schema::hasColumn('documents', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '132512_5aaf77ac61a3c')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function(Blueprint $table) {
            
        });
    }
}
