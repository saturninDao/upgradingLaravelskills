<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArticleCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('article_category', function ($table) {  
  
            $table->unsignedBigInteger('article_id')  
                  ->index();  
            $table->foreign('article_id')  
                  ->references('id')  
                  ->on('articles')
                  ->onDelete('cascade');  
  
            $table->unsignedBigInteger('category_id')   
                  ->index();  
            $table->foreign('category_id')  
                  ->references('id')  
                  ->on('categories')  
                  ->onDelete('cascade');  
  
            $table->primary(['article_id', 'category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_article_category');
    }
}
