<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('ekskul');
            $table->string('title');
            $table->text('description');
            $table->string('file');
            $table->string('acc_pembina')->default('PENDING');
            $table->string('acc_kesiswaan')->default('PENDING');
            $table->text('revisi_pembina')->default('-');
            $table->text('revisi_kesiswaan')->default('-');
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
        Schema::dropIfExists('proposals');
    }
}
