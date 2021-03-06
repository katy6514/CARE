<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way
            $table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps();

            # The rest of the fields...
            $table->string('name');
            $table->string('sex');
            $table->string('sub_species'); // tiger, lion, bobcat...
            $table->text('bio'); // numbers?
            $table->string('enclosure'); // numbers? Letters?
            $table->string('image');
            $table->date('birth_date');
            $table->date('care_date'); // date they came to CARE
            $table->date('rainbow_date'); // date of passing

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animals');
    }
}
