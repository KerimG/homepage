<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->text('text');
            $table->timestamp('creation_date');
            $table->timestamp('last_modified');
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
        Schema::dropIfExists('blog_entries');
    }
}
