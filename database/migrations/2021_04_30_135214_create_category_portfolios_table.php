<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('parent_id')->default(0);
            $table->timestamps();
        });

        Schema::create('category_portfolio_portfolio', function (Blueprint $table) {
            $table->unsignedBigInteger('category_portfolio_id');
            $table->foreign('category_portfolio_id')->references('id')->on('category_portfolios')->onDelete('cascade');

            $table->unsignedBigInteger('portfolio_id');
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');

            $table->primary(['category_portfolio_id' , 'portfolio_id'] ,'cat_port_id_port');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_portfolio_portfolio');
        Schema::dropIfExists('category_portfolios');
    }
}
