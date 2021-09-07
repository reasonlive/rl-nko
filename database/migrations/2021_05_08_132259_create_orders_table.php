<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name', 50)->nullable();
            $table->integer('parent_age')->nullable();
            $table->boolean('parent_sex')->nullable();
            $table->string('child_name');
            $table->integer('child_age');
            $table->boolean('child_sex');
            $table->text('issue');
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->timestamp('created_at')->useCurrent();
            $table->boolean('closed')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
